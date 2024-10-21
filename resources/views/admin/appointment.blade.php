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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#appointments-table').DataTable();
        });
    </script>
@endpush
