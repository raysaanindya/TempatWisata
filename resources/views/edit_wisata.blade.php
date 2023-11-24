@extends("template")

@section("title")
edit pegawai 
@endsection

@section("content")
<style>
    body{
        color: blue !important;
    }
</style>
<div class="card shadow bg-tranparents px-5 py-5">
<table class="table table-bordered table-striped">
<form action="{{ route('destinations.edit') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $destinations->id }}">
    <div class="form-group mb-2">
        <label for="nama">Nama</label>
        <input type="text" name="name"value="{{$destinations->name}}" class="form-control bg-warning" id="name"required>
    </div>
   

    <div class="form-group mb-2">
        <label for="location">Lokasi</label>
        <input type="text" name="location"value="{{$destinations->location}}" class="form-control bg-success" id="location">
    </div>
    <div class="form-group mb-2">
        <label for="details">Detail </label>
        <input type="text" name="details"value="{{$destinations->details}}" class="form-control bg-primary" id="details">
    </div>
    <div class="form-group mb-2">
        <label for="day_open">Hari Buka</label>
        <input type="text" name="day_open"value="{{$destinations->day_open}}" class="form-control bg-info" id="day_open">
    </div>
    <div class="form-group mb-2">
        <label for="time_open">Jam Buka</label>
        <input type="text" name="time_open"value="{{$destinations->time_open}}" class="form-control bg-info" id="time_open">
    </div>
    <div class="form-check mb-2">
    <label for="pricing">Keterangan</label><br>
    <div class="form-check form-check-inline">
        <label class="form-check-label " for="Free">
        <input class="form-check-input bg-danger" type="radio" name="pricing" value="Free" id="pricing" <?=($destinations->pricing == "Free")? "checked" :""?>>Free</label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label " for="Paid">
        <input class="form-check-input bg-danger" type="radio" name="pricing" value="Paid" id="pricing" <?=($destinations->pricing == "Paid")? "checked" :""?>>Paid</label>
    </div>
</div>
    
    <button type="submit" class="btn mt-3 btn-sm btn-primary">Simpan</button><br>
    <a href="{{ url('data-wisata') }}" class="btn mt-3 btn-sm btn-primary">Kembali</a>
</form>
</table>
</div>
</form>
@endsection