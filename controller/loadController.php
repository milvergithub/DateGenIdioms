<?php
require_once 'model/loadModel.php';
if (!empty($_GET[PROYECTO])) {
    if (file_exists("projects/" . $_GET[PROYECTO])) {
        $loadTablas = new loadModel($_GET[PROYECTO]);
        require_once 'view/load.phtml';
    } else {
        require_once "view/error.phtml";
    }
} else {
    require_once "view/error.phtml";
}
?>
