{{-- @extends('layouts.main_layout')

@section('title', 'Fee Structure')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <h2 class="text-center mb-5 text-primary fw-bold">School Fee Structure</h2>

        <!-- Tuition Fee Table -->
        <div class="mb-5">
            <h4 class="mb-3">1. Tuition Fees (Annual)</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Class</th>
                            <th>Annual Tuition Fee (₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Nursery – 5th</td><td>30,000 – 40,000</td></tr>
                        <tr><td>6th – 8th</td><td>40,000 – 50,000</td></tr>
                        <tr><td>9th – 10th</td><td>50,000 – 60,000</td></tr>
                        <tr><td>11th – 12th</td><td>60,000 – 80,000</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Hostel Fee -->
        <div class="mb-5">
            <h4 class="mb-3">2. Hostel & Accommodation Fees</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-secondary">
                        <tr>
                            <th>Fee Component</th>
                            <th>Period</th>
                            <th>Amount (₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Room Rent</td><td>Annual</td><td>16,000 – 30,000</td></tr>
                        <tr><td>Admission / Caution Money</td><td>One-time</td><td>1,000 – 10,000</td></tr>
                        <tr><td>Infrastructure Fund</td><td>Annual</td><td>1,500 – 5,000</td></tr>
                        <tr><td>Electricity & Water</td><td>Annual</td><td>1,800 – 2,500</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Mess Fee -->
        <div class="mb-5">
            <h4 class="mb-3">3. Mess & Boarding Fees</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-warning">
                        <tr>
                            <th>Period</th>
                            <th>Fee Component</th>
                            <th>Amount (₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Annual / 10-month</td><td>Mess Bill</td><td>21,000 – 36,000</td></tr>
                        <tr><td>One-time</td><td>Mess Deposit</td><td>3,000 – 4,000</td></tr>
                        <tr><td>Annual</td><td>Generator, Security</td><td>2,000 – 6,000</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Misc Fee -->
        <div class="mb-5">
            <h4 class="mb-3">4. Miscellaneous Charges</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-info">
                        <tr>
                            <th>Fee Type</th>
                            <th>Amount (₹)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Identity Card</td><td>50 – 200</td></tr>
                        <tr><td>Library / Lab Maintenance</td><td>500 – 1,500</td></tr>
                        <tr><td>Sports & Extracurricular</td><td>1,000 – 2,000</td></tr>
                        <tr><td>Medical / Insurance</td><td>200 – 1,000</td></tr>
                        <tr><td>Development / Infra Fund</td><td>1,500 – 5,000</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- One Time Charges -->
        <div class="mb-5">
            <h4 class="mb-3">5. One-Time & Refundable Charges</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-danger">
                        <tr>
                            <th>Fee Type</th>
                            <th>Amount (₹)</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Admission / Registration</td><td>5,000 – 2,00,000</td><td>Non-refundable</td></tr>
                        <tr><td>Caution Deposit</td><td>3,000 – 3,00,000</td><td>Refundable</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary btn-lg px-5 py-2 rounded-pill" onclick="Swal.fire({title: 'Need Help?', text: 'Contact our Finance Office at +91-9876543210', icon: 'info'})">Need Help? Contact Finance</a>
        </div>
    </div>
</section>
@endsection --}}


<!-- Fee Structure Page with Filters, Downloads, and Calculator -->
@extends('layouts.main_layout')

@section('title', 'Fee Structure')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 text-primary fw-bold">Comprehensive Fee Structure</h2>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-md-4">
            <label for="classFilter" class="form-label fw-semibold">Filter by Class:</label>
            <select class="form-select" id="classFilter">
                <option value="all">All</option>
                <option value="nursery-5">Nursery – 5th</option>
                <option value="6-8">6th – 8th</option>
                <option value="9-10">9th – 10th</option>
                <option value="11-12">11th – 12th</option>
            </select>
        </div>
    </div>

    <!-- Download Buttons -->
    <div class="mb-5">
        <a href="{{ route('feePDF') }}" class="btn btn-outline-danger me-2">Download PDF</a>
        {{-- <a href="{{ route('fees.download.excel') }}" class="btn btn-outline-success">Download Excel</a> --}}
    </div>

    <!-- Tuition Fee Table -->
    <div class="fee-table mb-5">
        <h4 class="text-secondary mb-3">Annual Tuition Fee</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Class</th>
                        <th>Annual Fee (₹)</th>
                    </tr>
                </thead>
                <tbody id="tuitionTable">
                    <tr data-class="nursery-5"><td>Nursery – 5th</td><td>₹25,000</td></tr>
                    <tr data-class="6-8"><td>6th – 8th</td><td>₹30,000</td></tr>
                    <tr data-class="9-10"><td>9th – 10th</td><td>₹35,000</td></tr>
                    <tr data-class="11-12"><td>11th – 12th</td><td>₹40,000</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Hostel Fee Table -->
    <div class="fee-table mb-5">
        <h4 class="text-secondary mb-3">Hostel Fee (Annual)</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-warning">
                    <tr>
                        <th>Facility</th>
                        <th>Fee (₹)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Hostel Accommodation</td><td>₹60,000</td></tr>
                    <tr><td>Mess Charges</td><td>₹36,000</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Miscellaneous Fee Table -->
    <div class="fee-table mb-5">
        <h4 class="text-secondary mb-3">One-Time & Miscellaneous Charges</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-success">
                    <tr>
                        <th>Fee Type</th>
                        <th>Amount (₹)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Admission Fee</td><td>₹5,000</td></tr>
                    <tr><td>Library Fee</td><td>₹1,500</td></tr>
                    <tr><td>Lab Fee (9th–12th)</td><td>₹2,000</td></tr>
                    <tr><td>Transport Fee (Optional)</td><td>₹12,000</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Fee Calculator -->
    <div class="calculator p-4 border rounded bg-light">
        <h4 class="text-primary mb-3">Estimate Your Total Annual Fee</h4>
        <form id="feeCalculator">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Select Class</label>
                    <select class="form-select" id="calcClass">
                        <option value="25000">Nursery – 5th</option>
                        <option value="30000">6th – 8th</option>
                        <option value="35000">9th – 10th</option>
                        <option value="40000">11th – 12th</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label d-block">Additional Options</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="60000" id="hostel">
                        <label class="form-check-label" for="hostel">Hostel</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="36000" id="mess">
                        <label class="form-check-label" for="mess">Mess</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="12000" id="transport">
                        <label class="form-check-label" for="transport">Transport</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="button" class="btn btn-success w-100" onclick="calculateFee()">Calculate</button>
                </div>
            </div>
            <div class="mt-4">
                <h5>Total Estimated Fee: <span class="fw-bold" id="totalFee">₹0</span></h5>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('classFilter').addEventListener('change', function () {
        let value = this.value;
        document.querySelectorAll('#tuitionTable tr').forEach(row => {
            row.style.display = value === 'all' || row.dataset.class === value ? '' : 'none';
        });
    });

    function calculateFee() {
        const base = parseInt(document.getElementById('calcClass').value);
        const hostel = document.getElementById('hostel').checked ? parseInt(document.getElementById('hostel').value) : 0;
        const mess = document.getElementById('mess').checked ? parseInt(document.getElementById('mess').value) : 0;
        const transport = document.getElementById('transport').checked ? parseInt(document.getElementById('transport').value) : 0;

        const total = base + hostel + mess + transport;
        document.getElementById('totalFee').textContent = `₹${total.toLocaleString()}`;
    }
</script>
@endsection

