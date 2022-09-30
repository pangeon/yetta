@php
$version = '1.0.5';
@endphp

@extends('layouts.main')

@section('content')

<div class="container masthead">
    <div class="row text-center">
        <div class="col">
            <h1>Changelog</h1>
        </div>
    </div>
    <br />
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Wersja 1.0
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i>
                            &nbsp;&nbsp;
                            Pierwsza zabezpieczona wersja aplikacji.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i>
                            &nbsp;&nbsp;
                            Możliwość widoku notatek dla gości.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success"></i>
                            &nbsp;&nbsp;
                            Edycja danych tylko przez właściciela aplikacji.
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Wersja 1.1&nbsp;<span class="badge bg-secondary bagde-changelog">w trakcie realizacji</span>
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                &nbsp;&nbsp;
                                Możliwość rejestracji nowych użytkowników.
                                <span class="badge bg-danger bagde-changelog">Wersja 1.0.5</span>
                            </li>                        
                            <li class="list-group-item">
                                <i class="fas fa-sync-alt text-primary"></i>
                                &nbsp;&nbsp;
                                Dodanie wersji językowych: angielski.
                            </li>                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Wersja 1.2<span class="badge bg-secondary bagde-changelog">w trakcie realizacji</span>
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-sync-alt text-primary"></i>
                                &nbsp;&nbsp;
                                Osobna przestrzeń robocza dla każdego użytkownika aplikacji.
                            </li>   
                            <li class="list-group-item">
                                <i class="fas fa-sync-alt text-primary"></i>
                                &nbsp;&nbsp;
                                Opcja przypominania hasła na podstawie adresu e-mail.
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
                    Informacje
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Wersja aplikacji:</strong> {{ $version }}</li>
                        
                        <li class="list-group-item"><strong>Wersja PHP:</strong> {{ phpversion(); }}</li>
                        
                        <li class="list-group-item">
                            <strong>Biblioteki:</strong>
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