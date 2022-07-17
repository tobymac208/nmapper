<!DOCTYPE html>
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
	</head>
	<body>
		<script>
			var SubmitNmapRequest = function () {
				ip = document.getElementById('id').innerHTML;
			};
		</script>
		<div class="foreground">
			<div class="header">
				<h1>Nmapper</h1>
				<p>An Nmap tool created with PHP and bash :)</p>
			</div>
			
			<div class="input">
				<input id="ip" type="text" />
				<button onclick="SubmitNmapRequest()" type="submit">Submit</button>
			</div>
		</div>
	</body>
</html>

