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
}
