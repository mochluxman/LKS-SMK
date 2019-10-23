@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <a href="/detail/order">Keranjang </a> > Add</div>
                <form method="post" action="{{url('/detail/order')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-4" style="margin-left: 33%">
                        <div class="form-group">
                            <label for="idKategori">Kategori Produk:</label>
                            <select id="idKategori" class="form-control" name="idKategori">
                              @foreach ($kategori as $items)
                              <option value="{{$items->idKategori}}">{{$items->namaKategori}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4" style="margin-left: 33%">
                        <div class="form-group">
                            <label for="idKategori">Nama Produk:</label>
                            <select class="form-control" id="idProduk" name="idProduk">
                                @foreach ($produk as $items)
                                <option value="{{$items->idProduk}}">{{$items->namaProduk}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                        <label for="Description">Qty        :</label>
                        <input id="idQty" type="number" min="0" value="1" class="form-control" name="jumlahProduk">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Description">Total Harga:</label>
                      <div id="total">
                        <input type="text" class="form-control" name="totalHarga" value="Rp. ,- " min="0" disabled>
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

<script src="{{asset('jquery/jquery-3.4.1.min.js')}}">


@endsection
