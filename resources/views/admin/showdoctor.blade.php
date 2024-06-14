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
            <div style="padding-top: 100px;">
                <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; margin: 0 auto;">
                    <thead>
                        <tr style="background-color: #333; color: white;">
                            <th style="padding: 10px; border: 1px solid #ddd;">Doctor Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Phone</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Speciality</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Service Type</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Image</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $doctor)
                        <tr style="background-color: #000; color: white;">
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$doctor->name}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$doctor->phone}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$doctor->speciality}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$doctor->type}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;"><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt="Doctor Image"></td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                                <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</a>
                                <a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Update</a>
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
