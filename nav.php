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
          $menu['association.php'] = 'Association';
          $menu['lieu.php'] = 'Tapisserie, le lieu';
          $menu['productions.php'] = 'Les Productions d\'objets';
          $menu['labotrucs.php'] = 'LabOTrucs';
          $menu['hyperolds.php'] = 'Hype(r)Olds';
          $menu['formations.php'] = 'Formations';
//          echo $_SERVER['SCRIPT_NAME'];
        ?>
        <?php 
        foreach ($menu as $link => $label) {
            $class = '';
            $link = "/" . $link;
            if ($_SERVER['SCRIPT_NAME'] == $link ) $class = 'active';

            echo "<li class='" . $class . "'>";
            echo "<a href='" . $link . "'>" . $label . "</a></li>";
        }
        ?>


      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>