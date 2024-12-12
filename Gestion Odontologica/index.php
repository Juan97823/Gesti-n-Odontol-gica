<body>
    <?php
    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "asignar") {
            require_once 'Vista/html/asignar.php';
        }
        if ($_GET["accion"] == "consultar") {
            require_once 'Vista/html/consultar.php';
        }
        if ($_GET["accion"] == "cancelar") {
            require_once 'Vista/html/cancelar.php';
        } elseif ($_GET["accion"] == "guardarCita") {
            $controlador->agregarCita(
                $_POST["asignarDocumento"],
                $_POST["medico"],
                $_POST["fecha"],
                $_POST["hora"],
                $_POST["consultorio"]
            );
        }elseif($_GET["accion"] == "guardarCita"){
            $controlador->agregarCita($_POST["asignarDocumento"],
            $_POST["medico"], $_POST["fecha"], $_POST["hora"],
            $_POST["consultorio"]);
            }
    } else {
        require_once 'Vista/html/inicio.php';
    }
    require_once 'Controlador/Controlador.php';
    require_once 'Models/GestorCita.php';
    require_once 'Models/Cita.php';
    require_once 'Models/Paciente.php';
    require_once 'Models/Conexion.php';
    $controlador = new Controlador();
    ?>

</body>