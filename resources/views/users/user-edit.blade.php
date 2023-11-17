<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <form method="POST" action="/update/users/{{$data['id']}}">
            @csrf
            @method('PUT')
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add User Details</h5>
                            <small class="text-muted float-end">Default label</small>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Full Name</label>
                                    <input type="text" name="name" value="{{$data['name']}}" class="form-control" id="basic-default-fullname"
                                           placeholder="Enter Name"/>
                                    @if($errors->has('name'))
                                        <span class="alert alert-danger"> {{ $errors->first('name') }}</span><br>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Email</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="text"
                                            id="basic-default-email"
                                            class="form-control"
                                            placeholder="john.doe"
                                            aria-label="john.doe"
                                            name="email"
                                            value="{{$data['email']}}"
                                            aria-describedby="basic-default-email2"
                                        />
                                        @if($errors->has('email'))
                                            <span class="alert alert-danger"> {{ $errors->first('email') }}</span><br>
                                        @endif
                                        <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label" for="basic-default-email">Password</label>
                                    <div class="col-md-10">
                                        <input class="form-control"  type="password" name="password" id="html5-password-input" />
                                    </div>
                                    @if($errors->has('password'))
                                        <span class="alert alert-danger"> {{ $errors->first('password') }}</span><br>
                                    @endif
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-label" for="basic-default-email">Confirm Password</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="password" name="password_confirmation"  id="html5-password-input" />
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add Roles</h5>
                            <small class="text-muted float-end">Merged input group</small>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bx-user"></i
                                ></span>
                                    <select name="roles[]" class="selectpicker" multiple data-live-search="true">
                                        @foreach($roles_data as $d)
                                            <option value="{{ $d['id'] }}" @foreach($data->roles as $roles) @if($roles['id']==$d['id']) selected @endif @endforeach>{{ $d['name'] }}</option>
                                        @endforeach
                                    </select><br>
                                    @if($errors->has('roles'))
                                        <span class="alert alert-danger"> {{ $errors->first('roles') }}</span><br>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layouts.app>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
