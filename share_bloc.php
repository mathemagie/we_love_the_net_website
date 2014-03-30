<?php
	$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
?>
<a class='share' target='_new' href="http://www.twitter.com/share?text=<?php echo urlencode($title);?>"><i class="fa fa-twitter"></i></a>
<a class='share' target='_new' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($monUrl);?>"><i class="fa fa-facebook"></i></a>
