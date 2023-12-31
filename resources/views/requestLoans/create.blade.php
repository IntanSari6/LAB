@extends('main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Riwayat Peminjaman</h3>
    </div>
    <br>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Form Peminjaman</h4>
            </div>
            <form action="/manage_loans/store" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">NIP</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="nip_guru" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="nama_guru" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">Kelas</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="kelas" class="form-control selectric">
                                <option>X PPLG</option>
                                <option>X DKV 1</option>
                                <option>X DKV 2</option>
                                <option>XI PPLG 1</option>
                                <option>XI PPLG 2</option>
                                <option>XI DKV 1</option>
                                <option>XI DKV 2</option>
                                <option>XII RPL</option>
                                <option>XII MM 1</option>
                                <option>XII MM 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">Mapel</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="mata_pelajaran" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">Lab</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="lab" class="form-control selectric">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">Mulai</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="datetime-local" name="mulai" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">Selesai</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="datetime-local" name="selesai" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1">Ulasan</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="ulasan" class="summernote-simple"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mb-4">
                        <label class="col-form-label col-1 col-md-1 col-lg-1"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 