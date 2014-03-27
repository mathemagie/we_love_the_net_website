<?php
  $title = "#happyTrucs 7th Heaven by We Love The Net";
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
      		  <h2>7th Heaven</h2>
		      <p>by We Love The Net,<br>
	          Aurélien Fache . Julien Levesque . Albertine Meunier<br>
	          &amp; tristan savina for android development
	          <br>
		      </p>
		      <p>&nbsp;</p>
		      <p>7th Heaven is a tangible, esthetic and playful installation.Personalized mobile objects move up and down a string according to the real-time physical altitude of the residents or regular visitors of the location.7th Heaven is a living social sculpture that plays out before our very eyes. It is 
				intended to be participative, as each regular visitor to the location can become a part of the installation.A red string marks the exact altitude of the location. When the personalized object reaches the red string, it (potentially) indicates that the person is present at that location.<p>

			<p>7th Heaven will be installed soon at NUMA, a co-working space in Paris.<br>
	          <br>
		      </p>
			<p><strong>Data</strong>: individual altitude via Google Elevation API</p>
			<p><img class="img-responsive" src="7ieme-ciel.jpg" width="600" alt="elevation"></p>
			<p><img class="img-responsive"src="7ieme-ciel-detail.jpg" width="600" height="450" alt="elevation"></p>
			<br/>
              <p><img class="img-responsive" src="Proto-7Ciel-photo-2-bd.jpg" width="600" alt="elevation 2" /></p>
              <p><strong>Technical documentation:</strong></p>
		      <p class="small9">to complete<a href="https://github.com/mathemagie/api_la_tapisserie/tree/master/www" target="_blank"></a></p>
		   <p><strong>For more information</strong>on this project, feel free to contact:&nbsp;<span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p>
	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once '../footer.php';?>
</body>
</html>