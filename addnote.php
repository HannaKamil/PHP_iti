<!DOCTYPE html>

<?php
include "logoutnavbar.php";
include 'connection.php';
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<h2>ملاحظات</h2>

<form action="insertnote.php" method="post">
    اسم الملاحظة:<br>
    <input type="text" name="notename">
    <br>
    تاريخ الملاحظة:<br>
    <input type="text" name="datenote">
    <br>
    الوقت<br>
    <input type="text" name="timenote">
    <br>
    حالة الملاحظة<br>
    <select name="status">
        <option>عاجلة</option>
        <option>غير عاجلة</option>
        <option>ملغية</option>
    </select>
    <br>

    <input type="submit" onclick="fun();" value="اضافة ملاحظة">
</form>

<!--<script>-->
<!--    function fun() {-->
<!--        alert("تم الاشتراك بنجاح!");-->
<!---->
<!--    }-->
<!--</script>-->
</body>

</html>
