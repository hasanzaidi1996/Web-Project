@extends('layouts.nav')
@section('head')
    <title>Buying</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Buying.css') }}" />
@endsection
@section('content')
    <br>
    <h1 align="center" style="color: blue; text-align: center;"><b><i>A-LIYA'S <strong style="color: red;">Verified
                    Vehicles</strong> </i> </b></h1>

    <div class="jumbotron" id="jumbo">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search Cars...." />
        <br>
        <div class="row" id="blah">
            <br>
        </div>
    </div>
    </body>

    </html>
    <script>
        $(document).ready(function() {

            fetch_customer_data();

            function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{ route('Buying.action') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#blah').html(data.table_data);
                    }
                })
            }
            $(document).on('keyup', '#search', function() {
                var query = $(this).val();
                fetch_customer_data(query);
            });
        });
    </script>
@endsection
