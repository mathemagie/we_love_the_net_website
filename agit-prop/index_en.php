<?php
  $title = "#happyTrucs AgitProp by We Love The Net";
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
				 	
		      <h2>AgitProp</h2>
		      <p>by We Love The Net,<br>
	          Aurélien Fache . Julien Levesque<br>
		      </p>
		      <p>&nbsp;</p>
		      <p>
            AgitProp is an object that reacts to a <keyword> chosen online. Conceived as a site-
specific installation, AgitProp presents an object that vibrates whenever an article 

containing the chosen <keyword> is published online during the past hour. In the 

example of NUMA, an object vibrates every time that the expression <NUMA> is 

published and indexed by Google.</p>
            <p>

              The AgitProp installed at La Tapisserie takes the form of a giant Pegman… 

Whenever the keyword <Pegman> is published online, the object comes to life by 

ringing a bell.

            </p>
                <br>
              </p>
              <p><strong>Data:</strong>Google search results</p>
           <br/>
            <p>Illustrated explanation:</p>
            <p><iframe class="vine-embed" src="https://vine.co/v/MaqO75B3ujW/embed/simple" width="600" height="600" frameborder="0"></iframe><script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script>
              <br>
              <br>
              <p>
                Pegman Puppet made from the AgitProp model Symbolized by a sculpture, the Pegman Puppet is a cloth doll that vibrates every time 
                Pegman is mentioned online. This voodoo doll is a magical object that represents the spirit of the little yellow man of Google Maps.
            </p>
              <p><strong>Technical documentation:</strong></p>
		          <a target='_new' href="https://github.com/mathemagie/agitprop">https://github.com/mathemagie/agitprop</a>
              <br/><br/>
             <p><strong>For more information</strong>on this project, feel free to contact:&nbsp;<span class="small9"><a href="mailto:contact@we-love-the.net">contact(at)we-love-the.net </a></span></p>
	  </div>
	 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php require_once '../footer.php';?>
</body>
</html>