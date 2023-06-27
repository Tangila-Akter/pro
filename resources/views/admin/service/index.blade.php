@extends('admin.layout.main')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Service</h1>
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
<!-- modal starts -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add Service
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control"   placeholder="Write your service name .." require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Icon name <span class="text-danger">*</span></label>
            <input type="text" name="icon" class="form-control"   placeholder="Write your icon here.." require>
        </div>
        
        <div class="form-group" >
            <label for="exampleInputEmail1">Text <span class="text-danger">*</span></label>
            <div >
            <textarea name="text" class="form-control" rows="3" id="editor" placeholder="Write your client paragraph .." require></textarea>
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
            <h3 class="card-title">Service</h3>
          </div>

          <div class="card-body table-responsive">
            <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>Name</th>
                  <th>Icon</th>
                  <th>Text</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($data as $data)
                <tr>
                  <td>{{$data->title}}</td>
                  <td>{{$data->icon}}</td>
                  <td>{{$data->text}}</td>
                  <td> <button type="button" class="btn btn-warning">
                    <a href="{{url('/edit_service',$data->id )}}"> Edit</a></button></td>
                  <td><button type="button" class="btn btn-danger">
                  <a href="{{url('delete',$data->id)}}"> Delete</a></button></td>
                </tr>
                @endforeach
                
                
              </tbody>
              <tfoot>
                <tr>
                <th>Name</th>
                <th>Icon</th>
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

<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
</script>