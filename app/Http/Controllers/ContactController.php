<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Particular;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function contact()
    {
        
           $img=asset("storage/img/backContact.png");
      

        return Inertia::render("Contact",[
            "img"=>$img,
           ]);
    }
    // store a particular 
    public function storeParticular(Request $request)
    {


        $data=$request->validate([
            "name"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "surname"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "adresse"=>["required","string","min:8","max:100","regex:/^[a-z0-9 ]{8,50}$/i"],
            "tel"=>["required","string","max:20","min:8","regex:/^[0-9 +]{8,20}$/"],
            "choice"=>["required","string","max:50","regex:/^[a-z ]/i"],

        ]);
        Particular::create($data);
        
        return redirect()->route("user.contact")->with([
            "success"=>"Nous avons bien reçu votre demande , elle sera traité au plus tard dans les 24h . En cas de soucis veuillez contacter les numéros sur cette page."
        ]);
        
     

    }
     // store an Entreprise 
     public function storeEntreprise(Request $request)
     {
 
 
         $data=$request->validate([
             "name"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
             "adresse"=>["required","string","min:8","max:100","regex:/^[a-z0-9 ]{8,50}$/i"],
             "tel"=>["required","string","max:20","min:8","regex:/^[0-9 +]{8,20}$/"],
             "choice"=>["required","string","max:50","regex:/^[a-z ]/i"],
 
         ]);
         Entreprise::create($data);
         
         return redirect()->route("user.contact")->with([
             "success"=>"Nous avons bien reçu votre demande , elle sera traité au plus tard dans les 24h . En cas de soucis veuillez contacter les numéros sur cette page."
         ]);
      
 
     }

}
