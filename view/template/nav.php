<nav>
  <ul>
    <?php
        /*
        chercher dans le dossier : template tous mes fichier php
        on va recuperer de maniere recursive les nom des fichier
        on va fabriquer les balise en affectant  pour chaque balise la valeur
        conrepondant au nom du fichier */
      /*  $sortie = '<li><a href="./index.php?page='.$nomdufichier'">'.$nomdufichier.'</a></li>';*/
        $repertoirPage = opendir('../view');
        if($repertoirPage){
          while(false !== ($fichier = readdir($repertoirPage))){



          }

        }else{
          echo'erreur dans la pages';
        }
        ?>
    <a href="./index.php?pages=home"><li>Home</li></a>
    <a href="./index.php?pages=news"><li>News</li></a>
    <a href="./index.php?pages=contact"><li>Contact</li></a>
    <a href="./index.php?pages=about"><li>About</li></a>
  </ul>
</nav>
