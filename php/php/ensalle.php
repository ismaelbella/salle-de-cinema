<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header class="header">
    <div class="header__container">
      <h1 class="header__title">
        <div class="header__subtitle">
          Votre cinéma
        </div>
        <div class="header__maintitle">
          Le Rodia
        </div>
      </h1>

      <?php
        include "templates/nav.tpl.php";
      ?>

    </div>
  </header>
  <main class="main-container">
    <section>
      <h2 class="page__title">En salle en ce moment</h2>
      <ul>
        <?php 
            $films = ["Astérix", "Titanic", "Avatar", "Lost", "Indiana Jones"];

            // on crée un li pour chaque élément du tableau
            for ($currentIndex = 0; $currentIndex < count($films); $currentIndex++) {
                // on va chercher l'élément à l'index $currentIndex du tableau $films
                echo "<li>$films[$currentIndex]</li>";
            }
      
        ?>
      </ul>
      <h2>Salles</h2>
      <ul>  
        <?php
         $rooms = ['Athéna','Dyonisos','Hadès','Zeus'];
         $i = 0;
         echo "<li>$rooms[$i]</li>";
         $i = 1;
         echo "<li>$rooms[$i]</li>";

        for ($i = 0; $i < count($rooms); $i++) {
          echo "<li>$rooms[$i]</li>";
        }
          


 
       // $rooms = ['Athéna','Dyonisos','Hadès','Zeus'];
       // for ($indexSalles = 0; $indexSalles< count($rooms); $indexSalles++){
        //  echo "<li>$rooms[$indexSalles]</li>";
       // }
       ?>
      </ul>
      

    </section>
  </main>
  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
