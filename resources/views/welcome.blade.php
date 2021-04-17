<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <meta name="description"
            content="Whereweallmeet.com a social dating platform that allows members to view local activities such as events, dating ideas and vacation packages and enjoy live dating agents to assist them in finding the perfect match.">
      <meta name="viewport" content="width=device-width">
      <meta name="keywords"
            content="DATING SITE, SOCIAL PLATFORM, DATING VIP VACATIONS, EVENTS, WOMEN, MEN, INTERNET DATING, SEARCH ENGINE, DATING CONCIERGE AGENT">
      <script async="" src="//www.google-analytics.com/analytics.js"></script>
      <script type="text/javascript" src="/assets/js/modernizr-2.6.2.min.js?1570010725"></script>
      <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js?1570010717"></script>
      <script type="text/javascript" src="/assets/js/jquery.min.js?1570010723"></script>
      <script type="text/javascript" src="/assets/js/jquery-ui.min.js?1570010721"></script>
      <script type="text/javascript" src="/assets/js/jquery.resizecrop-1.0.3.js?1570010723"></script>
      <script type="text/javascript" src="/assets/js/jquery.Jcrop.min.js?1570010720"></script>

      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald">
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
      <script type="text/javascript" src="/assets/js/member_interaction.js?1570010725"></script>
        <title>WhereWeAllMeet</title>
    </head>
    <body>
    @yield('content')
{{--        <div id="app">--}}
{{--        </div>--}}
{{--      <script src="/js/app.js"></script>--}}
    <script>
      let toggleLoginMenu = function () {
        let dropDownMenu = document.getElementById('dropdown-menu');

        if (Array.from(dropDownMenu.classList).includes('hidden')) {
          return dropDownMenu.classList.remove('hidden');
        }
        return dropDownMenu.classList.add('hidden');
        // console.log(Array.from(dropDownMenu.classList).includes('hidden'));
      }
      let dropDownBtn = document.getElementById('dropdown-btn');
      let landingPage = document.getElementById('landing-page');
      dropDownBtn.onclick = toggleLoginMenu;
    </script>
        <script src="/assets/js/pages/home.js"></script>
    </body>
</html>
