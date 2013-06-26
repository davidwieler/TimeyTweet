<?php

    //We use already made Twitter OAuth library
    //https://github.com/mynetx/codebird-php
    require_once ('codebird.php');
    //Twitter OAuth Settings
    $CONSUMER_KEY = '';
    $CONSUMER_SECRET = '';
    $ACCESS_TOKEN = '';
    $ACCESS_TOKEN_SECRET = '';
    //Get authenticated 
    
    \Codebird\Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
    $cb = \Codebird\Codebird::getInstance();
    $cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);
    
    //retrieve posts
    $q = $_GET['q'];
    $count = $_GET['count'];
    $api = $_GET['api'];

    $params = array(
    'screen_name' => $q,
    'q' => $q,
    'count' => $count
    );
    //Make the REST call

    $data = (array) $cb->$api($params);
    //Output result in JSON, getting it ready for jQuery to process
    echo $_GET['callback'] . '(' . json_encode($data). ')';

?>
