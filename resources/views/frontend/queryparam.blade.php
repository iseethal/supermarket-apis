<ul>


@foreach($category as $row)

@php
                             
                             $url =  url()->full();
                             $query_str = parse_url($url, PHP_URL_QUERY);                               
                             parse_str($query_str, $query_params);
       
$row_style="";
if($query_params['id']!=null && $row['id']==$query_params['id'] ){
   $row_style='style=color:red; ';
}


@endphp 




                               <li>    
                                           
                              
                               <a  href="{{ route('shop',['id'=>$row['id']]) }}" {{ $row_style }}  >
                                   
                                {{ $row['title'] }} <span>{{ $row['total'] }}</span> </a>
                             
                               </li>
                               
                       @endforeach
                       
                           </ul>