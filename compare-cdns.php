<?php
	$Title = 'Compare CDNs';
	require 'head.php';
?>
	<body>
		<header>
			<h1>Compare CDNs</h1>
			<h3><a class="color-belize-hole" href="how-to-use-cdns-properly">How to use CDNs properly</a></h3>
			<h3><a class="color-belize-hole" href="common-misconceptions-about-cdns">Common misconceptions about CDNs</a></h3>
		</header>
		<hr id="compare-cdns">
		<section>
			<table>
				<tr class="background-clouds">
					<th class="weight-500">CDN</th>
					<th class="weight-500">Speed<sup><a class="color-belize-hole" href="#sup-1">1</a></sup></th>
					<th class="weight-500">Updated</th>
					<th class="weight-500">Quantity</th>
					<th class="weight-500">Submit</th>
					<th class="weight-500">CSS too</th>
					<th class="weight-500">Combiner</th>
					<th class="weight-500">Multi-CDN</th>
				</tr>
				<tr>
					<td class="weight-500">jsDelivr</td>
					<td class="color-belize-hole">Fast</td>
					<td class="color-belize-hole">Automated<sup><a class="color-belize-hole" href="#sup-2">2</a></sup></td>
					<td class="color-nephritis">Yes</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-nephritis">Yes<sup><a class="color-belize-hole" href="#sup-3">3</a></sup></td>
					<td class="color-nephritis">Yes<sup><a class="color-belize-hole" href="#sup-4">4</a></sup></td>
				</tr>
				<tr>
					<td class="weight-500">CDNJS</td>
					<td class="color-nephritis">Okay</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
				</tr>
				<tr>
					<td class="weight-500">Google</td>
					<td class="color-nephritis">Okay</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
				</tr>
				<tr>
					<td class="weight-500">jQuery</td>
					<td class="color-belize-hole">Fast</td>
					<td class="color-nephritis">Yes</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
				</tr>
				<tr>
					<td class="weight-500">Microsoft</td>
					<td class="color-belize-hole">Fast</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
				</tr>
				<tr>
					<td class="weight-500">Yandex</td>
					<td class="color-pomegranate">Slow</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
					<td class="color-pomegranate">No</td>
				</tr>
			</table>
			<p id="sup-1" class="color-9">1. Speed statistics from <a class="color-belize-hole" href="http://www.cdnperf.com/">CDNperf</a>.</p>
			<p id="sup-2" class="color-9">2. jsDelivr allows the addition of <a class="color-belize-hole" href="https://github.com/jsdelivr/jsdelivr#auto-updating">auto-update configuration</a> for libraries they host.</p>
			<p id="sup-3" class="color-9">3. jsDelivr can <a class="color-belize-hole" href="https://github.com/jsdelivr/jsdelivr#load-multiple-files-with-single-http-request">combine multiple files</a> of either JavaScript or CSS into a single request simply by loading a specially formatted URL.</p>
			<p id="sup-3" class="color-9">4. jsDelivr is not actually a CDN itself, instead it relies on multiple CDNs to guarantee performance and availability.</p>
		</section>
		<hr id="footer">
		<footer>
			<h3>a <a class="color-belize-hole" href="http://eustasy.org/">eustasy</a> lab</h3>
		</footer>
	</body>
</html>