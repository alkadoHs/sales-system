
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Logout successfully!!</title>
  <meta name="description" content="Tailwind Admin Template">

  <link rel="stylesheet" id="stylesheet" href="/css/style.css">

  <link rel="stylesheet" href="/css/customizer.css">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="/img/favicon.png">
</head>
<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-900">
  <!-- preloader -->
  <div class="preloader loaded-success fixed inset-0 bg-gray-100 dark:bg-gray-900">
    <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2">
      <div class="relative mx-auto my-12">
        <div class="inline-block">
          <svg class="animate-spin h-8 w-8 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          <!-- <i class="text-3xl text-indigo-500 fas fa-circle-notch fa-spin"></i> -->
        </div>
      </div>
    </div>
  </div>
  
  <header>
    <!-- Navbar -->
    <nav class="flex flex-row flex-nowrap items-center justify-between mt-0 py-4 px-6 border-b border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-800" id="desktop-menu">
      <!-- logo -->
      <a class="flex items-center py-2 mr-4 text-xl" href="/index-2.html">
        <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
          <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="/img/logo.png"> -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1" viewBox="0 0 300.000000 300.000000"> 
            <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
              <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
              -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
              -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
              5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
              58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
              465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"/>
              <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
              0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
              -687 428 -110 29 -111 28 -153 -37z"/>
              <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
              l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
              62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
              -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
              -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
              217 -10 16 -14 14 -45 -18z"/>
            </g>
          </svg><span class="text-gray-700 dark:text-gray-200">Taildash</span></h2>
      </a>

      <!-- menu -->
      <ul class="flex ltr:ml-auto rtl:mr-auto mt-2">
        <!-- Customizer (Only for demo purpose) -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-none" aria-controls="mobile-canvas" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
              <span class="sr-only">Customizer</span>
              <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
              </svg>
              <!-- <i class="text-2xl fas fa-cog"></i> -->
            </a>

            <!-- Right Offcanvas -->
            <div class="fixed w-full h-full inset-0 z-50" id="mobile-canvas" x-description="Mobile menu" x-show="open" style="display: none;">
              <!-- bg open -->
              <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

              <nav id="mobile-nav" class="flex flex-col ltr:right-0 rtl:left-0 w-72 fixed top-0 bg-white dark:bg-gray-800 h-full overflow-auto z-40 scrollbars show" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                <div class="p-6 bg-indigo-500 text-gray-100 border-b border-gray-200 dark:border-gray-700">
                  <div class="flex flex-row justify-between">
                    <h3 class="text-md font-bold">Customizer</h3>
                    <button @click="open = false" type="button" class="inline-block w-4 h-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block text-gray-100 bi bi-x-lg" viewBox="0 0 16 16" id="x-lg"><path d="M1.293 1.293a1 1 0 011.414 0L8 6.586l5.293-5.293a1 1 0 111.414 1.414L9.414 8l5.293 5.293a1 1 0 01-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 01-1.414-1.414L6.586 8 1.293 2.707a1 1 0 010-1.414z"></path></svg>
                      <!-- <i class="fas fa-times"></i> -->
                    </Button>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Color Scheme</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="lightdark" id="lightdark" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="lightdark" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Sidebar Color</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input type="checkbox" name="sidecolor" id="sidecolor" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="sidecolor" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Direction</p>
                  <div class="flex flex-row">
                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in">
                      <input  type="checkbox" name="rtlmode" id="rtlmode" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-2 dark:border-gray-700 appearance-none cursor-pointer"/>
                      <label for="rtlmode" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-700 cursor-pointer"></label>
                    </div>
                    <p class="text-sm text-gray-500 self-center">LTR and RTL</p>
                  </div>
                </div>
                <div class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Layout</p>
                  <div class="relative mb-3">
                    <a href="/index-2.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Default</a>
                    <a href="/layout-compact.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Compact</a>
                    <a href="/layout-topnav.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 dark:hover:bg-opacity-60 hover:text-indigo-500 hover:bg-gray-200 self-center">Topnav</a>
                  </div>
                </div>
                <div id="customcolor" class="py-3 px-6 border-b border-gray-200 dark:border-gray-700">
                  <p class="text-base text-semibold">Primary Color</p>
                  <div class="relative my-3">
                    <div id="custred" title="red" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-red-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custyellow" title="yellow" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-yellow-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custgreen" title="green" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-green-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custblue" title="blue" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-blue-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpurple" title="purple" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-purple-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custpink" title="pink" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-pink-500 hover:opacity-90 rounded-full cursor-pointer"></div>
                    <div id="custindigo" title="reset color" class="inline-block cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                    </svg></div>
                  </div>
                </div>
                <div class="pt-6 px-6">
                  <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-yellow-100 text-yellow-900 p-3 rounded-lg mb-4">
                    <div>
                      How to apply? please read the documentation on <a href="/docs/customize.html" class="underline font-semibold">Customize page</a>
                    </div>
                    <button type="button" @click="open = false">
                      <span class="text-2xl">×</span>
                      <!-- <i class="fas fa-times"></i> -->
                    </button>
                  </div>
                </div>
              </nav>
            </div>
          </li><!-- End Customizer (Only for demo purpose) -->

        <li class="relative">
          <a href="login-basic.html" class="py-3 px-4 flex hover:text-indigo-500 focus:outline-none">
            <div class="relative inline-block">Login</div>
          </a>
        </li>
        <li class="relative">
          <a href="register-basic.html" class="py-3 px-4 flex hover:text-indigo-500 focus:outline-none">
            <div class="relative inline-block">Register</div>
          </a>
        </li>
      </ul>
    </nav><!-- End Navbar -->
  </header>

  <main>
	  <!-- =========={ login }==========  -->
	  <div id="login-area" class="relative py-12 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40">
	    <div class="container xl:max-w-6xl mx-auto px-4">
	      <div class="flex flex-wrap flex-row -mx-4 justify-center">
	        <!-- login form -->
	        <div class="max-w-full w-full md:w-2/3 lg:w-1/2 px-6 sm:px-12">
	          <div class="relative">
	            <div class="p-6 sm:py-8 sm:px-12 rounded-lg bg-white dark:bg-gray-800 shadow-xl">
	            	<div class="text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-green-500 mx-auto w-16 h-16 mb-6 bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                  </svg>
									<h1 class="text-2xl font-bold mb-2">See You Again Boss😎!</h1>
									<p class="text-gray-500 mb-6">You are now successfully sign out.</p>
									<a href="/login" class="py-2 px-4 inline-block text-center mb-3 rounded leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                    <!-- <i class="fas fa-sign-in ltr:mr-2 rtl:ml-2"></i> -->
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
										  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
										</svg>Relogin
									</a>
								</div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div><!-- End login -->
	</main>

	<footer class="bg-white p-6 border-t border-gray-200 dark:bg-gray-800 dark:border-gray-800">
    <div class="mx-auto px-4">
      <div class="flex flex-wrap flex-row -mx-4">
        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-left md:rtl:text-right">
          <ul class="ltr:pl-0 rtl:pr-0">
            <li class="inline-block ltr:mr-3 rtl:ml-3">
              <a class="hover:text-indigo-500" href="#">Support</a>
            </li>
            <li class="inline-block ltr:mr-3 rtl:ml-3">
              <a class="hover:text-indigo-500" href="#">Help Center</a>
            </li>
            <li class="inline-block ltr:mr-3 rtl:ml-3">
              <a class="hover:text-indigo-500" href="#">Privacy</a>
            </li>
            <li class="inline-block ltr:mr-3 rtl:ml-3">
              <a class="hover:text-indigo-500" href="#">Terms of Service</a>
            </li>
          </ul>
        </div>
        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:ltr:text-right md:rtl:text-left">
          <p class="mb-0 mt-3 md:mt-0">
            <a href="/index-2.html" class="hover:text-indigo-500">Tailnet</a> | All right reserved
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!--start::Global javascript (used in all pages)-->
  <script src="/vendors/alpinejs/dist/cdn.min.js"></script><!-- core js -->
  <script src="/vendors/flatpickr/dist/flatpickr.min.js"></script><!-- input date -->
  <script src="/vendors/flatpickr/dist/plugins/rangePlugin.js"></script><!-- input range date -->
  <script src="/vendors/%40yaireo/tagify/dist/tagify.min.js"></script><!-- input tags -->
  <script src="/vendors/pristinejs/dist/pristine.min.js"></script><!-- form validation -->
  <script src="/vendors/simple-datatables/dist/umd/simple-datatables.js"></script><!--sort table-->

  <script src="/js/demo.js"></script>

  <script src="/js/customizer.js"></script>
</body>
</html>