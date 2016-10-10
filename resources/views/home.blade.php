@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 btn-toolbar">
            <a class="create-btn btn btn-primary" href="/box/create">Create Box</a>
        </div>
    </div>
    <div class="row">

        @foreach(Auth::user()->boxes() as $box)
            <div class="col-xs-12 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $box->name }}</div>

                    <div class="panel-body">
                        <a class="btn btn-link" href="/recipe/create">Add New Recipe</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
