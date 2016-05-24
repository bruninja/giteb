<?php
	require 'database.php';
	$id = null;
	if (!empty($_GET['id'])){
		$id = $_REQUEST['id'];
	}

	if (null==$id){
		header("Location: index.php");
	}else{
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM cadastro WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class-"container">
		<div class="container">
			<div class="row page-header text-center">
                <!--<img src="img/logo.png"><br></br>-->
				<h3>Ficha de <?php echo $data["nome"]; ?></h3>
			</div>


			<div id="ficha" class="">
 <br />
                <h3 class="text-center">Dados Pessoais</h3>
                <br />
				<table class="table">
				<tbody>
					<tr>
                        <td><b>Nome Completo:</b></td><td><?php echo $data["nome"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Data de Nascimento:</b></td> <td><?php echo $data["datanascimento"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Filiação:</b></td>	<td><?php echo $data["filiacao"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>RG:</b></td> <td><?php echo $data["identidade"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Orgão Expedidor:</b></td> <td><?php echo $data["orgao"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Escolaridade:</b></td> <td><?php echo $data["escolaridade"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Telefone ou Celular:</b></td> <td><?php echo $data["fone"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>E-mail:</b></td> <td><?php echo $data["email"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Naturalidade:</b></td> <td><?php echo $data["naturalidade"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nacionalidade:</b></td> <td><?php echo $data["$nacionalidade"]; ?></td>
                    </tr>
                </tbody>
                </table>

                <h3 class="text-center">Vida Familiar</h3>

                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Estado Civil:</b></td> <td><?php echo $data["estadocivil"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Possui filhos?:</b></td> <td><?php echo $data["filhos"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Mora com:</b></td> <td> <?php echo $data["mora_com"]; ?></td>
                    </tr>
                    </tbody>
                </table>

                    <h3 class="text-center">Vida Profissional</h3>

                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Qual sua ocupação?</b></td> <td><?php echo $data["ocupacao"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Empresa/ Repartição:</b></td> <td><?php echo $data["empresa"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você gosta do que faz?</b></td> <td><?php echo $data["gostadoquefaz"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você se sente estável no seu trabalho?</b></td> <td><?php echo $data["estabilidade"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Outras Atividades</b></td> <td><?php echo $data["atividades"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você tem antecedentes criminais?</b></td> <td><?php echo $data["antecedentes"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Relate o fato:</b></td> <td><?php echo $data["relate"]; ?></td>
                    </tr>
                    </tbody>
                </table>

                <br />
                <h3 class="text-center">SAÚDE E COMPORTAMENTO</h3>
                <br />


                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Você já teve alguma doença grave?</b></td> <td><?php echo $data["doencagrave"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual / Quando?</b></td> <td><?php echo $data["qualdoenca"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Já fez alguma cirurgia?</b></td> <td><?php echo $data["cirurgia"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual / Quando?</b></td> <td><?php echo $data["qualcirurgia"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Atualmente, tem algum problema de saúde?</b></td> <td><?php echo $data["problemasaude"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo $data["qualproblemasaude"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Está fazendo algum tipo de tratamento?</b></td> <td><?php echo $data["tratamento"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo $data["qualtratamento"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Toma algum tipo de remédio?</b></td> <td><?php echo $data["remedio"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo $data["qualremedio"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Faz uso de bebida alcoólica?</b></td> <td><?php echo $data["bebidaalcoolica"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Com que freqüência?</b></td> <td><?php echo $data["frequenciabebida"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você consome ou já consumiu algum tipo de droga ilícita?</b></td> <td><?php echo $data["drogailicita"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual? Com que freqüência?</b></td> <td><?php echo $data["qualdroga"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você acha que seu uso de bebida ou droga trouxe prejuízos à sua vida?</b></td> <td><?php echo $data["drogapreju"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Quais?</b></td> <td><?php echo $data["qualpreju"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Já sentiu dificuldade em controlar este uso de bebida ou droga?</b></td> <td><?php echo $data["controleuso"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo $data["comentecontroleuso"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você já teve a sensação de estar sendo perseguido ou já se sentiu ameaçado por alguém?</b></td> <td><?php echo $data["maniaperseguido"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo $data["comentemania"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você já teve a sensação de não conseguir ordenar seus pensamentos por horas ou dias?</b></td> <td><?php echo $data["dificuldadeordenar"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo $data["comentedificuldade"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você já viveu alguma situação em que seus pensamentos estavam muito acelerados, que você não conseguia acompanhá-los?</b></td> <td><?php echo $data["pensamentoacelerado"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo $data["comentepensamento"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Já foi internado em alguma instituição psiquiátrica?</b></td> <td><?php echo $data["internado"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Onde? Qual motivo?</b></td> <td><?php echo $data["internacaomotivo"]; ?></td>
                    </tr>
                </table>



                <br />
                <h3 class="text-center">ESPIRITUALIDADE</h3>
                <br />


                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Você consagrou o Daime alguma vez?</b></td> <td><?php echo $data["$consagrou"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Onde? Com quem?</b></td> <td><?php echo $data["$ondecomquem"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Relate a Experiência</b></td> <td><?php echo $data["$relateexperiencia"]; ?></td>
                    </tr>
                     <tr>
                        <td><b>Você atualmente é adepto de alguma religião?</b></td> <td><?php echo $data["religiao"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo $data["qualreligiao"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>O que busca em sua prática religiosa?</b></td> <td><?php echo $data["praticareligiosa"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Segundo seus próprios critérios, já teve alguma experiência espiritual marcante?</b></td> <td><?php echo $data["experienciaespiritual"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Como foi?</b></td> <td><?php echo $data["comofoi"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Você acredita que o desenvolvimento espiritual possa lhe ajudar?</b></td> <td><?php echo $data["espiritualajuda"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Em que?</b></td> <td><?php echo $data["emque"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Como soube do Santo Daime?</b></td> <td><?php echo $data["comosoube"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Acredita que o Santo Daime possa ser útil a você?</b></td> <td><?php echo $data["daimeutil"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Por quê?</b></td> <td><?php echo $data["porque"]; ?></td>
                    </tr>                   
                    
                    </tbody>
                </table>
            </div>

            <div class="form-actions">
            	<a class="btn" href="index.php">Voltar</a>
            </div>


		</div>
	</div>
</body>
