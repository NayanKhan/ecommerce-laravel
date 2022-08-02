@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Manage All The Courses Information</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="d-md-flex justify-content-between pd-25">
            
            <!-- Table Content Start -->
            <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table table-bordered table-striped table-hover table-custom">
                    @include('backend.flash-message')
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Sl. No</th>
                        <th scope="col">Course Thumbnail</th>
                        <th scope="col">English Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Graduate Number</th>
                        <th scope="col">Course Duration</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        @php
                           $i=0; 
                        @endphp
                        @foreach ($courses as $course)
                            
                        @php
                           $i++;
                        @endphp
                        <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>
                            @if ( $course->image == NULL)
                             <img src="{{ asset('backend/img/course/default.png') }}" width="40" alt="">

                            @else 
                                <img src="{{ asset('backend/img/course/'. $course->image) }}" width="40" alt="">
                            @endif
                        </td>
                        <td>{{ $course->english_title}}</td>
                        <td>{{ $course->price}}</td>
                        <td>{{ $course->graduate_number}}</td>
                        <td>{{ $course->course_duration}}</td>
                        <td>
                            @if ($course->status == 1)
                                <span class="badge badge-success">Active</span>
                            @elseif ($course->status == 2)
                                <span class="badge badge-danger">Inactive</span>
                            @endif    
                        </td>
                        <td>
                            <ul class="custom-action">
                                <li><a href="{{ route ('course.edit', $course->id ) }}"><i class="fa fa-edit"></i></a></li>
                                <li><a href="" data-toggle="modal" data-target="#course{{ $course->id }}"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </td>
                        <!-- Delete Modal Start -->
                            <div class="modal fade" id="course{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Do You Confirm to Delete This Branch?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>
                                        <form action="{{route ('branch.destroy', $course->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                    </li>
                                    <li><button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button></li>
                                </ul>
                            </div>
                            </div>
                            </div>
                            </div>
                        <!-- Delete Modal Start -->
                        </tr>

                        @endforeach

                       
                    </tbody>
                </table>
                @if ($courses->count()== 0 )
                    <div class="alert alert-info">
                        No. Courses Added Yet. Please Add a Course First.
                    </div>
                @endif
            </div>
            
            <!-- Table Content End -->
          </div>
        </div><!-- card -->


      </div>
      
    </div><!-- row -->

  </div><!-- br-pagebody -->
    
@endsection
