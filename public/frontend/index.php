<?php include("header.php");?>
<script>
	function setdevelopersinfo(){
		/*Set developer info*/
		developersinfoarray=new Array;		
		developersinfoarray[0]=new Array("url('img/dev.png')","jose luis","Developer","XXXXXXXXXXXX XXXXXXXXXXXX XXXXXXXXX XXXXXXXXXXX XXXXXXXXXXXXX XXXXXXXXXXXX XXXXXXXXXXXX ...","");
		developersinfoarray[1]=new Array("url('img/picturedeveloper1.png')","Abraham Barrera","Desarrollador","Desde pequeño le gustó crear cosas, y ...","");
		
		/*Set developer medails*/
		developermeadils=new Array;
		developermeadils[0]=new Array("php","sql");
		developermeadils[1]=new Array("php","ruby","sql");
	}	
	function medails(developercode){
		var strmedails="";
		for (var i=0; i<=((developermeadils[developercode].length)-1); i++){
			strmedails+="<div class='frameworkicon'>"+developermeadils[developercode][i]+"</div>";
		}
		$("#medailcontainer").html(strmedails);		
	}
	$(document).ready(function(){
		setdevelopersinfo();	
	   /*$("#bodywrapper").css({'background-color' : '#2c5283', 'margin' : '127px 0 0'});	
	   $("#pagecomment").html("Contactanos<br>");	*/   
	   $("#bodywrapper").css("height","1410px");
	   
	   $(".developerinfofacebox").click(function(){
	   		
	   		$("#developinfopicture").css("background-image",developersinfoarray[$(this).attr("dev")][0]);
	   		
	   		$("#developername").html(developersinfoarray[$(this).attr("dev")][1]);
	   		$("#developerrange").html(developersinfoarray[$(this).attr("dev")][2]);
	   		$("#developercomment").html(developersinfoarray[$(this).attr("dev")][3]);
	   		
	   		medails($(this).attr("dev"));
	   			   		    
	   });	   	   	   		
	});	
</script>
<div id="developinfoleft">	
	<div id="developinfofaces">
		<div class="developerinfofacebox" dev="0"><img width="26" height="29" src="img/developerthumbnails.png" /></div>
		<div class="developerinfofacebox" dev="0"><img width="26" height="29" src="img/developerthumbnails.png" /></div>
		<div class="developerinfofacebox" dev="0"><img width="26" height="29" src="img/developerthumbnails.png" /></div>
		<div class="developerinfofacebox" dev="0"><img width="26" height="29" src="img/developerthumbnails.png" /></div>
		<div class="developerinfofacebox" dev="0"><img width="26" height="29" src="img/developerthumbnails.png" /></div>				
		<div class="developerinfofacebox" dev="1"><img width="26" height="29" src="img/developerthumbnails2.png" /></div>
		<div class="developerinfofacebox" dev="1"><img width="26" height="29" src="img/developerthumbnails2.png" /></div>
		<div class="developerinfofacebox" dev="1"><img width="26" height="29" src="img/developerthumbnails2.png" /></div>		
	</div>
	<div id="developinfobubbles"></div>   
    <div id="developinfopicture"></div>      
</div>
<div id="developinforight">	
    <div id="developinforightcontainer1"></div>
    <div id="developinforightcontainer2"></div>    
    <div id="developinfotextcontainer">
		<div id="developername" class="pagecomment">Abraham Barrera</div>
		<div id="developerrange" >Desarrollador</div>
		<div id="developercomment">
			Desde pequeño le gustó crear cosas, y no descubrió sino hasta la enseñanza media que la programación de computadores es la mejor forma de crear e innovar. Vibra desarrollando para móviles (iPhone/iPad),aunque también desarrolla en otras tecnologías
			 como J2EE y Python		 
	 	</div>
 	</div>
    <div id="medailcontainer">
    	<div class="frameworkicon"></div>
        <div class="frameworkicon"></div>
        <div class="frameworkicon"></div>
        <div class="frameworkicon"></div>
        <div class="frameworkicon"></div>
    </div>
</div> 
<br />
<div id="bodyseparator"></div>
<div style="float:left; width:444px;">
	<div style="background-image:url(img/bodybottomrighttop.png); width:360px; height:33px; margin:31px 0px 0px 82px; position:absolute;"></div>
	<div style="background-image:url(img/bodybottomleft.png); position:absolute; width:443px; height:450px; background-repeat:no-repeat;"></div>
	<div class="teammediacontainers">
    	<div style="float:right; margin:179px 75px 0 0; font-size:18px;" class="menutextblue">
        	Ver todas<br />las fotos<br />
            <img src="img/seeallpictures.png" width="11" height="14" />
        </div>        
      </div>
      <div id="whatdowedo" style="margin:126px 0 0 70px;">     
        <div class="pagecomment" style="font-size:27px;">
        Qu&eacute; hacemos?
        </div>
        <div style=" font-size: 11px;" class="pagecomment">
        Gastamos nuestro tiempo resolviendo tus problemas o <br />investigando c&oacute;mo hacerlo con calidad en el menor tiempo posible.
        </div>
        <div class="techinfo">
        <img src="img/rails.png" width="35" height="45" />
        <span class="techname">Ruby on Rails</span>
        </div>
        <div class="techinfo">
        <img src="img/php.png" width="60" height="32" />
        <span class="techname">PHP</span>
        </div>
        <div class="techinfo">
        <img src="img/wordpress.png" width="34" height="34" />
        <span class="techname">Wordpress</span>
        </div>
        <div class="techinfo">
        <img src="img/drupal.png" width="31" height="35" />
        <span class="techname">Drupal</span>
        </div> 
      </div>      
</div>
<div id="bodybottomright">	
    <div class="blogmaincontainer">
        <div class="blogcontainer">
            <span class="blogmessagetitle">Un Job Board para ayudar</span><br /> 
            <span class="blogmessagedate">Posteado el 21-06-2011</span><br />
       		<img src="img/blogseparator.png" width="216" height="1" />
        </div>         
        <div class="blogcontainer">
            <span class="blogmessagetitle">Las certificaciones debieran morir. <br />Haz tu parte.</span><br /> 
            <span class="blogmessagedate">Posteado el 18-06-2011</span><br />
       		<img src="img/blogseparator.png" width="216" height="1" />
        </div> 
        <div class="blogcontainer">
            <span class="blogmessagetitle">Presentación Java Day: &#8220;Ruby,<br /> Programando para Humanos&#8221 </span><br /> 
            <span class="blogmessagedate">Posteado el 14-06-2011</span><br />
       		<img src="img/blogseparator.png" width="216" height="1" />
        </div>
        <div class="blogcontainer">
            <span class="blogmessagetitle">Presentación Java Day: &#8220;El lado<br /> cool de Java&#8221 </span><br /> 
            <span class="blogmessagedate">Posteado el 14-06-2011</span><br />
            <img src="img/blogseparator.png" width="216" height="1" />
        </div>
        <div class="blogcontainer">
            <span class="blogmessagetitle">Presentación Java Day: &#8220;El lado<br /> cool de Java&#8221 </span><br /> 
            <span class="blogmessagedate">Posteado el 14-06-2011</span><br />
            <img src="img/blogseparator.png" width="216" height="1" />
        </div>  
        <div>
        	<div class="bloglastaccessrow"></div>
            <div class="lastaccess">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entradas anteriores</div>
        </div>
    </div>   
</div>
<?php include("footer.php");?>