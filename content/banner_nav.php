<div class="box banner">
	

	<h1>☆ Vocaloid & Utauloid Songs ☆</h1>
</div>    <!-- / banner -->


<div class="nav">
	<div class="linkwrapper">
		<div class="buttons">
			<a class="one" href="index.php">Home</a>
			<a class="one" href="index.php?page=about">About</a>
			<a class="one" href="index.php?page=all_results&search=recent">Recent</a>
			<a class="one" href="index.php?page=random">Random</a>
			<a class="one" href="index.php?page=all_results&search=all">All</a>
				<?php
					if(isset($_SESSION['admin'])) {// end of admin if
				?>
					<a class="one"  href="index.php?page=../admin/logout">Log out</a>
					<a class="one"  href="index.php?page=../admin/add_song">Add Song</a>
				<?php ;}
						// if not logged in then log in button
					else{
				?>
				<a class="one" href="index.php?page=../admin/login">Login</a>
				<?php ;} ?>
			
			<div class="animation start-home"></div>
		</div>  <!-- / buttons -->
		
		<input type="checkbox" id="menu" name="menu" class="menu-checkbox">
		<div class="menu">
			<label class="menu-toggle" for="menu"><span class="fa-solid fa-bars"></span></label>
			<ul>
				<li><a class="other" href="index.php">Home</a></li>
				<li><a class="other"  href="index.php?page=about">About</a></li>
				<li><a class="other"  href="index.php?page=all_results&search=recent">Recent</a></li>
				<li><a class="other"  href="index.php?page=random">Random</a></li>
				<li><a class="other"  href="index.php?page=all_results&search=all">All</a></li>
				<?php
					if(isset($_SESSION['admin'])) {// end of admin if
				?>
					<li><a class="other"  href="index.php?page=../admin/logout">Log out</a></li>
					<li><a class="other"  href="index.php?page=../admin/add_song">Add Song</a></li>
				<?php ;}
						// if not logged in then log in button
					else{
				?>
				<li><a class="other"  href="index.php?page=../admin/login">Login</a></li>
				<?php ;} ?>
			</ul>
		</div>

		<div class="topsearch">

			<!-- Quick Search -->           
			<form method="post" action="index.php?page=quick_search" enctype="multipart/form-data">

				<input class="search quicksearch" type="text" name="quick_search" size="40" value="" required placeholder="Quick Search..." >

				<select class="quick-choose" name="search_type">
					<option value="all" selected>All</option>
					<option value="song">Song</option>
					<option value="producer">Producer</option>
					<option value="singer">Singer</option>
					<option value="theme">Theme</option>
				</select>

				<input class="submit" type="submit" name="find_quick" value="&#xf002;" >

			</form>     <!-- / quick search -->

		</div>  <!-- / top search -->
		

	</div>  <!--- / link wrapper -->

</div>    <!-- / nav --> 