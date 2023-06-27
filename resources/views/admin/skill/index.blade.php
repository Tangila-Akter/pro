@extends('admin.layout.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Skills</h1>
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
<!-- modal starts -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add Skill
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Skill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Paragraph <span class="text-danger">*</span></label>
            <textarea name="paragraph" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your paragraph .." require></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Skill <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control"   placeholder="Write your skill here.." require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Percentage(%) <span class="text-danger">*</span></label>
            <input type="text" name="percentage" class="form-control"   placeholder="Percentage(%)" require>
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
            <h3 class="card-title">Skills</h3>
          </div>

          <div class="card-body table-responsive">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>1st Paragraph</th>
                  <th>Skill name</th>
                  <th>Percentage</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($data as $data)
                <tr>
                  <td>{{$data->paragraph}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->percentage}}</td>
                  <td> <button type="button" class="btn btn-warning">
                    <a href="{{url('/edit',$data->id )}}"> Edit</a></button></td>
                  <td><button type="button" class="btn btn-danger">
                  <a href="{{url('delete',$data->id)}}"> Delete</a></button></td>
                </tr>
                @endforeach
                
                
              </tbody>
              <tfoot>
                <tr>
                <th>1st Paragraph</th>
                  <th>Skill name</th>
                  <th>Percentage</th>
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