@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update Skills</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{url('/skill')}}">Skill</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content mb-2">
<div class="container-fluid">
      <div class="col-12">
      <div class="card">
  <form action="{{ url('/edit',$data->id) }}" method="post" enctype="multipart/form-data" class="mb-2 mt-2 ml-3 mr-3">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Paragraph <span class="text-danger">*</span></label>
            <textarea value="{{$data->paragraph}}" name="paragraph" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->paragraph}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Skill <span class="text-danger">*</span></label>
            <input type="text" value="{{$data->name}}" name="name" class="form-control"   placeholder="Write your skill here.." require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Percentage(%) <span class="text-danger">*</span></label>
            <input type="text" value="{{$data->percentage}}" name="percentage" class="form-control" >
        </div>
        
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary">
          <a href="{{url('/skill')}}" style="text-decoration: none; color:#fff;">Go Back</a></button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
    </div>
  </div>

</div>
</section>

@endsection