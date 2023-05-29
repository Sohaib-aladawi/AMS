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
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample"
          aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
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
          <input type="text" id="Sname" class="form-control form-control" value="{{ $student->student_name }}" style="color: rgb(248,141,42);" />
          <label class="form-label text-white" for="Sname">Name</label>

        </div>
      </div>
      <div class="col-md-8"></div>
      <br />
      <div class="row">
        <div class="col-md-4">
          <div class="form-outline">
            <input type="number" id="Scgpa" class="form-control form-control" value="{{ $student->current_CGPA }}" style="color: rgb(248,141,42);" />
            <label class="form-label text-white" for="Scgpa">CGPA</label>
          </div>
        </div>
        <div class="col-md-5">
          <select class="form-select" aria-label="Default select example"
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
          <select class="form-select" aria-label="Default select example"
            style="background-color: transparent; color: rgb(248,141,42);">
            <!-- Important to add this option  -->
            <option value="x" selected>Level</option>
            <option value="1">Diploma 1</option>
            <option value="2">Diploma 2</option>
            <option value="3">Diploma Adv</option>
            <option value="4">B-Tech</option>
          </select>
        </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-3">
              <select class="form-select" aria-label="Default select example"
              style="background-color: transparent; color: rgb(248,141,42);">
              <!-- Important to add this option  -->
              <option value="Studying" {{ $student->status == 'Studying' ? 'selected' : '' }}>Studying</option>
              <option value="Postponed" {{ $student->status == 'Postponed' ? 'selected' : '' }}>Postponed</option>
              <option value="Withdrawn" {{ $student->status == 'Withdrawn' ? 'selected' : '' }}>Withdrawn</option>
            </select>
        </div>
        <div class="col-md-4">
            <div class="form-outline">
                <input type="number" id="ncsn" class="form-control form-control" style="color: rgb(248,141,42);" />
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
        <div class="col-md-6"></div>
        <div class="col-md-2">
          <input class="form-check-input" type="checkbox" value="" id="studyCheck">
          <label class="form-check-label text-white" for="studyCheck"> Studying </label>
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
                                
                                    <tr>
                                        <th scope="row">{{ $c }}</th>
                                        <td>{{ $course->course_id }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td> {{ $course->course_type }}</td>
                                        <td>
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  
                                                <option value="1">Passed</option>
                                                <option value="2">Studying</option>
                                                <option value="3">Pinding</option>
                                              </select>
                                        </td>
                                    </tr>
                                    @php
                                        $c = $c + 1;
                                    @endphp
                                
                            @endforeach
                          </tbody>
                        </table>
                
              </td>
            </tr>

          </tbody>
        </table>
      </div>
      @endunless
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
</body>

</html>