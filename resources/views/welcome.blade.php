@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <ul class="text-center list-unstyled">
            @foreach ($projects as $project)
                <li>
                    <a class="" href="#">{{ $project->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
