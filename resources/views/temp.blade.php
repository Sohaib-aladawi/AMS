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
			@foreach ($courses as $courses)
				
			<tr>
				<td>1</td>
				<td>{{ $student->student_name }} </td>
				<td>COMP101</td>
				<td>Introduction to Computer Science</td>
				<td><input type="radio" name="status" value="passed"></td>
				<td><input type="radio" name="status" value="studying"></td>
				<td><input type="radio" name="status" value="pending"></td>
				<td>Core</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
