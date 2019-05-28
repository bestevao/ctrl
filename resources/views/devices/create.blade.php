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
                                        <h2>Novo Equipamento</h2>
                                        <p><span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <div class="pull-right">
                                    <a class="btn btn-default" href="{{ route('devices.index') }}"> Voltar</a>
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
   
<form class="form-horizontal" role="form" action="{{ route('devices.store') }}" method="POST">
    @csrf

<div class="container">
   <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Cliente</label>
                     <div class="col-xs-6 col-sm-6 col-md-6">
                        <select name="client_id" class="form-control" placeholder="Cliente">
                            <option></option>
                            @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">Equipamento</label>
                     <div class="col-xs-6 col-sm-6 col-md-6">
                        <select name="type" class="form-control">
                          <option></option>  
                          <option name="type" value="Router">Router</option>
                          <option name="type" value="Switch">Switch</option>
                          <option name="type" value="Computador">Computador</option>
                          <option name="type" value="Telefone">Telefone</option>
                        </select>
                    </div>
                </div>
            </div>
         </div>
    </div>
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
                    <label class="control-label col-xs-4">IP:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="ip" class="form-control" placeholder="IP">
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4">IP:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="text" name="ip2" class="form-control" placeholder="IP2">
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

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
</div>



 
       
        <!--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>-->
        
    </div>
   
</form>
@endsection