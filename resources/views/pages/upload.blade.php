<form method="POST" action="upload" enctype="multipart/form-data">
@csrf
    <input type="text" name="coachName" placeholder="Enter your name coach" required>
    <input type="text" name="description" placeholder="Enter Description" required>
    <input type="file" name="file" required>
    <button type="submit">Upload picture</button>
</form>

/* inset for about page */

<form method="POST" action="uploadAbout" enctype="multipart/form-data">
@csrf
    <input type="text" name="title" placeholder="Enter title" required>
    <input type="text" name="intro" placeholder="Enter intro" required>
    <input type="text" name="reason" placeholder="Enter reason" required>
    <input type="text" name="content" placeholder="Enter content" required>
    <input type="text" name="address" placeholder="Enter address" required>
    <input type="file" name="file" required>
    <input type="tel" name="phone" placeholder="Enter phone" required>
    <button type="submit">Upload data</button>
</form>