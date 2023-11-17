
<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Users</h5>
            <div class="card-body m-100">
                <div class="demo-inline-spacing">
                    <a href="/add/users"><button type="button" class="btn rounded-pill btn-primary">Add User</button></a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($data as $data)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $data['name'] }}</strong></td>
                        <td>{{ $data['email'] }}</td>
                        <td>
                            @foreach ($data->roles as $roles)
                                <span class="badge bg-label-info">{{ $roles->name }}</span>
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/edit/users/{{$data['id']}}"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="/delete/users/{{ $data['id'] }}"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    <a class="dropdown-item" href="/profile/add/{{ $data['id'] }}"
                                    ><i class="bx bx-edit-alt me-1"></i>Add Profile</a
                                    >
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
</x-layouts.app>
