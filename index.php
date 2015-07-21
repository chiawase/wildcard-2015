<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Wildcard | Official Blog of the Computer Society of the Ateneo</title>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/lightslider.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="img/wildcard-favicon.png">
	</head>

	<body>
		<div class="container">
			<div class="row">
<<<<<<< HEAD
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
				      		<!-- Link for now until Search function is implemented -->
					      	<a href="search.php" type="submit" class="btn btn-default">
					      		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					      	</a>
				      	</span>
			      	</div><!-- /.input-group -->
			      </div><!-- /.navbar-form -->
			    </div><!-- /.navbar-collapse -->
				</nav>
			</div><!-- /.row -->

			<div class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="featured">
							<div class="btn-group">
								<a href="featured.php" type="button" class="btn btn-default btn-lg">Featured</a>
								<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#latest">Latest</a></li>
								</ul>
							</div>

							<div class="article-card">
								<div class="article-header">
									<a href="article.php" class="article-timestamp">26 June 2015, 4:41 PM</a>
									<a href="article.php"><img src="img/test-main-01.jpg"></a>
									<h2 class="title"><a href="article.php">Featured Article</a></h2>
								</div><!-- /.article-header -->
								<div class="article-body">
									<h5 class="author">By <a href="#">Author Name</a>, <a href="#">Another Name</a></h5>
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
									<a href="article.php" type="button" class="btn btn-link pull-right">Read More &raquo;</a>
								</div><!-- /.article-footer -->
								<div class="clearfix"></div>
							</div><!-- /.article-card -->
						</div>

						<div class="latest">
							<div class="btn-group">
								<a href="latest.php" type="button" class="btn btn-default btn-lg">Latest</a>
								<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#featured">Featured</a></li>
								</ul>
=======
				<div class="col-xs-12">
					<ul id="featured">
						<li data-thumb="img/thumbs/test-main-01.jpg">
							<img src="img/test-main-01.jpg">
							<div class="featured-content">
								<h2 class="title">Article Title #1</h2>
								<h5 class="author">by Author Name</h5>
								<p>This is a short excerpt of the featured article. This should be a maximum of two lines/sentences only.</p>
								<p class="button"><a class="btn btn-info btn-sm" role="button" href="#">Read More</a></p>
							</div>
						</li>
						<li data-thumb="img/thumbs/test-main-02.jpg">
							<img src="img/test-main-02.jpg">
							<div class="featured-content">
								<h2 class="title">Article Title #2</h2>
								<h5 class="author">by Author Name</h5>
								<p>This is a short excerpt of the featured article. This should be a maximum of two lines/sentences only.</p>
								<p class="button"><a class="btn btn-info btn-sm" role="button" href="#">Read More</a></p>
							</div>
						</li>
						<li data-thumb="img/thumbs/test-main-03.jpg">
							<img src="img/test-main-03.jpg">
							<div class="featured-content">
								<h2 class="title">Article Title #3</h2>
								<h5 class="author">by Author Name, Another Name</h5>
								<p>This is a short excerpt of the featured article. This should be a maximum of two lines/sentences only.</p>
								<p class="button"><a class="btn btn-info btn-sm" role="button" href="#">Read More</a></p>
>>>>>>> 9707027... added sidebar to small device layout
							</div>

