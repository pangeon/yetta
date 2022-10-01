@extends('layouts.main')

@section('content')

<div class="container masthead" style="width: 60%">
    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-4 d-none d-lg-flex">
                <img src="{{ asset('assets/img/new_user.jpg') }}" alt="Lock"
                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-8">
                <div class="card-body py-5 px-md-5">
                    @guest
                    <form action="{{ route('auth.register') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-outline mb-4">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nazwa użytkownika" required />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Hasło" required />
                        </div>
                        <button type="submit" class="register-form-button btn btn-primary btn-block mb-4">@lang('public.sign_up')</button>
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection