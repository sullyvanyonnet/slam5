<?php

//Retourne tous les séjours
$app->get('/', function() {

    require '../src/model.php';
    require '../src/stpaul/DAO/SejourDAO.php';

    $sejours = findAll();

    ob_start();                 // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean();      // assign HTML output to $view
    return $view;
});

?>
