<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search top ten comics</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/css/foundation.min.css">
  </head>
  <body>
    <?php
    if(isset($_POST['search']))
    {
      ?>
      <div id="jecentre">
        <h1>TOP TEN COMICS</h1>
        <div id="results">Résultat pour <span style="color:red;text-transform:uppercase"><?php echo $_POST['search'] ?></span><br>
        <a href="">Faire une autre recherche</a>
        </div>
      </div>
      <?php
      include('series-load.php');
    }

    else
    {
      ?>
      <div id="centered">
        <h1>Rechercher un comic</h1>
        <h2>Team Alpha</h2>
        <form method="post" action="search.php">
          <p>
          <input type="text" name="search" id="jecherche"/><br>
          <input type="submit" value="Valider" id="submit-cherche"/>
          </p>
        </form>
      </div>
      <?php
    }
    ?>
  </body>
</html>
