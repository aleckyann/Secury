<?php

/* Filtros para requisições GET  */
class Get
{
  static function cpf($name, $resultado = null)
  {
    $input = filter_input(INPUT_GET, $name, FILTER_SANITIZE_STRING);
    $resultado = strip_tags($input);

    $cpf = str_pad(ereg_replace('[^0-9]', '', $resultado), 11, '0', STR_PAD_LEFT);

    if(strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999'){
      return 'false';
    } else {
    for($t = 9; $t < 11; $t++){
        for ($d = 0, $c = 0; $c < $t; $c++){
          $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if($cpf{$c} != $d){
            return 'false';
        }
     }
     return $cpf;
     }
  }

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

  static function cpf($name, $resultado = null)
  {
      $input = filter_input(INPUT_POST, $name, FILTER_SANITIZE_STRING);
      $resultado = strip_tags($input);
      $cpf = str_pad(ereg_replace('[^0-9]', '', $resultado), 11, '0', STR_PAD_LEFT);
      if(strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999'){
          return 'false';
      } else {
          for($t = 9; $t < 11; $t++){
              for ($d = 0, $c = 0; $c < $t; $c++){
                  $d += $cpf{$c} * (($t + 1) - $c);
              }
              $d = ((10 * $d) % 11) % 10;
              if($cpf{$c} != $d){
                  return 'false';
              }
          }
          return $cpf;
      }
  }

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
    if(@!$_SESSION) session_start();
    $_SESSION['value'] = crc32(time()) . md5(time()) . strtoupper(sha1(time())) . strtoupper(md5(time())) . sha1(time());
    echo('<input type="hidden" name="@secury" value="'.$_SESSION['value'].'">');
  }

  static function verify()
  {
    if(@!$_SESSION) session_start();

    $value = filter_input(INPUT_POST, '@secury', FILTER_SANITIZE_STRING);
    if($value == @$_SESSION['value']){
      unset($_SESSION['value']);
      return 'true';
    } else {
      unset($_SESSION['value']);
      return 'false';
    }
  }

}

/* Proteção de entrada e saída de dados de sessions */
class variavel
{

  static function cpf($name, $resultado = null)
  {
      $input = filter_var($name, FILTER_SANITIZE_STRING);
      $resultado = strip_tags($input);
      $cpf = str_pad(ereg_replace('[^0-9]', '', $resultado), 11, '0', STR_PAD_LEFT);
      if(strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999'){
          return 'false';
      } else {
          for($t = 9; $t < 11; $t++){
              for ($d = 0, $c = 0; $c < $t; $c++){
                  $d += $cpf{$c} * (($t + 1) - $c);
              }
              $d = ((10 * $d) % 11) % 10;
              if($cpf{$c} != $d){
                  return 'false';
              }
          }
          return $cpf;
      }
  }

  static function string($var, $maxLength = 255, $minLength = 0, $resultado = null)
  {
    $var_filtered = filter_var($var, FILTER_SANITIZE_STRING);
    if(strlen($var_filtered) < $minLength || strlen($var_filtered) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }

  }

  static function int($var, $maxLength = 255, $minLength = 0, $resultado = null)
  {
    $var_filtered = filter_var($var, FILTER_VALIDATE_INT);
    if(strlen($var_filtered) < $minLength || strlen($var_filtered) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }

  }

  static function float($var, $maxLength = 255, $minLength = 0, $resultado = null)
  {
    $var_filtered = filter_var($var, FILTER_VALIDATE_FLOAT);
    if(strlen($var_filtered) < $minLength || strlen($var_filtered) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }

  }

  static function email($var, $maxLength = 255, $minLength = 0, $resultado = null)
  {
    $var_filtered = filter_var($var, FILTER_VALIDATE_EMAIL);
    if(strlen($var_filtered) < $minLength || strlen($var_filtered) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }

  }

  static function boolean($var, $maxLength = 255, $minLength = 0, $resultado = null)
  {
    $var_filtered = filter_var($var, FILTER_VALIDATE_BOOLEAN);
    if(strlen($var_filtered) < $minLength || strlen($var_filtered) > $maxLength) return 'false';
    $resultado = strip_tags($input);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }

  }

  static function badString($var, $minLength = 0, $maxLength = 255, $resultado = null)
  {
    $badLanguage = ['cú', 'porra', 'caralho', 'merda', 'fuder', 'puta', 'rapariga', 'traveco', 'viado', 'cuzão', 'cuzao', 'baitola', 'putinha', 'viadinho', 'fdp', 'corno', 'putão', 'desgraçado', 'CÚ', 'PORRA', 'CARALHO', 'MERDA', 'FUDER', 'PUTA', 'RAPARIGA', 'TRAVECO', 'VIADO', 'CUZÃO', 'CUZAO', 'BAITOLA', 'PUTINHA', 'VIADINHO', 'FDP', 'CORNO', 'PUTÃO', 'DESGRAÇADO'];

    $var_filtered = filter_var($var, FILTER_SANITIZE_STRING);
    if(strlen($var_filtered) < $minLength || strlen($var_filtered) > $maxLength) return 'false';
    $var_filtered = str_replace($badLanguage, '#$%@!', $var_filtered);
    $resultado = strip_tags($var_filtered);

    if($resultado){
      return $resultado;
    } else {
      return 'false';
    }
  }

}



?>
