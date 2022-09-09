@extends('layouts.main')

@section('content')
<section class="masthead page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj notatkę</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" action="{{ route('notes.store') }}" method="POST" data-sb-form-api-token="API_TOKEN">

                    {{ csrf_field() }}

                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" name="title" type="text" required />
                        <label for="name">Tytuł</label>
                        <div class="invalid-feedback" data-sb-feedback="required">Pole jest wymagane</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="author" name="author" type="text" value="Kamil Cecherz" required />
                        <label for="author">Autor</label>
                        <div class="invalid-feedback" data-sb-feedback="required">Pole jest wymagane</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="category" name="category" type="text" required />
                        <label for="category">Kategoria</label>
                        <div class="invalid-feedback" data-sb-feedback="required">Pole jest wymagane
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="body" name="body" type="text" style="height: 10rem" required></textarea>
                        <label for="body">Treść notatki</label>
                        <div class="invalid-feedback" data-sb-feedback="required">Pole jest wymagane</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="secret_key" name="secret_key" type="text" required></input>
                        <label for="secret_key">Klucz wpisu</label>
                        <div class="invalid-feedback" data-sb-feedback="required">Pole jest wymagane</div>
                    </div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Wyślij</button>
                </form>
            </div>
        </div>
</section>
@endsection