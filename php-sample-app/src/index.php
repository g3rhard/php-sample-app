<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main">
	<div class="main">
		<div class="greetings">
			<h1>Hello from Kubernetes!</h1>
		</div>
		<h2>
		<?php
			$output = shell_exec('uname -n');
			echo "$output";
		?>
		</h2>
		<p><a href="https://github.com/g3rhard/php-sample-app">g3rhard/php-sample-app</a></p>
		<p><a href="https://g3rhard.github.io">g3rhard.github.io</a></p>
	</div>
</div>

</body>
