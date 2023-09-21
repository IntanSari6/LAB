@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Kelola Jadwal Lab</h3>
    </div><br>
    <div class="row">
        <div class="col-md-9">
            <div id="app">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Kalender</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="fc-overflow">
                                            <div id="KalenderPeminjaman"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
       
        
@endsection
@push('script')
<script>

$("#KalenderPeminjaman").fullCalendar({
  height: 'auto',
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },
  editable: true,
  events: [
    @foreach($reqloan as $item)
    {
      title: '{{$item->nama_guru}}',
      start: '{{$item->mulai}}',
      end: '{{$item->selesai}}',
      backgroundColor: "#fff",
      borderColor: "#fff",
      textColor: '#000'
    },
    @endforeach
  ]

});
</script>
@endpush