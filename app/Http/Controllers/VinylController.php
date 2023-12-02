<?php

namespace App\Http\Controllers;

use App\Models\Vinyl;
use App\Models\Console;
use Illuminate\Http\Request;
use App\Http\Requests\VinylRequest;
use Illuminate\Support\Facades\Auth;

class VinylController extends Controller
{
    public function __construct(){
         $this->middleware('auth'); //!protegge tutti i metodi

        $this->middleware('auth')->only('create');//!protegge solo un metodo

        $this->middleware('auth')->except('index', 'show'); //protegge tutti i metodi tranne la index oppure le retto che desideri 
    }



    public function create(){
        $consoles = Console::all();
        return view('vinyl.create', compact('consoles'));
    }

    public function store(VinylRequest $request){
        

       /* $vinyl = new Vinyl(); 
       $vinyl->title = $request->title;
       $vinyl->artist = $request->artist;
       $vinyl->description = $request->description;
       $vinyl->price = $request->price;
       $vinyl->save();  */


       if(!$request->file('cover')){
            $img = 'default/default-image.jpg';
       }else {
            $img  = $request->file('cover')->store('public/covers');
       }


       $vinyl = Vinyl::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'description' => $request->description,
            'price' => $request->price,
            'cover' => $img,
            'user_id' => Auth::user()->id,
       ]);
      
       $vinyl->consoles()->attach($request->consoles);
       return redirect(route('vinyl.index'))->with('vinylCreated', 'Congratulation new Vinyl on the store');
    }

    public function index(){
        $vinyls = Vinyl::all();
        
        return view('vinyl.index', compact('vinyls'));

    }
}
