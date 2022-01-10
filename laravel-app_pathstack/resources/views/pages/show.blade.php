@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-default">Go Back</a>
    <br><br>
    @if(count($vulnerabilities) > 0)
        @foreach($vulnerabilities as $vulnerability)
            <div class="card">
                <div class="row">
                    <div class="col-md-8 mt-4">
                        <h3><a href="/show/{{$vulnerability->id}}">{{$vulnerability->title}}</a></h3>
                        <p><small>Top Rank: {{$vulnerability->ranking}} in year {{$vulnerability->year}}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
