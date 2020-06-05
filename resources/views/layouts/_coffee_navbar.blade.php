<div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12 col-12">
                <div class="logo">
                    <a href="/">
                        <img src="{{ URL::asset('img/all/logo-coffee.png') }}" alt="Sivahera Logo" height="150px">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-0 col-md-8 offset-md-2 col-sm-12 offset-sm-0 col-12">
                <div class="menu">
                    <nav id="mobile_menu_active">
                        <ul>
                            <li>
                                <a class="scroll" href="#a-propos">{{ __("A propos") }}</a>
                            </li>
                            <li>
                                <a class="scroll" href="#fonctionnement">{{ __("Points Clés") }}</a>
                            </li>
                            <li>
                                <a class="scroll" href="#cacao">{{ __("Le Cacao") }}</a>
                            </li>
                            <li>
                                <a href="{{ route('home_path') }}">{{ __("Activité Management") }}</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-12">
                <div class="search-consultant">
                    <div class="sc-consultant">
                        <a class="link" href="#">{{ __("Prendre contact") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>