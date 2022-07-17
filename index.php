<!DOCTYPE html>
<html>
	<head>
		<title>Nmapper</title>
		<style>
			.console {
				border: 5px red;
			}
			.foreground {
				color: #FFFFFF;
			}
			.header {
				display: block;
				text-align: center;
			}
			.input {
				margin: 10px 0px 10px 0;
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
			<div class="console">
			<?php
				# calls nmap with loopback (localhost) address
				$nmap_response = shell_exec("./scripts/nmap_runner.sh 127.0.0.1");
				# print out the result of the nmap scan
				echo "<p>Nmap scan: $nmap_response</p>";
			?>
			</div>
		</div>
	</body>
</html>

