<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment</title>
    @include('template.head')
    <style>
        /* Custom CSS for responsiveness */
        @media (max-width: 767px) {
            .ml-sm-5 {
                margin-left: 0 !important;
            }
        }
        h2, p {
            color: black;
        }

        /* Style for input text color */
        input.form-control {
            color: black;
        }

        /* Style for placeholder text color */
        input.form-control::placeholder {
            color: black;
            opacity: 1; /* Override default opacity */
        }

        select.form-control {
        color: black;
    }

    /* Style for select option text color */
    select.form-control option {
        color: black;
    }
        </style>
</head>
<body>

<div class="super_container">

    <!-- Header -->

    @include('template.navbar')

    @include('template.home')


    <div class="events page_section">
        <div class="container">

            <div class="row mb-5">
                <div class="col">
                    <div class="section_title text-center">
                        <h1 class="text-dark">Pay Now</h1>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-dark">Bank Details</h2>
                            </div>
                            <div class="card-body">
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <h2>Non-Zakat Donation</h2>
                                        {{-- <p>Bank Name: XYZ Bank</p> --}}
                                        <p>Account Number: 2292-79173812-01</p>
                                        <p>IBAN Number: PK80HABB0022927917381201</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h2>Zakat Donation</h2>
                                        <p>Account Number: 2292-79173861-03</p>
                                        <p>IBAN Number: PK34habb0022927917386103</p>                                    </div>
                                    <div class="col-md-4">
                                        <h2>Endowment Fund Donations</h2>
                                        {{-- <p>Bank Name: ABC Bank</p> --}}
                                        <p>Account Number: 2292-79173811-01</p>
                                        <p>IBAN Number: PK64habb0022927917381101</p>                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="alert alert-info text-center" role="alert">
                                    Further correspondence will be carried out on your provided valid email address..
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <form method="POST" action="{{ url('zakat_payments') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="payment_type" class="form-control" value="paynow" hidden>
                            <div class="row mb-3">
                                <div class="col-10">
                                    <label for="donor_name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="donor_name" name="donor_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-10">
                                    <label for="donor_email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Valid Email" id="donor_email" name="donor_email">
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-10">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Phone Number" id="phone_number" name="phone">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="duration" class="form-label">Duration</label>
                                    <select class="form-control" aria-label="Default select example"  id="duration" name="duration">
                                        <option value="ene_year">For One year</option>
                                        <option value="entire_degree">Entire Degree</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="text" class="form-control" placeholder="Enter Amount" id="amount" name="amount">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="{{ asset('templates/images/charity2.gif') }}" alt="Image 1" class="img-fluid rounded" style="max-width: 100%; height:400px">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    @include('template.footer')
</body>
</html>
<script>
    $(document).ready(function() {
        $('#duration').change(function() {
            var duration = $(this).val();
            var amount = 0;

            if (duration == '6') {
                amount = 200000;
            } else if (duration == '1') {
                amount = 400000;
            } else if (duration == '2') {
                amount = 1000000;
            } else if (duration == '4') {
                amount = 2000000;
            }

            $('#amount').val(amount);
        });
    });
</script>
