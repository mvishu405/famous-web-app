<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Contact List</h3>
                <div class="card-tools">
                    {{-- <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></button> --}}
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile number</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->mobile_number }}</td>
                                <td>{{ $contact->emailId }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Save</button>
            </div>
        </div>
    </div>

</x-backend.backend-layout>
