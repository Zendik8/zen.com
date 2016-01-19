<div class="container">
    <div class="row">
        <div class="col-xs-12"
            <h2>Додати нову статтю!</h2>
            <form method="post" action="<?=base_url('');?>index.php/addArticles_c/addArticle">
                Назва статті:<br/><input type="text" name="title" value="<?//=set_value('title')?>"/><br/>
                Текст статті:<br/><textarea name="content" rows="10" cols="40"><?//=set_value('text')?></textarea><br/>
                <input type="submit" name="add" value="Добавити"/><br/>
            </form>
        </div>
    </div>
</div>