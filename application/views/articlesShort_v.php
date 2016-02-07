<div class="container">
    <div class="row">

        <div class="col-md-12">
            <a href="<?php echo base_url() ?>addArticle_c"><span class="icon glyphicon glyphicon-plus"></span>Додати статтю</a>


            <?php foreach($articles as $article): ?>

                <a href="<?=base_url('');?>ArticleFull_c/ArticleFull/<? echo $article['id'];?>" ><h3><? echo character_limiter($article['title'], 90);?></h3></a>

                <p><? echo word_limiter($article['content'], 150);?></p>
                <p><a href="<?=base_url('');?>ArticleFull_c/ArticleFull/<? echo $article['id'];?>" >Читати повністю<span class="read_full_icon glyphicon glyphicon-circle-arrow-right"></span></a></p>
                <p><? echo $article['date'];?></p>
                <hr>
                <div class="link-article">
                    <a href="<?=base_url('');?>editArticle_c/editArticle/<? echo $article['id'];?>"><span class="icon glyphicon glyphicon-edit"></span>Редагувати</a>
                    <a href="<?=base_url('');?>deleteArticle_c/deleteArticle/<? echo $article['id'];?>"><span class="icon glyphicon glyphicon-trash"></span>Видалити</a>
                </div>
                <hr>




            <?php endforeach; ?>

            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>