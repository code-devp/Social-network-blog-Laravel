<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


   


	public function postSignUp(Request $request)
	{

// valiates email and password against the validation rules specified, checks whether email is valid email address
		$this->validate($request, [

			'email' => 'email|unique:users',
			'full_name' => 'required|max:120',
			'password' => 'required|min:4'





			]);

// storing user information in the database
		$email = $request['email'];
		$full_name = $request['full_name'];
		$password = bcrypt($request['password']); //bcrypt stores password in encrypted form in the database

		//creating new user
		$user = new User();
		$user->email= $email;
		$user->full_name= $full_name;
		$user->password= $password;

		$user->save();

		Auth::login($user);
		return redirect()->route('dashboard');



	}

public function postSignIn(Request $request){


//validates whether input fields against specifies rules.
$this->validate($request, [

			'email' => 'required', //checks for empty fields.
			'password' => 'required'



			]);

//checks for authentication of email and password whether record exists in database.

	if(Auth::attempt(['email' =>$request['email'],'password'=>$request['password']])){


	return redirect()->route('dashboard');
	}

	return redirect()->back();
}


public function getLogout(){


	Auth::logout();
	return redirect()->route('welcome');
}

public function postSaveAccount

}