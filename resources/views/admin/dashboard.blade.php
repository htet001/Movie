@extends('admin.adminLayout.adminMaster')
@section('title','Admin Movie Create')
@section('content')
<style>
    /* Admin Dashboard */
    .wrapper {
        position: relative;
    }

    .heading {
        margin: 25px 0;
        font-size: 24px;
    }

    .dashboard-stat {
        position: relative;
        display: block;
        margin: 0 0 25px;
        overflow: hidden;
        border-radius: 4px;

        .visual {
            width: 80px;
            height: 80px;
            display: block;
            float: left;
            padding-top: 10px;
            padding-left: 15px;
            margin-bottom: 15px;
            font-size: 35px;
            line-height: 35px;

            >i {
                margin-left: -15px;
                font-size: 110px;
                line-height: 110px;
                color: #fff;
                opacity: .1;
            }
        }

        .details {
            position: absolute;
            right: 15px;
            padding-right: 15px;
            color: #fff;

            .number {
                padding-top: 25px;
                text-align: right;
                font-size: 34px;
                line-height: 36px;
                letter-spacing: -1px;
                margin-bottom: 0;
                font-weight: 300;

                .desc {
                    text-transform: capitalize;
                    text-align: right;
                    font-size: 16px;
                    letter-spacing: 0;
                    font-weight: 300;
                }
            }
        }

        &.blue {
            background-color: #337ab7;
        }

        &.red {
            background-color: #e7505a;
        }

        &.purple {
            background-color: #8E44AD;
        }

        &.hoki {
            background-color: #67809F;
        }
    }
</style>
<div class="wrapper container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="heading">Admin Dashboard</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat red" href="#">
                <div class="visual">
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{$movies}}</span>
                    </div>
                    <div class="desc">Total Movies</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat blue" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{$users}}</span>
                    </div>
                    <div class="desc">Total Users</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat hoki" href="#">
                <div class="visual">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{$tickets}}</span>
                    </div>
                    <div class="desc">Tickets</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat purple" href="#">
                <div class="visual">
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{$bookings}}</span>
                    </div>
                    <div class="desc">New Booking</div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection