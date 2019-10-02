<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');
  
$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo')
        ->addImage('logo-white')
    ->addTab('Social media', ['label' => 'Social Media', 'placement' => 'left'])
        ->addRepeater('icons', ['min' => 0, 'layout' => 'table'])
            ->addText('icon', ['title' => 'Font awesome kod ikonki'])
            ->addText('link', ['title' => 'link'])
        ->endRepeater()
    ->addTab('hero', ['label' => 'Hero', 'placement' => 'left'])
        ->addRepeater('hero', ['min' => 0, 'layout' => 'table'])
            ->addImage('img', ['title'=> 'Zdjęcie z tle'])
            ->addTextarea('title', ['title' => 'Nagłówek', 'new_lines'=>'br'])
            ->addWysiwyg('content', ['title' => 'Treść'])
        ->endRepeater()
    ->addTab('info-section', ['label' => 'Sekcja informacyjna', 'placement' => 'left'])
        ->addText('info-section_title', ['label' => 'Nagłówek', 'new_lines'=>'br'])
        ->addText('info-section_subtitle', ['label' => 'Nagłówek', 'new_lines'=>'br'])
        ->addTextarea('info-section_content', ['label' => 'Treść', 'new_lines'=>'br'])
        ->addLink('info-section_link', ['label'=>'link'])
        ->addImage('info-section_image', ['title'=> 'Zdjęcie w tle'])
        ->addRepeater('icon-boxs', ['label'=>'Boxy z ikonką','min' => 0, 'layout' => 'table'])
            ->addImage('img', ['title'=> 'Zdjęcie'])
            ->addTextarea('title', ['title' => 'Nagłówek', 'new_lines'=>'br'])
            ->addTextarea('subtitle', ['title' => 'Podtytuł', 'new_lines'=>'br'])
            ->addTextarea('content', ['title' => 'Treść'])
        ->endRepeater()
    ->addTab('footer', ['label' => 'Stopka', 'placement' => 'left'])
        ->addText('footer_title', ['label' => 'Nagłówek kolumny'])
        ->addText('footer_address', ['label' => 'Adres'] )
        ->addRepeater('footer_links', ['label' => 'Link', 'min' => 0, 'layout' => 'table'])
            ->addLink('link', ['title' => 'Link'])
        ->endRepeater()
        ->addRepeater('footer_tel', ['label' => 'Tel', 'min' => 0, 'layout' => 'table'])
            ->addText('tel', ['title' => 'Tel'])
        ->endRepeater()
        ->addRepeater('footer_mails', ['label' => 'Maile', 'min' => 0, 'layout' => 'table'])
            ->addText('mail', ['title' => 'Mail'])
        ->endRepeater()
        ->addText('footer_krs', ['label' => 'KRS'] )
        ->addText('footer_nip', ['label' => 'NIP'] )
        ->addText('footer_regon', ['label' => 'REGON'] )
    ->addTab('Formularz kontaktowy', ['placement' => 'left'])
        ->addGroup('contact', ['label'=> ' '])
            ->addTab('Info')
                ->addFields(get_field_partial('components.text-info'))
            ->addTab('Formularz')
                ->addText('title', ['label' => 'Tytuł', 'default_value' => 'Formularz kontaktowy'])
                ->addText('name', ['label' => 'Placeholder Nazwa', 'default_value' => 'Imię i nazwsiko'])
                ->addText('topic', ['label' => 'Placeholder Temat', 'default_value' => 'Temat'])
                ->addText('email', ['label' => 'Placeholder Adres e-mail', 'default_value' => 'Adres e-mail'])
                ->addText('phone', ['label' => 'Placeholder Telefon', 'default_value' => 'Telefon'])
                ->addText('message', ['label' => 'Placeholder Wiadomość', 'default_value' => 'Wiadomość'])
                ->addText('button', ['label' => 'Przycisk', 'default_value' => 'Wyślij'])
                ->addWysiwyg('terms', ['label' => 'Regułka prawna', 'default_value' => 'Wyrażam zgodę na przetwarzanie moich danych osobowych przez Argali Sp. z o. o. spółkę akcyjną z siedzibą w Adres... w celu kontaktu przedstawiciela Spółki i udzielenia odpowiedzi na wiadomość przesłaną za pośrednictwem formularza kontaktowego.'])
                ->addTextarea('thankyou', ['label' => 'Podziękowanie','new_lines'=>'br', 'default_value' => 'Dziękujemy za wysłanie formularza. <br>Nasz konsultant skontaktuje się z Tobą jak najszybciej to możliwe.<br><br>W tym czasie zapraszamy do zapoznania się z naszą ofertą.<br><br>'])
                ->addLink('link', ['label'=>'Link w podziękowaniu'])
        ->endGroup();
    ;
        

    
return $option_page;