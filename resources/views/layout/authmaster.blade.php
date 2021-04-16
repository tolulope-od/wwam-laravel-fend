<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>WHERE WE ALL MEET » Login</title>
  <link rel="shortcut icon" href="/assets/img/favicon.ico">
  <meta name="description"
        content="Whereweallmeet.com a social dating platform that allows members to view local activities such as events, dating ideas and vacation packages and enjoy live dating agents to assist them in finding the perfect match.">
  <meta name="viewport" content="width=device-width">
  <meta name="keywords"
        content="DATING SITE, SOCIAL PLATFORM, DATING VIP VACATIONS, EVENTS, WOMEN, MEN, INTERNET DATING, SEARCH ENGINE, DATING CONCIERGE AGENT">

  <link type="text/css" rel="stylesheet" href="/assets/css/normalize.css?1570010589">
  <link type="text/css" rel="stylesheet" href="/assets/css/font-awesome.min.css?1570010584">
  <link type="text/css" rel="stylesheet" href="/assets/css/flowplayer/minimalist.css?1570010790">
  <link type="text/css" rel="stylesheet" href="/assets/css/style.css?1570010592">
  <link type="text/css" rel="stylesheet" href="/assets/css/chat.css?1570010582">
  <link type="text/css" rel="stylesheet" href="/assets/css/slimbox2.css?1570010592">
  <link type="text/css" rel="stylesheet" href="/assets/css/jquery-ui.css?1570010586">
  <link type="text/css" rel="stylesheet" href="/assets/css/jquery.Jcrop.min.css?1570010587">
  <link type="text/css" rel="stylesheet" href="/assets/css/users/login.css?1570010825">

  <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript" src="/assets/js/modernizr-2.6.2.min.js?1570010725"></script>
  <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js?1570010717"></script>
  <script type="text/javascript" src="/assets/js/jquery.min.js?1570010723"></script>
  <script type="text/javascript" src="/assets/js/jquery-ui.min.js?1570010721"></script>
  <script type="text/javascript" src="/assets/js/jquery.resizecrop-1.0.3.js?1570010723"></script>
  <script type="text/javascript" src="/assets/js/jquery.Jcrop.min.js?1570010720"></script>

  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald">
  <script src="/ckeditor/ckeditor.js" type="text/javascript"></script>
  <style>.cke {
          visibility: hidden;
      }</style>
{{--  <script src="/chat_server/node_modules/socket.io/node_modules/socket.io-client/dist/socket.io.js"--}}
{{--          type="text/javascript"></script>--}}
{{--  <script src="/chat_server/node_modules/node-uuid/uuid.js" type="text/javascript"></script>--}}
  <script type="text/javascript" src="/assets/js/facescroll.js?1570010715"></script>

  <script type="text/javascript" src="/assets/js/jtmyw.js?1570010724"></script>
  <script type="text/javascript" src="/assets/js/flowplayer/flowplayer.js?1570011142"></script>
  <script type="text/javascript" src="/assets/js/slimbox2.js?1570010726"></script>
  <script type="text/javascript" src="/assets/js/cookie.js?1570010715"></script>
  <script type="text/javascript" src="/assets/js/chat.js?1570010713"></script>
  <script type="text/javascript" src="/assets/js/member_interaction.js?1570010725"></script>
  <link href="{{ asset('assets/css/landing/ces.css') }}" rel="stylesheet">
  <style>
      /*! CSS Used from: http://52.34.139.80/assets/css/pages/bootstrap.min.css?1570010810 */
      a{background:0 0;}
      a:active,a:hover{outline:0;}
      strong{font-weight:700;}
      button,input,select{margin:0;font:inherit;color:inherit;}
      button{overflow:visible;}
      button,select{text-transform:none;}
      button{-webkit-appearance:button;cursor:pointer;}
      button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0;}
      input{line-height:normal;}
      @media print{
          *{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
          a,a:visited{text-decoration:underline;}
          a[href]:after{content:" (" attr(href) ")";}
          p,h2,h3{orphans:3;widows:3;}
          h2,h3{page-break-after:avoid;}
          select{background:#fff!important;}
      }
      *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
      :before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
      input,button,select{font-family:inherit;font-size:inherit;line-height:inherit;}
      a{color:#428bca;text-decoration:none;}
      a:hover,a:focus{color:#2a6496;text-decoration:underline;}
      a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
      h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
      h2,h3{margin-top:20px;margin-bottom:10px;}
      h2{font-size:30px;}
      h3{font-size:24px;}
      p{margin:0 0 10px;}
      .row{margin-right:-15px;margin-left:-15px;}
      .col-md-4,.col-md-5,.col-md-7,.col-md-8{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
      @media (min-width:992px){
          .col-md-4,.col-md-5,.col-md-7,.col-md-8{float:left;}
          .col-md-8{width:66.66666667%;}
          .col-md-7{width:58.33333333%;}
          .col-md-5{width:41.66666667%;}
          .col-md-4{width:33.33333333%;}
      }
      .modal-dialog{position:relative;width:auto;margin:10px;}
      .modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5);}
      .modal-header{min-height:16.43px;padding:15px;border-bottom:1px solid #e5e5e5;}
      .modal-body{position:relative;padding:15px;}
      @media (min-width:768px){
          .modal-dialog{width:600px;margin:30px auto;}
          .modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5);}
      }
      @media (min-width:992px){
          .modal-lg{width:900px;}
      }
      .clearfix:before,.clearfix:after,.row:before,.row:after{display:table;content:" ";}
      .clearfix:after,.row:after{clear:both;}
      /*! CSS Used from: http://52.34.139.80/assets/css/style.css?1570010592 */
      .clearfix{display:block;}
      .clearfix:after{content:" ";display:block;height:0;clear:both;overflow:hidden;visibility:hidden;}
      p{margin:0;}
      .yellow{color:#ffc841;}
      /*! CSS Used from: http://52.34.139.80/assets/css/pages/home.css?1570010810 */
      .clearfix{display:block;}
      .clearfix:after{content:" ";display:block;height:0;clear:both;overflow:hidden;visibility:hidden;}
      a{-moz-outline:none 0;outline:none 0;}
      .blue{color:#45b7d3;}
      .purple,.purple a{color:#c0417f!important;}
      .green{color:#34cf95;}
      .yellow{color:#f3b82a;}
      .modal-container{display:none;position:absolute;}
      .modal-dialog .modal-content .modal-header{background-color:#2f2f2f;}
      .modal-dialog .modal-content .modal-header{background:#2f2f2f;color:#fff;}
      .modal-privacy{max-height:500px;overflow-x:hidden;overflow-y:scroll;}
      .account-modal{top:190px!important;}
      .account-modal .modal-body{padding:0px 20px 0px 0px;overflow:hidden;}
      .account-modal .modal-header{background:#2f2f2f url(http://52.34.139.80/assets/img/pages/home2/color-small.jpg) repeat-x 100% 100%!important;min-height:5px;padding:0px;}
      .account-modal .modal-content{border-radius:0px!important;}
      .account-modal .col-md-7{min-height:500px;font-weight:bold;padding-right:0px;color:#fff;background:url(http://52.34.139.80/assets/img/pages/home2/popup-image.jpg) no-repeat;}
      .account-modal .col-md-7 h3{border-bottom:1px solid #fff;display:-webkit-flex;-webkit-justify-content:space-around;display:flex;justify-content:space-around;padding-bottom:5px;}
      #popup_one_text{background-color:rgba(0, 0, 0, 0.7);position:absolute;bottom:0px;padding:5px 15px;text-align:left;}
      .account-modal .col-md-5 .clearfix{margin-bottom:10px;}
      .account-modal .col-md-5 input{width:100%;padding:3px 10px;float:right;}
      .account-modal .col-md-5 select{padding:3px 8px;background-color:#fff;width:32%;}
      .account-modal .col-md-5 select:last-child{margin-left:0px;}
      .account-form h2{border-bottom:1px solid #bdbdbd;text-align:center;width:310px;margin:10px auto;}
      .col.account-form .col{min-height:none!important;}
      .col.account-form .row{margin-bottom:10px;}
      .col.account-form .row .col-md-4{text-align:right;padding-top:5px;}
      .col.account-form .row .col-md-8{padding-left:0px;padding-right:20px;}
      .col.account-form .row .col-md-8 button{background-color:#40b5d1;border:1px solid #40b5d1;color:white;text-transform:uppercase;width:80%;padding:5px 10px;font-weight:bold;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;}
      .col.account-form .row p{padding:20px 10px 20px 30px;}
  </style>
</head>


<body>
@yield('content')

</body>
</html>