<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>Додати нову статтю!</h2>
            <form method="post" action="<?=base_url('');?>index.php/addArticle_c/addArticle">
                <p>Назва статті:</p><input type="text" class="form-control" name="title"/>
                <p>Текст статті:</p><textarea id="ckeditor" name="content" class="form-control" rows="10" cols="40"></textarea>
                <p>Дата публікації:</p><input type="date" class="form-control" name="date"/>
                <input type="submit" class="btn btn-primary" name="add" value="Добавити"/><br/>
            </form>
        </div>
    </div>
</div>