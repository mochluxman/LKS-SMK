@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <a href=/order>Order</a> > Add</div>
                <form method="post" action="{{url('order')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4" style="margin-top: 2.5%">
                      <label for="Qty">Tanggal Order:</label>
                      <input type="date" class="form-control" name="orderDate">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4" style="margin-left: 33%">
                        <div class="form-group">
                            <label for="idCostumer">Costumer:</label>
                            <select class="form-control" name="idCostumer">
                              @foreach ($costumer as $items)
                              <option value="{{$items->id}}">{{$items->nama}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4" style="margin-left: 33%">
                        <div class="form-group">
                            <label for="idKirim">Kategori Kirim:</label>
                            <select class="form-control" name="idKirim">
                              @foreach ($kirim as $items)
                              <option value="{{$items->idKirim}}">{{$items->namaPaket}}</option>
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
