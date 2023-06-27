@extends('admin.layout.main')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/service')}}">Service</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content mb-2">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <form action="{{ url('/edit',$data->id) }}" method="post" enctype="multipart/form-data"
                    class="mb-2 mt-2 ml-3 mr-3">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" value="{{$data->title}}" name="title" class="form-control"
                            placeholder="Write your name here.." require>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Icon name </label>
                        <input type="text" value="{{$data->icon}}" name="icon" class="form-control"
                            placeholder="Write your address here.." require>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Text <span class="text-danger">*</span></label>
                        <textarea name="text" class="form-control" rows="3" id="editor"
                            placeholder="Write your client paragraph .." require>{{$data->text}}</textarea>
                    </div>
                    
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary">
                            <a href="{{url('/service')}}" style="text-decoration: none; color:#fff;">Go
                                Back</a></button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</section>

@endsection