@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Riwayat Peminjaman</h3>
    </div>
    <br>
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Riwayat Peminjaman Lab</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Lab</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>0101</td>
                            <td>Inul</td>
                            <td>12 RPL</td>
                            <td>PWPB</td>
                            <td>1</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td>

                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                    data-target="#staticBackdrop">
                                    Detail
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>0102</td>
                            <td>Daratista</td>
                            <td>12 RPL</td>
                            <td>PWPB</td>
                            <td>2</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>0103</td>
                            <td>Inul Daratista</td>
                            <td>12 RPL</td>
                            <td>PWPB</td>
                            <td>2</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vel excepturi itaque,
                            aspernatur in, asperiores eveniet temporibus nisi quas reprehenderit dolor, ratione dolorem modi
                            earum! Ipsum porro officia quos totam.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
