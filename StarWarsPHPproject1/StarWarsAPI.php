<?php
/*
class StarWarsAPI {


	//import json file 
	public function getStarWarsMovies(){
		//get the list of movies - star wars
		$movies = file_get_contents(__DIR__.'/../inc/Star-Wars.json') ;
		//conver json document to php array 
		$movies = json_decode($movies , true); 
		////GET A RANDOM INDEX NUMBER
		//$index = mt_rand(0 , count($movies)); 
		//return the random movie 
		return 	$movies;
		//[$index];
	}



	public function generate(){
		return $this->getStarWarsMovies();
	}
}
*/


$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://random-facts2.p.rapidapi.com/getfact",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: random-facts2.p.rapidapi.com",
		"X-RapidAPI-Key: f56dbf01a1mshcb991635944666dp1fc673jsncb5123dddb62"
	],
]);


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}




?>