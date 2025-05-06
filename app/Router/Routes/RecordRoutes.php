<?php 

final readonly class RecordRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "record_get",
        "url" => "/records",
        "controller" => "Record/RecordGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "records_get",
        "url" => "/records",
        "controller" => "Record/RecordsGetController.php",
        "method" => "GET"
      ]
    ];
  }
}
