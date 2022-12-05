<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>PagFast</title>
</head>
<body>

    <header class="site-header">
        <div class="wrapper site-header__wrapper">
          <div class="site-header__start">
            <a href="index.php" class="brand">PagFast</a>
          </div>
          <div class="site-header__middle">
            <nav class="nav">
              <ul class="nav__wrapper">
                <li class="nav__item"><a href="index.php">Home</a></li>
                <li class="nav__item"><a href="aboutus.html">Sobre Nós</a></li>
                <li class="nav__item"><a href="features.html">Novidades</a></li>
              </ul>
            </nav>
          </div>
          <div class="site-header__end">
            <a class="loginLink" href="loginpage.php"><button class="login" value="loginpage.php">
                <img src="img/user.png" alt="">
                <p>Log In</p></a>
          </div>
        </div>
      </header>

    <section class="hero">

        <div class="hero-content">
            <div class="hero-texts">

                <h1 class="hero-title">A máquina de lanches do <span>futuro</span>, no presente!</h1>

                <p class="hero-paragraph">Fácil, rápido e descomplicado. Como o futuro tem quer ser.</p>
            </div>
        </div>
        </div>

    </section>

    <section class="beforeHero reveal">
        <p>A ideia criada por pensadores do ano de 2077, chegou hoje para facilitar a vida das pessoas que sofrem com as longas filas nas máquinas de lanches, causadas por seu longo processo de compra. A PagFast veio revolucionar este processo tornando simples o que era complexo.</p>
        <img class="vendingFuturistic reveal" src="img/futuristicvending.png" alt="">

    </section>

        <div class="slides reveal">

            <div class="container-slide reveal">
                <h1 class="container-text">Escolheu</h1>

                <p class="paragraph-container">Entre e escolha seu lanche/snack preferido disponível na máquina de lanches!</p>

                <img src="img/escolha.png" alt="" class="img-container">

            </div>

            <div class="container-slide reveal">
                <h1 class="container-text">Pagou</h1>

                <p class="paragraph-container">Depois de escolher, você vai posseguir para o pagamento (Método PIX)</p>

                <img src="img/escolha2.png" alt="" class="img-container">

            </div>

            <div class="container-slide reveal">
                <h1 class="container-text">Pegou</h1>

                <p class="paragraph-container">Agora é só escanear o QRCODE (que foi gerado após o pagamento do pedido) ná máquina! viu como é fácil?</p>

                <img src="img/ruffles.png" alt="" class="img-container2">

            </div>
        </div>

        <footer>
            <div class="footer-container">
                <div class="footerContainer">
                    <a href="aboutus.html"><p>Sobre Nós</p></a>
                    <a href="aboutus.html"><p>Nossa História</p></a>
                    <a href="https://api.whatsapp.com/send?phone=5511988600997&text=Ol%C3%A1%2C%20acabei%20de%20ver%20o%20site%20PagFast!"><p>Fale Conosco</p></a>
                </div>
                <div class="footerContainer">
                    <a href="https://api.whatsapp.com/send?phone=5511988600997&text=Ol%C3%A1%2C%20acabei%20de%20ver%20o%20site%20PagFast!"><p>Nos Contrate</p></a>
                    <a href="https://www.google.com/maps/place/Senac+Lapa+Tito/@-23.5280936,-46.6940041,17z/data=!3m1!4b1!4m5!3m4!1s0x94cef8775663b04f:0x923835e9005f8309!8m2!3d-23.5280936!4d-46.6918154" target="_blank"><p>Nossa Escola</p></a>
                </div>

                <h1 class="developby">Developed By <a href="index.html">PagFast</a></h1>
            </div>
        </footer>
    
        <div class="c"></div>

        <script type="text/javascript">
            window.addEventListener('scroll', reveal);

            function reveal(){
                var reveals = document.querySelectorAll('.reveal');

                for(var i = 0; i < reveals.length; i++){
                    var windowheight = window.innerHeight;
                    var revealtop = reveals[i].getBoundingClientRect().top;
                    var revealpoint = 150;

                    if(revealtop < windowheight - revealpoint){
                        reveals[i].classList.add('active');
                    }
                    else{
                    reveals[i].classList.add('active');
                }
                
            }
        }
            

        </script>

</body>
</html>