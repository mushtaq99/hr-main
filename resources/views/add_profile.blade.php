<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <form method="POST" action="/add/users">
            @csrf
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add Profile Details</h5>
                            <small class="text-muted float-end">Default label</small>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">

                            </div>
                            <div class="mb-3 row">
                                <label class="form-label" for="basic-default-text">Mobile No:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="mobile" id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label" for="basic-default-email">Alternate Mobile No:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="secondary_mobile"  id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label" for="basic-default-email">CNIC:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="cnic"  id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3">

                            </div>
                            <fieldset data-role="controlgroup">
                                <legend>Choose gender:</legend>
                                <div class="mb-3">

                                </div>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="male" value="male" checked>
                                <label for="female">Female</label>
                                <input type="radio" name="gender" id="female" value="female">
                            </fieldset>
                            <div class="mb-3">

                            </div>
                            <h5>Date Of Birth</h5>
                            <label for="birthday">Birthday:</label>
                            <input type="date" id="birthday" name="birthday">
                            <div class="mb-3">

                            </div>
                            <fieldset data-role="controlgroup">
                                <legend>Marital Status:</legend>
                                <div class="mb-3">

                                </div>
                                <label for="male">Single</label>
                                <input type="radio" name="marital_status" id="single" value="single" checked>
                                <label for="married">Married</label>
                                <input type="radio" name="marital_status" id="married" value="married">
                            </fieldset>
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
{{--<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>--}}
