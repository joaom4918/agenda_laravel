<?php

namespace App\Http\Controllers;

use App\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
 
    
    public function adicionar(){


        return view('admin.atividades.adicionar');
    }


    public function salvar(Request $req){
    

        $dados=$req->all();

        Atividade::create($dados);

        return redirect()->route('admin.atividades.adicionar'); 

        
    }

    public function listar(){ 
        
        $registros=Atividade::all();
        return view('admin.atividades.lista_atividades',compact('registros'));

     
    }

    public function excluir(Request $req,$id){

        $dados=$req->all();

        Atividade::find($id)->delete($dados);

        return redirect()->route('site.home'); 
        
    }

    public function editar($id){

        $registro=Atividade::find($id);

        return view('admin.atividades.editar',compact('registro'));
    }

    public function atualizar (Request $req,$id){

        $dados=$req->all();
        Atividade::find($id)->update($dados);

        return redirect()->route('site.home');
    }

    public function relatorio(){

        $registros=Atividade::all();

        return view('admin.atividades.relatorio',compact('registros'));  
    }

}
