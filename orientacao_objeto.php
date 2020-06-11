<?php
/*
Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que multiplique
 as 3 retornando o produto. Deixe um exemplo de utilização da sua classe no final do código.
*/
class Propriedades{

	private $primeiro;
	private $segundo;
	private $terceiro;


	public function setPrimeiro(int $valor){
		$this->primeiro = $valor;
	}

	public function setSegundo(int $valor)
	{
		$this->segundo = $valor;
	}

	public function setTerceiro(int $valor)
	{
		$this->terceiro = $valor;
	}

	public function getPrimeiro()
	{
		return $this->primeiro;
	}

	public function getSegundo()
	{
		return $this->segundo;
	}

	public function getTerceiro()
	{
		return $this->terceiro;
	}

	public function multiplica()
	{
		return $this->primeiro*$this->segundo*$this->terceiro;
	}

}

$teste = new Propriedades();
$teste->setPrimeiro(2);
$teste->setSegundo(2);
$teste->setTerceiro(2);
echo $teste->multiplica();

?>