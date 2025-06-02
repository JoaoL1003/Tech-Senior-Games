//BARRA MENU

function abrirMenu() {
    document.getElementById('menu').style.width = '250px';
    document.getElementById('menu').style.display = 'block';
    document.getElementById('conteudo').style.marginLeft = '255px';
}
function fecharMenu() {
  document.getElementById('menu').style.width = '0px';
  document.getElementById('conteudo').style.marginLeft = '0px';
}
window.addEventListener("scroll", function(){
  let header = document.querySelector('#header')
  header.classList.toggle('rolagem',window.scrollY > 0)
}) 
  window.onscroll = function() {
  var scrollTopButton = document.getElementById("scrollTopButton");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      scrollTopButton.style.display = "block";
  } else {
      scrollTopButton.style.display = "none";
  }
};