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
        /* Pour ne pas dupliquer le code HTML correspondant à la barre de 
      navigation, on peut utiliser des templates (morceaux de page/de code HTML 
      et parfois de PHP) pour centraliser à un seul endroit ce code.

      Cela permet une meilleure maintenance et une meilleure évolutivité
      du site car on aura moins de travail pour modifier la navigation.
      En effet, en modifiant un seul fichier (template/nav.tpl.php), on 
      va impacter et mettre à jour toutes les pages de notre site qui
      incluent ce template.

      L'include permet d'aller chercher le contenu présent dans le fichier
      templates/nav.tpl.php et d'intégrer son contenu à l'endroit de l'include
      dans le fichier index.php.
      C'est comme un copier/coller du contenu du fichier nav.tpl.php
        */
      
        include "templates/nav.tpl.php";
      
      ?>

    </div>
  </header>
  <main class="main-container">
    <section>
      <h2 class="page__title">Bienvenue au Cinéma Rodia</h2>
    </section>
  </main>
  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
