<?php
	$Title = 'Common misconceptions about CDNs';
	$Canonical = 'common-misconceptions-about-cdns';
	require 'head.php';
?>
	<body>
		<header>
			<h1>Common misconceptions about CDNs</h1>
			<h3><a class="color-belize-hole" href="compare-cdns">Compare CDNs</a> &emsp; <a class="color-belize-hole" href="how-to-use-cdns-properly">How to use CDNs properly</a></h3>
		</header>
		<hr id="youll-probably-load-jquery-from-cache-instantly-if-you-use-a-cdn">
		<section>
			<h2>You'll probably load jQuery from Cache instantly if you use a CDN</h2>
			<p>Even Google Hosted, the most popular of all the CDNs, loading the latest jQuery, you still have less than a 1% chance of hitting a users cache. It's just not that likely, there are too many versions and too many places it could be being loaded from. There are nearly 50 versions of jQuery on Google's CDN. Less than 10% of sites use Google's CDN. Less than 20% of those use the latest version. HTTP and HTTPS are separate caches. Plus, caches get cleared over time, and new versions get released.</p>
			<p>Instead, try to focus on getting the best you can first time, and then hitting a cache your created after that.</p>
		</section>
		<hr id="cdns-are-only-for-common-libraries-like-jquery">
		<section>
			<h2>CDNs are only for common libraries like jQuery</h2>
			<p>Not jsDelivr, or CDNJS for that matter. These two allow submission of any library (CDNJS is stricter, requiring some level of popularity). Combine that with the file-combiner found at jsDelivr, and you've got yourself one file taking care of several requests that's the same size as if they had been loaded seperately.</p>
			<p class="align-right color-9">See <a class="color-belize-hole" href="how-to-use-cdns-properly#make-fewer-requests">How to make fewer requests</a>.</p>
		</section>
		<hr id="cdns-are-always-available-to-everyone">
		<section>
			<h2>CDNs are always available to everyone</h2>
			<h3>We're looking at you, China.</h3>
			<p>Your CDN may not always be available to everyone, but seeing as you should always be able to gracefully fall back without JavaScript anyway, that shouldn't be an issue, right?</p>
			<p class="color-9">CSS loaded off of a CDN might be more difficult to fix, but if you're loading CSS, then it's probably from jsDelivr or CDNJS, and it's only Microsoft, Yahoo and Google that have been blocked in the past.</p>
		</section>
		<hr id="footer">
		<footer>
			<h3>a <a class="color-belize-hole" href="http://eustasy.org/">eustasy</a> lab</h3>
		</footer>
	</body>
</html>