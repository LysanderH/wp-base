<?php
add_action('init', 'bp_start_session', 1);
add_action('admin_post_bp_custom_form_treatment', 'bp_handleForm');
add_action('admin_post_nopriv_bp_custom_form_treatment', 'bp_handleForm');

function bp_start_session()
{
    if (session_id()) return;
    session_start();

}

function bp_handleForm()
{

    $nonce = $_POST['_wpnonce'] ?? null;
    $action = $_POST['action'] ?? null;

    if (!wp_verify_nonce($nonce, 'bp_custom_form')) {
        return false;
    }

    $name = sanitize_text_field($_POST['bp_name']);
    $message = sanitize_text_field($_POST['bp_message']);

    if (!strlen($name) || !strlen($message)) {
        return bp_formRedirectFeedback($action, [
            'success' => false,
            'message' => 'Veuillez remplir tous les champs'
        ]);
    }

    $content = 'Un nouveau message est arrivé :' . PHP_EOL;
    $content .= 'Nom : ' . $name . PHP_EOL;
    $content .= 'Message :' . PHP_EOL;
    $content .= $message;

    if (wp_mail('lysander.hans@hotmail.com', 'Contact de Lysanderhans.com', $content)) {
        return bp_formRedirectFeedback($action, [
            'success' => true,
            'message' => 'Merci ! Votre message a été envoyé.'
        ]);
    };

    bp_formRedirectFeedback($action, [
        'success' => false,
        'message' => 'Woups, something went wrong'
    ]);
}

function bp_formRedirectFeedback($action, $feedback)
{
    $url = wp_get_referer();

    $_SESSION['feedback_' . $action] = $feedback;

    wp_safe_redirect($url);
    exit;
}

function bp_formFeedback($action)
{
    if (!isset($_SESSION['feedback_' . $action])) {
        return false;
    }
    $feedback = $_SESSION['feedback_' . $action];
    unset($_SESSION['feedback_' . $action]);
    return $feedback;
}