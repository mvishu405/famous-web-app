<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Career List</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></button>
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
                            <th>Position</th>
                            <th>Showreel link</th>
                            <th>Message</th>
                            <th>CV</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careers as $career)
                            <tr>
                                <td>{{ $career->id }}</td>
                                <td>{{ $career->name }}</td>
                                <td>{{ $career->mobile_number }}</td>
                                <td>{{ $career->emailId }}</td>
                                <td>{{ $career->position }}</td>
                                <td>{{ $career->showreel_link }}</td>
                                <td>{{ $career->message }}</td>
                                <td>
                                    <a href="{{ viewFile($career->cv) }}" target="_blank">Download</a>
                                </td>
                                <td>{{ $career->created_at }}</td>
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
