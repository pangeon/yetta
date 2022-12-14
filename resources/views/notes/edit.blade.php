@extends('layouts.main')

@section('content')

<section class="masthead page-section" id="contact">
    <div class="container">
        @auth
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">@lang('public.edit_note')</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" action="{{ route('notes.update', ['id' => $note->id]) }}" method="POST" data-sb-form-api-token="API_TOKEN">
                    
                    @method('PUT')
                    {{ csrf_field() }}

                    <div class="form-floating mb-3">
                        <input value="{{ $note -> title }}" class="form-control" id="title" name="title" type="text" />
                        <label for="name">@lang('public.title')</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $note -> author }}" class="form-control" id="author" name="author" type="text" />
                        <label for="author">@lang('public.author')</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ $note -> category }}" class="form-control" id="category" name="category" type="text" />
                        <label for="category">@lang('public.category')</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="body" name="body" type="text" style="height: 10rem">{{ $note -> body }}</textarea>
                        <label for="body">@lang('public.content')</label>
                    </div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">@lang('public.save_changes')</button>
                </form>
            </div>
        </div>
        
        @else

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="container vertial-middle">
               <div class="row align-items-center">
                   <div class="col-1">
                       <i style="font-size: 26px" class="fa-solid fa-circle-exclamation"></i>
                   </div>
                   <div class="col-11" style="text-align: center; font-weight: bolder">
                        @lang('public.access_denied')
                       <br />
                       <a href="/login" style="text-decoration: none">@lang('public.log_in')</a> 
                   </div>
               </div>
           </div>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
        @endauth
</section>

@endsection