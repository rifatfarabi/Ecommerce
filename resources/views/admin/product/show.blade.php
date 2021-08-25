@extends('admin.admin_layouts')



@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="index.html">Starlight</a>
          <span class="breadcrumb-item active">Product Section</span>
        </nav>
  
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title"> Product Details Page</h6>

                <div class="form-layout">
                  <div class="row mg-b-25">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">product_name: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_name" placeholder="Enter Product Name">
                      </div>
                    </div><!-- col-4 -->
                    
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">product_code: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_code" placeholder="Enter Product Code">
                      </div>
                    </div><!-- col-4 -->
                    
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_quantity" placeholder="Enter Quantity">
                      </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                          <option label="Choose Category"></option>
                          @foreach ($category as $raw)
                          <option value="{{ $raw->id }}">{{ $raw->category_name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- col-4 -->
                    
                    
                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                          
                        </select>
                      </div>
                    </div><!-- col-4 -->
                    
                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                          <option label="Choose Brand"></option>
                          @foreach ($brand as $br)
                          <option value="{{ $br->id }}">{{ $br->brand_name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput">
                      </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput">
                      </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="selling_price" placeholder="Selling Price">
                      </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                        {{-- <input class="form-control" id="summernote" name="product_details"> --}}
                        <textarea class="form-control" name="product_details" id="summernote"></textarea>
                      </div>
                    </div><!-- col-12 -->

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                        <input class="form-control" name="video_link" placeholder="Video Link">
                      </div>
                    </div><!-- col-12 -->

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Image One ( Main Thumbnali ): <span class="tx-danger">*</span></label>
                        <label class="custom-file">
                          <input type="file" id="file" class="custom-file-input" name="image_one" onchange=" readURL(this);" required="">
                          <span class="custom-file-control"></span>
                          <img src="#" id="one">
                        </label>
                      </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label>
                        <label class="custom-file">
                          <input type="file" id="file" class="custom-file-input" name="image_two" onchange=" readURL2(this);" required="">
                          <span class="custom-file-control"></span>
                          <img src="#" id="two">
                        </label>
                      </div>
                    </div><!-- col-4 -->
                    
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                        <label class="custom-file">
                          <input type="file" id="file" class="custom-file-input" name="image_three" onchange=" readURL3(this);" required="">
                          <span class="custom-file-control"></span>
                          <img src="#" id="three">
                        </label>
                      </div>
                    </div><!-- col-4 -->


                  </div><!-- row -->

                  <hr>
                  <br><br>

                  <div class="row">
                    <div class="col-lg-4">
                      <label class="ckbox">
                        <input type="checkbox" name="main_slider" value="1">
                        <span>Main Slider</span>
                      </label>
                    </div><!-- col-4 -->
                  
                    <div class="col-lg-4">
                      <label class="ckbox">
                        <input type="checkbox" name="hot_deal" value="1">
                        <span>Hot Deal</span>
                      </label>
                    </div><!-- col-4 -->
                  
                    <div class="col-lg-4">
                      <label class="ckbox">
                        <input type="checkbox" name="best_rated" value="1">
                        <span>Best Rated</span>
                      </label>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                      <label class="ckbox">
                        <input type="checkbox" name="mid_slider" value="1">
                        <span>Mid Slider</span>
                      </label>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                      <label class="ckbox">
                        <input type="checkbox" name="hot_new" value="1">
                        <span>Hot New</span>
                      </label>
                    </div><!-- col-4 -->
                  
                    <div class="col-lg-4">
                      <label class="ckbox">
                        <input type="checkbox" name="	trend" value="1">
                        <span>Trend Product</span>
                      </label>
                    </div><!-- col-4 -->
                  </div><!-- end row -->

                  <br><br>
                 </div><!-- form-layout -->
               </div>
            </form><!-- card -->
          </div>

      </div><!-- sl-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->



@endsection
