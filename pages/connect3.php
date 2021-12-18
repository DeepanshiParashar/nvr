<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>NAVRATAN Bar &amp; Restaurant</title>
    <link rel="manifest" href="../manifest.json">
    <style>
        @charset "UTF-8";
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }
        
        @-webkit-keyframes bounce {
            20%,
            53%,
            80%,
            from,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0)
            }
            70% {
                -webkit-animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0)
            }
        }
        
        @keyframes bounce {
            20%,
            53%,
            80%,
            from,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0)
            }
            70% {
                -webkit-animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                animation-timing-function: cubic-bezier(.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0)
            }
        }
        
        .bounce {
            -webkit-animation-name: bounce;
            animation-name: bounce;
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom
        }
        
        @-webkit-keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        
        @keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        
        .pulse {
            -webkit-animation-name: pulse;
            animation-name: pulse
        }
        
         :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }
        
        *,
         ::after,
         ::before {
            box-sizing: border-box
        }
        
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar
        }
        
        header,
        main,
        nav {
            display: block
        }
        
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }
        
        h1,
        h2,
        h5 {
            margin-top: 0;
            margin-bottom: .5rem
        }
        
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }
        
        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }
        
        img {
            vertical-align: middle;
            border-style: none
        }
        
        button {
            border-radius: 0
        }
        
        button {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }
        
        button {
            overflow: visible
        }
        
        button {
            text-transform: none
        }
        
        button,
        html [type=button] {
            -webkit-appearance: button
        }
        
        [type=button]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }
        
         ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }
        
        h1,
        h2,
        h5 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }
        
        h1 {
            font-size: 2.5rem
        }
        
        h2 {
            font-size: 2rem
        }
        
        h5 {
            font-size: 1.25rem
        }
        
        .collapse {
            display: none
        }
        
        .dropdown {
            position: relative
        }
        
        .dropdown-toggle::after {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }
        
        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }
        
        .nav-link {
            display: block;
            padding: .5rem 1rem
        }
        
        .navbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: .5rem 1rem
        }
        
        .navbar-brand {
            display: inline-block;
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap
        }
        
        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }
        
        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }
        
        .navbar-nav .dropdown-menu {
            position: static;
            float: none
        }
        
        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }
        
        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem
        }
        
        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: no-repeat center center;
            background-size: 100% 100%
        }
        
        @media (min-width:992px) {
            .navbar-expand-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start
            }
            .navbar-expand-lg .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
            .navbar-expand-lg .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }
            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }
        
        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, .9)
        }
        
        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .5)
        }
        
        .navbar-light .navbar-nav .active>.nav-link {
            color: rgba(0, 0, 0, .9)
        }
        
        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .5);
            border-color: rgba(0, 0, 0, .1)
        }
        
        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }
        
        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }
        
        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: .3rem
        }
        
        @media (min-width:576px) {
            .jumbotron {
                padding: 4rem 2rem
            }
        }
        
        .bg-light {
            background-color: #f8f9fa !important
        }
        
        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }
        
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            border: 0
        }
        
        .mr-2 {
            margin-right: .5rem !important
        }
        
        .ml-auto {
            margin-left: auto !important
        }
        
        .text-center {
            text-align: center !important
        }
        
        @media (min-width:992px) {
            .text-lg-left {
                text-align: left !important
            }
        }
        
        .text-white {
            color: #fff !important
        }
        
        html {
            font-size: 1rem
        }
        
        body {
            font-size: 1rem;
            color: #404040;
            line-height: 1.75;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-weight: 400;
            padding-top: 62px
        }
        
        a {
            color: inherit
        }
        
        .back-to-top {
            display: none;
            position: fixed;
            z-index: 1;
            bottom: 0;
            right: 0;
            margin: 0 auto;
            width: 40px;
            height: 40px;
            background-color: #007bff;
            opacity: .5;
            text-align: center;
            line-height: 40px
        }
        
        .back-to-top i {
            color: #fff;
            font-size: 20px
        }
        
        .special-title-1 {
            margin-bottom: .8rem;
            font-size: 1rem;
            font-weight: 700
        }
        
        .special-title-2 {
            font-family: 'Fredericka the Great', cursive;
            margin-bottom: 2.8rem;
            font-size: 2.8rem
        }
        
        .navbar {
            box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .2)
        }
        
        .dropdown-item,
        .nav-link {
            font-weight: 700
        }
        
        .dark-overlay::after {
            content: ' ';
            width: 100%;
            height: 100%;
            background: #000;
            opacity: .3;
            position: absolute;
            left: 0;
            top: 0
        }
        
        .nav-social {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 43px
        }
        
        .nav-social i {
            font-size: 20px;
            color: rgba(0, 0, 0, .5)
        }
        
        .about-jumbotron {
            text-align: center;
            overflow: hidden;
            position: relative;
            background-color: #001f40;
            border-radius: 0;
            height: calc(100vh - 62px)
        }
        
        .about-jumbotron-bg {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            object-fit: cover;
            height: 100%
        }
        
        .about-jumbotron-caption {
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }
        
        .about-jumbotron h2 {
            margin-bottom: .8rem
        }
        
        .about-arrow {
            display: inline-block;
            width: 50px;
            height: 50px;
            position: absolute;
            bottom: -160px;
            left: calc(50% - 25px)
        }
        
        .about-arrow .fa-angle-down {
            line-height: 50px;
            font-size: 4em !important
        }
        
        .navbar-brand.animated {
            animation-duration: 2s;
            animation-iteration-count: infinite
        }
        
        .about-arrow.animated {
            animation-duration: 2s;
            animation-iteration-count: infinite
        }
        
        @media (min-width:768px) {
            .special-title-2 {
                font-size: 3.8rem
            }
        }
        
        @media only screen and (min-width:560px) and (max-width:850px) and (orientation:landscape) {
            .about-arrow {
                display: none
            }
        }
    </style>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </noscript>
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript>
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    </noscript>
    <link rel="preload" href="../css/purestyles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="../css/purestyles.css">
    </noscript>
    <script>
        ! function(n) {
            "use strict";
            n.loadCSS || (n.loadCSS = function() {});
            var o = loadCSS.relpreload = {};
            if (o.support = function() {
                    var e;
                    try {
                        e = n.document.createElement("link").relList.supports("preload")
                    } catch (t) {
                        e = !1
                    }
                    return function() {
                        return e
                    }
                }(), o.bindMediaToggle = function(t) {
                    var e = t.media || "all";

                    function a() {
                        t.media = e
                    }
                    t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a), setTimeout(function() {
                        t.rel = "stylesheet", t.media = "only x"
                    }), setTimeout(a, 3e3)
                }, o.poly = function() {
                    if (!o.support())
                        for (var t = n.document.getElementsByTagName("link"), e = 0; e < t.length; e++) {
                            var a = t[e];
                            "preload" !== a.rel || "style" !== a.getAttribute("as") || a.getAttribute("data-loadcss") || (a.setAttribute("data-loadcss", !0), o.bindMediaToggle(a))
                        }
                }, !o.support()) {
                o.poly();
                var t = n.setInterval(o.poly, 500);
                n.addEventListener ? n.addEventListener("load", function() {
                    o.poly(), n.clearInterval(t)
                }) : n.attachEvent && n.attachEvent("onload", function() {
                    o.poly(), n.clearInterval(t)
                })
            }
            "undefined" != typeof exports ? exports.loadCSS = loadCSS : n.loadCSS = loadCSS
        }("undefined" != typeof global ? global : this);
    </script>
