<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro usuário</h3>
            <?php 
                if($sessao::retornaMensagem()){
                   echo '<div class="alert alert-warning" role="alert">' . $sessao::retornaMensagem(). '</div>';
                }
            ?>
            <form action="http://<?=APP_HOST?>/usuario/salvar" method="POST" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Seu nome" value="<?= $sessao::retornaValorFormulario('nome'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="" value="<?= $sessao::retornaValorFormulario('email'); ?>" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>

        <div class=" col-md-3"></div>
    </div>
</div>