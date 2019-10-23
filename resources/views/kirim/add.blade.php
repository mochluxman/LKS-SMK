@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <a href=/kirim>Kirim</a> > Add</div>
                <form method="post" action="{{url('kirim')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Title">Nama Paket :</label>
                      <input type="text" class="form-control" name="namaPaket">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Description">Harga Paket:</label>
                      <input type="text" class="form-control" name="hargaPaket">
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
