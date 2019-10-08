<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$invest = new FieldsBuilder('Inwestycja');

$invest
    ->setLocation('post_type', '==', 'inwestycje');
  
$invest
    ->addTab('Main', ['label'=>'Główne informacje','placement' => 'left'])
        ->addTextarea('slogan', ['label'=> 'Slogan', 'new_lines'=>'br', 'rows'=>2])
        ->addTextarea('loc', ['label'=> 'Lokalizacja', 'new_lines'=>'br', 'rows'=>2])
        ->addText('short_loc', ['label'=> 'Krótka lokalizacja'])
        ->addTextarea('dsc', ['label'=> 'Opis', 'new_lines'=>'br', 'rows'=>6])
        ->addLink('link', ['label'=> 'Link'])
    ;
return $invest;