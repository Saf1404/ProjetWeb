<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Informations</title>
    <link rel="stylesheet" href="style.css">
    <style> 
           .bande {
            background-color: rgba(255, 255, 255, 0.5); 
            padding: 5px 10px; 
            border-radius: 5px;
            font-size: 1.2em; 
        }

        .image-container {
            display: flex; 
            align-items: center;
            justify-content: space-around; 
        }

        .image-container img {
            width: 45%; 
            height: auto; 
            border: 3px solid black;
            border-radius: 5px;
        }

        .image-container .taille {
            width: 70%; 
        }

        .image-container .deplacement {
            margin-left: 20px;
        }

        .image-container .dplc {
            margin-right: 20px;
        }

        .image-caption {
            position: relative;
            text-align: center; 
            font-size: 14px; 
            margin-top: 10px;    
        }

        .image-with-caption {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
    <h1><span class="bande">Informations sur Nice</span></h1>
    <br>
    <br>
        <ul>
            <li><span class="bande"><b>Population :</b><br><br> Nice est une ville 
            cosmopolite avec environ 342 000 habitants, ce qui en fait 
            l'une des plus grandes villes de la Côte d'Azur. Sa population 
            diversifiée comprend des résidents locaux, des travailleurs 
            migrants et des visiteurs du monde entier. Cette diversité 
            crée une atmosphère dynamique où les cultures se rencontrent 
            et se mélangent, faisant de Nice un endroit accueillant 
            pour tous.</span></li>
        <br><br>
        <div class="image-container">
            <div class="image-with-caption">
                <img src="image/poo.jpeg" alt="Image 1" class="deplacement">
                <div class="image-caption"><span class="bande">La Place Masséna</span></div>
            </div>
            <div class="image-with-caption">
                <img src="image/pop1.jpg" alt="Image 2" class="taille dplc">
                <div class="image-caption"><span class="bande">La plage en été</span></div>
            </div>
        </div>
        <br><br>
            <li><span class="bande"><b>Climat :</b><br><br> Nice a un climat 
            méditerranéen avec des étés chauds et secs, et des hivers doux 
            et humides. Les températures estivales tournent autour de 25-30°C,
             tandis que les hivers restent généralement au-dessus de 10°C. 
             Avec plus de 2 700 heures d'ensoleillement annuel, c'est l'une
              des villes les plus ensoleillées de France. Les pluies sont 
              plus fréquentes en automne et au début du printemps, 
              tandis que les étés sont généralement secs. Ce climat 
              agréable toute l'année en fait une destination attrayante 
              pour les visiteurs en quête de soleil et de douceur.</span></li>
              <br><br>
        <div class="image-container">
            <div class="image-with-caption">
                <img src="image/alpes.jpg" alt="Image 1" class="deplacement">
                <div class="image-caption"><span class="bande">Nice en Hiver</span></div>
            </div>
            <div class="image-with-caption">
                <img src="image/100.jpg" alt="Image 2">
                <div class="image-caption"><span class="bande">Le plus beau Sunset</span></div>
            </div>
        </div>
        <br><br>
            <li><span class="bande"><b>Spécialités Culinaires :</b><br><br>
            <b>La Socca</b><br><br>La socca est une spécialité 
            culinaire niçoise. Il s'agit d'une galette salée à base 
            de farine de pois chiches, d'eau, d'huile d'olive et de sel. 
            La pâte est versée sur une plaque chaude et cuite au four jusqu'à 
            ce qu'elle soit dorée et croustillante sur les bords, 
            mais encore moelleuse à l'intérieur.</span>
            <br><br>
            <div class="image-container">
                <div class="image-with-caption">
                    <img src="image/cml.jpg" alt="Image 1" class="deplacement">
                    <div class="image-caption"><span class="bande">Socca sur plaque</span></div>
                </div>
                <div class="image-with-caption">
                    <img src="image/soocca.jpeg" alt="Image 2">
                    <div class="image-caption"><span class="bande">Socca en tranche</span></div>
                </div>
            </div>
            <br><br><span class="bande"><b>La Pissaladière</b><br><br>La pissaladière 
            est une spécialité de Nice. C'est une tarte salée composée
            d'une pâte à pain épaisse, garnie d'une couche d'oignons 
            confits, d'anchois, d'olives noires et parfois de fines 
            tranches de tomates. La pissaladière tire son nom du
            "pissalat", une pâte d'anchois qui était traditionnellement 
            utilisée dans sa préparation</span><br><br>
            <div class="image-container">
                <div class="image-with-caption">
                    <img src="image/pissaladiere.jpg" alt="Image 1" class="deplacement">
                    <div class="image-caption"><span class="bande">La Pissaladière</span></div>
                </div>
                <div class="image-with-caption">
                    <img src="image/pis1.jpg" alt="Image 2">
                    <div class="image-caption"><span class="bande">La Pissaladière en tranche</span></div>
                </div>
            </div>
            <br><br><span class="bande"><b>Le Farcis Niçois</b><br><br>Le farcis 
            niçois est un plat traditionnel de la cuisine niçoise. Il s'agit 
            d'une recette à base de légumes de saison, comme les courgettes, 
            les tomates, les poivrons et les oignons, évidés et farcis 
            avec un mélange de viande hachée, de pain rassis, d'herbes 
            aromatiques et parfois de riz. Ce plat est généralement 
            cuit au four et peut être dégusté chaud ou froid, en 
            accompagnement ou en plat principal</span><br><br>
            <div class="image-container">
                <div class="image-with-caption">
                    <img src="image/farciis.jpg" alt="Image 1">
                    <div class="image-caption"><span class="bande">Le Farcis Niçois</span></div>
                </div>
                <div class="image-with-caption">
                    <img src="image/ffarcis.jpg" alt="Image 2" class="taille">
                    <div class="image-caption"><span class="bande">Le Farcis Niçois: poivron et courgette</span></div>
                </div>
            </div>
            </li>
        </ul>
    </main>
</body>
</html>