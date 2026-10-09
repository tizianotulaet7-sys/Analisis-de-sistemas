
/*
========================================================================
SCRIPT PRINCIPAL
========================================================================

Este archivo contiene la lógica JavaScript de la página.

Se encarga de:

1. Mostrar el mensaje de bienvenida.
2. Mostrar información cuando se presiona el botón
   "Verificar estado".

IMPORTANTE:

La conexión real con MySQL NO se realiza con JavaScript.

La conexión a MySQL se realiza en test.php utilizando PHP y PDO.

JavaScript solamente muestra información visual en el navegador.
*/


/*
========================================================================
ESPERAR A QUE EL DOCUMENTO TERMINE DE CARGAR
========================================================================

DOMContentLoaded garantiza que JavaScript se ejecute
después de que todos los elementos HTML hayan sido creados.

Esto evita errores como:

"Cannot read properties of null"

porque los botones y elementos ya existirán
cuando intentemos utilizarlos.
*/


document.addEventListener(

    "DOMContentLoaded",

    function () {


        /*
        ================================================================
        BOTÓN DE BIENVENIDA
        ================================================================

        Buscamos el botón mediante su ID.
        */


        const btnBienvenida =

            document.getElementById(

                "btnBienvenida"

            );


        /*
        Buscamos el contenedor donde se mostrará
        el mensaje de bienvenida.
        */


        const mensajeBienvenida =

            document.getElementById(

                "mensajeBienvenida"

            );


        /*
        ================================================================
        EVENTO CLICK
        ================================================================

        Cuando el usuario presiona el botón,
        ejecutamos una función.
        */


        btnBienvenida.addEventListener(

            "click",

            function () {


                /*
                Mostramos un mensaje dentro
                del elemento HTML.
                */


                mensajeBienvenida.innerHTML =

                    "🚀 Bienvenido a la cursada de Análisis de Sistemas 2026";


                /*
                Cambiamos el estilo display.

                Antes estaba:

                display: none;

                Ahora será:

                display: block;

                Esto permite mostrar el mensaje.
                */


                mensajeBienvenida.style.display =

                    "block";


                /*
                También podemos hacer que el botón
                cambie su texto después de hacer clic.
                */


                btnBienvenida.innerHTML =

                    "✓ Sesión iniciada";


            }

        );


        /*
        ================================================================
        BOTÓN DE ESTADO DE BASE DE DATOS
        ================================================================

        Buscamos el botón.
        */


        const btnConexion =

            document.getElementById(

                "btnConexion"

            );


        /*
        Buscamos el elemento donde mostraremos
        el resultado generado por JavaScript.
        */


        const resultadoJS =

            document.getElementById(

                "resultadoJS"

            );


        /*
        ================================================================
        EVENTO CLICK DEL BOTÓN
        ================================================================
        */


        btnConexion.addEventListener(

            "click",

            function () {


                /*
                Mostramos un mensaje visual.

                IMPORTANTE:

                Este mensaje NO realiza una conexión
                adicional con la base de datos.

                La conexión real fue realizada por:

                PHP + PDO

                antes de enviar la página al navegador.
                */


                resultadoJS.innerHTML =

                    "🔍 Verificación completada.<br>" +

                    "El estado real de la conexión se muestra " +

                    "en la tarjeta superior.";


                /*
                Hacemos visible el resultado.
                */


                resultadoJS.style.display =

                    "block";


                /*
                Cambiamos el texto del botón.
                */


                btnConexion.innerHTML =

                    "✓ Estado verificado";


            }

        );


    }

);
