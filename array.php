<?php 
/*
 Tendo os arrays ['ES', 'MG', 'RJ', 'SP'] e ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'], 
 percorra os vetores dados e crie um outro com a seguinte estrutura: ['ES'=>'Espírito Santo', 'MG'=>'Minas Gerais', 
 'RJ'=>'Rio de Janeiro', 'SP'=>'São Paulo']. Depois de criado terceiro vetor, leia-o e imprima em cada linha a chave 
 de cada posição e seu respectivo valor separados por "-".
 */
$chaves = ['ES', 'MG', 'RJ', 'SP'];
$valores =  array_reverse(['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo']);
$terceiro = [];



for($i=0; $i < count($chaves); $i++){
  $terceiro[$chaves[$i]] = $valores[$i];

}

foreach($terceiro as $key => $value)
{
	print $key .' - '. $value. PHP_EOL;
}

?>