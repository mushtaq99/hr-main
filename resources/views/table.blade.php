<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h1>hello world</h1>
            {{--<h1>Add form form here</h1>
            <div class="mb-3">
                <label class="d-block form-label">Gender</label>
                <div class="form-check mb-2">
                    <input type="radio" id="bs-validation-radio-male" name="bs-validation-radio" class="form-check-input" required="" checked="">
                    <label class="form-check-label" for="bs-validation-radio-male">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="bs-validation-radio-female" name="bs-validation-radio" class="form-check-input" required="">
                    <label class="form-check-label" for="bs-validation-radio-female">Female</label>
                </div>
            </div>

            DOB
            <input type="text" id="alignment-birthdate" class="form-control dob-picker flatpickr-input active" placeholder="YYYY-MM-DD" readonly="readonly">
            DOB--}}

                <div class="row">
                    <div class="col">
                        <h6 class="mt-4">Profile Information </h6>
                        <div class="nav-align-top mb-3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab" aria-selected="true">Personal Info</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab" aria-selected="false" tabindex="-1">Account Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false" tabindex="-1">Social Links</button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Personal Info -->
                                <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-first-name" class="form-control" placeholder="John">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" id="formtabs-birthdate" name="birthday" class="form-control dob-picker flatpickr-input" placeholder="YYYY-MM-DD">
{{--
                                                        <input type="date" id="formtabs-birthdate" name="birthday" class="form-control dob-picker flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-sm-9">
                                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Account Details -->
                                <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-username">Username</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-email">Email</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="formtabs-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="formtabs-email2">
                                                            <span class="input-group-text" id="formtabs-email2">@example.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row form-password-toggle">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-password">Password</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="password" id="formtabs-password" class="form-control" placeholder="············" aria-describedby="formtabs-password2">
                                                            <span class="input-group-text cursor-pointer" id="formtabs-password2"><i class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row form-password-toggle">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-confirm-password">Confirm</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="password" id="formtabs-confirm-password" class="form-control" placeholder="············" aria-describedby="formtabs-confirm-password2">
                                                            <span class="input-group-text cursor-pointer" id="formtabs-confirm-password2"><i class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-sm-9">
                                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Social Links -->
                                <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-twitter">Twitter</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-twitter" class="form-control" placeholder="https://twitter.com/abc">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-facebook">Facebook</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-facebook" class="form-control" placeholder="https://facebook.com/abc">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-google">Google+</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-google" class="form-control" placeholder="https://plus.google.com/abc">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-linkedin">Linkedin</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-linkedin" class="form-control" placeholder="https://linkedin.com/abc">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-instagram">Instagram</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-instagram" class="form-control" placeholder="https://instagram.com/abc">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-quora">Quora</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-quora" class="form-control" placeholder="https://quora.com/abc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-sm-9">
                                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</x-layouts.app>
