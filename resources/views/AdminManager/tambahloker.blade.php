@extends('layout.layout')

@php
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/formwizard.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="container">
        <div class="card">
            <div class="card p-4">
                <div class="d-flex flex-column align-items-start">
                    <p class="fw-bold mb-1 fs-3 text-start p-3 text-muted" style="color: black;">Buat Lowongan Pekerjaan</p>
                    <div class="w-100 ms-3" style="max-width: 350px; height: 2px; background-color: #666;"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-xl">Numbering wizard with label</h6>
                        <p class="text-neutral-500">Fill up your details and proceed next steps.</p>

                        <!-- Form Wizard Start -->
                        <div class="form-wizard">
                            <form action="{{route('tambahloker')}}" method="post">
                                @csrf
                                <div class="form-wizard-header overflow-x-auto scroll-sm pb-8 my-32">
                                    <ul class="list-unstyled form-wizard-list">
                                        <li class="form-wizard-list__item active">
                                            <div class="form-wizard-list__line">
                                                <div class="form-wizard-list__line">
                                                    <span class="count">1</span>
                                                </div>
                                            </div>
                                            <span class="text text-xs fw-semibold">Create Account </span>
                                        </li>

                                        </li>
                                        
                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">2</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Setup Privacy</span>
                                        </li>
                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">3</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Setup Privacy</span>
                                        </li>
                                        
                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">3</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Setup Privacy</span>
                                        </li>
                                    </ul>
                                </div>

                                <fieldset class="wizard-fieldset show">
                                    <h6 class="text-md text-neutral-500">Personal Information</h6>
                                    <div class="row gy-3">
                                        <div class="col-sm-6">
                                            <label class="form-label">First Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required" placeholder="Enter First Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Last Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required" placeholder="Enter Last Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Email*</label>
                                            <div class="position-relative">
                                                <input type="email" class="form-control wizard-required" placeholder="Enter Email" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Password*</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control wizard-required" placeholder="Enter Password" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Confirm Password*</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control wizard-required" placeholder="Enter Confirm Password" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group text-end">
                                            <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="wizard-fieldset">
                                    <h6 class="text-md text-neutral-500">Account Information</h6>
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <label class="form-label">User Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required" placeholder="Enter User Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">Card Number*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required" placeholder="Enter Card Number " required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">Card Expiration(MM/YY)*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required" placeholder="Enter Card Expiration" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">CVV Number*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required" placeholder="CVV Number" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Password*</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control wizard-required" placeholder="Enter Password" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                            <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                            <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="wizard-fieldset">
                                    <h6 class="text-md text-neutral-500">Bank Information</h6>
                                    <div class="row gy-3">
                                        <div class="col-sm-6">
                                            <label class="form-label">Bank Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required" placeholder="Enter Bank Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Branch Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required" placeholder="Enter Branch Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Account Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required" placeholder="Enter Account Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Account Number*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required" placeholder="Enter Account Number" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                            <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                            <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <!-- Form Wizard End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
