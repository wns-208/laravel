<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContatoModel;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ContatoModel::factory()->count(100)->create();

        // $contato = new ContatoModel();
        // $contato->nome = 'Paulinho';
        // $contato->email = 'Paulinho@gmail.com';
        // $contato->save();
    }
}
