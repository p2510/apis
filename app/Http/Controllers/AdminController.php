<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    // init middleware 
 public function __construct()
 {
     $this->middleware("isLogin")->except("index","login");
 }

 // methods 

    public function index()
    {
        return Inertia::render("Admin/Login");
    }
    public function login(Request $request)
    {
        $data=$request->validate([
            "name"=>["required","string","min:4","max:50","regex:/^[a-z0-9 ]{4,50}$/i"],
            "password"=>["required","string","min:8","max:50","regex:/^[a-z0-9 ]{4,50}$/i"]
        ]);

        if ($data["name"]=="apis2022" && $data["password"]=="01233378marie" ) {
           session()->put("name",$data["name"]);
           session()->put("password",$data["password"]);
           return Inertia::render("Admin/Home");

        }else {
            return Inertia::render("Admin/Login");
        }

        
    }
   

    // home admin

    public function home()
    {
        $data=House::all();
        return Inertia::render("Admin/Home",[
            "data"=>$data,
            
        ]);
        
    }
    // create house

    public function create()
    {
        return Inertia::render("Admin/Create");
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            "name"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "city"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "tel"=>["required","string","max:20","min:8","regex:/^[0-9 +]{8,20}$/"],
            "chambre"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "salon"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "douche"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "cuisine"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "price"=>["required","integer","regex:/^[0-9]{1,50}$/i"],
            "mode"=>["required"],
            "description"=>["required","min:50"],
            "photo"=>["required","image"]

        ]);
        $data["photo"]=$data["photo"]->store("photo","public");
        //$data["photo"]->store("photo","public");
        House::create($data);


        return redirect()->route("admin.home")->with([
            "successCreate"=>"Bravo , Vous avez ajouté un nouveau appartement avec succès."
        ]);
    }

    public function edit($id)
    {
 
        $data=House::findOrFail($id);
        return Inertia::render("Admin/Edit",[
            "data"=>$data
        ]);
        
    }

    public function Update(Request $request)
    {
        $data=$request->validate([
            "id"=>["required"],
            "name"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "city"=>["required","string","min:4","max:50","regex:/^[a-z ]{4,50}$/i"],
            "tel"=>["required","string","max:20","min:8","regex:/^[0-9 +]{8,20}$/"],
            "chambre"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "salon"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "douche"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "cuisine"=>["required","integer","regex:/^[0-9]{1,5}$/i"],
            "price"=>["required","integer","regex:/^[0-9]{1,50}$/i"],
            "mode"=>["required"],
            "description"=>["required","min:50"],     

        ]);

        $getHouse=House::findOrFail($data["id"]);

        $getHouse["name"]=$data["name"];
        $getHouse["city"]=$data["city"];
        $getHouse["tel"]=$data["tel"];
        $getHouse["chambre"]=$data["chambre"];
        $getHouse["salon"]=$data["salon"];
        $getHouse["douche"]=$data["douche"];
        $getHouse["cuisine"]=$data["cuisine"];
        $getHouse["price"]=$data["price"];
        $getHouse["mode"]=$data["mode"];
        $getHouse["description"]=$data["description"];

        $getHouse->save();
        
        return redirect()->route("admin.home")->with([
            "successCreate"=>"Bravo , Mise à jour éffectué avec succès"
        ]);

    }

    // destroy 

    public function destroy( $id)
    {
        $getHouse=House::findOrFail( $id);
        
         Storage::delete("public/".$getHouse->photo);
        House::destroy($id);
        return redirect()->back();

    }

    // logout 

    public function logout()
    {
        session()->forget('name');
        session()->forget('password');
        return Inertia::render("Admin/Login");
    }
}
