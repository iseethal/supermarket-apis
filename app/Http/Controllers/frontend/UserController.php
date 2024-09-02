<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

class UserController extends Controller
{
    //

   public function Index()
   {
    return view('frontend.login');
   }

    public function Login(Request $request)
    {
        $client = new \GuzzleHttp\Client();

          $username = $request->username;
          $password = $request->password;

        $response = $client->POST('https://supermarket.gisaxiom.com/api/signIn.php'  , [
            'headers' => [
                'Authorization' => 'Bearer'.session()->get('token.access_token')

            ],
              'form_params' => [
                  'username' => $username,
                  'password'=> $password,
                 
              ]
          ]); 

          $response = json_decode((string)$response->getBody(),true);
          
          $request->session()->put('user',$response);
          $user= Session::all();

        //   return dd($response);

          if($request->Session()->has('user'))
          {
            return view('frontend.profile.user_profile');

          }
          else
          {
              echo 'No data in the session';
          }
  
          
        //   return view('frontend.profile.user_profile');

       
         
    }

    public function UserProfile(Request $request)
    {
        
        $user= Session::all();
        
        return view('frontend.profile.user_profile',compact('user'));
    }

    

    public function Register(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        
      $response = $client->POST('https://supermarket.gisaxiom.com/api/signUp.php'  , [
            'form_params' => [
                'username' => 'seethal',
                'password'=>'password',
                'name'=>'dhanya',
                'client_id' => 2,
            ]
        ]); 
        
        $response = $response->getBody()->getContents();
        $data = $request->session()->all();
        // dd($data);
        // $request->session()->put($response);
        // $request->session()->put('key', 'id');
        // $request->session()->put('key', 'client_id');

        if ($request->session()->has('users')) {

            return view('frontend.profile.user_profile');

        }
        else
        {
            return redirect()->back();
        }
       
    }

   

 
}
