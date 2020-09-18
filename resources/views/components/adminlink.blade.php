<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="">
        <meta name="Author" content="">
        <meta name="Keywords" content=""/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--- Favicon --->
        <link rel="icon" href="{{asset('admin/assets/img/brand/favicon.png')}}" type="image/x-icon"/>

        <!--- Icons css --->
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet">

        <!--- Right-sidemenu css --->
        <link href="{{asset('admin/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!--- Custom Scroll bar --->
        <link href="{{asset('admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

        <!--- Style css --->
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/css/skin-modes.css')}}" rel="stylesheet">

        <!--- Animations css --->
        <link href="{{asset('admin/assets/css/animate.css')}}" rel="stylesheet">

    </head>