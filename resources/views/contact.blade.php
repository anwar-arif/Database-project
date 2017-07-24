@extends('layouts.app')

@section('LinkerFiles')
    <link rel="stylesheet" href="{{asset('css/home_table.css')}}">
@stop

@section('content')

        <h3>CR From All Batch</h3>
        <table>

            {{--<col width="300">--}}
            {{--<col width="200">--}}
            {{--<col width="200">--}}
            {{--<col width="200">--}}

            <tr>
                <th>Name</th>
                <th>Reg No</th>
                <th>Email</th>
                {{--<th>Date</th>--}}
            </tr>

            @foreach( $users as $user )

                <tr>

                    <td> {{$user->name}} </td>
                    <td> {{$user->reg_no}} </td>
                    <td> {{$user->email}} </td>
                    {{--<td> {{$user->date}}</td>--}}
                </tr>

            @endforeach

        </table>

@stop