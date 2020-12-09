<section>
    <h1>Welcome to the world of magic - Christmas!</h1>
    <div class="about">
        <article>
            <h3>I am Santa Claus from Rovaniemi!</h3>
            <p>I am happy to make your wishes come true!</p>
            <div class="santa"></div>
        </article>
        <article>
            <h3>That's where I live</h3>
            <p>Village Rovaniemi!</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5996586.2531226175!2d16.762198103454228!3d66.28096239107735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x442b4bbd76772553%3A0x158088adb48841c4!2sRovaniemi%2C%20Finland!5e0!3m2!1sen!2slt!4v1607519496176!5m2!1sen!2slt"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </article>
    </div>
</section>
<div>
    <?php if (isset($data['form'])): ?>
        <h3><?php print $data['form_title']; ?></h3>
        <?php print $data['form']; ?>
    <?php endif; ?>

    <?php if (!empty($data['message'])): ?>
        <h4><?php print $data['message']; ?></h4>
    <?php endif; ?>
</div>
