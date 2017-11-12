<div class="row page-container"><link rel="stylesheet" type="text/css" media="all" href="./assets/flexslider.css">
<script type="text/javascript">
		jQuery.noConflict();  
    	jQuery(document).ready(function() {  
			jQuery('.flexslider').flexslider({directionNav: true});
			var cnt = 0;
	 		var pixel = 55;
			jQuery('.flex-control-nav li').each(function(){
				cnt = cnt + 1;
				if(cnt > 2)
				 {
				   pixel = pixel + 14;
				 }
			});
			if(cnt > 2)
			 {
				jQuery('.prev').css("right",pixel+"px");
			 }
		    else
			 {
			 	jQuery('.prev').css("right","55px");
			 }	 
     });  
	   </script>
<div class="index-slider">
  <div class="flexslider" id="home_slider" style="min-height: inherit;">
    <div class="slider-strip">
      <h1 class="title_green"><span>Featured Properties</span></h1>
    </div>
    <ul class="slides">
            <li class="ui-tabs-nav-item ui-tabs-selected" style="display: none;"> <a href="http://templatic.net/demos/realtr/property/yash-plaza-2/">
                <img src="./assets/img1-689x400.jpg" alt=""></a>
                <p class="flex-caption">Yash Plaza</p>
      </li>
            <li class="ui-tabs-nav-item ui-tabs-selected" style="display: none;"> <a href="http://templatic.net/demos/realtr/property/visitor-villa-2/">
                <img src="./assets/img16.jpg" alt=""></a>
                <p class="flex-caption">Visitor Villa</p>
      </li>
            <li class="ui-tabs-nav-item ui-tabs-selected" style="display: none;"> <a href="http://templatic.net/demos/realtr/property/ridgedale-palace-2/">
                <img src="./assets/img21-600x400.jpg" alt=""></a>
                <p class="flex-caption">Ridgedale Palace</p>
      </li>
            <li class="ui-tabs-nav-item ui-tabs-selected" style="display: block;"> <a href="http://templatic.net/demos/realtr/property/nimes-villa-2/">
                <img src="./assets/img26-784x400.jpg" alt=""></a>
                <p class="flex-caption">Nimes Villa</p>
      </li>
            <li class="ui-tabs-nav-item ui-tabs-selected" style="display: none;"> <a href="http://templatic.net/demos/realtr/property/1-hughes-center-dr-1901-2/">
                <img src="./assets/img31-600x400.jpg" alt=""></a>
                <p class="flex-caption">1 Hughes Center Dr 1901</p>
      </li>
          </ul>
  <ol class="flex-control-nav"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="active">4</a></li><li><a>5</a></li></ol><ul class="flex-direction-nav"><li><a class="prev" href="http://templatic.net/demos/realtr/#" style="right: 97px;">Previous</a></li><li><a class="next" href="http://templatic.net/demos/realtr/#">Next</a></li></ul></div>
</div>
