@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a href="/kategori">Kategori</a> > Add</div>
                <form method="post" action="{{url('kategori')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-md-4"></div>
                      <div class="form-group col-md-4" style="margin-top: 2.5%">
                        <label for="Title">Nama Kategori</label>
                        <input type="text" class="form-control" name="namaKategori">
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
