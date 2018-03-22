<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
  public function index(){
  	$clients = Client::orderBy('created_at', 'desc')->get();
  	return view('clients.index', compact('clients'));
  }

  public function create(){
  	return view('clients.new');
  }

  public function store(Request $request){

  	$request->validate([
    	'first_name' => 'required',
    	'last_name' => 'required',
    	'email' => 'required|unique:clients|email',
    	'telephone' => 'required'
		]);	

		$client = new Client;
		$client->first_name = $request->first_name;
		$client->last_name = $request->last_name;
		$client->email = $request->email;
		$client->telephone = $request->telephone;
		$client->save();

		$message = 'Cliente agregado correctamente.';

		return redirect()->route('clients.index')->with('message', $message);
	}

	public function edit(Client $client)
  {
    return view('clients.edit', compact('client'));
  }

  public function update(Request $request, $id)
  {

  	$request->validate([
    	'first_name' => 'required',
    	'last_name' => 'required',
    	'telephone' => 'required'
		]);	

		$client = Client::find($id);
		$client->first_name = $request->first_name;
		$client->last_name = $request->last_name;
		$client->email = $request->email;
		$client->telephone = $request->telephone;
		$client->save();

		$message = 'Cliente editado correctamente.';

		return redirect()->route('clients.index')->with('message', $message);
	}

	public function destroy($id)
  {
    $client = Client::find($id);
    $client->delete();
    $message = 'Cliente Eliminado correctamente.';

    return redirect()->route('clients.index')->with('message', $message);
  }
}
