@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Equipamento</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('devices.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $device->type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $device->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $device->ip }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Upload</div>
                <div class="card-body">
                <form action="{{ route('devices.upload', $device->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Upload ficheiro backup.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>



        </div>
    </div>

        </div>
    </div>




    <table id="clientstable" class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Equipamento</th>
            <th>file</th>
            <th width="280px">Download</th>
        </tr>
        @foreach ($backups as $backup)
        <tr>
            <td>{{ $backup->id }}</td>
            <td>{{ $backup->device_id }}</td>
            <td>{{ $backup->file }}</td>
            <td>{{ $backup->path }}</td>
            <td>
                    
                    <a class="btn btn-default" href="{{ route('backups.download',$backup->id) }}"><i class="glyphicon glyphicon-upload"></i></a>
                    
   Click
</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

