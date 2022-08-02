@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Create a New Course</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
              @include('backend.flash-message')
              <form action="{{ route('curriculum.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Course Name </label>
                      <select name="course_id" class="form-control">
                        <option>Please Slecet Your Course Name</option>
                        
                        @foreach ($courses as $course)
                          <option value="{{ $course->id}}">{{$course->english_title}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Curriculum Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg">

                    <div class="form-group">
                      <label>Step One Title [ English ]</label>
                      <input type="text" name="one_en" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Title [ Bangle]</label>
                      <input type="text" name="one_bn" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Step One Description</label>
                      <textarea name="one_desc" id="" class="form-control" rows="3"></textarea>
                    </div>

                  </div>

                  <div class="col-lg">
                    <div class="form-group">
                      <label>Step Two Title [ English ]</label>
                      <input type="text" name="two_en" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Title [ Bangle]</label>
                      <input type="text" name="two_bn" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Step Two Description</label>
                      <textarea name="two_desc" id="" class="form-control" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="col-lg">
                    <div class="form-group">
                      <label>Step Three Title [ English ]</label>
                      <input type="text" name="three_en" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Title [ Bangle]</label>
                      <input type="text" name="three_bn" class="form-control" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                      <label>Step Three Description</label>
                      <textarea name="three_desc" id="" class="form-control" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="col-lg">

                    <div class="form-group">
                      <label>Step Four Title [ English ]</label>
                      <input type="text" name="four_en" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Title [ Bangle]</label>
                      <input type="text" name="four_bn" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Step Four Description</label>
                      <textarea name="four_desc" id="" class="form-control" rows="3"></textarea>
                    </div>

                  </div>


                  <div class="col-lg">

                    <div class="form-group">
                      <label>Step Five Title [ English ]</label>
                      <input type="text" name="five_en" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Title [ Bangle]</label>
                      <input type="text" name="five_bn" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Step Five Description</label>
                      <textarea name="five_desc" id="" class="form-control" rows="3"></textarea>
                    </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="addCurriculum" class="btn btn-teal m-b-10" value="Add Curriculumn">
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
