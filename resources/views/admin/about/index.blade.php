@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>About</h1>
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
<!-- modal starts -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add about
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add about</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name<span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control"   placeholder="Write your name.." require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address <span class="text-danger">*</span></label>
            <input type="email" name="email" class="form-control"   placeholder="Write your email here.." require>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Birthday<span class="text-danger">*</span></label>
                  <input type="date" name="birthday" class="form-control"require>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Phone number<span class="text-danger">*</span></label>
                  <input type="phone" name="phone" class="form-control" placeholder="Write your phone number here.."  maxlength="13" require>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">City<span class="text-danger">*</span></label>
                  <input type="text" name="city" class="form-control" placeholder="Write your city name here.." require>
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Age<span class="text-danger">*</span></label>
                  <input type="text" name="age" class="form-control" placeholder="Write your age here.." require>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Degree</label>
                  <input type="text" name="degree" class="form-control" placeholder="Write your degree here..">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Freelance<span class="text-danger">*</span></label>
                  <input type="text" name="freelance" class="form-control" require>
              </div>
          </div>
        </div>
        <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Location</label>
                  <input type="text" name="location" class="form-control" placeholder="Write your location here..">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Website</label>
                  <input type="text" name="website" class="form-control" placeholder="Write your website here..">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" name="facebook" class="form-control" placeholder="Write your facebook link here..">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Twitter</label>
                  <input type="text" name="twitter" class="form-control" placeholder="Write your twitter link here..">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Instagram</label>
                  <input type="text" name="instagram" class="form-control" placeholder="Write your instagram link here..">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Skype</label>
                  <input type="text" name="skype" class="form-control" placeholder="Write your skype link here..">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Linkedin</label>
                  <input type="text" name="linkedin" class="form-control" placeholder="Write your linkedin link here..">
              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
            <label for="exampleFormControlFile1">Image <span class="text-danger">*</span></label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" require>
              </div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- modal ends -->

</div>
</section>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">abouts</h3>
                </div>

                <div class="card-body table-responsive">
                  <table id="example2" class="table  table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email address</th>
                        <th>Birthday</th>
                        <th>Phone number</th>
                        <th>City</th>
                        <th>Age</th>
                        <th>Degree</th>
                        <th>Freelance</th>
                        <th>Location</th>
                        <th>Website</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Instagram</th>
                        <th>Skype</th>
                        <th>Linkedin</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $data)
                      <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->birthday}}</td>
                      <td>{{$data->phone}}</td>
                      <td>{{$data->city}}</td>
                      <td>{{$data->age}}</td>
                      <td>{{$data->degree}}</td>
                      <td>{{$data->freelance}}</td>
                      <td>{{$data->location}}</td>
                      <td>{{$data->website}}</td>
                      <td>{{$data->facebook}}</td>
                      <td>{{$data->twitter}}</td>
                      <td>{{$data->instagram}}</td>
                      <td>{{$data->skype}}</td>
                      <td>{{$data->linkedin}}</td>
                      <td><img src="about/{{$data->image}}" height="100px" width="100px"  srcset="">
                        
                      </td>
                        <td><button type="button" class="btn btn-warning">
                            <a href="{{url('/edit',$data->id )}}">Edit</a> </button>
                            
                        </td>
                        <td><button type="button" class="btn btn-danger">
                            <a href="{{url('delete',$data->id)}}"> Delete</a></button>
                            
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                      <th>Name</th>
                      <th>Email address</th>
                      <th>Birthday</th>
                      <th>Phone number</th>
                      <th>City</th>
                      <th>Age</th>
                      <th>Degree</th>
                      <th>Freelance</th>
                      <th>Location</th>
                      <th>Website</th>
                      <th>Facebook</th>
                      <th>Twitter</th>
                      <th>Instagram</th>
                      <th>Skype</th>
                      <th>Linkedin</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>

              </div>

        

      </div>

    </div>

  </div>

</section>
@endsection