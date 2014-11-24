<?php

require_once '../../php/include/global.inc.php';

?>

<!DOCTYPE html>

<html>

	<head>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">

		<link rel="stylesheet" href="../../css/groupview/studygroup_style.css"/>
		<script src="../../js/lib/jquery211.js"></script>
		<script src="../../js/lib/handlebars-v2.0.0.js"></script>

		<script src="../../js/groupviewer.js"></script>
	</head>


	<body>
		<!--I am wondering why this part is commented out-->
		<!--h1 class="header">Hello world hooray</h1-->
        
        <!--div class="header">
        	<img src="http://s27.postimg.org/eatxsc3ab/logo.png" alt="Grove" align="middle"style="width:65px;height:65px">
            <div class="button">
                <div>Home</div>
            </div>
            <div class="button">
                Profile
            </div>
            <div class="button">
                Search
            </div>
        </div-->
        
		<div id="groupMembers">
			<div class="groupmemberContainer">
			
			</div>
		</div>

		<div id="groupInfo">
			<div class="groupinfoContainer">

			</div>
		</div>

		<div id="groupNewsfeed">
			<div class="groupnewsfeedContainer">

			</div>
		</div>

	</body>



</html>