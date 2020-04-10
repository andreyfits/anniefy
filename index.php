<?php require_once "includes/header.php" ?>
    <h1 class="pageHeadingBig">You Might Also like</h1>
    <div class="gridViewContainer">
		<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums");
		while ($row = mysqli_fetch_array($albumQuery)) {
			echo $row['title'] . "<br>";
		}
		?>
    </div>
<?php require_once "includes/footer.php" ?>