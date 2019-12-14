<?php require_once('../App/views/sistema/fixos/menu.php')?>

<div class="container mt-4 container-listagem shadow-lg p-3 mb-5 bg-white rounded">
    <h3>Edição de proprietários</h3>
    <hr />

    <?php if(!empty($data['mensagem'])) {
    foreach($data['mensagem'] as $m) {
        echo "<br>".$m."<br>";
  }
} 
?>

    <br />
    <div class="container">
        <form action="/proprietarios/atualizar/<?php echo $data['id'] ?>" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome"
                    value="<?php echo $data['nome'] ?>" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome"
                    value="<?php echo $data['sobrenome'] ?>" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" value="<?php echo $data['cpf'] ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone"
                    value="<?php echo $data['telefone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="telefone2">Telefone 2</label>
                <input type="text" class="form-control" name="telefone2" id="telefone2" placeholder="Telefone 2"
                    value="<?php echo $data['telefone2'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email"
                    value="<?php echo $data['email'] ?>">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estados" class="form-control" name="estado" value="<?php echo $data['estado'] ?>" required>
                </select>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <select id="cidades" class="form-control" name="cidade" value="<?php echo $data['cidade']?>" required>
                </select>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Endereço"
                    value="<?php echo $data['endereco'] ?>" required>
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" placeholder="Bairro"
                    value="<?php echo $data['bairro'] ?>" required>
            </div>

            <div class="form-group">
                <label for="numero">Número</label>
                <input type="number" class="form-control" name="numero" placeholder="Número"
                    value="<?php echo $data['numero'] ?>" required>
            </div>
            <button type="submit" name="atualizar" class="btn btn-primary btn-cadastro-form">Atualizar</button>
        </form>
    </div>
</div>


<script src="/js/estados-cidades.js"></script>
<script type="text/javascript">
	window.onload = function() { 
		new dgCidadesEstados({ 
			estado: document.getElementById('estados'), 
			cidade: document.getElementById('cidades'),
		}); 
	}
  $(document).ready(function($){
    $('#telefone').mask('(00) 00000-0000');
    $('#telefone2').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00');
  });
</script>