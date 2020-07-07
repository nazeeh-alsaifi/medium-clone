@extends('layouts.app')

@section('content')

    <div id="articles_table">
        <div class="row justify-content-center">
            <div class="py-4 col-md-10 ">
                <div class="card">
                    <div class="card-header font-weight-bolder d-flex">
                        <span class="card_header_text pt-2">Articles</span>
                        <a class="btn btn-dark ml-auto" role="button">add</a>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-2">
                            <div class="my-custom-scrollbar">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr data-toggle="collapse" href="#collapse">
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>Otto dsfkjdslkgjks jglskjdlgkj slkdjg l sdfsdlgslkjdglksjdglk</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="5">
                                            <div id="collapse" class="collapse in p-3 text-center">
                                                <button class="btn btn-success">Update</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr data-toggle="collapse" href="#collapse2">
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>Otto dsfkjdslkgjks jglskjdlgkj slkdjg l sdfsdlgslkjdglksjdglk</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="5">
                                            <div id="collapse2" class="collapse in p-3 text-center">
                                                <button class="btn btn-success">Update</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="solid container">

    <div id="Tags_table">
        <div class="row justify-content-center">
            <div class="py-4 col-md-10 ">
                <div class="card">
                    <div class="card-header font-weight-bolder d-flex">
                        <span class="card_header_text pt-2">Tags</span>
                        <a class="btn btn-dark ml-auto" role="button">add</a>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-2">
                            <div class="my-custom-scrollbar">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr data-toggle="collapse" href="#collapse3">
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="5">
                                            <div id="collapse3" class="collapse in p-3 text-center">
                                                <button class="btn btn-success">Update</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr data-toggle="collapse" href="#collapse4">
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="5">
                                            <div id="collapse4" class="collapse in p-3 text-center">
                                                <button class="btn btn-success">Update</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
