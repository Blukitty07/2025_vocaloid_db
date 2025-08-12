<h1>Random song generator</h1>
<p>Select an amount of songs (up to 50) to generate and click confirm</p>
<!--- create a box for entering number a confirm button -->
<!-- ensure that if number exceeds 50 or isn't a number it doesn't crash -->
<!-- set up grid area -->


<form class="random" action="index.php?page=all_results&search=random" method="post">
    <input class="generator" type="number" name="random" value="" min=1 max=50 Placeholder="" required>
    <input class="confirm" type="submit" value="Confirm"/>
</form>