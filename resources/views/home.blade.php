@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 btn-toolbar">
            <a class="create-btn btn btn-primary" href="/box/create">Create Box</a>
        </div>
    </div>
    <div class="row">
        @foreach($user->boxes as $box)
            <div class="col-xs-12 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$box->name}}</div>

                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($box->recipes as $recipe)
                                <a href="#" class="list-group-item">{{$recipe->name}}</a>
                            @endforeach
                            <a class="list-group-item" href="/box/{{$box->id}}/recipe/create"><span class="text-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Recipe</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection