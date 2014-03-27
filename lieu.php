<?php
  $title = "lieu";
  require_once './header.php';
?>
<body>
 <div class="container-fluid">
  <div class="row">
     <div class="col-md-2">
       <?php if (!isMobile()) {?>
        <a id='logo_welove' href="/"><img src="http://www.we-love-the.net/images/logowelovethenet.jpg" width="151" height="188" alt="we love th enet"></a>
        <?php } ?>
     </div>
   <div class="col-md-9"><br/>
     <?php 

          require_once "./nav.php";
        ?>
              <span class="small9">13 rue Petion, Paris, 11e - contact-at-we-love-the.net </span></p>
		      <p>&nbsp;</p>
		      <p>rideau ouvert . <span class="small9">nous sommes là, vous pouvez passer </span> /// rideau fermé . <span class="small9">nous ne sommes pas dispo</span></p>
              <p>
                <iframe src = "http://api.la-tapisserie.net/expo.html" width = "820px" height = "500px" frameborder = "0" scrolling="no"> </iframe>                
</p>
              <table width="800" border="0">
                <tr>
                  <td><p><span class="small9">Le lieu tire son nom de sa fonction passée : un tapissier y était installé. <br>
                  Il est situé au 13 rue Pétion, au centre du 11ème arrondissement, à 2 minutes à pied du métro Voltaire et à 10 minutes du métro Père Lachaise. <br>
                  Il est constitué d&rsquo;un espace de 28 mètres carré, avec vitrine donnant sur la rue, et d&rsquo;un sous-sol de 15 mètres carré environ. <br>
                  <br>
                  Le lieu est entièrement modulaire selon les moments, lieu de création, formation, exposition, événement.<br>
                  </span><br>
                    <br>
                  <strong><em>les expositions et évènements de la Tapisserie sur <a href="http://www.la-tapisserie.net/" target="_blank">www.la-tapisserie.net</a></em></strong> </p></td>
                </tr>
              </table>
            <br>
           <br>
              nos équipements<br>
              <span class="small9">vitrine sur la rue<br>
            espace d'expo . <a href="http://www.la-tapisserie.net/" target="_blank">www.la-tapisserie.net</a><br>
            établis<br>
            outils classiques<br>
            fer à souder, multimètre, etc...
            <br>
            machine à chantourner
            <br>
            découpe laser . lasersaur (dans un autre local)</span></p></td>
	     
    </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once './footer.php';?>
</body>
</html>