<?php
  $title = "LabOTrucs";
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
<!--		      <p>réalisation, diffusion et promotion de projets liés au design et à l&rsquo;art numérique, <br>
et accompagnement de publics vers les NTIC</p>-->
		      <p>&nbsp;</p>

	          <h4>Ateliers de  sensibilisation et d'accès à la fabrication numérique par le biais de la création artistique<br>
              pour des femmes de plus de 66 ans et des enfants de 13 ans       . </h4>
              <h4>LabOTrucs<br>
                <span class="small9">impliquer les publics éloignés ou peu éduqués au numérique et de les accompagner pour qu&rsquo;ils deviennent des acteurs autonomes dans le monde d&rsquo;aujourd&rsquo;hui.<br>
                </span>	        </h4>
              <p>Depuis peu, le numérique rend possible un accès plus aisé à certains outils de fabrication auparavant réservés à l&rsquo;industrie. Mais la barrière de la technique semble toujours infranchissable pour certains. Peu de gens ont conscience des potentialités du numérique, de son pouvoir d&rsquo;autonomisation, d&rsquo;émancipation et d&rsquo;« empowerment ». Aborder le numérique à travers la création artistique contribue à rendre celui-ci plus ludique, plus accessible et permet de développer la créativité. Nous ferons découvrir à ces publics à l&rsquo;écart, les potentialités de production et de diffusion offertes par les machines de fabrication numérique, et nous donnerons à ces publics l&rsquo;opportunité de s&rsquo;impliquer dans un projet depuis sa conception jusqu&rsquo;à sa réalisation. Nous souhaitons favoriser un environnement créatif rassurant pour ces publics.<br>
                <br>
              </p>
              <a class="btn btn-default" href="http://labotrucs.tumblr.com/" role="button">Le blog du projet</a>
              <br/><br/>

             <?php if (0) {?>
              English version:<br/>

              <h4>Workshops for accessing and appreciating digital media through art projects for women aged 66 and above and children aged 13.</h4>
              <h4>LabOTrucs</h4>

<strong>initiating marginalized or less educated audiences to digital media, working with them to become independent citizens in the contemporary world</strong>

        <p>Recently, digital media has made certain creative tools that were previously reserved 

        for professionals more accessible to the general public. But for some people, the 

        technical barrier remains. Few people are aware of digital media’s potential for 

        independence, emancipation and empowerment. Approaching digital media through 

        art projects makes it more playfully accessible and develops creativity. We will initiate 

        these marginalized audiences to the potential for production and distribution of these 

        digital tools, giving them the opportunity to be involved in a project from conception 

        to production. Our goal is to provide a reassuring creative environment for these 

        audiences.<p>
        <p><em><a target='_new' href="http://labotrucs.tumblr.com/">LabOTrucs weblog</a></em></p>

        <?php } ?>

              <p><img class="img-responsive" src="http://we-love-the.net/labotrucs/sewing-machine-antique.jpg"  alt="hyperolds" width="550"><br>

	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once './footer.php';?>
</body>
</html>