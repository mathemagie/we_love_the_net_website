    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo_mobile" href="/">We Love The Net</a>
     </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php 

          $doActive = false;

          $menu['association'] = 'Association';
          $menu['lieu'] = 'Tapisserie, le lieu';
          $menu['productions'] = 'Productions d\'objets';
          $menu['labotrucs'] = 'LabOTrucs';
          $menu['hyperolds'] = 'Hype(r)Olds';
          $menu['formations.php'] = 'Formations';

          $all_projects = array('umbrella','catch','agit','demande','tweet-place','ciel');
          foreach ($all_projects as $project_name) {
            if (strstr($_SERVER['REQUEST_URI'],$project_name)) $doActive = true;
        }
          
        ?>
        <?php 
        foreach ($menu as $link => $label) {
            $class = '';
            $link = "/" . $link;
            if ($_SERVER['SCRIPT_NAME'] == $link ) $class = 'active';
            if (($link == '/productions.php') && $doActive) $class = 'active';
            echo "<li class='" . $class . "'>";
            echo "<a class='welovethenet' href='" . $link . "'>" . $label . "</a></li>";
        }
        ?>


      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>