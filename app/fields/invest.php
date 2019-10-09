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
        ->addRelationship('person', ['label'=> 'Osoba kontakowa', 'post_type'=>'team', 'min'=> 0, 'max'=>1])
    ->addTab('Map', ['label'=>'Plan osiedla','placement' => 'left'])
        ->addImage('map_image', ['label'=>'Zdjęcia osiedla'])
    ->addTab('Flats', ['label'=>'Imagemap','placement' => 'left'])
        ->addRepeater('flats', ['label'=>'Mieszkanie / Dom','placement' => 'left'])
            ->addTextarea('cords', ['label'=>'Koordynacje','placement' => 'left', 'rows'=>2])
        ->endRepeater()
    ->addTab('Flatss', ['label'=>'Info','placement' => 'left'])
        ->addRepeater('flats_info', ['label'=>'Mieszkanie / Dom','placement' => 'left'])
            ->addGroup('Dane')
                ->addSelect('status', ['label'=> 'Status'])
                    ->addChoice('free','wolne')
                    ->addChoice('take','zajęte')
                    ->addChoice('sold','sprzedane')
                    ->setDefaultValue('wolne')
                ->addAccordion('informacje')
                    ->addFields(get_field_partial('components.text-info'))
                    ->addText('name', ['label'=>'Nazwa'])
                    ->addText('area', ['label'=>'Metraż'])
                    ->addText('rooms', ['label'=>'Pokoje'])
                    ->addText('flors', ['label'=>'Piętra'])
                    ->addText('baths', ['label'=>'Łazienki'])
                    ->addText('garage', ['label'=>'Garaż'])
                    ->addText('garden', ['label'=>'Ogródek'])
                ->addAccordion('Dokumenty')
                    ->addRepeater('docs', ['label'=>'Dokument','placement' => 'left'])
                        ->addFile('doc', ['label'=>'Dokument'])
                    ->endRepeater()
                ->addAccordion('Galeria')
                    ->addGallery('gallery', ['label'=>'Galeria'])
                ->addAccordion('Imagemap', ['label'=> 'Imagemap'])
                    ->addTextarea('cords', ['label'=>'Koordynacje','placement' => 'left', 'rows'=>2])
            ->endGroup()
        ->endRepeater()
    ->addTab('Features', ['label'=>'Dlaczego warto','placement' => 'left'])
        ->addFields(get_field_partial('components.features'))
    ->addTab('Lokalizacja', ['label'=>'Lokalizacja','placement' => 'left'])
        ->addGroup('1st', ['label'=> ' '])
            ->addFields(get_field_partial('components.text-info'))
            ->addGallery('image', ['label'=> 'Zdjęcia', 'max'=>3])
            ->addGoogleMap('gmap', ['label'=> 'Mapa google'])
        ->endGroup()
    ->addTab('Finansowanie', ['label'=>'Finansowanie','placement' => 'left'])
        ->addGroup('2nd', ['label'=> ' '])
            ->addFields(get_field_partial('components.text-info'))
            ->addImage('image', ['label'=> 'Zdjęcie'])
        ->endGroup()
    ;
return $invest;