<DOCTYPE html>
<html>
	<head>
		<title>Nmapper</title>
		<style>
			.foreground {
				color: #FFFFFF;
			}
			
			.header {
				display: block;
				text-align: center;
			}

			body {
				background-color: #000000;
			}
		</style>
	</head>
	<body>
		<div class="foreground">
			<?php
				echo "Executing nmap script: ";
				$result = shell_exec("./scripts/nmap_runner.sh");
				echo "$result"	
			?>
			<div class="header">
				<h1>Nmapper</h1>
				<p>An Nmap tool created with PHP and bash :)</p>
			</div>
		</div>

	</body>
</html>
