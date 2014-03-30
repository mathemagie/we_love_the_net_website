<?php
	$title = "#happyTrucs Little Umbrella by We Love The Net";
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
      Aurélien Fache and Julien Levesque<br>
      </p>
      <p>&nbsp;</p>
      <p>Little Umbrella is a small umbrella connected to the Internet which shows the weather for the next 6 hours. The umbrella opens or closes in a poetic visualization of the weather forecast.
		This smart object tells you whether or not to wear a raincoat!          <br>
		<br/></p>
      <p><strong>Data </strong>: <a target='_new' href="http://developer.yahoo.com/weather/">Yahoo Weather API</a></p>
		<br/>
		<p>Illustrated explanation:</p>
		<p><img class="img-responsive" src="little-3-umbrella.jpg" width="600" height="418" alt="littel umbrella"></p>
		<p>Little Umbrella for Paris - Tokyo - New York</p>
		<p>&nbsp;</p>
		<p><img class="img-responsive" src="little_umbrella-photo-2.jpg" width="450"></p>
      <p><iframe class="vine-embed" src="https://vine.co/v/hWmTpE1b09j/embed/simple" width="600" height="600" frameborder="0"></iframe><script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script><br>
      </p>
      <br/>
      <p><strong>Technical documentation:		      </strong></p>
      <p class="small9"><a target='_new' href="https://github.com/mathemagie/little_umbrella">https://github.com/mathemagie/little_umbrella</a></p>
      <br/>
      <p><strong>For more information</strong>on this project, feel free to contact:&nbsp;<span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p>
	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once '../footer.php';?>
</body>
</html>