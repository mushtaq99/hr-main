<x-layout>

    <x-slot name="title">
        Show all permissions
    </x-slot>

    <div class="container mt-5 bg-white" style="width: 900px; padding: 3rem;">

        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @can('create-post')
            <a class="btn btn-primary float-end mb-3" href="/permissions/create">Create new permission</a>
        @endcan
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Created on</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->slug }}</td>
                    <td>{{ $permission->created_at }}</td>
                    <td>
                        <a href="/permissions/{{ $permission->id }}/edit">edit</a>
                        <a href="/permissions/{{ $permission->id }}/delete">delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $permissions->links() }}

    </div>
</x-layout>
