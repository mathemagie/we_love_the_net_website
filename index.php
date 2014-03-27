<?php
  $title = "We Love The Net";
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
      <br>
                 <span class="small9">13 rue Petion, Paris, 11e - contact-at-we-love-the.net - nous suivre <a href="https://twitter.com/we_love_the_net"><img src="images/twitter.png" width="25" height="21" alt="twitter"></a></span> <a href="https://www.facebook.com/we.lovethenet"><img src="images/facebook-logo.jpg" width="25" alt="twitter"></a> <a href="http://www.pinterest.com/welovethenet/"><img src="images/pinterest.jpg" width="25" alt="twitter"></a></p>
		      <p><br>
		        réalisation, diffusion et promotion de projets liés au design et à l&rsquo;art numérique, <br>
	          et accompagnement de publics vers les NTIC</p>
		      <p>&nbsp;</p>
              <p><strong>&gt; nous recherchons 16 dames de plus de 66 ans </strong>. <a href="http://labotrucs.tumblr.com/post/72654209859/petite-annonce-nous-recherchons-des-dames-de-plus-de">voir l'annonce</a></p>
<!--		      <p><strong>&gt; nous recherchons des co-locataires : développeur, designer, bidouilleur, artiste, graphiste ... </strong><a href="http://we-love-the.net/annonce/">voir l'annonce</a>		      <br>-->
		        <br>
              </p>
		      <p>&gt; et puis aussi ... <br>
	          <img class="img-responsive" src="images/cherche-hacker.jpg" width="650" height="137" alt="cherche hacker"></p>
		      <p><strong>vous souhaitez savoir si nous somme à l'atelier?</strong><br>
	            rideau ouvert . <span class="small9">nous sommes là, vous pouvez passer<br>
	          </span>rideau fermé . <span class="small9">nous ne sommes pas dispo</span><br>
	          plus d'info sur <a href="http://we-love-the.net/tweet-place/">TweetPlace</a>		      </p>
	          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

              <p>
                <iframe src="http://api.la-tapisserie.net/rideau/index.html" width="800" height="600"/>                
                
              </p>
              
	  </div>
	 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once './footer.php';?>
</body>
</html>