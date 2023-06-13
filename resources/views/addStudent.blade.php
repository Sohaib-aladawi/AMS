<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        #features {
            padding: 7% 15%;
            background-color: #062757;
            position: relative;
            z-index: 1;
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
                <a class="navbar-brand me-2" href="/admainIndex">
                    <img src="/images/profile.jpg" height="60" alt="Photo" loading="lazy"
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
        <form action="/addStudent/save" method="POST" id="formEdit">
            @csrf
            <h2 class="text-center text-warning">ADD a new Student</h2><br>

            <div class="form-outline w-25">
                <input type="text" class="form-control" name="student_id" value="{{ old('student_id') }}"
                    style="color: rgb(248,141,42);" required />
                <label class="form-label text-white">Student ID </label>
                @if ($errors->has('student_id'))
                    <span style="color: red">{{ $errors->first('student_id') }}</span>
                @endif
            </div>

            <div class="row my-3">
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="text" class="form-control" name="student_name" value="{{ old('student_name') }}"
                            style="color: rgb(248,141,42);" required />
                        <label class="form-label text-white">Student Name </label>
                        @if ($errors->has('student_name'))
                            <span style="color: red">{{ $errors->first('student_name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                            style="color: rgb(248,141,42);" required />
                        <label class="form-label text-white">Email </label>
                        @if ($errors->has('email'))
                            <span style="color: red">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="number" class="form-control" name="phone" value="{{ old('phone') }}"
                            style="color: rgb(248,141,42);" required />
                        <label class="form-label text-white">Phone number</label>
                        @if ($errors->has('phone'))
                            <span style="color: red">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="text" class="form-control" name="current_CGPA" value="{{ old('current_CGPA') }}"
                            style="color: rgb(248,141,42);" required />
                        <label class="form-label text-white">CGPA</label>
                        @if ($errors->has('current_CGPA'))
                            <span style="color: red">{{ $errors->first('current_CGPA') }}</span>
                        @endif
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select" name="department_id" value="{{ old('department_id') }}"
                        aria-label="Default select example"
                        style="background-color: transparent; color: rgb(248,141,42);">
                        <option value="IT" selected>IT</option>
                        <option value="BS">Business</option>
                        <option value="ENG">Engineer</option>
                    </select>
                    @if ($errors->has('current_CGPA'))
                        <span style="color: red">{{ $errors->first('current_CGPA') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example" name="specialization_id"
                        value="{{ old('specialization_id') }}"
                        style="background-color: transparent; color: rgb(248,141,42);">
                        @foreach ($specializations as $specialization)
                            @php
                                $selected = $specialization->specialization_id == 'GN' ? 'selected' : '';
                            @endphp
                            <option value="{{ $specialization->specialization_id }} "{{ $selected }}>
                                {{ $specialization->specialization_name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('specialization_id'))
                        <span style="color: red">{{ $errors->first('specialization_id') }}</span>
                    @endif
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select" name="advisor_id" aria-label="Default select example"
                        value="{{ old('advisor_id') }}"
                        style="background-color: transparent; color: rgb(248,141,42);">
                        @foreach ($users as $user)
                            <option value="{{ $user->advisor_id }}">
                                {{ $user->advisor_name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('advisor_id'))
                        <span style="color: red">{{ $errors->first('advisor_id') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="status" aria-label="Default select example"
                        value="{{ old('status') }}" style="background-color: transparent; color: rgb(248,141,42);">
                        <option value="studying" selected>Studying</option>
                    </select>
                    @if ($errors->has('status'))
                        <span style="color: red">{{ $errors->first('status') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="number" class="form-control" name="EL4SCORE" value="{{ old('EL4SCORE') }}"
                            style="color: rgb(248,141,42);" required />
                        <label class="form-label text-white">Mark Level 4</label>
                        @if ($errors->has('EL4SCORE'))
                            <span style="color: red">{{ $errors->first('EL4SCORE') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                        <input type="text" class="form-control" name="IELTSSCORE"
                            value="{{ old('IELTSSCORE') }}" style="color: rgb(248,141,42);" min="0"
                            max="4" />
                        <label class="form-label text-white">ILETS mark</label>
                        @if ($errors->has('IELTSSCORE'))
                            <span style="color: red">{{ $errors->first('IELTSSCORE') }}</span>
                        @endif
                    </div>
                </div>
            </div><br>
            <!-- Button Submit -->
            <div class="text-center">
                <button type="submit" class="btn btn-warning" name="">Add</button>
                <button type="reset" class="btn btn-white" name="">Clean</button>
            </div><br>
            <div class="text-center">
                <a href="/admainIndex"><button type="button" class="btn btn-white align-right"
                        type="button">Back</button></a>
            </div>
        </form>
    </section>

    <section id="copyright">
        <a href="">
            <div class="h-100 d-flex align-items-center justify-content-center" style="padding-top: 20px">
                <img src="images/logo.png" class="img_system" alt="" width="50rem" />
                <h5>Advisee Management System</h5>
            </div>
        </a>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
