$(document).ready(function () {
  var boxLivros = document.querySelector(".livrosBox");

  var requisicao = "../controller/consultar_obras.php?categoria=Todos";
  boxLivros.innerHTML = "";
  $.get(requisicao, function (data) {
    resultado = data;
    resultado = JSON.parse(resultado);
    console.log(resultado);
    for (dado in resultado) {
      boxLivros.innerHTML +=
        '<div class="livro"><img src="' +
        resultado[dado][1] +
        '"><h3 class="tituloLivro">' +
        dado +
        '</h3><p class="descricaoLivro">' +
        resultado[dado][0] +
        '</p><a href="../controller/reservar.php?obra=' +
        dado +
        '"><div class="reservar">Reservar</div></a></div>';
    }
  });

  $("li").click(function () {
    var categoria = $(this).text();
    var requisicao = "../controller/consultar_obras.php?categoria=" + categoria;
    boxLivros.innerHTML = "";
    $.get(requisicao, function (data) {
      resultado = data;
      resultado = JSON.parse(resultado);
      for (dado in resultado) {
        boxLivros.innerHTML +=
          '<div class="livro"><img src="' +
          resultado[dado][1] +
          '"><h3 class="tituloLivro">' +
          dado +
          '</h3><p class="descricaoLivro">' +
          resultado[dado][0] +
          '</p><a href="../controller/reservar.php?obra=' +
          dado +
          '"><div class="reservar">Reservar</div></a></div>';
      }
    });
  });
});

var button = document.querySelector(".iconMenu");

button.addEventListener("click", function () {
  document.querySelector(".container").classList.toggle("mobile");
});
