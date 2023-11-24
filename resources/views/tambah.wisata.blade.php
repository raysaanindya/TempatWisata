@extends("template")

@section("title")
Tambah Wisata
@endsection

@section("content")
<form method="post" action="{{ url('tambah-wisata') }}">
    @csrf
    <div class="mb-2">
        <label class='form-label'>ID</label>
        <input type="text" name="id" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class='form-label'>Name</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Location</label>
        <textarea class="form-control" name="lokasi" required></textarea>
    </div>
    <div class="mb-2">
        <label class="form-label">Details</label>
        <textarea class="form-control" name="detail" required></textarea>
    </div>
    <div class="mb-2">
        <label class="form-label">Day Open</label>
        <input type="day" name="day_open" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Time Open</label>
        <input type="time" name="time_open" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Pricing</label>
        <input type="price" name="pricing" class="form-control" required>
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Edit
        </button>
        <a href="{{ url('data-wisata') }}" class="btn btn-danger">
            Hapus
        </a>
    </div>
</form>
@endsection
