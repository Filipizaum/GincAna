<!DOCTYPE html>
<html>
<head>
	<title>GincAna</title>
	<script type="text/javascript">
	function goPage(url){
		location.assign(url);
		//console.log();
	}
	</script>
</head>
<body>
	<?php

		class Pergunta{
			public $id;
			public $enunciado;
			public $resposta;

			function __constructor(){
				$c = pg_connect("")
				$query = "select id,enunciado,resposta form quest order by rand";
				$r = mysql_query($query);
				$this->id = mysql_result($r, 0, 'id');
				$this->enunciado = mysql_result($r, 0, 'enunciado');
				$this->resposta = mysql_result($r, 0, 'resposta');
			}

			function show(){
				?><h3>
				<?php echo $this->enunciado; ?>
				</h3>
				<form method='get'>
					<input type='text' name='resp'>
					<input type='submit' value='Responder'>
				</form>
				<?php
			}
		}

		

		$p = new Pergunta();

		$p->show();

		echo "123";

	 ?>
</body>
</html>
