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

      $omino = new Omino;
      // $data = $request -> all();

      $validatedData = $request->validate([
        'first_name'   => 'required|alpha',
        'last_name'    => 'required|alpha',
        'address'      => 'required',
        'code'         => 'required',
        'state'        => 'required|',
        'phone_number' => 'required',
        'role'         => 'required|nullable'
      ]);

      $omino -> first_name =  $validatedData['first_name'];
      $omino -> last_name =   $validatedData['last_name'];
      $omino -> address =     $validatedData['address'];
      $omino -> code =        $validatedData['code'];
      $omino -> state =       $validatedData['state'];
      $omino -> phone_number = $validatedData['phone_number'];
      $omino -> role =        $validatedData['role'];

      $omino -> save();

      return redirect() -> route('home')
                          ->withSuccess($omino['first_name'] . ' created successfully!');

    }

    // ROTTA CHE PORTA ALLA PAGINA PER LA MODIFICA
    public function edit($id){
      $omino = Omino::findOrFail($id);

      return view('editPerson', compact('omino'));
    }

    // FUNZIONE CHE ATTUA LE MODIFICHE PASSATE DAL FORM
    public function update(Request $request, $id){
      $omino = Omino::findOrFail($id);
      // $data = $request -> all();
      $validatedData = $request->validate([
        'first_name'   => 'required|alpha',
        'last_name'    => 'required|alpha',
        'address'      => 'required',
        'code'         => 'required',
        'state'        => 'required|',
        'phone_number' => 'required',
        'role'         => 'required|nullable'
    ]);

      $omino -> first_name =  $validatedData['first_name'];
      $omino -> last_name =   $validatedData['last_name'];
      $omino -> address =     $validatedData['address'];
      $omino -> code =        $validatedData['code'];
      $omino -> state =       $validatedData['state'];
      $omino -> phone_number = $validatedData['phone_number'];
      $omino -> role =        $validatedData['role'];

      $omino -> save();

      return redirect() -> route('show', $id)
                          ->withSuccess($omino['first_name'] . ' updated successfully!');
    }


}
