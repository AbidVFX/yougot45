@extends('partials.admin')
@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <div class="card">
                        <div class="card-header color-dark fw-500">
                            Categories List
                            <div>
                        <a href="/categories/create" class="btn btn-primary btn-sm float-left">Create</a>
                    </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table4 table5 p-25 bg-white">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr class="userDatatable-header">
                                                <th>
                                                    <div class="userDatatable-title">
                                                        No.
                                                        <div
                                                            class="d-flex justify-content-between align-items-center w-100">
                                                            <span class="userDatatable-sort">
                                                                <i class="fas fa-caret-down"></i>
                                                            </span>
                                                            <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="userDatatable-title">
                                                        Name
                                                        <div
                                                            class="d-flex justify-content-between align-items-center w-100">
                                                            <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                            <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="userDatatable-title">
                                                        Type
                                                        <div
                                                            class="d-flex justify-content-between align-items-center w-100">
                                                            <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                            <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key => $category)
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $key + 1 }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $category->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $category->type }}

                                                        </div>
                                                    </td>
                                                    <td>
                                                       
                                                        <form action="{{ route('categories.destroy', $category->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
