@extends('layouts.default')
@section('title','Index')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data</h1>
        <a href="{{route('dashboard.create')}}" class="btn btn-primary btn-sm shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
      </a>
      </div>

      <div class="row">
          <div class="col-7 col-md-7">
            <div class="card-shadow">
                @if (session('sukses'))
                <div class="alert alert-danger">
                    <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                    {{session('sukses')}}
                </div>
            @endif
                <div class="card-body">
                  <form action="{{route('dashboard.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="pembayaran">Pembayaran</label>
                          <input type="text" name="pembayaran" class="form-control d-inline ml-3" id="pembayaran" style="width: 50%">
                      </div>        
                      <div class="form-group">
                          <label for="buruh_a">Buruh A</label>
                          <input type="text" id="buruha" name="buruh_a" class="form-control d-inline ml-5" style="width: 30%">  &nbsp; % 
                      </div>        
                      <div class="form-group">
                          <label for="buruh_b">Buruh B</label>
                          <input type="text" id="buruhb" name="buruh_b" class="form-control d-inline ml-5" style="width: 30%; align=left"> &nbsp; % 
                      </div>        
                      <div class="form-group">
                          <label for="buruh_c">Buruh C</label>
                          <input type="text" id="buruhc" name="buruh_c" class="form-control d-inline ml-5" style="width: 30%">  &nbsp; %    
                      </div>    
                      <button class="btn btn-primary" type="submit">
                          <i class="fa fa-save"></i> Simpan
                      </button>
                  </form>
                </div>
            </div>
          </div>

          <div class="col-5 col-md-5">
            <div class="card-shadow">
                <div class="card-body">
                    <br>
                    <div class="form-group mt-4">
                        <label for="buruh_a">Buruh A</label>
                        <input type="text" id="totala" name="buruh_a" class="form-control d-inline ml-5" style="width: 40%" readonly> 
                    </div>        
                    <div class="form-group">
                        <label for="buruh_b">Buruh B</label>
                        <input type="text" id="totalb" name="buruh_b" class="form-control d-inline ml-5" style="width: 40%" readonly>
                    </div>        
                    <div class="form-group">
                        <label for="buruh_c">Buruh C</label>
                        <input type="text" id="totalc" name="buruh_c" class="form-control d-inline ml-5" style="width: 40%" readonly>     
                    </div>      
                </div>
            </div>
          </div>
      </div>
</div>
@endsection