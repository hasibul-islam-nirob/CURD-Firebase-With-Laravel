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

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Student</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="createStudentForm">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student ID</label>
                                <input type="text" class="form-control" id="studentID" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student Name</label>
                                <input type="text" class="form-control" id="studentName" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Father Name</label>
                                <input type="text" class="form-control" id="studentFatherName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Class</label>
                                <input type="text" class="form-control" id="studentClass" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Roll</label>
                                <input type="text" class="form-control" id="studentRoll" >
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button id="addBtn" type="button" class="btn btn-primary btn-block">Add New Student</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')


    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "{{ config('services.firebase.apiKey') }}",
            authDomain: "{{ config('services.firebase.authDomain') }}",
            projectId: "{{ config('services.firebase.projectId') }}",
            storageBucket: "{{ config('services.firebase.storageBucket') }}",
            messagingSenderId: "{{ config('services.firebase.messagingSenderId') }}",
            appId: "{{ config('services.firebase.appId') }}",
            measurementId: "{{ config('services.firebase.measurementId') }}"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        //const analytics = getAnalytics(app);

        var database = firebase.database();
        var lastStudentID = 0;

        // Add
        $('#addBtn').on('click', function (){

            let stdRowData = $('#createStudentForm').serializeArray();

            let id = $('#studentID').val();
            let name = $('#studentName').val();
            let stdFather = $('#studentFatherName').val();
            let stdClass = $('#studentClass').val();
            let roll = $('#studentRoll').val();

            let studentID = lastStudentID + 1;
            // insert Into Firebase
            firebase.database().ref('students/' + studentID).set({
                std_id: id,
                std_name: name,
                std_father: stdFather,
                std_class: stdClass,
                std_roll: roll,
            });
            // Assign Student ID
            lastStudentID = studentID;

        })


    </script>

@endpush




{{--<script>--}}

{{--    const firebaseConfig = {--}}
{{--        apiKey: "{{ config('services.firebase.apiKey') }}",--}}
{{--        authDomain: "{{ config('services.firebase.authDomain') }}",--}}
{{--        projectId: "{{ config('services.firebase.projectId') }}",--}}
{{--        storageBucket: "{{ config('services.firebase.storageBucket') }}",--}}
{{--        messagingSenderId: "{{ config('services.firebase.messagingSenderId') }}",--}}
{{--        appId: "{{ config('services.firebase.appId') }}",--}}
{{--        measurementId: "{{ config('services.firebase.measurementId') }}"--}}
{{--    };--}}

{{--    // Initialize Firebase--}}
{{--    firebase.initializeApp(firebaseConfig);--}}
{{--    firebase.analytics();--}}

{{--    var database = firebase.database();--}}


{{--    // Create Student--}}
{{--    $("#addBtn").on('click', function (){--}}
{{--        var id              = document.getElementById('studentID').value;--}}
{{--        var stdName         = $('#studentName').val();--}}
{{--        var stdfatherName   = $('#studentFatherName').val();--}}
{{--        var stdClass        = $('#studentClass').val();--}}
{{--        var stdRoll         = $('#studentRoll').val();--}}

{{--        alert(id);--}}


{{--    })--}}


{{--</script>--}}
