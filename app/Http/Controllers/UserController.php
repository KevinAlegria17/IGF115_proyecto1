<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Exception;

class UserController extends Controller
{

	private $path='user';

    public function index(){
    	$users = User::all();
    	return view ('user.index', compact('users'));
    }

    public function create(){
    	
    	return view ('user.create');
    }

    public function store(Request $request){
    	try{
    		$user = User::create([
    			'name'=> $request->input('name'),
    			'email'=>$request->input('email'),
    			'password'=> bcrypt($request->input('password')),
    			]);
	    	return redirect()->route('usuariosLista');
        	}
        catch(Exception $e){
        	return "Fatal error - ".$e->getMessage();
        }

    }
    public function edit($id){
    	$user = User::findOrFail($id);
		return view ('user.edit', compact('user'));
    }
    
    public function update(Request $request, $id){
    	$user = User::findOrFail($id);
    	$password = $user->password;
    	if($request->password == null){
    		$password_to_insert = $password;
    	}else{
    		$password_to_insert = bcrypt($request->password);
    	}
    	try{
    		
    			$user->name = $request->input('name');
    			$user->email = $request->input('email');
    			$user->password = $password_to_insert;
    			$user->save();
	    	return redirect()->route('usuariosLista');
        	}
        catch(Exception $e){
        	return "Fatal error - ".$e->getMessage();
        }
    }
}
