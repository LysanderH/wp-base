<?php /* Template Name: contact */ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section class="contact">
        <div class="contact__content"><?php the_content(); ?></div>
    </section>
<?php endwhile; endif; ?>

    <section class="form">
        <h2 class="form__heading">Mon formulaire de contact</h2>
        <?php if ($feedback = bp_formFeedback('bp_custom_form_treatment')): ?>
            <p class="form__feedback form__feedback--<?= $feedback['success'] ? 'success' : 'error'; ?>"><?= $feedback['message']; ?></p>
        <?php endif; ?>
        <form action="<?= admin_url('admin-post.php'); ?>" method="post">
            <fieldset class="form__fieldset">
                <div>
                    <label for="name" class="form__label">Nom</label>
                    <input type="text" name="bp_name" class="form__input" id="name">
                </div>
                <div>
                    <label for="content" class="form__label">Votre message</label>
                    <textarea class="form__input" name="bp_message" id="content"></textarea>
                </div>
                <input type="hidden" name="_wpnonce" value="<?= wp_create_nonce('bp_custom_form') ?>">
                <input type="hidden" name="action" value="bp_custom_form_treatment">
                <input type="submit">
            </fieldset>
        </form>
    </section>

<?php get_footer(); ?>