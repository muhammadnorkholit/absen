@extends('layout.dash')

@section('content')
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Print Pdf</h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a href="/print"><button class="btn buttons-print btn-sm btn-default" tabindex="0"
                aria-controls="datatable-buttons" type="button"><span>Print</span></button>
        </a>
    </div>
@endsection
