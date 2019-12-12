<?php require_once('../App/views/sistema/fixos/menu.php')?>

<div class="container mt-4 container-listagem shadow-lg p-3 mb-5 bg-white rounded">
<h3>Detalhes do proprietário</h3>
<hr/>
<br/>

<h5>Nome completo: <?php echo $data['nome'] ?> <?php echo $data['sobrenome'] ?></h5>
<h5>CPF: <?php echo $data['cpf'] ?></h5>
<h5>Telefone: <?php echo $data['telefone'] ?></h5>

<?php if($data['telefone2'] != null && $data['telefone2'] != '') { ?>
    <h5>Telefone 2: <?php echo $data['telefone2'] ?></h5>
<?php } ?>

<?php if($data['email'] != null && $data['email'] != '') { ?>
    <h5>Email: <?php echo $data['email'] ?></h5>
<?php } ?>

<h5>Estado: <?php echo $data['estado'] ?></h5>
<h5>Cidade: <?php echo $data['cidade'] ?></h5>
<h5>Endereço: <?php echo $data['endereco'] ?></h5>
<h5>Bairro: <?php echo $data['bairro'] ?></h5>
<h5>Número: <?php echo $data['numero'] ?></h5>

<hr/>

<a class="btn btn-primary" href="/proprietarios/listagem">Voltar</a>
</div>


