<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trial = \App\Plan::create([
            'title' => 'Trial',
            'short' => 'Iniciando em Criptomoedas',
            'word' => 'Aprendiz',
            'description' => 'Equivale à um primeiro mês de testes, onde você irá se familiarizar não só com o mercado de cripto,
                    como com o serviço que será prestado. Você terá direito a usufruir todas as informações e ferramentas, e também
                    terá sua carteira gerida por um especialista.',
            'price' => '5'
        ]);

        $consultoria_investidor = \App\Plan::create([
            'title' => 'Consultoria Investidor',
            'short' => 'Recebendo as Instruções',
            'word' => 'Investidor',
            'description' => 'No plano de consultoria investidor você irá usufruir de todas as ferramentas do CriptoNinja e de todo o conhecimento dos especialistas,
                        mas não terá sua carteira gerida por um especialista. Você mesmo que terá de fazer suas compras e vendas.',
            'price' => '8'
        ]);

        $consultoria_investidor = \App\Plan::create([
            'title' => 'Consultoria Minerador',
            'short' => 'Iniciando em Criptomoedas',
            'word' => 'Minerador',
            'description' => 'No plano de consultoria minerador você receberá ajuda personalizada de especialistas, a fim de montar o melhor set
                        de mineração de acordo com seu orçamento. Além de todo o material com informações fundamentais para um minerador,
                        você terá 1 reunião (call) por semana com nosso especialista, a fim de sanar suas todas suas dúvidas.',
            'price' => '8'
        ]);

        $trader = \App\Plan::create([
            'title' => 'Ninja',
            'short' => 'Todo Potencial',
            'word' => 'Ninja',
            'description' => 'É o plano completo, onde você não só irá usufruir de todas as ferramentas e informações dos especialistas,
                        mas também terá sua carteira gerenciada de perto. Os especialistas farão trades diários em sua conta a fim de se otimizar
                        os ganhos.',
            'price' => '12'
        ]);
    }
}
