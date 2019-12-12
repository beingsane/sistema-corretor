<?php require_once('../App/views/sistema/fixos/menu.php')?>

<div class="container mt-4 container-listagem shadow-lg p-3 mb-5 bg-white rounded">
    <h3>Proprietários</h3>

    <br />

    <?php if(!empty($data['mensagem'])) {
	    foreach($data['mensagem'] as $m) {
		    echo "<div class='alert alert-success' role='alert'>".$m."</div>". "<br/> <br/>";
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
                        <button class="btn btn-primary" type="button">
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
                              <a class="btn btn-info" href="/proprietarios/detalhes/<?php echo $proprietario['id'] ?>"><i class="fa fa-search"></i></a>     
                              <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i></a> 
                              <a class="btn btn-danger" data-href="/proprietarios/deletar/<?php echo $proprietario['id'] ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Você deseja realmente deletar?
            </div>
            <div class="modal-body">
                Não será possivel desfazer a ação.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Deletar</a>
            </div>
        </div>
    </div>
</div>



<script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>