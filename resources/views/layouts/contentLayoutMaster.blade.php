@isset($pageConfigs)
{!! app\Helpers\helpers::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php
$configData = app\Helpers\helpers::applClasses();
@endphp

<html class="loading {{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme']}}"
lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif"
data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
@if($configData['theme'] === 'dark') data-layout="dark-layout" @endif>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>@yield('title') </title>
  {{-- <link href="cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
  {{-- <link href="code.jquery.com/jquery-1.10.2.min.js" rel="stylesheet">cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js --}}
  {{-- <link href="cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" rel="stylesheet"> --}}
  <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">

  {{-- Include core + vendor Styles --}}
  @include('panels/styles')
    <script src="{{ mix('js/core/app.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>



</head>

<!-- END: Head-->

<!-- BEGIN: Body-->
@extends('layouts.verticalLayoutMaster')

