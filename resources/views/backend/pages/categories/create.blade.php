@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Create a New Branch</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
              <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                  <div class="col-lg-6">

                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" name="name" class="form-control" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="description" class="form-control" autocomplete="off" required="required">
                    </div>

                  </div>

                  <div class="col-lg-6">

                  <div class="form-group">
                      <label>Category Thumbnail</label>
                      <input type="file" name="image" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Parent Category</label>
                      <select name="parent_id" class="form-control">
                        <option value="0">Please Slecet Primary Category if any</option>
                        @foreach ($primary_category as $cat)
                          <option value="{{ $cat->id}}"> {{$cat->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="add Category" class="btn btn-teal m-b-10" value="Add New Category">
                    </div>
                  </div>
                </div>

                </div>
              </form>

          </div><!-- d-flex -->
        </div><!-- card -->


      </div>
      
    </div><!-- row -->

  </div><!-- br-pagebody -->
    
@endsection
