<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/skuiby/site_img/favicon.ico">

<title>Skuiby</title>

<link href="/skuiby/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="/skuiby/css/style.css" rel="stylesheet">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="row">

      <div class="navbar-header col-sm-2 col-md-2">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="/skuiby/site_img/logo.png" alt=" " /></a>
      </div>

      <div class="navbar-center-fix">
        <div id="navbar" class="navbar-collapse collapse col-sm-6 col-md-6 col-md-offset-1">
          <ul class="nav navbar-nav center">
            <li><a href="#"><i class="fa fa-bars"></i>Browse categories</a></li>
            <li><a href="#"><i class="fa fa-bolt"></i> Live events</a></li>
            <li><a href="#"><i class="fa fa-list-ol"></i> View charts</a></li>
          </ul>
        </div>
      </div><!-- .navbar-center-fix -->

    </div><!-- .row -->
  </div><!-- .container-fluid -->
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">

      <div class="row sidebar-profile">
        <div class="col-sm-12 col-md-6 col-md-offset-3 sidebar-profile-picture placeholder">
          <img src="/skuiby/site_img/profile.jpg" alt=" " class="img-responsive" />
          <h5>Marcel Jollie</h5>
          <p>Viewer</p>
        </div><!-- .sidebar-profile-picture -->
      </div><!-- .sidebar-profile -->

      <hr />

      <h3 class="text-red h3fix"><i class="fa fa-tags"></i>My categories</h3>
      <ul class="nav nav-sidebar">
        <li><a href="#">Electro (61245)</a></li>
        <li><a href="#">Hardcore & Hardstyle (27534)</a></li>
        <li class="active"><a href="#">House (49762)</a></li>
        <li><a href="#">Techno (2364)</a></li>
        <li><a href="#">Trance (4623)</a></li>
      </ul>

      <hr />

      <h3 class="text-red"><i class="fa fa-list-ol"></i>Top artists</h3>
      <ol class="nav nav-sidebar list-group">
        <li><a href="#">Dimitri Vegas & Like Mike</a></li>
        <li><a href="#">Dyro</a></li>
        <li><a href="#">Martin Garrix</a></li>
        <li><a href="#">Tiesto</a></li>
        <li><a href="#">David Guetta</a></li>
      </ol>
      <a class="btn btn-primary buttons button-gray" href="#">View complete list</a>

      <div class="searchbar">
        <form>
          <input class="sidebar-search" type="text" name="search" placeholder="Search..." />
        </form>
      </div><!-- .searchbar -->

    </div><!-- .sidebar -->


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<!--       <h1 class="page-header">Dashboard</h1> -->

		  <div class="dj-thumbnails">

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb1.jpg');">
  						<h3>Wobble</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">90’s Drum & Bass hit mix</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb2.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Epic drum & Bass club</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb3.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb4.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb5.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb6.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb1.jpg');">
  						<h3>Wobble</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">90’s Drum & Bass hit mix</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb2.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Epic drum & Bass club</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb3.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb4.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb5.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>

  			<div class="dj-thumb-wrap col-sm-6 col-md-3">
  				<div class="dj-thumb">
    				<div class="dj-thumb-gradient"></div>
  					<div class="thumb-inner-content" style="background-image: url('/skuiby/site_img/thumb6.jpg');">
  						<h3>DJ naam</h3>
  						<i class="fa fa-circle"> Now live</i>
  					</div>
  				</div>
  				<div class="thumb-outer-content">
  					<h2 class="text-red">Title</h2>
  					<p>Hier komt de omschrijving van het evenement te staan.</p>
  				</div>
  			</div>


    	</div><!-- .dj-thumbnails -->
    </div><!-- .main -->
  </div>
</div>

<!-- Footer -->
	<div class="container-fluid">
		<div class="row now-playing-video">
			<div class="col-md-offset-9 col-md-3">
				<div class="player-video-wrap">
					<div class="player-video" style="background-image: url('/skuiby/site_img/thumb4.jpg');"></div>
				</div>
			</div>
		</div>
	</div>


<div class="navbar navbar-inverse navbar-fixed-bottom nav-player" role="navigation">

	<div class="col-md-2 pb-now-playing">
		<i class="fa fa-headphones"></i><span>Now playing</span>
	</div>
	<div class="col-md-1">
		<div class="pb-now-playing-thumb" style="background-image: url('/skuiby/site_img/profile.jpg');">
			<div class="pb-now-playing-rank">
				<p>#101</p>
			</div>
		</div>
  </div>
  <div class="col-md-2 pb-now-playing-info">
		<div class="pb-name">
			<h5>DJ Marcello scheefkaak (NL)</h5>
			<p>The BOOM BOOM ROOM session</p>
		</div>
	</div>
	<div class="col-md-4 pb-player">
		<div class="player">
			<div class="pb-player-stop">
        <i class="fa fa-stop"></i>
        stop
      </div>
			<div class="pb-player-pause">
        <i class="fa fa-pause"></i>
        pause
      </div>
		</div>
		<div class="pb-player-info">
			<h5>00:14:29</h5>
			<p>2 HOUR SET</p>
		</div>
	</div>
	<div class="col-md-3">
		<div class="pb-player-settings">
			<div class="pb-volume">
        <i class="fa fa-volume-up"></i><span>volume</span>
      </div>
      <div class="pb-bigscreen">
			  <i class="fa fa-television"></i><span>bigscreen</span>
      </div>
		</div>
	</div>

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/skuiby/js/bootstrap.min.js"></script>
</body>
</html>
