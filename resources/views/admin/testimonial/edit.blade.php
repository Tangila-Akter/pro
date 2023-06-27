@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update Testimonials</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{url('/testimonial')}}">Testimonials</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content mb-2">
  <div class="container-fluid">
      <div class="col-12">
      <div class="card ">
  <form action="{{url('edit',$data->id)}}" method="post" enctype="multipart/form-data" class="mb-2 mt-2 ml-3 mr-3">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name<span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control"   placeholder="Write your Fact header here.." value="{{$data->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Text <span class="text-danger">*</span></label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$data->name}}">{{$data->name}}</textarea>
        </div>
        <div class="form-group">
          
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value="{{$data->image}}">
        <!-- <img src="testimonial/{{$data->image}}" height="100px" width="100px"  value="{{$data->image}}" hidden> -->
        <img height="200" width="200" src="testimonial/{{$data->image}}">
        </div>
      </div>
      <div class="modal-footer justify-content-center">
      <button type="button" class="btn btn-secondary"><a href="{{url('/admin_testimonial')}}" style="text-decoration: none; color:#fff;">Go Back</a></button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
      </div>
    </div>
  </div>

</div>
</section>

@endsection

  <!-- please run the project -->