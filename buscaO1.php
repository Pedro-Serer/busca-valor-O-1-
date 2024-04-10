<?php
	//Busca valores em vetor com complexidade O1

	$vetor = [];

	function adicionarValorVetor(mixed $valorAdicionar, mixed &$vetor)
	{
		$vetor[$valorAdicionar] = $valorAdicionar;
	}
	
	function procuraValorVetor(mixed $valorAdicionar, mixed $vetor): bool
	{
		return array_key_exists($valorAdicionar, $vetor);
	}
	
	adicionarValorVetor(2, $vetor);
	adicionarValorVetor("x", $vetor);
	
	print_r($vetor);
	
	if (procuraValorVetor(2, $vetor)) echo "Existe";
	if (procuraValorVetor("z", $vetor)) echo "Existe";
