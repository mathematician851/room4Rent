@extends('layouts.app')
@section('nav')
    @include('inc.nav-admin')
    @include('inc.create-location-modal')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-between py-3">
            <div class="col">
                <h4 class="text-center m-0 text-danger">Location / Campus</h4>
            </div>
            <div class="col-3">
                <button class="btn btn-block btn-warning font-weight-bold" data-toggle="modal" data-target="#create-notice" >Create Campus / Locatioon</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered hover">
                    <thead class="std-thead">
                    <th>Name</th>
                    <th>Desciption</th>
                    <th>Created On</th>
                    <th>Operation</th>
                    </thead>
                    <tbody>
                    @foreach ($locations as $location)
                        <tr>
                            <td>{{$location->name}}</td>
                            <td>{{$location->description}}</td>
                            <td>{{date('M j, Y h:ia ',strtotime($location->created_at))}}</td>
                            <td>
                                <form action="{{ route('admin.locationdelete', $location->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection