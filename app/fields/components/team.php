<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$team = new FieldsBuilder('team');

$team
    ->addGroup('block', ['label'=> ' '])
        ->addFields(get_field_partial('components.text-info'))
    ->endGroup()
    ->addRelationship('person', ['label'=> 'Osoba kontakowa', 'post_type'=>'team', 'min'=> 0]);
return $team;