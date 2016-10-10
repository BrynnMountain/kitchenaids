@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <h1>Create A New Box</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/box/create" method="post">
                <div class="form-group">
                    <label for="box-name">Name</label>
                    <input type="text" class="form-control" id="box-name" name="box-name" placeholder="Enter A Name" required>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection
