@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">user profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <b> UserName:</b>{{ Auth::user()->username }} <br>
                <b> email:</b>{{ Auth::user()->email }} <br>
                <b>  password:</b>{{ Auth::user()->password }} <br>
                <b> userid</b>:{{ Auth::user()->id }} <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
