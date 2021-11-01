<!DOCTYPE html>
<html lang="hr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css"
    />
    <script
      src="https://kit.fontawesome.com/d1bbe2042f.js"
      crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" href="./assets/img/BS.svg" type="image/x-icon">
    <title>Božićno Selo</title>
  </head>
  <body>
    <main>
      <button onclick="topFunction()" id="mybtn"><i class="fas fa-arrow-up"></i></button> 
      <nav class="container">
        <div class="logo">
          <h1>BS</h1>
        </div>
        <ul class="links">
          <li><a class="active" href="#">Naslovna</a></li>
          <li><a href="mediji.html">Mediji</a></li>
          <li><a href="obavijesti.html">Obavijesti</a></li>
          <li>
          <div class="dropdown">
            <button class="partners-btn">Partneri</button>
            <div class="dropdown-menu">
              <a class="hover-links" href="http://www.zima.hr/intro.php">Zima dekoracije</a>
              <a class="hover-links" href="#">Idoneus d.o.o.</a>
              <a class="hover-links" href="#">Osovina d.o.o.</a>
              <a class="hover-links" href="#">J.U.M.A. d.o.o.</a>
              <a class="hover-links" href="http://www.spina.hr/">Špinaxxl Dugopolje</a>
              <a class="hover-links" href="#">TPO Križan Dugopolje</a>
              <a class="hover-links" href="https://www.visitomis.hr/">TZ Omiš</a>
              <a class="hover-links" href="https://www.dalmatia.hr/hr">TZ Splitsko-dalmatinske županije</a>
            </div>
          </div>
          </li>  
        </ul>
        <div class="overlay">
          <ul>
            <li><a href="index.php">Naslovna</a></li>
            <li><a href="mediji.html">Mediji</a></li>
            <li><a href="obavijesti.html">Obavijesti</a></li>
          <li>
          <div class="dropdown">
            <a>Partneri</a>
            <div class="dropdown-menu-mobile">
              <a class="hover-links" href="http://www.zima.hr/intro.php">Zima dekoracije</a>
              <a class="hover-links" href="#">Idoneus d.o.o.</a>
              <a class="hover-links" href="#">Osovina d.o.o.</a>
              <a class="hover-links" href="#">J.U.M.A. d.o.o.</a>
              <a class="hover-links" href="http://www.spina.hr/">Špinaxxl Dugopolje</a>
              <a class="hover-links" href="#">TPO Križan Dugopolje</a>
              <a class="hover-links" href="https://www.visitomis.hr/">TZ Omiš</a>
              <a class="hover-links" href="https://www.dalmatia.hr/hr">TZ Splitsko-dalmatinske županije</a>
            </div>
          </div>
          </li>  
          </ul>
        </div>
        <div id="hamburger" class="hamburglar">
          <div class="burger-icon">
            <div class="burger-container">
              <span class="burger-bun-top"></span>
              <span class="burger-filling"></span>
              <span class="burger-bun-bot"></span>
            </div>
          </div>
          <!-- svg ring containter -->
          <div class="burger-ring">
            <svg class="svg-ring">
              <path
                class="path"
                fill="none"
                stroke="#EC0000"
                stroke-miterlimit="10"
                stroke-width="4"
                d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2"
              />
            </svg>
          </div>
          <!-- the masked path that animates the fill to the ring -->
          <svg width="0" height="0">
            <mask id="mask">
              <path
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                stroke="#EC0000"
                stroke-miterlimit="10"
                stroke-width="4"
                d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4"
              />
            </mask>
          </svg>
          <div class="path-burger">
            <div class="animate-path">
              <div class="path-rotation"></div>
            </div>
          </div>
        </div>
      </nav>
      <header class="header">
        <div class="christmas-wrapper">
          <img class="santa" src="assets/img/djed.svg" alt="Djed Božićnjak" />
        </div>
        <div class="right-header">
          <h1>Božićno Selo</h1>
          <h3>Gornji Dolac</h3>
          <p>Bozicno selo otvara svoja vrata 27.11.2021 u 16 sati.</p>
          <p>
            Spektakularno otvorenje najboljeg adventa uz 3 milijuna lampica,
            <br />
            žive jaslice i bezbroj drugih iznenađenja. 🎄🎄🎄
          </p>
          <p>Veselimo se vašem dolasku</p>
          <a href="#contact">Kontakt</a>
        </div>
        <div class="circles">
          <img class="first-circle" src="./assets/img/Ellipse 2.svg" alt="Circles" />
          <img class="second-circle" src="./assets/img/Ellipse 3.svg" alt="Circles" />
        </div>
        <div class="icons">
          <a
            target="_blank"
            href="https://www.facebook.com/Bo%C5%BEi%C4%87no-selo-Gornji-Dolac-1174669846030371/"
          >
            <img src="./assets/img/icons/facebook.svg" alt="Facebook Link" />
          </a>
          <a
            target="_blank"
            href="https://www.instagram.com/bozicno.selo/?hl=hr"
          >
            <img src="./assets/img/icons/instagram.svg" alt="Instagram Link" />
          </a>
        </div>
      </header>
      <section class="what_we_have">
        <h1 class="main-h1">Što nudimo?</h1>
        <div class="my-slider sliders">
          <div class="card atmosfera">
            <div class="shadow">
              <h1 class="card-title">Atomsfera</h1>
              <div class="stats">
                <p>Neviđena božićna atmosfera</p>
              </div>
            </div>
          </div>
          <div class="card uzrast">
            <div class="shadow">
              <h1 class="card-title">Zabava za sve uzraste</h1>
              <div class="stats">
                <p>Djeca vrište, odrasli su u čudu</p>
              </div>
            </div>
          </div>
          <div class="card hrana">
            <div class="shadow">
              <h1 class="card-title">Hrana</h1>
              <div class="stats">
                <p>Imat će te priliku probati tradicionalnu hranu</p>
              </div>
            </div>
          </div>
          <div class="card animals">
            <div class="shadow">
              <h1 class="card-title">Životinje</h1>
              <div class="stats">
                <p>
                  Guske, mandarinske patke, mufloni, emue, magarci, ljame,
                  konji...
                </p>
              </div>
            </div>
          </div>
          <div class="card liteshow">
            <div class="shadow">
              <h1 class="card-title">Milijune Lampica</h1>
              <div class="stats">
                <p>
                  Ove zime Božićno Selo bit će ukrašeno s točno 3 milijuna
                  lampica
                </p>
              </div>
            </div>
          </div>
          <div class="card djed">
            <div class="shadow">
              <h1 class="card-title">Djed Mraz</h1>
              <div class="stats">
                <p>Višegodišnji pobjednik Hrvatske za najboljeg djedicu.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="buttons buttons-req">
          <button class="prev-button">
            <img src="assets/img/icons/icon-left.svg" alt="left-arrow" />
          </button>
          <button class="next-button">
            <img src="assets/img/icons/icon-right.svg" alt="right-arrow" />
          </button>
        </div>
      </section>
      <section class="about-us">
        <h1 class="main-h1">O nama</h1>
        <p class="how-started">Kako je sve počelo?</p>
        <div class="text-card">
          <p>
            U Dolcu Gornjem, ali ne onom što odmah vuče na poznatiji Primorski,
            nego onom istočnijem, put Omiša, podno sjeverne strane Mosora, kada
            zapuše bura, hladno je, rekli bi na selu, ka u jaceri. Mrznu ruke,
            mrznu noge, ledeno je i kada se po školski slojevito obučeš. Kraj je
            to tipični dalmatinski brdski, s višetonskim gromadama od stina, s
            putevima u brdo koji vode negdje, nigdje. Oni što su se kroz godine
            u kojima se trbuhom za kruhom, i privučen svjetlima grada polako
            iseljavao ljudski život, gubili pod slojevima šiblja, grmlja,
            odrona. I gle čuda, u toj pustopoljini, u malom zbiru napuštenih
            starih kamenih djedovina, u seocetu bez tekuće vode, kanalizacije,
            noćne rasvjete, Tihomir Lučić, 38-godišnji vizionar, odlučio je
            stvoriti Božićno selo.
          </p>
        </div>
        <div class="text-card">
          <p>
            Naumio je čovjek ovdje Bogu iza leđa dovesti Božić raskošan kao
            nigdje u Dalmaciji, onaj zbog kojih će se iz Splita, Šibenika,
            Dubrovnika potezati put Trnbusa. Pa onda još malo gore, dolje, okolo
            do Dolca Gornjeg. I on to stvarno zaozbiljno misli. Zapravo on misli
            ovo: Ovdje, točno tu na ovim ledinama za prvu sljedeću adventsku
            nedjelju, e ovu prvu iz aktualne 2018. godine, imat ćemo Božićno
            selo. I to ono s milijun lampica. Točno tako. I to je to, nemam tu
            šta dodat ni oduzet. Tako san odlučija, a kad ja nešto odlučin, onda
            povratka nema. A šta je luđe, ja uporniji. Ja se držim rečenice –
            Tko u čuda viruje, taj čuda i stvara. Zato nema odustajanja – kaže
            nam Tihomir skroz ozbiljno da ozbiljniji biti ne može.
          </p>
        </div>
        <div class="text-card">
          <p>
            Kako najluđe stvari na ovom svijetu na pamet padaju u nekim
            najčudnijim trenucima, tako se ideja o milijun svića Tihomiru
            dogodila u trenucima kada je trpio milijun muka. Uhvatila su ga
            leđa, svitlilo mu je, kaže, pred očima, i dok se noću borio s
            bolovima, dosjetio se novog projekta. Kaže da je Božićno selo u toj
            svoj raskoši ugledao upravo u tom trenutku, s tom mišlju zaspao, s
            njom se probudio i potom je izložio ostatku obitelji.
          </p>
        </div>
        <a class="mediji" href="#">Što drugi kažu o nama?</a>
      </section>
      <section class="gallery">
        <h1 class="main-h1">Galerija</h1>
        <div class="gallery-slider">
          <img src="assets/img/galerija/1.jpeg" alt="Slika" />
          <img src="assets/img/galerija/4.jpg" alt="Slika" />
          <img src="assets/img/galerija/5.jpeg" alt="Slika" />
          <img src="assets/img/galerija/6.jpg" alt="Slika" />
          <img src="assets/img/galerija/7.jpg" alt="Slika" />
          <img src="assets/img/galerija/8.jpg" alt="Slika" />
          <img src="assets/img/galerija/3.jpeg" alt="Slika" />
          <img src="assets/img/galerija/9.jpg" alt="Slika" />
          <img src="assets/img/galerija/2.jpeg" alt="Slika" />
          <img src="assets/img/galerija/10.jpg" alt="Slika" />
          <img src="assets/img/galerija/11.jpg" alt="Slika" />
          <img src="assets/img/galerija/12.jpeg" alt="Slika" />
          <img src="assets/img/galerija/13.jpg" alt="Slika" />
        </div>
        <div class="buttons buttons-req">
          <button class="prev-btn">
            <img src="assets/img/icons/icon-left.svg" alt="left-arrow" />
          </button>
          <button class="next-btn">
            <img src="assets/img/icons/icon-right.svg" alt="right-arrow" />
          </button>
        </div>
      </section>
      <section class="faq">
        <div class="jaslice">
          <img class="jaslice" src="./assets/img/jaslice.png" alt="Jaslice" />
        </div>
        <div class="more-queastion">
          <h1 class="main-h1">Česta pitanja</h1>
          <div class="accordion">
            <div class="accordion__item">
              <div class="accordion__title">
                Je li moguć pristup osobama s invaliditetom?
              </div>
              <div class="accordion__body">
                <div class="accordion__content">
                  <p>Moguć je pristup osobama s invaliditetom.</p>
                </div>
              </div>
            </div>
            <div class="accordion__item">
              <div class="accordion__title">
                Radite li nedjeljom i praznicima?
              </div>
              <div class="accordion__body">
                <div class="accordion__content">
                  <p>
                    Manifestacija je otvorena svakog dana, osim badnjeg dana i
                    stare godine kada smo zatvoreni.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion__item">
              <div class="accordion__title">Koji dan je najbolji za posjet</div>
              <div class="accordion__body">
                <div class="accordion__content">
                  <p>Predlažemo radne dane u tjednu zbog manje gužve.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="contact" class="contact-location">
        <div class="left-contact">
          <h1 class="main-h1">Kontakt</h1>
          <form action="sendmail.php" method="post">
            <input type="text" name="name" value="" placeholder="Ime" />
            <input type="email" name="mail" value="" placeholder="Prezime" />
            <textarea
              name="message"
              type="text"
              placeholder="Poruka"
              id="textarea"
              cols="30"
              rows="10"
            ></textarea>
            <button class="contact-button" type="submit" name="submit">
              Pošalji
            </button>
          </form>
        </div>
        <div class="whole-map">
          <div class="map">
            <h1 class="main-h1">Lokacija</h1>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2894.2892665932536!2d16.746575815492672!3d43.496300779126926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134abd9f3f05eebd%3A0xf86ffa8bf6392483!2zQm_FvmnEh25vIHNlbG8!5e0!3m2!1shr!2shr!4v1635601184870!5m2!1shr!2shr"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
          <a class="btn-link" href="https://goo.gl/maps/UWf2xQ4b5dhDwBGA9"
            >Otvori Mapu</a
          >
        </div>
      </section>
    </main>
      <footer>
        <div class="upFooter">
          <canvas id="sky"></canvas>
          <div class="logo-media">
            <h1>Božićno selo</h1>
            <span>
              <a
                target="_blank"
                href="https://www.facebook.com/Bo%C5%BEi%C4%87no-selo-Gornji-Dolac-1174669846030371/"
              >
                <img src="./assets/img/icons/face.svg" alt="Facebook Link" />
              </a>
              <a
                target="_blank"
                href="https://www.instagram.com/bozicno.selo/?hl=hr"
              >
                <img src="./assets/img/icons/insta.svg" alt="Instagram Link" />
              </a>
            </span>
          </div>
