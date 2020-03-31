@extends('egzaminas/main')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Data Tables</h3>
        </div>
    </div>
    <!-- End Page Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">First Name</th>
                            <th scope="col" class="border-0">Last Name</th>
                            <th scope="col" class="border-0">Country</th>
                            <th scope="col" class="border-0">City</th>
                            <th scope="col" class="border-0">Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($accounts as $account)
                            <tr>
                                <th>{{ $account->name }}</th>
                                <th>{{ $account->surname }}</th>
                                <th>{{ $account->accountNumber }}</th>
                                <th>{{ $account->accountBalance }}</th>
                                <th>{{ $account->accountStatus }}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
