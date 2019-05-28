@extends('layouts.default')

@section('content')
<style>
    .table-responsive {
  overflow-x: inherit;
}
</style>
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
                                        <h2>{{ $license->name }}</h2>
                                        <p>{{ $client->name }}<span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('licenses.index') }}"> Voltar</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Breadcomb area End-->

<div class="container">   
   <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">Nome:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    {{ $license->name }}
                    </div>
                </div>
            </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">Endereço:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    {{ $license->expire }}
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">Cód. Postal:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                   
                    </div>
                </div>
            </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">Localidade:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                   
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">NIF:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    
                    </div>
                </div>
            </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">Telefone:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">Telemóvel:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                   
                    </div>
                </div>
            </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-xs-4" align="right">Email:</label>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>


@endsection
