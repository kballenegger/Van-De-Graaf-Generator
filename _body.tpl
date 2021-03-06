<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Van De Graaf Generator, by Kenneth Ballenegger</title>
	<style type="text/css" media="screen">
	   #container {
	       width: 200px;
	       height: 200px;
	       margin: auto;
	       margin-top: 200px;
	   }
	   footer{
	       margin-top: 50px;
	       text-align: center;
	       font-size: 0.8em;
	   }
	</style>
</head>

<body>

    <div id="container">
        <?=$content?>
    </div>

    <div id="footer">
        Copyright (c) <a href="http://kswizz.com/">Kenneth Ballenegger</a>
    </div>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-215884-13']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</body>
</html>
