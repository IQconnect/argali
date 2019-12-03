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
            ->addLayout(get_field_partial('components.text'))
            ->addLayout(get_field_partial('components.map'))
            ->addLayout('contact')
            ->addLayout('contact-form')
            ->addLayout(get_field_partial('components.flex'))
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.team'))
            ->addLayout(get_field_partial('components.img-icon'))
            ->addLayout(get_field_partial('components.slider'))
    ;
return $builder;