<<<<<<< HEAD
							<div class="article-card">
								<div class="article-header">
									<a href="#" class="article-timestamp">now</a>
									<img src="img/test-main-03.jpg">
									<h2 class="title"><a href="#">Latest Article</a></h2>
								</div><!-- /.article-header -->
								<div class="article-body">
									<h5 class="author">By <a href="#">Author Name</a>, <a href="#">Another Name</a></h5>
									<p>
										This is just a preview of what is in the article. It may contain the excerpt from the actual article.
									</p>
									<p>
										It may also contain another paragraph, to give users a taste of what is in the article. I am just blabbering right now.
									</p>
								</div><!-- /.article-body -->
								<div class="article-footer">
									<div class="article-tags pull-left">
										<button type="button" class="btn btn-primary article-tag">CompSAt</button>
									</div>
									<a href="#" type="button" class="btn btn-link pull-right">Read More &raquo;</a>
								</div><!-- /.article-footer -->
								<div class="clearfix"></div>
							</div><!-- /.article-card -->
						</div>
						<!-- <ul id="featured">
							<li data-thumb="img/thumbs/test-main-01.jpg">
								<a href="article.php"><img src="img/test-main-01.jpg"></a>
								<div class="featured-content">
									<h2 class="title"><a href="article.php">Article Title #1</a></h2>
									<h5 class="author">by <a href="#">Author Name</a></h5>
									<p>This is a short excerpt of the featured article. This should be a maximum of two lines/sentences only.</p>
									<p class="button"><a class="btn btn-info btn-sm" role="button" href="article.php">Read More</a></p>
								</div>
							</li>
							<li data-thumb="img/thumbs/test-main-02.jpg">
								<img src="img/test-main-02.jpg">
								<div class="featured-content">
									<h2 class="title">Article Title #2</h2>
									<h5 class="author">by <a href="#">Author Name</a></h5>
									<p>This is a short excerpt of the featured article. This should be a maximum of two lines/sentences only.</p>
									<p class="button"><a class="btn btn-info btn-sm" role="button" href="#">Read More</a></p>
								</div>
							</li>
							<li data-thumb="img/thumbs/test-main-03.jpg">
								<img src="img/test-main-03.jpg">
								<div class="featured-content">
									<h2 class="title">Article Title #3</h2>
									<h5 class="author">by <a href="#">Author Name</a>, <a href="#">Another Name</a></h5>
									<p>This is a short excerpt of the featured article. This should be a maximum of two lines/sentences only.</p>
									<p class="button"><a class="btn btn-info btn-sm" role="button" href="#">Read More</a></p>
								</div>
							</li>
						</ul> -->
					</div><!-- /.cols -->
				</div><!-- /.row -->

				<div class="divider">
					<img src="img/wildcard-favicon.png" width="40">
				</div>

				<!-- start of Article Cards -->
				<div class="row articles">
					<div class="col-xs-12 col-sm-8">
						<div class="article-card">
							<div class="article-header">
								<a href="#" class="article-timestamp">26 June 2015, 4:41 PM</a>
								<img src="img/test-main-03.jpg">
								<h2 class="title"><a href="#">Article Title #3</a></h2>
							</div><!-- /.article-header -->
							<div class="article-body">
								<h5 class="author">By <a href="#">Author Name</a>, <a href="#">Another Name</a></h5>
								<p>
									This is just a preview of what is in the article. It may contain the excerpt from the actual article.
								</p>
								<p>
									It may also contain another paragraph, to give users a taste of what is in the article. I am just blabbering right now.
								</p>
							</div><!-- /.article-body -->
							<div class="article-footer">
									<div class="article-tags pull-left">
										<button type="button" class="btn btn-primary article-tag">CompSAt</button>
									</div>
									<a href="#" type="button" class="btn btn-link pull-right">Read More &raquo;</a>
								</div><!-- /.article-footer -->
							<div class="clearfix"></div>
						</div><!-- /.article-card -->

						<div class="article-card">
							<div class="article-header">
								<a href="#" class="article-timestamp">26 June 2015, 4:00 PM</a>
								<img src="img/test-main-02.jpg">
								<h2 class="title"><a href="#">Article Title #2</a></h2>
							</div><!-- /.article-header -->
							<div class="article-body">
								<h5 class="author">By <a href="#">Author Name</a></h5>
								<p>
									This is just a preview of what is in the article. It may contain the excerpt from the actual article.
								</p>
								<p>
									It may also contain another paragraph, to give users a taste of what is in the article. I am just blabbering right now.
								</p>
							</div><!-- /.article-body -->
							<div class="article-footer">
									<div class="article-tags pull-left">
										<button type="button" class="btn btn-danger article-tag">Video Games</button>
									</div>
									<a href="#" type="button" class="btn btn-link pull-right">Read More &raquo;</a>
								</div><!-- /.article-footer -->
							<div class="clearfix"></div>
						</div><!-- /.article-card -->

						<div class="article-card">
							<div class="article-header">
								<a href="article.php" class="article-timestamp">26 June 2015, 3:25 PM</a>
								<a href="article.php"><img src="img/test-main-01.jpg"></a>
								<h2 class="title"><a href="article.php">Article Title #1</a></h2>
							</div><!-- /.article-header -->
							<div class="article-body">
								<h5 class="author">By <a href="#">Author Name</a></h5>
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
									<a href="article.php" type="button" class="btn btn-link pull-right">Read More &raquo;</a>
								</div><!-- /.article-footer -->
							<div class="clearfix"></div>
						</div><!-- /.article-card -->
					</div><!-- /.cols -->
					<div class="hidden-xs col-sm-4">
						<div class="sidebar" id="popular-articles">
							<h4 class="header">Popular Articles</h4>
							<div class="article-preview">
								<img src="img/thumbs/test-main-02.jpg">
								<h3><a href="#"><strong>Article Title #2</strong></a></h3>
								<h5><em>22 hours ago</em></h5>
							</div><!-- /.article-preview -->
							<div class="article-divider"></div>
							<div class="article-preview">
								<img src="img/thumbs/test-main-03.jpg">
								<h3><a href="#"><strong>Article Title #3</strong></a></h3>
								<h5><em>About a day ago</em></h5>
							</div><!-- /.article-preview -->
							<div class="article-divider"></div>
							<div class="article-preview">
								<a href="article.php"><img src="img/thumbs/test-main-01.jpg"></a>
								<h3><a href="article.php"><strong>Article Title #1</strong></a></h3>
								<h5><em><a href="article.php">Two days ago</a></em></h5>
							</div><!-- /.article-preview -->
						</div><!-- /.sidebar -->
						<div class="sidebar" id="social-media">
							<h4 class="header">Connect with CompSAt</h4>
							<div class="links">
								<a href="#"><div id="facebook" class="placeholder img-circle"></div></a>
								<a href="#"><div id="twitter" class="placeholder img-circle"></div></a>
								<a href="#"><div id="instagram" class="placeholder img-circle"></div></a>
								<a href="#"><div id="askfm" class="placeholder img-circle"></div></a>
							</div>
						</div><!-- /.sidebar -->
					</div><!-- /.cols -->
				</div><!-- /.row .articles -->
			</div><!-- /.content -->
