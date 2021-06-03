@extends('layouts.app')
@extends('layouts.Header')
@section('content')
<div class="container">
<div class="container" style="position:absolute; top:70px; left:235px">
<img src="../Img/Admin.png"style="border-radius:10px;">
    
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <a href="{{ route('logout') }}" class="text-sm text-gray-700 underline">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection
