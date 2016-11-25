<?php 

function filter_string($string, $method){
  if($method === 'GET' || $method === 'get' || $method == ='g'){
    $result = strip_tags(filter_input(INPUT_GET, $string, FILTER_SANITIZE_STRING));
  }
  if($method === 'POST' || $method === 'post' || $method === 'p'){
    $result = strip_tags(filter_input(INPUT_POST, $string, FILTER_SANITIZE_STRING));    
  }
  return $result;
}

function filter_int($int, $method){
  if($method === 'GET' || $method === 'get' || $method === 'g'){
    $result = strip_tags(filter_input(INPUT_GET, $int, FILTER_VALIDATE_INT));
  }
  if($method === 'POST' || $method === 'post' || $method === 'p'){
    $result = strip_tags(filter_input(INPUT_POST, $int, FILTER_VALIDATE_INT));    
  }
  return $result;
}

function filter_boolean($boolean, $method){
  if($method === 'GET' || $method === 'get' || $method === 'g'){
    $result = strip_tags(filter_input(INPUT_GET, $boolean, FILTER_VALIDATE_BOOLEAN));
  }
  if($method === 'POST' || $method === 'post' || $method === 'p'){
    $result = strip_tags(filter_input(INPUT_POST, $boolean, FILTER_VALIDATE_BOOLEAN));    
  }
  return $result;
}

function filter_float($float, $method){
  if($method === 'GET' || $method === 'get' || $method === 'g'){
    $result = strip_tags(filter_input(INPUT_GET, $float, FILTER_VALIDATE_FLOAT));
  }
  if($method === 'POST' || $method === 'post' || $method === 'p'){
    $result = strip_tags(filter_input(INPUT_POST, $float, FILTER_VALIDATE_FLOAT));    
  }
  return $result;
}

function filter_email($email, $method){
  if($method === 'GET' || $method === 'get' || $method === 'g'){
    $result = strip_tags(filter_input(INPUT_GET, $email, FILTER_VALIDATE_EMAIL));
  }
  if($method === 'POST' || $method === 'post' || $method === 'p'){
    $result = strip_tags(filter_input(INPUT_POST, $email, FILTER_VALIDATE_EMAIL));    
  }
  return $result;
}

?>
