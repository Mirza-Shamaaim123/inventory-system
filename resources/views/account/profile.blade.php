@extends('frontend.layout.main')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Profile</h4>
                    <h6>User Profile</h6>
                </div>
            </div>
            <!-- /product list -->
            <div class="card">
                <div class="card-header">
                    <h4>Profile</h4>
                </div>

                <div class="card-body profile-body">
                    <h5 class="mb-2"><i class="ti ti-user text-primary me-1"></i>Basic Information</h5>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="profile-pic-upload image-field">
                            <div class="profile-pic p-2">
                                <img src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/img/users/user-49.png') }}"
                                    class="object-fit-cover h-100 rounded-1" alt="user">

                                <button type="button" class="close rounded-1">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="mb-3">
                                <div class="image-upload mb-0 d-inline-flex">
                                    <input type="file" name="image">
                                    <div class="btn btn-primary fs-13">Change Image</div>
                                </div>
                                <p class="mt-2">Upload an image below 2 MB, Accepted File format JPG, PNG</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number<span class="text-danger ms-1">*</span></label>
                                    <input type="text" name="phone_number" value="{{ $user->phone_number }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">User Name<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Password<span class="text-danger ms-1">*</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-input form-control"
                                            placeholder="Enter new password (optional)" name="password">
                                        <i class="ti ti-eye-off toggle-password"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary me-2 shadow-none">Cancel</button>
                                <button type="submit" class="btn btn-primary shadow-none">Save Changes</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- /product list -->
    </div>
    <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
        <p class="mb-0 text-gray-9">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
        <p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
    </div>
    </div>
@endsection




{{-- @extends('frontend.layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Profile</h4>
                    <h6>User Profile</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Profile</h4>
                </div>

                <div class="card-body profile-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">

                        </div>
                        <div class="mb-3">

                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0 text-gray-9">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
            <p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
        </div>
    </div>
@endsection --}}
