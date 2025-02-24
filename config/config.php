<?php
// Definir constantes globales
define('BASE_PATH', dirname(dirname(__FILE__)));
define('URL_BASE', 'http://localhost/proyecto/');

// Configuración de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir automáticamente la configuración de la base de datos
require_once(BASE_PATH . '/config/database.php');