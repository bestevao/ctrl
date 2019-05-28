@extends('layouts.default')

@section('content')
<!--<style>
    .table-responsive {
  overflow-x: inherit;
}
</style>-->


<!-- Breadcrumb -->
<div class="row">
    <ol class="cd-breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/clients">Clientes</a></li>
        <li class="current"><em>{{ $client->name }}</em></li>
    </ol>
</div>
<!-- Breadcrumb -->

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p><br>
        </div>
    @endif


<main role="main" class="container">

<div class="col-md-12 none">
    <div class="well none">
        <i class="fa fa-user fa-4x fa-fw" aria-hidden="true"></i>
            <div class="text">
            <h3>{{ $client->name }}</h3>
            <p>Cliente Onsystem</p>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('clients.index') }}"> Voltar</a>
            </div>
    </div>    
</div>

<!-- Tabs -->

                        
                 
                    

<!-- ./Tabs -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section id="tabs" class="project-tab">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Detalhes</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Equipamentos</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contas</a>
                                <a class="nav-item nav-link" id="nav-lic-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Licenças</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <dl class="row">
                                              <dt class="col-sm-3 text-md-right">Nome:</dt>
                                              <dd class="col-sm-9">{{ $client->name }}</dd>
                                              <dt class="col-sm-3 text-md-right">Endereço:</dt>
                                              <dd class="col-sm-9">{{ $client->address }}</dd>
                                              <dt class="col-sm-3 text-md-right">Cód. Postal:</dt>
                                              <dd class="col-sm-9">{{ $client->postalcode }}</dd>
                                              <dt class="col-sm-3 text-md-right">Localidade:</dt>
                                              <dd class="col-sm-9">{{ $client->city }}</dd>
                                              <dt class="col-sm-3 text-md-right">NIF:</dt>
                                              <dd class="col-sm-9">{{ $client->nif }}</dd>
                                              <dt class="col-sm-3 text-md-right">Telefone:</dt>
                                              <dd class="col-sm-9">{{ $client->phonenumber }}</dd>
                                              <dt class="col-sm-3 text-md-right">Telemóvel:</dt>
                                              <dd class="col-sm-9">{{ $client->mobile }}</dd>
                                              <dt class="col-sm-3 text-md-right">E-Mail:</dt>
                                              <dd class="col-sm-9">{{ $client->email }}</dd>
                                            </dl>
                                          </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Dispositivo</th>
                                                <th>Nome</th>
                                                <th>Utilizador</th>
                                                <th>Password</th>
                                            </tr>
                                            </thead>
                                            @foreach ($devices as $device)
                                            <tr>
                                                <td><a href="{{URL::route('devices.show',$device->id)}}">{{ $device->type }}</td>
                                                <td>{{ $device->name }}</td>
                                                <td>{{ $device->login_user }}</td>
                                                <td>{{ $device->login_pass }}</td>
                                            </tr>
                                            @endforeach
                                            </table>
                                        </div>
                            </div>

                            
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="table-responsive">
                                        <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Conta</th>
                                            <th>Utilizador</th>
                                            <th>Password</th>
                                        </tr>
                                        </thead>
                                        @foreach ($accounts as $account)
                                        <tr>
                                            <td><a href="{{URL::route('accounts.show',$account->id)}}">{{ $account->name }}</td>
                                            <td>{{ $account->login_user }}</td>
                                            <td>{{ $account->login_pass }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="nav-lic" role="tabpanel" aria-labelledby="nav-lic-tab">
                                        <div class="table-responsive">
                                        <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Chave</th>
                                            <th>Expira</th>
                                        </tr>
                                        </thead>
                                        @foreach ($licenses as $license)
                                        <tr>
                                            <td><a href="{{URL::route('licenses.show',$license->id)}}">{{ $license->name }}</a></td>
                                            <td>{{ $license->key }}</td>
                                            <td>{{ $license->expires }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

 


<!-- Fim Pesquisa -->



    

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection