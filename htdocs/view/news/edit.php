<h2 id="title">Editar Notícia</h2>

<form action="?controller=News&action=edit&id=<?php echo $news->getId() ?>" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Título</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo $news->getTitulo() ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Fonte</label>
        <input type="text" name="autor" class="form-control" id="exampleInputPassword1" value="<?php echo $news->getAutor() ?>" >
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Notícia</label>
        <textarea class="form-control content-full" name="noticia"  id="exampleTextarea" rows="6"><?php echo $news->getTexto() ?></textarea>
    </div>
    <div class="form-check">
        <label class="form-check-label" >
            <input type="checkbox" class="form-check-input" name="destaque">
            Notícia Destaque?
        </label>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Imagem</label>
        <input type="file" class="form-control-file" name="imagem" id="exampleInputFile" aria-describedby="fileHelp" accept="image/*" value="<?php echo $news->getImg()?>">
    </div>
    <button type="submit" class="btn btn-primary" name="save" >Editar notícia</button>
</form>