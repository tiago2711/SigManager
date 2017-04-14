<h2 id="title">Inserir Nova Notícia</h2>
<form action="?controller=News&action=create" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Título</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Título da notícia">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Fonte</label>
        <input type="text" name="autor" class="form-control" id="exampleInputPassword1" placeholder="Fonte da notícia">
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Notícia</label>
        <textarea class="form-control content-full" name="noticia"  id="exampleTextarea" placeholder="Insira o texto da notícia"></textarea>
    </div>
    <div class="form-check">
        <label class="form-check-label" >
            <input type="checkbox" class="form-check-input" name="destaque" value="true">
            Notícia Destaque?
        </label>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Imagem</label>
        <input type="file" class="form-control-file" name="imagem" id="exampleInputFile" aria-describedby="fileHelp" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary" name="save" >Inserir notícia</button>
</form>