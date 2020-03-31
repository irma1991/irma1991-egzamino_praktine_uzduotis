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
    <form method = "POST" action="/store_operation" enctype="multipart/form-data" class="p-5 bg-white">
        @csrf
<div class="row form-group">

    <div class="col-md-12">
        <label class="text-black" for="email">accountNumber</label>
        <input type="text" id="accountNumber" name="accountNumber" class="form-control">
    </div>


    <div class="col-md-12">
        <label class="text-black" for="email">accountStatus</label>
        <input type="text" id="accountStatus" name="accountStatus" class="form-control">
    </div>


<div class="col-md-12">
    <label class="text-black" for="email">transferAmount</label>
    <input type="text" id="transferAmount" name="transferAmount" class="form-control">
</div>

<div class="col-md-12">
    <label class="text-black" for="email">recipientName</label>
    <input type="text" id="recipientName" name="recipientName" class="form-control">
</div>

<div class="col-md-12">
    <label class="text-black" for="email">recipientSurname</label>
    <input type="text" id="recipientSurname" name="recipientSurname" class="form-control">
</div>
</div>
    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit" id = "submit" name="submit" value="Patvirtinti" class="btn btn-primary py-2 px-4 text-white">
        </div>
    </div>
    </form>
</div>
@stop
