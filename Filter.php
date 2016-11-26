<?php 

class Filter
{
  public static function string($name, $method, $result = null)
  {
    if($method == 'GET' || $method == 'get' || $method == 'g'){
      $result = strip_tags(filter_input(INPUT_GET, $name, FILTER_SANITIZE_STRING));
    }
    if($method == 'POST' || $method == 'post' || $method == 'p'){
      $result = strip_tags(filter_input(INPUT_POST, $name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));    
    }
    if($result){
      return $result;
    } else {
      return 'false';
    }
  }

  public static function int($name, $method, $result = null)
  {
    if($method == 'GET' || $method == 'get' || $method == 'g'){
      $result = strip_tags(filter_input(INPUT_GET, $name, FILTER_VALIDATE_INT));
    }
    if($method == 'POST' || $method == 'post' || $method == 'p'){
      $result = strip_tags(filter_input(INPUT_POST, $name, FILTER_VALIDATE_INT));    
    }
    if($result){
      return $result;
    } else {
      return 'false';
    }
  }

  public static function boolean($name, $method, $result = null)
  {
    if($method == 'GET' || $method == 'get' || $method == 'g'){
      $result = strip_tags(filter_input(INPUT_GET, $name, FILTER_VALIDATE_BOOLEAN));
    }
    if($method == 'POST' || $method == 'post' || $method == 'p'){
      $result = strip_tags(filter_input(INPUT_POST, $name, FILTER_VALIDATE_BOOLEAN));    
    }
    if($result){
      return 'true';
    } else {
      return 'false';
    }
  }

  public static function float($name, $method, $result = null)
  {
    if($method == 'GET' || $method == 'get' || $method == 'g'){
      $result = strip_tags(filter_input(INPUT_GET, $name, FILTER_VALIDATE_FLOAT));
    }
    if($method == 'POST' || $method == 'post' || $method == 'p'){
      $result = strip_tags(filter_input(INPUT_POST, $name, FILTER_VALIDATE_FLOAT));    
    }
    if($result){
      return $result;
    } else {
      return 'false';
    }
  }

  public static function email($name, $method, $result = null)
  {
    if($method == 'GET' || $method == 'get' || $method == 'g'){
      $result = strip_tags(filter_input(INPUT_GET, $name, FILTER_VALIDATE_EMAIL));
    }
    if($method == 'POST' || $method == 'post' || $method == 'p'){
      $result = strip_tags(filter_input(INPUT_POST, $name, FILTER_VALIDATE_EMAIL));    
    }
    if($result){
      return $result;
    } else {
      return 'false';
    }
  }

}


?>
