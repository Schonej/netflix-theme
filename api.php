<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api.themoviedb.org/3/trending/all/day?language=en-US', [
  'headers' => [
    'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkZTBmNmU2N2JkM2UyOTc5YzQwZmI0YzQ5Y2JmOWJhNSIsInN1YiI6IjYyMjYyYmY0OTVhY2YwMDA0NDY2YjA1NCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.kTVzjJA4F7RnIvta5yjSsMYJeKYS0WB72ZWsnVbqE4Q',
    'accept' => 'application/json',
  ],
]);

$movies = (string) $response->getBody();
$movies = json_decode($movies, true);

$newArr = array();
foreach($movies['results'] as $movie){
    $newArr[] = $movie;
}


$response2 = $client->request('GET', 'https://api.themoviedb.org/3/tv/top_rated?language=en-US&page=1', [
  'headers' => [
    'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkZTBmNmU2N2JkM2UyOTc5YzQwZmI0YzQ5Y2JmOWJhNSIsInN1YiI6IjYyMjYyYmY0OTVhY2YwMDA0NDY2YjA1NCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.kTVzjJA4F7RnIvta5yjSsMYJeKYS0WB72ZWsnVbqE4Q',
    'accept' => 'application/json',
  ],
]);

$tv = (string) $response2->getBody();
$tv = json_decode($tv, true);

$tvArr = array();
foreach($tv['results'] as $t){
    $tvArr[] = $t;
}

