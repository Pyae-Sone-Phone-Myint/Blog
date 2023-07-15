@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-card cardTitle="Dashboard" classes=" mb-4">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in!') }} <i class=" bi bi-person"></i>

                <br>

                <code>
                    {{ Auth::user() }}
                </code>

                <x-alert message="Testing Alert" />
                <x-alert message="Another one" />
                <x-alert color="success" />
            </x-card>
            <x-card cardTitle="Card 1">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit voluptatibus dolorum sit. Recusandae, illum, reiciendis harum facilis atque provident in, voluptate obcaecati impedit similique vel voluptatibus velit tempora sunt architecto.</p>
                <a href="#" class=" btn btn-primary">Go Go Go</a>
            </x-card>
            <x-card cardTitle="Card 2"/>
        </div>
    </div>
</div>
@endsection
