<?php require_once('../App/views/sistema/fixos/menu.php')?>

<div class="container mt-4 container-listagem shadow-lg p-3 mb-5 bg-white rounded">
    <h3>Proprietários</h3>

    <br />

    <?php if(!empty($data['mensagem'])) {
	    foreach($data['mensagem'] as $m) {
		    echo $m."<br>";
	  }
    } 
    ?>

    <div class="row">
        <div class="col-6">
            <a href="/proprietarios/cadastro" class="btn btn-primary btn-cadastro-tabela btn-lg"><i class="fas fa-plus"> Novo Proprietário</i></a>
        </div>
        <div class="col-6">
            <form action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar por nome">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br />

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th width="180px">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data['registros'] as $proprietario) { ?>
                        <tr>
                            <th scope="row"><?php echo $proprietario['id']; ?></th>
                            <td><?php echo $proprietario['nome']; ?></td>
                            <td><?php echo $proprietario['sobrenome']; ?></td>
                            <td><?php echo $proprietario['cpf']; ?></td>
                            <td><?php echo $proprietario['telefone']; ?></td>
                            <td>
                              <button class="btn btn-info" href="#"><i class="fa fa-search"></i></button>     
                              <button class="btn btn-primary" href="#"><i class="fa fa-edit"></i></button> 
                              <button class="btn btn-danger" href="#"><i class="fa fa-trash"></i></button> 
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>