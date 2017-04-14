<script>
    function confirmDelete(id) {
        var link = window.document.getElementById("delUser");
        var r = confirm("Deseja deletar essa noticia?");
        if (r == true) {
            link.setAttribute("href", "?controller=News&action=delete&id=" + id);
        } else {
            link.setAttribute("href", "");
        }
    }
</script>


<div class="content">
    <div class="container-fluid">
        <div class="col-md-12 table_news">
            <div class="card">
                <div class="card-header table-news" data-background-color="orange">
                    <h4 class="title">Lista de Usuários Cadastrados</h4>
                    <p class="category">Usuários cadastradados via SGDB e Google Sign In</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <th>Id</th>
                        <th>Usuário</th>
                        <th>Email</th>
                        <th>Opções</th>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $key => $value) { ?>
                                <tr>
                                    <td class="id"><?php echo $value->getId() ?></td>    
                                    <td class="username"><?php echo $value->getName() ?></td>
                                    <td class="email"><?php echo $value->getEmail() ?></td>

                                    <td>
                                        <a href="?controller=User&action=edit&id=<?php echo $value->getId() ?>" ><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
                                        <a id="delUser" href="?controller=User&action=delete&id=<?php echo $value->getId() ?>" ><button id="bt_del" type="button" class="btn btn-danger btn-xs" onclick="confirmDelete(<?php echo $value->getId() ?>)"><span class="glyphicon glyphicon-trash"></span></button></a> </td>
                                </tr> 
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>