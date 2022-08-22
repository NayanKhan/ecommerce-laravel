@extends('backend.layout.template')    

@section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
    <h4>Update a Products</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">

    <div class="row row-sm mg-t-20">
      <div class="col-lg-12">
        <div class="card bd-0 shadow-base">
          <div class="pd-25">
              <form action="{{ route('product.update' , $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                  <div class="col-lg-4">

                    <div class="form-group">
                      <label>Product Title</label>
                      <input type="text" name="title" value="{{ $product->title }}" class="form-control" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="description" value="{{ $product->description }}" class="form-control" autocomplete="off" required="required">
                    </div>

                    <div class="form-group">
                      <label>Offer Price</label>
                      <input type="text" name="offerprice" value="{{ $product->offerprice }}" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Thumbnail Image 2</label>
                        <input type="file" name="p_image[]" class="form-control" >
                    </div>

                  </div>

                  <div class="col-lg-4">

                    <div class="form-group">
                        <label>Brand</label>
                        <select name="brand_id" class="form-control">
                          <option value="0">Please Slecet Brand if any</option>
                          @foreach (App\Models\Backend\Brand::orderBy('id', 'ASC') ->get(); as $brand)
                            <option value="{{ $brand->id}}" @if ($product->brand_id == $brand->id) selected @endif > {{$brand->name}}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                      <label>Product Quantity</label>
                      <input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-group">
                        <label>Featured Image</label>
                        @if ( $product->images == NULL)
                             No Choosen Image
                      @else 
                          <img src="{{ asset('backend/img/products/'. $product->image) }}" width="40" alt="">
                      @endif
                        <input type="file" name="p_image[]" class="form-control" >
                    </div>
                  
                    <div class="form-group">
                        <label>Thumbnail Image 3</label>
                        <input type="file" name="p_image[]" class="form-control" >
                    </div>

                  </div>

                  <div class="col-lg-4">

                      <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                          <option value="0">Please Slecet Brand if any</option>
                          @foreach (App\Models\Backend\Category::orderBy('id', 'ASC')->where('parent_id', 0) ->get(); as $category)
                            <option value="{{ $category->id}}" @if ($product->category_id == $category->id) selected @endif > {{$category->name}}</option>
                              @foreach (App\Models\Backend\Category::orderBy('id', 'ASC')->where('parent_id', $category->id) ->get(); as $childCat)
                                <option value="{{ $childCat->id}}" @if ($product->category_id == $childCat->id) selected @endif >-- {{$childCat->name}}</option>
                              @endforeach
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" name="price" value="{{ $product->price }}" class="form-control" autocomplete="off" required="required">
                      </div>

                      <div class="form-group">
                        <label>Thumbnail Image 1</label>
                        <input type="file" name="p_image[]" class="form-control" >
                      </div>

                      <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                          <option>Please Slecet the Status</option>
                          <option value="1" @if( $category->status == 1) selected @endif>Active</option>
                        <option value="2" @if( $category->status == 2) selected @endif>Inactive</option>
                        </select>
                    </div>

                  </div>

                  <div class="col-lg-12">

                    <div class="form-group">
                      <input type="submit" name="add Category" class="btn btn-teal m-b-10" value="Update Product">
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
