@extends('layouts.app')

@section('title')
    <title>Post-Schedule</title>
@stop

@section('LinkerFiles')
    <script src="{{asset('js/add-schedule-row.js')}}"></script>
    <script src="{{asset('js/delete-schedule-row.js')}}"></script>
    <script src="{{asset('js/fill_course_option.js')}}"></script>
@stop

@section('content')

    <div class="test2">
        <div class="x_container">
    <form id="post-form" method="post" action="/post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="button" class="addRowButton" value="Add Row" onclick="addRow('dataTable')" />

        <input type="button" class="addRowButton" value="Delete Row" onclick="deleteRow('dataTable')" />

        <br><br>
        <h3>Schedule For <input name="date" id="datepicker" type="date" class="datepicker"> </h3>
        <br><br>

        <table id="dataTable" class="tablestyle" border="1" >
            <tr>
                <td><input type="checkbox" name="chk"/></td>

                <td>
                    <select name="course[]" id="course_option">
                        <option value="CSE-137 Data Structure">CSE-137 Data Structure</option>
                        <option value="CSE-237 Algorithm Design & Analysis">CSE-237 Algorithm Design & Analysis</option>
                        <option value="CSE-233 OOP">CSE-233 OOP</option>
                        <option value="CSE-333 Database System">CSE-333 Database System</option>
                        <option value="CSE-361 Computer Networking">CSE-361 Computer Networking</option>
                        <option value="CSE-433 Artificial Intelligence">CSE-433 Artificial Intelligence</option>
                    </select>
                </td>
                <td>
                    <select name="type[]">
                        <option value="class">Class</option>
                        <option value="exam">Exam</option>
                    </select>
                </td>
                <td>
                    <input name="start_time[]" id="timepicker" type="time">
                </td>

            </tr>
        </table>
        <p><h3>Comment</h3></p>
        <textarea name="comment" id="comment" rows="4" cols="50"></textarea><br>
        <input type="submit" class="submitbtn" value="submit">

    </form>
            </div>
    </div>
@stop