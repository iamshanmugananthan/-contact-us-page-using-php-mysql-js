<!DOCTYPE html>
<html>
<head>
<title>contactus</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<div class="contact1">
<div class="form-group">
    <h3>SEND YOUR MESSAGE</h3>
</div>
</div>
    <form action="conn.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="message" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>