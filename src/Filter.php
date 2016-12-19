<?php 

class Filter
{

  
  static function getString($name, $minLength = 0, $maxLength = 255, $resultado = null)
  { 
    $input = filter_input(INPUT_GET, $name, FILTER_SANITIZE_STRING);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function postString($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);    

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function getInt($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_INT);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function postInt($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_INT);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function getBoolean($name, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_BOOLEAN);
    $resultado = strip_tags($input);

    if($resultado){
      return 'true';
    } else {
      return 'false';
    }
  }

  static function postBoolean($name, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_BOOLEAN);
    $resultado = strip_tags($input);    

    if($resultado){
      return 'true';
    } else {
      return 'false';
    }
  }

  static function getFloat($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_FLOAT);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function postFloat($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_FLOAT);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);    

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function getEmail($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_EMAIL);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function postEmail($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_EMAIL);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);    
    
    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function postBadString($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $badLanguage = ['cú', 'porra', 'caralho', 'merda', 'fuder', 'puta', 'rapariga', 'traveco', 'viado', 'cuzão', 'baitola', 'putinha', 'viadinho'];        
    $input = filter_input(INPUT_POST, $name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $input = str_replace($badLanguage, '#$%@!', $input);
    $resultado = strip_tags($input);    
    
    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

  static function getBadString($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $badLanguage = ['cú', 'porra', 'caralho', 'merda', 'fuder', 'puta', 'rapariga', 'traveco', 'viado', 'cuzão', 'baitola', 'putinha', 'viadinho'];    
    $input = filter_input(INPUT_GET, $name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    if(strlen($input) < $minLength || strlen($input) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

}

?>