</head>

<body id="top">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand animated pulse" href="../index.html"><img src="../media/brand/logo-dark.svg" width="30" height="30" alt="Logo">
            </a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Home <span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="food.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="food.html">Food</a> <a class="dropdown-item" href="desserts.html">Desserts</a> <a class="dropdown-item" href="drinks.html">Drinks</a>
                        </div>
                    </li>
                    <li class="nav-item active"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="album.html">Album</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservations.html">Reservations</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Review</a></li>
                </ul>
                <div class="ml-auto"><a class="nav-social mr-2" href=" "><i
                            class="fa fa-facebook" aria-hidden="true"></i></a> <a class="nav-social mr-2" href=" "><i class="fa fa-tripadvisor"
                            aria-hidden="true"></i></a> <a class="nav-social mr-2" href=" "><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a class="nav-social" href=" "><i class="fa fa-envelope"
                            aria-hidden="true"></i></a></div>
            </div>
        </nav>
    </header>
    <main class="about-main">
        <div class="jumbotron about-jumbotron dark-overlay text-white"><img sizes="(max-width: 2560px) 100vw, 2560px" srcset="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_320/v1536008889/website-template-3/cover-about.jpg 320w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_552/v1536008889/website-template-3/cover-about.jpg 552w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_747/v1536008889/website-template-3/cover-about.jpg 747w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_900/v1536008889/website-template-3/cover-about.jpg 900w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1070/v1536008889/website-template-3/cover-about.jpg 1070w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1224/v1536008889/website-template-3/cover-about.jpg 1224w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1367/v1536008889/website-template-3/cover-about.jpg 1367w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1521/v1536008889/website-template-3/cover-about.jpg 1521w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1654/v1536008889/website-template-3/cover-about.jpg 1654w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1777/v1536008889/website-template-3/cover-about.jpg 1777w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1905/v1536008889/website-template-3/cover-about.jpg 1905w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2033/v1536008889/website-template-3/cover-about.jpg 2033w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2143/v1536008889/website-template-3/cover-about.jpg 2143w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2263/v1536008889/website-template-3/cover-about.jpg 2263w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2380/v1536008889/website-template-3/cover-about.jpg 2380w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2488/v1536008889/website-template-3/cover-about.jpg 2488w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008889/website-template-3/cover-about.jpg 2560w"
                src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1536008889/website-template-3/cover-about.jpg" alt="" class="about-jumbotron-bg">
            <div class="about-jumbotron-caption">
                <h1 id="title-1" class="special-title-1">ABOUT US</h1>
                <h2 id="title-2" class="special-title-2">Tradition &amp; Passion</h2><a class="about-arrow animated bounce smooth-scroll" href="#about-history" aria-label="our history"><i
                        class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div>
        </div>
        <div id="about-history" class="container about-history">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 about-history-title">
                    <h3>Our History</h3>
                    <p>HOW WE'VE STARTED OUR RESTAURANT</p>
                </div>
                <div id="history-description" class="col-md-8">
                    <p>​​The Indian Cuisine is as diverse as its culture, languages, regions and its climate. Every major region of India brings its own unique dishes and subtle variations to popular dishes. Aromatic Spices are the essence of Indian cuisine.
