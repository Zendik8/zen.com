<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>Редагувати статтю!!!</h1>
            <form method="post" action="<?=base_url('');?>editArticle_c/editArticle/<?=$id ?>">
                <p>Назва статті:</p><input type="text"class="form-control" name="title" value="<?= $title ?>"/>
                <p>Текст статті:</p><textarea id="ckeditor" name="content" class="form-control" rows="10" cols="40"><?=$content ?></textarea><br/>
                <p>Дата публікації:</p><input type="date" class="form-control" name="date" value="<?=$date ?>"/>
                <input type="submit" class="btn btn-primary" name="edit" value="Зберегти"/><br/>
            </form>
        </div>
    </div>
</div>
</div>