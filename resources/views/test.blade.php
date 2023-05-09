<form action="/test/{{ $student->student_id }}" method="POST">
    @csrf
  
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
  
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control">
    </div>
  
    <div class="form-group">
      <label>
        <input type="checkbox" name="subscribe" value="1">
        Subscribe to newsletter
      </label>
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>