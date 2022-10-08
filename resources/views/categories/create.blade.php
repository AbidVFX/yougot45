@extends('partials.admin')
@section('content')
    <div class="contents">

        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="breadcrumb-main">
                        </div>

                        <div class="col-lg-12">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Create Category</h6>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <strong>
                                            {{ session('success') }}
                                        </strong>
                                    @endif

                                    <div class="basic-form-wrapper">

                                        <form action="{{ route('categories.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-basic">
                                                <div class="form-group mb-25">
                                                    <label>Name</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="name" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label>Type</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="type" placeholder="Enter Type">
                                                </div>
                                                {{-- <div class="form-group mb-25">
                                                    <label>File</label>
                                                    <input class="form-control form-control-lg" type="file"
                                                        name="file">
                                                </div> --}}
                                                <div class="form-group mb-0">
                                                    <button type="submit"
                                                        class="btn btn-lg btn-primary btn-submit">Create</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->
                        </div>
                    </div>
                @endsection
