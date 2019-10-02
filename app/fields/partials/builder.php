<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout('hero')
            ->addLayout(get_field_partial('components.hero-static'), ['label'=>'Hero statyczne'])
            ->addLayout(get_field_partial('components.homepage'))
            ->addLayout('contact')
            ->addLayout(get_field_partial('components.flex'))
    ;
return $builder;
