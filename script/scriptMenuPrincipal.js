$(document).ready(function () {
  var boxLivros = document.querySelector(".livrosBox");
  $("li").click(function () {
    var categoria = $(this).text();
    var requisicao = "../controller/consultar_obras.php?categoria=" + categoria;
    boxLivros.innerHTML = "";
    $.get(requisicao, function (data) {
      resultado = data;
      resultado = JSON.parse(resultado);
      for (dado in resultado) {
        boxLivros.innerHTML +=
          '<div class="livro"><div class="imagemCapa"></div><h3 class="tituloLivro">' +
          dado +
          '</h3><p class="descricaoLivro">' +
          resultado[dado] +
          '</p><a href=""> <div class="reservar">Reservar</div></a></div>';
      }
    });
  });
});

var button = document.querySelector(".iconMenu");

button.addEventListener("click", function () {
  document.querySelector(".container").classList.toggle("mobile");
});
