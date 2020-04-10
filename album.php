<?php require_once "includes/header.php";

if (isset($_GET['id'])) {
	$albumId = $_GET['id'];
} else {
	header("Location: index.php");
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();
?>

<div class="entityInfo">
    <div class="leftSection">
        <img src="<?php echo $album->getArtworkPath(); ?>" alt="Album">
    </div>
    <div class="rightSection">
        <h2><?php echo $album->getTitle(); ?></h2>
        <p>By <?php echo $artist->getName(); ?></p>
        <p><?php echo $album->getNumberOfSongs(); ?> songs</p>
    </div>
</div>

<div class="tracklistContainer">
    <ul class="tacklist">
		<?php
		$songIdArray = $album->getSongIds();
		$i = 1;
		foreach ($songIdArray as $songId) {
			$albumSong = new Song($con, $songId);
			$albumArtist = $albumSong->getArtist();

			echo "<li class='tracklistRow'>
                      <div class='trackCount'>
                          <img src='assets/images/icons/play-white.png' class='play' alt='Play'>
                          <span class='trackNumber'>$i</span>
                      </div>
                  </li>";
			$i++;
		}
		?>
    </ul>
</div>

<?php require_once "includes/footer.php" ?>
