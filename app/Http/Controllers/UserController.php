<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function home()
    {
        
        $source=[
            
            "img1"=>asset("storage/img/home_man.jpg"),"img2"=>asset("storage/img/home_woman.jpg"),"gif"=>asset("storage/img/main.gif"),
      
        ];

        return Inertia::render("Home",[
         "source"=>$source,
        ]);
    }
    public function services()

    {
       
        return Inertia::render("Services");
    }
    public function presentation()
    {
        
        $img=asset("storage/img/pdg.jpg");
        return Inertia::render("Presentation",[
            "img"=>$img,
           ]);
    }
    /*
    public function testimony()
    {
        return Inertia::render("Testimony");
    }
    */
    public function house()
    {
        $data=House::all();
        $img=asset("storage/img/backHouse.jpg");
        return Inertia::render("House",[
            "data"=>$data,
            "img"=>$img,
        ]);
    }
  
    public function faq()
    {
        return Inertia::render("Faq");
    }

    public function job()
    {  
        return Inertia::render("Job");
    }
    public function jobstore(Request $request)
    {
        $data=$request->validate([
            "name"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "surname"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "adresse"=>["required","string","min:8","max:100","regex:/^[a-z0-9 ]{8,50}$/i"],
            "tel"=>["required","string","max:20","min:8","regex:/^[0-9 +]{8,20}$/"],
            "choice"=>["required","string","max:50","regex:/^[a-z ]/i"],

        ]);
       Job::create($data);
        return redirect()->route("user.job")->with([
            "success"=>"Nous avons bien reçu votre demande , elle sera traité au plus tard dans les 24h minimum"
        ]);
        
    }

}
