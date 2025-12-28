<!doctype html>
<html lang="en" dir="{{ currentLanguage('direction') }}">

<head>
    <meta charset="UTF-8"/>
    <title>TeamTask</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- favicon icon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Simple Forms Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/hilara/entering3') }}/css/simple-forms.css">

    <!-- Used for demonstration purposes -->
    <link rel="stylesheet" href="{{ asset('vendor/hilara/entering3') }}/css/demo.css">

    <link rel="stylesheet" href="{{ asset('vendor/hilara') }}/css/general.css">


    @livewireStyles()

    @stack('styles')

</head>
<body class="{{ currentLanguage('direction') }}">

    <div id="my-modal" class="sf-modal">
        <div class="sf-modal-wrapper">
            <div class="sf-modal-content">
                <div class="sf-modal-closer">

                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                </div>

                <div class="sf-wrapper">
                    <form id="modal_form_example" class="simple-form white modern-rounded-style" method="post">
                        <div class="form-heading">
                            <h4>Modal Form</h4>
                            <p>
                                Request a call.
                            </p>
                        </div>

                        <label>
                            <input type="text" name="name" class="validate-name" placeholder="Your name*">
                        </label>

                        <label>
                            <input type="text" name="phone" class="validate-phone" placeholder="Your phone*">
                        </label>

                        <label>
                            <textarea name="message" placeholder="Notes..." title=""></textarea>
                        </label>

                        <div class="simple-captcha-wrapper"></div>

                        <div class="form-submit text-center">
                            <button type="submit">Send</button>
                        </div>

                        <div class="server-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="intro" class="simple-section">

        <div id="particles" class="particles"></div>

        <div id="main-sidebar" class="sidebar default custom-scrollbar scroll_y">
            <div class="sidebar-content">
                <div class="sidebar-section">
                    <h4>Themes</h4>

                    <ul id="set-color" class="set-color">
                        <li data-color-theme="white" class="set-form-theme">
                            <a href="#" class="no-click">White</a> <span class="color-item white"></span>
                        </li>
                        <li data-color-theme="faded-light" class="active set-form-theme">
                            <a href="#" class="no-click">Faded Light</a> <span class="color-item faded-light"></span>
                        </li>
                        <li data-color-theme="faded-dark" class="set-form-theme">
                            <a href="#" class="no-click">Faded Dark</a> <span class="color-item faded-dark"></span>
                        </li>
                        <li data-color-theme="dark" class="set-form-theme">
                            <a href="#" class="no-click">Dark</a> <span class="color-item dark"></span>
                        </li>
                        <li data-color-theme="purple" class="set-form-theme">
                            <a href="#" class="no-click">Purple</a> <span class="color-item purple"></span>
                        </li>
                        <li data-color-theme="red" class="set-form-theme">
                            <a href="#" class="no-click">Red</a> <span class="color-item red"></span>
                        </li>
                        <li data-color-theme="green" class="set-form-theme">
                            <a href="#" class="no-click">Green</a> <span class="color-item green"></span>
                        </li>
                        <li data-color-theme="blue" class="set-form-theme">
                            <a href="#" class="no-click">Blue</a> <span class="color-item blue"></span>
                        </li>
                        <li class="custom-color">
                            <div class="settings-field">
                                <strong>Custom Color</strong> <br>
                                <input type="color" id="custom-form-color" name="head" value="#ffffff" title="">
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-section">
                    <h4>Styles</h4>

                    <ul class="with-padding">
                        <li data-style="underline-style" class="active set-form-style">Underline</li>
                        <li data-style="classic-style" class="set-form-style">Classic</li>
                        <li data-style="classic-rounded-style" class="set-form-style">Classic Rounded</li>
                        <li data-style="modern-style" class="set-form-style">Modern</li>
                        <li data-style="modern-rounded-style" class="set-form-style">Modern Rounded</li>
                        <li data-style="none-style" class="set-form-style">None</li>
                    </ul>
                </div>

                <div class="sidebar-section">
                    <a class="tap green" href="../../codecanyon.net/item/ajax-contact-form-mobile-first/25185499.6.delayed" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18" height="18" ><circle fill="#ffffff" cx="176" cy="416" r="32"/><circle fill="#ffffff" cx="400" cy="416" r="32"/><path fill="#ffffff" d="M456.8 120.78a23.92 23.92 0 00-18.56-8.78H133.89l-6.13-34.78A16 16 0 00112 64H48a16 16 0 000 32h50.58l45.66 258.78A16 16 0 00160 368h256a16 16 0 000-32H173.42l-5.64-32h241.66A24.07 24.07 0 00433 284.71l28.8-144a24 24 0 00-5-19.93z"/></svg>
                        Buy Simple Forms
                    </a>

                    <div class="copy">&copy; 2021 - Simple Forms</div>
                </div>
            </div>
        </div>

        <div class="simple-container">
           {{ $slot }}
        </div>
    </div>



    <!-- JQUERY JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- PARTICLES.js - Particles Animation -->
    <script src="{{ asset('vendor/hilara/entering3') }}/js/particles.min.js"></script>

    <!-- DEMO.js - Used for demonstration purposes / -->
    <script src="{{ asset('vendor/hilara/entering3') }}/js/demo.js"></script>


    <!-- Message Box -->
    <script src="{{ asset('vendor/hilara/tools') }}/toasty/toasty.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/hilara/tools') }}/toasty/toasty.min.css">
    <script>
        const toasty = new Toasty({
            duration: 7000,
            transition: 'pinItUp',
            progressBar: true,
            enableSounds: true,
            autoClose: true,
            insertBefore: false,
            sounds: {
                info: "{{ asset('vendor/hilara/tools') }}/toasty/sounds/info/1.mp3",
                success: "{{ asset('vendor/hilara/tools') }}/toasty/sounds/success/1.mp3",
                warning: "{{ asset('vendor/hilara/tools') }}/toasty/sounds/warning/1.mp3",
                error: "{{ asset('vendor/hilara/tools') }}/toasty/sounds/error/1.mp3",
            },
        });
    </script>

    <script>
        Livewire.on('OnNotify', (data) => {
            if( data.type == null ) data.type = "success";

            if(data.type == 'success') toasty.success(data.text);
            if(data.type == 'error') toasty.error(data.text);
            if(data.type == 'info') toasty.info(data.text);
            if(data.type == 'warning') toasty.warning(data.text);

            /*
            notif({
                type: data.type,
                msg: data.text,
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


    </script>

    @livewireScripts()

</body>

</html>
