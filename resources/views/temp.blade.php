<x-layout>
    <section id="features">

        <body>
            <h1>Course Status</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Semester</th>
                        <th>Course ID</th>
                        <th>Course Title</th>
                        <th>Passed</th>
                        <th>Studying</th>
                        <th>Pending</th>
                        <th>Course Type</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $c = 1;
                    @endphp
                    @foreach ($courses as $course)
                        <tr>
                            <td>@php echo $c;    @endphp</td>
                            <td>
                                @foreach ($course->specializations as $specialization)
                                    {{ $specialization->pivot->semester }}
                                @endforeach
                            </td>
                            <td>{{ $course->course_id }}</td>
                            <td>{{ $course->course_name }}</td>

                            <td><input type="radio" name="status" value="passed"></td>
                            <td><input type="radio" name="status" value="studying"></td>
                            <td><input type="radio" name="status" value="pending"></td>
                            <td>{{ $specialization->pivot->specialization_id }}</td>
                        </tr>
                        @php  $c=$c+1; @endphp
                    @endforeach
                </tbody>
            </table>
            <h1>Student status</h1>
            <table>
                <tr>
                    <th>Course ID</th>
                    <th>Course Title</th>
                    <th>Passed</th>
                    <th>Studying</th>
                    <th>Pending</th>
                </tr>

                {{-- {{ dd($student); }} --}}
                @foreach ($student->courses as $course)
                    <tr>
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->pivot->status }}</td>

                        <td><input type="radio" name="{{ $course->pivot->course_id }}" value="passed"></td>
                        <td><input type="radio" name="{{ $course->pivot->course_id }}" value="studying"></td>
                        <td><input type="radio" name="{{ $course->pivot->course_id }}" value="pending"></td>
                    </tr>
                @endforeach
            </table>

        </body>
    </section>
</x-layout>
