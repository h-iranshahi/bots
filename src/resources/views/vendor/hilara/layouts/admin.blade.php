<!doctype html>
<html lang="en" dir="{{ currentLanguage('direction') }}">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- TITLE -->
    <title></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vendor/hilara/noa/assets/images/brand/favicon.ico') }}" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('vendor/hilara/noa/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/hilara/noa/assets/iconfonts/bootstrap-icons/icons/font/bootstrap-icons.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('vendor/hilara/noa/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/hilara/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/hilara/css/general.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/hilara/noa/assets/css/skin-modes.css') }}" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('vendor/hilara/noa/assets/plugins/icons/icons.css') }}" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('vendor/hilara/noa/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/hilara/noa/assets/switcher/demo.css') }}" rel="stylesheet">

    <!-- LIVEWIRE CSS -->
    @livewireStyles

    @stack('styles')


</head>

<body class="{{ currentLanguage('direction') }} app sidebar-mini light-mode">

    <!-- Switcher-->
    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3 d-grid gap-2">
                                <a href="https://laravelui.spruko.com/noa" class="btn ripple btn-primary mt-0"
                                    target="_blank">View Demo</a>
                                <a href="https://themeforest.net/item/noa-laravel-admin-template/38978033"
                                    class="btn ripple btn-secondary" target="_blank">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink"
                                    target="_blank">Our
                                    Portfolio</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Click Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Hover Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>LTR and RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">LTR Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch24" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="wpx-30 h-30 input-color-picker color-primary-light"
                                                value="#8FBD56" id="colorID" type="color" data-id="bg-color"
                                                data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor"
                                                name="lightPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="wpx-30 h-30 input-dark-color-picker color-primary-dark"
                                                value="#8FBD56" id="darkPrimaryColorID" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Custom Background</span>
                                        <div class="">
                                            <input
                                                class="wpx-30 h-30 input-transparent-color-picker color-bg-transparent"
                                                value="#8FBD56" id="transparentBgColorID" type="color"
                                                data-id5="body" data-id6="boxed-theme" name="transparentBackground">
                                        </div>
                                    </div>
                                    <div class="switch-toggle">
                                        <span class="">Background Image</span>
                                        <div class="mt-1">
                                            <a class="bg-img bg-img1" href="javascript:void(0);"><img
                                                    src="{{ asset('vendor/hilara/noa/assets/images/media/bg-img1.jpg') }}"
                                                    alt="Bg-Image" id="bgimage1"></a>
                                            <a class="bg-img bg-img2" href="javascript:void(0);"><img
                                                    src="{{ asset('vendor/hilara/noa/assets/images/media/bg-img2.jpg') }}"
                                                    alt="Bg-Image" id="bgimage2"></a>
                                            <a class="bg-img bg-img3" href="javascript:void(0);"><img
                                                    src="{{ asset('vendor/hilara/noa/assets/images/media/bg-img3.jpg') }}"
                                                    alt="Bg-Image" id="bgimage3"></a>
                                            <a class="bg-img bg-img4" href="javascript:void(0);"><img
                                                    src="{{ asset('vendor/hilara/noa/assets/images/media/bg-img4.jpg') }}"
                                                    alt="Bg-Image" id="bgimage4"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft menu-styles">
                            <h4>Menu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch3" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch19" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft header-styles">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightHeader d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch6" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>

                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch20" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch13" class="onoffswitch2-checkbox default-menu"
                                                checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Sidemenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch16" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch17" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu Style 1</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch18" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block resetCustomStyles" id="resetAll"
                                        type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <!-- Switcher-->

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('vendor/hilara/noa/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @livewire('hilara::components.navbar')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @livewire('hilara::components.sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="app-content main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER lara -->
                    @yield('content')

                    <!-- CONTAINER livewire -->
                    @if (isset($slot))
                        {{ $slot }}
                    @endif

                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>



        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        {{ translate("FOOTER_COPYRIGHT_TITLE") }}
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->

    </div>
    <!-- page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('vendor/hilara/js/select2.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Notification JS
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/notify/js/notifIt.js') }}"></script>
    -->

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/p-scroll/pscroll.js') }}"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/js/sticky.js') }}"></script>


    <!-- APEXCHART JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/js/apexcharts.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

    <!-- INTERNAL DATA-TABLES JS-->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INDEX JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/js/index1.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/js/index.js') }}"></script>

    <!-- Reply JS-->
    <script src="{{ asset('vendor/hilara/noa/assets/js/reply.js') }}"></script>


    <!-- COLOR THEME JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/js/custom.js') }}"></script>

    <!-- SWITCHER JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/switcher/js/switcher.js') }}"></script>

    <!-- Message Box -->
    <script src="{{ asset('vendor/hilara/tools/toasty/toasty.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/hilara/tools/toasty/toasty.min.css') }}">
    <script>
        const toasty = new Toasty({
            duration: 7000,
            transition: 'pinItUp',
            progressBar: true,
            enableSounds: true,
            autoClose: true,
            insertBefore: false,
            sounds: {
                info: "{{ asset('vendor/hilara/tools/toasty/sounds/info/1.mp3') }}",
                success: "{{ asset('vendor/hilara/tools/toasty/sounds/success/1.mp3') }}",
                warning: "{{ asset('vendor/hilara/tools/toasty/sounds/warning/1.mp3') }}",
                error: "{{ asset('vendor/hilara/tools/toasty/sounds/error/1.mp3') }}",
            },
        });
    </script>

    <script>

        document.addEventListener("DOMContentLoaded", (event) => {
            Livewire.on('OnNotify', (e) => {
            //window.addEventListener('OnNotify', e => {
                if(e[0].type == null) e[0].type = "success";

                if(e[0].type == 'success') toasty.success(e[0].text);
                if(e[0].type == 'error') toasty.error(e[0].text);
                if(e[0].type == 'info') toasty.info(e[0].text);
                if(e[0].type == 'warning') toasty.warning(e[0].text);

                /*
                notif({
                    type: e.type,
                    msg: e.text,
                    //width: "all",
                    //height: 70,
                    position: "center"
                });
                */

            })

            @if( session('success') )
            toasty.success('{{ session('success') }}');
            @endif
            @if( session('warning') )
            toasty.warning('{{ session('warning') }}');
            @endif
            @if( session('info') )
            toasty.info('{{ session('info') }}');
            @endif
            @if( session('error') )
            toasty.error('{{ session('error') }}');
            @endif
            

            Livewire.on('OnScriptRun', (e) => {
            //window.addEventListener('OnScriptRun', e => {
                eval(e.scriptContent);
            })
            
            Livewire.on('loadScript', (e) => {
            //window.addEventListener('loadScript', e =>{
                var scriptElement = document.createElement('script');
                if(e.script) scriptElement.textContent = e.script;
                if(e.src) scriptElement.src = e.src;
                document.body.appendChild(scriptElement);
            })
                    
        });
    </script>

    <script>

        document.body.addEventListener('click', function() {
            localStorage.setItem('scrollPosition', window.scrollY);
        });

        document.addEventListener('alpine:init', () => {
            // Restore the scroll position after the Livewire request is processed
            Livewire.hook('message.processed', (message, component) => {
                const scrollPosition = localStorage.getItem('scrollPosition');
                if (scrollPosition !== null) {
                    window.scrollTo(0, parseInt(scrollPosition, 10));
                    localStorage.removeItem('scrollPosition');
                }
            });
        });

    </script>

    <!-- LIVEWIRE JS -->
    @livewireScripts


    <!-- SCRIPTS -->
    @stack('scripts')





</body>


</html>
