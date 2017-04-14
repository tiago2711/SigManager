<script>
    function confirmDelete(id) {
        var link = window.document.getElementById("del");
        var r = confirm("Deseja deletar essa noticia?");
        if (r == true) {
            link.href = "?controller=News&action=delete&id=" + id
        } else {
            link.href = "";
        }
    }
</script>

<div class="content">
    <div class="container-fluid">
        <div class="col-md-12 table_news">
            <div class="card">
                <div class="card-header table-news" data-background-color="orange">
                    <h4 class="title">Lista de Notícias do Portal</h4>
                    <p class="category">Noticías cadastradas pelos jornalistas e colunistas</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Fonte</th>
                        <th>Opções</th>
                        </thead>

                        <tbody>

                            <?php foreach ($news as $key => $value) { ?>
                                <tr>
                                    <td class="id"><?php echo $value->getId() ?></td>
                                    <td class="titulo"><?php echo $value->getTitulo() ?></td>
                                    <td class="autor"><?php echo $value->getAutor() ?></td>
                                    <td>
                                        <a href="?controller=News&action=edit&id=<?php echo $value->getId() ?>"><button  type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
                                        <a id="del" href="?controller=News&action=delete&id=<?php echo $value->getId() ?>" ><button id="bt_del" type="button" class="btn btn-danger btn-xs" onclick="confirmDelete(<?php echo $value->getId() ?>)"><span class="glyphicon glyphicon-trash"></span></button></a> 
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>