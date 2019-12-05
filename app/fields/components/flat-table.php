<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flatTable = new FieldsBuilder('flat-table');

$flatTable
    ->addGallery('gallery')
    ->addRepeater('table', ['label'=>'Dodatkowe menu'])
        ->addText('budynek')
        ->addText('nr')
        ->addText('powierzchnia')
        ->addText('ogrodek')
        ->addImage('rzut')
        ->addFile('karta')
        ->addSelect('status')
            ->addChoice('wolne')
            ->addChoice('zajęte')
            ->addChoice('sprzedane')
            ->setDefaultValue('wolne')
        ->addImage('extraRzut')
    ;
return $flatTable;
