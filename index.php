<?php require_once "includes/includedFiles.php"; ?>

    <h1 class="pageHeadingBig">You Might Also like</h1>
    <div class="gridViewContainer">
		<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND()");
		while ($row = mysqli_fetch_array($albumQuery)) {
			echo "<div class='gridViewItem'>
				      <a href='album.php?id=" . $row['id'] . "'>
					      <img src='" . $row['artworkPath'] . "' alt='Album'>
						  <div class='gridViewInfo'>" . $row['title'] . "</div>
					  </a>
                  </div>";
		}
		?>
    </div>