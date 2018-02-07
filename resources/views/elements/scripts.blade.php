<script>

    // WELCOME NOTIFICATIONS
    // =================================================================
    // Require Admin Core Javascript
    // =================================================================
    var fvisit  = setTimeout(function(){
        $.niftyNoty({
            type: 'dark',
            title: 'Bem vindo, {{ Auth::user()->name }}!',
            message: 'Este sistema está em fase BETA.<br>' +
            'Muitas coisas podem estar faltando ou quebradas.<br>' +
            'Por favor comunique-nos caso veja algo errado.',
            container: 'floating',
            timer: 5500
        });
        clearTimeout(fvisit);
    }, 3000);

    // BOOTBOX - FLIP IN/OUT ANIMATION
    // =================================================================
    // Require Bootbox
    // http://bootboxjs.com/
    //
    // Animate.css
    // http://daneden.github.io/animate.css/
    // =================================================================
    $('#user-settings').on('click', function(){
        bootbox.confirm({
            message : "<h2 class='text-thin'>Settings</h2><br>" +
            "<h4>Hitbtc API</h4>" +
            "<p>Para utilizar as ferramentas do <b>CriptoNinja</b>, você deve gerar suas credenciais na API da <b>Hitbtc</b>, acessando o sistema deles por:</p>" +
            "<p> Hitbtc > Settings > API Keys > New API Key.</p>" +
            "<p>Em seguida, coloque aqui as credenciais:</p>" +
            "<p><div class='panel-body'>" +
                "<div class='form-group'>" +
                "<label class='col-sm-3 control-label' for='demo-hor-inputemail'>Public Key</label>" +
                "<div class='col-sm-9'>" +
                "<input type='text' id='user-public-key' class='form-control' value='{{ $user->hitbtc_public_key }}'>" +
                "</div></div>" +
                "<div class='form-group'>" +
                "<label class='col-sm-3 control-label' for='demo-hor-inputpass'>Secret Key</label>" +
                "<div class='col-sm-9'>" +
                "<input type='text' id='user-secret-key' class='form-control' value='{{ $user->hitbtc_private_key }}'>" +
                "</div></div></div></div></p>",
            buttons: {
                confirm: {
                    label: "Save"
                }
            },
            callback : function(result) {
                //Callback function here
                var public_key = $('#user-public-key').val();
                var secret_key = $('#user-secret-key').val();

                // save user info
                saveUserKeyInfo(public_key, secret_key);

            },
            animateIn: 'flipInX',
            animateOut : 'flipOutX'
        });
    });

    function saveUserKeyInfo(public, secret) {

        $.niftyNoty({
            type: 'info',
            icon : 'fa fa-info',
            message : 'Salvando dados...',
            container : 'floating',
            timer : 2200
        });

        $.ajax({
            url: "{{ route('users.saveKeys') }}",
            dataType: "html",
            type: "POST",
            data: {
                public_key: public,
                secret_key: secret,
                _token: '{{ csrf_token() }}',
            }
        }).done(function(data) {

            if (data) {
                $.niftyNoty({
                    type: 'success',
                    icon : 'fa fa-success',
                    message : 'Informações salvas com sucesso!',
                    container : 'floating',
                    timer : 2200
                });

                $.niftyNoty({
                    type: 'info',
                    icon : 'fa fa-info',
                    message : 'Colhetando informações da Hitbtc...',
                    container : 'floating',
                    timer : 4000
                });

                refreshUserAccount();
            }
        });

        function refreshUserAccount() {

            $.ajax({
                url: "{{ route('users.refreshAccount') }}",
                dataType: "html",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                }
            }).done(function(data) {

                $.niftyNoty({
                    type: 'success',
                    icon : 'fa fa-success',
                    message : 'Conta atualizada com sucesso!',
                    container : 'floating',
                    timer : 3000
                });

                setTimeout(function(){
                    location.reload();
                }, 1400);


            }).success(function(data){
                //console.log('succes');

            }).error(function(data){

                $.niftyNoty({
                    type: 'danger',
                    icon : 'fa fa-danger',
                    message : 'Ocorreu um erro ao atualizar a conta! <br> ' +
                    'Certifique-se de que suas credenciais estão corretas e que você deu as devidas permissões na configuração da API na Hitbtc!',
                    container : 'floating',
                    timer : 15000
                });
            });
        }
    }
</script>