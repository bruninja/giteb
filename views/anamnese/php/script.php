<?php
// Get post data
$data = json_decode(file_get_contents("php://input"));
// RECEBIMENTO DOS DADOS
	$nome = $_POST["nome"];
	$datanascimento = $_POST["datanascimento"];
	$filiacao = $_POST["filiacao"];
	$identidade = $_POST["identidade"];
	$orgao = $_POST["orgao"];
	$naturalidade = $_POST["naturalidade"];
	$nacionalidade = $_POST["nacionalidade"];
	$escolaridade = $_POST["escolaridade"];
	$fone = $_POST["fone"];
	$email = $_POST["email"];
	$endereco = $_POST["endereco"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$estadocivil = $_POST["estadocivil"];
	$filhos = $_POST["filhos"];
	$mora_com = $_POST["mora_com"];
	$ocupacao = $_POST["ocupacao"];
	$empresa = $_POST["empresa"];
	$gostadoquefaz = $_POST["gostadoquefaz"];
	$estabilidade = $_POST["estabilidade"];
	$atividades = $_POST["atividades"];
	$antecedentes = $_POST["antecedentes"];
	$relate = $_POST["relate"];

	//Saúde e Comportamento
	$doencagrave = $_POST["doencagrave"];
	$qualdoenca = $_POST["qualdoenca"];
	$cirurgia = $_POST["cirurgia"];
	$qualcirurgia = $_POST["qualcirurgia"];
	$problemasaude = $_POST["problemasaude"];
	$qualproblemasaude = $_POST["qualproblemasaude"];
	$tratamento = $_POST["tratamento"];
	$qualtratamento = $_POST["qualtratamento"];
	$remedio = $_POST["remedio"];
	$qualremedio = $_POST["qualremedio"];
	$bebidaalcoolica = $_POST["bebidaalcoolica"];
	$frequenciabebida = $_POST["frequenciabebida"];
	$drogailicita = $_POST["drogailicita"];
	$qualdroga = $_POST["qualdroga"];
	$drogapreju = $_POST["drogapreju"];
	$qualpreju = $_POST["qualpreju"];
	$controleuso = $_POST["controleuso"];
	$comentecontroleuso = $_POST["comentecontroleuso"];
	$maniaperseguido = $_POST["maniaperseguido"];
	$comentemania = $_POST["comentemania"];
	$dificuldadeordenar = $_POST["dificuldadeordenar"];
	$comentedificuldade = $_POST["comentedificuldade"];
	$pensamentoacelerado = $_POST["pensamentoacelerado"];
	$comentepensamento = $_POST["comentepensamento"];
	$internado = $_POST["internado"];
	$internacaomotivo = $_POST["internacaomotivo"];

	//ESPIRITUALIDADE
	$consagrou = $_POST["consagrou"];
	$ondecomquem = $_POST["ondecomquem"];
	$relateexperiencia = $_POST["relateexperiencia"];
	$religiao = $_POST["religiao"];
	$qualreligiao = $_POST["qualreligiao"];
	$praticareligiosa = $_POST["praticareligiosa"];
	$experienciaespiritual = $_POST["experienciaespiritual"];
	$comofoi = $_POST["comofoi"];
	$espiritualajuda = $_POST["espiritualajuda"];
	$emque = $_POST["emque"];
	$comosoube = $_POST["comosoube"];
	$daimeutil = $_POST["daimeutil"];
	$porque = $_POST["porque"];

//Conexão com o Banco de Dados
	$hostname = 'mysql.hostinger.com.br';
	$username = 'u571029576_root';
	$password = 'GeSeRa';
	$database = 'u571029576_anamn';

	$pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
   if(!$pdo){
       die('Erro ao criar a conexão');
   }

//Inserindo Registros

	$executa = $pdo->query("INSERT INTO cadastro (
		nome,
		datanascimento,
		filiacao,
		identidade,
		orgao,
		naturalidade,
		nacionalidade,
		escolaridade,
		fone,
		email,
		endereco,
		bairro,
		cidade,
		estadocivil,
		filhos,
		mora_com,
		ocupacao,
		empresa,
		gostadoquefaz,
		estabilidade,
		atividades,
		antecedentes,
		relate,
		doencagrave,
		qualdoenca,
		cirurgia,
		qualcirurgia,
		problemasaude,
		qualproblemasaude,
		tratamento,
		qualtratamento,
		remedio,
		qualremedio,
		bebidaalcoolica,
		frequenciabebida,
		drogailicita,
		qualdroga,
		drogapreju,
		qualpreju,
		controleuso,
		comentecontroleuso,
		maniaperseguido,
		comentemania,
		dificuldadeordenar,
		comentedificuldade,
		pensamentoacelerado,
		comentepensamento,
		internado,
		internacaomotivo,
		consagrou,
		ondecomquem,
		relateexperiencia,
		religiao,
		qualreligiao,
		praticareligiosa,
		experienciaespiritual,
		comofoi,
		espiritualajuda,
		emque,
		comosoube,
		daimeutil,
		porque)

	 VALUES (
	 	'$nome',
	 	'$datanascimento',
	 	'$filiacao',
	 	'$identidade',
	 	'$orgao',
	 	'$naturalidade',
		'$nacionalidade',
	 	'$escolaridade',
	 	'$fone',
	 	'$email',
	 	'$endereco',
		'$bairro',
		'$cidade',
	 	'$estadocivil',
	 	'$filhos',
	 	'$mora_com',
	 	'$ocupacao',
	 	'$empresa',
	 	'$gostadoquefaz',
	 	'$estabilidade',
	 	'$atividades',
	 	'$antecedentes',
	 	'$relate',
	 	'$doencagrave',
	 	'$qualdoenca',
	 	'$cirurgia',
	 	'$qualcirurgia',
	 	'$problemasaude',
	 	'$qualproblemasaude',
	 	'$tratamento',
	 	'$qualtratamento',
	 	'$remedio',
	 	'$qualremedio',
	 	'$bebidaalcoolica',
	 	'$frequenciabebida',
	 	'$drogailicita',
	 	'$qualdroga',
	 	'$drogapreju',
	 	'$qualpreju',
	 	'$controleuso',
	 	'$comentecontroleuso',
	 	'$maniaperseguido',
	 	'$comentemania',
	 	'$dificuldadeordenar',
	 	'$comentedificuldade',
	 	'$pensamentoacelerado',
	 	'$comentepensamento',
	 	'$internado',
	 	'$internacaomotivo',
	 	'$consagrou',
	 	'$ondecomquem',
	 	'$relateexperiencia',
	 	'$religiao',
	 	'$qualreligiao',
	 	'$praticareligiosa',
	 	'$experienciaespiritual',
	 	'$comofoi',
	 	'$espiritualajuda',
	 	'$emque',
	 	'$comosoube',
	 	'$daimeutil',
	 	'$porque')");



if($executa){
	include("formData.php");



// ENVIAR EMAIL COM LINK DA FICHA PREENCHIDA
	$destinatario = "cicebri.slz@gmail.com";
    $assunto = "Foi preenchida uma ficha de anamnese";
    $corpo = '
    Foi preenchida a ficha de '.$nome.'.
    Para visualizar todas as fichas clique no seguinte link: http://estrelabrilhante.zz.vc/views/anamnese/php/';


    $headers = "MIME-Version: 1.0";
    $headers .= "Content-type: text/html; charset=iso-8859-1";
    $headers .= "From: ".$email;
    $headers .= "Reply-To: cicebri.slz@gmail.com, daimeluz@hotmail.com,hugofonsecaneto@yahoo.com.br,gmatheusserra@gmail.com, bruno.carvalho@hotmail.de";
    $headers .= "Cc: daimeluz@hotmail.com,hugofonsecaneto@yahoo.com.br,gmatheusserra@gmail.com, bruno.carvalho@hotmail.de";
    $headers .= "Bcc: hugofonsecaneto@yahoo.com.br,gmatheusserra@gmail.com, bruno.carvalho@hotmail.de";
    mail($destinatario,$assunto,$corpo,$headers);

}else{
	print_r($pdo->errorInfo());
}



?>
