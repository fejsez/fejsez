<html>
 <head>
 
  	<script src="mootools-1.2.3-core-nc.js" type="text/javascript" charset="utf-8"></script>
   	<script src="mootools-1.2.3.1-more.js" type="text/javascript" charset="utf-8"></script>
   	<script src="/ElementStack.js" type="text/javascript" charset="utf-8"></script>
   	<script type="text/javascript" charset="utf-8">
		window.addEvents({
			domready: function(){
				new ElementStacks($$('img.rap'), $('wrapper'));
			}
		});
   	</script>
   		<script type="text/javascript">
 function unhide(divID) {
 var item = document.getElementById(divID);
 if (item) {
 item.className=(item.className=='hidden')?'unhidden':'hidden';
 }
 }
 </script>
<!-- attempting to take inline out

   	<script type="text/javascript" charset="utf-8">
 		window.addEvents({
			domready: function(){
				new myunhide($$('newboxes'), $('1'));
			}
		});
 </script>
 -->

   	<title>dog is my co-pilot. seriously have you seen Garbanzo?</title>
  <link href="mine1.css" rel="stylesheet" type="text/css" />
  </head>
 <body>
 <div id="page">
 <div id="container">
<div id="content"> 
<h1>fejsez.com</h1>
<div id=wrapper>
<a id="blog1" href="javascript:unhide('newboxes3');" ><img class="rap" width="200" height="200" src="/blog.jpg" /></a>
<a id="blur1" href="javascript:unhide('newboxes4');" ><img class="rap" width="200" height="200" src="/blur.jpg" /></a>
<a id="photos1" href="javascript:unhide('newboxes2');" ><img class="rap" width="200" height="200" src="/tracks.jpg" /></a>
<a id="garb1" href="javascript:unhide('newboxes1');" ><img class="rap" width="200" height="200" src="/garb.jpg" /></a>
<div id="newboxes1" class="hidden"><a href="http://about.me/fejsez">ABOUT</a></div>
<div id="newboxes2" class="hidden"> <a href="http://bike.fejsez.com">BIKE</a></div>
<div id="newboxes3" class="hidden"> <a href="http://blog.fejsez.com"> BLOG</a></div>
<div id="newboxes4" class="hidden"> <a href="http://photos.fejsez.com">BLUR</a></div>
</div>
</div>
</div>
</div>
</body>
</html>