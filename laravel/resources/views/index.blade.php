<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Magical Menagerie</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">Magical Menagerie</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#product">Products</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="nav__search" id="nav-search">
        <input type="text" placeholder="Search" />
        <span><i class="ri-search-2-line"></i></span>
      </div>
    </nav>

    <header class="section__container header__container" id="home">
      <div class="header__image">
        <img src="{{ asset('assets/header.png') }}" alt="header" />
      </div>
      <div class="header__content">
        <div>
          <h1>For Your<br>Happiest Pet</h1>
          <p>
            Welcome to Magical Menagerie, where every furry, feathery, and scaly friend awaits! Discover a whimsical world filled with enchanting pets, unique supplies, and expert advice to help you create lasting memories with your beloved companions.
          </p>
        </div>
      </div>
    </header>

    <section class="section__container about__container" id="about">
      <div class="about__header">
        <div>
          <h2 class="section__header">About us</h2>
          <p class="section__description">
            The Magical Menagerie was a magical creature shop in North Side, Diagon Alley.
          </p>
        </div>
        <a href="https://harrypotter.fandom.com/wiki/Magical_Menagerie" target="_blank" rel="noopener noreferrer">
          <button class="about__btn">Learn More</button>
        </a>        
      </div>
      <div class="about__content">
        <div class="about__image">
          <img src="{{ asset('assets/about.png') }}" alt="about" />
        </div>
        <div class="about__grid">
          <div class="about__card">
            <h3>1.</h3>
            <h4>Choose your desired pet</h4>
            <p>
              Select from our enchanting array of furry, feathery, or scaly companions.
            </p>
          </div>
          <div class="about__card">
            <h3>2.</h3>
            <h4>Name them</h4>
            <p>
              Give your new friend a special name that reflects their unique personality.
            </p>
          </div>
          <div class="about__card">
            <h3>3.</h3>
            <h4>Fill out the form</h4>
            <p>
              Complete our simple form to ensure a smooth adoption process for your pet.
            </p>
          </div>
          <div class="about__card">
            <h3>4.</h3>
            <h4>Fur baby on delivery!</h4>
            <p>
              Exciting delivery time! Your new furry friend will arrive at your door soon.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container product__container" id="product">
      <h2 class="section__header">Products</h2>
      <div class="product__grid">
        <!-- Card untuk Pets -->
        <a href="{{ url('/pets') }}" class="product__card">
          <h4>Pets</h4>
          <img src="{{ asset('assets/cat.png') }}" alt="product" />
        </a>
    
        <!-- Card untuk Pet Foods -->
        <a href="{{ url('/pet-foods') }}" class="product__card">
          <h4>Pet Foods</h4>
          <img src="{{ asset('assets/food.png') }}" alt="product" />
        </a>
    
        <!-- Card untuk Pet Toys -->
        <a href="{{ url('/pet-toys') }}" class="product__card">
          <h4>Pet Toys</h4>
          <img src="{{ asset('assets/toy.png') }}" alt="product" />
        </a>
      </div>
    </section>
     

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo2">
            <a href="#" class="logo">Magical Menagerie</a>
          </div>
          <h4>Contact Us</h4>
          <h4>Privacy Policy</h4>
          <h4>FAQs</h4>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
  </body>
</html>
