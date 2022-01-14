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
                <h5 class="mb-4">Register</h5>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register.store') }}" method="POST">
                    @method("POST")
                    @csrf
                    <div class="form-group">
                        <label for="example-todo-title">Name</label>
                        <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label for="example-todo-title">Email</label>
                        <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="example-todo-desc">Password</label>
                        <input name="password" type="password" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter password" required>
                    </div>

                    <div class="form-group">
                        <label for="example-todo-desc">Confirmation Password</label>
                        <input name="confirmation_password" type="password" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter confirmation password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <hr>
                        <p class="text-center">Sudah Mempunyai Akun? Kembali ke Halaman <a href="/login">Login</a>!</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection