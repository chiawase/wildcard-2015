<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Searching for "Search Query" | Wildcard</title>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="img/wildcard-favicon.png">
	</head>

	<body>
		<div class="container">
			<div class="row">
				<header class="hidden-xs main-header">
					<img src="img/wildcard-header.png">
				</header>
				<nav class="navbar navbar-default navbar-fixed-top">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wildcard-nav" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar" aria-hidden="true"></span>
			        <span class="icon-bar" aria-hidden="true"></span>
			        <span class="icon-bar" aria-hidden="true"></span>
			      </button>
			      <a class="navbar-brand visible-xs-block" href="index.php">
			      	<!-- <img alt="Brand" src="img/wildcard-favicon.png"> -->
			      	<img alt="Brand" src="img/wildcard-header.png">
			      </a>
			    </div><!-- /.navbar-header -->

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="wildcard-nav">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CompSAt <span class="caret" aria-hidden="true"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Select*</a></li>
				            <li><a href="#">Events</a></li>
				          </ul>
			        </li>
			        <li><a href="#">Information Technology</a></li>
			        <li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Creative <span class="caret" aria-hidden="true"></span></a>
			        	<ul class="dropdown-menu">
			        		<li><a href="#">Movies</a></li>
			        		<li><a href="#">Books</a></li>
			        		<li><a href="#">Video Games</a></li>
			        		<li><a href="#">I.T. Out</a></li>
			        	</ul>
			        </li>
			      </ul>

			      <div class="navbar-form navbar-right" role="search">
			      	<div class="input-group">
			      		<input type="text" class="form-control" placeholder="Search">
				      	<span class="input-group-btn">
					      	<button type="submit" class="btn btn-default">
					      		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					      	</button>
				      	</span>
			      	</div><!-- /.input-group -->
			      </div><!-- /.navbar-form -->
			    </div><!-- /.navbar-collapse -->
				</nav>
			</div><!-- /.row -->

			<div class="content">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="title">Search</h1>
						<h3 class="query">Test Search</h3>

						<div class="article-card">
							<div class="article-header">
								<a href="#" class="article-timestamp">26 June 2015, 4:41 PM</a>
								<img src="img/test-main-01.jpg">
								<h2 class="title"><a href="#">Latest Article #1</a></h2>
							</div><!-- /.article-header -->
							<div class="article-body">
								<h5 class="author">By Author Name, Another Name</h5>
								<p>
									This is just a preview of what is in the article. It may contain the excerpt from the actual article.
								</p>
								<p>
									It may also contain another paragraph, to give users a taste of what is in the article. I am just blabbering right now.
								</p>
							</div><!-- /.article-body -->
							<div class="article-footer">
								<div class="article-tags pull-left">
									<button type="button" class="btn btn-info article-tag">I.T.</button>
								</div>
								<button type="button" class="btn btn-link pull-right">Read More &raquo;</button>
							</div><!-- /.article-footer -->
							<div class="clearfix"></div>
						</div><!-- /.article-card -->

					</div><!-- /.cols -->
				</div><!-- /.row -->
			</div><!-- /.content -->

		</div><!-- /.container -->
		<footer class="footer">
			<a href="http://compsat.org"><img src="img/CompSAt_Gear.png" width="25" height="25"></a>
			<p>&copy; 2015</p>
		</footer>
		<!-- jQuery -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/config.js"></script>
	</body>
</html>
