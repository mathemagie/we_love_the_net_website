<?php
  $title = "#happyTrucs 7ieme ciel par We Love The Net";
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
        <h2>7 ième Ciel</h2>
		      <p>par We Love The Net,<br>
	          Aurélien fache . jJlien levesque . Albertine meunier<br>
	          &amp; tristan savina pour le développement de l'application Android
	          <br>
		      </p>
		      <p>&nbsp;</p>
		      <p>7ième ciel est une installation tangible esthétique et ludique. <br>
		        Des objets mobiles personnalisés montent et descendent le long d&rsquo;un fil en fonction de l&rsquo;altitude physique temps réel des personnes du lieu ou des habitués du lieu. L&rsquo;installation 7ième ciel présente ainsi une sculpture sociale vivante qui se joue devant nos yeux. Elle est conçue pour être participative&nbsp;: chaque personne habituée du lieu peut faire partie de l&rsquo;installation. <br>
		        Un fil de couleur rouge repère l&rsquo;altitude exacte du lieu. Lorsque l&rsquo;objet personnalisé d&rsquo;une personne atteint le fil rouge, il marque (potentiellement) la présence de la personne dans le lieu même.<br>
	          L&rsquo;installation 7ième ciel va être installée prochainement à NUMA, espace de co-working parisien.<br>
	          <br>
		      </p>
				<p><strong>Data </strong>: altitude individu via Google location</p>
				<p><img class="img-responsive" src="7ieme-ciel.jpg" width="600" alt="elevation"></p>
				<p><img class="img-responsive"src="7ieme-ciel-detail.jpg" width="600" height="450" alt="elevation"></p>
				<p>&nbsp;</p>
              <p><img class="img-responsive" src="Proto-7Ciel-photo-2-bd.jpg" width="600" alt="elevation 2" /></p>
              <p><br>
              </p>
              <p><strong>Documentation technique :		      </strong></p>
		      <p class="small9">à compléter<a href="https://github.com/mathemagie/api_la_tapisserie/tree/master/www" target="_blank"></a></p>
		      <p>&nbsp;</p>
		      <?php
		          require_once '../share_bloc.php';
        		?><br/><br/>
        		 <p>Les autres objets "branchés" de la série <strong>#happyTrucs</strong> : <a href="/little-umbrella/">Little Umbrella</a>, <a href="/tweet-place/">Tweet Place</a>,
              <a href="/agit-prop/">Agit prop</a>, <a href="/arret-demande/">Arrêt demandé</a>, <a href="/le-catch-barge/">CatchBarge</a>
            </p>
		      <p><strong>Si vous souhaitez plus d'informations</strong> sur ce projet n'hésitez pas à nous contacter à cette adresse :</p>
            <p><span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span>

	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</body>
</html>