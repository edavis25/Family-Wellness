@extends('layout.email')

@section('content')
    <h2>You Have Received A New Contact!</h2>
    <hr>
    <h5>Details:</h5>
    <strong>Name:</strong> {{ $name }}<br>
    <strong>Email:</strong> {{ $email }}<br>
    <strong>Phone:</strong> {{ $phone }}<br>
    <p>
        <strong>Message:</strong><br>
        {{ $contact_message }}
    </p>
@endsection