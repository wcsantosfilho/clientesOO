<?php
require_once('Cliente.php');
require_once('ClientePF.php');
require_once('ClientePJ.php');

$tabClientes = array(
    0 => new ClientePF('Antonio Arlindo', 'Rua das Araras, 10', 9000.00, '01/01/1971', '12345678901'),
    1 => new ClientePJ('Brasão Churrascaria', 'Av Ben Te Vi, 25', '98765432000199'),
    2 => new ClientePF('Carlos Carvalho', 'Tv Curio, 39', 3200.00, '11/04/1972', '12312312344'),
    3 => new ClientePJ('Distribuidora Doralice', 'Av Ben Te Vi, 25', '98765432000199'),
);

//asort($tabClientes);

print_r($tabClientes);
echo "\n";
$i = 0;
foreach ($tabClientes as $tc) {

    if ($tc instanceof ClientePF) {
        echo $tc->getNome() . ' - ' . $tc->getEndereco() . ' - ' . $tc->getRenda() . "\n";
    }
    if ($tc instanceof ClientePJ) {
        echo $tc->getNome() . ' - ' . $tc->getEndereco() . ' - ' . $tc->getCnpj() . "\n";
    }

    $i++;
}

?>