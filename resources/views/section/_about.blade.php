<!-- about-tab-area-start -->
<div id="about" class="about-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-12">
                <div class="section-title">
                    <h2>{{ __("Management Et Conseil") }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="about-tab-img">
                <img src="{{ URL::asset('img/management/reunnion.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="about-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link" id="nav-mission-tab" data-toggle="tab" href="#nav-mission" role="tab" aria-controls="nav-mission" aria-selected="true">{{__("A propos")}}</a>
                            <a class="nav-item nav-link  active" id="nav-vision-tab" data-toggle="tab" href="#nav-vision" role="tab" aria-controls="nav-vision" aria-selected="false">{{__("Competance")}}</a>
                            <a class="nav-item nav-link" id="nav-values-tab" data-toggle="tab" href="#nav-values" role="tab" aria-controls="nav-values" aria-selected="false">{{__("Atouts")}}</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                            <div class="about-tab-box">
                                <p>{{ __("about_text") }}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            <div class="about-tab-box">
                                <ul>
                                    <li><span><i class="fas fa-check-circle"></i></span> {{ __("conquest_new_markets") }} </li>
                                    <li><span><i class="fas fa-check-circle"></i></span> {{ __("setting_up_supporting") }}</li>
                                    <li><span><i class="fas fa-check-circle"></i></span> {{ __("out_sourcing") }}</li>
                                    <li><span><i class="fas fa-check-circle"></i></span> {{ __("organization_and_administration") }}</li>
                                    <li><span><i class="fas fa-check-circle"></i></span> {{ __("normative_framework") }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-values" role="tabpanel" aria-labelledby="nav-values-tab">
                            <div class="about-tab-box">
                                <p>{{ __("competance_text") }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>