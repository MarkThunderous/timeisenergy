<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'https:&#x2F;&#x2F;markthunderous.github.io&#x2F;timeisenergy&#x2F;РУС_Заявка.html',
    'to' => 'mkhoroshylov2@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Наименование (фирма, предприятие...)',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Наименование (фирма, предприятие...)\' is required.'
    )
    ),
    'select' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'select',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 4,
    'type' => 'tel',
    'label' => 'Телефон',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Телефон\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>