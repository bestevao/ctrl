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
                                        <h2>Modificar Conta</h2>
                                        <p><span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <div class="pull-right">
                                    <a class="btn btn-default" href="{{ route('accounts.index') }}"> Voltar</a>
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
  
    <form action="{{ route('accounts.update',$account->id) }}" method="POST">
        @csrf
        @method('PUT')
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Clientes</label>
                <select name="client_id" class="form-control" placeholder="Cliente">
                    <option></option>
                    @foreach ($clients as $selectclient)
                    <option value="{{ $selectclient->id }}" {{ ( $selectclient->id == $client->id) ? 'selected' : '' }}>{{ $selectclient->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>Conta:</strong>
                <input type="text" value="{{ $account->name }}" name="name" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <strong>Utilizador:</strong>
                <input type="text" value="{{ $account->login_user }}" name="login_user" class="form-control" placeholder="Utilizador">
            </div>
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" value="{{ $account->login_pass }}" name="login_pass" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <strong>Link Site:</strong>
                <input type="text" value="{{ $account->site }}" name="site" class="form-control" placeholder="Link Site">
            </div>
            <div class="form-group">
                <strong>Notas:</strong>
                <input type="text" value="{{ $account->notes }}" name="notes" class="form-control" placeholder="Notas">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection