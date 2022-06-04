<?php

$data=[];

foreach ($site->places()->toStructure() as $place) {

  $data[] = [
    'id' => $place->id(),
    'institutions' => $place->institutions()->value(),
    'kultursektor' => $place->kultursektor()->value(),
    'stadt' => $place->stadt()->value(),
    'plz' => $place->plz()->value(),
    'adresse' => $place->adresse()->value(),
    'lat' => $place->lat()->value(),
    'lon' => $place->lon()->value(),
    'typ' => $place->typ()->value(),
    'quelle' => $place->quelle()->value()
  ];
}

echo json_encode($data);