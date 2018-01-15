<?php
require_once 'functions.php';
define('DOMAIN', $_SERVER['SERVER_NAME']);

$_CONFIG = array(
    'receivers' => array(
        'test@mail.ruu'
    ),
);

if (!empty($_POST)) {
    $data = $_POST;

    if (validateRequired($data['name'], $data['phone']) && validatePhone($data['phone'])) {
        $lines = array(
            $data['action'],
            '',
            '=== Данные ===',
            'Имя: ' . trim($data['name']),
            'Телефон: ' . formatPhone($data['phone']),
        );
        if (sendMail('noreply@' . DOMAIN, config('receivers'), 'Заявка с сайта ' . DOMAIN, $lines)) {
            response('Письмо успешно отправлено');
        }
    }

    response('Ошибка', true);
}

require_once 'view.php';