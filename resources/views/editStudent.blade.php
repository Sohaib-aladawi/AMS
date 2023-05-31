<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/logo.png') }}" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

    <style>
        /* CSS to remove the arrow */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            /* Firefox */
        }

        #features {
            padding: 7% 15%;
            background-color: #062757;
            position: relative;
            z-index: 1;
        }

        .features-box {
            text-align: center;
        }

        .text {
            color: #b2ceff;
            font-weight: bold;
        }

        td {
            color: aliceblue;
        }

        .align-right {
            float: right;
            margin: 5px;
        }
    </style>
    <title>AMS</title>
</head>

<body>
    <!-- navbar  -->
    <section id="navbar">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="/index">
                    <img src="{{ asset('images/profile.jpg') }}" height="60" alt="Photo" loading="lazy"
                        style="margin-top: -1px" />
                </a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <br />
                            <p class="nav-link" href="#">{{ auth()->user()->advisor_name }}</p>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <div class="d-flex align-items-center">
                        <a href="/logout"><button type="button" class="btn btn-primary me-3">
                                Logout
                            </button></a>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </section>

    <!--  -->
    <section id="features">
        <form action="/editStudent/{{ $student->student_id }}/save" method="POST" id="formEdit">
            @csrf
            @method('PUT')
            <div class="col-md-4">
                <div class="form-outline" style="width: 96%;">
                    <input type="text" id="Sname" class="form-control form-control"
                        value="{{ $student->student_name }}" style="color: rgb(248,141,42);" />
                    <label class="form-label text-white" for="Sname">Name</label>

                </div>
            </div>
            <div class="col-md-8"></div>
            <br />
            <div class="row">
                <div class="col-md-4">
                    <div class="form-outline">
                        <input type="number" id="Scgpa" class="form-control form-control"
                            value="{{ $student->current_CGPA }}" style="color: rgb(248,141,42);" />
                        <label class="form-label text-white" for="Scgpa">CGPA</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <select class="form-select" aria-label="Default select example" id='specialization'
                        style="background-color: transparent; color: rgb(248,141,42);">
                        <!-- Important to add this option  -->

                        @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->specialization_id }}"
                                {{ $specialization->specialization_id == $student->specialization_id ? 'selected' : '' }}>
                                {{ $specialization->specialization_name }}</option>
                        @endforeach


                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" aria-label="Default select example" id='level'
                        style="background-color: transparent; color: rgb(248,141,42);">
                        <!-- Important to add this option  -->

                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <select class="form-select" aria-label="Default select example"
                        style="background-color: transparent; color: rgb(248,141,42);">
                        <!-- Important to add this option  -->
                        <option value="Studying" {{ $student->status == 'Studying' ? 'selected' : '' }}>Studying
                        </option>
                        <option value="Postponed" {{ $student->status == 'Postponed' ? 'selected' : '' }}>Postponed
                        </option>
                        <option value="Withdrawn" {{ $student->status == 'Withdrawn' ? 'selected' : '' }}>Withdrawn
                        </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                        <input type="number" id="ncsn" class="form-control form-control"
                            style="color: rgb(248,141,42);" value="{{ $student->IELTSSCORE }}"/>
                        <label class="form-label text-white" for="ncsn">IELTS mark: </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="text">Level 4 mark: <span class="text-white">{{ $student->EL4SCORE }} </span></h4>
                </div>
                <div class="col-md-5">
                    <h4 class="text">Number of courses studying now: <span class="text-white">
                            @php
                                $study = $courses->where('status', 'study')->count();
                                echo $study;
                            @endphp
                        </span></h4>
                </div>
                <div class="col-md-2"></div>
            </div>
            <hr />
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-end">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="studying">
                                <label class="form-check-label text-white" for="studying">Studying</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-box row">
                @unless (count($courses->where('status', 'pending')) === 0)
                    <table class="table table-bordered border-light">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Code</th>
                                <th scope="col">Course title</th>
                                <th scope="col">Course Type</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $c = 1;
                            @endphp

                            @foreach ($courses as $course)
                                @php
                                    $pre = $course->prerequisite;
                                    $name = $course->course_id;
                                @endphp

                                <tr class="{{ $course->status === 'study' ? 'studying-row' : 'other-row' }}">
                                    <th scope="row">{{ $c }}</th>
                                    <td>{{ $course->course_id }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->course_type }}</td>
                                    <td>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            {{-- disabled="{{ $course->status !== 'pass' }}" --}}>
                                            <option value="pass" {{ $course->status === 'pass' ? 'selected' : '' }}>
                                                Passed</option>
                                            <option value="study" {{ $course->status === 'study' ? 'selected' : '' }}>
                                                Studying</option>
                                            <option value="pending" {{ $course->status === 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                        </select>
                                    </td>
                                </tr>

                                @php
                                    $c++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                @endunless
            </div>
            <!-- Button Submit -->
            <button type="submit" class="btn btn-warning align-right" name="" form="formEdit">Save</button>
            <a href="/index"><button type="button" class="btn btn-white align-right"
                    type="button">Back</button></a>
        </form>
    </section>

    <section id="copyright">
        <a href="/index">
            <div class="h-100 d-flex align-items-center justify-content-center" style="padding-top: 20px">
                <img src="{{ asset('images/logo.png') }}" class="img_system" alt="" width="50rem" />
                <h5>Advisee Management System</h5>
            </div>
        </a>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script>
        function updateSecondCombo() {
            var firstCombo = document.getElementById("specialization");
            var secondCombo = document.getElementById("level");

            // Get the selected value from the first combo box
            var selectedValue = firstCombo.value;

            // Define the options for the second combo box based on the selected value
            var options = [];

            if (selectedValue === "GN") {
                options = [{
                    value: "1",
                    label: "Diploma first year"
                }];
            } else if (selectedValue === "NCS" || selectedValue === 'SE') {
                options = [{
                    value: "2",
                    label: "Diploma second year"
                }, ];
            } else if (selectedValue === "ADSE" || selectedValue === 'DS' ||
                selectedValue === "CI" || selectedValue === 'NW') {
                options = [{
                    value: "3",
                    label: "Advance Diploma"
                }, ];
            } else if (selectedValue === "BTDS" || selectedValue === 'BTSE' ||
                selectedValue === "CIS" || selectedValue === 'NC') {
                options = [{
                    value: "4",
                    label: "B-tech"
                }, ];
            }

            // Clear the existing options in the second combo box
            secondCombo.innerHTML = "";

            // Add the new options to the second combo box
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.value = options[i].value;
                option.text = options[i].label;
                secondCombo.appendChild(option);
            }

            // Enable the second combo box
            secondCombo.disabled = false;
        }
        // Add an event listener to the first combo box
        var firstCombo = document.getElementById("specialization");
        firstCombo.addEventListener("change", updateSecondCombo);

        // Call the function initially to populate the second combo box
        updateSecondCombo();

        // Add event listener to the checkbox
        var studyingCheckbox = document.getElementById("studying");
studyingCheckbox.addEventListener("change", function() {
    var studyingRows = document.querySelectorAll(".studying-row");
    var otherRows = document.querySelectorAll(".other-row");
    var maxLength = Math.max(studyingRows.length, otherRows.length);

    for (var i = 0; i < maxLength; i++) {
        // if (i < studyingRows.length) {
        //     studyingRows[i].style.display = studyingCheckbox.checked ? "table-row" : "none";
        // }
        if (i < otherRows.length) {
            otherRows[i].style.display = studyingCheckbox.checked ? "none" : "table-row";
        }
    }
});
    </script>
</body>

</html>
