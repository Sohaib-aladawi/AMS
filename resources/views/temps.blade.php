<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td {border: 1px solid black}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
    <h1>Course Status</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>sudent ID</th>
                        <th>student name</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $c = 1;
                        @endphp
                    @foreach ($students as $student)
                    <tr>
                        <td>@php echo $c;    @endphp</td>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->student_name }}</td>
                    </tr>
                    @php  $c=$c+1; @endphp
                    @endforeach
                </tbody>
            </table>
            
        </body>
    
    
</html>