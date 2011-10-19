<?php include("header.php");?>
<script>
	$(document).ready(function(){	
	   $("#bodywrapper").css({'background-color' : '#c9ced2', 'margin' : '127px 0 0'});	
	   $("#pagecomment").html("Blog<br>Temas de inter&eacute;s para todos");	   		
	});	
</script>
<style>
#mainblogleft{	
	float:left;		
    margin: 180px 0 0 100px;
    width: 575px;
	font-family:arial;
	font-size:15px;
}
	.blogtitle{
		font-size:22px;
		font-family:arial;
		font-weight:bold;
		color:#2e568a;
	}
	.bloginfo{
		font-size:14px;
		font-family:arial;
		font-weight:lighter;
		color:#999;
	}
	.blogseparator{		
		float: left;
		height: 40px;
		margin: 30px 0 0 45px;
		width: 485px;
	}
		.blogseparatorline{						
			background-image: url("img/blogsepaatorline.png");
			background-repeat: repeat-x;
			float: left;
			height: 3px;
			width: 216px;
		}
		.blogseparatorlogo{			 				
			background-image: url("img/zenlabsiconblogseparatot.png");
			background-repeat: no-repeat;
			float: left;
			height: 33px;
			margin: -15px 5px 0 10px;
			width: 30px;		
		}
#mainblogright{			
    float: left;   
    margin: 175px 0 0 93px;
    width: 222px;
}
	.blogrightheader{
		width: 220px;
		height:55px;
		background-color:#b1b6bc;
		-webkit-border-top-left-radius: 18px;
		-webkit-border-top-right-radius: 18px;
		-moz-border-radius-topleft: 18px;
		-moz-border-radius-topright: 18px;
		border-top-left-radius: 18px;
		border-top-right-radius: 18px;
		color:#000;		
		font-family:arial;
		font-weight:bold;
		font-size:18px;
		text-align:center;
		line-height:3em;		
	}
	.blogrightcontainer{
		background-image:url(img/logorightgrill.png);
		width:220px;
		height:358px;
		background-repeat:repeat-x;
	}
		.blogrighttext{
			font-family:Arial;
			font-size:12px;
			color:#000;
			margin:0 22px 8px 22px;
			cursor:pointer;
		}
		.blogrighttext:hover{						
			color:#3B82C4;
			text-decoration:underline;
		}
</style>
<div id="mainblogleft">
<div class="blogtitle">Las certificaciones debieran morir. Haz tu parte.</div>

<div class="bloginfo">posteado por: Abraham barrera| 18 de Junio del 2011 | 12 Comentarios</div><br />
Hasta antes de ayer, mi reaccion a las certificaciones para desarrolladores era simple. No me interesaban.
Estaba de acuerdo con la idea general de que las certificaciones eran mayormente inutiles, pero eso era todo.<br /><br />

Ahora pienso distinto. Ahora pienso que son derechamente malas.<br /><br />

Las certificaciones han fallado en ser una buena forma indirecta de encontrar buenos desarrolladores.
Pero empersas ingenuas a&uacute;n las usan para contratar. Entonces, ¿cu&aacute;l es el gran problema?<br /><br />

El punto es: algunos buenos desarrolladores caer&Aacute;n en la trampa de hacer la famosa certificaci&oacute;n porque todo lo que ven en el mercado que los rodea es que es requerida. En otras palabras, hay buenos desarrolladores que no van a tener acceso a una empresa decente, se van a rendir y se convertiran en certificados. <br /><br />

    <div class="blogseparator">
        <div class="blogseparatorline"></div><div class="blogseparatorlogo"></div><div class="blogseparatorline"></div>    
    </div>

</div>



<div id="mainblogright" style="z-index:50000;">
	<div class="blogrightheader">&Uacute;ltimas entradas</div>
    <div class="blogrightcontainer">
    	<div class="blogrighttext">Un Job Borad para ayudar.</div>
        <div class="blogrighttext">Las certificaciones debieran mori, Haz tu parte</div>
        <div class="blogrighttext">Presentaci&oacute;n Java Day:"Ruby, Programando para Humanos"</div>
        <div class="blogrighttext">Presentaci&oacute;n Java Day:"El lado cool de java"</div>
        <div class="blogrighttext">De orador en el "Java day", auspiciado por el INACAP de Osorno Pasi&oacute;n</div>
        <div class="blogrighttext">El ingl&eacute;s es una habilidad que puedes aprender (r&aacute;pido!)</div>
        <div class="blogrighttext">Posteando doble</div>
    </div>
    <br />
    <div class="blogrightheader">Archivos</div>
    <div class="blogrightcontainer">
    	<div class="blogrighttext">June 2011 (8)</div>
        <div class="blogrighttext">March 2011 (1)</div>
        <div class="blogrighttext">January 2011 (1)</div>
        <div class="blogrighttext">November 2010 (1)</div>
        <div class="blogrighttext">October 2010 (3)</div>
        <div class="blogrighttext">August 2010 (1)</div>
        <div class="blogrighttext">July 2010 (2)</div>
        <div class="blogrighttext">June 2010 (1)</div>
        <div class="blogrighttext">May 2010 (7)</div>
        <div class="blogrighttext">April 2010 (2)</div>
        <div class="blogrighttext">march 2010 (8)</div>
        <div class="blogrighttext">February 2010 (5)</div>
    </div>
</div>
<?php include("footer.php");?>