@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Summary</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{url('/summary')}}">Summary</a></li>
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
Add Summary
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Summary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control"   placeholder="Write your name .." require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address <span class="text-danger">*</span></label>
            <input type="text" name="address" class="form-control"   placeholder="Write your address here.." require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">phone <span class="text-danger">*</span></label>
            <input type="phone" name="phone" class="form-control" maxlength="13"  placeholder="012345678" require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Text <span class="text-danger">*</span></label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your client paragraph .." require></textarea>
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
            <h3 class="card-title">Summary</h3>
          </div>

          <div class="card-body table-responsive">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Text</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($data as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->address}}</td>
                  <td>{{$data->phone}}</td>
                  <td>{{$data->text}}</td>
                  <td> <button type="button" class="btn btn-warning">
                    <a href="{{url('/edit_summary',$data->id )}}"> Edit</a></button></td>
                  <td><button type="button" class="btn btn-danger">
                  <a href="{{url('delete',$data->id)}}"> Delete</a></button></td>
                </tr>
                @endforeach
                
                
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Text</th>
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