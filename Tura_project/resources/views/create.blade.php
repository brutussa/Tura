@extends('layout.layout')
@section('content')
<div class="box box-primary">
    <div class="cox-header with-border">
        <h3 class="box-title">create post</h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{route('post.save')}}">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Post title</label>
                <input type="Nano" class="form-control" placeholder="Nano" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post text</label>
                <input type="Nano" class="form-control" placeholder="Nano" name="text">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post text</label>
                <input type="Nano" class="form-control" placeholder="Nano" name="like">
            </div>
        </div>
        <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection
