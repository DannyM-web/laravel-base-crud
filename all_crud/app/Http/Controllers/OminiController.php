<?php

namespace App\Http\Controllers;
use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{
    // FUNZIONE PER LA HOME -- STAMPA TUTTI I NOMI
    public function index(){
      $omini = Omino::all();

      return view('home', compact('omini'));
    }
    // FUNZIONE CHE STAMPA IL SINGOLO CLICCATO
    public function show($id){
      $omino = Omino::findOrFail($id);

      return view('showPerson', compact('omino'));
    }
    // DESTROY DELLA PERSONA DAL DATABASE/ FRONTEND
    public function delete($id){
      $omino = Omino::findOrFail($id);
      $omino -> delete();

      return redirect() -> route('home');
    }
    // MI RIPORTA ALLA PAGINA PER LA CREAZIONE
    public function create(){
      return view('createPerson');
    }
    // ATTUO LA CREAZIONE
    public function store(Request $request){

      $data = $request -> all();

      $omino = new Omino;

      $omino -> first_name = $data['first_name'];
      $omino -> last_name = $data['last_name'];
      $omino -> address = $data['address'];
      $omino -> code = $data['code'];
      $omino -> state = $data['state'];
      $omino -> phone_number = $data['phone_number'];
      $omino -> role = $data['role'];

      $omino -> save();

      return redirect() -> route('home');
    }

    public function edit($id){
      $omino = Omino::findOrFail($id);

      return view('editPerson', compact('omino'));
    }

    public function update(Request $request, $id){
      $omino = Omino::findOrFail($id);
      $data = $request -> all();

      $omino -> first_name = $data['first_name'];
      $omino -> last_name = $data['last_name'];
      $omino -> address = $data['address'];
      $omino -> code = $data['code'];
      $omino -> state = $data['state'];
      $omino -> phone_number = $data['phone_number'];
      $omino -> role = $data['role'];

      $omino -> save();

      return redirect() -> route('home');
    }


}
