<?php

/*class Config {
  const DB_HOST = "localhost";
  const DB_USERNAME = "cen236user";
  const DB_PASSWORD = "PogurajMe";
  const DB_SCHEME = "cen236project";
}*/
class Config {
  const DATE_FORMAT = "Y-m-d H:i:s";

  public static function DB_HOST(){
    return Config::get_env("DB_HOST", "localhost");
  }
  public static function DB_USERNAME(){
    return Config::get_env("DB_USERNAME", "cen236user");
  }
  public static function DB_PASSWORD(){
    return Config::get_env("DB_PASSWORD", "PogurajMe");
  }
  public static function DB_SCHEME(){
    return Config::get_env("DB_SCHEME", "cen236project");
  }
  public static function SMTP_HOST(){
    return Config::get_env("SMTP_HOST", "mail.privateemail.com");
  }
  public static function SMTP_PORT(){
    return Config::get_env("SMTP_PORT", "587");
  }
  public static function SMTP_USER(){
    return Config::get_env("SMTP_USER", "admin@poguraj.me");
  }
  public static function SMTP_PASSWORD(){
    return Config::get_env("SMTP_PASSWORD", "Selam76...");
  }

  public static function get_env($name, $default){
    return isset($_ENV[$name]) && trim($_ENV[$name]) != '' ? $_ENV[$name] : $default;
  }
}
 ?>
