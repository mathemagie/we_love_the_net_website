<?php 

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
<!-- le référencement web pour google il faut completer et remplire a la place des # -->
		<meta name="description" lang="fr" content="<?php echo $title;?>"/>
		<meta name="keywords" lang="fr"  content="Microtruc, #happyTrucs, data, API, bus, We Love The Net, we love the net, welovethenet, La Tapisserie, la tapisserie, tapisserie, latapisserie, wln,"/>
		<meta name="author" content="Bastien DIDIER, We Love the Net"/>
		<meta name="category" content="art, net art"/>			
		<meta name="copyright" content="We Love The Net"/>		
        <link rel="icon" type="image/ico" href="http://www.we-love-the.net/favicon.ico" />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/css/font-awesome.min">

		<title><?php echo $title;?></title>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "c00ea4c5-5727-4fb5-ae73-343dcd818626", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

	  	<link rel="stylesheet" type="text/css" href="/css/normalize.css"/>
      <link rel="stylesheet" type="text/css" href="/css/hack.css?v=3"/>


<link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
