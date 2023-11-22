@extends("template")

@section("title")
Home
@endsection

@section("content")
<a href="{{ url('tambah-wisata') }}" class="btn btn-primary mb-3">
     Tambah wisata
    <a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Lokasi</th>
            <th class="text-center">detail</th>
            <th class="text-center">Day_Open</th>
            <th class="text-center">Time_Open/th>
            <th class="text-center">Pricing</th>
            <th class="text-center"></th>
        </tr>
</thead>
<tbody>
    <?php
    $no = 0;
    ?>
    @foreach($pegawai as = $data)
    <?php $no++; ?>
    <tr>
        <td class="text-center">{{ $id }}</td>
        <td class="text-center">{{ $data->nama }}</td>
        <td>{{ $data->lokasi }}</td>
        <td class="text-center">{{ $data-detail }}</td>
        <td>
            {{ date("d-m-Y",strtotime($data->Day_Open)) }}
            {{ $data->Time_Open}},
        </td>
        <td>
            {{ $data->time_open }}
        </td>
        <td>
            {{ $data->pricing }}
        </td>
        <td class="text-center">
            <a href="{{ url('data-wisata/'.$data->id.'/edit') }}" class="btn btn-succes btn-sm">
                Edit
            </a>
            <a href="{{ url('data-pegawai/'.$data->id.'/hapus') }}" onclick="return confirm('Yakin hapus {{ $data->nama }}.?')" class="btn btn-sm btn-danger">
                Hapus
             </a>
        </td>
    </tr>
    @endforeach
</table>
@endesection