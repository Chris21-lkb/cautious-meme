<form method="POST" action="upload" enctype="multipart/form-data">
@csrf
    <input type="text" name="coachName" placeholder="Enter your name coach" required>
    <input type="text" name="description" placeholder="Enter Description" required>
    <input type="file" name="file" required>
    <button type="submit">Upload picture</button>
</form>