<div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12 col-12">
                <div class="logo">
                    <a class="scroll" href="#about">
                        <img src="{{ URL::asset('img/all/logo.png') }}" alt="Sivahera Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-0 col-md-8 offset-md-2 col-sm-12 offset-sm-0 col-12">
                <div class="menu">
                    <nav id="mobile_menu_active">
                        <ul>
                            <li>
                                <a class="scroll" href="#courtage">{{ __("Courtage") }}</a>
                            </li>
                            <li>
                            <a class="scroll" href="#health_management">{{ __("Santé")}}</a>
                                <ul class="drop">
                                    <li>
                                        <a class="scroll" href="">{{ __("Management de la Santé ") }}</a>
                                    </li>
                                    <li>
                                        <a class="scroll" href="">{{ __("Conseil") }}</a>
                                    </li>
                                    <li>
                                        <a class="scroll" href="">{{ __("Broker - Courtage") }}</a>
                                    </li>
                                    <li>
                                        <a class="scroll" href="">{{ __("Vente dans le domaine de la santé") }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scroll" href="#teams">{{ __("Equipe et partenaire") }}</a>
                            </li>
                            <li>
                                <a href="{{ route('coffee_path') }}">{{ __("Activité café") }}</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-12">
                <div class="search-consultant">
                    <div class="sc-consultant">
                        <a class="link scroll" href="#contact">{{ __("Prendre contact") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>