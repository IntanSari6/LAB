@extends('main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
    <h3>Tambah Lab</h3>
</div>
<br>
<div class="center">
    <div  class="col-12 col-md-6 col-lg-6">
        <div class="card">
        <form>
    <div class="card-header">
        <h4>Tambah Card</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nama Lab</label>
            <input type="text" class="form-control" required="">
        </div>
        </div>
        <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </form>
        </div>
    </div>
</div>

@endsection
