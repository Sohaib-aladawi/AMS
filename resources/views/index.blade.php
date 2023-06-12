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

        .hidden {
            display: none;
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
                <form action="/index">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" name="search" id="search" class="form-control" />
                            <label class="form-label text-white" for="search-input">Search </label>
                        </div>
                        <button type="submit"  id="" class="btn btn-warning">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                    <div id="search-results"></div>
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
                            <button class="btn btn-light" onclick="toggleButtons()" type="button"
                                data-student-id="{{ $student->student_id }}">
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
                <div id="infoDiv" class="hidden">
                    <h3 class="text-white" id="name"></h3>
                    <h3 class="text-white" id="specialiaztion"></h3>
                    <h3 class="text-white" id="CGPA"></h3>
                    <h3 class="text-white" id="email"></h3>
                    <h3 class="text-white" id="phon"></h3>
                </div>
                <hr />
                <a class="btn btn-secondary" role="button" href="/index" id="PreAdvice" class="hidden">
                    Pre-advice
                </a>
                <a class="btn btn-warning" role="button" href="/index" id="edit" class="hidden">
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
                        $('#email').text('Email: ' + response.email);
                        $('#phon').text('Phon: ' + response.phon);
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
        var isContentVisible = false;

        function toggleButtons() {
            var infoDiv = document.getElementById("infoDiv");
            var preAdviceLink = document.getElementById("PreAdvice");
            var editLink = document.getElementById("edit");

            if (isContentVisible) {
                infoDiv.classList.add("hidden");
                preAdviceLink.classList.add("hidden");
                editLink.classList.add("hidden");
                isContentVisible = false;
            } else {
                infoDiv.classList.remove("hidden");
                preAdviceLink.classList.remove("hidden");
                editLink.classList.remove("hidden");
                isContentVisible = true;
            }
        }
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
