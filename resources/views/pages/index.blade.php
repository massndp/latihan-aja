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

          <div class="card-shadow">
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                          @if (session('sukses'))
                              <div class="alert alert-success">
                                  <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                  {{session('sukses')}}
                              </div>
                          @endif
                          <thead>
                              <tr>
                                  <th>Total Pembayaran</th>
                                  <th>Buruh A</th>
                                  <th>Buruh B</th>
                                  <th>Buruh C</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($items as $item)
                                  <tr>
                                    <td>@currency($item->pembayaran) </td>
                                    <td>@currency($item->buruh_a) </td>
                                    <td>@currency($item->buruh_b) </td>
                                    <td>@currency($item->buruh_c) </td>
                                    <td>
                                        <a href="#mymodal"
                                        data-remote="{{ route('dashboard.show', $item->id) }}"
                                        data-toggle="modal"
                                        data-target="#mymodal"
                                        data-title="Detail Transaksi"
                                         class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('dashboard.edit',$item->id)}}" class="btn btn-warning">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{route('dashboard.destroy', $item->id)}}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>  
                                  </tr>
                              @empty
                                  <tr>
                                      <td colspan="7" class="text-center">Data Kosong</td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      
</div>
@endsection