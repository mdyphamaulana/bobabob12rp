<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bobabob</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">

<!-- alpine js -->

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script src="src/app.js"></script>

</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar" x-data>
    <a href="#" class="navbar-logo">boba<span>bob</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">Produk</a>
      <a href="#contact">Kontak</a>
     
    


   
      <?php
      // Periksa apakah pengguna sudah login
      if (isset($_SESSION["username"])) {
          // Jika sudah login, tampilkan tombol logout
          echo '<a href="logout.php">Logout</a>';
      } else {
          // Jika belum login, tampilkan tombol login
          echo '<a href="index2.php">Login</a>';
      }
      ?>

</div>
    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button">
        
        <i data-feather="shopping-cart"></i>
      
        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity">  </span>
      
      </a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">

      <template x-for="(item, index) in $store.cart.items" x-keys="index">

      <div class="cart-item">
        <img :src="`img/products/${item.img}`" :alt="item.name">
        <div class="item-detail">
          <h3 x-text="item.name"></h3>
          <div class="item-price">

            <span x-text="rupiah(item.price)"></span> &times;
            <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
            <span x-text="item.quantity"></span>
            <button id="add" @click="$store.cart.add(item)">&plus;</button> &equals;
            <span x-text="rupiah(item.total)"></span>

          </div>
        </div>
      </div>
    </template>
    <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem;;">Keranjang kosong</h4>
    <h4 x-show="$store.cart.items.length"> Total : <span x-text="rupiah($store.cart.total)"></span></h4>
    

    <div class="form-container" x-show="$store.cart.items.length">
    <form action="" id="checkoutForm">
      <h5>Customer Detail</h5>
      <label for="name">
        <span>Name</span>
        <input type="text" name="name" id="name">
      </label>
      <label for="email">
        <span>email</span>
        <input type="email" name="email" id="email">
      </label>
      <label for="phone">
        <span>phone</span>
        <input type="number" name="phone" id="phone" autocomplete="off">
      </label>

      <button class="checkout-button" type="submit" id="checkout-button" value="checkout">Checkout</button>

    </form>
  </div>
    </div>
    <!-- Shopping Cart end -->

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/menu/bob.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih bobba tea kami?</h3>
        <p>Selamat datang di Bubble Tea kami, tempat kelezatan dan kreasi menyatu! Nikmati kesegaran teh berkualitas tinggi dengan sentuhan unik dari boba kenyal. Pilihan rasa inovatif, layanan ramah,  </p>
        <p>dan komitmen pada keberlanjutan menjadikan kami teman setia dalam setiap momen. Pilihlah kelezatan, pilihlah pengalaman, pilihlah kami, Bubble Tea yang tak terlupakan!





        </p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>NEW</span> FLAVOURS</h2>
    <p>SELALU ADA SENSASI BARU</p>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu/bobacoffe.png" alt="blacksugar" class="menu-card-img">
        <h3 class="menu-card-title"><a href="#">BLACKSUGAR</a></h3>
        <p class="menu-card-price" >Rp 35.000</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/yingyang sugar.png" alt="ying yang" class="menu-card-img">
        <h3 class="menu-card-title"><a href="#" >YING YANG</a></h3>
        <p class="menu-card-price">Rp 25.000</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/original.png" alt="originaltaste" class="menu-card-img">
        <h3 class="menu-card-title"><a href="#">ORIGINAL TASTE</a></h3>
        <p class="menu-card-price">Rp 20.000</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/cranberry.png" alt="cranberry" class="menu-card-img">
        <h3 class="menu-card-title"><a href="#">CRANBERRY</a></h3>

        <p class="menu-card-price">Rp 45.000</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/kiwi.png" alt="kiwi" class="menu-card-img">
        <h3 class="menu-card-title"><a href="#">KIWI</a></h3>
        <p class="menu-card-price">Rp 30.000</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/leci.png" alt="lychee" class="menu-card-img">
        <h3 class="menu-card-title"><a href="#">LYCHEE</a></h3>
        <p class="menu-card-price"><a></a>Rp 25.000</p>
      </div>
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Products Section start -->
  <section class="products" id="products" x-data="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p >Rasa yang terbaik dari terbaik</p>

    <div class="row">

  <template x-for="(item, index) in items" x-key="index">

      <div class="product-card">
        <div class="product-icons">
          <a href="#" @click.prevent="$store.cart.add(item)">
            <svg
  width="24"
  height="24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <use href="img/feather-sprite.svg#shopping-cart" />
</svg>
          </a>
          <a href="#" class="item-detail-button">
            <svg
            width="24"
            height="24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <use href="img/feather-sprite.svg#eye" />
          </svg>
          </a>
        </div>
        <div class="product-image">
          <img :src="`img/products/${item.img}`" :alt="Product 1">
        </div>
        <div class="product-content">
          <h3 x-text="item.name"></h3>
          <div class="product-stars">
                      <svg
            width="24"
            height="24"
            fill="currentColor"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
>
  <use href="img/feather-sprite.svg#star" />
</svg>
<svg
width="24"
height="24"
fill="currentColor"
stroke="currentColor"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
>
<use href="img/feather-sprite.svg#star" />
</svg>
<svg
width="24"
height="24"
fill="currentColor"
stroke="currentColor"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
>
<use href="img/feather-sprite.svg#star" />
</svg>
<svg
width="24"
height="24"
fill="currentColor"
stroke="currentColor"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
>
<use href="img/feather-sprite.svg#star" />
</svg>
<svg
width="24"
height="24"
fill="currentColor"
stroke="currentColor"
stroke-width="2"
stroke-linecap="round"
stroke-linejoin="round"
>
<use href="img/feather-sprite.svg#star" />
</svg>
          </div>
          <div class="product-price"><span x-text="rupiah(item.price)"></span></div>
        </div>
      </div>
    </template>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p style="color: #fff;">saran dan kritik sangat membantu dalam mengembangkan produk kami
    </p>

    <div class="row">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311709235512!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1672408575523!5m2!1sen!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
      </form>

    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">refrensi by sandhikagalih</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/menu/orange sea.png" alt="orange sea">
        <div class="product-content">
          <h3>ORANGE SEA</h3>
          <p>orange Sea, Bubble Tea spesial kami, menyajikan kombinasi segar teh berkualitas tinggi dan boba kenyal. Diperkaya dengan bahan alami yang terinspirasi dari laut, minuman ini menghadirkan kelezatan sekaligus nutrisi. Temukan kesegaran unik dalam setiap tegukan, menjadikan Vitamin Sea pilihan istimewa untuk pengalaman minum yang menyehatkan.</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>