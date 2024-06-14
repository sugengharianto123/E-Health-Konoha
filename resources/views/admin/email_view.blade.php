<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .close {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            padding: 10px;
            font-size: 20px;
            color: inherit;
            background-color: transparent;
            border: 0;
        }
    </style>
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
            <div class="container" align="center" style="padding-top: 100px">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ url('sendemail',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label>Greeting</label>
                        <input type="text" style="color:black" name="greeting" 
                            required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Body</label>
                        <input type="text" style="color:black" name="body"
                            required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Action Text</label>
                        <input type="text" style="color:black" name="actiontext"
                            required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Action Url</label>
                        <input type="text" style="color:black" name="actionurl"
                            required="">
                    </div>

                    <div style="padding:15px;">
                        <label>End Part</label>
                        <input type="text" style="color:black" name="endpart"
                            required="">
                    </div>

                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success" style="background-color: green;">
                    </div>                    
                </form>

            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
    </div>
</body>

</html>
