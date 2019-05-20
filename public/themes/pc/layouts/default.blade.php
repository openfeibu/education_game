<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta content="teleph=no" name="format-detection" />
    <!-- uc强制竖屏 -->
    <meta name="screen-orientation" content="portrait">
    <!-- UC应用模式 -->
    <meta name="browsermode" content="application">
    <!-- QQ强制竖屏 -->
    <meta name="x5-orientation" content="portrait">
    <!-- QQ应用模式 -->
    <meta name="x5-page-mode" content="app">
    <!-- UC禁止放大字体 -->
    <meta name="wap-font-scale" content="no">

    <title>{{ setting('station_name') }} {!! Theme::getTitle() !!}</title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <link rel="shortcut icon" href="/favicon.ico">
    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
    <!-- wx -->
    <!-- <script type="text/javascript" src="../js/jweixin-1.2.0.js"></script> -->

</head>
{!! Theme::content() !!}
{!! Theme::partial('common_js') !!}
</html>
