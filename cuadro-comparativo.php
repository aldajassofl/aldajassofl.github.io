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
        <h4>Cuadro Comparativo</h4>
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
            Esta actividad se trata de que en un cuadro comparativo, comparar 3 distintos software de control de
            versiones, como la fecha de lanzamiento del software, los creadores o creador, la ultima versión estable a
            la fecha, el lenguaje en el que está desarrollado y el modelo de desarrollo (si es software libre o
            privado). En este caso yo elegí Git, Microsoft Team Foundation Server 2018 (TFS 2018) y Apache Subversion.
        </p>
    </div>

</div>
<!-- Fin Introducción -->

<!-- Actividad -->
<div class="cuadro-comparativo" id="actividad">
    <div class="intro-titulo">
        <h1>Cuadro Comparativo</h1>
    </div>
    <table class="tabla-comparativa">
        <thead class="ignore">
            <th></th>
            <th>
                <div class="tabla-titulos">
                    <img src="https://th.bing.com/th/id/OIP.13ROrVdbZSDXayXY0kyxYQAAAA?pid=ImgDet&rs=1" alt=""
                        title="Git">
                    <p>Git</p>
                </div>

            </th>
            <th>
                <div class="tabla-titulos">
                    <img src="https://ms-vscs-rm.gallerycdn.vsassets.io/extensions/ms-vscs-rm/vss-services-externaltfs/15.106.1/1474901546964/Microsoft.VisualStudio.Services.Icons.Default"
                        alt="" title="TFS 2018">
                    <p>Microsoft Team Foundation Server 2018</p>
                </div>

            </th>
            <th>
                <div class="tabla-titulos">
                    <img src="https://th.bing.com/th/id/R.7651af709a640d353dd33e9ca7275352?rik=tGOtDcXXHU86Cw&riu=http%3a%2f%2fsiliconangle.com%2ffiles%2f2013%2f06%2fsubversion-logo.png&ehk=ujGEOdSgFqrBY6I2RiIs9V%2bFes34iJ0EZqAEO0HrcUg%3d&risl=&pid=ImgRaw&r=0"
                        alt="" title="Apache Subversion">
                    <p>Apache Subversion</p>
                </div>

            </th>
        </thead>
        <tbody>
            <tr>
                <th>
                    Fecha de lanzamiento
                </th>
                <td>
                    <div class="tabla-texto">La primera versión estable de Git fue lanzada el 19 de octubre de 2007
                    </div>
                </td>
                <td>
                    <div class="tabla-texto">En el año 2005 y se lanzó como parte de la suite Visual Studio 2005.</div>
                </td>
                <td>
                    <div class="tabla-texto">Fue lanzado el 20 de octubre de 2000</div>
                </td>
            </tr>
            <tr>
                <th>Creador(es)</th>
                <td>
                    <div class="tabla-texto">Linus Torvalds</div>
                </td>
                <td>
                    <div class="tabla-texto">Microsoft</div>
                </td>
                <td>
                    <div class="tabla-texto">CollabNet Inc</div>
                </td>
            </tr>
            <tr>
                <th>Ultima versión estable</th>
                <td>
                    <div class="tabla-texto">2.41.0</div>
                </td>
                <td>
                    <div class="tabla-texto">16.131.28106.2</div>
                </td>
                <td>
                    <div class="tabla-texto">1.14.2</div>
                </td>
            </tr>
            <tr>
                <th>Lenguaje</th>
                <td>
                    <div class="tabla-texto">
                        <img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/c_original_logo_icon_146611.png"
                            alt="Lenguaje C" title="Lenguaje C">
                    </div>
                </td>
                <td>
                    <div class="tabla-texto">
                        <img src="https://th.bing.com/th/id/R.fa84f6b980c897679baf29b02bc00255?rik=JkJ3U%2bxTjw4CfA&riu=http%3a%2f%2fuserscontent2.emaze.com%2fimages%2fc3449ffe-9e37-4e41-a7f8-2fc4ca8a9455%2f635393994266860197_C.png&ehk=oE3uhy2DC0Qp58PEq%2bfdrm3piATV%2baDd4cHszjBec1o%3d&risl=&pid=ImgRaw&r=0"
                            alt="Lenguaje C#" title="Lenguaje C#">
                        <img src="https://static.gunnarpeipman.com/wp-content/uploads/2020/09/aspnet-featured.png"
                            alt="ASP.NET" title="ASP.NET">
                    </div>
                </td>
                <td>
                    <div class="tabla-texto">
                        <img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/c_original_logo_icon_146611.png"
                            alt="Lenguaje C" title="Lenguaje C">
                    </div>
                </td>
            </tr>
            <tr>
                <th>Modelo de desarrollo</th>
                <td>
                    <div class="tabla-texto">Software libre</div>
                </td>
                <td>
                    <div class="tabla-texto">Software privado</div>
                </td>
                <td>
                    <div class="tabla-texto">Software libre</div>
                </td>
            </tr>
        </tbody>


    </table>
</div>
<!-- Fin Actividad -->


<!-- Incluir pie de página -->
<?php
include('includes/pie.php');
?>