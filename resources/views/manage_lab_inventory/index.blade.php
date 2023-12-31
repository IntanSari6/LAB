@extends('main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
    <h3>Manajemen Lab</h3>
</div>

<br>
<div class="row">
    <div class="col-lg-5 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-pc-display" viewBox="0 0 16 16">
                <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
              </svg>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            {{-- <h4>Reports</h4> --}}
          </div>
          <div class="card-body">
            <a href="/lab1">LAB 1</a> 
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-pc-display" viewBox="0 0 16 16">
                <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
              </svg>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            {{-- <h4>Online Users</h4> --}}
          </div>
          <div class="card-body">
            <a href="/lab2">LAB 2</a>
          </div>
        </div>
      </div>
    </div>                
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="text-center buttons pt-3 pb-2 mt-9">
    <a href="/create1" class="btn btn-icon btn-primary">Tambah</a>
    <a href="#" class="btn btn-icon btn-danger">Hapus</a>
  </div>  

@endsection