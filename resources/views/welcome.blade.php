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
    <div id="landing-page">
      <div>
        <div>
          <div class="relative overflow-hidden h-full pb-8 lg:pb-0 md:h-screen lg:h-3/4"><img
              src="/img/Reunions-and-Group-Travel.jpg" alt="WWAM Backdrop image" lazy="true"
              class="absolute h-full w-full object-cover">
            <div class="inset-0 absolute"
                 style="backdrop-filter: blur(7px); background: rgba(0, 0, 0, 0.25); box-shadow: rgba(31, 38, 135, 0.37) 0px 8px 32px 0px;"></div>
            <header class="absolute top-0 left-0 right-0 z-20">
              <nav class="container mx-auto px-6 md:px-12 py-4">
                <div class="md:flex justify-between items-center">
                  <div class="flex justify-between items-center"><a href="#" class="text-white hidden md:block"><img
                        src="/img/logo.png" alt="Where We All Meet Logo" class="w-1/4"></a></div>
                  <div class="flex md:flex-row justify-between w-full lg:w-1/2 items-center">
                    <div class="hidden md:block text-white"><h3
                        class="font-semibold py-8 md:py-0 md:text-sm lg:text-base xl:text-lg"><span class="">The New Place to...</span><span
                          class="text-wwam-blue">Connect,</span> Share <span class="text-wwam-pink">Experiences,</span> and
                        <span class="text-wwam-green">Explore</span> Dating<span class="text-wwam-yellow">Ideas</span></h3>
                    </div>
                    <a href="#" class="md:hidden text-white"><img src="/img/logo.png" alt="Where We All Meet Logo"
                                                                  class="w-1/4"></a>
                    <div class="relative inline-block text-left">
                      <div>
                        <button id="dropdown-btn" type="button"
                                class="underline bg-transparent dark:bg-gray-800 flex items-center justify-center w-full rounded-md  px-4 py-2 text-lg font-bold text-gray-100 dark:text-gray-50 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-500">
                          Login
                          <svg class="ml-2 pt-0.5" width="24" height="24" fill="currentColor"
                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                          </svg>
                        </button>
                      </div>
                      <div id="dropdown-menu"
                           class="hidden origin-top-right shadow-md border border-gray-300 absolute right-0 mt-2 w-72 rounded-md bg-white dark:bg-gray-800">
                        <div class="p-6" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                          <div class="self-center mb-6 text-lg font-medium text-gray-600 dark:text-white">Login To Your
                            Account
                          </div>
                          <div class="mt-8">
                            <form action="#" autocomplete="off">
                              <div class="flex flex-col mb-2">
                                <div class="flex relative "><span
                                    class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm"><svg
                                      width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792"
                                      xmlns="http://www.w3.org/2000/svg"><path
                                        d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z"></path></svg></span><input
                                    type="text" id="sign-in-email"
                                    class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-wwam-blue focus:border-transparent"
                                    placeholder="Your email"></div>
                              </div>
                              <div class="flex flex-col mb-6">
                                <div class="flex relative "><span
                                    class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm"><svg
                                      width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792"
                                      xmlns="http://www.w3.org/2000/svg"><path
                                        d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z"></path></svg></span><input
                                    type="password" id="sign-in-password"
                                    class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-wwam-blue focus:border-transparent"
                                    placeholder="Your password"></div>
                              </div>
                              <div class="flex items-center mb-6 -mt-4">
                                <div class="flex ml-auto"><a href="#"
                                                             class="inline-flex text-xs font-thin text-gray-500 sm:text-sm dark:text-gray-100 hover:text-gray-700 dark:hover:text-white">Forgot
                                    Your Password?</a></div>
                              </div>
                              <div class="flex w-full"><a href="/login" type="button"
                                                          class="btn rounded-md w-full border-wwam-blue bg-wwam-blue hover:text-wwam-blue hover:bg-transparent hover:border-wwam-blue">Login</a>
                              </div>
                            </form>
                          </div>
                          <div class="flex items-center justify-center mt-6"><a href="#" target="_blank"
                                                                                class="inline-flex items-center text-xs font-thin text-center text-gray-500 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white"><span
                                class="ml-2">You don't have an account?</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </header>
            <div class="container mx-auto px-6 md:px-12 relative z-10 flex flex-col lg:flex-row lg:justify-evenly md:py-28">
              <div
                class="w-full flex flex-col space-y-4 pt-4 md:pt-0 mt-20 mb-16 md:space-y-8 md:my-20 lg:my-auto relative z-10">
                <div class="text-4xl md:text-7xl text-white"><h1 class="leading-tight font-light">Meet Someone</h1>
                  <h1 class="italic my-2 font-bold">New Today.</h1></div>
                <div class="block w-1/12">
                  <hr class="border-2 border-wwam-blue">
                </div>
                <div class="block mt-24 text-lg md:text-xl text-white">Starts with <span
                    class="font-bold">friendship.</span> Ends with the <span class="font-bold">perfect match.</span></div>
                <div class="block pt-16 text-lg md:text-xl text-white flex flex-row space-x-6"><img
                    src="/img/PROFILE VERIFIED.png" alt="Profile Verified"><img src="/img/PROFILE VERIFIED.png"
                                                                                alt="Profile Verified"></div>
              </div>
              <div class="flex flex-col w-full lg:w-1/2 mx-auto space-y-2 md:space-y-8 lg:space-y-5">
                <div class="flex flex-col text-white space-y-2 text-2xl"><span>GET <span
                      class="italic font-bold">started</span> NOW <span class="italic font-bold">free</span></span>
                  <div class="block w-1/12">
                    <hr class="border-2 border-wwam-blue">
                  </div>
                </div>
                <div class="flex flex-col space-y-2"><label for="gender" class="text-white font-bold">I'm A:</label><select
                    id="gender" class="select select-bordered focus:ring-wwam-blue rounded-md w-full max-w-md">
                    <option selected="">Female</option>
                    <option>Male</option>
                  </select></div>
                <div class="flex flex-col space-y-2"><label for="opposite-gender" class="text-white font-bold">Looking For
                    A:</label><select id="opposite-gender"
                                      class="select select-bordered focus:ring-wwam-blue rounded-md w-full max-w-md">
                    <option selected="">Male</option>
                    <option>Female</option>
                  </select></div>
                <div class="flex flex-col space-y-2"><label for="looking-for" class="text-white font-bold">I'm Interested
                    In:</label><select id="looking-for"
                                       class="select select-bordered focus:ring-wwam-blue rounded-md w-full max-w-md">
                    <option selected="">Dating</option>
                    <option>Marriage</option>
                  </select></div>
                <div class="space-y-2"><label class="flex items-center space-x-3 mb-3">
                    <div class="bg-gray-100 rounded-md"><input type="checkbox" class="checkbox checkbox-accent"><span
                        class="checkbox-mark"></span></div>
                    <span class="text-gray-200 dark:text-white w-full lg:w-full md:w-1/2 xl:w-3/4">I agree to the <span
                        class="underline">Terms &amp; Conditions</span> and I have read and understood our <span
                        class="underline">Privacy Policy.</span></span></label></div>
                <div class="w-full max-w-md space-y-2">
                  <button id="step_zero"
                          class="btn rounded-md w-full border-wwam-blue bg-wwam-blue hover:bg-transparent hover:border-white">
                    Join Now
                  </button>
                </div>
                <div class="space-y-2 text-white text-center w-full md:w-3/4 lg:w-full max-w-md"><span
                    class="block mr-auto text-center">Are you a Matchmaker? <span
                      class="underline">Become a Dating Agent</span></span></div>
              </div>
            </div>
          </div>
          <div class="container bg-white mx-auto px-6 md:px-12 py-20"><span
              class="block text-3xl md:text-6xl text-center"><h1 class="text-center inline-block">Welcome to</h1><span
                class="font-bold"> WhereWeAllMeet</span></span>
            <div class="block w-full py-8" style="padding-left: 45%; padding-right: 45%;">
              <hr class="border-2 border-wwam-blue">
            </div>
            <div class="text-center leading-loose px-12">The world's newest platform for online dating, exclusive event
              booking, real-time dating concierge, and vacation get-away packages. With our innovative web software
              features. WhereWeAllMeet gives you the ability to connect with people no matter where you are. Sit back and
              connect while our WhereWeAllMeet team provides you with a variety of dating ideas, group event, and vacation
              packages that are guaranteed to bring some fun and excitement into your life.
            </div>
          </div>
          <div class="py-8 w-full">
            <div class="bg-white dark:bg-gray-800 rounded-lg">
              <div class="flex items-center flex-col md:flex-row justify-evenly w-full">
                <div class="p-4">
                  <div class="text-center mb-4 opacity-90"><a href="#" class="block relative"><img alt="find friends"
                                                                                                   src="/img/icon_friends11.png"
                                                                                                   class="mx-auto object-cover rounded-full h-40 w-40 "></a>
                  </div>
                  <div class="text-center"><p class="text-2xl text-gray-800 dark:text-white">Find <span
                        class="font-extrabold">Friends.</span></p></div>
                </div>
                <div class="p-4">
                  <div class="text-center mb-4 opacity-90"><a href="#" class="block relative"><img alt="profil"
                                                                                                   src="/img/icon_friends11.png"
                                                                                                   class="mx-auto object-cover rounded-full h-40 w-40 "></a>
                  </div>
                  <div class="text-center"><p class="text-2xl text-gray-800 dark:text-white">Ideal <span
                        class="font-extrabold">Matches.</span></p></div>
                </div>
                <div class="p-4">
                  <div class="text-center mb-4 opacity-90"><a href="#" class="block relative"><img alt="profil"
                                                                                                   src="/img/icon_friends11.png"
                                                                                                   class="mx-auto object-cover rounded-full h-40 w-40 "></a>
                  </div>
                  <div class="text-center"><p class="text-2xl text-gray-800 dark:text-white">Explore <span
                        class="font-extrabold">Events.</span></p></div>
                </div>
                <div class="p-4">
                  <div class="text-center mb-4 opacity-90"><a href="#" class="block relative"><img alt="profil"
                                                                                                   src="/img/icon_friends11.png"
                                                                                                   class="mx-auto object-cover rounded-full h-40 w-40 "></a>
                  </div>
                  <div class="text-center"><p class="text-2xl text-gray-800 dark:text-white">Concierge <span
                        class="font-extrabold">Agents.</span></p></div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 w-full pb-16 dark:bg-gray-800">
            <div class="container mx-auto px-6 md:px-12 py-20">
              <div class="">
                <div
                  class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                  <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl lg:px-16 w-1/2"><span
                      class="block">Want to be millionaire ?</span><span
                      class="block text-indigo-500">It's today or never.</span></h2>
                  <div class="lg:mt-0 lg:flex-shrink-0 lg:px-16 w-1/3">
                    <div class="space-y-6">
                      <div class="flex flex-row">
                        <svg class="-z-10 w-20 p-1 h-20 text-wwam-blue" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor" style="transform: rotate(0deg) scaleX(-1);">
                          <path fill-rule="evenodd"
                                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="absolute right z-50 p-2 w-16 h-16 text-wwam-blue" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor" style="right: 24.525%;">
                          <path class="stroke-1" fill-rule="evenodd"
                                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                      </div>
                      <div class="text-3xl md:text-5xl leading-loose space-y-4"><h3>Connect With</h3>
                        <div class="font-bold">Friends.</div>
                        <p class="text-sm leading-normal text-gray-600 my-2">Every great relationship starts with
                          friendship. By connecting with people and building a social community, you enhance your chances to
                          meet the perfect match.</p></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container mx-auto px-6 md:px-12 py-20">
              <div class="container mx-auto"><img src="/img/colorc148.jpg" alt="Ally" class="w-full"></div>
              <div class="" style="border: 65px solid rgb(31, 31, 31);">
                <div
                  class="md:flex bg-gray-50 md:items-center lg:justify-evenly w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                  <div class="md:mt-0 md:flex-shrink-0 md:px-10 lg:px-16 md:w-1/2">
                    <div class="space-y-6">
                      <div class="text-3xl md:text-5xl lg:text-6xl leading-loose space-y-6">
                        <svg class="h-28 w-28 text-red-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="#DC2626">
                          <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3>Find Your</h3>
                        <div class="font-bold">Match.</div>
                        <p class="text-base leading-normal text-gray-600 my-2">Nothing Beats the feeling of love! We offer
                          the opportunity to find that special person you can't live without.</p></div>
                    </div>
                  </div>
                  <span class="block w-1/3"><img src="/img/profile cards graphic.png" alt="Call cards" class=""></span>
                </div>
              </div>
            </div>
            <div class="container mx-auto px-6 lg:p-20 py-20">
              <div class="">
                <div
                  class="md:flex md:items-center lg:justify-between w-full mx-auto py-2 md:py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
              <span class="block w-full md:w-1/2 items-center justify-center flex"><img src="/img/image collage sm.png"
                                                                                        alt="Call cards"
                                                                                        class=""></span>
                  <div class="lg:mt-0 lg:flex-shrink-0 lg:px-16 md:w-1/2">
                    <div class="space-y-6 md:ml-2 lg:ml-0">
                      <div class="text-3xl md:text-5xl lg:text-6xl space-y-4">
                        <svg fill="#34cf95" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-16 h-16">
                          <path
                            d="M 5 0 L 5 4 L 7 4 L 7 0 Z M 17 0 L 17 4 L 19 4 L 19 0 Z M 1 3 C 0.449219 3 0 3.449219 0 4 L 0 7 C 0 7.550781 0.449219 8 1 8 L 1 24 L 23 24 L 23 8 C 23.550781 8 24 7.550781 24 7 L 24 4 C 24 3.449219 23.550781 3 23 3 L 20 3 L 20 5 L 16 5 L 16 3 L 8 3 L 8 5 L 4 5 L 4 3 Z M 3 8 L 21 8 L 21 22 L 3 22 Z M 5 10 L 5 12 L 7 12 L 7 10 Z M 9 10 L 9 12 L 11 12 L 11 10 Z M 13 10 L 13 12 L 15 12 L 15 10 Z M 17 10 L 17 12 L 19 12 L 19 10 Z M 5 14 L 5 16 L 7 16 L 7 14 Z M 9 14 L 9 16 L 11 16 L 11 14 Z M 13 14 L 13 16 L 15 16 L 15 14 Z M 17 14 L 17 16 L 19 16 L 19 14 Z M 5 18 L 5 20 L 7 20 L 7 18 Z M 9 18 L 9 20 L 11 20 L 11 18 Z M 13 18 L 13 20 L 15 20 L 15 18 Z M 17 18 L 17 20 L 19 20 L 19 18 Z"></path>
                        </svg>
                        <h3 class="">Explore Fun</h3>
                        <div class="font-bold">Events.</div>
                        <p class="text-base leading-normal text-gray-600">Everyone enjoys doing something! Our exclusive
                          events will get you out of the house and having fun with people that share your interest.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=""><img src="/img/colorc148.jpg" alt="Ally" class="w-full"></div>
            <div class="container mx-auto px-6 lg:px-12 py-20">
              <div class="">
                <div
                  class="md:flex bg-gray-50 md:items-center lg:justify-evenly w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                  <div class="md:mt-0 md:flex-shrink-0 md:px-10 lg:px-16 md:w-1/2">
                    <div class="md:space-y-3">
                      <div class="text-3xl md:text-5xl lg:text-6xl leading-loose 2xl:space-y-6">
                        <svg class="h-20 w-20" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="17" cy="17" r="17" fill="#050505"></circle>
                          <g clip-path="url(#clip0)">
                            <path
                              d="M21.6516 16.4757L15.8265 12.2414C15.6128 12.0864 15.329 12.0631 15.0947 12.1835C14.8585 12.303 14.711 12.5457 14.711 12.808V21.274C14.711 21.5391 14.8585 21.7808 15.0947 21.9003C15.1946 21.9507 15.3038 21.9759 15.4139 21.9759C15.5577 21.9759 15.7033 21.9302 15.8265 21.8397L21.6516 17.609C21.8355 17.4737 21.9428 17.2646 21.9428 17.0424C21.9438 16.8165 21.8336 16.6083 21.6516 16.4757Z"
                              fill="white"></path>
                            <path
                              d="M17.0251 3C9.27706 3 2.99832 9.27874 2.99832 17.0268C2.99832 24.7721 9.27706 31.049 17.0251 31.049C24.7713 31.049 31.051 24.7711 31.051 17.0268C31.0519 9.27874 24.7713 3 17.0251 3ZM17.0251 28.7087C10.5728 28.7087 5.34141 23.4801 5.34141 17.0268C5.34141 10.5763 10.5728 5.34122 17.0251 5.34122C23.4766 5.34122 28.707 10.5754 28.707 17.0268C28.7079 23.4801 23.4766 28.7087 17.0251 28.7087Z"
                              fill="white"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0">
                              <rect width="30.051" height="30.051" fill="white" transform="translate(1 1)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                        <h3>Experience</h3>
                        <div class="font-bold 2xl:m-0">Video Dating.</div>
                        <p class="text-base leading-normal mt-5 2xl:mt-0 text-gray-600">Upgrade your membership to premium
                          and get to know each other safely and securely with WhereWeAllMeet's brand new Video Date
                          features. Reinvent the first day for maximum convenience, by saying hello without leaving your
                          home.</p></div>
                    </div>
                  </div>
                  <span class="block w-full mt-8 md:mt-0 md:w-1/3"><img src="/img/video graphic.png" alt="Call cards"
                                                                        class=""></span></div>
              </div>
            </div>
            <div class="container mx-auto px-6 md:px-36 py-20">
              <div class="flex items-center">
                <div class="md:flex md:flex-row w-full bg-wwam-black p-8 md:p-0 text-gray-100">
                  <div class="lg:py-5 px-7 2xl:py-12 text-center md:text-left w-full md:w-1/2">
                    <div class="text-3xl md:text-3xl xl:text-5xl space-y-6"><img src="/img/dating agent-icon.png"
                                                                                 class="w-20 h-auto"
                                                                                 alt="Dating Agent Icon">
                      <h3>Hire A Concierge</h3>
                      <div class="font-bold">Dating Agent.</div>
                      <p class="text-sm leading-normal text-gray-300 my-2">Finding the right match can take a lot of time.
                        Our professional dating consultants do the groundwork for you, so your time can be spent
                        experiencing what your match has to offer in real life!</p><span class="text-base text-gray-300">Are you a natural Matchmaker? <span
                          class="text-wwam-yellow font-bold">Become A Dating Agent</span></span></div>
                  </div>
                  <div class="w-1/2"><img class="hidden md:block h-auto md:rounded-none rounded-full mx-auto"
                                          src="/img/dating-agent.jpg" alt="dating agent"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full pt-2 text-2xl">
          <div class=""><img src="/img/colorc148.jpg" alt="Ally" class="w-full"></div>
          <div class="w-full text-gray-50 p-6 bg-wwam-black flex flex-col md:flex-row justify-around">
            <div class="w-1/2 font-light">
              <div class="items-stretch lg:flex"><a
                  class="btn btn-ghost btn-sm rounded-btn normal-case font-medium">Home</a><span class="text-lg">.</span><a
                  class="btn btn-ghost btn-sm normal-case font-medium">Portfolio</a><span class="text-lg">.</span><a
                  class="btn btn-ghost btn-sm normal-case font-medium">About</a><span class="text-lg">.</span><a
                  class="btn btn-ghost btn-sm normal-case font-medium">Contact</a><span class="text-lg">.</span></div>
            </div>
            <div class="md:w-1/3 lg:w-1/6 flex flex-row justify-between"><img src="/img/PROFILE VERIFIED.png"
                                                                              alt="Profile Verified"><img
                src="/img/PROFILE VERIFIED.png" alt="Profile Verified"></div>
          </div>
        </div>
      </div>
    </div>
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
