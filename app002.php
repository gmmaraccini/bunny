<?php
require_once('dados02.php');
$avo_id = $_REQUEST['idSelecionado'];

$pais_avo = array();
foreach($pais as $id => $key) {
    if(stripos($key['avo_id'], $avo_id) !== false) {
        $pais_avo[] = $pais["$id"]; 
    }
}


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
		<form action="app003.php" method='POST'>
		<?php foreach($avos as $chave => $avo) { ?>
		<tr>
			<?php 
				$checked = "";
				if($chave == $avo_id) {
					$checked = "checked"; 
				 } ?>
			<td  border='1'><input type='radio' <?= $checked ?> name='idSelecionado' disabled value='<?= $avo['id'] ?>'> <?= $avo['nome'] ?></td>
			<td  border='1'>
				<?php if($chave == $avo_id) { 
						foreach($pais_avo as $id => $retorno) {
							echo "<input name='idSelecionadoFilhos[]' type='checkbox' value='{$retorno['id']}'>{$retorno['nome']}<br>";
						}
				 	} ?>
				</td>
			<td  border='1'></td>
		</tr>
		<?php } ?>
		
	</table>
	<input type="hidden" name="idSelecionado" value="<?=$avo_id?>">
	<input type="submit" value="Proximo">
	<a href="app.php"><input type="button" value="Retorno"></a>
	</form>

</body>
</html>

