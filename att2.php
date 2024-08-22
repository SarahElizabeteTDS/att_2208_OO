<?php

class Produto
{
    //atributos
    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnitario;

    //metodos

    public function __toString()
    {
        return "Produto: " . $this->descricao . "(" . $this->unidadeMedida . ")|" . $this->quantidade . "X" . $this->valorUnitario . "=" . $this->getValorTotal() . "\n";
    }

    public function getValorTotal()
    {
        $valorTotal = $this->valorUnitario * $this->quantidade;
        return $valorTotal;
    }

    //gets e sets

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

function pedirDados($var)
{
    $var->setDescricao(readline("Informe a descrição: \n"));
    $var->setUnidadeMedida(readline("Informe a unidade de medida: \n"));
    $var->setQuantidade(readline("Informe a quantidade de produto: \n"));
    $var->setValorUnitario(readline("Informe o valor unitário: \n\n"));
}

function dadosCaro($var)
{
    print "Venda com o maior valor total do produto: ". $var->getDescricao() . "(" . $var->getUnidadeMedida() . ")\n";
}

$produto1 = new Produto;
pedirDados($produto1);
print $produto1 . "\n";

$produto2 = new Produto;
pedirDados($produto2);
print $produto2 . "\n";

$produto3 = new Produto;
pedirDados($produto3);
print $produto3 . "\n";


if ($produto1->getValorTotal() > $produto2->getValorTotal() && $produto1->getValorTotal() > $produto3->getValorTotal()) 
{
    dadosCaro($produto1);
}
elseif(($produto2->getValorTotal() > $produto1->getValorTotal() && $produto2->getValorTotal() > $produto3->getValorTotal()))
{
    dadosCaro($produto2);
}
else
{
    dadosCaro($produto3);
}
