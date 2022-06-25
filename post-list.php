<?php
require('header.php');
require('navigation.php');
require('data-post.php');
?>

<main class="w-100 m-auto">
<div class="album py-5 bg-light">
    <div class="container">
        <h2>Посты</h2>

        <?php
            if (isset($post_array) and !empty($post_array)):
                foreach ($post_array as $item_post): ?>

                <div class="row my-2">
                    <div class="col">
                        <div class="card shadow-sm">
                                <h3 class="m-2"><?= $item_post["title"]; ?></h3>

                            <div class="card-body">
                                <p class="card-text"><?= $item_post["content"]; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="/post/<?= $item_post["id"]; ?>">
                                            View
                                        </a>
                                    </div>
                                    <small class="text-muted"><?= $item_post["data_publications"]; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                endforeach;
                endif;
             ?>

    </div>
</div>
</main>

<?php
require('footer.php'); ?>