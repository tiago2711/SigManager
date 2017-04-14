<script>
    function confirmUpdate() {
        var txt;
        var r = confirm("Confirmar alterações deste usuário?");
        if (r == true) {
            document.getElementsByTagName("bt_upt").submit = true;
        } else {
            document.getElementsByTagName("bt_upt").submit = false;
        }
    }

</script>


<h2 id="title">Atualizar dados de <?php echo $user->getName() ?></h2>
<form id = "form" action="UserController?action=update&id=<?php echo $user->getId() ?>" method="POST">
    <div class="form-group">
        <label for="InputUserName">Nome de Usuário</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1"  value="<?php echo $user->getName() ?>">
    </div>
    <div class="form-group">
        <label for="InputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $user->getEmail() ?>">
    </div>
    <div class="form-group">
        <label for="InputPassword">Senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" value="<?php echo $user->getPassword() ?>">
    </div>
    <button id="bt_upt" type="submit" class="btn btn-primary" onclick="confirmUpdate()" >Atualizar Usuário</button>

</form>