=======
			<!-- start of Article Cards -->
			<div class="row articles">
				<div class="col-xs-12 col-sm-8">
					<div class="article-card">
						<div class="article-header">
							<a href="#" class="article-timestamp">26 June 2015, 4:41 PM</a>
							<img src="img/test-main-03.jpg">
							<h2 class="title"><a href="#">Article Title #3</a></h2>
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
							<ul class="article-buttons">
								<li class="share">
									<a href="#"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
								</li>
								<li class="read-more">
									<a href="#"><span style="font-weight: bold; font-size: 1.65em;">Read More</span></a>
								</li>
							</ul>
						</div><!-- /.article-footer -->
						<div class="clearfix"></div>
					</div><!-- /.article-card -->

					<div class="article-card">
						<div class="article-header">
							<a href="#" class="article-timestamp">26 June 2015, 4:00 PM</a>
							<img src="img/test-main-02.jpg">
							<h2 class="title"><a href="#">Article Title #2</a></h2>
						</div><!-- /.article-header -->
						<div class="article-body">
							<h5 class="author">By Author Name</h5>
							<p>
								This is just a preview of what is in the article. It may contain the excerpt from the actual article.
							</p>
							<p>
								It may also contain another paragraph, to give users a taste of what is in the article. I am just blabbering right now.
							</p>
						</div><!-- /.article-body -->
						<div class="article-footer">
							<ul class="article-buttons">
								<li class="share">
									<a href="#"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
								</li>
								<li class="read-more">
									<a href="#"><span style="font-weight: bold; font-size: 1.65em;">Read More</span></a>
								</li>
							</ul>
						</div><!-- /.article-footer -->
						<div class="clearfix"></div>
					</div><!-- /.article-card -->

					<div class="article-card">
						<div class="article-header">
							<a href="#" class="article-timestamp">26 June 2015, 3:25 PM</a>
							<img src="img/test-main-01.jpg">
							<h2 class="title"><a href="#">Article Title #1</a></h2>
						</div><!-- /.article-header -->
						<div class="article-body">
							<h5 class="author">By Author Name</h5>
							<p>
								This is just a preview of what is in the article. It may contain the excerpt from the actual article.
							</p>
							<p>
								It may also contain another paragraph, to give users a taste of what is in the article. I am just blabbering right now.
							</p>
						</div><!-- /.article-body -->
						<div class="article-footer">
							<ul class="article-buttons">
								<li class="share">
									<a href="#"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
								</li>
								<li class="read-more">
									<a href="#"><span style="font-weight: bold; font-size: 1.65em;">Read More</span></a>
								</li>
							</ul>
						</div><!-- /.article-footer -->
						<div class="clearfix"></div>
					</div><!-- /.article-card -->
				</div><!-- /.cols -->
				<div class="hidden-xs col-sm-4">
					<div class="sidebar" id="popular-articles">
						<h4 class="header">Popular Articles</h4>
						<div class="article-preview">
							<img src="img/thumbs/test-main-02.jpg">
							<h3><a href="#"><strong>Article Title #2</strong></a></h3>
							<h5><em>22 hours ago</em></h5>
						</div><!-- /.article-preview -->
						<div class="article-divider"></div>
						<div class="article-preview">
							<img src="img/thumbs/test-main-03.jpg">
							<h3><a href="#"><strong>Article Title #3</strong></a></h3>
							<h5><em>About a day ago</em></h5>
						</div><!-- /.article-preview -->
						<div class="article-divider"></div>
						<div class="article-preview">
							<img src="img/thumbs/test-main-01.jpg">
							<h3><a href="#"><strong>Article Title #1</strong></a></h3>
							<h5><em>Two days ago</em></h5>
						</div><!-- /.article-preview -->
					</div><!-- /.sidebar -->
					<div class="sidebar" id="social-media">
						<h4 class="header">Connect with CompSAt</h4>
						<div class="links">
							<a href="#"><div id="facebook" class="placeholder img-circle"></div></a>
							<a href="#"><div id="twitter" class="placeholder img-circle"></div></a>
							<a href="#"><div id="instagram" class="placeholder img-circle"></div></a>
							<a href="#"><div id="askfm" class="placeholder img-circle"></div></a>
						</div>
					</div><!-- /.sidebar -->
				</div><!-- /.cols -->
			</div><!-- /.row .articles -->
		</div><!-- /.content -->
>>>>>>> 9707027... added sidebar to small device layout

		</div><!-- /.container -->
		<footer class="footer">
			<a href="http://compsat.org"><img src="img/CompSAt_Gear.png" width="25" height="25"></a>
			<p>&copy; 2015</p>
		</footer>
		<!-- jQuery -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/lightslider.min.js"></script>
	  <script src="js/config.js"></script>
	</body>
</html>
