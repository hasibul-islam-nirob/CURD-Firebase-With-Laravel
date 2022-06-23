@extends('Layout.app')

@section('content')

    <div class="container m-5">
        <div class="row">
            <div class="col-md-8">
                <table class="table able table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Nirob</td>
                        <td>Rafiqul</td>
                        <td>Ten</td>
                        <td>1</td>
                        <td>
                            <button class="btn btn-info" >Edit</button>
                            <button class="btn btn-danger" >Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>Nirob</td>
                        <td>Rafiqul</td>
                        <td>Ten</td>
                        <td>1</td>
                        <td>
                            <button class="btn btn-info" >Edit</button>
                            <button class="btn btn-danger" >Delete</button>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
