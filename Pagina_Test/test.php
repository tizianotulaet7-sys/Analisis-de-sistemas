<?php

/*
|--------------------------------------------------------------------------
| CONFIGURACIÓN GENERAL
|--------------------------------------------------------------------------
|
| Este archivo contiene:
|
| 1. Los datos personales almacenados en un array.
| 2. La configuración para conectarse a MySQL mediante PDO.
| 3. La lógica que prueba la conexión con la base de datos.
| 4. La estructura HTML de la página.
|
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| DATOS PERSONALES
|--------------------------------------------------------------------------
|
| Creamos un array asociativo con los datos solicitados.
|
| Estos datos serán utilizados posteriormente dentro del HTML.
|
*/

$datosPersonales = [

    /*
    Nombre de la materia.
    */

    "materia" => "Análisis de Sistemas 2026",


    /*
    Nombre del Alumno. reemplaza nombre y apellido por tu nombre y apellido real.
    */

    "alumno" => "nombre y apellido",



    /*
    Correo electrónico del alumno. reemplaza nombreApellido por tu nombre y apellido real.
    */

    "email" => "nombreApellido.et7@gmail.com"

];



/*
|--------------------------------------------------------------------------
| CONFIGURACIÓN DE LA BASE DE DATOS
|--------------------------------------------------------------------------
|
| Parámetros proporcionados para realizar la conexión.
|
| Base de datos: db_test
| Servidor: localhost
| Usuario: test (creado en el dbTest.sql)
| Contraseña: password creado en el dbTest.sql 
|
*/


$host = "localhost";

$dbname = "nombre de la base de datos";

$usuario = "nombre de usuario";

$password = "password";



/*
|--------------------------------------------------------------------------
| VARIABLES PARA EL ESTADO DE LA CONEXIÓN
|--------------------------------------------------------------------------
|
| Estas variables almacenarán:
|
| - El estado de la conexión.
| - Un mensaje descriptivo.
|
*/


$conexionExitosa = false;

$mensajeConexion = "";



/*
|--------------------------------------------------------------------------
| CONEXIÓN A MYSQL UTILIZANDO PDO
|--------------------------------------------------------------------------
|
| PDO significa:
|
| PHP Data Objects
|
| Es una extensión de PHP que permite conectarse a diferentes
| sistemas de bases de datos.
|
| En este caso utilizaremos MySQL.
|
*/


try {


    /*
    Creamos la cadena de conexión DSN.
    
    DSN significa Data Source Name.
    
    Indicamos:
    
    - host: servidor MySQL.
    - dbname: nombre de la base de datos.
    - charset: codificación UTF-8.
    
    */


    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";


    /*
    Creamos una instancia de PDO.
    
    Parámetros:
    
    1. DSN con la información del servidor.
    2. Usuario de MySQL.
    3. Contraseña de MySQL.
    
    */


    $conexion = new PDO(

        $dsn,

        $usuario,

        $password

    );


    /*
    Configuramos PDO para que muestre excepciones
    cuando se produzca algún error.
    
    Esto facilita la detección de problemas.
    
    */


    $conexion->setAttribute(

        PDO::ATTR_ERRMODE,

        PDO::ERRMODE_EXCEPTION

    );


    /*
    Si llegamos hasta este punto,
    significa que la conexión fue exitosa.
    
    */


    $conexionExitosa = true;


    $mensajeConexion =

        "Conexión exitosa con la base de datos db_test";


} catch (PDOException $e) {


    /*
    Si ocurre algún error durante la conexión,
    PHP ingresará automáticamente en este bloque.
    
    Por ejemplo:
    
    - MySQL está apagado.
    - La base de datos no existe.
    - El usuario es incorrecto.
    - La contraseña es incorrecta.
    
    */


    $conexionExitosa = false;


    /*
    Guardamos un mensaje simple para el usuario.
    
    En un entorno real NO es recomendable mostrar
    directamente el error técnico completo.
    
    */


    $mensajeConexion =

        "No se pudo establecer la conexión con MySQL.";


    /*
    El detalle técnico del error queda disponible
    para depuración.
    
    Descomentar esta línea solamente en desarrollo:
    
    */

    // $mensajeConexion .= " Error: " . $e->getMessage();

}


/*
|--------------------------------------------------------------------------
| FIN DE LA LÓGICA PHP
|--------------------------------------------------------------------------
|
| A continuación comienza la estructura HTML.
|
*/

?>


<!DOCTYPE html>

<html lang="es">


<head>


    <!--
    ================================================================
    CONFIGURACIÓN DEL DOCUMENTO
    ================================================================
    -->


    <!-- Codificación UTF-8 para permitir caracteres especiales. -->

    <meta charset="UTF-8">


    <!-- Adaptación a pantallas de celulares y dispositivos móviles. -->

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >


    <!-- Título de la pestaña del navegador. -->

    <title>

        <?php echo $datosPersonales["materia"]; ?>

    </title>


    <!--
    ================================================================
    CONEXIÓN CON EL ARCHIVO CSS
    ================================================================
    -->


    <link
        rel="stylesheet"
        href="estilo.css"
    >


</head>



<body>


<!--
====================================================================
HEADER
====================================================================
-->

