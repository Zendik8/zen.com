<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><?= $title;?></h3>
            <p><?= $content;?></p>
            <p>Дата публікації: <?= $date;?></p>
            <hr>
            <div class="link-article">
                <a href="<?=base_url('');?>editArticle_c/editArticle/<?= $id;?>"><span class="icon glyphicon glyphicon-edit"></span>Редагувати</a>
                <a href="<?=base_url('');?>deleteArticle_c/deleteArticle/<?= $id;?>"><span class="icon glyphicon glyphicon-trash"></span>Видалити</a>
            </div>
            <hr>
        </div>
    </div>
</div>