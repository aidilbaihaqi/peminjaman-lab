@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
  <!-- Page Title Header Starts-->
  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h3 class="page-title">Dashboard</h3>
      </div>
    </div>
  </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-8 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h4 class="card-title mb-0">Data Laboratorium</h4>
            <a href="#"><small>Show All</small></a>
          </div>
          <p>Berikut adalah beberapa data laboratorim yang tercatat.</p>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Lab ID</th>
                  <th>Nama</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>MTLTN-LAB-1</td>
                  <td>Laboratorium Teknik Informatika A1</td>
                  <td><div class="btn-sm btn-success btn-rounded">Tersedia</div></td>
                </tr>
                <tr>
                  <td>MTLTN-LAB-2</td>
                  <td>Laboratorium Teknik Informatika B1</td>
                  <td><div class="btn-sm btn-danger btn-rounded" >Tidak Tersedia</div></td>
                </tr>
                <tr>
                  <td>MTLTN-LAB-3</td>
                  <td>Laboratorium Teknik Informatika C1</td>
                  <td><div class="btn-sm btn-danger btn-rounded" >Tidak Tersedia</div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-0">Peminjaman Terbaru</h4>
          <div class="d-flex py-2 border-bottom">
            <div class="wrapper">
              <small class="text-muted">Dec 8, 2024  - Dec 12, 2024</small>
              <h6 class="font-weight-semibold text-gray mb-1">Rivandi Ismanto</h6>
              <p class="font-sm text-gray">MTLTN-LAB-1</p>
            </div>
            <small class="text-muted ml-auto">Show</small>
          </div>
          <div class="d-flex py-2 border-bottom">
            <div class="wrapper">
              <small class="text-muted">Dec 8, 2024 - Dec 12, 2024</small>
              <h6 class="font-weight-semibold text-gray mb-1">Fajri Hasan</h6>
              <p class="font-sm text-gray">MTLTN-LAB-1</p>
            </div>
            <small class="text-muted ml-auto">Show</small>
          </div>
          <div class="d-flex py-2 border-bottom">
            <div class="wrapper">
              <small class="text-muted">Dec 8, 2024 - Dec 12, 2024</small>
              <h6 class="font-weight-semibold text-gray mb-1">Aidil Baihaqi</h6>
              <p class="font-sm text-gray">MTLTN-LAB-1</p>
            </div>
            <small class="text-muted ml-auto">Show</small>
          </div>
          <a class="d-block mt-3" href="#">Show all</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection