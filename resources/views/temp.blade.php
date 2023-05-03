<!DOCTYPE html>
<html>
<head>
	<style>
		table, th, td{border: 1px solid black;}
	</style>
	<title>Course Status</title>
</head>
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
				$c=1;
			@endphp
			@foreach ($courses as $course)
				
			<tr>
				<td>@php echo $c;    @endphp</td>
				<td>@foreach ($course->specializations as $specialization)
					{{ $specialization->pivot->semester }}
				@endforeach</td>
				<td>{{ $course->course_id }}</td>
				<td>{{ $course->course_name }}</td>
				<td><input type="radio" name="status" value="passed"></td>
				<td><input type="radio" name="status" value="studying"></td>
				<td><input type="radio" name="status" value="pending"></td>
				<td>{{ $course->specialization_id }}</td>
			</tr>
			@php  $c=$c+1; @endphp
			@endforeach
		</tbody>
	</table>
</body>
</html>
