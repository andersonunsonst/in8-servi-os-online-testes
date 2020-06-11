<?php
/*
Crie uma função recursiva para descobrir o menor número inteiro divisível por 2, 3 e 10 ao mesmo tempo.
 Quando encontrá-lo, imprima-o na tela.
*/
function divi($num=1){

	if($num%2==0 && $num%3==0 && $num%10==0) {
			echo $num . PHP_EOL; 
	}else{
		$num++;
		divi($num);	
	}

}

divi();

?>