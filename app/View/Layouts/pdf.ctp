

	<!DOCTYPE html>
		<html lang = "en">
			<head>
				<meta charset="utf-8">
				<style>
					h2{ color: red; }
				</style>
			</head>
		</html>
		
	<?php
		header("Content-type: application/pdf");
		echo $content_for_layout;
	?>

