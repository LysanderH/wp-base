<?php get_header(); ?>


<?php $loop = new WP_Query([
    'post_type' => 'post',
    'post_per_page' => 2
]);
?>
<?php if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post(); ?>


    <article class="post">
        <h2 class="post__title">
            <?php the_title(); ?>
        </h2>

        <div class="post__content">
            <?php the_excerpt(); ?>
        </div>
        <footer class="post__cta">
            <a href="<?php the_permalink(); ?>" class="post__link">Voir l'article <span
                        class="sro">"<?php the_title(); ?>"</span> en entier</a>
        </footer>
    </article>
<?php endwhile; endif; ?>
<?= paginate_links(); ?>

    <section class="latest-trips">
        <h2>Mes derniers voyages</h2>
        <?php
        $loop = new WP_Query([
            'post_type' => 'trip',
            'post_per_page' => 2,
            'paged' => get_query_var('trips-pagination') ?: 1,
        ]);
        ?>
        <?php if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post(); ?>
            <article class="trip">
                <h3 class="trip__title">
                    <?php the_title(); ?>
                </h3>
                <dl>
                    <dt>Départ</dt>
                    <dd><?php the_field('arrival'); ?></dd>
                    <dt>Fin</dt>
                    <dd><?php the_field('end'); ?></dd>
                </dl>
                <div class="trip__content">
                    <?php the_excerpt(); ?>
                </div>
                <footer class="trip__cta">
                    <a href="<?php the_permalink(); ?>" class="trip__link">Voir le voyage <span
                                class="sro">"<?php the_title(); ?>"</span></a>
                </footer>
            </article>
        <?php endwhile; endif; ?>
        <div class="pagination-links">
            <?= paginate_links([
                'format' => '?trips-pagination=%#%',
                'current' => get_query_var('trips-pagination') ?: 1,
                'total' => $loop->max_num_pages
            ]); ?>
        </div>
    </section>

<?php get_footer(); ?>