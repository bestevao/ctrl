@extends('layouts.default')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('clients.update',$client->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" value="{{ $client->name }}" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                    <strong>Endereço:</strong>
                    <input type="text" name="address" value="{{ $client->address }}" class="form-control" placeholder="Endereço">
                </div>
                <div class="form-group">
                    <strong>Cód. Postal:</strong>
                    <input type="text" name="postalcode" value="{{ $client->postalcode }}" class="form-control" placeholder="Cód. Postal">
                </div>
                <div class="form-group">
                    <strong>Cidade:</strong>
                    <input type="text" name="city" value="{{ $client->city }}" class="form-control" placeholder="Cidade">
                </div>
                <div class="form-group">
                    <strong>NIF:</strong>
                    <input type="text" name="nif" value="{{ $client->nif }}" class="form-control" placeholder="NIF">
                </div>
                <div class="form-group">
                    <strong>Telefone:</strong>
                    <input type="text" name="phonenumber" value="{{ $client->phonenumber }}" class="form-control" placeholder="Telefone">
                </div>
                <div class="form-group">
                    <strong>Telemóvel:</strong>
                    <input type="text" name="mobile" value="{{ $client->mobile }}" class="form-control" placeholder="Telemóvel">
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $client->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection