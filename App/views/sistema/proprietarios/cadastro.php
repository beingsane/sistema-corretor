<?php require_once('../App/views/sistema/fixos/menu.php')?>

<div class="container mt-4 container-listagem shadow-lg p-3 mb-5 bg-white rounded">
    <h3>Cadastro de proprietários</h3>
  <hr/>

    <?php if(!empty($data['mensagem'])) {
    foreach($data['mensagem'] as $m) {
        echo "<br>".$m."<br>";
  }
} 
?>

    <br />
    <div class="container">
        <form action="/proprietarios/salvar" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
            </div>
            <div class="form-group">
                <label for="telefone2">Telefone 2</label>
                <input type="text" class="form-control" name="telefone2" placeholder="Telefone 2">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estados" class="form-control" name="estado" required>

                </select>
            </div>
            
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <select id="cidades" class="form-control" name="cidade" required>

                </select>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" placeholder="Bairro" required>
            </div>

            <div class="form-group">
                <label for="numero">Número</label>
                <input type="number" class="form-control" name="numero" placeholder="Número" required>
            </div>
            <button type="submit" name="cadastrar" class="btn btn-primary btn-cadastro-form">Cadastrar</button>
        </form>
    </div>
</div>
    

<script src="/js/estados-cidades.js"></script>
