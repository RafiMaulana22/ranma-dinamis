@extends('layout.template')

@section('content')
    <!-- Basic Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
    </nav>
    <!-- Basic Breadcrumb -->

    <div class="row g-3">
        <!-- Bootstrap Validation -->
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Form Bahasa</h5>
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="/bahasa" novalidate>
                        @csrf
                        <div class="mb-6">
                            <label class="form-label" for="bs-validation-name">Bahasa</label>
                            <input type="text" class="form-control" id="bs-validation-name" name="bahasa"
                                placeholder="Masukkan bahasa..." required />
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please masukkan bahasa. </div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="bs-validation-country">Kemampuan</label>
                            <select class="form-select" id="bs-validation-country" name="kemampuan" required>
                                <option value="" selected disabled>-- Pilih --</option>
                                <option value="10">10%</option>
                                <option value="20">20%</option>
                                <option value="30">30%</option>
                                <option value="40">40%</option>
                                <option value="50">50%</option>
                                <option value="60">60%</option>
                                <option value="70">70%</option>
                                <option value="80">80%</option>
                                <option value="90">90%</option>
                                <option value="100">100%</option>
                            </select>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please pilih kemampuan. </div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="bs-validation-country">Status</label>
                            <select class="form-select" id="bs-validation-country" name="status" required>
                                <option value="" selected disabled>-- Pilih --</option>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please pilih status. </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Bootstrap Validation -->
        <div class="col-md-8">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Data Bahasa</h5>
                <div class="container">
                    <div class="table-responsive text-nowrap">
                        <table id="languagesTable" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bahasa</th>
                                    <th>Kemampuan</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($bahasa as $key => $value)
                                    <tr>
                                        <td>
                                            <span class="fw-medium">{{ $no++ }}</span>
                                        </td>
                                        <td>{{ $value->bahasa }}</td>
                                        <td>{{ $value->kemampuan }}</td>
                                        <td>
                                            @if ($value->status == 'Public')
                                                <span class="badge bg-label-success me-1">Public</span>
                                            @else
                                                <span class="badge bg-label-danger me-1">Private</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ti ti-pencil me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ti ti-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
@endsection
