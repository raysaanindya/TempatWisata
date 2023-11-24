@extends("template")

@section("title")
Home
@endsection

@section("content")
<a href="{{url('tambah-wisata')}}" class="btn btn-sm btn-primary">Tambah</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Lokasi</th>
            <th class="text-center">detail</th>
            <th class="text-center">Hari Kerja</th>
            <th class="text-center">Jam kerja</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Hapus/Edit</th>
        </tr>
    </thead>
    
    <tbody>

        @foreach($destinations as $data)

        <tr>
        <td class="text-center">{{$data->id ++}}</td>
        <td class="text-center">{{$data->name}}</td>
        <td class="text-center">{{$data->location}}</td>
        <td class="text-center">{{$data->details}}</td>
        <td class="text-center">{{$data->day_open}}</td>
        <td class="text-center">{{$data->time_open}}</td>
        <td class="text-center">{{$data->pricing}}</td>
        <td class="text-center"><a class="btn btn-sm btn-danger" onclick="return confirm('Lo siento {{$data->name}}.?')" href="{{ url('data-wisata/'.$data->id.'/hapus')}}">DELETO</a><a class="btn btn-sm btn-success"  href="{{ url('data-wisata/'.$data->id.'/edit')}}">LO SIENTO</a></td>
        </tr>
        
    @endforeach
</table>
@endesection