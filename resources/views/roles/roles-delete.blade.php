
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

                    @foreach($roles as $r)
                        <tr>
                            <td>{{ $r['name'] }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
</x-layouts.app>
