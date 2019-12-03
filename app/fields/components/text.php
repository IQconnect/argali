<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$text = new FieldsBuilder('text');

$text
    ->addWysiwyg('content');
    
return $text;