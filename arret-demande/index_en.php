<?php
  $title = "#happyTrucs Arrêt demandé par We Love The Net";
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
    <br/>
    
	      <h3>Arrêt Demandé</h3>
		      <p>by We Love The Net,<br>
	         Aurélien Fache . Julien levesque . albertine meunier<br>
		      </p>
		      <p><em>Arrêt Demandé</em> Arrêt Demandé (Stop Requested) is an object that announces through image or

				sound that your bus is coming soon. <br>
				<br>
		      </p>
		      <p><strong>Data:</strong> RATP Data</p>
				<p>Illustrated explanation:<br>
				  <br>
				  <em> the bus is coming ...</em>  </p>
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
              <p><strong>Technical documentation:</strong></p>
		      <p class="small9"><a target='new' href="https://github.com/mathemagie/arret_demande">https://github.com/mathemagie/arret_demande</a></p>
		     <!-- <span class='st_facebook_large' displayText='Facebook'></span>
				<span class='st_twitter_large' displayText='Tweet'></span>
				<span class='st_pinterest_large' displayText='Pinterest'></span>-->
				<br/>
		   <p><strong>For more information</strong>on this project, feel free to contact:&nbsp;<span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p>
	  </div>
	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once '../footer.php';?>
</body>
</html>