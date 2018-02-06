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

</script>