@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 pt-4">
            <h2 class="text-primary font-weight-bold">
                Daftar Barang
            </h2>
            <hr>
            <form action="{{route('cekbarang.update', $cekbarang->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                <div class="px-4">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Kode Barang</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="kode_barang" id="" value="">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Nama Supplier</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="nama_supplier" id="" value="">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Nama Barang</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="nama_barang" id="" value="">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Phone</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="phone" id="" value="">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="stock" id="" value="">
                        </div>
                    </div>
                                @foreach($cekbarang as $cekbarang)

                @endforeach
                            </select>
                        </div>
                    </div>
                                <button type="submit" class="btn btn-success">Buat Request</button>
                                     <form action="{{route('cekbarang.index')}}" enctype="multipart/form-data" method="POST">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection