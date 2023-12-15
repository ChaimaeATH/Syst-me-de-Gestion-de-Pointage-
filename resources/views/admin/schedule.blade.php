@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Schedules
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li>Employees</li>
            <li class="active">Shift</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        @include('includes.messages')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <th> Id </th>
                                <th> Nom </th>
                                <th>Temps D'Entrée</th>
                                <th>Temps De Sortie</th>
                                <th>Outils</th>
                            </thead>
                            <tbody>
                                @foreach($schedules as $schedule)
                                <tr>
                                    <td> {{$schedule->id}} </td>
                                    <td> {{$schedule->slug}} </td>
                                    <td> {{$schedule->time_in}} </td>
                                    <td> {{$schedule->time_out}} </td>
                                    <td>

                                        <a href="#edit{{$schedule->slug}}" data-toggle="modal" class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i> Modifier</a>
                                        <a href="#delete{{$schedule->slug}}" data-toggle="modal" class="btn btn-danger btn-sm delete btn-flat"><i class='fa fa-trash'></i> Supprimer</a>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@foreach($schedules as $schedule)
@include('includes.edit_delete_schedule')
@endforeach

@include('includes.add_schedule')

@endsection
