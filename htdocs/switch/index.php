<?php

session_start();

if (isset($_GET['to'])) {
	switch($_GET['to']) {
		case "backend":
			$_SESSION["run"] = "backend";
			header("location: /");
			die();
			break;
		case "frontend":
			session_destroy();
			// if (isset($_SESSION["run"])) {
			//	unset($_SESSION["run"]);
			// }
			header("location: /");
			die();
			break;
	}
}

?><html>

<body>
<h1>Switch to ..</h1>

[ <a href="?to=backend">Backend</a> ||
<a href="?to=frontend">Frontend</a> ]

</body>

</html>
