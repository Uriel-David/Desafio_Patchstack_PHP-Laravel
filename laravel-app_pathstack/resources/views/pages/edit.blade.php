@extends('layouts.app')

@section('content')
    <a href="/show/{{$vulnerability->id}}" class="btn btn-default">Go Back</a>
    <h1>Edit a vulnerability in Database</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\VulnerabilitiesController@update', $vulnerability->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $vulnerability->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $vulnerability->description, ['class' => 'form-control', 'placeholder' => 'Write your post...'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('ranking', 'Ranking')}}
            {{Form::text('ranking', $vulnerability->ranking, ['class' => 'form-control', 'placeholder' => 'A01, A02,...'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('year', 'Year')}}
            {{Form::number('year', $vulnerability->year, ['class' => 'form-control', 'placeholder' => '2017, 2021,...'])}}
        </div>
        <br>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
