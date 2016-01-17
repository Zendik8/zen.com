<div class="container">
    <h1>Welcome to Blog!</h1>
    <div class="row">
        <div class="col-xs-12">
            <?php foreach($articles as $article): ?>
                <p><?php echo $article['id'];?></p>
                <h3><? echo $article['title'];?></h3>
                <p><? echo $article['content'];?></p>
                <p><? echo $article['date'];?></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>