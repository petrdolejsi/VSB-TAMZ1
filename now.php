<?php
    header('Access-Control-Allow-Origin: *');
    if (isset($_GET["x"])&&isset($_GET["y"])) {
        $json = json_decode(file_get_contents("http://api.wunderground.com/api/key/conditions/lang:CZ/q/".$_GET["x"].",".$_GET["y"].".json"), true);
        if (isset($_GET["id"])) {
            $json['myID'] = $_GET["id"];
        }
        echo json_encode($json);
    }
?>