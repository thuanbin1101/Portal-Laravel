@extends('admin.admin_master')
@section('admin')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Video Gallery</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ route('update.video',$video->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" value="{{ $video->title}}" class="form-control" id="exampleInputName1"
                               placeholder="Name" name="title">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Embed Code</label>
                        <input type="text" value="{{ $video->embed_code}}" name="embed_code" class="form-control">
                        @error('embed_code')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="">--- SELECT CATEGORY ---</option>
                            <option {{$video->type === "1" ? "selected" : ''}} value="1">Big Video</option>
                            <option {{$video->type === "0" ? "selected" : ''}} value="0 ">Small Video</option>
                        </select>
                        @error('type')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
