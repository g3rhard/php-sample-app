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
			exec("cat /proc/self/cgroup | head -n 1 | cut -d '/' -f3");
		?>
		</h2>
		<p>Testing page. <a href="#">Return to homepage</a></p>
	</div>
</div>

</body>
