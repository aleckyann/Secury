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
    $badLanguage = ['cú', 'porra', 'caralho', 'merda', 'fuder', 'puta', 'rapariga', 'traveco', 'viado', 'cuzão', 'cuzao', 'baitola', 'putinha', 'viadinho', 'fdp', 'corno', 'putão', 'desgraçado', 'CÚ', 'PORRA', 'CARALHO', 'MERDA', 'FUDER', 'PUTA', 'RAPARIGA', 'TRAVECO', 'VIADO', 'CUZÃO', 'CUZAO', 'BAITOLA', 'PUTINHA', 'VIADINHO', 'FDP', 'CORNO', 'PUTÃO', 'DESGRAÇADO'];
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

  static function input()
  {
    if(!$_SESSION) session_start();
    $_SESSION['value'] = crc32(time()) . md5(time()) . strtoupper(sha1(time())) . strtoupper(md5(time())) . sha1(time());
    echo('<input type="hidden" name="@secury" value="'.$_SESSION['value'].'">');
  }

  static function verify()
  {
    if(!$_SESSION) session_start();

    $value = filter_input(INPUT_POST, '@secury', FILTER_SANITIZE_STRING);
    if($value == $_SESSION['value']){
      unset($_SESSION['value']);
      return 'true';
    } else {
      unset($_SESSION['value']);
      return 'false';
    }
  }

}


?>
