<?php
  $title = "#happyTrucs Little Umbrella par We Love The Net";
  require_once '../header.php';
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
      require_once "../nav.php";
    ?>
	 	
      <h2>Little Umbrella</h2>
		      <p>by We Love The Net,<br>
	          aurélien fache . julien levesque<br>
		      </p>
		      <p>&nbsp;</p>
		      <p>Little Umbrella est un petit parapluie connecté à Internet qui permet de connaître le temps qu'il va faire dans les 6 prochaines heures. Le parapluie s'ouvre ou se ferme en fonction de la météo et produit une visualisation poétique du temps à venir...<br>
Cet objet connecté permet ainsi de savoir si il faut sortir couvert ou pas!              <br>
<br>
		      </p>
		      <p><strong>Data </strong>: yahoo weather API</p>
<p>&nbsp;</p>
<p>Petite explication en images&nbsp;:</p>
<p><img class="img-responsive" src="little-3-umbrella.jpg" width="600" height="418" alt="littel umbrella"></p>
<p>Little Umbrella pour Paris - Tokyo - New York</p>
<p>&nbsp;</p>
<p><img class="img-responsive" src="little_umbrella-photo-2.jpg" width="450"></p>
              <p><iframe class="vine-embed" src="https://vine.co/v/hWmTpE1b09j/embed/simple" width="600" height="600" frameborder="0"></iframe><script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script><br>
              </p>
              <p>&nbsp;</p>
              <p><strong>Documentation technique :		      </strong></p>
		      <p class="small9"><a href="https://github.com/mathemagie/little_umbrella">https://github.com/mathemagie/little_umbrella</a></p>
<p class="small9">&nbsp;</p>
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p><strong>Si vous souhaitez plus d'informations</strong> sur ce projet n'hésitez pas à nous contacter à cette adresse :</p>
            <p><span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p>

	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</body>
</html>