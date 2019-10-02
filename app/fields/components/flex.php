<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex = new FieldsBuilder('flex');

$flex
    ->addChoiceField('type', 'select')
        ->addChoices('text-text', 'text-img')
    ->addGroup('text-left')
        ->conditional('type', '==', 'text-text')
        ->addFields(get_field_partial('components.text-info'))
    ->endGroup()
    ->addGroup('text-right')
        ->conditional('type', '==', 'text-text')
        ->addTextarea('text', ['label'=>'Content'])
    ->endGroup()

    ;
return $flex;