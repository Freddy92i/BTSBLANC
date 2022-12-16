<?php

// $data contient un tableau associatif issu des données présentes dans data.json
$json = trim(file_get_contents("data.json"));
$data = json_decode($json, true);
