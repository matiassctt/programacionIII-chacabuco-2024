<?php 

final readonly class EntertainmentRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "entertainment_get",
        "url" => "/entertainments",
        "controller" => "Entertainment/EntertainmentGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
    ];
  }
}
