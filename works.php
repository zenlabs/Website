<?php include("header.php");?>
 <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
 <script>
 	$(document).ready(function(){		  
	   $("#pagecomment").html("Nuestros Trabajos<br>");	   		
	});	
	$('#workimages').cycle({ 
		fx:     'fade', 
		speed:  'slow', 
		speed:    300, 
		timeout:  5000,		
		pager:  '#nav',		 
		after:   onAfter
	});		
	function onAfter() { 
		$(".worktitle").html($(this).attr("title"));
		$(".workdesc").html($(this).attr("desc"));
		$(".workimagetext").html($(this).attr("comment"));			
	}
 </script> 
<div id="worktitledesc">
	<div  id="worktitlecontainer">
    	<div class="worktitle menutextblue"></div>
    	<div class="workdesc"></div>
    </div>	
</div>
<div class="worksimagecontainer">
	<div id="workimages">
   	  <img src="img/agonica.jpg" title="CUPONIX" desc="Rails, Ux, Facebook Api, Web Scraping" comment="Cuponix aggregates and recommends the best daily deals of the most of chilean cities. We aggregate the best dailydeals from the majority of the coupons sites such as Groupon." width="320" height="320" />
      <img src="img/guitar1.jpg" title="GUITAR 1" desc="fgfgfgfgfgfgfgfgfgfgfgfgf: my preferences: the best guitar: Ibañez" comment="guitar guitar guitar guitar guitar guitar guitar guitar guitar guitar " width="320" height="320" />
      <img src="img/guitar2.jpg" title="GUITAR 2" desc=" fgfgfgfgfgfgfgfgfgfgfgfgf: my preferences: another ibañez guitar" comment="guitar 2 guitar 2 guitar 2 guitar 2 guitar 2 guitar 2 guitar 2 guitar 2 guitar 2 guitar 2 guitar 2 guitar 2" width="500" height="382" />
      <img src="img/picturedeveloper2.png" title="DEVELOPER" desc="fgfgfgfgfgfgfgfgfgfgfgfgf:  comment: this is a developer standar" comment="developer developer developer v v v v developerdeveloperdeveloper developer developer developer developer developer developer developer vdeveloper developer developer" width="290" height="335" />           
    </div>
</div>
<div class="workimagesselector">
	<div id="nav" class="nav navigator"></div>	
</div>

<div id="imagetextcontainer">
    <div class="workimagetext">    	
    </div>
</div>

<?php include("footer.php");?>