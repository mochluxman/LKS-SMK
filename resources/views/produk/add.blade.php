@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <a href=/produk>Produk</a> > Add</div>
                <form method="post" action="{{url('produk')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Title">Nama Produk :</label>
                      <input type="text" class="form-control" name="namaProduk">
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                        <label for="Description">Berat Produk:</label>
                        <input type="text" class="form-control" name="beratProduk">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Qty">Tanggal Produksi:</label>
                      <input type="date" class="form-control" name="tanggalProduksi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Description">Harga Produk:</label>
                      <input type="text" class="form-control" name="hargaProduk">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4" style="margin-left: 33%">
                        <div class="form-group">
                            <label for="idKategori">Kategori Produk:</label>
                            <select class="form-control" name="idKategori">
                              @foreach ($kategori as $items)
                              <option value="{{$items->idKategori}}">{{$items->namaKategori}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
