@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Appointments</h1>
        <table id="appointments-table" class="table">
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
                <th>Actions</th> <!-- Add Actions column header -->
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->first_name }}</td>
                    <td>{{ $appointment->last_name }}</td>
                    <td><a href="mailto:{{ $appointment->email }}">{{ $appointment->email }}</a></td>
                    <td>{{ $appointment->phone_number }}</td>
                    <td>{{ $appointment->subject }}</td>
                    <td>{{ $appointment->description }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>{{ $appointment->price == 0 ? 'To be decided' : $appointment->price }}</td>
                    <td>
                        <button class="btn btn-primary btn-edit" data-id="{{ $appointment->id }}">Edit</button> <!-- Add Edit button -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit-id" name="id">
                        <div class="mb-3">
                            <label for="edit-first-name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="edit-first-name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-last-name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="edit-last-name" name="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="edit-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="edit-email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-phone-number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="edit-phone-number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="edit-subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit-description" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit-status" class="form-label">Status</label>
                            <select class="form-control" id="edit-status" name="status" required>
                                <option value="PENDING">PENDING</option>
                                <option value="CANCELLED">CANCELLED</option>
                                <option value="APPROVED">APPROVED</option>
                                <option value="PAID">PAID</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="edit-price" name="price" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#appointments-table').DataTable();

            // Edit button click event
            $('.btn-edit').on('click', function() {
                var id = $(this).data('id');
                $.get('/admin/appointment/' + id, function(data) {
                    $('#edit-id').val(data.id);
                    $('#edit-first-name').val(data.first_name);
                    $('#edit-last-name').val(data.last_name);
                    $('#edit-email').val(data.email);
                    $('#edit-phone-number').val(data.phone_number);
                    $('#edit-subject').val(data.subject);
                    $('#edit-description').val(data.description);
                    $('#edit-status').val(data.status);
                    $('#edit-price').val(data.price);
                    $('#editModal').modal('show');
                });
            });

            // Edit form submit event
            $('#editForm').on('submit', function(e) {
                e.preventDefault();
                var id = $('#edit-id').val();
                $.ajax({
                    url: '/admin/appointment/' + id,
                    type: 'PUT',
                    data: $(this).serialize(),
                    success: function(response) {
                        location.reload();
                    }
                });
            });
        });
    </script>
@endpush
