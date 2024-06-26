<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Informations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
    <h1><span class="bande">Informations sur Nice</span></h1>
    <br>
    <br>
        <p><span class="bande">Au cœur de la Côte d'Azur, Nice se démarque 
            en tant que destination animée et ensoleillée. 
            Avec ses rues animées, ses plages ensoleillées et son atmosphère
            dynamique, elle représente l'éclat méditerranéen 
            en tant que capitale de cette région emblématique.</span></p>
          
        <div class="image-container">
            <div >
                <img src="image/centreville.jpg" alt="Image 1" class="taille deplacement">
                <div class="image-caption"><span class="bande">Place Masséna</span></div>
            </div>
            <div class="image-with-caption">
                <img src="image/LBC.jpg" alt="Image 2" class="deplacement dplc">
                <div class="image-caption"><span class="bande">Centre Ville</span></div>
            </div>
        </div>        
            
            <p><span class="bande">Située entre la mer et les montagnes, Nice 
            propose un mélange exceptionnel de culture, d'histoire et de 
            modernité, attirant les visiteurs du monde entier grâce à 
            son charme intemporel. Nice est une destination à découvrir 
            grâce à son climat agréable tout au long de l'année et à ses 
            paysages pittoresques, où chaque coin de rue dévoile une 
            nouvelle dimension de son caractère ensoleillé et captivant.</span></p>

        <div class="image-container">
            <div class="image-with-caption">
                <img src="image/vieux.jpg" alt="Image 1" class="deplacement dplc">
                <div class="image-caption"><span class="bande">Nice Vieux</span></div>
            </div>
            <div>
                <img src="image/port.jpg" alt="Image 2" class="taille deplacement">
                <div class="image-caption"><span class="bande">Port Lympia</span></div>
            </div>
        </div>
    <br>
    <br>
    <br>
    <form action="informations2.php" method="post" style="text-align: center;">
        <button type="submit" class="signup-btn">Plus d'informations</button>
    </form>                        
    </main>
</body>
</html>
