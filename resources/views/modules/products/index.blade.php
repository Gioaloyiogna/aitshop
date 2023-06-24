@extends('layout.app')
@section('page-content')
    <!-- Page Header -->
    <div class="page-header mt-5">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Products</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- products card --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="card-header py-3">
                <ul class="list-group list-group-horizontal-sm" id="info-panel">
                    <li class="list-group-item">
                        <div class="m-0 p-0 font-weight-bold text-primary">
                            Total Products:
                            <span class="text-secondary" id="info-panel-total-students">45</span>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped table-hover dataTable js-exportable"
                    width='100%' id="department-table">
                    <thead>
                        <tr>
                            <th>Product Tag</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Weight</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Data is fetched here using ajax --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection