<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <form method="POST" action="/update/roles/{{$data['id']}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-8">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Layout</h5>
                            <small class="text-muted float-end">Default label</small>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Enter Role</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" name="role" value="{{$data['name']}}" placeholder="Enter Role" />

                                    @if($errors->has('role'))
                                        <span class="alert alert-danger"> {{ $errors->first('role') }}</span><br>
                                    @endif
                                    <div class="mb-4">
                                        <label for="exampleFormControlSelect2" class="form-label">Select Permissions</label>
                                    </div>

                                    <div class="mb-4">
                                        <select name="permissions[]" class="selectpicker" multiple data-live-search="true">
                                            @foreach($permissionArray as $p)
                                                <option value="{{ $p['id']}}" @foreach($data->permissions as $per) @if($p['id']==$per['id']) selected @endif @endforeach>{{ $p['name'] }}</option>
                                            @endforeach
                                        </select><br>
                                        @if($errors->has('permissions'))
                                            <span class="alert alert-danger"> {{ $errors->first('permissions') }}</span><br>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layouts.app>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
