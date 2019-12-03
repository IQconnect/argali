<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$map = new FieldsBuilder('map');

$map
    ->addFields(get_field_partial('components.text-info'))
    ->addGoogleMap('map');
return $map;