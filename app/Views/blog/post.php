<section>
    <div class="container">
    <article class="blog-post">
        <h1><?= $post['title'] ?></h1>
        <div class="details">
            Posted on: <?= date('M d Y', strtotime($post['created_at'])) ?> by Abie
        </div>
        <?= $post['body'] ?>
    </article>
    </div>
</section>