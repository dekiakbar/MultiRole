@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda Login Sebagai 
                    @if(Auth::user()->HasRole('Super Admin'))
                        Super Admin
                    @elseif(Auth::user()->HasRole('Admin'))
                        Admin
                    @elseif(Auth::user()->HasRole('User'))
                        User
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
