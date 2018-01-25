@extends('layouts.app')

@section('content')
    <div class="center jumbotrom">
        <div class="text-center">
            <h1>Welcom to the Microposts</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primay']) !!}
        </div>
    </div>
@endsection('content')