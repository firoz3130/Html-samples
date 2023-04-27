# Html-samples

Html samples

<div class="my-class">
    <p>This paragraph has the "my-class" class.</p>
</div>
.my-class {
    color: red;
    font-size: 18px;
    font-weight: bold;
}

<div id="my-id">
    <p>This paragraph has the "my-id" ID.</p>
</div>

#my-id {
color: blue;
font-size: 16px;
}

<p>This is a paragraph.</p>
p {
    color: green;
    font-size: 20px;
}
<!DOCTYPE html>
<html>
<head>
	<title>Photo Rating Website</title>
</head>
<body>
	<h1>Photo Rating Website</h1>
	
	<!-- Navigation menu -->
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Top Rated Photos</a></li>
			<li><a href="#">Submit a Photo</a></li>
		</ul>
	</nav>
	
	<!-- Main content area -->
	<main>
		<h2>Rate the Photo</h2>
		
		<!-- Display the photo to be rated -->
		<img src="photo.jpg" alt="Photo to be rated">
		
		<!-- Rating system -->
		<p>Rate this photo:</p>
		<div>
			<input type="radio" id="star5" name="rating" value="5">
			<label for="star5">5 stars</label>
			<input type="radio" id="star4" name="rating" value="4">
			<label for="star4">4 stars</label>
			<input type="radio" id="star3" name="rating" value="3">
			<label for="star3">3 stars</label>
			<input type="radio" id="star2" name="rating" value="2">
			<label for="star2">2 stars</label>
			<input type="radio" id="star1" name="rating" value="1">
			<label for="star1">1 star</label>
		</div>
		
		<!-- Submit button -->
		<button type="submit">Submit Rating</button>
	</main>
	
	<!-- Footer -->
	<footer>
		<p>&copy; 2023 Photo Rating Website</p>
	</footer>
</body>
</html>
