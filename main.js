
  //carrosel
  var radio = document.querySelector('.manual-btn') 
  var cont = 1
  
  document.getElementById('radio1').checked = true
  
  setInterval(() => {
      proximaImg()
  }, 5000)
  
  function proximaImg(){
    cont++
  
    if(cont > 3){
      cont = 1
    }
  
    document.getElementById('radio' + cont).checked = true
  } 

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


//TESTE CARROSSEL 02
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelector('.carrossel');
    const totalSlides = document.querySelectorAll('.slide').length;

    // Restringe o índice
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }

    // Move os slides
    slides.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
}

// Funções para navegação
function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

// Adiciona os event listeners para os botões de navegação
document.querySelector('.prev').addEventListener('click', prevSlide);
document.querySelector('.next').addEventListener('click', nextSlide);

// Inicia mostrando o primeiro slide
showSlide(currentSlide);

