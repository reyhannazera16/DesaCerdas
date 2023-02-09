@extends('layouts.main')
@section('head')
    @include('includes.head')
@endsection
@section('header')
    @include('includes.header')
@endsection
@section('content')
<div class="app-content content ">
        <!-- BEGIN: Header-->

    <div class="card h-100">
      <div class="card-header" style="margin-bottom: -60px;">
        <div class="d-flex justify-content-between mb-3">
          <h5 class="card-title mb-0">Statistik</h5>

        </div>
      </div>
      <div class="card-body">
        <div class="row gy-5">

          <div class="col-md-4 col-8">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-info me-3 p-3"><i class="fa fa-map" style="font-size: 50px; text-align:center; margin-left:-38px; margin-top:-18px;"></i>
</div>
              <div class="card-info">
                <h5 class="mb-0">8 Desa, 1 Kelurahan</h5>
                <small>Potensi Daerah</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-8">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-danger me-3 p-3"><i class="fa fa-map-marker" style="font-size: 50px; text-align:center; margin-left:-19px; margin-top:-18px;"></i></div>
              <div class="card-info">
                <h5 class="mb-0">238 Data</h5>
                <small>Potensi UMKM</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-8">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-success me-3 p-3"><i class="fa fa-street-view" style="font-size: 50px; text-align:center; margin-left:-28px; margin-top:-18px;"></i></div>
              <div class="card-info">
                <h5 class="mb-0">12 Data</h5>
                <small>UMKM Khusus</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <div class="content-wrapper ">
  <!-- Statistics -->
        </div></div>
  <!--/ Statistics -->
@endsection
