<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;
use Illuminate\Support\Facades\DB;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(11) 9 1111-1111';
        $contato->email = 'contato@sg.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo';
        $contato->save();
    }
}
