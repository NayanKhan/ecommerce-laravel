@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Update the Batch Information</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
        
              <form action="{{ route('batch.update', $batch->id) }}" method="POST">
                @csrf
                <div class="row">

                  <div class="col-lg-3">

                    <div class="form-group">
                      <label>Batch Name</label>
                      <input type="text" name="batch_name" value="{{$batch->batch_name}}" class="form-control" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label>Class Date</label>
                      <input type="text" name="class_day" value="{{$batch->class_day}}" class="form-control" autocomplete="off" required="required">
                    </div>
                    <div class="form-group">
                      <label>Facebook Group</label>
                      <input type="text" name="fb_group" value="{{$batch->fb_group}}" class="form-control" autocomplete="off">
                    </div>

                  </div>

                  <div class="col-lg-3">
                    
                    <div class="form-group">
                      <label>Course Name</label>
                      <select name="course_id" class="form-control">
                        <option>Please Slecet the Course Name</option>
                        @foreach ($courses as $course)
                        <option value="{{$course->id}}" 
                          @if ($course->id == $batch->course_id)
                                selected
                            @endif
                          >{{$course->english_title}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Starting Date</label>
                      <input type="text" name="starting_date" value="{{$batch->starting_date}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Batch Type</label>
                      <select name="batch_type" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if ($batch->batch_type == 1) selected  @endif>Online</option>
                        <option value="2" @if ($batch->batch_type == 2) selected  @endif>Offline</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-lg-3">
                    
                    <div class="form-group">
                      <label>Mentor Name</label>
                      <select name="mentor_id" class="form-control">
                        <option>Please Slecet the Mentor Name</option>
                        @foreach ($mentors as $mentor)
                        <option value="{{$mentor->id}}" 
                          @if ($mentor->id == $batch->id)
                          selected
                      @endif
                          >{{$mentor->fullname}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Total Seat</label>
                      <input type="text" name="sit_number" value="{{$batch->sit_number}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Addmission Status</label>
                      <select name="addmission_status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if ($batch->addmission_status == 1) selected  @endif>Active</option>
                        <option value="2" @if ($batch->addmission_status == 2) selected  @endif>Inactive</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-lg-3">
                    
                    <div class="form-group">
                      <label>Branch Name</label>
                      <select name="branch_id" class="form-control">
                        <option>Please Slecet the Branch Name</option>
                        @foreach ($branches as $branch)
                        <option value="{{$branch->id}}"
                          @if ($branch->id == $batch->id)
                          selected
                      @endif
                          >{{$branch->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Class Time</label>
                      <input type="text" name="class_timing" value="{{$batch->class_timing}}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option>Please Slecet the Status</option>
                        <option value="1" @if ($batch->status == 1) selected  @endif>Active</option>
                        <option value="2" @if ($batch->status == 2) selected  @endif>Inactive</option>
                      </select>
                    </div>

                  </div>


                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="submit" name="updateBatch" class="btn btn-teal m-b-10" value="Save Changes">
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
