@extends('cms.app')

@section('content')
<div class="row">
    <div class="col-4 mx-auto bg-white my-5 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Login</h1>
            </div>
        </div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <div class="row">
            <div class="col my-3">
                <form action="{{route('check')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-secondary">Login</button>
                    </div>
                </form>

            </div>
        </div>


    </div>
</div>

@endsection