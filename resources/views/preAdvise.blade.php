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
    <title>AMS</title>
    <style>
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

        /* .img_system {
      width: 50px;
      float: left;
      margin-right: 10px;
    } */
    </style>
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
                            <p class="nav-link" href="/index">{{ auth()->user()->advisor_name }}</p>
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
        <form action="/preAdvise/{{ $student->student_id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <h4 class="text-white">Name: {{ $student->student_name }}</h4>
            </div>
            <br />
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text">CGPA: <span class="text-white">{{ $student->current_CGPA }}</span></h4>
                </div>
                <div class="col-md-5">
                    <h4 class="text">Specialization: <span
                            class="text-white">{{ $specialization->specialization_name }}</span></h4>
                </div>
                <div class="col-md-3">
                    <h4 class="text">Level: <span class="text-white">{{ $specialization->level->level_name }}</span>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text">
                        Level 4 mark: <span class="text-white">{{ $student->EL4SCORE }}</span>
                    </h4>
                </div>
                <div class="col-md-5">
                    <h4 class="text">
                        Number of courses studying now:
                        <span class="text-white">
                            @php
                                $study = $courses->where('status', 'study')->count();
                                echo $study;
                            @endphp
                        </span>
                    </h4>
                </div>
                <div class="col-md-3">
                    <h4 class="text">Status: <span class="text-white">
                            {{ $student->status }}
                        </span></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text">IELTS mark: <span class="text-white">{{ $student->IELTSSCORE }}</span>
                    </h4>
                </div>
                <div class="col-md-5">
                    <h4 class="text">
                        Probation: @if ($student->current_CGPA < 2.0)
                            <span class="text-white"> Yes </span>
                        @else
                            <span class="text-white"> No </span>
                        @endif
                    </h4>
                </div>
                <div class="col-md-3">
                  <h4 class="text">Audit Type: <span class="text-white">5</span></h4>
                </div>
              </div>
              <hr />
              <div class="features-box row">
                @unless (count($courses->where('status', 'pending')) === 0)
                <table class="table table-bordered border-light">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course title</th>
                            <th scope="col">Course Type</th>
                            <th scope="col">Prerequisite</th>
                            <th scope="col">Name Prer</th>
                            <th scope="col">Pinding</th>
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
                                @if ($course->status == 'pending')
                                    <tr>
                                        <th scope="row">{{ $c }}</th>
                                        <td>{{ $course->course_id }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td> {{ $course->course_type }}</td>
                                        <td>{{ $course->prerequisite }}</td>
                                        <td>
                                            @if ($course->prerequisite != null)
                                                @foreach ($all as $course)
                                                    @if ($course->course_id == $pre)
                                                        {{ $course->course_name }} I
                                                    @endif
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" name="courses[]"
                                                value="{{ $name }}" id="flexCheckDefault" />
                                        </td>
                                    </tr>
                                    @php
                                        $c = $c + 1;
                                    @endphp
                                @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <button type="submit" class="btn btn-warning align-right">Save</button>
                    </form>
                    <!-- Button Submit -->
                    <a href="/index"><button type="button" class="btn btn-white align-right" type="button">
                      Back
                    </button></a>
                  </section>
                    @else
                    <a href="/editStudent/{{ $student->student_id }}"><button type="button" class="btn btn-warning align-right" type="button">
                      Update the level
                  </button></a>
                </div>
              </form>
              
              <a href="/index"><button type="button" class="btn btn-white align-right" type="button">
                Back
              </button></a>
            </section>
            @endunless

    <section id="copyright">
        <a href="/index">
            <div class="h-100 d-flex align-items-center justify-content-center" style="padding-top: 20px">
                <img src="{{ asset('images/logo.png') }}" class="img_system" alt="" width="50rem" />
                <h5>Advisee Management System</h5>
            </div>
        </a>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var checkboxes = $('input[type="checkbox"]');
            var cgpa = {{ $student->current_CGPA }};

            checkboxes.change(function() {
                var checkedCount = checkboxes.filter(':checked').length;
                var condition = false;
                var limit = 6; // Set the desired limit for checked checkboxes

                if (cgpa < 2.0) {
                    condition = true;
                    limit = 4;
                }

                if (checkedCount > limit && condition) {
                    this.checked = false; // Prevent checking more checkboxes
                    alert("This student is in probation and cannot take more than 4 courses!");
                } else if (checkedCount > limit && !condition) {
                    this.checked = false; // Prevent checking more checkboxes
                    alert("Cannot take more than 6 courses per semester!");
                }
            });
        });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
