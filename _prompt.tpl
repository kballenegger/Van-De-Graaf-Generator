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
	</style>
</head>

<body>

    <div id="container">
        <?if(!empty($message)):echo $message;endif;?>
        <form action="index.php" method="post" accept-charset="utf-8">
            <p>Width: <input type="text" name="width" value="0" id="width"></p>
            <p>Height: <input type="text" name="height" value="0" id="height"></p>

            <p><input type="submit" value="Continue &rarr;"></p>
        </form>
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
