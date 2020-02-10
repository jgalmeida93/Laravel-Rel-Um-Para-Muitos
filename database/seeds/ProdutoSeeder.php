<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            [
                'nome' => 'Camiseata Polo', 'preco' => 100,
                'estoque' => 4, 'categoria_id' => 1
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'Calça Jeans', 'preco' => 120,
                'estoque' => 3, 'categoria_id' => 1
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'Camisa manga longa', 'preco' => 80,
                'estoque' => 7, 'categoria_id' => 1
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'PC Gamer', 'preco' => 5000,
                'estoque' => 4, 'categoria_id' => 2
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'Impressora', 'preco' => 200,
                'estoque' => 8, 'categoria_id' => 6
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'Mouse', 'preco' => 100,
                'estoque' => 9, 'categoria_id' => 6
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'Paco Rabane', 'preco' => 100,
                'estoque' => 10, 'categoria_id' => 3
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'Cama de casal', 'preco' => 100,
                'estoque' => 10, 'categoria_id' => 4
            ]
            );
        DB::table('produtos')->insert(
            [
                'nome' => 'Guarda roupa', 'preco' => 100,
                'estoque' => 10, 'categoria_id' => 4
            ]
            );

            
    }
}
