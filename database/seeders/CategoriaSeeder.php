<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Ração',
            'descricao' => 'Rações para cães, gatos e outros animais.',
        ]);

        Categoria::create([
            'nome' => 'Brinquedos',
            'descricao' => 'Brinquedos para animais.',
        ]);

        Categoria::create([
            'nome' => 'Higiene',
            'descricao' => 'Produtos de higiene e limpeza.',
        ]);

        Categoria::create([
            'nome' => 'Acessórios',
            'descricao' => 'Coleiras, guias, camas e outros acessórios.',
        ]);
    }
}
