@extends('admin.admin_master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

@section('content')
    <div class="container-full">
        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit Profile</h4>
                    <h6 class="box-subtitle">Perubahan data profile admin dari <a class="text-warning"
                            href="{{ env('APP_URL') }}" target="_blank">UNIX
                            SHOP</a></h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Username <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="username" class="form-control" required
                                                            data-validation-required-message="Username tidak boleh kosong"
                                                            value="{{ $adminEdit->name }}">
                                                    </div>
                                                    <div class="form-control-feedback"><small>Minimal 8 karakter</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" value="{{ $adminEdit->email }}"
                                                            class="form-control" required
                                                            data-validation-required-message="Email tidak boleh kosong">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Profile Image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input id="image" type="file" name="profile_photo_path"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <img id="showImage" class="rounded-circle"
                                                    src="{{ !empty($adminEdit->profile_photo_path) ? url('upload/admin_images/.$adminData->profile_photo_path') : url('upload/no_image.jpg') }}"
                                                    alt="{{ $adminEdit->name }}" style="width: 100px; height: 100px">
                                            </div>
                                        </div>

                                        <script>
                                            $(document).ready(function() {
                                                $('#image').change(
                                                    function(e) {
                                                        var reader = new FileReader();
                                                        reader.onload = function(e) {
                                                            $('#showImage').attr('src', e.target.result);
                                                        }
                                                        reader.readAsDataURL(e.target.files['0']);
                                                    });
                                            });
                                        </script>

                                        <div class="text-xs-right">
                                            <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                                        </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
