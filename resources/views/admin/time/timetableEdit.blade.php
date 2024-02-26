@extends('admin.adminLayout.adminMaster')
@section('title', 'Edit Time Table')
@section('content')
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

                <h2 class="text-center">Edit Time Table</h2>
                <form method="post" action="{{ route('timetable.update', ['id' => $timetable->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="movie_id" class="form-label">Movie</label>
                        <input type="text" class="form-control" id="movie_id" name="movie_id" value="{{$movie->name}}"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label for="room_id" class="form-label">Select Room</label>
                        <select class="form-control" id="room_id" name="room_id" required>
                            @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($timetable)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                    value="{{ $timetable->start_date ? $timetable->start_date->format('Y-m-d') : '' }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date"
                                    value="{{ $timetable->end_date ? $timetable->end_date->format('Y-m-d') : '' }}"
                                    required>
                            </div>
                        </div>
                    </div>
                    @else
                    <p>No timetable found.</p>
                    @endif
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
@endsection
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