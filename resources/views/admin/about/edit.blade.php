@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update About</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{url('/admin_about')}}">About</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content mb-2">
  <div class="container-fluid">
      <div class="col-12">
      <div class="card ">
  <form action="{{url('/edit',$data->id)}}" method="post" enctype="multipart/form-data" class="mb-2 mt-2 ml-3 mr-3">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name<span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control"   value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address <span class="text-danger">*</span></label>
            <input type="email" name="email" class="form-control"   value="{{$data->email}}">
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Birthday<span class="text-danger">*</span></label>
                  <input type="date" name="birthday" class="form-control" value="{{$data->birthday}}">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Phone number<span class="text-danger">*</span></label>
                  <input type="phone" name="phone" class="form-control" value="{{$data->phone}}"  maxlength="13" >
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">City<span class="text-danger">*</span></label>
                  <input type="text" name="city" class="form-control" value="{{$data->city}}" >
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Age<span class="text-danger">*</span></label>
                  <input type="text" name="age" class="form-control" value="{{$data->age}}" >
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Degree</label>
                  <input type="text" name="degree" class="form-control" value="{{$data->degree}}">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Freelance<span class="text-danger">*</span></label>
                  <input type="text" name="freelance" class="form-control"  value="{{$data->freelance}}" >
              </div>
          </div>
        </div>
        <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Location</label>
                  <input type="text" name="location" class="form-control" value="{{$data->location}}">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Website</label>
                  <input type="text" name="website" class="form-control" value="{{$data->website}}">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" name="facebook" class="form-control" value="{{$data->facebook}}">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Twitter</label>
                  <input type="text" name="twitter" class="form-control" value="{{$data->twitter}}">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Instagram</label>
                  <input type="text" name="instagram" class="form-control" value="{{$data->instagram}}">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Skype</label>
                  <input type="text" name="skype" class="form-control" value="{{$data->skype}}">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Linkedin</label>
                  <input type="text" name="linkedin" class="form-control" value="{{$data->linkedin}}">
              </div>
          </div>
        <div class="form-group">
          
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value="{{$data->image}}">
        <!-- <img src="testimonial/{{$data->image}}" height="100px" width="100px"  value="{{$data->image}}" hidden> -->
        <img height="200" width="200" src="about/{{$data->image}}">
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <a href="{{url('/admin_testimonial')}}" style="text-decoration: none; color:#fff;">Go Back</a></button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
      </div>
    </div>
  </div>

</div>
</section>

@endsection