<?php
	$Title = 'How to use CDNs properly';
	$Canonical = 'how-to-use-cdns-properly';
	require 'head.php';
?>

	<body>
		<header>
			<h1>How to use CDNs properly</h1>
			<h3><a class="color-flatui-belize-hole" href="compare-cdns">Compare CDNs</a> &emsp; <a class="color-flatui-belize-hole" href="common-misconceptions-about-cdns">Common misconceptions about CDNs</a></h3>
		</header>
		<hr id="use-protocol-relative-urls">
		<section>
			<h2>Use HTTPS-Only URLs</h2>
			<p>Secure connections rely on all the content in a page being loaded over another secure connection. You can use protocol relative URLs, which will copy the protocol of the parent, or specify for all requests to be secure.</p>
			<h3>Throws a security warning on secure pages.</h3>
			<code class="background-flatui-pomegranate color-white pre-line">&hellip; src="http://cdn.jsdelivr.net/gh/jquery/jquery@3/dist/jquery.min.js" &hellip;</code>
			<h3>Fails when running over a local file connection.</h3>
			<code class="background-flatui-carrot color-white pre-line">&hellip; src="//cdn.jsdelivr.net/gh/jquery/jquery@3/dist/jquery.min.js" &hellip;</code>
			<h3>Always negotiates a secure connection.</h3>
			<code class="background-flatui-nephritis color-white pre-line">&hellip; src="https://cdn.jsdelivr.net/gh/jquery/jquery@3/dist/jquery.min.js" &hellip;</code>
		</section>
		<hr id="load-javascript-asynchronously">
		<section>
			<h2>Load JavaScript Asynchronously</h2>
			<p>JavaScript not only has to be loaded before the page continues loading, but typically has to be executed before continuing as well. This can create massive waits, especially in pages with multiple libraries placed in the header. While a favorite recommendation has always been <em>"move scripts to the footer"</em>, this means any external resources do not start downloading in parallel with the page.</p>
			<p>Google Analytics, among others, solves this problem by placing a small inline script that then creates a script element that is downloaded without blocking the page. The small inline script itself does, of course, but is generally of little consequence.</p>
			<p>While this continues to be used for single, stand-alone scripts, i.e. those with no dependencies, it does not function well with the larger libraries you page may rely on. For instance, using either the <span class="monospace">async</span> or <span class="monospace">defer</span> properties in conjuntion with your jQuery will cause an error if later scripts run before it is finished loading. These errors look something like <span class="monospace color-flatui-pomegranate">$ is not defined</span> or <span class="monospace color-flatui-pomegranate">jquery is not defined</span>.</p>
			<h3><em>It has historically been very difficult to start loading jQuery early,<br>
			without blocking the page, and while preserving and other scripts you encounter.</em></h3>
			<p>The issue arises from the fact that any inline or external scripts are run once loaded, whereas <span class="monospace">async</span> or <span class="monospace">defer</span> are only run once loaded or the whole page is ready, and there is no guarantee with any use of these that they will be run in order (<span class="monospace">defer</span> is supposed to, but has several cases where it does not).</p>
			<p>What we need then, with jQuery especially, is a way to start loading it early on, in the head preferably, and then "catch" any scripts that try to execute using jQuery functions, and hold them until it is ready. Then it should execute them in order, as it otherwise would have.</p>
			<h3>Fortunately, there is a solution that does just that, and it's name is <a class="color-flatui-belize-hole" href="https://github.com/Cerdic/jQl">jQl</a>.</h3>
			<h3>Doesn't work at all.</h3>
			<code class="background-flatui-pomegranate color-white pre-block">	&hellip;
	&lt;script&gt;
		$('footer').css('background', 'black');
	&lt;/script&gt;
&lt;/head&gt;
&hellip;
	&hellip;
	&lt;script src="jquery.min.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&hellip;</code>
			<h3>Blocks rest of page from loading.</h3>
			<code class="background-flatui-carrot color-white pre-block">	&hellip;
&lt;script src="jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;$('footer').css('background', 'black');&lt;/script&gt;
&lt;/head&gt;
&hellip;</code>
			<h3>Doesn't load until the page is done.</h3>
			<code class="background-flatui-carrot color-white pre-block">	&hellip;
&lt;script src="jquery.min.js"&gt;&lt;/script&gt;
&lt;script&gt;$('footer').css('background', 'black');&lt;/script&gt;
&lt;/body&gt;
&hellip;</code>
			<h3>Loads from header, runs when ready.</h3>
			<code class="background-flatui-nephritis color-white pre-block">	&hellip;
	&lt;script&gt;
		var jQl = &hellip;
		jQl.loadjQ('jquery.min.js');
		$('footer').css('background', 'black');
	&lt;/script&gt;
&lt;/head&gt;
&hellip;</code>
			<p class="text-right">jQl from <a class="color-flatui-belize-hole" href="https://github.com/Cerdic/jQl">Cerdic/jQl</a></p>
		</section>
		<hr id="make-fewer-requests">
		<section>
			<h2>Make Fewer Requests</h2>
			<p>One of the many reasons we like <a class="color-flatui-belize-hole" href="https://www.jsdelivr.com/">jsDelivr</a> is because it provides a unique file combiner, which eradicates extraneous requests which, especially with smaller files, can add considerably latency (literally) to your page.</p>
			<h3>One Request for Every Library.</h3>
			<code class="background-flatui-pomegranate color-white pre-block">&hellip;
&lt;script src="assets/js/rem.min.js"&gt;&lt;/script&gt;
&lt;script src="assets/js/prefixfree.min.js"&gt;&lt;/script&gt;
&lt;script src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
&hellip;</code>
			<h3>One Request for Multiple Libraries.</h3>
			<code class="background-flatui-nephritis color-white pre-block">&hellip;
&lt;script src="https://cdn.jsdelivr.net/combine/gh/jquery/jquery@3/dist/jquery.min.js,gh/chuckcarpenter/REM-unit-polyfill@1/js/rem.min.js,gh/LeaVerou/prefixfree@1/prefixfree.min.js"&gt;&lt;/script&gt;
&hellip;</code>
		</section>
		<hr id="have-a-lower-latency">
		<section>
			<h2>Have a Lower Latency</h2>
			<p>According to <a class="color-flatui-belize-hole" href="https://www.cdnperf.com/">CDNperf</a>, jsDelivr offers one of the lowest latencies of any CDN. Latency is the time a users computer takes to find a site, so a lower latency means starting to load sooner. Stay away from Yandex unless your sites users are local to it, and you should be fine.</p>
		</section>
		<hr id="footer">
		<footer>
			<h3>a <a class="color-flatui-belize-hole" href="https://eustasy.org/">eustasy</a> lab</h3>
		</footer>
	</body>
</html>
