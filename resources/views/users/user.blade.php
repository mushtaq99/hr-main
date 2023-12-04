<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Users</h5>
            <div class="card-body m-100">
                <div class="demo-inline-spacing">
                    <a href="/add/users">
                        <button type="button" class="btn rounded-pill btn-primary">Add User</button>
                    </a>
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

                    @foreach($data as $item)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $item['name'] }}</strong></td>
                            <td>{{ $item['email'] }}</td>
                            <td>
                                @foreach ($item->roles as $roles)
                                    <span class="badge bg-label-info">{{ $roles->name }}</span>
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <div class="demo-inline-spacing">
                                    <button type="button" class="btn btn-outline-primary btn-sm"
                                            onclick="handleButtonClick('edit', {{ $item['id'] }})">
                                        <span class="tf-icons bx bx-pencil me-1"></span>Edit
                                    </button>

                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                            onclick="handleButtonClick('delete', {{ $item['id'] }})">
                                        <span class="tf-icons bx bx-trash me-1"></span>Delete
                                    </button>

                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                            onclick="handleButtonClick('addProfile', {{ $item['id'] }})">
                                        <span class="tf-icons bx bx-user-plus me-1"></span>Add Profile
                                    </button>
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
    <script>
        function handleButtonClick(action, userId) {
            var url;
            switch (action) {
                case 'edit':
                    url = '/edit/users/' + userId;
                    break;
                case 'delete':
                    url = '/delete/users/' + userId;
                    break;
                case 'addProfile':
                    url = '/profile/add/' + userId;
                    break;
                default:
                    // Handle other actions if needed
                    return;
            }

            // Navigate to the constructed URL
            window.location.href = url;
        }
    </script>
</x-layouts.app>
