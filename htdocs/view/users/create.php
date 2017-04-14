<!DOCTYPE html>

<h2 id="title">Inserir Novo Usuário Administrador</h2>
<form action="?controller=User&action=create" method="POST">
    <div class="form-group">
        <label for="InputUserName">Nome de Usuário</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Insira um nome de usuário">
    </div>
    <div class="form-group">
        <label for="InputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email">
    </div>
    <div class="form-group">
        <label for="InputPassword">Senha</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha">
    </div>
    <button type="submit" class="btn btn-primary" name="save">Cadastrar Usuário</button>
</form>
