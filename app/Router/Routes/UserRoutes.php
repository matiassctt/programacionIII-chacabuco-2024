<?php 

final readonly class UserRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "user_login",
        "url" => "login",
        "controller" => "User/UserLoginController.php",
        "method" => "POST"
      ],
    ];
  }
}
