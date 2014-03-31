GincAna
=======

Pequeno aplicativo feito em PHP para escolher perguntas aleatórias e quando o usuário responder, mostrar a resposta certa

Fazer um programa que realize perguntas aleatórias e para cada perguta o usuário digite um texto, e após apertar enter, mostre a resposta correta.

Entidades:
	Pergunta
		-ID serial PK
		-Enunciado varchar (255)
		-Resposta varchar (255)
		-Quant_acertos integer
		-Quant_erros integer

	Usuário
		+chamarPergunta():Pergunta
		+responderPergunta(Pergunta p):boolean
		+validarPergunta(Pergunta p):void
		+cadastrarPergunta(String enunciado, String resposta):void
		+editarPergunta(Pergunta p, String novoEnunciado, String novaResposta):void
		+excluirPergunta(Pergunta p):void



