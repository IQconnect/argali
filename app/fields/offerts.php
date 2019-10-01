<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$offerts = new FieldsBuilder('offerts');

$offerts
    ->setLocation('post_type', '==', 'oferty');
  
$offerts
    ->addText('title', ['label'=>'Tytuł'])
    ;
return $offerts;