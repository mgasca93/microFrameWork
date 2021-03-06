<?php

//Cargamos el core de la app
require_once "app/app.php";
require_once "app/session/session.php";
require_once "app/model.php";
require_once "app/controller.php";
require_once "app/view.php";

//Cargamos la configuracion de la app
require_once "config/config.php";
require_once "config/database.php";


$app = new App();
$app->run();