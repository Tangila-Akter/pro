@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update Facts</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{url('/fact')}}">Fact</a></li>
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
        <input type="text" name="paragraph" class="form-control"   value="0" hidden>
        <div class="form-group">
            <label for="exampleInputEmail1">Purecounter (number only)<span class="text-danger">*</span></label>
            <input type="text" name="purecounter" class="form-control"   placeholder="Write your purecounter number" value="{{$data->purecounter}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fact Header <span class="text-danger">*</span></label>
            <input type="text" name="header" class="form-control"   placeholder="Write your Fact header here.." value="{{$data->header}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Text <span class="text-danger">*</span></label>
            <input type="text" name="text" class="form-control"   placeholder="Write your text" value="{{$data->text}}">
        </div>
        
      </div>
      <div class="modal-footer justify-content-center">
      <a href="{{url('/fact')}}" style="text-decoration: none; color:#fff;">Go Back</a></button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
      </div>
    </div>
  </div>

</div>
</section>

@endsection