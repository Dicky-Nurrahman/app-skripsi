@extends('layout/template')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Expandable Table</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>UOM</th>
                            <th>Qty</th>
                            <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($products as $prod)
                            <tr>
                                <td>{{$prod->id}}</td>
                                <td>{{$prod->name}}</td>
                                <td>{{$prod->description}}</td>                                
                                <td>{{$prod->uom}}</td>
                                <td>{{$prod->qty}}</td>
                                <td>
                                    <a href="#"><i class="fa fa-edit"></i></a>
                                    <a href="#"><i class="fa fa-trash" style="color: red; margin-left: 10px"></i></a>
                                </td>
                            </tr> 
                        @endforeach
                     </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection