<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$team = new FieldsBuilder('team');

$team
    ->setLocation('post_type', '==', 'team');
  
$team
    ->addText('job_title', ['label'=>'Tytuł stanowiska'])
    ->addText('mail', ['label'=>'E-mail'])
    ->addText('phone', ['label'=>'Telefon'])
    ;
return $team;