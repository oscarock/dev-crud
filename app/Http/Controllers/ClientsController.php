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
		$client = new Client;
		$client->first_name = $request->first_name;
		$client->last_name = $request->last_name;
		$client->email = $request->email;
		$client->telephone = $request->telephone;
		$client->save();

		//return redirect('index');
  }
}
