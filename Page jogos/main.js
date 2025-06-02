
//Cardes


// Seleciona o botão de link
const linkVejaMais = document.querySelector('.link-vejaMais-catalogo');

// Adiciona o evento de clique
linkVejaMais.addEventListener('click', function(e) {
    e.preventDefault(); // Impede o redirecionamento do link
    
    // Seleciona o container dos cards
    const container = document.querySelector('.conteiner-vejaMais');
    
    // Alterna a classe show-cards no container
    container.classList.toggle('show-cards');

    // Verifica se a classe show-cards foi adicionada e altera o texto do link
    if (container.classList.contains('show-cards')) {
        linkVejaMais.textContent = "Ver menos";
    } else {
        linkVejaMais.textContent = "Veja mais";
    }
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

function filtrarJogos() {
  // Obtém o valor digitado na barra de pesquisa
  const termoPesquisa = document.getElementById("barra-pesquisa").value.toLowerCase();

  // Obtém todos os cards de jogo
  const jogos = document.querySelectorAll(".card");

  // Itera sobre os jogos e verifica se o título contém o termo de pesquisa
  jogos.forEach(jogo => {
      // Pega o título do jogo a partir do atributo "data-title" do card
      const tituloJogo = jogo.getAttribute("data-title").toLowerCase();

      // Verifica se o título do jogo contém o termo de pesquisa
      if (tituloJogo.includes(termoPesquisa)) {
          jogo.classList.remove("hidden");
      } else {
          jogo.classList.add("hidden");
      }
  });
}

//icone barra de navegação
const setFavicon = (theme) => {
    const favicon = document.getElementById('dynamic-favicon');
    if (theme === 'dark') {
        favicon.href = '/Page jogos/Imgs/LOGOBRANCA.png';
    } else {
        favicon.href = '/Page jogos/Imgs/LOGOPRETA.png';
    }
};

// Detecta o tema inicial
const themeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
setFavicon(themeMediaQuery.matches ? 'dark' : 'light');

// Atualiza o favicon ao mudar o tema
themeMediaQuery.addEventListener('change', (e) => {
    setFavicon(e.matches ? 'dark' : 'light');
});

