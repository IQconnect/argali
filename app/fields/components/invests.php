<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$invests = new FieldsBuilder('invests');

$invests
    ->addText('title', ['label'=> 'Title'])
    ->addRelationship('invests', ['label'=> 'Osoba kontakowa', 'post_type'=>'inwestycje', 'min'=> 1]);

return $invests;