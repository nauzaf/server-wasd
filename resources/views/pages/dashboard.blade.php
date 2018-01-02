@extends('layouts.admin')

@section('breadcrump', 'Dashboard')

@section('action')
@endsection

@section('content')
  <div class="row">
    <!-- Column -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Today Sales</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> $100</h2>
                    <span class="text-muted">Income</span>
                </div>
                <span class="text-success">75%</span>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Column -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Weekly Sales</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> Rp. 5,000</h2>
                    <span class="text-muted">Income</span>
                </div>
                <span class="text-info">35%</span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Column -->
</div>
<!-- Row -->
<!-- Row -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Revenue Statistics</h4>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-line-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
<!-- Row -->
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <select class="custom-select pull-right">
                    <option selected>January</option>
                    <option value="1">February</option>
                    <option value="2">March</option>
                    <option value="3">April</option>
                    <option value="4">Mei</option>
                    <option value="5">Juni</option>
                    <option value="6">Juli</option>
                    <option value="7">Agustus</option>
                    <option value="8">September</option>
                    <option value="9">Oktober</option>
                    <option value="10">November</option>
                    <option value="11">Desember</option>
                </select>
                <h4 class="card-title">Sales of the Month</h4>
                <div class="table-responsive m-t-40">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th colspan="2">Customer</th>
                                <th>Order</th>
                                <th>Total Belanja</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:50px;"><span class="round">S</span></td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                <td>Elite Admin</td>
                                <td>$3.9K</td>
                                <td>--------</td>
                            </tr>
                            <tr class="active">
                                <td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50" /></span></td>
                                <td>
                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                <td>Real Homes</td>
                                <td>$23.9K</td>
                                <td>--------</td>
                            </tr>
                            <tr>
                                <td><span class="round round-success">B</span></td>
                                <td>
                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                <td>MedicalPro Theme</td>
                                <td>$12.9K</td>
                                <td>--------</td>
                            </tr>
                            <tr>
                                <td><span class="round round-primary">N</span></td>
                                <td>
                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                <td>Elite Admin</td>
                                <td>$10.9K</td>
                                <td>--------</td>
                            </tr>
                            <tr>
                                <td><span class="round round-warning">M</span></td>
                                <td>
                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                <td>Helping Hands</td>
                                <td>$12.9K</td>
                                <td>--------</td>
                            </tr>
                            <tr>
                                <td><span class="round round-danger">N</span></td>
                                <td>
                                    <h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
                                <td>Digital Agency</td>
                                <td>$2.6K</td>
                                <td>--------</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection