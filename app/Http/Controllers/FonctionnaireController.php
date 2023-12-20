<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fonctionnaire;

class FonctionnaireController extends Controller
{
    //
    public function afficher (){

        $fonctionnaires = Fonctionnaire::all();
        return view("project.list",compact("fonctionnaires"));
    }
    public function ajouter(){
        return view("project.add");
    }

    public function ajouterfunc(Request $request){
        $request->validate([
            "nom"=> "required",
            "prenom"=> "required",
            "age"=> "required",
        ]) ;
        $fonction = new Fonctionnaire(); 
        $fonction->nom=$request ->nom;
        $fonction->prenom=$request-> prenom;
        $fonction->age=$request ->age;
        
        $fonction->save();
        return redirect("/list")->with("status","c'ok");

    }
    public function supprimer($id){
        $fonctionnaires = Fonctionnaire::find($id);
        $fonctionnaires->delete(); 
        return redirect("/list");
    }

    public function voir($id, Request $request){
        $fonction= Fonctionnaire::find($id);
        return view("project.update", compact("fonction"));
    }

    public function modifier ( $id, Request $request){
        $request->validate([
            "nom"=> "required",
            "prenom"=> "required",
            "age"=> "required",
        ]);

        $fonc=Fonctionnaire::find($id);
        $fonc->nom= $request->nom;
        $fonc->prenom= $request->prenom;
        $fonc->age= $request->age;
        $fonc->save();

        return redirect("/list");
    }

    public function espacefonc(){
        
        return view("espacefonctionnaire.fonctionnaire");
    }

}
