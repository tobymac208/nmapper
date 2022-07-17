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
			
			.input {
				margin: 10px 0px 10px 0;
			}

			body {
				background-color: #000000;
			}
		</style>
		<script type="text/javascript">
			var submitNmapRequest = function(ipAddress) {
				<?php
					# attempt to nmap the desired ip address	
					$result = shell_exec("./scripts/nmap_runner.sh " + ipAddress);
					echo "Server response: $result";
				?>	
			}
		</script>
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
			
			<div class="input">
				<input type="text" />
				<button type="submit">Submit</button>
			</div>
		</div>

	</body>
</html>
