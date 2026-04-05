<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>إضافة كتاب</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>➕ إضافة كتاب</h2>

<form method="POST" onsubmit="return checkData()">
    <input type="text" name="title" placeholder="اسم الكتاب" required><br>
    <input type="text" name="author" placeholder="اسم الكاتب" required><br>
    <input type="text" name="image" placeholder="رابط الصورة" required><br>

    <input type="submit" name="add" value="إضافة">
</form>

<script>
function checkData() {
    alert("تم إرسال البيانات!");
    return true;
}
</script>

<?php
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $image = $_POST['image'];

    $query = "INSERT INTO books (title, author, image) 
              VALUES ('$title', '$author', '$image')";

    mysqli_query($conn, $query);

    echo "<p>✅ تم إضافة الكتاب</p>";
}
?>

</body>
</html>