<?php

require_once("dados.php");

?>


<html>
<head>
</head>
<body>
	<table border='2'>
		<tr>
			<td width="10%" border='1'>Avos</td>
			<td width="10%" border='1'>Pais</td>
			<td width="10%" border='1'>Filhos</td>
		</tr>
		<form action="app002.php" method='POST'>
		<?php foreach($avos as $avo) { ?>
		<tr>
			<td  border='1'><input type='radio' name='idSelecionado' value='<?= $avo['id'] ?>'> <?= $avo['nome'] ?></td>
			<td  border='1'></td>
			<td  border='1'></td>
		</tr>
		<?php } ?>
		
	</table>
	<input type="submit" value="Proximo">
	</form>

</body>
</html>