@extends('partials.admin')
@section('content')
    <div class="contents" id="contentsb">
        <div class="atbd-page-content">
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
                                    <a href="/categories/create" class="btn btn-primary btn-sm float-left"
                                        data-toggle="modal" data-target="#modal-create-category">Create</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="btn-group atbd-button-group btn-group-normal my-2 ml-4" role="group"><button
                                        id="refreshList" type="button" class="btn  btn-xs btn-outline-light"><i
                                            class="fa fa-sync"></i> Fetch New Data</button>
                                </div>
                                <div class="table4 table5 p-25 bg-white">
                                    <div class="table-responsive" id="TableCategories">
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
                                            <tbody id="table-body-content">
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
                                {{-- Skeleton --}}
                                <div class="card card-default card-md mb-4" id="skeleton" style="display: none">
                                    <div class="card-body">
                                        <div class="atbd-skeleton">
                                            <div class="h6 atbd-skeleton__title shimmer-effect"></div>
                                            <ul class="atbd-skeleton__list">
                                                <li class="shimmer-effect"></li>
                                                <li class="shimmer-effect"></li>
                                                <li class="shimmer-effect"></li>
                                            </ul>
                                        </div>
                                        <!-- ends: .atbd-skeleton -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Create Category --}}
        <div class="modal-basic modal fade show" id="modal-create-category" tabindex="-1" role="dialog"
            aria-hidden="true">

            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content modal-bg-white ">
                    <div class="modal-header">
                        <h6 class="modal-title">Create Category</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        {{-- Alert --}}
                        <div class="errors"></div>
                        {{-- End Alert --}}
                        <form id="form-create-modal" method="POST">
                            @csrf
                            <div class="form-basic">
                                <div class="form-group mb-25">
                                    <label>Name</label>
                                    <input class="form-control form-control-lg" id="inputName" type="text" name="name"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group mb-25">
                                    <label>Type</label>
                                    <input class="form-control form-control-lg" id="inputType" type="text" name="type"
                                        placeholder="Enter Type">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal End --}}
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#form-create-modal').on('submit', function(e) {
            e.preventDefault();

            let name = $('#inputName').val();
            let type = $('#inputType').val();

            $.ajax({
                type: "POST",
                url: "{{ route('categories.store') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    type: type,
                },
                success: response => {
                    $('#TableCategories').load(document.URL +
                        ' #TableCategories');
                    $("#modal-create-category").modal("hide");
                    toastr.success('Added Successfully');
                },
                error: response => {
                    $("#modal-create-category").modal("hide");
                    Swal.fire({
                        icon: 'error',
                        title: 'Fields are required',
                        text: 'Please Fill both fields!',
                    }).then(function() {
                        $("#modal-create-category").modal("show");
                    });
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#refreshList').click(function(e) {
            e.preventDefault();
            $('#TableCategories').load(document.URL + ' #TableCategories');
        });
    });
</script>

<script>
    $(function() {

        $('#DeleteRecord').click(function(e) {
            e.preventDefault();

            var id = $(this).data("id");

            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "categories/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function() {
                    toastr.error('Deleted Successfully');
                    location.reload();
                    // $('#TableCategories').load(document.URL + ' #TableCategories');
                }
            });

        });
    });
</script>
