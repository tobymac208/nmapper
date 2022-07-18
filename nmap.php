<!DOCTYPE html>
<html>
	<head>
		<title>Nmapper</title>
		<style>
			.console {
				border: 5px solid red;
			}

			.content {
				margin: 5px;
			}
			
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
			<div class="header">
				<h1>Nmapper</h1>
				<p>An Nmap tool created with PHP and bash :)</p>
			</div>

			<h2>Server contents</h2>
			<div class="console">
				<h3>Nmap result</h3>
				<div class="content">
					<?php
						$response = shell_exec("./scripts/nmap_runner.sh");
						echo "$response"
					?>
				</div>
				<h3>User executing this code</h3>
				<div class="content">
					<?php
						$response = shell_exec("whoami");
						echo "$response"
					?>
				</div>
			</div>
		</div>
	</body>
</html>

