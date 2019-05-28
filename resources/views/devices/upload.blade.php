<form action="/uploadfilestore" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Upload ficheiro backup.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>