This is the unique formula, we at Saravanaa Bhavan, chain of Indian vegetarian restaurants follow, to build our businesses across the globe.
Each new restaurant added to our network carries the legacy of good taste and quality. The trust that the customers have placed in us has been a motivating factor in exploring new destinations.
Today, the group has its presence across 27 outlets in South India, 3 in the North and 25 countries with 81 outlets across the globe.
We ensure our customers are our strength and make them feel at home when they are with us. An outlet to be great with friends or all by yourself.
You can eat in, take it to go, or have it catered right to you. The feeling is friendly and the food is fabulous. Whenever you need it, wherever you need it, it is your own unique world to eat out.
Our services include Fast Food, Take Away, Home Delivery, Outdoor Catering, Party Orders and more.
We started our First outlet in 1981, and have established a reputation for AUTHENTIC INDIAN VEGETARIAN Cuisine,among Indian Expats,and clients of other race including Japanese, Chinese, Caucasians, amona others.</div>
            </div>
        </div>
        <hr class="about-horizontal-rule">
        <div class="container about-job-openings">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 about-job-openings-title">
                    <h3>Job Openings</h3>
                    <p>WOULD YOU LIKE TO JOIN OUR TEAM?</p>
                </div>
                <div id="job-description" class="col-md-8">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header bg-dark" id="headingOne">
                                <h5 class="mb-0"><button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Waiter/Waitress</button></h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <h5>Responsibilities</h5>
                                    <ul>
                                        <li>Takes resident(s) meal orders and serves meals correctly and efficiently.
                                        </li>
                                        <li>Delivers trays to rooms of ill residents.</li>
                                        <li>Sets tables with napkins and tableware.</li>
                                        <li>Refills condiments and salt and pepper shakers.</li>
                                        <li>Sets up and keeps salad and dessert counter supplied.</li>
                                        <li>Cleans dining room tables and chairs and vacuums dining room.</li>
                                        <li>May perform other duties as needed.</li>
                                        <li>Qualifications</li>
                                    </ul>
                                    <h5>Qualifications</h5>
                                    <ul>
                                        <li>High school diploma or equivalent.</li>
                                        <li>Similar experience preferable.</li>
                                        <li>The ability to work in a team environment and work flexible shifts.</li>
                                        <li>Strong communication and listening skills.</li>
                                        <li>Ability to lift a minimum of 15 pounds and stand for extended periods of time.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-dark" id="headingTwo">
                                <h5 class="mb-0"><button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bartender</button></h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <h5>Responsibilities</h5>
                                    <ul>
                                        <li>Mixes ingredients such as liquor, soda, water and fruit juice to prepare alcoholic and non-alcoholic beverages (30%*).</li>
                                        <li>Interacts verbally with all bar guests creating a friendly and upbeat atmosphere (20%*).</li>
                                        <li>Serves food and drinks to all bar guests (15%*).</li>
                                        <li>Completes assigned opening and closing sidework (15%*).</li>
                                        <li>Slices fruit and vegetable garnishes for drinks (5%*).</li>
                                        <li>Presents guest checks to bar patrons. Makes correct change and/or completes any necessary charge card transactions (5%*).</li>
                                        <li>Processes employee and/or manager food orders (5%*).</li>
                                        <li>Relays food orders to kitchen via the point-of-sale computerized register system (5%).</li>
                                    </ul>
                                    <h5>Qualifications</h5>
                                    <ul>
                                        <li>Able to operate blenders, frozen drink machines and other bar equipment.
                                        </li>
                                        <li>Stands during entire shift.</li>
                                        <li>Frequent immersion of hands in water every five minutes.</li>
                                        <li>Ability to wipe down table tops, table legs, pick up debris off floor and wipe down booth seats in all areas of the restaurant.</li>
                                        <li>Transports glass racks cases up to 25 pounds (such as a case of beer) up to 15 times per shift.</li>
                                        <li>Reading, writing, basic math and verbal communication skills required.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-dark" id="headingThree">
                                <h5 class="mb-0"><button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Cook</button></h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <h5>Responsibilities</h5>
                                    <ul>
                                        <li>Prepare food items for the cold case, fresh pack, salad and hot bars according to production sheets</li>
                                        <li>Prepare food items according to recipe to ensure quality and consistency of the final product</li>
                                        <li>Ensure that all prepared items are labeled, dated, covered, and rotated</li>
                                        <li>Monitor food levels and replenish items in a timely manner</li>
                                        <li>Provide outstanding customer service; ensure customer needs are met in a timely fashion</li>
                                        <li>Monitor product quality and freshness and ensure proper rotation of product
                                        </li>
                                        <li>Maintain accurate department signage and pricing</li>
                                    </ul>
                                    <h5>Qualifications</h5>
                                    <ul>
                                        <li>High energy, enthusiastic, and displays an affinity for our products, core values, and company philosophy</li>
                                        <li>Ability to follow directions and established procedures</li>
                                        <li>Ability to follow a recipe</li>
                                        <li>Good basic math skills</li>
                                        <li>Ability to visually examine products for quality and freshness</li>
                                        <li>Good communication skills</li>
                                        <li>Good understanding of food production and fundamental cooking techniques
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="reservations-description container">
            <h1 id="title-1" class="special-title-1">If you are interested</h1>
            <h2 id="title-2" class="special-title-2">APPLY HERE</h2>
        </div>
        <div class="container-fluid reservations-form dark-overlay"><img sizes="(max-width: 2560px) 100vw, 2560px" srcset="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_320/v1535898673/website-template-3/cover-wooden-texture.jpg 320w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_541/v1535898673/website-template-3/cover-wooden-texture.jpg 541w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_700/v1535898673/website-template-3/cover-wooden-texture.jpg 700w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_833/v1535898673/website-template-3/cover-wooden-texture.jpg 833w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_940/v1535898673/website-template-3/cover-wooden-texture.jpg 940w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1036/v1535898673/website-template-3/cover-wooden-texture.jpg 1036w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1115/v1535898673/website-template-3/cover-wooden-texture.jpg 1115w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1194/v1535898673/website-template-3/cover-wooden-texture.jpg 1194w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1273/v1535898673/website-template-3/cover-wooden-texture.jpg 1273w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1340/v1535898673/website-template-3/cover-wooden-texture.jpg 1340w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1408/v1535898673/website-template-3/cover-wooden-texture.jpg 1408w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1473/v1535898673/website-template-3/cover-wooden-texture.jpg 1473w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1534/v1535898673/website-template-3/cover-wooden-texture.jpg 1534w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1594/v1535898673/website-template-3/cover-wooden-texture.jpg 1594w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1647/v1535898673/website-template-3/cover-wooden-texture.jpg 1647w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1708/v1535898673/website-template-3/cover-wooden-texture.jpg 1708w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1762/v1535898673/website-template-3/cover-wooden-texture.jpg 1762w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1812/v1535898673/website-template-3/cover-wooden-texture.jpg 1812w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1863/v1535898673/website-template-3/cover-wooden-texture.jpg 1863w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1913/v1535898673/website-template-3/cover-wooden-texture.jpg 1913w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1963/v1535898673/website-template-3/cover-wooden-texture.jpg 1963w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2011/v1535898673/website-template-3/cover-wooden-texture.jpg 2011w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2060/v1535898673/website-template-3/cover-wooden-texture.jpg 2060w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2111/v1535898673/website-template-3/cover-wooden-texture.jpg 2111w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2156/v1535898673/website-template-3/cover-wooden-texture.jpg 2156w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2199/v1535898673/website-template-3/cover-wooden-texture.jpg 2199w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2240/v1535898673/website-template-3/cover-wooden-texture.jpg 2240w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2282/v1535898673/website-template-3/cover-wooden-texture.jpg 2282w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2330/v1535898673/website-template-3/cover-wooden-texture.jpg 2330w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2373/v1535898673/website-template-3/cover-wooden-texture.jpg 2373w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2420/v1535898673/website-template-3/cover-wooden-texture.jpg 2420w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2465/v1535898673/website-template-3/cover-wooden-texture.jpg 2465w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2504/v1535898673/website-template-3/cover-wooden-texture.jpg 2504w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2550/v1535898673/website-template-3/cover-wooden-texture.jpg 2550w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2557/v1535898673/website-template-3/cover-wooden-texture.jpg 2557w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1535898673/website-template-3/cover-wooden-texture.jpg 2560w"
                src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1535898673/website-template-3/cover-wooden-texture.jpg" alt="" class="reservations-form-bg">

            <form action="upload.php" method="post" enctype="multipart/form-data">

                <label for="inputResume">UPLOAD RESUME:</label>
                <input type="file" class="form-control" name="file" id="inputResume" />
                <input type="submit" value="Upload" />
            </form>
            <form action="connect3.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="inputName">NAME:</label> <input type="text" class="form-control" id="inputName" name="Name" placeholder="Mehak Sharma"></div>
                    <div class="form-group col-md-6"><label for="inputEmail">EMAIL:</label> <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="name@example.com"></div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="inputPhone">PHONE:</label> <input type="tel" class="form-control" id="inputPhone" name="Phone" placeholder="9876785435"></div>
                </div>

                <div class="form-row">
                    <label for="inputExperience">EXPERIENCE:</label>
                    <textarea class="form-control" id="inputExperience" rows="6" name="Experience" placeholder="Experience details"></textarea>
                    <div><button type="submit" value="Upload" class="btn btn-light">SUBMIT</button>
                    </div>
            </form>

            </div>

    </main>
    <footer class="page-footer">
        <div class="container">
            <a class="navbar-brand animated pulse d-block text-center m-0 p-0" href="#"><img src="../media/brand/logo-light.svg" width="50" height="50" alt="Logo"></a>
            <div class="row">
                <div class="col-md-3">
                    <h5 class="page-footer-title">OPENING HOURS</h5>
                    <p class="mb-0">Open daily from 8am</p>
                    <p class="mb-0">Bar: Daily from 8am - 12pm</p>
                    <p class="mb-0">Breakfast: Daily from 8am - 11am</p>
                    <p class="mb-0">Lunch: Daily from 12pm - 3pm</p>
                    <p>Dinner: Daily from 6pm - 12pm</p>
                </div>
                <div class="col-md-3 h-100 border-left-custom">
                    <h5 class="page-footer-title mt-3 mt-md-0">LOCATION</h5>
                    <address>Navratan Bar &amp; Restaurant<br>Pitampura,New Delhi<br><abbr title="Phone">P:</abbr> +91987654XXXX<br><abbr title="Email">E:</abbr>
                        info@navratan.com</address>
                </div>
                <div class="col-md-3 h-100 border-left-custom">
                    <h5 class="page-footer-title mt-3 mt-md-0">FOLLOW US</h5>
                    <div class="mb-3"><a class="footer-social" href=" " aria-label="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="footer-social" href=" " aria-label="tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                        <a class="footer-social" href=" " aria-label="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-3 h-100 border-left-custom">
                    <h5 class="page-footer-title mt-3 mt-md-0">NEWSLETTER</h5>
                    <p>Complete the form to receive information on the latest events, news and special offers at NAVRATAN.
                    </p>
                    <form id="newsletter-form"><label class="sr-only" for="formEmail">Email</label> <input type="email" class="form-control form-control-sm rounded" id="formEmail" placeholder="name@example.com">
                        <button type="submit" class="btn btn-sm btn-outline-light btn-block mt-2">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="page-footer-copyright container-fluid text-center">© 2021 Navratan Bar &amp; Restaurant. All rights reserved.
        </div>
    </footer><a id="back-to-top" class="back-to-top smooth-scroll" href="#top"><i class="fa fa-long-arrow-up"
            aria-hidden="true"></i></a>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/site.js"></script>
    <script src="../js/about-animations.js"></script>
