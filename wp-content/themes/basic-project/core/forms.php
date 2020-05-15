<?php
function bp_handleForm()
{
    $nonce = $_POST['_wpnonce'] ?? null;

    if (!wp_verify_nonce($nonce, 'bp_custom_form')) {
        return false;
    }

    $name = sanitize_text_field($_POST['bp_name']);
    $message = sanitize_text_field($_POST['bp_message']);

    if (!strlen($name) || !strlen($message)) {
        return [
            'success' => false,
            'message' => 'Veuillez remplir les champs'
        ];
    }

    $content = 'Un nouveau message est arrivé :' . PHP_EOL;
    $content .= 'Nom : ' . $name . PHP_EOL;
    $content .= 'Message :' . PHP_EOL;
    $content .= $message;

    if (wp_mail('lysander.hans@hotmail.com', 'Contact de Lysanderhans.com', $content)) {
        return [
            'success' => true,
            'message' => 'Merci ! Votre message a été envoyé.'
        ];
    };

    return [
        'success' => false,
        'message' => 'Woups, something went wrong'
    ];
}