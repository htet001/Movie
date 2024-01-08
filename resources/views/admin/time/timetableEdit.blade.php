<!DOCTYPE html>
<html>

<head>
    <title>TIme Table Edit</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

</head>

<body>
    @include('admin.adminLayout.adminSideBar')
    <br />
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h2 class="text-center">Time Table Edit</h2>
                    <form method="post" action="{{ route('timetable.update', ['id' => $timetable->id]) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="movie_id" class="form-label">Movie</label>
                            <input type="text" class="form-control" id="movie_id" name="movie_id" value="{{$movie->name}}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="room_id" class="form-label">Select Room</label>
                            <select class="form-control" id="room_id" name="room_id" required>
                                @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{$timetable->start_date}}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{$timetable->end_date}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Time</label>
                            @foreach(unserialize($timetable->time) as $time)
                            <input type="text" name="time[]" id="time" value="{{ $time }}" class="form-control" />
                            @endforeach
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<script>
    $(document).ready(function() {
        $('#time').tokenfield({
            autocomplete: {
                source: ['8:00 AM', '9:00 AM', '10:00AM', '11:00AM', '12:00PM', '1:00PM', '2:00PM',
                    '3:00PM',
                    '4:00PM',
                    '5:00PM'
                ],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });

        $('#programmer_form').on('submit', function(event) {
            event.preventDefault();
            if ($.trim($('#time').val()).length == 0) {
                alert("Please Enter Atleast one Skill");
                return false;
            } else {
                var form_data = $(this).serialize();
                $('#submit').attr("disabled", "disabled");
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: form_data,
                    beforeSend: function() {
                        $('#submit').val('Submitting...');
                    },
                    success: function(data) {
                        if (data != '') {
                            $('#time').tokenfield('setTokens', []);
                            $('#success_message').html(data);
                            $('#submit').attr("disabled", false);
                            $('#submit').val('Submit');
                        }
                    }
                });
                setInterval(function() {
                    $('#success_message').html('');
                }, 5000);
            }
        });

    });
</script>