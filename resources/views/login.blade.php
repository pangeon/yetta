@extends('layouts.main')

@section('content')

<div class="container masthead" style="width: 60%">
    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-4 d-none d-lg-flex">
                <img src="{{ asset('assets/img/lock.jpg') }}" alt="Lock"
                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-8">
                <div class="card-body py-5 px-md-5">
                    @if (empty($_SESSION['user']))
                    <form action="{{ asset('php/login.php') }}" method="POST">
                        <div class="form-outline mb-4">
                            <input type="email" id="login-email" name="login-email" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Hasło" />
                        </div>
                        <button type="submit" class=" login-form-button btn btn-primary btn-block mb-4">Zaloguj</button>
                    </form>
                    @else
                        <p>Zalogowano</p>
                    @endif                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection