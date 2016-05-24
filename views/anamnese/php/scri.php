<?php
// Get post data
// $jsonObj = '{"nome":"JSON da SIlva Sauro","filiacao":"Antonio e Dulcilene","identidade":"109273010018","orgao":"SSpMA","naturalidade":"São Luís","nacionalidade":"Brasil","escolaridade":"Pós-graduação","fone":"98987781518","email":"bruno@mail.com","endereco":"Rua X Bairro Y","bairro":"Cohafuma","cidade":"São Luís/MA","estadocivil":"Solteiro(a)","filhos":"Não","mora_com":"Conjugue","ocupacao":"Desenvolvedor Web","empresa":"Freelancer","gostadoquefaz":"Sim","estabilidade":"Não","atividades":"Yoga","antecedentes":"Não","relate":"","doencagrave":"Não","cirurgia":"Não","problemasaude":"Não","tratamento":"Não","remedio":"Não","bebidaalcoolica":"Não","drogailicita":"Não","drogapreju":"Não","controleuso":"Não","maniaperseguido":"Não","dificuldadeordenar":"Não","pensamentoacelerado":"Não","internado":"Não","consagrou":"Sim","ondecomquem":"Na estrela Brilhande na companhia de Deus e Nossa Senhora","relateexperiencia":"Foi muito boa.","religiao":"Sim","qualreligiao":"Santo Daime","praticareligiosa":"Paz, autoconhecimento e equilibrio interior","experienciaespiritual":"Sim","comofoi":"Eu vi uma entidade","espiritualajuda":"Sim","emque":"Me tornar uma pessoa autoconsciente","comosoube":"Através de um amigo","daimeutil":"Sim","porque":"Luz"}';
// $data = json_decode($jsonObj);
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
// RECEBIMENTO DOS DADOS


	@$nome = $data->nome;
	@$datanascimento = $data->datanascimento;
	@$filiacao = $data->filiacao;
	@$identidade = $data->identidade;
	@$orgao = $data->orgao;
	@$naturalidade = $data->naturalidade;
	@$nacionalidade = $data->nacionalidade;
	@$escolaridade = $data->escolaridade;
	@$fone = $data->fone;
	@$email = $data->email;
	@$endereco = $data->endereco;
	@$bairro = $data->bairro;
	@$cidade = $data->cidade;
	@$estadocivil = $data->estadocivil;
	@$filhos = $data->filhos;
	@$mora_com = $data->mora_com;
	@$ocupacao = $data->ocupacao;
	@$empresa = $data->empresa;
	@$gostadoquefaz = $data->gostadoquefaz;
	@$estabilidade = $data->estabilidade;
	@$atividades = $data->atividades;
	@$antecedentes = $data->antecedentes;
	@$relate = $data->relate;

	//Saúde e Comportamento
	@$doencagrave = $data->doencagrave;
	@$qualdoenca = $data->qualdoenca;
	@$cirurgia = $data->cirurgia;
	@$qualcirurgia = $data->qualcirurgia;
	@$problemasaude = $data->problemasaude;
	@$qualproblemasaude = $data->qualproblemasaude;
	@$tratamento = $data->tratamento;
	@$qualtratamento = $data->qualtratamento;
	@$remedio = $data->remedio;
	@$qualremedio = $data->qualremedio;
	@$bebidaalcoolica = $data->bebidaalcoolica;
	@$frequenciabebida = $data->frequenciabebida;
	@$drogailicita = $data->drogailicita;
	@$qualdroga = $data->qualdroga;
	@$drogapreju = $data->drogapreju;
	@$qualpreju = $data->qualpreju;
	@$controleuso = $data->controleuso;
	@$comentecontroleuso = $data->comentecontroleuso;
	@$maniaperseguido = $data->maniaperseguido;
	@$comentemania = $data->comentemania;
	@$dificuldadeordenar = $data->dificuldadeordenar;
	@$comentedificuldade = $data->comentedificuldade;
	@$pensamentoacelerado = $data->pensamentoacelerado;
	@$comentepensamento = $data->comentepensamento;
	@$internado = $data->internado;
	@$internacaomotivo = $data->internacaomotivo;

	//ESPIRITUALIDADE
	@$consagrou = $data->consagrou;
	@$ondecomquem = $data->ondecomquem;
	@$relateexperiencia = $data->relateexperiencia;
	@$religiao = $data->religiao;
	@$qualreligiao = $data->qualreligiao;
	@$praticareligiosa = $data->praticareligiosa;
	@$experienciaespiritual = $data->experienciaespiritual;
	@$comofoi = $data->comofoi;
	@$espiritualajuda = $data->espiritualajuda;
	@$emque = $data->emque;
	@$comosoube = $data->comosoube;
	@$daimeutil = $data->daimeutil;
	@$porque = $data->porque;

//Conexão com o Banco de Dados
	$hostname = 'localhost';
	$username = 'root';
	$password = 'prospero888';
	$database = 'anamnese';

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
	include("enviado.html");



// ENVIAR EMAIL COM LINK DA FICHA PREENCHIDA
	$destinatario = "cicebri.slz@gmail.com";
    $assunto = "Foi preenchida uma ficha de anamnese";
    $corpo = '
    Foi preenchida a ficha de '.$nome.'.
    Para visualizar todas as fichas clique no seguinte link: http://cicebris.esy.es/views/anamnese/php/';


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
