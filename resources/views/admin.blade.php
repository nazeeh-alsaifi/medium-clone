@extends('layouts.app')

@section('content')

    <div id="articles_table">
        <div class="row justify-content-center">
            <div class="py-4 col-md-10 ">
                <div class="card">
                    <div class="card-header font-weight-bolder d-flex">
                            <span class="card_header_text pt-2">Articles</span>
                            <button class="btn btn-dark ml-auto">add</button>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>Otto dsfkjdslkgjks jglskjdlgkj slkdjg l sdfsdlgslkjdglksjdglk</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>Otto dsfkjdslkgjks jglskjdlgkj slkdjg l sdfsdlgslkjdglksjdglk</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>Otto dsfkjdslkgjks jglskjdlgkj slkdjg l sdfsdlgslkjdglksjdglk</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>Otto dsfkjdslkgjks jglskjdlgkj slkdjg l sdfsdlgslkjdglksjdglk</td>
                                        <td>@mdo</td>
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

    <div id="tags_table">
        <div class="row justify-content-center">
            <div class="py-4 col-md-10 ">
                <div class="card">
                    <div class="card-header font-weight-bolder d-flex">
                        <span class="card_header_text pt-2">Tags</span>
                        <button class="btn btn-dark ml-auto">add</button>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-2">
                            <div class="my-custom-scrollbar">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>@mdo</td>
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
