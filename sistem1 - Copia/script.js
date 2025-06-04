
const imagens = ['assets/602.webp', 'assets/603.webp', 'assets/601.webp'];
  let index = 0;
  let intervalo;

  function startCarousel() {
    intervalo = setInterval(() => {
      index = (index + 1) % imagens.length;
      document.getElementById('carousel-image').src = imagens[index];
    }, 2000); // troca a cada 1 segundo
  }

  function stopCarousel() {
    clearInterval(intervalo);
    index = 0;
    document.getElementById('carousel-image').src = imagens[0]; // volta pra primeira
  }