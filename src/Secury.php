<?php

/* Filtros para requisições GET  */
class Get
{

  static function string($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function int($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function boolean($name, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_VALIDATE_BOOLEAN);
    $resultado = strip_tags($input);

    if($resultado){
      return 'true';
    } else {
      return 'false';
    }
  }

  static function float($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function email($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function badString($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $badLanguage = ['cú', 'porra', 'caralho', 'merda', 'fuder', 'puta', 'rapariga', 'traveco', 'viado', 'cuzão', 'baitola', 'putinha', 'viadinho', 'fdp', 'corno', 'putinha', 'desgraçado'];
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


/* Filtros para requisições POST  */
class Post
{

  static function string($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function int($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function boolean($name, $resultado = null)
  {
    $input = filter_input(INPUT_POST, $name, FILTER_VALIDATE_BOOLEAN);
    $resultado = strip_tags($input);

    if($resultado){
      return 'true';
    } else {
      return 'false';
    }
  }

  static function float($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function email($name, $minLength = 0, $maxLength = 255, $resultado = null)
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

  static function badString($name, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $badLanguage = ['cú', 'porra', 'caralho', 'merda', 'fuder', 'puta', 'rapariga', 'traveco', 'viado', 'cuzão', 'baitola', 'putinha', 'viadinho', 'fdp', 'corno', 'putinha', 'desgraçado'];
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

}

/* Proteção contra csrf  */
class Csrf
{

  static function form(){
    if(!$_SESSION) {
      session_start();
    }
    $_SESSION['csrf'] = crc32(time());
    echo('<input type="hidden" name="csrf" value="'.$_SESSION['csrf'].'">');
  }

  static function verify(){
    if(!$_SESSION) {
      session_start();
    }
    $value = $_POST['csrf'];
    if($value == $_SESSION['csrf']){
      unset($_SESSION['csrf']);
      return 'true';
    } else {
      unset($_SESSION['csrf']);
      return 'false';
    }
  }

}


?>