</body>

</html>
<?php
    $Name = filter_input(INPUT_POST, 'Name');
    $Email = filter_input(INPUT_POST, 'Email');
    $Phone = filter_input(INPUT_POST, 'Phone');
    $Experience = filter_input(INPUT_POST, 'Experience');
   
    if(!empty($Name)) {
        if(!empty($Email)) {
                if(!empty($Phone)) {
                    if(!empty($Experience)) {
                        $host = "localhost";
                        $dbusername = "root";
                        $dbpassword = "";
                        $dbname = "bookings";
                        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                        if(mysqli_connect_error()){
                            die('Connection Error ' .mysqli_connect_error());
                        }else{
                            $sql = " INSERT INTO applications_table (Name, Email,  Phone, Experience) VALUES ('$Name', '$Email', '$Phone', '$Experience')" ;
                            if($conn->query($sql)) {
                                echo '<script>alert("APPLICATION SUBMITTED SUCCESSFULLY")</script>';
                            } else{
                                echo "ERROR " . $sql . "<br>". $conn->error; 
                            }
                            $conn->close();
                        }
                    }else{
                        echo "EXPERIENCE SHOULD NOT BE EMPTY";
                    }
                }else{
                    echo "PHONE NUMBER SHOULD NOT BE EMPTY";
                }
            
        }else{
            echo "EMAIL SHOULD NOT BE EMPTY";
        }
    }else{
        echo "NAME SHOULD NOT BE EMPTY";
    }
?>
