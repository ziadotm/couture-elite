<?php 
session_start();
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://fonts.google.com/specimen/Roboto?utm_source=bdmtools&utm_medium=siteweb&utm_campaign=google-fonts">
    <title>Couture Élite </title>

</head>

<body>

    <nav class="navbar">
        <div class="logo">
            <h1>Couture Élite </h1>
        </div>
        <ul class="menu">
            <li><a href="#" class="">Acceuil</a></li>
            <li><a href="#">Nouveautes</a></li>
            <li><a href="#">Solde</a></li>



            <li><a href="<?php echo Session::isConnected() ? "logout.php" :"signup.php";?>"><?php echo Session::isConnected() ? 'logout':'Sign up' ?> </a></li>

            <li><a href="#"> <?php echo Session::isConnected()? Session::showUserFullname(): '';?></a></li>
    
            
            <li><a href="#" class="fa-solid fa-user"></a></li>
            <li><a href="#" class="fa-solid fa-cart-shopping"></a></li>
        </ul>
    </nav>
    <section class="content">
        <h1>Nouveautés</h1>
        <p>Notre nouveau catalogue de Couture Élite offre une vaste gamme de choix pour les amateurs de vestes, alliant style et fonctionnalité. </p>
        <button>Decouvrir</button>
    </section>

    <h1 class="produits-text">Nos meilleures ventes</h1>

    <section class="section_produits">
        <div class="produits">
            <div class="carte">
                <div class="img"><img src="img/img5.jpeg"></div>
                <div class="desc">jacket</div>
                <div class="titre">Cropped leather</div>
                <div class="box">
                    <div class="prix">799Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>

            <div class="carte">
                <div class="img"><img src="img/image6.jpg"></div>
                <div class="desc">jacket</div>
                <div class="titre">Shearling varsity bomber </div>
                <div class="box">
                    <div class="prix">399Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>

            <div class="carte">
                <div class="img"><img src="img/image7.jpg"></div>
                <div class="desc">Manteaux</div>
                <div class="titre">Blousons Aviateur</div>
                <div class="box">
                    <div class="prix">650Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>

            <div class="carte">
                <div class="img"><img src="img/image8.jpg"></div>
                <div class="desc">jacket</div>
                <div class="titre">Leather puffer jacket</div>
                <div class="box">
                    <div class="prix">299Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>

            <div class="carte">
                <div class="img"><img src="img/image9.jpeg"></div>
                <div class="desc">jacket</div>
                <div class="titre"> jacket whit pockets</div>
                <div class="box">
                    <div class="prix">899Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>

            <div class="carte">
                <div class="img"><img src="img/image10.jpeg"></div>
                <div class="desc">jacket</div>
                <div class="titre">Bomber jacket</div>
                <div class="box">
                    <div class="prix">200Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>

            <div class="carte">
                <div class="img"><img src="img/image11.jpeg"></div>
                <div class="desc">jacket</div>
                <div class="titre">Bomber jacket</div>
                <div class="box">
                    <div class="prix">1199Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>


            <div class="carte">
                <div class="img"><img src="img/image12.jpg"></div>
                <div class="desc">jacket</div>
                <div class="titre">Basic puffer jacket</div>
                <div class="box">
                    <div class="prix">500Dhs</div>
                    <button class="achat">Acheter</button>
                </div>
            </div>
        </div>


    </section>

    <footer>
      <p> <a href="#">Couture Élite</a></p> 
    </footer>


</body>

</html>