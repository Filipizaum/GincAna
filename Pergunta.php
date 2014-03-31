<?php
	class Pergunta{
		public $id;
		public $enunciado;
		public $resposta;

		function __construct(){
			
			$c=pg_connect ("host='localhost' dbname='gincana' user='postgres' password='m2smart'");
			$r = pg_execute($c,$query);
			$r = pg_query($c, "SELECT id,enunciado,resposta FROM quest ORDER BY random() limit 1000");

			$q = @pg_fetch_array($r, 0);
			$this->id = $q['id'];
			$this->enunciado = $q['enunciado'];
			$this->resposta = $q['resposta'];
		}

		function show(){
			?><h3>
			<?php echo $this->enunciado; ?>
			</h3>
			<script type="text/javascript">

				function showR(){
					document.getElementById("resposta-certa").innerHTML = "<?php echo $this->resposta; ?>";
					// document.getElementById("buttons").innerHTML = "<input type='submit' value='Acertei'><input type='submit' value='Errei'>";
					document.getElementById("button-yes").innerHTML = "<input type='submit' value='Acertei'>";
					document.getElementById("button-no").innerHTML = "<input type='submit' value='Errei'>";
				}

			</script>
			
				<input type='text' name='resp'>
				<button onclick="showR();">Responder</button><br>
				<span id='resposta-certa'></span>
			<form method='post'>
				<input type='hidden' name='id' value='<?php echo $this->id ;?>'>
				<input type='hidden' name='status' value='1'>
				<div id='button-yes'></div>
			</form>
			<form method='post'>
				<input type='hidden' name='id' value='<?php echo $this->id ;?>'>
				<input type='hidden' name='status' value='0'>
				<div id='button-no'></div>
			</form>
			<?php
		}
	}

?>
