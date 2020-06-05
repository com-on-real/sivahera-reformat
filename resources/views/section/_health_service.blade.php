{{-- <script>
$('#scheadingTwo2').collapse('show')
</script> --}}

<div id="health_management" class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-12">
            <div class="section-title">
                <h2>{!! __("Management de la Santé") !!}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="bd-accordion">
                <div id="scaccordion2">
                    <div class="card">
                        <div class="card-header" id="scheadingOne2">
                            <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#sccollapseOne2" aria-expanded="true" aria-controls="sccollapseOne2">
                                {!! __("Management de la santé") !!}
                            </button>
                            </h5>
                        </div>
                        <div id="sccollapseOne2" class="collapse show" aria-labelledby="scheadingOne2" data-parent="#scaccordion2">
                            <div class="card-body">
                            <h5 class="ques"></h5>
                            <p class="ans">{!! __("health_management_text") !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="scheadingTwo2">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sccollapseTwo2" aria-expanded="false" aria-controls="sccollapseTwo2">
                                {!! __("Conseil") !!}
                            </button>
                            </h5>
                        </div>
                        <div id="sccollapseTwo2" class="collapse" aria-labelledby="scheadingTwo2" data-parent="#scaccordion2">
                            <div class="card-body">
                                <h5 class="ques"></h5>
                                <p class="ans">{!! __("consulting_text") !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="scheadingThree2">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sccollapseThree2" aria-expanded="false" aria-controls="sccollapseThree2">
                                {!! __("Courtage") !!}
                            </button>
                            </h5>
                        </div>
                        <div id="sccollapseThree2" class="collapse" aria-labelledby="scheadingThree2" data-parent="#scaccordion2">
                            <div class="card-body">
                                <h5 class="ques"></h5>
                                <p class="ans">{!! __("broker_text") !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="scheadingFour2">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sccollapseFour2" aria-expanded="false" aria-controls="sccollapseFour2">
                                {!! __("Vente dans le domaine de la santé") !!}
                            </button>
                            </h5>
                        </div>
                        <div id="sccollapseFour2" class="collapse" aria-labelledby="scheadingFour2" data-parent="#scaccordion2">
                            <div class="card-body">
                                <h5 class="ques"></h5>
                                <p class="ans">{!! __("health_sale_text") !!}</p>
                                <div class="about-tab">
                                    <div class="about-tab-box">
                                        <ul>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("thermometers") !!} </li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("aspiration") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("air_pump") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("hot_and_cold") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("hospital_mask") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("devices_as_sleep") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("other_material") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("protective_gowns") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("hygiene_gels") !!}</li>
                                            <li><span><i class="fas fa-check-circle"></i></span> {!! __("sterilization") !!}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>