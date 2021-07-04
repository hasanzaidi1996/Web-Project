<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Repair Request</title>
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
    {{-- <form action="\Message" method="POST"> --}}
        {{-- @csrf --}}
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Message Sent Successfully</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p align = "center">Thank You For Choosing A-Liya Motors.</p>
                        <p align = "center">We Have Noted Down Your Request</p>
                        <p align = "center">You Will be Entertained Shortly On Call</p>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="window.location.href='/index'" >Close</button>
                    </div>
                </div>
            </div>
        </div>
    {{-- </form> --}}
</body>

</html>