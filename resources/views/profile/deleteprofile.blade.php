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
                <form method="POST" action="/profile/destroy/{{$user['id']}}">
                    @csrf
                    @method('Delete')
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Information</h5> <small class="text-muted float-end">Default
                                label</small>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Mobile No</label>
                                <input type="tel" name="mobile_no" class="form-control" id="basic-default-phone"
                                       value="{{ $profile['mobile_no'] ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Alternate Mobile</label>
                                <input type="tel" name="alternate_mobile_no" class="form-control"
                                       id="basic-default-phone"
                                       value="{{$profile['alternate_mobile_no'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-cnic">CNIC</label>
                                <input type="text" name="cnic" class="form-control" id="basic-default-cnic"
                                       value="{{$profile['cnic'] ?? ''}}">
                            </div>
                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                <label class="form-label" for="form-repeater-1-3">Gender</label>
                                <select name="gender" id="form-repeater-1-3">
                                    <option value="male" @if(isset($profile['gender']) && $profile['gender'] == 'male') selected @endif>Male</option>
                                    <option value="female" @if(isset($profile['gender']) && $profile['gender'] == 'female') selected @endif>Female</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="birthday">Birth Date</label>
                                <input type="date" id="birthday" name="date_of_birth"
                                       value="{{$profile['date_of_birth'] ?? ''}}"
                                       class="form-control dob-picker flatpickr-input active" placeholder="YYYY-MM-DD">
                            </div>

                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                <label class="form-label" for="form-repeater-1-3">Marital Status</label>

                                <select name="marital_status">
                                    <option value="single" @if(isset($profile['marital_status']) && $profile['marital_status'] == 'single') selected @endif>single</option>
                                    <option value="married" @if(isset($profile['marital_status']) && $profile['marital_status'] == 'married') selected @endif>married</option>
                                </select>

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Father Name</label>
                                <input type="text" class="form-control" name="father_name" id="basic-default-company"
                                       value="{{$profile['father_name'] ?? ''}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-text">Spouse Name</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-text" name="spouse_name" class="form-control"
                                           value="{{$profile['spouse_name'] ?? ''}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Spouse CNIC</label>
                                <input type="text" name="spouse_cnic" id="basic-default-phone"
                                       class="form-control phone-mask" value="{{$profile['spouse_cnic'] ?? ''}}">
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
                                       id="basic-default-company" value="{{$address['current_address'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Permanent Address</label>
                                <input type="text" class="form-control" name="permanent_address"
                                       id="basic-default-company" value="{{$address['permanent_address'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Postal Code</label>
                                <input type="text" class="form-control" name="postal_code" id="basic-default-company"
                                       value="{{$address['postal_code'] ?? ''}}">
                            </div>
                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                <label class="form-label" for="form-repeater-1-4">Select District Name</label>

                                <label>
                                    <select name="district_id">
                                        @foreach($districts as $district)
                                            <option value="{{ $district['id'] }}"
                                                    @if($address && $address['district_id'] == $district['id']) selected @endif>
                                                {{ $district['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </label>

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
                                       value="{{$contact['primary_contact'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Alternate Contact</label>
                                <input type="tel" name="alternate_contact" class="form-control" id="basic-default-phone"
                                       value="{{$contact['alternate_contact'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Relationship</label>
                                <input type="text" class="form-control" name="relationship" id="basic-default-name"
                                       value="{{$contact['relationship'] ?? ''}}">
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
                                    <option value="mcb" @if(isset($bank['bank_name']) && $bank['bank_name'] == 'mcb') selected @endif>MCB</option>
                                    <option value="ubl" @if(isset($bank['bank_name']) && $bank['bank_name'] == 'ubl') selected @endif>UBL</option>
                                    <option value="hbl" @if(isset($bank['bank_name']) && $bank['bank_name'] == 'hbl') selected @endif>HBL</option>
                                    <option value="bok" @if(isset($bank['bank_name']) && $bank['bank_name'] == 'bok') selected @endif>BOK</option>
                                </select>

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Branch Code</label>
                                <input type="number" name="branch_code" class="form-control" id="basic-default-phone"
                                       value="{{$bank['branch_code'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-texxt">Branch Address</label>
                                <input type="text" class="form-control" name="branch_address" id="basic-default-text"
                                       value="{{$bank['branch_address'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-text">Account Title</label>
                                <input type="text" class="form-control" name="account_title" id="basic-default-text"
                                       value=" {{$bank['account_title'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-number">Account Number</label>
                                <input type="text" class="form-control" name="account_number" id="basic-default-number"
                                       value=" {{$bank['account_number'] ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-text">IBAN</label>
                                <input type="text" class="form-control" name="iban" id="basic-default-text"
                                       value=" {{$bank['iban'] ?? ''}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
