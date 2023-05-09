<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    {{-- <link rel="stylesheet" href="../css/layout.css" /> --}}
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
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
                    <img src="images/profile.jpg" height="60" alt="Photo" loading="lazy"
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
        @csrf
        <div class="features-box row">
            <div class="col-md-6">
                <!-- search box -->
                <div class="d-grid gap-2 col-6 mx-auto">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" />
                            <label class="form-label text-white" for="form1">Search </label>
                        </div>
                        <button type="button" class="btn btn-warning">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <!-- Report button -->
                    <a href="/">
                        <div class="d-grid gap-2">
                            <button class="btn bg-warning" type="button"><span
                                    class="text-white">Report</span></button>
                        </div>
                    </a>
                    <!-- student button -->
                    @unless (count($students) == 0)
                        @foreach ($students as $student)
                            <button class="btn btn-light" type="button" data-student-id="{{ $student->student_id }}">
                                {{ $student->student_name }}
                            </button>
                        @endforeach
                    @else
                        <button class="btn btn-light" type="button">
                            No Student Assigned
                        </button>
                    @endunless

                    <br />
                </div>
            </div>

            <div class="col-md-6">
                <h3 class="text-whit" id="name"></h3>
                <h3 class="text-whit" id="specialiaztion"></h3>
                <h3 class="text-whit"id="CGPA"></h3>
                <hr />
                <a class="btn btn-secondary" role="button" href="/index" id="PreAdvice">
                    Pre-advice
                </a>
                <a href="/editStudent"class="btn btn-warning" role="button" href="/index" id="edit">
                    Edit
                </a>
            </div>
        </div>
    </section>

    <section id="copyright">
        <div class="h-100 d-flex align-items-center justify-content-center" style="padding-top: 20px">
            <img src="images/logo.png" class="img_system" alt="" width="50rem" />
            <h5>Advisee Management System</h5>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.btn-light').click(function() {
                var studentId = $(this).data('student-id');
                var pre = document.getElementById("PreAdvice");
                var edit = document.getElementById("edit");

                $.ajax({
                    url: '/index/' + studentId,
                    method: 'GET',
                    success: function(response) {
                        // Update the student information on the page
                        $('#name').text('Name: ' + response.student_name);
                        $('#specialiaztion').text('Specialization: ' + response
                            .specialization_id);
                        $('#CGPA').text('CGPA: ' + response.current_CGPA);
                    },
                    // Get the <a> element by its ID

                    // Update the href attribute
                    error: function() {
                      // Handle any errors that occur during the AJAX request
                      
                    }
                  });
                  pre.setAttribute("href", "/preAdvise/" + studentId);
                  edit.setAttribute("href", "/editStudent/" + studentId);
            });

        });
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
