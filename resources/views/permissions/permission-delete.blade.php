<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <form method="POST" action="/delete/permission/{{$data['id']}}">
            @csrf
            @method('DELETE')
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
                                    <div class="mb-3" id="inputArrayContainer">
                                        <label for="inputArray" class="form-label">Delete Permissions</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="permission"  value="{{$data['slug']}}"  placeholder="Add Permissions">
                                        </div>
                                    </div>

                                    @if($errors->has('permissions'))
                                        <span class="alert alert-danger"> {{ $errors->first('permissions') }}</span><br>
                                    @endif


                                    <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layouts.app>

<script>

    function addInputField() {
        const container = document.getElementById('inputArrayContainer');
        const inputGroup = document.createElement('div');
        inputGroup.classList.add('mb-3', 'input-group');

        const inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.classList.add('form-control');
        inputField.name = 'permissions[]';
        inputField.placeholder = 'New Item';

        const addButton = document.createElement('button');
        addButton.type = 'button';
        addButton.classList.add('btn', 'btn-outline-secondary');
        addButton.textContent = 'Remove';
        addButton.onclick = function() {
            container.removeChild(inputGroup);
        };

        inputGroup.appendChild(inputField);
        inputGroup.appendChild(addButton);
        container.appendChild(inputGroup);
    }
</script>
