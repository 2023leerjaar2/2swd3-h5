<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamadoing</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
     <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>

    <header class="header">
         <div class="logo">
            <img src="IMG/LogoKamadoing.png" alt="Logo" style="height: 50px;">
            </div>
        <nav class="navbar">
            <a href="#Home" class="active">Home</a>
            <a href="#Recepten">Recepten</a>
            <a href="#Kookboeken">Kookboeken</a>
            <a href="#Review">Review</a>
            <a href="Contact.php">Contact</a>
        </nav>
            <a href="login.php"><button class="btn">Login</button></a>
    </header>
    <section class="home-section" id="Home">
        <article class="text-content">
            <h5>Meest Gekozen in dit seizoen</h5>
            <h2>BBQ Bacon Burger</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam deleniti tempore quae iusto dolores laboriosam suscipit. In ullam odio non. lorem15</p>
            <a href="#Recepten"><button class="btn">Bekijken</button></a>
        </article>
        <article class="image-section">
            <img src="IMG/pngegg.png" alt="">
            <article class="shadow"></article>
        </article>
    </section>
    <section class="Recept-section" id="Recepten"> 
        <h2 class="heading">Onze <span>Recepten</span></h2>
        <article class="receptGallery">
            <article class="food-image">
                <img src="IMG/bbq.png" alt="">
                <article class="inner-text">
                    <h2>Gegrilde Vlees</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et odit libero exercitationem consequatur? Hic, voluptatibus.</p>
                </article>
            </article>

            <article class="food-image">
                <img src="IMG/p7.png" alt="">
                <article class="inner-text">
                    <h2>Gegrilde Vlees</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et odit libero exercitationem consequatur? Hic, voluptatibus.</p>
                </article>
            </article>

            <article class="food-image">
                <img src="IMG/p8.png" alt="">
                <article class="inner-text">
                    <h2>Gegrilde Vlees</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et odit libero exercitationem consequatur? Hic, voluptatibus.</p>
                </article>
            </article>

            <article class="food-image">
                <img src="IMG/p2.png" alt="">
                <article class="inner-text">
                    <h2>Gegrilde Vlees</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et odit libero exercitationem consequatur? Hic, voluptatibus.</p>
                </article>
            </article>
    </article>
    </section>


    
    <section id="Kookboeken" class="kookboeken section-bg">
        <div class="container" data-aos="fade-up">

            <h2 class="heading">Onze <span>kookboeken</span></h2>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="kookboek">
                        <div class="kookboek-img">
                            <img src="IMG/img2.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="kookboek-info">
                            <h4>Pien Wekking</h4>
                            <span>Master Chef</span>
                            <p>Maak diepe indruk op je gasten (en jezelf) met het nieuwste boek van Pien laat haar eten zien
                                Na het succes van haar eerste kookboek laat Pien nu nog meer eten zien, met meer dan 70 gloednieuwe, bijzondere
                                en de allerlekkerste </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="kookboek">
                        <div class="kookboek-img">
                            <img src="IMG/img4.jpeg" class="#" alt="">
                        </div>
                        <div class="kookboek-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Patissier</span>
                            <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima
                                suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="kookboek">
                        <div class="kookboek-img mt-3">
                            <img src="IMG/img2.jpeg" class="#"  alt="">
                        </div>
                        <div class="kookboek-info">
                            <h4>William Anderson</h4>
                            <span>Cook</span>
                            <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt.
                            Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="Review-section" id="Review">
        <h2 class="heading">Recente <span>Reviews</span></h2>
        <article class="swiper mySwiper">
            <article class="swiper-wrapper">
                <article class="swiper-slide">
         <article class="review-image-section">
            <img src="IMG/review1.jpeg" alt="">
            <article class="review-text">
                <h2>Johan B.</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde ab fugiat quas quibusdam, harum debitis sunt totam temporibus doloribus aspernatur dicta quod magnam, inventore fuga necessitatibus cum quaerat placeat aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, reiciendis?</p>
                <h5>Worker</h5>
                <article class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </article>
            </article>
         </article>
     </article>
     <article class="swiper-slide">
        <article class="review-image-section">
           <img src="IMG/review2.jpeg" alt="">
           <article class="review-text">
               <h2>Johan B.</h2>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde ab fugiat quas quibusdam, harum debitis sunt totam temporibus doloribus aspernatur dicta quod magnam, inventore fuga necessitatibus cum quaerat placeat aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, reiciendis?</p>
               <h5>Worker</h5>
               <article class="star">
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
               </article>
           </article>
        </article>
    </article>
    <article class="swiper-slide">
        <article class="review-image-section">
           <img src="IMG/review3.jpeg" alt="">
           <article class="review-text">
               <h2>Johan B.</h2>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde ab fugiat quas quibusdam, harum debitis sunt totam temporibus doloribus aspernatur dicta quod magnam, inventore fuga necessitatibus cum quaerat placeat aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, reiciendis?</p>
               <h5>Worker</h5>
               <article class="star">
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
               </article>
           </article>
        </article>
    </article>
    <article class="swiper-slide">
        <article class="review-image-section">
           <img src="IMG/review4.jpeg" alt="">
           <article class="review-text">
               <h2>Johan B.</h2>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde ab fugiat quas quibusdam, harum debitis sunt totam temporibus doloribus aspernatur dicta quod magnam, inventore fuga necessitatibus cum quaerat placeat aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, reiciendis?</p>
               <h5>Worker</h5>
               <article class="star">
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
               </article>
           </article>
        </article>
    </article>
    <article class="swiper-slide">
        <article class="review-image-section">
           <img src="IMG/review5.jpeg" alt="">
           <article class="review-text">
               <h2>Johan B.</h2>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde ab fugiat quas quibusdam, harum debitis sunt totam temporibus doloribus aspernatur dicta quod magnam, inventore fuga necessitatibus cum quaerat placeat aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, reiciendis?</p>
               <h5>Worker</h5>
               <article class="star">
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
                   <i class='bx bxs-star'></i>
               </article>
           </article>
        </article>
    </article>
     </article>
     <article class="swiper-button-prev"></article>
     <article class="swiper-button-next"></article>
     <article class="swiper-pagination"></article>
    </article>
    </section>
    <footer>
        <article class="innerItem">
            <h2>Kama <span>Doing</span></h2>
            <article class="textbar">
                <a href="#Home">Home</a>
                <a href="#Recepten">Recepten</a>
                <a href="#Kookboeken">Kookboeken</a>
                <a href="#Review">Review</a>
                <a href="contact.php">Contact</a>
            </article>
            <article class="footer-icon">
                <i class='bx bxl-github'></i>
                <i class='bx bxl-meta' ></i>
                <i class='bx bxl-instagram' ></i>
                <i class='bx bxl-facebook-circle' ></i>
            </article>
        </article>
        <hr>
        <p>copyright@teamala5</p>
    </footer>

         
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="JS/style.js"></script>
</body>
</html>