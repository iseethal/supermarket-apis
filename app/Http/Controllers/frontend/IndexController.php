<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    //

    public function index(Request $request)
    {
        $client = new \GuzzleHttp\Client();

        if(Session::has('user')){
            $data = $request->session()->all();
          
             $user_id= Session::get('user')['user_id'];
             $client_id =Session::get('user')['client_id'];
             


        $response = $client->request('POST', 'https://supermarket.gisaxiom.com/api/categories.php', [
        'form_params' => [
           
            'user_id' =>  $user_id,
            'client_id'=>$client_id,  
         ]

         ]);
         $category_id=$request->get('https://supermarket.gisaxiom.com/api/categories.php');

        

         $category = json_decode($response->getBody(), true); 

        $responses = $client->request('POST', 'https://supermarket.gisaxiom.com/api/featuredProducts.php', [
            'form_params' => [
                'user_id' =>  $user_id,
                'client_id'=>$client_id,
                'limit' => '10',
                'start_index'=>'0',
             ]
             ]);
                
            $featured = json_decode($responses->getBody(), true);
            

           

                $respons = $client->request('POST', 'https://supermarket.gisaxiom.com/api/sliders.php', [
                    'form_params' => [
                        'user_id' =>  $user_id,
                        'client_id'=>$client_id,
                        
                       
                     ]
                     ]);
                        
                    $slider = json_decode($respons->getBody(), true);


                     
                   
           
        }

        else{

        $response = $client->request('POST', 'https://supermarket.gisaxiom.com/api/categories.php', [
        'form_params' => [
           
            'user_id' =>  '0',
            'client_id'=>'1',  
         ]

         ]);
         $category_id=$request->get('https://supermarket.gisaxiom.com/api/categories.php');

        

         $category = json_decode($response->getBody(), true); 

        $responses = $client->request('POST', 'https://supermarket.gisaxiom.com/api/featuredProducts.php', [
            'form_params' => [
                'user_id' =>  '0',
                 'client_id'=>'1',  
                'limit' => '10',
                'start_index'=>'0',
             ]
             ]);
                
            $featured = json_decode($responses->getBody(), true);
            
           

                $respons = $client->request('POST', 'https://supermarket.gisaxiom.com/api/sliders.php', [
                    'form_params' => [
                        'user_id' =>  '0',
                        'client_id'=>'1',  
                       
                     ]
                     ]);
                        
                    $slider = json_decode($respons->getBody(), true);
                   
        }               

        return view ('frontend.index', ['category'=>$category["data"],'featured'=>$featured["data"],'slider'=>$slider["data"]]);
        
       

    }
    public function Logout(Request $request)
    {
        Session()->flush();
        return view('frontend.login')->with('error','User Logout Successfully');

    }


    
   
    
}
