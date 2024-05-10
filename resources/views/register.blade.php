@extends('./layout')

@section('content')
    <div class="container d-flex gap-5 mt-5 object-fit-cover ">
        <img src="{{ asset('/images/about.jpg') }}" class="w-50">
        <div class="d-flex">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('register.new')}}" class="ml-auto mt-5" method="POST">
                @csrf
                <h1 class="">Register</h1>
                <div class="row">
                    <div class="form-group mt-2">
                        <label for="Fullname"class="d-block">Fullname</label>
                        <input type="Fullname" name="fullname" class="">
                    </div>
                    <div class="form-group mt-2">
                        <label for="Email"class="d-block">Email</label>
                        <input type="email" name="email" class="">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password" class="d-block ">Password</label>
                        <input type="password" name="password" class="">
                    </div>
                </div>
                <button class="btn btn-primary">Register</button>
                <a href="{{ route('login') }}" class="d-block mt-2 text-decoration-none">Have an account? Login here</a>
            </form>
        </div>
    </div>
@endsection
