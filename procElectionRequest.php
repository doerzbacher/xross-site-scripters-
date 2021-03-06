<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <head>
        <title>MUVE</title>
        <script>
            function setIdValue() {
                var username = localStorage.getItem("username");
                var box = document.getElementById('userID');
                box.value = username;
            }
        </script>
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
    <body onload="setIdValue();">
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
                        <a class="nav-link" href="#">Archives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="electionCreate.html">Create Election</a>
                    </li>
                </ul>
            </nav>
        </div>
		<div class="container">
            <div class="top-words">
                <h1>Morgantown University Voting Environment</h1><br>
	<?php
		
		$electionTitle = str_replace(" ", "-", $_POST["selectedElection"]);
		$electionContent = unserialize(file_get_contents("election-data/{$electionTitle}.ballot"));
		echo serialize($_POST),"<br>";
		
		$fileContent = unserialize(file_get_contents("election-data/results/{$electionTitle}.ballotCollection"));
		if(!is_array($fileContent))
		{
			$arr = array();
			$fileContent = array("completedBallots"=>$arr);
		}	
		$firstVote = 1;
		foreach($fileContent["completedBallots"] as $completedBallotSer)
		{
			$completedBallot = unserialize($completedBallotSer);
			if(strcmp($completedBallot["userID"], $_POST["userID"])==0)
			{
				$firstVote =0;
			}
		}
		
		if($firstVote)
		{
			if(is_array($electionContent))
			{
				if(!is_null($electionContent["title"]))
				{
					echo "<p class='lead'>{$electionContent["title"]}</p><br>";
					echo "<p>{$electionContent["electDescription"]}</p> </div>";
					echo "<hr> <div class='row' id='polls'>";
					echo "<form action='procBallot.php' method='post'><div class='row'><div class='col-md-4 col-md-offset-4'><label for='userID'>User ID</label><input type='text' class='form-control' id='userID' name='userID' readonly></div></div><br>";
					for($raceIt=0; $raceIt<count($electionContent["entries"]); $raceIt++)
					{
						echo "<div class='col-md-3'><div class='panel panel-primary'> <div class='panel-heading'>";
						echo "<h3 class='panel-title'>{$electionContent["entries"][$raceIt][0]}</h3> </div>";
						echo "<div class='panel-body'>";
						echo "<ul class='list-group'>";
						for($entryIt=1; $entryIt<count($electionContent["entries"][$raceIt]); $entryIt++)
						{
							echo "<li class='list-group-item'><div class='radio'><label>";
							$entryVal = $entryIt - 1;
							echo "<input type='radio' name='candidates[{$raceIt}][]' value='{$entryVal}'>";
							if(strcmp($electionContent["entries"][$raceIt][$entryIt], "")==0)
							{
								echo "<input type='text' class='form-control' placeholder='Write in...'>";
							}else{
							echo "{$electionContent["entries"][$raceIt][$entryIt]}";
							}
							echo "</label></div></li>";
						}
						echo "</ul></div></div></div>";
					}
					echo "<button type='submit' class='btn btn-default' name='selectedElection' value='{$electionContent["title"]}'>Submit</button>";
					echo "</form></div><hr></div>";
				}
			}
		}else{
			echo "<hr>You have already placed your ballot in this election, you may not vote twice<br></hr>";
			echo "<hr><a class='btn btn-primary btn-lg' href='frontPage.html' role='button'>Return to the home page</a></hr>";
		}
    ?>
	</body>
</html>
