@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $recipe->name }}</div>
                <div class="panel-body">{!! nl2br(e($recipe->content)) !!}</div>
            </div> <!-- .panel -->
        </div>
    </div>
</div>
@endsection