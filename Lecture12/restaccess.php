<?php
   $opts=array(
    'http'=>array(
        'method'=>'GET',
        'header'=>'Accept: application/json')
    );
   $context = stream_context_create($opts);
   $response = file_get_contents('http://localhost/Food/food/list/',false,$context);
   print_r($response);
?>