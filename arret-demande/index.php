<?php
  $title = "#happyTrucs Arrêt demandé par We Love The Net";
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
    <br/>
	      <h3>Arrêt Demandé</h3>
		      <p>Co-production We Love The Net - <a target='_new' href="http://art2m.com">Art2m</a><br>
	          Aurélien Fache . Julien levesque . Albertine meunier<br>
		      </p>
		      <p><em>Arrêt Demandé</em> est un objet destiné à annoncer de manière visuelle ou sonore l'arrivée prochaine de votre bus. <br>
				<br>
		      </p>
		      <p><strong>Data </strong>: RATP Data</p>
				<p>Petite explication en images&nbsp;:<br>
				  <br>
				  <em> le bus arrive ...</em>  </p>
				<p>
          <?php if (isMobile()) {?>
            <iframe class="vine-embed" src="https://vine.co/v/MmKFBDKrDQi/embed/simple" width="100%" height="100%" frameborder="0"></iframe>
          <?php } else {?>
            <iframe class="vine-embed" src="https://vine.co/v/MmKFBDKrDQi/embed/simple" width="600px" height="600px" frameborder="0"></iframe>
  
          <?php } ?>
          <script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script>
				</p>
              <p><script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script><br>
              </p>

		       <?php
          			require_once '../share_bloc.php';
        		?>
				<br/><br/>
					<p>Les autres objets "branchés" de la série <strong>#happyTrucs</strong> : <a href="/tweet-place/">Tweet Place</a>, <a href="/7ieme-ciel/">7ème Ciel</a>,
        			<a href="/agit-prop/">Agit prop</a>, <a href="/little-umbrella/">Litte Umbrella</a>, <a href="/le-catch-barge/">CatchBarge</a>
        		</p>
		      <p><strong>Si vous souhaitez plus d'informations</strong> sur ce projet n'hésitez pas à nous contacter à cette adresse :</p>
            <p><span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p>

	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once '../footer.php';?>
</body>
</html>