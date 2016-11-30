<?php 

class Filter
{
  
  public static function getString($name, $resultado = null)
  { 
    $input = filter_input(INPUT_GET, $name, FILTER_SANITIZE_STRING);
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  public static function postString($name, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $resultado = strip_tags($input);    

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  public static function getInt($name, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_INT);
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  public static function postInt($name, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_INT);
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  public static function getBoolean($name, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_BOOLEAN);
    $resultado = strip_tags($input);

    if($resultado){
      return 'true';
    } else {
      return 'false';
    }
  }

  public static function postBoolean($name, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_BOOLEAN);
    $resultado = strip_tags($input);    

    if($resultado){
      return 'true';
    } else {
      return 'false';
    }
  }

  public static function getFloat($name, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_FLOAT);
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  public static function postFloat($name, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_FLOAT);
    $resultado = strip_tags($input);    

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  public static function getEmail($name, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_EMAIL);
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  public static function postEmail($name, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_EMAIL);
    $resultado = strip_tags($input);    
    
    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

}

?>
