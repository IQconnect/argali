@extends('layouts.app')

@section('content')

@php
    $investFeatured = option('invest_featured')[0];
    $investFeaturedImg = get_post_thumbnail_id($investFeatured->ID);
    $investFeaturedLoc = get_field('loc', $investFeatured->ID);
    $investFeaturedSlogan = get_field('slogan', $investFeatured->ID);
    $investFeaturedDsc = get_field('dsc', $investFeatured->ID);
    $investFeaturedLink = get_field('link', $investFeatured->ID);
    
    $hero = [
        'img_id' => $investFeaturedImg,
        'text-info' => ['text-info' => [
            'label' => $investFeaturedLoc,
            'title' => $investFeaturedSlogan,
            'dsc' => $investFeaturedDsc,
            'link' => $investFeaturedLink,
        ]]
    ];
@endphp

@include('layouts.components.hero-static', ['data'=>$hero])
@include('components.realization.archive-menu')
@include('components.realization.list')



@endsection
