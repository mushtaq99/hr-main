
<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Roles</h5>
            <div class="card-body m-100">
                <div class="demo-inline-spacing">
                    <a href="/add/roles"><button type="button" class="btn rounded-pill btn-primary">Add Roles</button></a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Role Name</th>
                        <th>Role Slug</th>
                        <th>Permissions</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($data as $d)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $d['name'] }}</strong></td>
                        <td>{{ $d['slug'] }}</td>
                        <td>
                            @foreach ($d->permissions as $permission)
                                <span class="badge bg-label-info">{{ $permission->name }}</span>
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
                                    <a class="dropdown-item" href="/edit/roles/{{$d['id']}}"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="/delete/roles/{{$d['id']}}"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $data->links() }}

            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
</x-layouts.app>
