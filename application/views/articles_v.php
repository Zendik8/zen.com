<div class="container">
    <h1>Welcome to Blog!</h1>
    <div class="row">
        <div class="col-xs-12">
            <?php foreach($articles as $article): ?>

                <h3><? echo $article['title'];?></h3>
                <p><? echo $article['content'];?></p>
                <p><? echo $article['date'];?></p>
                <div>
                    <a href="<?=base_url('');?>index.php/addArticles_c/editArticle">Редагувати</a>
                    <a href="<?=base_url('');?>index.php/addArticles_c/deleteArticle">Видалити</a>
                </div>
            <?php endforeach; ?>
            <br>
        </div>
    </div>
</div>