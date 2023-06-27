@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Contact us</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{url('/contact')}}">Contact us</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Contact us</h3>
          </div>

          <div class="card-body table-responsive">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Text</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($data as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->emai;}}</td>
                  <td>{{$data->subject}}</td>
                  <td>{{$data->text}}</td>
                  <td><button type="button" class="btn btn-danger">
                  <a href="{{url('delete_contact',$data->id)}}"> Delete</a></button></td>
                </tr>
                @endforeach
                
                
              </tbody>
              <tfoot>
                <tr>
                <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Text</th>
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