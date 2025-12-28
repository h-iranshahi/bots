<div class="sticky">
    <!-- The whole world belongs to you. -->
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar ps ps--active-y">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="" class="header-brand-img desktop-logo" alt="logo">
                <img src="" class="header-brand-img toggle-logo" alt="logo">
                <!--
                <img src="" class="header-brand-img light-logo" alt="logo">
                
                <img src="{{ asset('vendor/hilara/images/logo-dark.png') }}" class="header-brand-img light-logo1" alt="logo">
                -->
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                     width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/>
                </svg>
            </div>
            <ul class="side-menu">

                @foreach($this->menuList as $group)
                    <li>
                        <h3>{{ $group['title'] }}</h3>
                    </li>
                    @foreach($group['items'] as $item)
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide"
                            href="{{ $item['url'] }}">
                                <i class="icon {{ $item['class'] ?? 'fe fe-copy' }} mx-2" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="icon-people" aria-label="icon-people"></i>
                                <span class="side-menu__label">{{ $item['title'] }}</span>
                            </a>
                        </li>    
                    @endforeach
                @endforeach
 
                
            </ul>

            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                     width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/>
                </svg>
            </div>
        </div>
    </div>
</div>
