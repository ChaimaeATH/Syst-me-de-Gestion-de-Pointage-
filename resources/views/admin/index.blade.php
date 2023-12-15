@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Tableau De Bord
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Tableau De Bord</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('includes.messages')

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">

                        <h3> {{$data[0]}} </h3>


                        <p>Total Des Employés</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                    <a href="/employees" class="small-box-footer">Plus D'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">

                        <h3> {{$data[3]}} <sup style='font-size: 20px'>%</sup></h3>

                        <p>Pourcentage De Ponctualité</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="/attendance" class="small-box-footer">Plus D'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3> {{$data[1]}} </h3>
                        <p>A L'Heure </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clock"></i>
                    </div>
                    <a href="/attendance" class="small-box-footer">Plus D'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3> {{$data[2]}} </h3>

                        <p>Tard</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-alert-circled"></i>
                    </div>
                    <a href="/latetime" class="small-box-footer">Plus D'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                     
                        <div class="box-tools pull-right">

                        </div>
                    </div>
                    <div class="box-body">
                    <img src=" images/345.jpg" style="width: 910px;" >
                       
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- right col -->
</div>
@endsection
