<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$diary = new FieldsBuilder('diary');

$diary
    ->addRepeater('note')
        ->addGroup('header', ['label'=>''])
            ->addTextarea('date', ['label'=>'Data', 'new_lines'=>'br', 'rows'=>2])
            ->addTextarea('title', ['label'=>'Nazwa', 'new_lines'=>'br', 'rows'=>2])
        ->endGroup()
        ->addGallery('gallery', ['label'=>''])
    ->endRepeater();
return $diary;