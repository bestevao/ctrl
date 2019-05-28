@extends('layouts.default')
  
@section('content')

<!-- Breadcomb area Start-->
    <div class="breadcomb-area">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Novo Fornecedor</h2>
                                        <p><span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <div class="pull-right">
                                    <a class="btn btn-default" href="{{ route('suppliers.index') }}"> Voltar</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Breadcomb area End-->
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form class="form-horizontal" role="form" action="{{ route('suppliers.store') }}" method="POST">
    @csrf
  
  <div class="container">
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Nome:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nome">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Utilizador:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="login_user" class="form-control" placeholder="Utilizador">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Password:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="login_pass" class="form-control" placeholder="Password">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Nº Cliente:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="client_number" class="form-control" placeholder="Nº Cliente">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Telefone:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="phonenumber" class="form-control" placeholder="Telefone">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Telemóvel:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="mobile" class="form-control" placeholder="Telemóvel">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Email:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Notas:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="notes" class="form-control" placeholder="Notas">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
  </div>
     
</form>
@endsection