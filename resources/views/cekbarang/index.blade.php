@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Daftar Barang
            </h3>
        </div>
        <hr>

            <div class="alert alert-danger">

            </div>

        <div class="container">
            <div class="pt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>Kode Barang</th>
                            <th>Nama Supplier</th>
                            <th>Nama Barang</th>
                            <th>Phone</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($cekbarangs as $cekbarang)
                        <tr>
                            <td>{{$cekbarang->kode_barang}}</td>
                            <td>{{$cekbarang->nama_supplier}}</td>
                            <td>{{$cekbarang->nama_barang}}</td>
                            <td>{{$cekbarang->phone}}</td>
                            <td>{{$cekbarang->stock}}</td>
                             <form action="{{route('cekbarang.index', $cekbarang->id)}}" method="post">
                                    <button href="" class="btn btn-danger btn-sm">Buat Request</button>
                                </form>
                            </td>
                        </tr>

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection