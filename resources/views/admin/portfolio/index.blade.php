@extends('admin.layout.main')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Portfolio</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/admin_home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/portfolio')}}">Portfolio</a></li>
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
            Add Portfolio
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Portfolio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    
                        <form action="{{ route('uploads.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Category </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                                    <option value="">Select your category</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image <span class="text-danger">*</span></label>
                                <input type="file" name="name[]" class="form-control-file form-control" id="exampleFormControlFile1" multiple>
                                @if($errors->has('name'))
                                <span class="invalid-feedback text-danger" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client </label>
                                <input type="text" name="client" class="form-control"
                                    placeholder="Write your Portfolio here.." require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date </label>
                                <input type="date" name="project_date" class="form-control"
                                    placeholder="Write your Portfolio here.." require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Project URL </label>
                                <input type="text" name="project_url" class="form-control"
                                    placeholder="Write your project url here.." require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title </label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Write your title here.." require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text </label>
                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your paragraph .." require></textarea>
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
                        <h3 class="card-title">Portfolio</h3>
                    </div>

                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>1st Paragraph</th>
                                    <th>Portfolio name</th>
                                    <th>Percentage</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> <button type="button" class="btn btn-warning">
                                            <a href=""> Edit</a></button></td>
                                    <td><button type="button" class="btn btn-danger">
                                            <a href=""> Delete</a></button></td>
                                </tr>



                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>1st Paragraph</th>
                                    <th>Portfolio name</th>
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