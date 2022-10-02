@extends('layouts.main')

@section('content')

<div class="container masthead">
    <div class="row text-center">
        <div class="col">
            <h1>@lang('public.changelog')</h1>
        </div>
    </div>
    <br />
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                @lang('public.version') 1.0
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i>
                            &nbsp;&nbsp;
                            @lang('public.ver_1_changelog_ptr_1')
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i>
                            &nbsp;&nbsp;
                            @lang('public.ver_1_changelog_ptr_2')
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i>
                            &nbsp;&nbsp;
                            @lang('public.ver_1_changelog_ptr_3')
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                @lang('public.version') 1.1
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                &nbsp;&nbsp;
                                @lang('public.ver_11_changelog_ptr_1')
                                <span class="badge bg-danger bagde-changelog">@lang('public.version') 1.0.5</span>
                            </li>                        
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                &nbsp;&nbsp;
                                @lang('public.ver_11_changelog_ptr_2')
                                <span class="badge bg-danger bagde-changelog">@lang('public.version') 1.1.0</span>
                            </li>                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                @lang('public.version') 1.2<span class="badge bg-secondary bagde-changelog">@lang('public.in_progress')</span>
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-sync-alt text-primary"></i>
                                &nbsp;&nbsp;
                                @lang('public.ver_12_changelog_ptr_1')
                            </li>   
                            <li class="list-group-item">
                                <i class="fas fa-sync-alt text-primary"></i>
                                &nbsp;&nbsp;
                                @lang('public.ver_12_changelog_ptr_2')
                            </li>   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    @lang('public.information')
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>@lang('public.version') @lang('public.app'):</strong> {{ $version }}</li>
                        
                        <li class="list-group-item"><strong>@lang('public.version') PHP:</strong> {{ phpversion(); }}</li>
                        
                        <li class="list-group-item">
                            <strong>@lang('public.libs'):</strong>
                        @foreach (get_loaded_extensions(); as $i)
                            {{ $i }},
                        @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection