<?php

//Cargamos el core de la app
require_once "app/app.php";
require_once "app/session/session.php";
require_once "app/Appmodel.php";
require_once "app/Appcontroller.php";
require_once "app/Appview.php";

//Cargamos la configuracion de la app
require_once "config/config.php";
require_once "config/database.php";


$app = new App();