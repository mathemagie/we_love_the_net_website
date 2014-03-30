<?php
  $title = "#happyTrucs CatchBarge by We Love The Net";
  require_once '../header.php';
?>

<style>
.carousel-inner,.carousel,.item,.container,.fill {
  width:800px;
}
</style>

<body>
 <div class="container-fluid">
	<div class="row">
     <div class="col-sm-2">
     	<?php if (!isMobile()) {?>
     	<a id='logo_welove' href="/"><img src="http://www.we-love-the.net/images/logowelovethenet.jpg" width="151" height="188" alt="we love th enet"></a>
     	<?php } ?>
     </div>
	 <div class="col-md-9"><br/>
	 	  <?php 
      require_once "../nav.php";
    ?>

        <h2>Catch Barge</h2>
        <p>by We Love The Net,<br>
        Aurélien Fache , Loic le guen . Julien Levesque . Albertine Meunier<br>
        <br>
        </p>
		      <p>
            CatchBarge is an installation made for storefront windows, desiged to attract the barge.
		      </p>
		      <p>
            The CatchBarge in our space allows you to control a toy train by switching its path and modulating its speed very simply via a smartphone interface.
          </p>
		      <div>
               
                              CatchBarge is an homage to the “Tech Model Railroad Club” (TMRC) founded by 

              Massachusetts Institute of Technology (MIT) students in 1949.

              Passionate about electronics, club members built a giant model railroad in their 

              spare time. Manually controlling the switches was much too simple for these student 

              engineers, who promptly automated the task.

              As the model was being developed, TMRC members perfected it by experimenting 

              with rudimentary programming. Hence the term « hacking », a philosophy oriented 

              toward practical experimentation and the reappropriation of technology as a means 

              to an end.
               
              </div>
        <p>&nbsp;</p>
        <p>Illustrated explanation:</p>
                <p>
          <iframe src="//instagram.com/p/kmsAl5qu44/embed/" width="612" height="710" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        </p>

        <!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://www.we-love-the.net/le-catch-barge/1.jpg" alt="" />
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="http://www.we-love-the.net/le-catch-barge/2.jpg" alt="" />
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="http://www.we-love-the.net/le-catch-barge/3.jpg" alt="" />
      <div class="carousel-caption">
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
     <a class="left carousel-control" href="#this-carousel-id" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#this-carousel-id" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- /.carousel -->
        <br/>
        <p><img class="img-responsive" src="catch-barge-grand.jpg" width="800" height="599" alt="catch barge"></p>
        <p><span class="small9">General view of toy train in storefront window of La Tapisserie (scale N - 1/160)</span><br>
        </p>
        <p>&nbsp; </p>
        <p><img class="img-responsive" src="catch-barge-proto-5.jpg" width="800" height="600"><br>
          <br>
        <span class="small9">Toy train in storefront window of La Tapisserie (scale N - 1/160)</span></p>
        <p>&nbsp;</p>
        <p><img class="img-responsive" src="catch-barge-proto-4.jpg" width="800" height="600" alt="catch barge"><br>
          <br>
         Train control interface
        </p>
        <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p><strong>Technical documentation:</strong></p>
		        <p class="small9">to complete</p>
    <!-- <span class='st_facebook_large' displayText='Facebook'></span>
    				<span class='st_twitter_large' displayText='Tweet'></span>
    				<span class='st_pinterest_large' displayText='Pinterest'></span>-->
    		      <p>&nbsp;</p>
             <p><strong>For more information</strong>on this project, feel free to contact:&nbsp;<span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p>

	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once '../footer.php';?>
</body>
</html>