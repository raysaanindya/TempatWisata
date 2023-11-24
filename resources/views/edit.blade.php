@extends("template")

@section("title")
edit pegawai 
@endsection

@section("content")
<form method="post" action="{{ url('tambah') }}">
    @csrf 
    <input type="hidden" name="id" value="{{ $pegawai->id }}">
    <div class="mb-2">
        <label class="form-label">id</label>
        <input type="text" value="{{ $pegawai->nip }}" name="id" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" readonly required>
    </div>
    <div class="mb-2">
        <label class="form-label"> pricing </label>
        <div class="form-check">
            <label>
                <input type="radio" class="form-check-input" name="pricing" value="FREE" {{ ($pegawai->pricing == "free")? "checked" : "" }} >
                free
            </label>
        </div>
        <div class="form-check">
            <label>
                <input type="radio" class="form-check-input" name="pricing" value="PAID"  {{ ($pegawai->pricing == "PAID")? "checked" : "" }}>
                PAID
            </label>
    </div>
</div>
<div class="mb-2">
    <label class="form-label">location</label>
    <input type="text" name="locaton" class="form-control" value="{{ $wisata->location }}" required>
</div>
<div class="mb-2">
    <label class="form-label">details</label>
    <input type="text" name="details" class="form-control" value="{{ $wisata->details }}" required>
</div>
<div class="mb-2">
    <label class="form-label">day-open</label>
    <input type="text" name="day_open" class="form-control" required value="{{ $wisata->day-open }}">
</div>
<div class="mb-2">
    <label class="form-label">time-open</label>
    <input type="text" name="time-open" class="form-control" required>{{ $wisata->day-open }}</textarea>
</div>
<div class="mb-5">
    <button type="submit" class="btn btn-succes">
        simpan
    </button>
    <a href="{{ url('data-wisata') }}" class="btn btn-danger">
        kembali
    </a>
</div>

</form>
@endsection