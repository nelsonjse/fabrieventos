// Navegación suave al hacer clic en enlaces del menú
document.querySelectorAll('nav ul li a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href').substring(1);
    document.getElementById(targetId).scrollIntoView({
      behavior: 'smooth'
    });
  });
});


const carousel = document.querySelector('.carousel-images');
const images = document.querySelectorAll('.carousel-images img');

// Duplica las imágenes para el efecto infinito
images.forEach(image => {
  const clone = image.cloneNode(true);
  carousel.appendChild(clone);
});

// Define la velocidad del deslizamiento
const speed = 4.5; // Velocidad en píxeles por cuadro

// Configuración inicial
let position = 0;

// Animación continua
function animate() {
  position -= speed; // Desliza hacia la izquierda
  carousel.style.transform = `translateX(${position}px)`;

  // Reinicia la posición cuando termina el ciclo
  const totalWidth = carousel.scrollWidth / 2; // Mitad del ancho debido a la duplicación
  if (Math.abs(position) >= totalWidth) {
    position = 0; // Vuelve al inicio suavemente
  }

  requestAnimationFrame(animate); // Mantén el bucle de animación
}

// Inicia la animación
animate();





// --- Carrusel Principal ---
let mainCurrentIndex = 0;

// Función para mostrar elementos del carrusel (imágenes y videos)
function showMainCarouselItem(index) {
  const items = document.querySelectorAll('.main-carousel img, .main-carousel video');
  items.forEach((item, i) => item.style.display = i === index ? 'block' : 'none');
}

// Manejo del botón "Next"
document.getElementById('next').addEventListener('click', () => {
  const items = document.querySelectorAll('.main-carousel img, .main-carousel video');
  mainCurrentIndex = (mainCurrentIndex + 1) % items.length;
  showMainCarouselItem(mainCurrentIndex);
});

// Manejo del botón "Prev"
document.getElementById('prev').addEventListener('click', () => {
  const items = document.querySelectorAll('.main-carousel img, .main-carousel video');
  mainCurrentIndex = (mainCurrentIndex - 1 + items.length) % items.length; // Ajusta índice correctamente
  showMainCarouselItem(mainCurrentIndex);
});

// Inicializar carrusel
showMainCarouselItem(mainCurrentIndex);






// --- Carruseles en las Cards ---
document.querySelectorAll('.card-carousel').forEach(cardCarousel => {
  let cardCurrentIndex = 0;
  const images = cardCarousel.querySelectorAll('img');
  const prevButton = cardCarousel.querySelector('.card-carousel-prev');
  const nextButton = cardCarousel.querySelector('.card-carousel-next');

  // Función para mostrar imágenes
  const showImage = (index) => {
      images.forEach((img, i) => img.style.display = i === index ? 'block' : 'none');
  };

  // Mover al anterior
  prevButton.addEventListener('click', () => {
      cardCurrentIndex = (cardCurrentIndex - 1 + images.length) % images.length;
      showImage(cardCurrentIndex);
  });

  // Mover al siguiente
  nextButton.addEventListener('click', () => {
      cardCurrentIndex = (cardCurrentIndex + 1) % images.length;
      showImage(cardCurrentIndex);
  });

  // Inicializar el carrusel mostrando la primera imagen
  showImage(cardCurrentIndex);
});


  
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
  nav.classList.toggle('active'); // Activa o desactiva el menú
  burger.classList.toggle('toggle'); // Agrega animación al botón hamburguesa
});



