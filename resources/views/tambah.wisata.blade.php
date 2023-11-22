@extends("template")

@section("title")
Tambah Pegawai
@endsection

@section("content")
<form method="post" action="{{ url('tambah-pegawai') }}">
    @csrf
    <div class="mb-2">
        <label class='form-label'>NIP</label>
        <input type="text" name="nip" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class='form-label'>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-2">
         <label class="form-label"></label>
         <div class="form-check">
            <label>
                <input type="radio" class="from-check-input" name="jk" value="L" checked>
                Laki-laki
            </label>
         </div>
         <div class="mb-2">
         <label class="form-label"></label>
         <div class="form-check">
            <label>
                <input type="radio" class="from-check-input" name="jk" value="P" checked>
                Perempuan
            </label>
         </div>
    </div>
    <div class="mb-2">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">No. Hp</label>
        <input type="text" name="hp" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" required></textarea>
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Edit
        </button>
        <a href="{{ url('data-pegawai') }}" class="btn btn-danger">
            Hapus
        </a>
    </div>
</form>
@endsection
