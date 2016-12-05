<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<head>
		<title>MUVE</title>
	</head>
	<style>
		body {
			font-family: "Raleway", sans-serif
			padding-top: 5rem;
		}
		.top-words {
			padding: 3rem 1.5rem;
			text-align: center;
		}
	</style>
	<body>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="banner"></div>
		<div>
			<nav class="navbar navbar-fixed-top navbar-custom">
				<a class="navbar-brand" href="frontPage.html">MUVE</a>
				<ul class="nav navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="poll1.html">Elections<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="candidates.html">Candidates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Archives</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="electionCreate.html">Create Election</a>
                    </li>
				</ul>
                <ul class="nav navbar-nav navbar-right" style="padding-right: 5rem">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
			</nav>
		</div>
		<div class="container">
			<div class="top-words">
				<h1>Morgantown University Voting Environment</h1>
				<p class="lead">Put something relevant here.<br> More relevant than what is currently here.</p>
			</div>
			<hr>
			<div class="row" id="polls">
				<div class="col-md-4">
					<h2>Election 1</h2>
					<p>This is a poll that you can take if you are Electrical Engineering.  You will be voting on whether or not the department should cut spending on soldering equipment and start spending money on bread boards.</p>
					<p><a class="btn btn-primary btn-lg" href="poll1.html" role="button">Vote &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2>Election 2</h2>
					<p>1) Personal space 2) Personal space 3) Stay out of my personal space 4) Keep away from my personal space 5) Get outta dat personal space 6) Stay away from my personal space 7) Keep away from dat personal space 8) Personal space 9) Personal space</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Go into the personal space &raquo;</a></p>	
				</div>
				<div class="col-md-4">
					<h2>Election 3</h2>
					<p>I dont know anymore, but you get the point.  This is where the description of the polls would go and describe what is being voted on, button color can change based on whether they can vote on it or not.</p>
					<p><a class="btn btn-primary btn-lg disabled" href="#" role="button">Cannot Vote &raquo;</a></p>	
				</div>
			</div><!--polls-->
			<hr>
		</div><!-- /.container -->
	</body>
</html>