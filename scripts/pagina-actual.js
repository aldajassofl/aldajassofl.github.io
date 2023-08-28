document.addEventListener("DOMContentLoaded", function() {
    var currentPage = window.location.pathname.split("/").pop();//obtienes la url de la pagina
    var links = document.querySelectorAll("div nav ul li a"); //Obtienes las propiedades del anchor
    
    links.forEach(function(link) {//Para cada pagina
      if (link.getAttribute("href") === currentPage) {//obtener igualdad de la pagina actual con href de anchor
        link.classList.add("pagina-actual");//agregar del CSS la clase pagina actual.
      }
    });
  });
  