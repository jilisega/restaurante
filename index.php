<?php
  
  include_once('./config/config.php');
 
?>
<br/>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=chrome">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Grilli - Amazing & Delicious Food</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./Assets/css/style.css">
  

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Grilli</p>
  </div>

  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Restaurant St, San Salvador, ES
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">A diario : 8.00 am to 10.00 pm</span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+503 7156-6608</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:booking@restaurant.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">booking@restaurant.com</span>
      </a>

    </div>
  </div>


<?php include('app/Templates/barra.php');  ?>


  





  <main>
    <article>
  

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="<?php Base::imagenes('hero-slider-1.jpg'); ?>" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Tradicional e higiene</p>

            <h1 class="display-1 hero-title slider-reveal">
              Por el amor de <br>
              comida deliciosa
            </h1>

            <p class="body-2 hero-text slider-reveal">
            Ven con tu familia y siente la alegría de una comida deliciosa.
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Ver Nuestro Menú</span>

              <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="<?php Base::imagenes('hero-slider-2.jpg'); ?>" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Experiencia Encantadora</p>

            <h1 class="display-1 hero-title slider-reveal">
              Sabores inspirados en <br>
              las estaciones
            </h1>

            <p class="body-2 hero-text slider-reveal">
            Ven con tu familia y siente la alegría de una comida deliciosa.
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Ver Nuestro Menú</span>

              <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="<?php Base::imagenes('hero-slider-3.jpg'); ?>" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Asombrosa y deliciosa</p>

            <h1 class="display-1 hero-title slider-reveal">
            donde cada sabor <br>
            cuenta una historia
            </h1>

            <p class="body-2 hero-text slider-reveal">
            Ven con tu familia y siente la alegría de una comida deliciosa.
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Ver Nuestro Menú</span>

              <span class="text text-2" aria-hidden="true">Ver Nuestro Menú</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="<?php Base::imagenes('hero-icon.png'); ?>" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Reservar una mesa</span>
        </a>

      </section>


      <!-- 
        - #SERVICE
      -->


      <!-- 
        - #ABOUT
      -->


      <!-- 
        - #SPECIAL DISH
      -->

      <!-- 
        - #MENU
      -->


      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
           Quería agradecerte por invitarme a esa increíble cena de la otra noche. La comida era
            extraordinario.
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="<?php Base::imagenes('testi-avatar.jpg'); ?>" width="100" height="100" loading="lazy" alt="Sam Jhonson"
              class="img">

            <p class="label-2 profile-name">Sam Jhonson</p>
          </div>

        </div>
      </section>


      <!-- 
        - #RESERVATION
      -->



      <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Por qué elegirnos</p>

          <h2 class="headline-1 section-title">Nuestra fuerza</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="<?php Base::imagenes('features-icon-1.png'); ?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Alimentos higiénicos</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="<?php Base::imagenes('features-icon-2.png'); ?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Ambiente fresco</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="<?php Base::imagenes('features-icon-3.png'); ?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Chefs expertos</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="<?php Base::imagenes('features-icon-4.png'); ?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Evento y fiesta</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

          </ul>

          <img src="<?php Base::imagenes('shape-7.png'); ?>" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="<?php Base::imagenes('shape-8.png'); ?>" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>





      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Actualizaciones recientes</p>

          <h2 class="section-title headline-1 text-center">Evento proximo</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="<?php Base::imagenes('event-1.jpg'); ?>" width="350" height="450" loading="lazy"
                    alt="Sabor tan bueno que intentarás comerlo con los ojos." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">15/09/2023</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Comida, Sabor</p>

                  <h3 class="card-title title-2 text-center">
                  Sabor tan bueno que intentarás comerlo con los ojos.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="<?php Base::imagenes('event-2.jpg'); ?>" width="350" height="450" loading="lazy"
                    alt="Sabor tan bueno que intentarás comerlo con los ojos." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">08/09/2023</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Comida sana</p>

                  <h3 class="card-title title-2 text-center">
                  Sabor tan bueno que intentarás comerlo con los ojos.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="<?php Base::imagenes('event-3.jpg'); ?>" width="350" height="450" loading="lazy"
                    alt="Sabor tan bueno que intentarás comerlo con los ojos." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Recipie</p>

                  <h3 class="card-title title-2 text-center">
                  Sabor tan bueno que intentarás comerlo con los ojos.Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Ver nuestro blog</span>

            <span class="text text-2" aria-hidden="true">Ver nuestro blog</span>
          </a>

        </div>
      </section>

    </article>
  
<?php include_once("app/templates/footer.php"); ?>