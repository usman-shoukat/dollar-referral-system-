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
        <link rel="icon" href="{{asset('home/assets/img/brand/favicon.png')}}" type="image/x-icon"/>


        <!--- Icons css --->
        <link href="{{asset('home/assets/css/icons.css')}}" rel="stylesheet">
        <!--- Internal Sweet-Alert css --->
        <link href="{{asset('home/assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">

        <!--- Select2 css --->
        <link href="{{asset('home/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

        <!--- Internal Datetimepicker-slider css --->
        <link href="{{asset('home/assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
        <link href="{{asset('home/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
        <link href="{{asset('home/assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

        <!--- Internal Spectrum-colorpicker css --->
        <link href="{{asset('home/assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">


        <!--- Icons css --->
        <link href="{{asset('home/assets/css/icons.css')}}" rel="stylesheet">
     
        <!--- Right-sidemenu css --->
        <link href="{{asset('home/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!--- Custom Scroll bar --->
        <link href="{{asset('home/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

        <!--- Style css --->
        <link href="{{asset('home/assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('home/assets/css/style-dark.css')}}" rel="stylesheet">

        <!--- Style-modes css --->
        <link href="{{asset('home/assets/css/skin-modes.css')}}" rel="stylesheet">
        <link href="a{{asset('dmin/assets/css/style-dark.css')}}" rel="stylesheet">

        <!--- Style-modes css --->
        <link href="{{asset('home/assets/css/skin-modes.css')}}" rel="stylesheet">

        <!--- Sidemenu css --->
        <link href="{{asset('home/assets/css/sidemenu.css')}}" rel="stylesheet">

        <!--- Animations css --->
        <link href="{{asset('home/assets/css/animate.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
    .floating-btn{
        width: 80px;
        height: 80px;
        background: green;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border-radius: 50%;
        color: white;
        font-size: 40px;
        box-shadow: 2px 2px 5px rgba(0,0,0,1.25);
        position:fixed;
        right: 20px;
        bottom: 20px;
}
    .floating-btn:hover{
        background: white;
        color: green;
    }
</style>
<a href="https://wa.link/06smy9" class="material-icons floating-btn"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
