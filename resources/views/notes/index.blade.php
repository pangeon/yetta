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
                {{ $note->id }}<br />
                {{ $note->title }}<br />
                {{ $note->author }}<br />
                {{ $note->category }}<br />
                {{ $note->date }}<br />
                {{ $note->body }}<br />
                {{ $note->secret_key }}
            @endforeach
        </div>
    </section>
@endsection