<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h3 align="center">User Complete Profile</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-xl">
                <form method="POST" action="/profile/store/{{$users->id}}">
                    @csrf
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Information</h5> <small class="text-muted float-end">Default
                                label</small>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Mobile No</label>
                                <input type="tel" name="mobile_no" class="form-control" id="basic-default-phone"
                                       placeholder="0333-">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Alternate Mobile</label>
                                <input type="tel" name="alternate_mobile_no" class="form-control" id="basic-default-phone"
                                       placeholder="0333-">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-cnic">CNIC</label>
                                <input type="text" name="cnic" class="form-control" id="basic-default-cnic"
                                       placeholder="0333-">
                            </div>
                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                <label class="form-label" for="form-repeater-1-3">Gender</label>
                                <select id="form-repeater-1-3" class="form-select" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="birthday">Birth Date</label>
                                <input type="date" id="birthday" name="date_of_birth"
                                       class="form-control dob-picker flatpickr-input active" placeholder="YYYY-MM-DD">
                            </div>

                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                <label class="form-label" for="form-repeater-1-3">Marital Status</label>
                                <select id="form-repeater-1-3" class="form-select" name="marital_status">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Father Name</label>
                                <input type="text" class="form-control" name="father_name" id="basic-default-company"
                                       placeholder="ACME Inc.">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-text">Spouse Name</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-text" name="spouse_name" class="form-control"
                                           placeholder="yz">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Spouse CNIC</label>
                                <input type="text" name="spouse_cnic" id="basic-default-phone"
                                       class="form-control phone-mask" placeholder="151..">
                            </div>
                            {{--<div class="mb-3">
                                <label class="form-label" for="basic-default-message">Message</label>
                                <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                            </div>--}}
                            {{--<button type="submit" class="btn btn-primary">Send</button>--}}

                        </div>
                        {{--address details--}}
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Address Details</h5> <small class="text-muted float-end">Default
                                label</small>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Current Address</label>
                                <input type="text" class="form-control" name="current_address"
                                       id="basic-default-company" placeholder="Address here">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Permanent Address</label>
                                <input type="text" class="form-control" name="permanent_address"
                                       id="basic-default-company" placeholder="Address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Postal Code</label>
                                <input type="text" class="form-control" name="postal_code" id="basic-default-company"
                                       placeholder="postal code">
                            </div>
                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                <label class="form-label" for="form-repeater-1-4">Select District Name</label>
                                <select id="form-repeater-1-4" class="form-select" name="district_id">
                                    <option value="1">Abbotabad</option>
                                    <option value="2">Peshawar</option>
                                    <option value="3">Mardan</option>
                                    <option value="4">Kohat</option>
                                </select>
                            </div>
                        </div>
                        {{--Emergency Contact--}}
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"> Emergency Contact</h5> <small class="text-muted float-end">Default
                                label</small>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Primary Contact</label>
                                <input type="tel" name="primary_contact" class="form-control" id="basic-default-phone"
                                       placeholder="0333-">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Alternate Contact</label>
                                <input type="tel" name="alternate_contact" class="form-control" id="basic-default-phone"
                                       placeholder="0333-">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Relationship</label>
                                <input type="text" class="form-control" name="relationship" id="basic-default-name"
                                       placeholder="relationship with">
                            </div>
                        </div>

                        {{--Bank Account Details--}}
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"> Bank Account Details</h5> <small class="text-muted float-end">Default
                                label</small>
                        </div>
                        <div class="card-body">
                            {{--code here --}}
                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                <label class="form-label" for="form-repeater-1-4">Bank Name</label>
                                <select id="form-repeater-1-4" class="form-select" name="bank_name">
                                    <option value="mcb">MCB</option>
                                    <option value="ubl">UBL</option>
                                    <option value="hbl">HBL</option>
                                    <option value="bok">BOK</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Branch Code</label>
                                <input type="number" name="branch_code" class="form-control" id="basic-default-phone"
                                       placeholder="0823">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-texxt">Branch Address</label>
                                <input type="text" class="form-control" name="branch_address" id="basic-default-text"
                                       placeholder="Address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-text">Account Title</label>
                                <input type="text" class="form-control" name="account_title" id="basic-default-text"
                                       placeholder="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-number">Account Number</label>
                                <input type="text" class="form-control" name="account_number" id="basic-default-number"
                                       placeholder="ac number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-text">IBAN</label>
                                <input type="text" class="form-control" name="iban" id="basic-default-text"
                                       placeholder="iban">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
