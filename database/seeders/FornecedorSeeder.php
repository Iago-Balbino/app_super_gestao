<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'formecedor100.com.br';
        $fornecedor->uf = 'MA';
        $fornecedor->email = 'contatoF@hotmail.com';
        $fornecedor->save();

        //Utilizando o metodo create()  MELHOR FORMA
        //Necessita do métido $fillable no Model
        Fornecedor::create(
            [
                'nome'=>'Fornecedor 200',
                'site'=>'formecedor200.com.br',
                'uf'=>'RJ',
                'email'=>'contatoF2@hotmail.com'
            ]);
        
        //insert
        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor 300',
            'site'=>'formecedor300.com.br',
            'uf'=>'SP',
            'email'=>'contatoF3@hotmail.com'
        ]);
    }
}
