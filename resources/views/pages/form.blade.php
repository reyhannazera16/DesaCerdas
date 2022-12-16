@extends('layouts.main')
@section('head')
    @include('includes.head')
@endsection
@section('header')
    @include('includes.header')
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper ">
            <div class="content-body">

                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row justify-content-center">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Shapefile </h4>
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Nama Daerah</label>

                                            <input type="text" name="nama-daerah" id="basic-addon-name"
                                                class="form-control" placeholder="Nama Daerah" aria-label="Name"
                                                aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Terlihat Bagus!</div>
                                            <div class="invalid-feedback">Tolong isi nama daerah.</div>
                                        </div>
                                        <div class="mb-1">
                                            <label for="customFile1" class="form-label">Upload Shapefile</label>
                                            <input class="form-control" type="file" name="upload-shapefile"
                                                id="customFile1" required />
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                    </div>
                </section>
                <!-- /Validation -->
            </div>
        </div>

    </div>
    <!-- End: Content-->
@endsection
