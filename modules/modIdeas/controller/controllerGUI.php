<?php
    //..........................................................................
    // Esta función es la más poderosa de todo el complejo, pues es la que
    // ejecuta y monta las peticiones y los modulos que se ejecutarán.
    // Funciona recibiendo desde el dashboard una accion del modulo a montar,
    // se arma la referencia a ese archivo de manera dinámica para referenciarlo
    //..........................................................................
    function buildModulesContents ( $action ) {
        switch ( $action ) {
            case 1:
                $moduleToLoad = "dashboard.php"; break;
            case 2:
                $moduleToLoad = "newidea.php"; break;
        }
    return $moduleToLoad; // Muestra el contenido o la interfaz del modulo
    }
?>
