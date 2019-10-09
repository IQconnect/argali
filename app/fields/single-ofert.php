<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$offerty = new FieldsBuilder('offerty');

$offerty
    ->setLocation('post_type', '==', 'oferty');
  
$offerty
    ->addFields(get_field_partial('partials.builder'));
return $offerty;