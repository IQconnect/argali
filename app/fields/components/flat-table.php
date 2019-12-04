<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flatTable = new FieldsBuilder('flat-table');

$flatTable
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
    ;
return $flatTable;
