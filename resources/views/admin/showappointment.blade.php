<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top: 100px;">
                <table
                    style="width: 90%; border-collapse: collapse; border: 1px solid #333; background-color: #000; color: white;">
                    <thead>
                        <tr style="background-color: #333;">
                            <th style="padding: 10px; border: 1px solid #ddd;">Customer Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Phone</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Doctor Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Date</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Message</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Status</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $appoint)
                            <tr style="background-color: #222;">
                                <td style="padding: 10px; border: 1px solid #333;">{{ $appoint->name }}</td>
                                <td style="padding: 10px; border: 1px solid #333;">{{ $appoint->email }}</td>
                                <td style="padding: 10px; border: 1px solid #333;">{{ $appoint->phone }}</td>
                                <td style="padding: 10px; border: 1px solid #333;">{{ $appoint->doctor }}</td>
                                <td style="padding: 10px; border: 1px solid #333;">{{ $appoint->date }}</td>
                                <td style="padding: 10px; border: 1px solid #333;">{{ $appoint->message }}</td>
                                <td style="padding: 10px; border: 1px solid #333;">{{ $appoint->status }}</td>
                                <td style="padding: 10px; border: 1px solid #333;">
                                    <a class="btn btn-success" style="background-color: #28a745; border-color: #28a745;"
                                        href="{{ url('approved', $appoint->id) }}">Approve</a>
                                    <a class="btn btn-danger" style="background-color: #dc3545; border-color: #dc3545;"
                                        href="{{ url('canceled', $appoint->id) }}">Cancel</a>
                                    <a class="btn btn-primary" style="background-color: #0099ff; border-color: #0099ff;"
                                        href="{{ url('emailview', $appoint->id) }}">Send Mail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
    </div>
</body>

</html>
