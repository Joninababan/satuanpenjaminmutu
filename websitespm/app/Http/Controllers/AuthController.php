<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\User;
use\App\Transformers\UserTransformer;


class AuthController extends Controller
{
    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
    public function register(Request $request, User $user)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6',
    	]);

    	$user = $user->create([
    		'name'	=> $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    		'api_token' => bcrypt($request->email),
    	]);

    	$response = fractal()
      ->item($user)
      ->transformWith(new UserTransformer)
      ->addMeta([
         'token' => $user->api_token,
     ])
      ->toArray();

      return response()->json($response, 201);

  }

  public function login(Request $request, User $user)
  {
   if(!Auth::attempt(['email' => $request->email,'password' => $request->password])) {
      return response()->json(['error' => 'Username atau password salah'], 401);
  }
  $user = $user->find(Auth::user()->id);

  return fractal()
  ->item($user)
  ->transformWith(new UserTransformer)
  ->addMeta([
     'token' => $user->api_token,
 ])

  ->toArray();    	
}
}
