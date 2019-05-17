<!---------------------------------Code-------------------------------->
<?php
if (!isset($_SESSION)){
    session_start();
}
include "navbar.php";
include 'connection.php';
//-----------------------------

$target_dir = "images/uploads/";
$image_name = @$_FILES["fileUploadedForm"]["name"];
$image_name_withRandNumber = rand('0','100000') . "_" .@$_FILES["fileUploadedForm"]["name"];
$target_file = $target_dir . basename($image_name_withRandNumber);


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUploadedForm"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if (@$_FILES["fileUploadedForm"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileUploadedForm"]["tmp_name"], $target_file)) {
        echo "The file " . basename($image_name_withRandNumber) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



if ($uploadOk == 1) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // receive all input values from the form
        $title      = @($_POST["title"]);
        $type       = @($_POST["type"]);
        $body       = @($_POST["body"]);
        $image = $image_name_withRandNumber;
    }

    $sql = "INSERT INTO news (title, type,body,image) VALUES
 ('$title', '$type', '$body', '$image')";
    $conn->exec($sql);
    header('location: addNews.php');
    return false;
}
?>


<!--------------------------------------------------------------------->
<!---------------------------------Form-------------------------------->
<!--------------------------------------------------------------------->


<head>

</head>


<form method="post" action="#" enctype="multipart/form-data">
    <h3>Add news</h3><br><br>
    <div class="form-group">
        <label for="exampleFormControlInput1">news title</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="news title" required>
    </div>

    <br>

    <select class="custom-select" name="type" required>
        <option selected>the type of news:</option>
        <option value="critial">critial</option>
        <option value="religion">religion</option>
        <option value="eduactional">eduactional</option>
    </select>
    <br>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">The news is:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body" required></textarea>
    </div>
    <br>

    Select image to upload:
    <input type="file" name="fileUploadedForm" id="fileToUpload">

    <div class="col-md-6 ">
        <button type="submit" class="btn btn-primary"  name="submit">
            Add News
        </button>
    </div>

</form>



