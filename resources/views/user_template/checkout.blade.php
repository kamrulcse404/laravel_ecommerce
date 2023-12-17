@extends('user_template.layouts.template')
@section('main-content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <h2>checkout</h2>
@endsection
