<!DocType html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php
			if (!empty($Title)) echo $Title.' &nbsp;&#8212;&nbsp; ';
			echo 'CDN Advisory &nbsp;&#8212;&nbsp; eustasy';
		?></title>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-45667989-11', 'eustasy.org');
			ga('send', 'pageview');
		</script>
		<script>
			var jQl={q:[],dq:[],gs:[],ready:function(a){"function"==typeof a&&jQl.q.push(a);return jQl},getScript:function(a,c){jQl.gs.push([a,c])},unq:function(){for(var a=0;a<jQl.q.length;a++)jQl.q[a]();jQl.q=[]},ungs:function(){for(var a=0;a<jQl.gs.length;a++)jQuery.getScript(jQl.gs[a][0],jQl.gs[a][1]);jQl.gs=[]},bId:null,boot:function(a){"undefined"==typeof window.jQuery.fn?jQl.bId||(jQl.bId=setInterval(function(){jQl.boot(a)},25)):(jQl.bId&&clearInterval(jQl.bId),jQl.bId=0,jQl.unqjQdep(),jQl.ungs(),jQuery(jQl.unq()), "function"==typeof a&&a())},booted:function(){return 0===jQl.bId},loadjQ:function(a,c){setTimeout(function(){var b=document.createElement("script");b.src=a;document.getElementsByTagName("head")[0].appendChild(b)},1);jQl.boot(c)},loadjQdep:function(a){jQl.loadxhr(a,jQl.qdep)},qdep:function(a){a&&("undefined"!==typeof window.jQuery.fn&&!jQl.dq.length?jQl.rs(a):jQl.dq.push(a))},unqjQdep:function(){if("undefined"==typeof window.jQuery.fn)setTimeout(jQl.unqjQdep,50);else{for(var a=0;a<jQl.dq.length;a++)jQl.rs(jQl.dq[a]); jQl.dq=[]}},rs:function(a){var c=document.createElement("script");document.getElementsByTagName("head")[0].appendChild(c);c.text=a},loadxhr:function(a,c){var b;b=jQl.getxo();b.onreadystatechange=function(){4!=b.readyState||200!=b.status||c(b.responseText,a)};try{b.open("GET",a,!0),b.send("")}catch(d){}},getxo:function(){var a=!1;try{a=new XMLHttpRequest}catch(c){for(var b=["MSXML2.XMLHTTP.5.0","MSXML2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],d=0;d<b.length;++d){try{a= new ActiveXObject(b[d])}catch(e){continue}break}}finally{return a}}};if("undefined"==typeof window.jQuery){var $=jQl.ready,jQuery=$;$.getScript=jQl.getScript};
			jQl.loadjQ('//cdn.jsdelivr.net/g/prefixfree,jquery');
		</script><?php
			if (!empty($Canonical)) echo '
		<link rel="canonical" href="'.$Canonical.'">';
		?>

		<link rel="stylesheet prefetch" href="//fonts.googleapis.com/css?family=Lusitana|Roboto:400,500,400italic|Source+Code+Pro">
		<link rel="stylesheet prefetch" href="//cdn.jsdelivr.net/g/normalize,colors.css">
		<style>
			a {
				color: inherit;
				outline: none;
				text-decoration: none;
			}
			a:hover,
			a:focus {
				text-decoration: underline;
			}
			body {
				color: #222;
				font: normal 1em/1.4 'Lusitana', serif;
				margin: 0 auto;
				max-width: 800px;
				text-align: center;
			}
			code {
				border-radius: 0.3em;
				display: block;
				font-family: 'Source Code Pro', monospace;
				margin: 1em 0;
				padding: 0.5em;
			}
			h1,
			h2,
			h3,
			h4,
			h5,
			h6 {
				color: #333;
				font-weight: normal;
				margin: 2em 0;
			}
			header {
				padding: 5em 0;
			}
			header h1,
			header h3 {
				margin: 0;
			}
			hr {
				background: #ccc;
				background: linear-gradient(to right, #ffffff 0%,#cccccc 47%,#ffffff 100%);
				border: none;
				height: 1px;
				width: 100%;
			}
			p {
				font: normal 1em/1.4 'Roboto', sans-serif;
				text-align: left;
				margin: 1em 0;
			}
			section {
				margin: 3em 0;
			}
			table {
				border-spacing: 0;
				font: normal 1em/1.4 'Roboto', sans-serif;
				width: 100%;
			}
			th,
			td {
				font-weight: normal;
				padding: .5em 1em;
			}
			.align-center {
				text-align: center;
			}
			.align-left {
				text-align: left;
			}
			.align-right {
				text-align: right;
			}
			.weight-500 {
				font-weight: 500 !important;
			}
			.monospace {
				font-family: 'Source Code Pro', monospace;
			}
			.pre-line {
				text-align: center;
				white-space: pre-line;
			}
			.pre-block {
				text-align: left;
				white-space: pre-wrap;
			}
		</style>
	</head>