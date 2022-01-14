@extends('base')
@section('contentheader')
<li class="nav-item d-none d-sm-inline-block">
    <a href="/login" class="nav-link">Login</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <a href="/register" class="nav-link">Register</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <a href="/contact" class="nav-link">Contact</a>
</li>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12">
                <h5 class="mb-4">Login</h5>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($message = Session::get('error'))
                <div class="alert alert-danger">
                    <span>{{ $message }}</span>
                </div>
                @endif

                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form action="{{ route('login.store') }}" method="POST">
                    @method("POST")
                    @csrf
                    <div class="form-group">
                        <label for="example-todo-title">Email</label>
                        <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="example-todo-desc">Password</label>
                        <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <hr>
                    <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection