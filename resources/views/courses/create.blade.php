@extends('layouts.dashmin')
@section('content')
    <div class="col-lg-12">
        <!-- Base Horizontal Form With Icons -->
        <div class="form-element py-30 multiple-column">
            <h4 class="font-20 mb-20">Multiple Column</h4>

            <!-- Form -->
            <form action="#" method="POST">

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Your Name</label>
                            <input type="text" class="theme-input-style" placeholder="Type Your Name">
                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Email</label>
                            <input type="text" class="theme-input-style" placeholder="Your Email Address">
                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Company</label>
                            <input type="text" class="theme-input-style" placeholder="Company Name">
                        </div>
                        <!-- End Form Group -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Mobile</label>
                            <input type="text" class="theme-input-style" placeholder="Contact Number">
                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Password</label>
                            <input type="password" class="theme-input-style" placeholder="Password">
                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Address</label>
                            <input type="text" class="theme-input-style" placeholder="Address">
                        </div>
                        <!-- End Form Group -->
                    </div>
                </div>

                <!-- Form Row -->
                <div class="form-group pt-1">
                    <div class="d-flex align-items-center mb-3">
                        <!-- Custom Checkbox -->
                        <label class="custom-checkbox position-relative mr-2">
                            <input type="checkbox" id="check5">
                            <span class="checkmark"></span>
                        </label>
                        <!-- End Custom Checkbox -->
                        
                        <label for="check5">Remember me</label>
                    </div>
                </div>
                <!-- End Form Row -->

                <!-- Form Row -->
                <div class="form-row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn long">Submit</button>
                    </div>
                </div>
                <!-- End Form Row -->
            </form>
            <!-- End Form -->
        </div>
        <!-- End Horizontal Form With Icons -->
    </div>
@endsection