<?php require_once "includes/header.php";

if (isset($_GET['id'])) {
	$albumId = $_GET['id'];
} else {
	header("Location: index.php");
}

$album = new Album($con, $albumId);

$artist = $album->getArtist();

echo $album->getTitle() . "<br>";
echo $artist->getName();

?>


<?php require_once "includes/footer.php" ?>
