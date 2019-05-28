@extends('layouts.default')
 
@section('content')
<body>
 
<!-- Breadcrumb -->
<div class="row">
    <ol class="cd-breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li class="current"><em>Clientes</em></li>
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
        <i class="fa fa-users fa-4x fa-fw" aria-hidden="true"></i>
            <div class="text">
            <h3>Clientes</h3>
            <p>Onsystem</p>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('clients.create') }}"> Novo</a>
            </div>
    </div>    
</div>



<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Localidade</th>
            <th>NIF</th>
            <th>Contacto</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->city }}</td>
            <td>{{ $client->nif }}</td>
            <td>{{ $client->phonenumber }}</td>
            <td>{{ $client->email }}</td>
            <td>
                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
   
                    <a class="btn btn-link" href="{{ route('clients.show',$client->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="btn btn-link" href="{{ route('clients.edit',$client->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
   
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-link" onclick="return confirm('Tem a certeza que pretende eliminar?')"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>



</main>

  <script type="text/javascript" src="{{ URL::asset('/js/function.js') }}"></script>
</body>     
@endsection 
