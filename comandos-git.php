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
            En esta actividad se tiene una recopilación de comandos de Git más usados, los cuales se usan día a día para
            tener tu repositorio en orden y sus respectivas ramas.
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
                    <div class="parametros consola">git add (archivo): Agrega un archivo específico al área de
                        preparación (staging) para que se incluya en el próximo commit.

                        git add . o git add --all: Agrega todos los archivos modificados y nuevos en el directorio de
                        trabajo al área de preparación. Esto incluye archivos nuevos, modificados y eliminados.

                        git add -u o git add --update: Agrega todos los archivos modificados o eliminados (sin incluir
                        archivos nuevos) al área de preparación.

                        git add -p o git add --patch: Inicia un proceso interactivo que te permite seleccionar porciones
                        específicas de cambios en un archivo y agregarlos al área de preparación. Esto es útil cuando
                        solo deseas incluir partes específicas de un archivo en el commit.

                        git add -i o git add --interactive: Inicia una interfaz de línea de comandos interactiva que te
                        permite seleccionar archivos y cambios específicos para agregar al área de preparación.
                    </div>
                </td>
                <td>
                    <b class="consola">git add mi_archivo.txt</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-branch</td>
                <td>Enumerar, crear o eliminar ramas</td>
                <td class="ver-texto">
                    <div class="parametros consola">git branch (nombre_rama): Crea una nueva rama con el nombre
                        especificado, pero no cambia a esa
                        rama. Puedes continuar trabajando en la rama actual.

                        git branch -d (nombre_rama): Elimina la rama especificada después de confirmar que los cambios
                        en la rama se han fusionado correctamente en otra rama. Si no se han fusionado los cambios, Git
                        mostrará un mensaje de error.

                        git branch -D (nombre_rama): Elimina la rama especificada sin importar si los cambios se han
                        fusionado o no. Esto se usa para forzar la eliminación de una rama.

                        git branch -m (nombre_rama_nueva): Renombra la rama actual con el nombre especificado.

                        git branch -a o git branch --all: Muestra una lista de todas las ramas locales y remotas en el
                        repositorio, lo que te permite ver las ramas en otros repositorios remotos.

                        git branch -r o git branch --remotes: Muestra una lista de las ramas remotas en el repositorio,
                        es decir, las ramas en repositorios remotos conectados.

                        git branch -vv o git branch --verbose: Muestra información adicional sobre las ramas, como el
                        seguimiento de las ramas remotas y el último commit en cada rama.

                        git branch -u (rama_remota): Configura la rama actual para realizar un seguimiento de la rama
                        remota especificada. Esto establece una relación de seguimiento para facilitar las operaciones
                        de empuje y tirar.

                        git branch -c (nombre_rama_nueva) (nombre_rama_base): Crea una nueva rama a partir de la rama
                        base especificada y cambia automáticamente a la nueva rama.

                        git branch --merged y git branch --no-merged: Estos parámetros permiten filtrar las ramas
                        locales que están fusionadas o no fusionadas en la rama actual, lo que puede ser útil para
                        administrar ramas.
                    </div>
                </td>
                <td class="consola">
                    <b>git branch nueva-caracteristica</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-checkout</td>
                <td>Cambiar de rama o restaurar archivos del árbol de trabajo</td>
                <td class="ver-texto">
                    <div class="parametros consola">git checkout (nombre_rama): Cambia de rama y coloca el directorio de
                        trabajo en el estado de la
                        rama especificada. Puedes utilizar este comando para cambiar entre diferentes ramas en tu
                        repositorio.

                        git checkout -b (nombre_nueva_rama): Crea una nueva rama con el nombre especificado y cambia
                        automáticamente a esa rama. Este comando es equivalente a ejecutar git branch
                        (nombre_nueva_rama) seguido de git checkout (nombre_nueva_rama).

                        git checkout (nombre_commit): Permite "viajar en el tiempo" y moverte a un commit específico.
                        Puedes proporcionar el identificador del commit (hash) o una referencia a un commit, como una
                        etiqueta (tag) o una rama remota.

                        git checkout -- (nombre_archivo): Deshace los cambios no confirmados en un archivo específico y
                        restaura el archivo al estado de la última confirmación. Esto es útil si deseas descartar los
                        cambios en un archivo sin eliminarlo.

                        git checkout -: Cambia de vuelta a la rama previamente seleccionada. Esto es útil si estabas en
                        una rama y cambiaste temporalmente a otra para realizar alguna tarea, y luego deseas volver a la
                        rama anterior.

                        git checkout (nombre_rama) -- (nombre_archivo): Restaura un archivo específico desde una rama o
                        commit específico a tu directorio de trabajo actual. Puedes usar esto para obtener una versión
                        particular de un archivo sin cambiar de rama completa.

                        git checkout -p o git checkout --patch: Inicia un proceso interactivo que te permite seleccionar
                        porciones específicas de cambios en un archivo y restaurar esas partes en el estado actual del
                        archivo.
                    </div>
                </td>
                <td class="consola">
                    <b>git checkout nueva-caracteristica</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-commit</td>
                <td>Registrar los cambios en el repositorio</td>
                <td class="ver-texto">
                    <div class="parametros consola">git commit -m "Mensaje de confirmación": Realiza un commit con un
                        mensaje de confirmación en línea. El mensaje debe ser breve y describir los cambios realizados
                        en el commit.

                        git commit -a -m "Mensaje de confirmación": Realiza un commit que incluye automáticamente todos
                        los archivos modificados y eliminados en el área de preparación, sin necesidad de ejecutar
                        previamente git add. Se utiliza con el mensaje de confirmación.

                        git commit --amend: Modifica el commit más reciente. Puedes utilizarlo para agregar cambios
                        adicionales al commit anterior o cambiar el mensaje de confirmación.

                        git commit -c (commit): Abre el editor de texto predeterminado para editar el mensaje de un
                        commit existente. Puedes utilizar esto para corregir o mejorar el mensaje de un commit previo.

                        git commit --no-verify: Realiza un commit sin ejecutar los ganchos de pre-commit. Los ganchos de
                        pre-commit son scripts personalizados que se ejecutan antes de realizar un commit, y esta opción
                        los omite.

                        git commit --allow-empty -m "Mensaje": Permite realizar un commit vacío, es decir, un commit que
                        no contiene cambios en los archivos. Puede ser útil en situaciones específicas.

                        git commit -S: Realiza un commit con firma GPG (GNU Privacy Guard) si tienes configurada una
                        firma GPG en tu configuración de Git. Esto se utiliza para verificar la autenticidad de los
                        commits.

                        git commit --fixup=(commit) y git commit --squash=(commit): Estos son parámetros utilizados con
                        la reorganización de commits a través de la herramienta git rebase. --fixup se utiliza para
                        marcar un commit como una corrección de otro commit específico, mientras que --squash se utiliza
                        para combinar un commit con otro y fundir sus cambios.

                    </div>
                </td>
                <td class="consola">
                    <b>git commit -m "Agregado nuevo contenido a mi_archivo.txt"</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-clone</td>
                <td>Clonar un repositorio en un directorio nuevo</td>
                <td class="ver-texto">
                    <div class="parametros consola">git clone (URL_del_repositorio)`: Clona un repositorio Git remoto en
                        tu máquina local. La
                        URL del repositorio remoto es obligatoria.

                        git clone (URL_del_repositorio) (nombre_directorio_local)`: Clona el repositorio en un
                        directorio local con un nombre específico en lugar del nombre del repositorio. Esto es útil si
                        deseas darle un nombre diferente al directorio local.

                        git clone --depth (número)`: Clona un número limitado de commits del historial del
                        repositorio remoto, lo que crea un clon superficial con menos historia. Esto puede hacer que la
                        clonación sea más rápida y consuma menos espacio en disco. Por ejemplo, `git clone --depth 1`
                        clonaría solo el último commit.

                        git clone --branch (nombre_rama)`: Clona un repositorio y te coloca en la rama especificada
                        en lugar de la rama predeterminada (generalmente "master"). Esto es útil si deseas clonar un
                        repositorio y comenzar a trabajar en una rama específica de inmediato.

                        git clone --bare (URL_del_repositorio)`: Clona un repositorio remoto en un formato "bare",
                        que es una copia sin el directorio de trabajo. Este tipo de clonación se usa principalmente para
                        crear repositorios remotos compartidos.

                        git clone --recurse-submodules (URL_del_repositorio)`: Clona un repositorio que contiene
                        submódulos Git y también clona esos submódulos dentro de tu clon local. Esto es útil cuando el
                        repositorio principal utiliza submódulos y deseas clonar y actualizar todos los submódulos.

                        git clone --mirror (URL_del_repositorio)`: Clona un repositorio remoto en modo espejo, que
                        incluye todas las referencias y ramas remotas. Esto se utiliza para crear una copia exacta del
                        repositorio remoto, incluyendo todas las ramas y etiquetas.
                    </div>
                </td>
                <td class="consola">
                    <b>git clone https://github.com/ejemplousuario/mi-repositorio.git</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-pull</td>
                <td>Este comando simplemente recupera los cambios del repositorio remoto predeterminado.</td>
                <td class="ver-texto">
                    <div class="parametros consola">git pull (repositorio_remoto)
                        (rama_remota):
                        Puedes especificar el repositorio remoto y la rama remota desde los cuales deseas
                        obtener los cambios. Por ejemplo:

                        bash
                        Copy code
                        git pull origin main
                        Esto recuperará los cambios de la rama "main" del repositorio remoto "origin" y los
                        fusionará en tu rama local actual.

                        git pull --rebase:
                        En lugar de fusionar los cambios, esta opción utiliza la función de rebase para mover
                        tus cambios locales sobre los cambios remotos. Esto puede ayudar a mantener un historial
                        de confirmaciones más lineal.

                        git pull --no-rebase:
                        Deshabilita la opción de rebase, lo que significa que los cambios locales se fusionarán
                        en la rama actual en lugar de aplicarse encima de los cambios remotos.

                        git pull --ff-only:
                        Solo permite una fusión hacia adelante (fast-forward). Si no se puede hacer una fusión
                        rápida debido a conflictos, Git no realizará la fusión y te dará un mensaje de error.

                        git pull --all:
                        Realiza "pull" desde todos los repositorios remotos configurados y todas las ramas
                        remotas, actualizando así todas las ramas locales que tienen un seguimiento
                        correspondiente.

                        git pull --tags:
                        Incluye las etiquetas (tags) del repositorio remoto al realizar el pull.

                        git pull --rebase=preserve:
                        Esta opción realiza un rebase en lugar de una fusión, pero preserva las fusiones
                        anteriores realizadas en la rama. Puede ser útil cuando quieres aplicar tus cambios
                        sobre una rama con un historial de fusiones.

                    </div>
                </td>
                <td class="consola">
                    <b>git pull origin main</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-push</td>
                <td>Se utiliza para enviar los cambios locales a un repositorio remoto.</td>
                <td class="ver-texto">
                    <div class="parametros consola">git push (repositorio_remoto) (rama_local): Empuja los cambios de
                        una rama local específica al repositorio remoto especificado.

                        git push -u (repositorio_remoto) (rama_local): Empuja los cambios de una rama local y establece
                        una relación de seguimiento con la rama remota.

                        git push --all (repositorio_remoto): Empuja todas las ramas locales que tienen una rama remota
                        correspondiente en el repositorio remoto.

                        git push --tags (repositorio_remoto): Empuja las etiquetas (tags) locales al repositorio remoto.

                        git push --force (repositorio_remoto) (rama_local): Fuerza la actualización de la rama remota
                        con la versión local, incluso si hay conflictos o cambios no fusionados.

                    </div>
                </td>
                <td class="consola">
                    <b>git push origin main</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-revert</td>
                <td>Para deshacer un commit previo creando un nuevo commit que revierte los cambios introducidos por el
                    commit original.</td>
                <td class="ver-texto">
                    <div class="parametros consola">git revert (commit): Crea un nuevo commit que deshace los cambios
                        introducidos por el commit especificado. El commit original permanece en el historial y se crea
                        un nuevo commit para revertir esos cambios.

                        git revert -n (commit): Realiza una "revert" parcial al commit especificado, sin crear
                        automáticamente un nuevo commit. Esto te permite hacer cambios adicionales antes de confirmar el
                        commit de reversión.

                        git revert --no-commit (commit): Similar a -n, realiza una "revert" parcial al commit
                        especificado pero también muestra los cambios en el área de preparación (staging). Esto te
                        permite seleccionar qué cambios incluir en el commit de reversión.

                        git revert -m (mainline) (commit): Se usa cuando estás trabajando con commits fusionados (merge
                        commits). Permite especificar la línea principal (mainline) que deseas revertir en caso de
                        fusiones múltiples. Normalmente, se utiliza -m 1 para revertir los cambios de la rama fusionada
                        en la rama actual.

                        git revert --edit (commit): Abre un editor de texto para editar el mensaje del commit de
                        reversión antes de crearlo. Esto es útil para proporcionar una descripción personalizada del
                        commit de reversión.

                        git revert --abort: Cancela el proceso de revertir en caso de que hayas utilizado -n o
                        --no-commit y desees volver al estado anterior al inicio del proceso de reversión.
                    </div>
                </td>
                <td class="consola">
                    <b>git revert HEAD</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-status</td>
                <td>Se utiliza para obtener información sobre el estado actual del repositorio, incluyendo los cambios
                    en el directorio de trabajo y el estado de los archivos en el área de preparación (staging).</td>
                <td class="ver-texto">
                    <div class="parametros consola">git status: Este es el uso más básico del comando. Muestra una lista
                        de los archivos modificados y no modificados en el directorio de trabajo, así como los archivos
                        que están en el área de preparación.

                        git status -s o git status --short: Proporciona una versión más concisa del estado, mostrando
                        solo las rutas de los archivos modificados y su estado en el formato de dos columnas.

                        git status -b o git status --branch: Muestra información adicional sobre la rama actual,
                        incluyendo si está detrás o adelante de su rama de seguimiento remota, o si hay cambios sin
                        confirmar.

                        git status -u o git status --untracked-files: Muestra información sobre archivos no rastreados
                        (untracked) además de los modificados y en el área de preparación. Puede ser útil para saber qué
                        archivos nuevos aún no han sido agregados a Git.

                        git status -v o git status --verbose: Proporciona información detallada sobre los cambios en los
                        archivos, incluyendo los nombres de los archivos y las líneas específicas modificadas en cada
                        uno.

                        git status -uno o git status --untracked-files=no: Muestra el estado normal sin incluir
                        información sobre archivos no rastreados. Esto es útil cuando solo estás interesado en ver los
                        archivos modificados y en el área de preparación.

                        git status -z o git status --porcelain: Imprime el estado en un formato más adecuado para su
                        procesamiento por scripts o herramientas automatizadas. Los nombres de los archivos y los
                        códigos de estado se separan por caracteres nulos.

                    </div>
                </td>
                <td class="consola">
                    <b>git status</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-tag</td>
                <td>Se utiliza para crear, listar, eliminar y administrar etiquetas (tags) en un repositorio Git. </td>
                <td class="ver-texto">
                    <div class="parametros consola">git tag: Muestra una lista de todas las etiquetas existentes en el
                        repositorio.

                        git tag (nombre_etiqueta): Crea una etiqueta ligera con el nombre especificado en el commit
                        actual. Las etiquetas ligeras son simplemente punteros a un commit específico y no contienen
                        información adicional.

                        git tag -a (nombre_etiqueta) -m "Mensaje": Crea una etiqueta anotada con el nombre especificado
                        y un mensaje descriptivo. Las etiquetas anotadas son objetos Git independientes que contienen
                        información sobre el autor, la fecha y el mensaje.

                        git tag -d (nombre_etiqueta): Elimina una etiqueta existente con el nombre especificado del
                        repositorio.

                        git tag -l "(patrón)": Lista etiquetas que coinciden con un patrón especificado. Esto es útil
                        cuando tienes muchas etiquetas y deseas filtrarlas por nombre.

                        git tag -v (nombre_etiqueta): Verifica la firma GPG de una etiqueta anotada, si está firmada
                        digitalmente.

                        git tag -f (nombre_etiqueta) (commit): Mueve una etiqueta existente al commit especificado. Esto
                        es útil si cometiste un error y necesitas mover una etiqueta a un commit diferente.

                    </div>
                </td>
                <td class="consola">
                    <b>git tag -a v1.0 -m "Versión 1.0 - Lanzamiento inicial"</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-bundle</td>
                <td>Se utiliza para crear un archivo binario que contiene todos los objetos Git necesarios para
                    replicar una parte o la totalidad de un repositorio.</td>
                <td class="ver-texto">
                    <div class="parametros consola">git bundle create (archivo) (desde) (hasta): Crea un archivo de
                        bundle que contiene todos los objetos Git desde un commit específico (desde) hasta otro commit
                        (hasta).

                        (archivo): El nombre del archivo de bundle que se creará.
                        (desde): El commit desde el cual se incluirán objetos en el bundle (puede ser un commit
                        específico o una rama).
                        (hasta): El commit hasta el cual se incluirán objetos en el bundle (puede ser un commit
                        específico o una rama).
                        git bundle verify (archivo): Verifica la integridad de un archivo de bundle existente.

                        (archivo): El nombre del archivo de bundle que se verificará.
                        git bundle list-heads (archivo): Muestra una lista de las referencias de cabezas (ramas) en el
                        archivo de bundle.

                        (archivo): El nombre del archivo de bundle del cual deseas listar las referencias de cabezas.
                        git bundle unbundle (archivo) [(directorio)]: Extrae los objetos Git y las referencias del
                        archivo de bundle y los coloca en un directorio local.

                        (archivo): El nombre del archivo de bundle del cual deseas extraer los objetos y referencias.
                        [(directorio)]: (Opcional) El directorio en el cual se deben extraer los objetos y referencias.
                        Por defecto, se utiliza el directorio actual.
                        git bundle create (archivo) --all: Crea un archivo de bundle que contiene todos los objetos Git
                        en el repositorio.

                    </div>
                </td>
                <td class="consola">
                    <b>git bundle create mi_repo.bundle main feature/mi_caracteristica</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-clean</td>
                <td>Se utiliza para eliminar archivos no rastreados y no deseados en el directorio de trabajo.</td>
                <td class="ver-texto">
                    <div class="parametros consola">git clean -n o git clean --dry-run: Muestra una lista de los
                        archivos y directorios que serían eliminados si se ejecutara git clean sin este parámetro. Esto
                        te permite verificar qué archivos se eliminarán antes de realizar la limpieza real.

                        git clean -f o git clean --force: Elimina de manera forzada los archivos y directorios no
                        rastreados que no están en el área de preparación (staging). Ten mucho cuidado al usar este
                        comando, ya que eliminará permanentemente los archivos sin posibilidad de recuperación.

                        git clean -i o git clean --interactive: Inicia un proceso interactivo que te permite seleccionar
                        los archivos y directorios no rastreados que deseas eliminar. Esto te da más control sobre la
                        eliminación y evita eliminar accidentalmente archivos importantes.

                        git clean -d o git clean --directory: Además de eliminar archivos no rastreados, también elimina
                        directorios no rastreados que estén vacíos después de la limpieza. Es útil para eliminar
                        carpetas vacías que quedan después de eliminar archivos.

                        git clean -x o git clean --force --include: Especifica patrones de archivos o directorios que
                        deseas excluir de la limpieza. Por ejemplo, git clean -xf *.log eliminará todos los archivos no
                        rastreados excepto los archivos con extensión ".log".

                    </div>
                </td>
                <td class="consola">
                    <b>git clean -f</b>
                </td>
            </tr>
            <!-- fin fila -->

            <!-- inicio fila -->
            <tr>
                <td class="consola">git-fetch</td>
                <td>Se utiliza en Git para obtener cambios de un repositorio remoto en tu repositorio local. </td>
                <td class="ver-texto">
                    <div class="parametros consola">git fetch (repositorio_remoto): Recupera todas las referencias
                        remotas del repositorio remoto especificado y las almacena en tu repositorio local. Esto incluye
                        ramas remotas y etiquetas, pero no fusiona automáticamente los cambios en tu rama actual.

                        git fetch --all: Realiza una operación de búsqueda en todos los repositorios remotos
                        configurados en tu repositorio local. Esto actualiza todas las referencias remotas en tu
                        repositorio local.

                        git fetch (repositorio_remoto) (rama_remota): Recupera una rama remota específica del
                        repositorio remoto y la almacena en tu repositorio local. Esto es útil si solo deseas actualizar
                        una rama específica en lugar de todas las ramas remotas.

                        git fetch -p o git fetch --prune: Elimina las referencias remotas que ya no existen en el
                        repositorio remoto. Esto ayuda a mantener limpio tu repositorio local eliminando ramas remotas
                        que se hayan eliminado en el repositorio remoto.

                        git fetch --tags: Descarga todas las etiquetas (tags) remotas del repositorio remoto y las
                        almacena en tu repositorio local. Esto es útil si necesitas obtener todas las etiquetas remotas.

                        git fetch (repositorio_remoto) (rama_remota):(rama_local): Recupera una rama remota específica y
                        la almacena en una rama local con un nombre diferente. Esto te permite darle un nombre
                        personalizado a la rama local.

                        git fetch -t o git fetch --prune-tags: Elimina etiquetas remotas que ya no existen en el
                        repositorio remoto, al igual que -p para las ramas remotas.

                        git fetch --dry-run: Realiza una simulación de la operación de búsqueda, mostrando qué cambios
                        se descargarían pero sin aplicar realmente los cambios. Esto te permite ver qué ocurrirá antes
                        de realizar la operación de búsqueda real.

                    </div>
                </td>
                <td class="consola">
                    <b>git fetch origin</b>
                </td>
            </tr>
            <!-- fin fila -->
        </tbody>
    </table>
</div>
<!-- Fin Actividad -->

<!-- Conclusión -->
<div class="intro" id="conclusion">
    <div class="intro-titulo">
        <h1>Conclusión</h1>
    </div>
    <div class="intro-texto">
        <p>
            Puedo concluir que los comandos de Git nos sirven para tener una buena administración en nuestro repositorio
            local, para así poder subirlo a nuestro repositorio en línea, así que mientras más organizados tengamos
            nuestros commits, mejor será la gestión de estos y por ende será más fácil revertir cambios. Por eso son
            importantes saber los comandos.
        </p>
    </div>

</div>
<!-- Fin Conclusión -->

<!-- Incluir pie de página -->
<?php
include('includes/pie.php');
?>