@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-default">Go Back</a>
    <h1>Create a vulnerability in Database</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\VulnerabilitiesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write your post...'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('ranking', 'Ranking')}}
            {{Form::text('ranking', '', ['class' => 'form-control', 'placeholder' => 'A01, A02,...'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('year', 'Year')}}
            {{Form::number('year', '', ['class' => 'form-control', 'placeholder' => '2017, 2021,...'])}}
        </div>
        <br>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
