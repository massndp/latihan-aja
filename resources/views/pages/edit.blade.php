@extends('layouts.default')
@section('title','Index')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
    </div>

      <div class="row">
          <div class="col-7 col-md-7">
            <div class="card-shadow">
                <div class="card-body">
                  <form action="{{route('dashboard.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="pembayaran">Pembayaran</label>
                          <input type="text" name="pembayaran" class="form-control d-inline ml-3" id="pembayaran" value="{{$item->pembayaran}}" style="width: 50%">   
                      </div>        
                      <div class="form-group">
                          <label for="buruh_a">Buruh A</label>
                          <input type="text" id="buruha" name="buruh_a" class="form-control d-inline ml-5" style="width: 30%" value="{{$item->buruh_a / $item->pembayaran * 100}}">&nbsp; % 
                      </div>        
                      <div class="form-group">
                          <label for="buruh_b">Buruh B</label>
                          <input type="text" id="buruhb" name="buruh_b" class="form-control d-inline ml-5" style="width: 30%; align=left" value="{{$item->buruh_b / $item->pembayaran * 100}}"> &nbsp; % 
                      </div>        
                      <div class="form-group">
                          <label for="buruh_c">Buruh C</label>
                          <input type="text" id="buruhc" name="buruh_c" class="form-control d-inline ml-5" style="width: 30%" value="{{$item->buruh_c / $item->pembayaran * 100}}">&nbsp; % 
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
                        <input type="text" id="totala" name="buruh_a" class="form-control d-inline ml-5" value="{{$item->buruh_a}}" style="width: 40%" readonly>  
                    </div>        
                    <div class="form-group">
                        <label for="buruh_b">Buruh B</label>
                        <input type="text" id="totalb" name="buruh_b" class="form-control d-inline ml-5" value="{{$item->buruh_b}}" style="width: 40%" readonly>
                    </div>        
                    <div class="form-group">
                        <label for="buruh_c">Buruh C</label>
                        <input type="text" id="totalc" name="buruh_c" class="form-control d-inline ml-5" value="{{$item->buruh_c}}" style="width: 40%" readonly>     
                    </div>      
                </div>
            </div>
          </div>
      </div>
</div>
@endsection