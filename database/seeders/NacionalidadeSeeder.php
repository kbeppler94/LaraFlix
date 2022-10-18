<?php

namespace Database\Seeders;

use App\Models\Nacionalidade;
use Illuminate\Database\Seeder;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidade::create(['descricao' => 'Brasileiro(a)']);
        Nacionalidade::create(['descricao' => 'Espanhol(a)']);
        Nacionalidade::create(['descricao' => 'Italiano(a)']);
        Nacionalidade::create(['descricao' => 'Chinês(a)']);
    }
}
