<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class controllerMovies extends Controller
{
    function index(){
       
        
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://movies-app1.p.rapidapi.com/api/movies?type=movies&query=star%20wars",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: movies-app1.p.rapidapi.com",
                "X-RapidAPI-Key: f56dbf01a1mshcb991635944666dp1fc673jsncb5123dddb62"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $obj = json_decode($response);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //echo $response;

            
            //return view('welcome',['response'=>$response]); 
            return view('welcome',['response'=>$obj->results]);
        }

    }
}
