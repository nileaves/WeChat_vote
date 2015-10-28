<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript" src="Public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <link type="text/css" href="Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Public/bootstrap/css/elusive-webfont.css">
    <script  type="text/javascript" src="Public/bootstrap/js/bootstrap.min.js"></script>
    <script  type="text/javascript" src="Public/js/unslider.js"></script>
    <style>
        /*.banner { position: relative; overflow: auto; }
        .banner li { list-style: none; }
        .banner ul li { float: left; }
        .banner ul { margin: 0; padding: 0; }*/
        .banner {
            position: relative;
            width: 100%;
            overflow: auto;

            font-size: 18px;
            line-height: 24px;
            text-align: center;

            color: rgba(255,255,255,.6);
            text-shadow: 0 0 1px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.3);

            background: #5b4d3d;
            box-shadow: 0 1px 2px rgba(0,0,0,.25);
        }
        .banner ul {
            list-style: none;
            width: 300%;
            margin: 0;
            padding: 0;
        }
        .banner ul li {
            display: block;
            float: left;
            width: 33%;
            min-height: 350px;

            -o-background-size: 100% 100%;
            -ms-background-size: 100% 100%;
            -moz-background-size: 100% 100%;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;

            box-shadow: inset 0 -3px 6px rgba(0,0,0,.1);
        }

        .banner .inner {
            padding: 160px 0 110px;
        }

        .banner h1, .banner h2 {
            font-size: 40px;
            line-height: 52px;

            color: #fff;
        }

        .banner .btn {
            display: inline-block;
            margin: 25px 0 0;
            padding: 9px 22px 7px;
            clear: both;

            color: #fff;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;

            border: 2px solid rgba(255,255,255,.4);
            border-radius: 5px;
        }
        .banner .btn:hover {
            background: rgba(255,255,255,.05);
        }
        .banner .btn:active {
            -webkit-filter: drop-shadow(0 -1px 2px rgba(0,0,0,.5));
            -moz-filter: drop-shadow(0 -1px 2px rgba(0,0,0,.5));
            -ms-filter: drop-shadow(0 -1px 2px rgba(0,0,0,.5));
            -o-filter: drop-shadow(0 -1px 2px rgba(0,0,0,.5));
            filter: drop-shadow(0 -1px 2px rgba(0,0,0,.5));
        }

        .banner .btn, .banner .dot {
            -webkit-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
            -moz-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
            -ms-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
            -o-filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
            filter: drop-shadow(0 1px 2px rgba(0,0,0,.3));
        }

        .banner .dots {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 20px;
        }
        .banner .dots li {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 0 4px;

            text-indent: -999em;

            border: 2px solid #fff;
            border-radius: 6px;

            cursor: pointer;
            opacity: .4;

            -webkit-transition: background .5s, opacity .5s;
            -moz-transition: background .5s, opacity .5s;
            transition: background .5s, opacity .5s;
        }
        .banner .dots li.active {
            background: #fff;
            opacity: 1;
        }

        .banner .arrows {
            position: absolute;
            bottom: 20px;
            right: 20px;
            color: #fff;
        }
        .banner .arrow {
            display: inline;
            padding-left: 10px;
            cursor: pointer;
        }
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px), (max-width: 900px) {
           /* .wrap {
                width: 90%;
            }
            #logo {
                left: 50px;
                top: 30px;
            }*/

            .banner h1, .banner h2 {
                font-size: 24px;
                line-height: 30px;
            }
            .banner ul li {
                height: 240px;
            }
            .banner .inner {
                padding-top: 100px;
                padding-bottom: 50px;
            }
            .banner p {
                font-size: 15px;
                width: 80%;
                margin: 0 auto;
            }
           /* pre {
                overflow: auto;
            }
            .features li {
                width: 100%;
                margin-left: 10px;
                margin-bottom: 30px;
            }
            .how li {
                width: 90%;
            }
            .how pre {
                position: static;
                width: 100%;
            }*/
        }
    </style>
