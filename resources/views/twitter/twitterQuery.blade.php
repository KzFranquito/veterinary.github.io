<?php
function queryTwitter($search) 
{
    $url = "https://api.x.com/2/users/by/username/" . $search;
    $bearer_token = "AAAAAAAAAAAAAAAAAAAAACwfwgEAAAAA2%2BOq2SORxZTdCnuGwKsx8lYgeuI%3DfxfrooLXrbGc0QbMiUfkWgNt55Bryp45qCpwy0sc9GR1dhauI7";

    $header = array('Authorization: Bearer ' . $bearer_token);
    $options = array( CURLOPT_HTTPHEADER => $header,
                      CURLOPT_HEADER => false,
                      CURLOPT_URL => $url,
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_SSL_VERIFYPEER => false);

    $feed = curl_init();
    curl_setopt_array($feed, $options);
    $json = curl_exec($feed);
    curl_close($feed);
    
    return  $json;
}

?>