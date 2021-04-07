<form method="POST" action="upload" enctype="multipart/form-data">
@csrf
    <input type="text" name="coachName" placeholder="enter your name coach" required>
    <input type="text" name="imageName" placeholder="enter your picture coach" required>
    <input type="file" name="file" required>
    <button type="submit">Upload picture</button>
</form>