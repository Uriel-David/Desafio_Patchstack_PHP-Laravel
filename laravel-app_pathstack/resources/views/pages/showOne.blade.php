@extends('layouts.app')

@section('content')
    <a href="/show" class="btn btn-default">Go Back</a>
    <h1>{{$vulnerability->title}}</h1>
    <p>{{$vulnerability->description}}</p>
    <hr>
    <p><small>Top Rank: {{$vulnerability->ranking}} in year {{$vulnerability->year}}</small></p>
    <hr>
    <a href="/show/{{$vulnerability->id}}/edit" class="btn btn-primary">Edit</a>
    <br><br>
    {!!Form::open(['action' => ['App\Http\Controllers\VulnerabilitiesController@destroy', $vulnerability->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => "btn btn-danger"])}}
    {!!Form::close() !!}
@endsection