<!--           <div class="link">
            <li><a href="#">Naslovna</a></li>
            <li><a href="#">Naslovna</a></li>
            <li><a href="#">Naslovna</a></li>
            <li><a href="#">Naslovna</a></li>
          </div> -->

          <div class="about-stats">
            <div class="stats-links time">
              <p>Radno vrijeme</p>
              <h3>14h do 22h</h3>
            </div>
            <div class="stats-links address">
              <p>Adresa</p>
              <a href="https://goo.gl/maps/Jg7DW1mX8juRumz59"
                >Nart 10a, 21204 Dugopolje</a
              >
            </div>
            <div class="stats-links mail">
              <p>Email:</p>
              <a href="mailto:bozicno.selo@gmail.com">bozicno.selo@gmail.com</a>
            </div>
            <div class="stats-links tel">
              <p>Telefon:</p>
              <a href="tel:+385 91 60 555 27">+385 91 60 555 27</a>
            </div>
          </div>
        </div>
        <div class="lowerFooter">
          <div class="copyright">
            <img src="./assets/img/santa2.png" alt="Santa" />
            <p>© Copyright BOŽIĆNO SELO GORNJI DOLAC.</p>
          </div>
          <p>
            Handcrafted by
            <a href="https://www.instagram.com/viktorbilokapic/">VB</a>
          </p>
        </div>
      </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script type="module">
      let slider = tns({
        container: ".my-slider",
        fixedWidth: 400,
        swipeAngle: false,
        speed: 400,
        controls: false,
        nav: false,
        mouseDrag: true,
      });
      slider.goTo(0.5);
      slider.goTo("prev");
      slider.goTo("next");
      slider.goTo("first");
      slider.goTo("last");

      document.querySelector(".prev-button").onclick = function () {
        slider.goTo("prev");
      };
      document.querySelector(".next-button").onclick = function () {
        slider.goTo("next");
      };
      let slider2 = tns({
        container: ".gallery-slider",
        fixedWidth: 300,
        items: 5,
        nav: false,
        mouseDrag: true,
        controls: false,
      });
      slider2.goTo(0.5);
      slider2.goTo("prev");
      slider2.goTo("next");
      slider2.goTo("first");
      slider2.goTo("last");

      document.querySelector(".prev-btn").onclick = function () {
        slider2.goTo("prev");
      };
      document.querySelector(".next-btn").onclick = function () {
        slider2.goTo("next");
      };
    </script>
    <script src="./assets/js/snow.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
