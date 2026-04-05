<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>بحث</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>🔍 البحث عن كتاب</h2>

<form method="POST">
    <input type="text" name="search" placeholder="اكتب اسم الكتاب">
    <input type="submit" value="بحث">
</form>

<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = "SELECT * FROM books WHERE title LIKE '%$search%'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>".$row['title']." - ".$row['author']."</p>";
    }
}
?>

</body>
</html>