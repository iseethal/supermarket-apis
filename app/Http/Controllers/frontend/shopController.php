<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class shopController extends Controller
{
    //

    public function Shop(Request $request)
    {
        $client = new \GuzzleHttp\Client();

        if(Session::has('user')){

          $user_id= Session::get('user')['user_id'];
          $client_id =Session::get('user')['client_id'];

          
      $response = $client->request('POST', 'https://supermarket.gisaxiom.com/api/categories.php', [

     'form_params' => [
        
         'user_id' =>  $user_id,
         'client_id'=>$client_id,
          $id=request()->all(),


      
      ]
      ]);
    

      $category = json_decode($response->getBody(), true); 
    
      if($id==null)
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
              'user_id' =>  $user_id,
              'client_id'=>$client_id,
              'start_index'=>'100',
              'limit'=>'20', 
               $product_id=request()->all(),
                                 
  
             ]
           ]);

           $respon = $client->request('POST', 'https://supermarket.gisaxiom.com/api/singleProduct.php', [
            'form_params' => [
                'user_id' =>  $user_id,
                'client_id'=>$client_id,
                'product_id'=>'1',
                     
    
               ]
             ]);
      }
      else
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
              'user_id' =>  $user_id,
              'client_id'=>$client_id,
              'category_id'=>$id['id'],
              'start_index'=>'1',
              'limit'=>'20', 
                                 
  
             ]
           ]);

           $respon = $client->request('POST', 'https://supermarket.gisaxiom.com/api/singleProduct.php', [
            'form_params' => [
                'user_id' =>  $user_id,
                'client_id'=>$client_id,
                'product_id'=>$id['id'],
                     
    
               ]
             ]);


      }
                
         $product = json_decode($resp->getBody(), true);

       $singleProduct = json_decode($respon->getBody(), true);

        }



        else{

          
      $response = $client->request('POST', 'https://supermarket.gisaxiom.com/api/categories.php', [

     'form_params' => [
        
      'user_id' =>  '0',
      'client_id'=>'1', 
          $id=request()->all(),


      
      ]
      ]);
    

      $category = json_decode($response->getBody(), true); 
    
      if($id==null)
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
            'user_id' =>  '0',
            'client_id'=>'1', 
              'start_index'=>'100',
              'limit'=>'20', 
                                 
  
             ]
           ]);

           $respon = $client->request('POST', 'https://supermarket.gisaxiom.com/api/singleProduct.php', [
            'form_params' => [
              'user_id' =>  '0',
              'client_id'=>'1', 
                'product_id'=>'1',
                     
    
               ]
             ]);
      }
      else
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
            'user_id' =>  '0',
            'client_id'=>'1', 
              'category_id'=>$id['id'],
              'start_index'=>'1',
              'limit'=>'20',                                  
  
          ]
           ]);

         


      }
      $product = json_decode($resp->getBody(), true);



        }
             
      

        return view('frontend.shop',['category'=>$category["data"],'product'=>$product["data"]]);

    }
    
    public function Details(Request $request)
    {

      $client = new \GuzzleHttp\Client();

        if(Session::has('user')){

          $user_id= Session::get('user')['user_id'];
          $client_id =Session::get('user')['client_id'];

          
      $response = $client->request('POST', 'https://supermarket.gisaxiom.com/api/categories.php', [

     'form_params' => [
        
         'user_id' =>  $user_id,
         'client_id'=>$client_id,
          $id=request()->all(),

      
      ]
      ]);
    

      $category = json_decode($response->getBody(), true); 
    
      if($id==null)
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
              'user_id' =>  $user_id,
              'client_id'=>$client_id,
              'start_index'=>'100',
              'limit'=>'20', 
               $product_id=request()->all(),
                                 
  
             ]
           ]);

           $respon = $client->request('POST', 'https://supermarket.gisaxiom.com/api/singleProduct.php', [
            'form_params' => [
                'user_id' =>  $user_id,
                'client_id'=>$client_id,
                'product_id'=>'1',
                     
    
               ]
             ]);
      }
      else
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
              'user_id' =>  $user_id,
              'client_id'=>$client_id,
              'category_id'=>$id['id'],
              'start_index'=>'1',
              'limit'=>'20', 
                                 
  
             ]
           ]);

           $respon = $client->request('POST', 'https://supermarket.gisaxiom.com/api/singleProduct.php', [
            'form_params' => [
                'user_id' =>  $user_id,
                'client_id'=>$client_id,
                'product_id'=>$id['id'],
                     
    
               ]
             ]);


      }
                
         $product = json_decode($resp->getBody(), true);

       $singleProduct = json_decode($respon->getBody(), true);

        }



        else{

          
      $response = $client->request('POST', 'https://supermarket.gisaxiom.com/api/categories.php', [

     'form_params' => [
        
      'user_id' =>  '0',
      'client_id'=>'1', 
          $id=request()->all(),


      
      ]
      ]);
    

      $category = json_decode($response->getBody(), true); 
    
      if($id==null)
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
            'user_id' =>  '0',
            'client_id'=>'1', 
              'start_index'=>'100',
              'limit'=>'20', 
                                 
  
             ]
           ]);

           $respon = $client->request('POST', 'https://supermarket.gisaxiom.com/api/singleProduct.php', [
            'form_params' => [
              'user_id' =>  '0',
              'client_id'=>'1', 
                'product_id'=>'1',
                     
    
               ]
             ]);
      }
      else
      {
        $resp = $client->request('POST', 'https://supermarket.gisaxiom.com/api/products.php', [
          'form_params' => [
            'user_id' =>  '0',
            'client_id'=>'1', 
              'category_id'=>$id['id'],
              'start_index'=>'1',
              'limit'=>'20', 

                                 
  
             ]
           ]);

           $respon = $client->request('POST', 'https://supermarket.gisaxiom.com/api/singleProduct.php', [
            'form_params' => [
                'user_id' =>  '0',
                'client_id'=>'1', 
                'product_id'=>$id['id'],
                     
    
               ]
             ]);


      }
                
         $product = json_decode($resp->getBody(), true);

       $singleProduct = json_decode($respon->getBody(), true);
       
       $product_quantity=$singleProduct['product_quantity'];
        

        }

        return view('frontend.single_product',['category'=>$category["data"],'product'=>$product["data"],'singleProduct'=>$singleProduct["data"],'product_quantity'=>$product_quantity]);
      
    }

  
}
