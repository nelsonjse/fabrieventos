

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./public/images/logo.jpeg" type="image/jpeg">

  <title>FabriEventos</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



  <link rel="stylesheet" href="./public/style.css">
</head>
<body>
<!-- <video autoplay muted loop id="bg-video">
  <source src="./public/images/videoFondo.mp4" type="video/mp4">
  
</video> -->
<div class="page-container">
  <!-- Header -->
  <header>
  <nav class="navbar">
  <div class="logo">
  <a href="#home">
    <img src="./public/images/logo.jpeg" alt="Mi Logo">
  </a>
</div>

    <ul class="nav-links">
      <li><a href="#home-title">Home</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <button class="burger">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>
</header>


  <!-- Home Section -->
  <section id="home-title" class="carousel">
  <div class="carousel-images">
    <img src="./public/images/logo.jpeg" alt="Imagen 1">
    <img src="./public/images/photo1.jpg" alt="Imagen 2">
    <img src="./public/images/imagen2.jpg" alt="Imagen 3">
    <img src="./public/images/imagen3.jpg" alt="Imagen 4">
  </div>
  
</section>



  <!-- Cards Section -->
  <?php
$isLeft = true; // Inicializar la variable para alternar las posiciones
?>

<?php if (!empty($cards)): ?>
    <?php foreach ($cards as $card): ?>
        <div class="card <?php echo $isLeft ? 'left' : 'right'; ?>">
            <div class="card-carousel">
            <button class="card-carousel-prev"><i class="fas fa-chevron-left"></i></button>
                <?php foreach ($card['images'] as $image): ?>
                    <img src="<?php echo $image; ?>" alt="Imagen del carrusel" style="display: none;">
                <?php endforeach; ?>
                <button class="card-carousel-next"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="card-content">
                <h2><?php echo $card['title']; ?></h2>
                <p><?php echo $card['content']; ?></p>
            </div>
        </div>
        <?php $isLeft = !$isLeft; ?>
    <?php endforeach; ?>
<?php else: ?>
    <p>No hay tarjetas disponibles.</p>
<?php endif; ?>







  <!-- About Us Section -->
  <section id="about">
  <div class="about-container">
    <div class="about-text">
      <h2>About Us</h2>
      
      <p>      
En Fabrieventos, llevamos años haciendo realidad los sueños de nuestros clientes, transformando cada evento en una experiencia única e inolvidable. Somos una empresa especializada en soluciones audiovisuales, reconocida por nuestro enfoque dedicado y nuestro compromiso con la excelencia.

Nuestro principal objetivo es crear un ambiente donde cada cliente se sienta cómodo y valorado. Cada montaje que realizamos refleja nuestra pasión, profesionalismo y atención al detalle. Desde proyectores hasta sistemas de sonido de última tecnología, trabajamos incansablemente para que tu evento sea perfecto, memorable y lleno de emoción.

</p>

    </div>
    <div class="main-carousel">
      <button id="prev"><i class="fas fa-chevron-left"></i></button>
      <img src="./public/images/about4.jpeg" alt="Imagen 1">
      <img src="./public/images/about5.jpeg" alt="Imagen 2" style="display: none;">
      
      <button id="next"><i class="fas fa-chevron-right"></i></button>
    </div>
  </div>
</section>


  <!-- Contact Section (Footer) -->
  <footer id="contact">
    <h2>Contact</h2>
    <ul>
      
      <li><a href="https://www.instagram.com/fabrieventos251?igsh=MW96NTg5NzZzeXNsdQ==" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
      <li><a href="https://wa.me/584245199737" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
      
    </ul>
  </footer>
  <script src="./public/script.js"></script>

</div>
</body>
</html>