</head>
<body>
<div class="banner">
    <ul>
        <li style="background-image: url('Public/images/bg1.jpg');">
            <div class="inner">
                <h1>The jQuery slider that just slides.</h1>
                <p>就是这个不到3kb的插件！没有奇特的特效或无用的标签。</p>

                <a class="btn" href="#download">下载</a>
            </div>
        </li>

        <li style="background-image: url('Public/images/bg2.jpg');">
            <div class="inner">
                <h1>Fluid, flexible, fantastically minimal.</h1>
                <p>Use any HTML in your slides, extend with CSS. You have full control.</p>

                <a class="btn" href="#download">下载</a>
            </div>
        </li>

        <li style="background-image: url('Public/images/bg3.jpg');">
            <div class="inner">
                <h1>开源</h1>
                <p>Unslider的所有源码都托管在GitHub上。</p>

                <a class="btn" href="//github.com/idiot/unslider">参与</a>
            </div>
        </li>

        <li style="background-image: url('Public/images/bg1.jpg');">
            <div class="inner">
                <h1>Uh, that’s about it.</h1>
                <p>I just wanted to show you another slide.</p>

                <a class="btn" href="#download">下载</a>
            </div>
        </li>
    </ul>
</div>
<div class="container">
    <table class="table row">
        <tr class="col-xs-12">
            <td><i class="el-icon-mic-alt" style="color: greenyellow;font-size: 30px"></i></td>
            <td><h5>活动介绍</h5></td>
        </tr>
        <tr class="col-xs-12">
            <td><i class="el-icon-mic-alt" style="color: greenyellow;font-size: 30px"></i></td>
            <td><h5>活动介绍</h5></td>
        </tr>
    </table>
</div>
<div class="container">

    <div class="list-group">
        <a href="#" class="list-group-item yue">
            <div class="row">
                <div class="col-xs-2 left"><i class="el-icon-mic-alt" style="color: greenyellow;font-size: 30px"></i></div>
                <div class="col-xs-10 right"><h5>活动介绍</h5></div>
            </div>
        </a>
        <a href="#" class="list-group-item orders">
            <div class="row">
                <div class="col-xs-2 left"><i class="el-icon-file-alt" style="color: orangered;font-size: 30px"></i></div>
                <div class="col-xs-10 right"><h5>我要报名</h5></div>
            </div>
        </a>
        <a href="#" class="list-group-item buycar">
            <div class="row">
                <div class="col-xs-2 left"><i class="el-icon-shopping-cart-sign" style="color: orange;font-size: 30px"></i></div>
                <div class="col-xs-10 right"><h5>排行榜</h5></div>
            </div>
        </a>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item ad">
            <div class="row">
                <div class="col-xs-2 left"><i class="el-icon-map-marker" style="color: lightgray;font-size: 30px"></i></div>
                <div class="col-xs-10 right"><h5>奖品介绍</h5></div>
            </div>
        </a>
        <a href="#" class="list-group-item user">
            <div class="row">
                <div class="col-xs-2 left"><i class="el-icon-user" style="color: lightgray;font-size: 30px"></i></div>
                <div class="col-xs-10 right"><h5>刷新</h5></div>
            </div>
        </a>
    </div>
</div>
<script>
    if(window.chrome) {
        $('.banner li').css('background-size', '100% 100%');
    }

    $('.banner').unslider({
        arrows: true,
        fluid: true,
        dots: true
    });

    //  Find any element starting with a # in the URL
    //  And listen to any click events it fires
    $('a[href^="#"]').click(function() {
        //  Find the target element
        var target = $($(this).attr('href'));

        //  And get its position
        var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

        //  jQuery will return false if there's no element
        //  and your code will throw errors if it tries to do .offset().left;
        if(pos) {
            //  Scroll the page
            $('html, body').animate({
                scrollTop: pos.top,
                scrollLeft: pos.left
            }, 1000);
        }

        //  Don't let them visit the url, we'll scroll you there
        return false;
    });


</script>
</body>
</html>