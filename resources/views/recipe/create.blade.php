@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h1>Create A New Recipe</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/recipe/create" method="post">
            <input type="hidden" value="{{$box_id}}" name="box-id" id="box-id">
                <div class="form-group">
                    <label for="recipe-name">Name</label>
                    <input type="text" class="form-control" id="recipe-name" name="recipe-name" placeholder="Enter A Name" required>
                </div>
                <div class="form-group">
                    <label for="recipe-content">Content</label>
                    <textarea class="form-control" rows="10" id="recipe-content" name="recipe-content" placeholder="Write some stuff." required></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection