<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$map = new FieldsBuilder('map');

$map
    ->addRepeater('pins')
        ->addGoogleMap('pin')
        ->addWysiwyg('tooltip')
    ;
return $map;