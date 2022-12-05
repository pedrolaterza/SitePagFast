<?php
    session_start();
    if(!empty($_SESSION['id'])){
        echo "";
    }else{
        $_SESSION['msg'] = "Você deve logar para entrar";
        header("Location: loginpage.php");
    }
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>PagFast | Dashboard</title>
</head>
<body>
    <nav>
    <h3 class='logOutText'>Olá <span><?php 
                                if(!empty($_SESSION['id'])){
                                echo $_SESSION['nome'];}
                                ?></span>
                                
                                , bem vindo! </h3>
    <a href="sair.php"><button class="logOut">Sair</button></a>
    </nav>
        <div class="title">
            <h1 class="title-page">Escolha seu produto!</h1>
        </div>

    <section id="catalogo">

        <div class="containerProduto">

            <h2 class="nameProduct">Snickers</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/snickers.png" alt="img-produto" title="Imagem do produto" width=100px height=140px>

        <div class="priceandbutton">
            
            <h1 class="priceProduct">R$2,50</h1>

            <div class="caixaButtons">
    
               <!--<button class="addCart">+</button>--> 
    
               <a href="payment.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
    
            </div>
    

        </div>


        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Ruffles</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/ruffles.png" alt="img-produto" title="Imagem do produto">

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$4,00</h1>
    
                <div class="caixaButtons">
        
                    <!--<button class="addCart">+</button>-->
        
                    <a href="payment2.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>

        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Coca-cola</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/coca-cola.png" alt="img-produto" title="Imagem do produto" width= 80px height= 140px>

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$2,50</h1>
    
                <div class="caixaButtons">
        
                   <!--<button class="addCart">+</button>-->
        
                   <a href="payment3.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>

        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Trident</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/trident.png" alt="img-produto" title="Imagem do produto" width=100px height=140px>

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$2,00</h1>
    
                <div class="caixaButtons">
        
                    <!--<button class="addCart">+</button>-->
        
                    <a href="payment4.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>
        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Lanche Frango</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/sandwich.png" alt="img-produto" title="Imagem do produto" width=100px height=140px>

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$4,00</h1>
    
                <div class="caixaButtons">
        
                    <!--<button class="addCart">+</button>-->
        
                    <a href="payment5.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>
        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Lanche Queijo</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/sandwich.png" alt="img-produto" title="Imagem do produto" width=100px height=140px>

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$4,00</h1>
    
                <div class="caixaButtons">
        
                    <!--<button class="addCart">+</button>-->
        
                    <a href="payment6.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>
        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Suco de Laranja</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/sucoLanraja.png" alt="img-produto" title="Imagem do produto" width=100px height=140px>

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$4,00</h1>
    
                <div class="caixaButtons">
        
                    <!--<button class="addCart">+</button>-->
        
                    <a href="payment7.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>
        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Amendoin</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/amendoin.png" alt="img-produto" title="Imagem do produto" width=100px height=140px>

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$2,00</h1>
    
                <div class="caixaButtons">
        
                    <!--<button class="addCart">+</button>-->
        
                    <a href="payment8.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>
        </div>

        <div class="containerProduto">

            <h2 class="nameProduct">Água 300ml</h2>

            <a href=""><p class="description">informações nutricionais</p></a>

            <img class="imageProduct" src="img/agua.png" alt="img-produto" title="Imagem do produto" width=100px height=140px>

            <div class="priceandbutton">
            
                <h1 class="priceProduct">R$2,00</h1>
    
                <div class="caixaButtons">
        
                    <!--<button class="addCart">+</button>-->
        
                    <a href="payment9.html" target= "_blank" ><button class="buyNow">Comprar</button></a>
        
                </div>
        
    
            </div>
        </div>
        

    </section>


</body>
</html>