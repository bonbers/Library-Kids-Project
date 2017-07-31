<?php
include('./connexion.php');

//----------------------On défini les variables------------------------------//
$title=$_POST['title'];
$description=$_POST['description'];
$author=$_POST['author'];
$picture=$_FILES['picture']['name'];
$genre=$_POST['genre'];

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["Submit"])) {
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
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
if ($_FILES["picture"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// ---------------Requete pour injecter dans la table------------------------//
$req = $bdd->prepare("INSERT INTO Livres (title, description, author, picture, genre) VALUES (:title, :description, :author, :picture, :genre)");
$req->execute(array(
    'title' => $title,
    'description' => $description,
    'author' => $author,
    'picture' => $picture,
    'genre' => $genre
));

header('location: index.php');