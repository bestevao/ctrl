@extends('layouts.default')
 
@section('content')
<body>
 
<!-- Breadcrumb -->
<div class="row">
    <ol class="cd-breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li class="current"><em>Equipamentos</em></li>
    </ol>
</div>
<!-- Breadcrumb -->

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


<main role="main" class="container">

<div class="col-md-12 none">
    <div class="well none">
        <i class="fa fa-desktop fa-4x fa-fw" aria-hidden="true"></i>
            <div class="text">
            <h3>Equipamentos</h3>
            <p>Onsystem</p>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('devices.create') }}"> Novo</a>
            </div>
    </div>    
</div>



<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Equipamento</th>
                <th>Nome</th>
                <th>IP</th>
                <th>IP 2</th>
                <th>Utillizador</th>
                <th>Password</th>
                <th width="280px"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
        <tr>
            <td>{{ $device->client->name }}</td>
            <td>{{ $device->type }}</td>
            <td>{{ $device->name }}</td>
            <td>{{ $device->ip }}</td>
            <td>{{ $device->ip2 }}</td>
            <td>{{ $device->login_user }}</td>
            <td>{{ $device->login_pass }}</td>
            <td>
                <form action="{{ route('devices.destroy',$device->id) }}" method="POST">
   
                    <a class="btn btn-link" href="{{ route('devices.show',$device->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="btn btn-link" href="{{ route('devices.edit',$device->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-link" onclick="return confirm('Tem a certeza que pretende eliminar?')"><i class="fa fa-trash"></i></button>
                </form>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</main>
 
  @endsection 

</body>