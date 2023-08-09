<!DOCTYPE html>
<html>
<head>
    <title>Upload Form</title>
</head>
<body>
    <h1>File Upload and Email Validation</h1>
    <form action="mailvalidator.php" method="post" enctype="multipart/form-data">
        <label for="user_email">Email:</label>
        <input type="email" id="user_email" name="user_email" required>
        <br><br>
        <label for="user_file">Select a JPEG or PNG file:</label>
        <input type="file" id="user_file" name="user_file" accept=".jpeg, .jpg, .png" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
