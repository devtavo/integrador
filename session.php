<?php
session_start();

if (count($_GET) > 0) {
    if (isset($_GET['cerrar'])) {
        session_destroy();
        header('Location: indexx.php');
    }
}

$action = $_POST['action'];

switch ($action) {
    case "login":
        if ($_POST['usr'] == 'mpalacios' && $_POST['pwd'] == '1a2b3c++') {
            echo json_encode(array('data' => 'Jorge Palacios'));
            $_SESSION['user'] = 'Juan Huertas';
        }
        if ($_POST['usr'] == 'seguridad' && $_POST['pwd'] == 'seguridad2021') {
            echo json_encode(array('data' => 'Seguridad'));
            $_SESSION['user'] = 'Juan Seguridad';
        }
        break;
}
