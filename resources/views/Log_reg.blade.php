




<!-- 
  php artisan make:migration add_phone_field_to_products  
 -->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dairy-Management-System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <!-- Styles -->
        <styles> </styles>

    </head>
    <body class="antialiased">
        
    <section class="first-page">
    <div class="first-container">
       <div class="first-left">
       <h1 class="first-h1-tx1">DAIRY RWANDA</h1>
        <h1 class="first-h2 tx1">
            Dairy Farm Management
            System products
          </h1><br><br>

            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}"><button class="first-button1">Log in</button></a>
                           
                    <p class="first-p1 tx1">
                        If it’s your first time <br />
                        visting us:
                    </p><br><br>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button class="first-button2">Create account</button></a>
                    @endif
                @endauth
            </div>
        @endif
        
      </div>
    <!-- Log in Right side -->
       <div class="first-right">
        <img class="first-img" src="./imgs/cowbc01.jpg" alt="">
       </div>
    </div>
    </section>




    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Milk Management System</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" />
    <link rel="icon" href="/imgs/logo.png" />
    <link rel="stylesheet" href="/styles.css" />
  </head>
  <body>
    <header>
      <div class="headerbar">
        <div class="main-bar">
          <!-- <div><h4 class='fas fa-m fa-spin fa-3x' id="logo">M</h4></div> -->
          <div id="logo">
            <img src="./imgs/milklogo.png" alt="" /><sub class="milk-logo"
              >Milky</sub
            >
          </div>
          <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#services">SERVICES</a>
            <a href="#product">PRODUCT</a>
            <a href="#pages">PAGES</a>
            <a href="#contact">CONTACT</a>
          </nav>
        </div>
      </div>
      <button class="login">Login</button>
      <div id="menu" class="fas fa-bars"></div>
    </header>


    <!-- home section -->
    <section class="home" id="home">
      <div class="home-text">
        <h2 class="text-h2">welcome to our dairy farm</h2>
        <br />
        <h1 class="text-h1">
          The Farm of <br />
          Dairy products
        </h1>
        <br />
        <div>
          <button class="home-button1">Explore more</button>
          <figcaption class="home-figcap">
            If it’s your first time <br />
            visting us:
          </figcaption>
        </div>
        <button class="home-button2">Register Now</button>
      </div>
    </section>



    <!-- about section -->
    <section class="about" id="about">
      <h1 class="about-h1">ABOUT US</h1>
      <br />
      <div class="about-container">
        <div class="about-left">
          <img class="img-absolute" src="./imgs/childmilk04.jpg" alt="" />
          <div class="about-left-top">
            <div>
              <img class="about-img" src="./imgs/babymilk01.jpg" alt="" />
            </div>
            <div>
              <img class="about-img" src="./imgs/drinkmilk02.jpg" alt="" />
            </div>
          </div>
          <div class="about-left-buttom">
            <div>
              <img class="about-img" src="./imgs/cowmilk05.jpg" alt="" />
            </div>
            <div>
              <img class="about-img" src="./imgs/childmilk03.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="about-right">
          <p>
            Welcome to Milky, a modern and efficient agricultural venture
            dedicated to the sustainable management of livestock and the
            production of high-quality milk products.
          </p>
          <div class="about-right-buttom">
            <div class="left">
              <h1>Dedicated Services</h1>
              <br />
              Committed to excellence, we offer personalized and reliable
              services, ensuring the optimal health of our livestock and the
              production of premium-quality milk products for our valued
              customers in our business. <br /><br />
            </div>
            <div class="right">
              <h1>Organic Products</h1>
              <br />
              Pure and sustainable, our organic products embody nature's
              essence, delivering a healthy and eco-friendly choice for
              conscious consumers. <br />
            </div>
          </div>
          <div class="about-right-button">
            <div><button>Explore more</button></div>
            <div><button>Explore more</button></div>
          </div>
        </div>
      </div>
    </section>



    <!-- services section  -->
    <section class="services" id="services">
      <center>
        <h1 class="services-h1">SERVICES</h1>
        <br />
        <h2 class="header-h2">Services That We Offer</h2>
        <p class="header-p">For Entrepreneurs</p>
        <br />
      </center>
      <div class="div-top">
        <div class="service">
          <center>
            <img src="./imgs/cowmilk02.jpg" alt="" /><br /><br />
            <h3>
              Innovations in Dairy for <br />
              a Longer Future
            </h3>
            <br />
            <p>
              Show Me, Don’t Tell Me. Dairy Innovations for a Sustainable
              Future,” a new webinar from the National Dairy Council, features
              dairy farmers and innovators of all sizes and geographies
              discussing how they are constantly adopting new ...
            </p>
            <br />
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </center>
        </div>
        <div class="service">
          <center>
            <img src="./imgs/cupmilk02.jpg" alt="" /><br /><br />
            <h3>Breeding G Veterinary</h3>
            <br />
            <p>
              Striving for excellence, our breeding program focuses on
              cultivating superior genetic lines, while our dedicated veterinary
              care ensures the well-being and health of our animals, maintaining
              the highest standards in agriculture
            </p>
            <br /><br />
            <center>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </center>
          </center>
        </div>
        <div class="service">
          <center>
            <img class="" src="./imgs/cupmilk02.jpg" alt="" /><br /><br />
            <h3>Breeding G Veterinary</h3>
            <br />
            <p>
              With tender care and expertise, we prioritize the well-being of
              our livestock, creating a stress-free environment for optimal milk
              product on. Our milking process combines precision and compassion,
              delivering top-quality dairy products
            </p>
            <br />
          </center>
          <center><i class="fa fa-arrow-right" aria-hidden="true"></i></center>
        </div>
      </div>
      <div class="div-mid">
          <div class="dairy-pro">
            <div><img src="./imgs/dairyprod01.jpg" alt="" /></div>
            <div>
              <h1>
                We Sell Best <br />
                Dairy Products
              </h1><br>
              <p>
                Indulge in unparalleled <br> quality; we offer the <br> finest dairy
                products, <br> meticulously crafted for <br> an exquisite taste
                experience.
              </p><br><br>
              <button>Read more!</button>
            </div>
          </div>
          <div class="fresh-milk">
            <div><img src="./imgs/freshmilk01.jpg" alt="" /></div>
            <div>
              <h1>
                We Deliver Fresh <br />
                Mild Worldwide
              </h1><br>
              <p>
                Global freshness at <br> your doorstep – experience <br> the finest,
                farm-to-table <br> milk delivered worldwide.
              </p><br>
              <button>Read more!</button>
            </div>
          </div>
        </div>
      <div class="div-bootom">
        <center>
          <h1 style="letter-spacing: 3px;">GALLERY</h1><br>
          <h4 style="letter-spacing: 3px; word-spacing: 10px;">THIS IS A PICTURE OF OUR FAVORITE BRANDS PRODUCT</h2>
        </center>
        <div class="galery">
          <img src="./imgs/dairymilk02.jpg" alt="" />
          <img src="./imgs/contmilk00.jpg" alt="" />
          <img src="./imgs/childmilk03.jpg" alt="" />
        </div>
        <div class="galery">
          <img src="./imgs/shopmilk02.jpg" alt="" />
          <img src="./imgs/drinkmilk02.jpg" alt="" />
          <img src="./imgs/contmilk05.jpg" alt="" />
        </div>
      </div>
    </section>


    <!-- product section  -->
    <section class="product" id="product">
      <center>
        <header>
          <h1>OUR PRODUCTS</h1><br>
          <h3>Our Dairy Products For <br> Healthy Living</h3>
        </header><br><br>
      </center>
      <div class="products">
        <div>
          <img src="./imgs/cupmilk03.jpg" alt="">
        <figcaption></figcaption>
        </div>
        <div>
          <img src="./imgs/contmilk02.jpg " alt="">
        <figcaption></figcaption>
        </div>
        <div>
          <img src="./imgs/measurmilk02.jpg" alt="">
        <figcaption></figcaption>
        </div>
        
        <div>
          <img src="./imgs/cupmilk05.jpg" alt="">
        <figcaption></figcaption>
        </div>
      </div><br><br>
      <center><p style="font-size: 80px;">. . .</p></center>
      <div class="team">
        <center>
          <header>
            <h1 >OUR TEAM</h1><br>
            <h3>experienced Team Members</h3>
          </header><br><br>
        </center>
        <div class="team-members">
          <img src="./imgs/vetcow01.jpg" alt="">
          <img src="./imgs/vetcow02.jpg" alt="">
          <img src="./imgs/dairymilk01.jpg" alt="">
        </div>
      </div>
    </section>



    <!-- pages section  -->
    <section class="pages" id="pages">
      <!-- <h1>pages section</h1> -->
    </section>



    <!-- contact section  -->
    <section class="contact" id="contact">
      <h1>contact section</h1>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>









    </body>
</html>