<header class="header-principal">


    <!-- Nombre o logo del sitio -->

    <div class="logo">

        <span class="logo-icono">

            &lt;/&gt;

        </span>

        IT Academy

    </div>


    <!-- Información de la materia -->

    <div class="header-info">

        <h1>

            <?php echo $datosPersonales["materia"]; ?>

        </h1>


        <p>

            Plataforma de práctica y aprendizaje tecnológico

        </p>

    </div>


</header>



<!--
====================================================================
CONTENIDO PRINCIPAL
====================================================================
-->

<main>


    <!--
    ================================================================
    TÍTULO PRINCIPAL
    ================================================================
    -->

    <section class="introduccion">


        <span class="terminal-text">

            $ system.start()
            
        </span>


        <h2>

            Panel de Información

        </h2>


        <p>

            Bienvenido al espacio de práctica de

            <strong>

                Análisis de Sistemas

            </strong>

        </p>


    </section>



    <!--
    ================================================================
    CONTENEDOR DE TARJETAS
    ================================================================
    -->

    <section class="contenedor-tarjetas">


        <!--
        ============================================================
        TARJETA 1
        DATOS PERSONALES
        ============================================================
        -->


        <article class="tarjeta tarjeta-personal">


            <!-- Icono -->

            <div class="icono-tarjeta">

                👨‍💻

            </div>


            <h2>

                Datos de la Cursada

            </h2>


            <!--
            Lista de información.
            
            Los datos se obtienen directamente
            desde el array PHP.
            -->


            <div class="datos-lista">


                <!-- Materia -->

                <div class="dato">

                    <span class="etiqueta">

                        MATERIA

                    </span>


                    <span class="valor">

                        <?php

                        echo $datosPersonales["materia"];

                        ?>

                    </span>

                </div>



                <!-- Profesor -->

                <div class="dato">

                    <span class="etiqueta">

                        ALUMNO

                    </span>


                    <span class="valor">

                        <?php

                        echo $datosPersonales["alumno"];

                        ?>

                    </span>

                </div>



                <!-- Email -->

                <div class="dato">

                    <span class="etiqueta">

                        EMAIL

                    </span>


                    <span class="valor">

                        ✉

                        <?php

                        echo $datosPersonales["email"];

                        ?>

                    </span>

                </div>


            </div>


        </article>



        <!--
        ============================================================
        TARJETA 2
        CONEXIÓN A BASE DE DATOS
        ============================================================
        -->


        <article class="tarjeta tarjeta-db">


            <!-- Icono -->

            <div class="icono-tarjeta">

                🗄️

            </div>


            <h2>

                Estado de Base de Datos

            </h2>


            <!--
            Mostramos información general de la conexión.
            
            No mostramos la contraseña por seguridad.
            -->


            <div class="datos-lista">


                <!-- Servidor -->

                <div class="dato">

                    <span class="etiqueta">

                        SERVIDOR

                    </span>


                    <span class="valor">

                        <?php echo $host; ?>

                    </span>

                </div>



                <!-- Base de datos -->

                <div class="dato">

                    <span class="etiqueta">

                        BASE DE DATOS

                    </span>


                    <span class="valor">

                        <?php echo $dbname; ?>

                    </span>

                </div>



                <!-- Usuario -->

                <div class="dato">

                    <span class="etiqueta">

                        USUARIO

                    </span>


                    <span class="valor">

                        <?php echo $usuario; ?>

                    </span>

                </div>


            </div>



            <!--
            ========================================================
            RESULTADO DE LA CONEXIÓN
            ========================================================
            -->


            <?php if ($conexionExitosa): ?>


                <!--
                Si la conexión fue exitosa,
                mostramos una tarjeta verde.
                -->


                <div class="estado conexion-ok">

                    <span>

                        ●

                    </span>

                    <?php echo $mensajeConexion; ?>

                </div>


            <?php else: ?>


                <!--
                Si ocurrió un error,
                mostramos una tarjeta roja.
                -->


                <div class="estado conexion-error">

                    <span>

                        ●

                    </span>

                    <?php echo $mensajeConexion; ?>

                </div>


            <?php endif; ?>



            <!--
            Botón que permitirá mostrar información
            adicional utilizando JavaScript.
            -->


            <button
                class="boton-db"
                id="btnConexion"
            >

                Verificar estado

            </button>


            <!--
            Este elemento será utilizado por JavaScript
            para mostrar información adicional.
            -->


            <div
                id="resultadoJS"
                class="resultado-js"
            ></div>


        </article>


    </section>



    <!--
    ================================================================
    BOTÓN DE BIENVENIDA
    ================================================================
    -->


    <section class="seccion-bienvenida">


        <button
            id="btnBienvenida"
            class="boton-principal"
        >

            🚀 Ingresar a la cursada

        </button>


        <!--
        Contenedor vacío.
        
        JavaScript insertará aquí
        el mensaje de bienvenida.
        -->


        <div
            id="mensajeBienvenida"
            class="mensaje-bienvenida"
        ></div>


    </section>


</main>



<!--
====================================================================
FOOTER
====================================================================
-->

<footer>


    <p>

        <span>

            ✉

        </span>


        <?php echo $datosPersonales["email"]; ?>

    </p>


    <p class="footer-tech">

        © 2026 | Análisis de Sistemas | IT Academy

    </p>


</footer>



<!--
====================================================================
CONEXIÓN CON JAVASCRIPT
====================================================================
-->

<script
    src="script.js"
></script>


</body>


</html>
