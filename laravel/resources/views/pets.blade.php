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
            <!-- Ubah href menjadi 'index.html' -->
            <a href="{{ url('/') }}" class="logo">Magical Menagerie</a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
        <ul class="nav__links" id="nav-links">
          <li><a href="{{ url('/#home') }}">Home</a></li>
          <li><a href="{{ url('/#about') }}">About</a></li>
          <li><a href="{{ url('/#product') }}">Products</a></li>
          <li><a href="{{ url('/#contact') }}">Contact</a></li>
        </ul>
        <div class="nav__search" id="nav-search">
          <input type="text" placeholder="Search" />
          <span><i class="ri-search-2-line"></i></span>
        </div>
      </nav>
      

    <section class="section__container product__container" id="product">
      <h2 class="section__header"><center>List of Pets</center></h2>
      <div class="product__grid">
        <div class="product__card">
          <h4>Cats</h4>
          <img src="{{ asset('assets/Cat-2.png') }}" alt="product" />
          <br>
          <h5><center>9 Galleons</center></h5>
        </div>
        <div class="product__card">
          <h4>Owls</h4>
          <img src="{{ asset('assets/Owl.png') }}" alt="product" />
          <br>
          <h5><center>15 Galleons</center></h5>
        </div>
        <div class="product__card">
          <h4>Toads</h4>
          <img src="{{ asset('assets/Toad.png') }}" alt="product" />
          <br>
          <h5><center>5 Galleons</center></h5>
        </div>
        <div class="product__card">
            <h4>Baby Nifflers</h4>
            <img src="{{ asset('assets/Niffler.png') }}" alt="product" />
            <br>
            <h5><center>50 Galleons</center></h5>
          </div>
          <div class="product__card">
            <h4>Ferrets</h4>
            <img src="{{ asset('assets/Ferret.png') }}" alt="product" />
            <br>
            <h5><center>12 Galleons</center></h5>
          </div>
          <div class="product__card">
            <h4>Bats</h4>
            <img src="{{ asset('assets/Bat.png') }}" alt="product" />
            <br>
            <h5><center>10 Galleons</center></h5>
          </div>
      </div>
    </section>  

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo2">
            <a href="{{ url('/#') }}" class="logo">Magical Menagerie</a>
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
