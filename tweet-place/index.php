<?php
  $title = "#happyTrucs TweetPlace par We Love The Net";
  require_once '../header.php';
?>
<body>
 <div id='wrapper' class="container-fluid">
  <div class="row">
     <?php 
          require_once "../sidebar.php";
        ?>

   <div class="col-md-10"><br/>
    <?php 
      require_once "../nav.php";
    ?>	


		<table width="1200" border="0">
		  <tr>
		      <h2>Tweet Place</h2>
		      <p>Co-production We Love The Net - <a target='_new' href="http://art2m.com">Art2m</a><br>
	          Aurélien Fache . Julien Levesque . Albertine Meunier<br>
	          <br>
		      </p>
		      <p>rideau ouvert = nous sommes là, vous pouvez passer</p>
		      <p><iframe class="vine-embed" src="https://vine.co/v/MaALFaUHLHw/embed/simple" width="600" height="600" frameborder="0"></iframe><script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script></p>
		      <p>&nbsp;</p>
		      <p>Tweet Place est un dispositif connecté permettant de savoir à distance si un lieu est ouvert ou fermé, en communiquant sur l&rsquo;ouverture ou non du lieu et la disponibilité des personnes présentes.<br>
		        Actuellement installé à la Tapisserie, Tweet Place déclenche en temps réel une animation photo en ligne (ouverture et fermeture du rideau du magasin) publiée sur le site web du lieu. Le dispositif envoie aussi de courtes phrases sur les réseaux sociaux pour montrer la disponibilité du lieu en ligne.<br>
		        La version présentée ici est celle avec l&rsquo;interrupteur et l&rsquo;arduino Ethernet Shield</p>
              <p>Comment savoir si un lieu est ouvert ou fermé? Communiquer sur sa présence?</p>
              <p>Installé dans la Tapisserie, un interrupteur (bouton poussoir) déclenche en temps réel </p>
              <ul>
                <li>une animation en ligne (ouverture et fermeture du rideau du magasin) </li>
                <li>l'envoi de courtes phrases sur les réseaux sociaux </li>
              </ul>
              <table width="800" border="0">
                <tr>
                  <td width="529"><iframe src = "http://api.la-tapisserie.net/rideau/index.html" width = "800px" height = "400px" frameborder = "0" scrolling="no"> </iframe></td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <p><strong>&gt; la version Simple Interrupteur</strong></p>
              <p>Petite explication en images&nbsp;:</p>
              <table width="600" border="0">
                <tr>
                  <td width="313" valign="top"><p>Voici le bouton interrupteur qui permet de signaler ou non notre présence</p></td>
                  <td width="277"><img src="Tweet-Place-photo-1b.jpg" width="149" height="193"></td>
                </tr>
              </table>
              <br>
              <br>
              <table width="720" border="0">
                <tr>
                  <td >nous «&nbsp;allumons&nbsp;» notre  présence via le bouton ON de l&rsquo;interrupteur, <br>
                    ainsi 
                  nous signalons notre présence</td>
                </tr>
              </table>
             
              <table width="600" border="0">
                <tr>
                  <td width="313" valign="top"><p><img src="position1.jpg" alt="" width="308" height="410"></p></td>
                  <td width="277" align="right"><p>en ligne sur le site<br>
                    <a href="http://www.we-love-the.net">www.we-love-the.net</a> <br>
                  l&rsquo;atelier présente un rideau ouvert</p>
                  <p><img src="http://api.la-tapisserie.net/rideau/1.jpg" width="400"></p>
                  <p>rideau ouvert =&nbsp;nous sommes là, vous pouvez passer</p></td>
                </tr>
              </table>
              <br>
              <table width="720" border="0">
                <tr>
                  <td ><p>Sur les réseaux sociaux (Facebook et Twitter) un message est publié pour signifier notre présence.</p>
                  <p>Il est choisi aléatoirement parmi des messages pré définis.</p>
                  <p><img src="Capture d’écran 2013-10-10 à 11.21.33.png" alt="" width="600"></p></td>
                </tr>
              </table>
              <p> <br>
              </p>
		      <table width="720" border="0">
		        <tr>
		          <td ><p>nous «&nbsp;éteignons&nbsp;» notre présence  via le bouton OFF de l&rsquo;interrupteur, <br>
		            ainsi 
	              nous signalons notre non présence</p></td>
	            </tr>
	          </table>
            
              <table width="600" border="0">
                <tr>
                  <td width="313" valign="top"><p><img src="position0.jpg" alt="" width="308" height="410"></p></td>
                  <td width="277" align="right"><p>en ligne sur le site<br>
                    <a href="http://www.we-love-the.net">www.we-love-the.net</a> <br>
                    l&rsquo;atelier présente un rideau fermé</p>
                    <p><img src="http://api.la-tapisserie.net/rideau/6.jpg" width="400"></p>
                    <p>rideau fermé =&nbsp;nous ne sommes pas là</p></td>
                </tr>
              </table>
              <br>
              <table width="720" border="0">
                <tr>
                  <td ><p>Sur les réseaux sociaux (Facebook et Twitter) un message est publié pour signifier notre non présence.</p>
                    <p>Il est choisi aléatoirement parmi des messages pré définis.</p>
                    <p><img src="Capture d’écran 2013-10-10 à 16.29.42.png" alt="" width="600"></p></td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <p><strong>&gt; la version Détecteur de lumière</strong>              </p>
              <table width="720" border="0">
                <tr>
                  <td width="313" valign="top"><p>Voici le boitier qui permet de signaler ou non notre présence</p>
                  <p>il suffit de placer ce boitier devant le rideau de fer de fermeture du lieu. <br>
                  Une fois baissé ce rideau crée un seuil de lumière qui informe de la &quot;non&quot; présence.</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>Pour le reste, le focntionnement est  identique.</p></td>
                  <td width="277"><img src="Tweet-Place-v2-photo-2.jpg" width="400"></td>
                </tr>
              </table>
              <br>
              <p>&nbsp;</p>
              <p><strong>Documentation technique :		      </strong></p>
		      <p class="small9">API de la tapisserie -&gt; <a href="http://api.la-tapisserie.net/" target="_blank">http://api.la-tapisserie.net/</a></p>
		      <p class="small9">Code arduino -&gt; <a href="https://github.com/mathemagie/api_la_tapisserie/blob/master/arduino/code" target="_blank">https://github.com/mathemagie/api_la_tapisserie/blob/master/arduino/code</a></p>
		      <p class="small9">Code PHP de l'API (Slim) -&gt; <a href="https://github.com/mathemagie/api_la_tapisserie/tree/master/www" target="_blank">https://github.com/mathemagie/api_la_tapisserie/tree/master/www</a></p>
          <br/>
           <?php
              require_once '../share_bloc.php';
            ?>
		      <p>&nbsp;</p>
		      <p><strong>Si vous souhaitez plus d'informations</strong> sur ce projet n'hésitez pas à nous contacter à cette adresse :</p>
            <p><span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p></td>
	      </tr>
    </table>
  </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>