@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 pt-4">
            <h2 class="text-primary font-weight-bold">
                Daftar barang
            </h2>
            <hr>
            <form action="{{route('daftarbarang.index')}}" enctype="multipart/form-data" method="POST">

                <div class="alert alert-success">
                     </div>
                <div class="px-4">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Kode Barang</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="" id="">
                        </div>
                    </div>
                         <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Nama Supplier</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="" id="">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Nama barang</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="" id="">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Phone</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="" id="">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="" id="">
                        </div>
                    </div>

                                <button type="submit" class="btn btn-success">Buat Request</button>
                                <form action="{{route('daftarbarang.create')}}" enctype="multipart/form-data" method="POST">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
