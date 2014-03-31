<?php 
	$c=pg_connect ("host='localhost' dbname='gincana' user='postgres' password='m2smart'");
	$query = "CREATE TABLE quest2
				(
				  id serial primary key,
				  enunciado character varying, -- Enunciado da pergunta, o que se propõe a ser respondido
				  resposta character varying -- A resposta certa para a pergunta
				);";
	$r = pg_query($c, $query);

	if(!@($r)){
		echo "A tabela não pode ser criada";
	}else{
		echo "Tabela criada com sucesso";
	}

?>
