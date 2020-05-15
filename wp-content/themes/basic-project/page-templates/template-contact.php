<?php /* Template Name: contact */
$feedback = bp_handleForm();
?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section class="contact">
        <div class="contact__content"><?php the_content(); ?></div>
    </section>
<?php endwhile; endif; ?>

    <section class="form">
        <h2 class="form__heading">Mon formulaire de contact</h2>
        <form action="#" method="post">
            <p class="form__feedback form__feedback--"><?= $feedback['success'] ? 'success' : 'error'; ?><?= $feedback['message']; ?></p>
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
                <input type="submit">
            </fieldset>
        </form>
    </section>

<?php get_footer(); ?>