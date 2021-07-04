<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title >Invalid Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
</head>

<body>
    {{-- <form> --}}
        {{-- @csrf --}}
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Invalid Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p align = "center">Please Enter Correct UserName And Password.</p>
                        
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="window.location.href='/Login'" >Close</button>
                    </div>
                </div>
            </div>
        </div>
    {{-- </form> --}}
</body>

</html>