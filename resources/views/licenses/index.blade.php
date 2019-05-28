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
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Licenças</h2>
                                        <p>Listagem Licenças <span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('licenses.create') }}"> Nova Licença</a>
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
   
    <table id="clientstable" class="table table-bordered">
        <tr>
            <th>Cliente</th>
            <th>Conta Acesso</th>
            <th>Nome</th>
            <th>Key</th>
            <th>Expira</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($licenses as $license)
        <tr>
            <td>{{ $license->client->name }}</td>
            <td>{{ $license->account_id }}</td>
            <td>{{ $license->name }}</td>
            <td>{{ $license->key }}</td>
            <td>{{ $license->expires }}</td>
            <td>
                <form action="{{ route('licenses.destroy',$license->id) }}" method="POST">
   
                    <a class="btn btn-default" href="{{ route('licenses.show',$license->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a class="btn btn-default" href="{{ route('licenses.edit',$license->id) }}"><i class="glyphicon glyphicon-edit"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-default" onclick="return confirm('Tem a certeza que pretende eliminar?')"><i class="glyphicon glyphicon-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("clientstable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>