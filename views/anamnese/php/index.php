<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="all">
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<title>CICEBRIS - Fichas de Anamense</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<h3>Fichas de Anamnese</h3>
		</div>
		<div class="row">
			<p>
				<a href="http://cicebris.esy.es/views/anamnese/index.html" class="btn btn-success"> Criar Nova </a>
			</p>
		</div>
		<div class="row">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>

					</tr>
				</thead>
				<tbody>
					<?php
					include 'database.php';
					$pdo = Database::connect();
					$sql = 'SELECT * FROM cadastro ORDER BY id DESC';
					foreach ($pdo->query($sql) as $row){
						echo '<tr>';
						echo '<td>'.$row['nome'].'</td>';
						echo '<td>'.$row['email'].'</td>';
						echo '<td>'.$row['fone'].'</td>';
						echo '<td>';
						echo '<a class="btn btn-default" href="read.php?id='.$row['id'].'">Ler</a></td>';
						echo '</td>';
						echo '<td>';
						echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Deletar</a>';
						echo '</td>';
						echo '</tr>';
					}
					Database::disconnect();
					?>
				</tbody>
			</table>
		</div> <!-- /container -->
</body>
</html>
