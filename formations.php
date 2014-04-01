<?php
  $title = "Formations";
  require_once './header.php';
?>
	<body>

		 <div id='wrapper' class="container-fluid">
	<div class="row">
	<?php 
          require_once "./sidebar.php";
    ?>
	 <div class="col-md-10"><br/>
	 	 <?php 
		      require_once "./nav.php";
		    ?>
		      <br/>
	            <span class="small9">13 rue Petion, Paris, 11e - contact-at-we-love-the.net </span><br>
              <br/>
		      <p>Réalisation, diffusion et promotion de projets liés au design et à l&rsquo;art numérique, <br>
et accompagnement de publics vers les NTI</p>
		      <ul>
				<li>physical computing (arduino, raspberry pi)</li>
				<li>API</li>
			     <li>HTML5, Javascript, Php, Python</li>
			   </ul>
            <p><img class="img-responsive" src="images/carlson-1-s.jpg" width="600" height="401"></p>
	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once './footer.php';?>
</body>
</html>