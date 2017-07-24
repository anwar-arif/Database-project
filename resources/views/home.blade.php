@extends('layouts.app')

@section('LinkerFiles')
    <link rel="stylesheet" href="{{asset('css/home_table.css')}}">
@stop

@section('content')

    <h3>All Posts From Your Batch</h3>

    @foreach( $result as $res )

        <table>

            <col width="300">
            <col width="200">
            <col width="200">
            <col width="200">

        <tr>
            <th>Course</th>
            <th>Class/Exam</th>
            <th>Start Time</th>
            <th>Date</th>
        </tr>

        @foreach( $res as $cls )

            <tr>

                <td> {{$cls->course}} </td>
                <td> {{$cls->type}} </td>
                <td> {{$cls->start_time}} </td>
                <td> {{$cls->date}}</td>
            </tr>

        @endforeach

        </table>
    <br><br><br>
    @endforeach

@stop