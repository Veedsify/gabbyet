@extends('./layout')

@section('content')
    <div class="container d-flex gap-5 mt-5 object-fit-cover ">
        <img src="{{ asset('/images/image_2.jpg') }}" class="w-50" alt="">
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
            <form action="{{route('login.new')}}" class="ml-auto mt-5" method="POST">
                @csrf
                <h1 class="">LOGIN</h1>
                <div class="row">
                    <div class="form-group mt-2">
                        <label for="Email"class="d-block">Email</label>
                        <input type="email" name="email" class="">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password" class="d-block ">Password</label>
                        <input type="password" name="password" class="">
                    </div>
                </div>
                <button class="btn btn-primary">Login</button>
                <a href="{{ route('register') }}" class="d-block mt-2 text-decoration-none">Don't have an account? Register
                    here</a>
            </form>
        </div>
    </div>
@endsection
