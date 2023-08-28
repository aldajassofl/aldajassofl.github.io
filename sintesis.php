<!-- Incluir encabezado y utilerias -->
<?php
include('includes/encabezado.php');
?>
<div class="sintesis">
    <div class="sintesis-titulo">
        <h1>Git sobre el control de versiones</h1>
    </div>
    <div class="sintesis-texto">
        <p>
            En Git, un control de versiones se refiere a un sistema que registra los cambios realizados en un archivo o
            conjunto de archivos que a lo largo del tiempo, se pueden recuperar versiones de estos mas adelante en el
            tiempo.
            <br><br>
            Esto facilita a los desarrolladores gráficos o web, lo cuales quieren mantener cada versión de un diseño.
            usar un sistema de control de versiones te permite regresar a versiones anteriores de tus archivos, a la
            versión de un proyecto completo, compara los cambios, también nos sirve como bitácora para ver quien pudo
            haber cometido un error, cuando y donde.
            <br><br>
            Existen 3 tipos de sistemas de control de versiones, los locales, los centralizados y los distribuidos.
            <br><br>
            <b>Los sistemas de control de versiones locales</b>
            <br>
            Son usados por muchas personas, este funciona teniendo una
            simple base de datos, en la que se lleva el registro de todos lo cambios realizados a los archivos.
            <br>
            <img src="https://git-scm.com/book/en/v2/images/local.png" alt="">
            <br>
            <b>Los sistemas de control de versiones centralizados</b>
            <br>
            Estos tienen un único servidor el cual contiene todos
            los archivos versionados y varios clientes que descargan los archivos de ese servidor central. Este nos
            ofrece ventajas como colaborar de manera más sencilla con otros desarrolladores, se tiene un control
            detallado de lo que hace cada usuario y es más fácil de administrar un solo servidor que muchos clientes. El
            riesgo de este es que si se corrompe la base de datos, y no se realiza una copia de seguridad, se perderá
            toda la información del proyecto. Así mismo pasa con las VCS locales.
            <br>
            <img src="https://git-scm.com/book/en/v2/images/centralized.png" alt="">
            <br>
            <b>Los sistemas de control de versiones distribuidos</b>
            <br>
            Aquí los clientes no solo descargan la última copia
            instantánea de los archivos, sino que se replica todo el repositorio por completo. Así si un servidor deja
            de funcionar y estos clientes estaban colaborando a través de él, cualquiera de los repositorios disponibles
            en los clientes puede ser copiado al servidor para restaurarlo. De esta manera puedes colaborar con
            diferentes grupos de personas en el mismo proyecto.
            <br>
            <img src="https://git-scm.com/book/en/v2/images/distributed.png" alt="">
            <br>
            Una forma en la que Git destaca es la forma en la que maneja sus datos. La mayoría de otros sistemas manejan
            los datos como una lista de cambios en los archivos, se manejan como un conjunto de archivos.
            Git no lo maneja así, Git maneja sus datos como un conjunto de copias instantáneas de un sistema de archivos
            miniatura. Cada que confirmas un cambio, Git toma una foto del aspecto de todos los archivos en ese momento
            y guarda una referencia a esa copia instantánea. Y para se más eficiente, si un archivo no ha sido
            modificado Git no almacena el archivo de nuevo, sino un enlace al archivo anterior que ya tiene almacenado.
            <br>
            <img src="https://git-scm.com/book/en/v2/images/snapshots.png" alt="">
            <br>
            <b>Los tres estados</b>
            <br>
            Git tiene 3 estados principales en los que puedes encontrar tus archivos, confirmado (committed), modificado
            (modified) y preparado (staged). Confirmado significa que los datos están almacenados de manera segura en tu
            base de datos local. Modificado significa que has modificado el archivo pero todavía no lo has enviado a la
            base de datos. Y preparado significa que has marcado un archivo modificado en su versión actual para que
            vaya en tu próxima confirmación.
            <br>
            <img src="https://git-scm.com/book/en/v2/images/areas.png" alt="">
            <br>
			En conclusión, puedo decir que Git nos sirve para tener un control más sencillo de las versiones que
            manejamos en nuestro proyecto, así mantenemos un orden, bitácora y seguimiento de ver quien realiza cambios
            y quien no. También nos ayuda a prevenir la perdida de todo un proyecto con la distribución que este
            realiza, así si el servidor principal falla, los clientes tienen la copia instantánea del proyecto.

        </p>

    </div>
</div>


<!-- Incluir pie de página -->
<?php
include('includes/pie.php');
?>