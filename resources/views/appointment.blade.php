@extends('layouts.guest-app')

@section('content')
    <style>
        .appointment-container {
            width: 80%;
            height: 600px;
            margin: 0 auto;
            overflow-y: auto;
        }
    </style>
    <div class="container appointment-container">
        <h2>Your Appointments</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Status</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->first_name }}</td>
                    <td>{{ $appointment->last_name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->phone_number }}</td>
                    <td>{{ $appointment->subject }}</td>
                    <td>{{ $appointment->description }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>{{ $appointment->price == 0 ? 'To be decided' : $appointment->price }}</td>
                    <td>
                        @if($appointment->status == 'APPROVED')
                            <a href="#" data-id="{{ $appointment->id }}" class="checkout-link">
                                <i class="fas fa-money-check"></i>
                            </a>
                        @endif
                        <a href="#" data-id="{{ $appointment->id }}" class="cancel-link">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Simple Checkout Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Order Summary -->
                        <div class="col-md-5 border-right">
                            <h6 class="mb-3">Order Summary</h6>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Appointment</span>
                                    <strong>$50.00</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Service Fee</span>
                                    <strong>$5.00</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total</span>
                                    <strong>$55.00</strong>
                                </li>
                            </ul>
                        </div>

                        <!-- Payment Form -->
                        <div class="col-md-7">
                            <h6 class="mb-3">Payment Information</h6>
                            <form>
                                <div class="form-group">
                                    <label for="cardName">Name on Card</label>
                                    <input type="text" class="form-control" id="cardName" placeholder="John Doe" required>
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="cardExpiry">Expiry Date</label>
                                        <input type="text" class="form-control" id="cardExpiry" placeholder="MM/YY" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cardCVC">CVC</label>
                                        <input type="text" class="form-control" id="cardCVC" placeholder="123" required>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-block" id="proceedCheckout">Proceed to Payment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cancel Confirmation Modal -->
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancelModalLabel">Cancel Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to cancel this appointment?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="confirmCancel">Cancel Appointment</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let appointmentId;

            document.querySelectorAll('.cancel-link').forEach(function (element) {
                element.addEventListener('click', function (event) {
                    event.preventDefault();
                    appointmentId = this.getAttribute('data-id');
                    $('#cancelModal').modal('show');
                });
            });

            document.getElementById('confirmCancel').addEventListener('click', function () {
                if (appointmentId) {
                    fetch(`/appointment/${appointmentId}/cancel`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                location.reload();
                            } else {
                                alert('Failed to cancel the appointment.');
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            });

            document.querySelectorAll('.checkout-link').forEach(function (element) {
                element.addEventListener('click', function (event) {
                    event.preventDefault();
                    appointmentId = this.getAttribute('data-id');
                    $('#checkoutModal').modal('show');
                });
            });

            document.getElementById('proceedCheckout').addEventListener('click', function () {
                if (appointmentId) {
                    fetch(`/appointment/${appointmentId}/pay`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                location.reload();
                            } else {
                                alert('Failed to update the appointment status.');
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            });
        });
    </script>
@endsection
