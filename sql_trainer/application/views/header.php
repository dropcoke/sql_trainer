<html>
<head>
    <title><?php echo $title ?></title>
    <script type="text/javascript" src="/sql001/assets/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/sql001/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/sql001/assets/css/bootstrap.min.css"/>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10495499-3', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/sql001/">SQL Trainer ver.0.1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li<?php if ($this->router->fetch_class() == 'db_browse' && $this->router->fetch_method() == 'index'): ?> class="active"<?php endif; ?>><a href="/sql001/">Home</a></li>
            <li<?php if ($this->router->fetch_class() == 'sql_editor'): ?> class="active"<?php endif; ?>><a href="/sql001/index.php/sql_editor">SQL Editor</a></li>
            <!-- <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
