@extends('layouts.main')

@section('content')
    <section class="masthead page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ $h2_title }}</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            
            @foreach ($notes as $note)
                <div class="toast fade show float-start" role="alert" aria-live="assertive" aria-atomic="true" style="margin-left: 20px; margin-top: 20px;">
                    <div class="toast-header">
                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
                
                    <strong class="me-auto">{{ $note->title }}</strong>
                    <small>{{ $note->date }}</small>
                    </div>
                    <div class="toast-body" style="text-align: justify;">
                        <button type="button" class="btn btn-primary" style="font-size: 10px; margin-bottom: 0.5rem;">
                            {{ $note->category }} 
                        </button>
                        <button type="button" class="btn btn-warning" style="font-size: 10px; margin-bottom: 0.5rem;">
                            {{ $note->author }} 
                        </button>
                        <br />
                        {{ $note->body }}
                        <div class="alert alert-danger" role="alert" style="font-size: 10px; margin-top: 0.5rem; padding: 0.4rem 0.4rem; text-align: center;">
                            {{ $note->secret_key }}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"></div>    
        </div>
    </section>
    
@endsection
