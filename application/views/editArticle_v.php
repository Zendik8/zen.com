<div class="container">
    <div class="row">
        <div class="col-xs-12"
        <h2>Редагувати статтю!</h2>
        <form method="post" action="<?=base_url('');?>editArticle_c/editArticle">
            Назва статті:<br/><input type="text" name="title" value="<?=set_value('title')?>"/><br/>
            Текст статті:<br/><textarea name="content" rows="10" cols="40"><?=set_value('content')?></textarea><br/>
            <input type="submit" name="edit" value="Змінити"/><br/>
        </form>
    </div>
</div>
</div>