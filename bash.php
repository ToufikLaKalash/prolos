<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<script type="text/javascript">
			let p = document.getElementById("bouton");
			p.onClick = createFile();
			function createFile(){
				<?php
					exec('echo HACKERMAN>C:/Users/thani/Desktop/salut.txt');
				?>
			}
		</script>
	</head>
	<body>
		<form>
			<button type="sumbit" id="bouton">Créer le fichier</button>
		</form>
	</body>
</html>

