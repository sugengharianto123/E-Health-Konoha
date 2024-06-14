<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            border: 1px solid #333;
            background-color: #000;
            color: white;
            margin: 50px auto;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        thead tr {
            background-color: #333;
        }

        tbody tr {
            background-color: #222;
        }

        .btn {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-primary {
            background-color: #0099ff;
        }
    </style>
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
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $critic)
                            <tr>
                                <td>{{ $critic->name }}</td>
                                <td>{{ $critic->email }}</td>
                                <td>{{ $critic->message }}</td>
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
