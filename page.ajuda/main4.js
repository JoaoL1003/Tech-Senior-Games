
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

document.addEventListener("DOMContentLoaded", () => {
  const fadeElements = document.querySelectorAll(".fade-in");

  const observerOptions = {
      threshold: 0.2, // Elemento deve estar 20% visível para ativar
  };

  const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              entry.target.classList.add("show");
          } else {
              entry.target.classList.remove("show");
          }
      });
  }, observerOptions);

  fadeElements.forEach((el) => observer.observe(el));
});

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

