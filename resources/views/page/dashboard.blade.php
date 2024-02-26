@extends('layout.app')

@section('content')

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $totalMurid }}</h3>

          <p>Total Murid</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $totalUser }}</h3>

          <p>Total User</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $userWithAbsen }}</h3>

          <p>Sudah Absen Hari Ini</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $userWithoutAbsen }}</h3>

          <p>Belum Absen Hari Ini</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>
        </div>
      </div>
    </div>
  </div>

@endsection