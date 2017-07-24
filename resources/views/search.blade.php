@extends('layouts.app')

@section('LinkerFiles')
    <link rel="stylesheet" href="{{asset('css/home_table.css')}}">
@stop


@section('content')

    <h3>Search Results</h3>

    <table>

        <tr>
            <th>Course</th>
            <th>Class/Exam</th>
            <th>Start Time</th>
            <th>Date</th>
        </tr>

        @foreach( $result as $cls )

            <tr>

                <td> {{$cls->course}} </td>
                <td> {{$cls->type}} </td>
                <td> {{$cls->start_time}} </td>
                <td> {{$cls->date}} </td>

            </tr>

        @endforeach

    </table>

@stop