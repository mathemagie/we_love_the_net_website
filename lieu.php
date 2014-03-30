<?php
  require_once './functions.php';
  $title = "lieu";
  require_once './header.php';
?>
<body>
 <div class="container-fluid">
  <div class="row">
    <?php 
          require_once "./sidebar.php";
    ?>
   <div class="col-md-9"><br/>
        <?php 
            require_once "./nav.php";
        ?>
          <p>13 rue Petion, Paris, 11e - contact-at-we-love-the.net</p>
          <p>Rideau ouvert . <span class="small9">nous sommes là, vous pouvez passer </span> /// rideau fermé . <span class="small9">nous ne sommes pas dispo</span></p>
          <p>
            <!--<iframe src = "http://api.la-tapisserie.net/expo.html" width = "100%" height = "500px" frameborder = "0" scrolling="no"> </iframe> -->
            <?php $status_img = get_dispo_tapisserie();?>
             <img class="img-responsive" src='<?php echo $status_img?>'></img>

          </p>
          <p>Le lieu tire son nom de sa fonction passée : un tapissier y était installé. </p>
            <p>Il est situé au 13 rue Pétion, au centre du 11ème arrondissement, à 2 minutes à pied du métro Voltaire et à 10 minutes du métro Père Lachaise. </p>
            <img class="img-responsive" src='http://maps.googleapis.com/maps/api/staticmap?center=13%20rue%20petion%20paris&zoom=16&size=800x400&key=AIzaSyBpRjBLs9Dh70hxOoGLoBIem_0EKwu3z4k&&markers=color:blue|48.859038,2.381283'></img>
            <br/>
            <p>Il est constitué d&rsquo;un espace de 28 mètres carré, avec vitrine donnant sur la rue, et d&rsquo;un sous-sol de 15 mètres carré environ. </p>
            <p>Le lieu est entièrement modulaire selon les moments, lieu de création, formation, exposition, événement.</p>
            <br>
            <strong><em>Les expositions et évènements de la Tapisserie sur <a href="http://www.la-tapisserie.net/" target="_blank">www.la-tapisserie.net</a></em></strong> </p>
      
       <br>
          Nos équipements<br>
          <ul>
            <li>Vitrine sur la rue</li>
            <li>Espace d'expo : <a href="http://www.la-tapisserie.net/" target="_blank">La tapisserie</a></li>
            <li>Etablis</li>
            <li>Outils classiques</li>
            <li>Fer à souder, multimètre, etc...</li>
            <li>Machine à chantourner</li>
            <li>Découpe laser . lasersaur (dans un autre local)</li>
          </ul>
	   </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once './footer.php';?>
</body>
</html>