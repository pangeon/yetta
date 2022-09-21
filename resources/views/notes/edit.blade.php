@extends('layouts.main')

@section('content')

<section class="masthead page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj notatkę</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        @auth
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" action="{{ route('notes.update', ['id' => $note->id]) }}" method="POST" data-sb-form-api-token="API_TOKEN">
                    
                    @method('PUT')
                    {{ csrf_field() }}

                    <div class="form-floating mb-3">
                        <input value="{{ $note -> title }}" class="form-control" id="title" name="title" type="text" />
                        <label for="name">Tytuł</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $note -> author }}" class="form-control" id="author" name="author" type="text" />
                        <label for="author">Autor</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $note -> category }}" class="form-control" id="category" name="category" type="text" />
                        <label for="category">Kategoria</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="body" name="body" type="text" style="height: 10rem">{{ $note -> body }}</textarea>
                        <label for="body">Treść notatki</label>
                    </div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Zapisz zmiany</button>
                </form>
            </div>
        </div>
        @endauth
</section>

@endsection