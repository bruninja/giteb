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
                <h3 class="text-center">DADOS PESSOAIS</h3>
                <br />
				<table class="table">
				<tbody>
					<tr>
                        <td><b>Nome Completo:</b></td><td><?php echo "$nome" ?></td>
                    </tr>
                    <tr>
                        <td><b>Data de Nascimento:</b></td> <td><?php echo "$datanascimento" ?></td>
                    </tr>
                    <tr>
                        <td><b>Filiação:</b></td>	<td><?php echo "$filiacao"?></td>
                    </tr>
                    <tr>
                        <td><b>RG:</b></td> <td><?php echo "$identidade" ?></td>
                    </tr>
                    <tr>
                        <td><b>Orgão Expedidor:</b></td> <td><?php echo "$orgao" ?></td>
                    </tr>
                    <tr>
                        <td><b>Naturalidade:</b></td> <td><?php echo "$naturalidade" ?></td>
                    </tr>
                    <tr>
                        <td><b>Nacionalidade:</b></td> <td><?php echo "$nacionalidade" ?></td>
                    </tr>
                    <tr>
                        <td><b>Escolaridade:</b></td> <td><?php echo "$escolaridade" ?></td>
                    </tr>
                    <tr>
                        <td><b>Telefone ou Celular:</b></td> <td><?php echo "$fone" ?></td>
                    </tr>
                    <tr>
                        <td><b>E-mail:</b></td> <td><?php echo "$email" ?></td>
                    </tr>
                    <tr>
                        <td><b>Endereço:</b></td> <td><?php echo "$endereco" ?></td>
                    </tr>
                    <tr>
                        <td><b>Bairro:</b></td> <td><?php echo "$bairro" ?></td>
                    </tr><tr>
                        <td><b>Cidade/Estado:</b></td> <td><?php echo "$cidade" ?></td>
                    </tr>
                </tbody>
                </table>

                <h3 class="text-center">Vida Familiar</h3>

                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Estado Civil:</b></td> <td><?php echo "$estadocivil" ?></td>
                    </tr>
                    <tr>
                        <td><b>Possui filhos?:</b></td> <td><?php echo "$filhos" ?></td>
                    </tr>
                    <tr>
                        <td><b>Mora com:</b></td> <td><?php echo "$mora_com" ?></td>
                    </tr>
                    </tbody>
                </table>

                    <h3 class="text-center">Vida Profissional</h3>

                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Qual sua ocupação?</b></td> <td><?php echo "$ocupacao" ?></td>
                    </tr>
                    <tr>
                        <td><b>Empresa/ Repartição:</b></td> <td><?php echo "$empresa" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você gosta do que faz?</b></td> <td><?php echo "$gostadoquefaz" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você se sente estável no seu trabalho?</b></td> <td><?php echo "$estabilidade" ?></td>
                    </tr>
                    <tr>
                        <td><b>Outras Atividades</b></td> <td><?php echo "$atividades" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você tem antecedentes criminais?</b></td> <td><?php echo "$antecedentes" ?></td>
                    </tr>
                    <tr>
                        <td><b>Relate o fato:</b></td> <td><?php echo "$relate" ?></td>
                    </tr>
                    </tbody>
                </table>

                <br />
                <h3 class="text-center">SAÚDE E COMPORTAMENTO</h3>
                <br />


                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Você já teve alguma doença grave?</b></td> <td><?php echo "$doencagrave" ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual / Quando?</b></td> <td><?php echo "$qualdoenca" ?></td>
                    </tr>
                    <tr>
                        <td><b>Já fez alguma cirurgia?</b></td> <td><?php echo "$cirurgia" ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual / Quando?</b></td> <td><?php echo "$qualcirurgia" ?></td>
                    </tr>
                    <tr>
                        <td><b>Atualmente, tem algum problema de saúde?</b></td> <td><?php echo "$problemasaude" ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo "$qualproblemasaude" ?></td>
                    </tr>
                    <tr>
                        <td><b>Está fazendo algum tipo de tratamento?</b></td> <td><?php echo "$tratamento" ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo "$qualtratamento" ?></td>
                    </tr>
                    <tr>
                        <td><b>Toma algum tipo de remédio?</b></td> <td><?php echo "$remedio" ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo "$qualremedio" ?></td>
                    </tr>
                    <tr>
                        <td><b>Faz uso de bebida alcoólica?</b></td> <td><?php echo "$bebidaalcoolica" ?></td>
                    </tr>
                    <tr>
                        <td><b>Com que freqüência?</b></td> <td><?php echo "$frequenciabebida" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você consome ou já consumiu algum tipo de droga ilícita?</b></td> <td><?php echo "$drogailicita"?></td>
                    </tr>
                    <tr>
                        <td><b>Qual? Com que freqüência?</b></td> <td><?php echo "$qualdroga" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você acha que seu uso de bebida ou droga trouxe prejuízos à sua vida?</b></td> <td><?php echo "$drogapreju" ?></td>
                    </tr>
                    <tr>
                        <td><b>Quais?</b></td> <td><?php echo "$qualpreju" ?></td>
                    </tr>
                    <tr>
                        <td><b>Já sentiu dificuldade em controlar este uso de bebida ou droga?</b></td> <td><?php echo "$controleuso" ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo "$comentecontroleuso" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você já teve a sensação de estar sendo perseguido ou já se sentiu ameaçado por alguém?</b></td> <td><?php echo "$maniaperseguido" ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo "$comentemania" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você já teve a sensação de não conseguir ordenar seus pensamentos por horas ou dias?</b></td> <td><?php echo "$dificuldadeordenar" ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo "$comentedificuldade" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você já viveu alguma situação em que seus pensamentos estavam muito acelerados, que você não conseguia acompanhá-los?</b></td> <td><?php echo "$pensamentoacelerado" ?></td>
                    </tr>
                    <tr>
                        <td><b>Comente:</b></td> <td><?php echo "$comentepensamento" ?></td>
                    </tr>
                    <tr>
                        <td><b>Já foi internado em alguma instituição psiquiátrica?</b></td> <td><?php echo "$internado" ?></td>
                    </tr>
                    <tr>
                        <td><b>Onde? Qual motivo?</b></td> <td><?php echo "$internacaomotivo" ?></td>
                    </tr>
                </table>



                <br />
                <h3 class="text-center">ESPIRITUALIDADE</h3>
                <br />


                <table class="table">
                    <tbody>
                    <tr>
                        <td><b>Você consagrou o Daime alguma vez?</b></td> <td><?php echo "$consagrou" ?></td>
                    </tr>
                    <tr>
                        <td><b>Onde? Com quem?</b></td> <td><?php echo "$ondecomquem" ?></td>
                    </tr>
                    <tr>
                        <td><b>Relate a Experiência</b></td> <td><?php echo "$relateexperiencia" ?></td>
                    </tr>
                     <tr>
                        <td><b>Você atualmente é adepto de alguma religião?</b></td> <td><?php echo "$religiao" ?></td>
                    </tr>
                    <tr>
                        <td><b>Qual?</b></td> <td><?php echo "$qualreligiao" ?></td>
                    </tr>
                    <tr>
                        <td><b>O que busca em sua prática religiosa?</b></td> <td><?php echo "$praticareligiosa" ?></td>
                    </tr>
                    <tr>
                        <td><b>Segundo seus próprios critérios, já teve alguma experiência espiritual marcante?</b></td> <td><?php echo "$experienciaespiritual" ?></td>
                    </tr>
                    <tr>
                        <td><b>Como foi?</b></td> <td><?php echo "$comofoi" ?></td>
                    </tr>
                    <tr>
                        <td><b>Você acredita que o desenvolvimento espiritual possa lhe ajudar?</b></td> <td><?php echo "$espiritualajuda" ?>></td>
                    </tr>
                    <tr>
                        <td><b>Em que?</b></td> <td><?php echo "$emque" ?></td>
                    </tr>
                    <tr>
                        <td><b>Como soube do Santo Daime?</b></td> <td><?php echo "$comosoube" ?></td>
                    </tr>
                    <tr>
                        <td><b>Acredita que o Santo Daime possa ser útil a você?</b></td> <td><?php echo "$daimeutil" ?></td>
                    </tr>
                    <tr>
                        <td><b>Por quê?</b></td> <td><?php echo "$porque" ?></td>
                    </tr>                   
                    
                    </tbody>
                </table>
            </div>


		</div>
	</div>
</body>
