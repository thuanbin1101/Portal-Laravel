@extends('admin.admin_master')
@section('admin')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Photo Gallery</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ route('store.photo') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>News Image upload</label>
                        <input type="file" name="photo" class="form-control-file">
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="">--- SELECT CATEGORY ---</option>
                            <option value="1">Big Photo</option>
                            <option value="0 ">Small Photo</option>
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
