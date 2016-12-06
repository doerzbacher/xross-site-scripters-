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
						<a class="nav-link" href="elections.php">Elections<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="candidates.html">Candidates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="archives.php">Archives</a>
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
				<p class="lead">Get involved.  Make a difference.<br>Make your voice heard and vote for what you care about.</p>
			</div>
			<hr>
			<div class="row" id="polls">
				<div class="col-md-4">
					<h2>Finished Elections</h2>
					<p></p>
					
					
					/** REPLACE THESE BUTTONS BELOW WITH PHP**/
					 
					 
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Election 1 &raquo;</a></p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Election 2 &raquo;</a></p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Election C &raquo;</a></p>
					
					
				</div>
			</div><!--polls-->
			<hr>
		</div><!-- /.container -->
	</body>
</html>