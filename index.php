<?php require_once "includes/header.php" ?>
    <h1 class="pageHeadingBig">You Might Also like</h1>
    <div class="gridViewContainer">
		<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums order by rand()");
		while ($row = mysqli_fetch_array($albumQuery)) {
			echo "<div class='gridViewItem'>
                    <img src='" . $row['artworkPath'] . "'>
                    <div class='gridViewInfo'>" . $row['title'] . "</div>
                  </div>";
		}
		?>
    </div>
<?php require_once "includes/footer.php" ?>