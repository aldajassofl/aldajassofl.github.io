<!-- Incluir encabezado y utilerias -->
<?php
include('includes/encabezado.php');
?>
<!-- Portada -->
<div class="portada" id="portada">

    <div class="imagenes">
        <img src="img/tecnm.jpeg" alt="">
        <img src="img/logo.png" alt="">
    </div>

    <div class="titulos">
        <h3>Tecnológico Nacional de México</h3>
        <h3>Instituto Tecnológico de Tepic</h3>
        <hr>
    </div>

    <br>

    <div class="materia">
        <h2>Interfaces Web</h2>
        <hr>
    </div>
    <br>
    <div class="actividad">
        <h4>Actividad:</h4>
        <h4>Comandos de Git</h4>
    </div>
    <br>
    <div class="info-general">
        <h4>Grupo: 5A</h4>
        <h4>Docente: ARJONA VIZCAÍNO ISRAEL</h4>
        <h4>Alumno: JASSO FLORES ALEXIS DANIEL</h4>

    </div>
</div>
<!-- Fin Portada -->

<!-- Introducción -->
<div class="intro" id="intro">
    <div class="intro-titulo">
        <h1>Introducción</h1>
    </div>
    <div class="intro-texto">
        <p>
            Texto aquí
        </p>
    </div>

</div>
<!-- Fin Introducción -->

<!-- Actividad -->
<div class="comandos-git" id="actividad">
    <div class="intro-titulo">
        <h1>Comandos de Git</h1>
    </div>

    <table class="tabla-comandos">
        <thead class="cabezera-comandos">
            <th>Comando</th>
            <th>Breve descripción</th>
            <th>Parámetros y descripción</th>
            <th>Ejemplo</th>
        </thead>
        <tbody class="cuerpo-comandos">
            <!-- inicio fila -->
            <tr> 
                <td class="consola">git-add</td>
                <td>Añadir contenido de un fichero al índice</td>
                <td class="ver-texto">
                    <div class="parametros consola">-n
                        --dry-run
                        Realmente no añade los ficheros. Sólo muestra si existen o se ignorarán.

                        -v
                        --verbose
                        Mostrar más detalles.

                        -f
                        --force
                        Permitir añadir ficheros que normalmente se ignoran.

                        -i
                        --interactive
                        Agregar interactivamente al índice contenido modificado en el árbol de trabajo. Se pueden
                        proporcionar argumentos opcionales de ruta para limitar la operación a un subconjunto del árbol
                        de
                        trabajo. Ver "Modo interactivo" para detalles.

                        -p
                        --patch
                        Interactivamente elige pedazos de parche entre el índice y el árbol de trabajo y los agrega al
                        índice. Esto le da al usuario la oportunidad de revisar la diferencia antes de agregar contenido
                        modificado al índice.

                        Esto ejecuta efectivamente add --interactive, pero omite el menú inicial del comando saltando
                        directamente al subcomando patch. Ver ``Modo interactivo" para detalles.

                        -e
                        --edit
                        Abre diff vs el índice en un editor y permite al usuario editarlo. Después de cerrar el editor,
                        ajusta las cebeceras de los pedazos y aplica el parche al índice.

                        La intención de ésta opción es seleccionar y elegir líneas del parche a aplicar, o incluso para
                        modificar el contenido de las líneas a ser preparadas. Esto puede ser mas rápido y mas flexible
                        que
                        usar el selector de pedazos interactivo; sin embargo, es fácil confundirse uno mismo y crear un
                        parche que no aplica al índice. Ver EDITANDO PARCHES a continuación.

                        -u
                        --update
                        Actualiza el índice justo donde ya tiene una entrada que coincide con (especificación-de-ruta).
                        Esto
                        tanto elimina como modifica entradas de índice para coincidir el árbol de trabajo, pero no
                        agrega ficheros nuevos.

                        Si no se proporciona (especificación-de-ruta) cuando se usa la opción -u, todos los ficheros
                        rastreados en árbol de trabajo entero son actualizados (versiones antiguas de Git solían
                        limitar la actualización al directorio actual y sus subdirectorios).
                    </div>
                </td>
                <td >
                    Añade el contenido de todos los ficheros *.txt`del directorio `Documentation y sus
                    subdirectorios:
                    <b class="consola">git add Documentation/\*.txt</b>
                </td>
            </tr>
            <!-- fin fila -->
            
        </tbody>
    </table>
</div>
<!-- Fin Actividad -->


<!-- Incluir pie de página -->
<?php
include('includes/pie.php');
?>