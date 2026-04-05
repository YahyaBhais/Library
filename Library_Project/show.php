<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>عرض الكتب</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>📚 قائمة الكتب</h2>

<table border="1">
<tr>
    <th>الصورة</th>
    <th>اسم الكتاب</th>
    <th>الكاتب</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM books");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td><img src='".$row['image']."' width='80'></td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['author']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>