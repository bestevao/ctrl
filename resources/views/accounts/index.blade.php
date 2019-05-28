@extends('layouts.default')
 
@section('content')
<body>
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
                                        <h2>Contas</h2>
                                        <p>Listagem Contas <span class="bread-ntd">Acessos</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('accounts.create') }}"> Nova</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Breadcomb area End-->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Cliente</th>
            <th>Conta</th>
            <th>Utilizador</th>
            <th>Password</th>
            <th>Link Site</th>
            <th>Notas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($accounts as $account)
        <tr>
            <td>{{ $account->client->name }}</td>
            <td>{{ $account->name }}</td>
            <td>{{ $account->login_user }}</td>
            <td>{{ $account->login_pass }}</td>
            <td>{{ $account->site }}</td>
            <td>{{ $account->notes }}</td>
            <td>
                <form action="{{ route('accounts.destroy',$account->id) }}" method="POST">
   
                    <a class="btn btn-default" href="{{ route('accounts.show',$account->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a class="btn btn-default" href="{{ route('accounts.edit',$account->id) }}"><i class="glyphicon glyphicon-edit"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-default" onclick="return confirm('Tem a certeza que pretende eliminar?')"><i class="glyphicon glyphicon-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $accounts->links() !!}

    @endsection