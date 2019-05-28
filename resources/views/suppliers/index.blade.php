@extends('layouts.default')
 
@section('content')
<body>
 
<!-- Breadcrumb -->
<div class="row">
    <ol class="cd-breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li class="current"><em>Fornecedores</em></li>
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
        <i class="fa fa-building fa-4x fa-fw" aria-hidden="true"></i>
            <div class="text">
            <h3>Fornecedores</h3>
            <p>Onsystem</p>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('suppliers.create') }}"> Novo</a>
            </div>
    </div>    
</div>



<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nº Cliente</th>
            <th>Telefone</th>
            <th>Telemóvel</th>
            <th>Email</th>
            <th>Notas</th>
            <th width="280px"></th>
        </tr>
        @foreach ($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->login_user }}</td>
            <td>{{ $supplier->login_pass }}</td>
            <td>{{ $supplier->client_number }}</td>
            <td>{{ $supplier->phonenumber }}</td>
            <td>{{ $supplier->mobile }}</td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->notes }}</td>
            <td>
                <form action="{{ route('suppliers.destroy',$supplier->id) }}" method="POST">
   
                    <a class="btn btn-link" href="{{ route('suppliers.show',$supplier->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="btn btn-link" href="{{ route('suppliers.edit',$supplier->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
   
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


</body>     
@endsection