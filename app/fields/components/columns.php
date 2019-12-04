<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$columns = new FieldsBuilder('columns');

$columns
    ->addWysiwyg('left')
    ->addWysiwyg('right')
    ;
return $columns;