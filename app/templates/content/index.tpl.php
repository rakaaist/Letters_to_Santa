<section class="letters">
    <?php foreach ($data['wishes'] as $wish): ?>
        <div class="post">
            <h2><?php print $wish['wish']; ?></h2>
            <h3><?php print $wish['price']; ?> Eur</h3>
            <?php if (!empty($wish['url'])): ?>
            <img class="photo" src="<?php print $wish['url']; ?>" alt="">
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</section>