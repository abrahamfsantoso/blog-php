<section>
    <?php
    $session = \Config\Services::session();
    ?>
    <?php if (isset($session->success)) : ?>
        <div class="alert alert-success text-center alert-dismissible show fade mb-0" role="alert">
            <?= $session->success ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="bg-light p-5 rounded-lg m-3">
        <div class="container">
            <h1 class="display-4">Hello, world! - by CI Blog</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
</section>
<section class="blog-section">
    <div class="container">
        <?php if ($news) : ?>
            <?php foreach ($news as $newsItem) : ?>
                <h3><a class="text-decoration-none" href="/blog/<?= $newsItem['slug'] ?>"><?= $newsItem['title'] ?></a></h3>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center">No posts have been found!</p>
        <?php endif; ?>
    </div>
</section>