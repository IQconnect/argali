<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout('hero')
            ->addLayout(get_field_partial('components.hero-static'), ['label'=>'Hero statyczne'])
            ->addLayout('hero-small', ['label'=>'Hero małe'])
            ->addLayout(get_field_partial('components.homepage'))
            ->addLayout('contact')
            ->addLayout(get_field_partial('components.flex'))
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.team'))
    ;
return $builder;
