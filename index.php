<? session_start();?>
<html>
<?php
    $dbhost = 'merry.ee.ncku.edu.tw';
    $dbuser = 'xperience';
    $dbpass = 'QHN5Z2mewFmqB9Xq';
    $dbname = 'xperience';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES 'utf8'");
    mysql_select_db($dbname);
	$result=mysql_query("SELECT * FROM homehottest");
	$i=0;
	while($homehottest[$i] = mysql_fetch_row($result))
	{
	$i=$i+1;
	}
	if($_SESSION['status']=='login')
	{
		$sql = "SELECT * FROM 4_member WHERE account=\"".$_SESSION['name']."\"";
		$result=mysql_query($sql);
		if(mysql_fetch_array($result)==false)
		{
			mysql_query("INSERT INTO 4_member (account) VALUES ('".$_SESSION['name']."');");
		}
	}
?>
<head>
<title>Xperience</title>
<link rel="stylesheet" type="text/css" href="homecss.CSS" /></head>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://demo.newhtml.net/jQuery%20Transit%20-%20CSS3%20animations%20for%20jQuery/jQuery%20Transit%20-%20CSS3%20animations%20for%20jQuery/jquery.transit.min.js"></script>
<script src="http://demonstration.abgne.tw/jquery/plugins/0085/js/jquery.hoverIntent.js"></script>
<body bgcolor="#3e3a39">
<div id="iframehidden" style="height:100%;width:100%;position:fixed;"></div>
<iframe src="https://ymj.hackpad.com/" width="1000px" height="1000px" style="position: fixed;width: 81%;z-index: 13;left: 9.8%;height: 100%;top:100%" id="itemiframe"></iframe>
<div id="homepage">
<div id="leftside"></div>
<div id="MID">
<div id="rightside"></div>
	<div id="header"><a name="top"><font id="accprint" style="position:absolute;top:88%;left:94%;"></font></a><center><img src="ex5/logo.png"  id="homelogo" name="logo" height=60px  vspace=20px></center><a href="#" style="color:#595758">
	<?
		if($_SESSION['status']=='login')
		{
			echo '<div class="log" id="logout">Log out</div>';
		} 
		else
		{
			echo '<div class="log" id="login">Log in</div>';
		}
		if($_SESSION['name']=='Perience X')
		{
			echo '<div id="edit" style=" width:100px;height:50px;position:absolute;">edit</div>';
		}
	?>
	</a><div id="rightside"><img src="homepage/fb-logo.png" width=35px><img src="homepage/twiter-logo.png" width=35px></div>
	<?
		if($_SESSION['status']=='login')
		{
			echo '<img src="'.$_SESSION['imgurl'].'" style="position:absolute;left:80%;top:60%;">
					<font style="position:absolute;left:86%;top:82%;">'.$_SESSION['name'].'</font>
						';
		} 
	?>
	</div>
	<div id="list">
		<a href="#" id="ho"><li><img src="ex5/home.png" width=270px></li></a>
		<a href="#"  id="act"><li><img src="ex5/activity.png" width=270px></li></a>
		<a href="#"  id="aboutus"><li><img src="ex5/aboutus.png" width=270px></li></a>
		<a href="#"><li><img src="ex5/my.png" width=270px></li></a>
		<a href="#" id="team"><li><img src="ex5/my.png" width=270px></li></a>
		<div id="activity" class="detail">
			<div class="actcontain" id="interview">
				<font class="actfont" face="微軟正黑體">實習計畫</font>
			</div>
			<div class="actcontain" id="change">
				<font class="actfont" face="微軟正黑體">交換計畫</font>
			</div>
			<div class="actcontain" id="volunteer">
				<font class="actfont" face="微軟正黑體">志工計畫</font>
			</div>
			<div class="actcontain" id="camp">
				<font class="actfont" face="微軟正黑體">營隊計畫</font>
			</div>
			<div class="actcontain" id="competitive">
				<font class="actfont" face="微軟正黑體">商業競賽</font>
			</div>
		</div>
		
	</div>
	<div class="allpage" id="home">
	<div id="newshowphoto">
		
	</div>
	<div id="HLU">
		<div id="hottest" style="height:auto;">
		<div id="hoo"><img src="ex5/hottest.jpg" width=350px></div>
		<? 
		$result=mysql_query("SELECT * FROM homehottest");
		$i=0;
		while($homehottest[$i] = mysql_fetch_row($result))
		{
		echo '<div class="img1">
			<div class="im1">
				<div class="imm1" style=”font-family:微軟正黑體”>'.$homehottest[$i][3].'</div>
				<div class="mmi1">'.$homehottest[$i][1].'</div></div>
				<img src="'.$homehottest[$i][0].'" width=350px height=422px>
				<input class="info0" type="hidden" value="'.$homehottest[$i][0].'">
				<input  class="info1" type="hidden" value="'.$homehottest[$i][1].'">
				<input class="info2" type="hidden" value="'.$homehottest[$i][2].'">
				<input   class="info3" type="hidden" value="'.$homehottest[$i][3].'">
				<input class="info6" type="hidden" value="'.$homehottest[$i][5].'">
			</div>
		<div  class="delete" style="position:absolute;left:-10px;z-index:10">
			<input class="info2" type="hidden" value="'.$homehottest[$i][2].'">
			<input class="info5" type="hidden" value="'.$homehottest[$i][4].'">';
		if($_SESSION['status']=='login')
		{
			echo '<img src="img/cross.jpg" width=50px>
						';
		} 
		echo '</div>';
		$i=$i+1;
		}
		?>
	</div>
	<div id="latest" height="auto" style="height:auto;">
	<div id="laa"><img src="ex5/latest.jpg" width=350px height=57px></div>
	<? 
		$result=mysql_query("SELECT * FROM homelatest");
		$i=0;
		while($homelatest[$i] = mysql_fetch_row($result))
		{
		echo '<div class="img1">
		<div class="im1"><div class="imm1" style=”font-family:微軟正黑體”>'.$homelatest[$i][3].'</div><div class="mmi1" style="background:#e2960e">'.$homelatest[$i][1].'</div></div>
		<img src="'.$homelatest[$i][0].'" width=350px height=422px>
		<input class="info0" type="hidden" value="'.$homelatest[$i][0].'">
		<input class="info1" type="hidden" value="'.$homelatest[$i][1].'">
		<input class="info2" type="hidden" value="'.$homelatest[$i][2].'">
		<input  class="info3" type="hidden" value="'.$homelatest[$i][3].'">
		<input class="info6" type="hidden" value="'.$homelatest[$i][5].'">
		</div>
		<div  class="delete" style="position:absolute;left:-10px;z-index:10">
			<input class="info2" type="hidden" value="'.$homelatest[$i][2].'">
			<input class="info5" type="hidden" value="'.$homelatest[$i][4].'">';
		if($_SESSION['status']=='login')
		{
			echo '<img src="img/cross.jpg" width=50px>
						';
		} 
		echo '</div>';
		$i=$i+1;
		}
	?>
	</div>
	<div id="upcoming" style="height:auto;">
	<div id="upp"><img src="ex5/cut.jpg" width=350px height=57px></div>
	<? 
		$result=mysql_query("SELECT * FROM homeupcoming");
		$i=0;
		while($homeupcoming[$i] = mysql_fetch_row($result))
		{
		echo '<div class="img1">
		<div class="im1"><div class="imm1" style=”font-family:微軟正黑體”>'.$homeupcoming[$i][3].'</div><div class="mmi1" style="background:#247fa3">'.$homeupcoming[$i][1].'</div></div>
		<img src="'.$homeupcoming[$i][0].'" width=350px height=422px>
		<input class="info0" type="hidden" value="'.$homeupcoming[$i][0].'">
			<input class="info1" type="hidden" value="'.$homeupcoming[$i][1].'">
			<input class="info2" type="hidden" value="'.$homeupcoming[$i][2].'">
			<input  class="info3" type="hidden" value="'.$homeupcoming[$i][3].'">
			<input class="info6" type="hidden" value="'.$homeupcoming[$i][5].'">
		</div>
		<div  class="delete" style="position:absolute;left:-10px;z-index:10">
			<input class="info2" type="hidden" value="'.$homeupcoming[$i][2].'">
			<input class="info5" type="hidden" value="'.$homeupcoming[$i][4].'">';
		if($_SESSION['status']=='login')
		{
			echo '<img src="img/cross.jpg" width=50px>
						';
		} 
		echo '</div>';
		$i=$i+1;
		}
	?>
	</div>
			<div style="position:relative;float:left;width:33.3%;height:5%;color:#f2904e;"><div id="hotmore" class="more3" style="cursor:pointer;">more..</div></div><div style="position:relative;float:left;width:33.3%;height:5%;color:#f2904e"><div id="latmore" class="more3" style="cursor:pointer;">more..</div></div><div style="position:relative;float:left;width:33.3%;height:5%;color:#f2904e"><div id="upmore"class="more3" style="cursor:pointer;">more..</div></div>
	</div>
	</div>
	<div class="allpage" id="aboutpage">
	<div id="HLU">
	<div id="ABU">
		<img src="ABU/green.png" id="green">
		<img src="ABU/orenge.png" id="orenge">
		<img src="ABU/blue.png" id="blue">
		<img src="ABU/logodir.png" id="logodir">
		<img src="ABU/logodirS.png" id="logodirS">
		<img src="ABU/01.png" id="AU01" width=111px;>
		<img src="ABU/02.png" id="AU02" width=111px;>
		<img src="ABU/03.png" id="AU03" width=111px;>
		<img src="ABU/04.png" id="AU04" width=111px;>
		<img src="ABU/05.png" id="AU05" width=111px;>
		<img src="ABU/06.png" id="AU06" width=111px;>
		<img src="ABU/07.png" id="AU07" width=111px;>
		<img src="ABU/08.png" id="AU08" width=111px;>
		<div id="text8">石健宏　　ChienHung Shih<br>walking1003@hotmail.com
			目前是就讀工業設計研究所，在本團隊負責設計職務，請大家多多指教唷!!!</div>
		<div id="text3">羅俊緯　　成大企管系大四<br>長相大智若愚，自認對網路產業、科技議題有濃厚敏感度，曾擔任過學生議會副議長、WeChat品牌大使，參與過中國湖南實習。以偶像蔡依林「地才價值觀」為依歸，期望成功那天能說出:「謝謝曾經不看我的人」這種魯蛇永遠不會說的話。
		</div>
		<div id="text7">李牧宸　　成大企管系大三交換生<br>吉大聯想idea精英汇常務秘書長，One Piece中文網布丁圖編組小編，有產品推廣經驗。是擅长流程改进，注重用戶體驗的女漢紙。</div>
		<div id="text2">吳秉諺　　成大工設系二年級<br>對設計與程式語言都略懂略懂。期盼使用這個網站的大家能夠充分利用這裡的資源，讓視野更上一層樓!
		</div>
		<div id="text4">王詣賢　　成大資訊系三年級<br>來自嘉義的熱血男孩，熱愛台南的美食以及悠閒的生活。喜歡用音樂與人溝通，
		現為液態雨樂團主唱兼吉他手、Chord & Code樂團節奏吉他手。</div>
		<div id="text6">孫忠邦　　成大土木系三年級<br>我是x-perience的工程人員,對程式設計很有興趣,希望有興趣的朋友們也可以加入我們的團隊一起打拼</div>
		<div id="text1">徐詠詩　　Cissy<br>就讀香港城市大學，現為成大企管系大三學生，主修行銷管理，並曾在香港Mybb.com 擔任行銷助理，期待為世界帶來創新的意念
		</div>
		<div id="text5">？？？　　<br>尚未解鎖</div>
	</div>
	</div>
	</div>
</div>
	</div>
</div>
<div id="editpage">
		<div style="position:absolute;left:10%;top:10%;width:80%;height:80%;">
			<font style="position:absolute;top:15%;left:35%" face="微軟正黑體">活動命名(英文)</font><input id="creattitle" type="text" style="position:absolute;top:15%;left:45%">
			<font style="position:absolute;top:25%;left:35%" face="微軟正黑體">活動中文名</font><input id="creatchname" type="text" style="position:absolute;top:25%;left:45%">
			<font style="position:absolute;top:35%;left:35%" face="微軟正黑體">活動解說</font><input id="creatcontent" type="text" style="position:absolute;top:35%;left:45%">
			<font style="position:absolute;top:45%;left:35%" face="微軟正黑體">分類</font><input id="creatclassify" type="text" style="position:absolute;top:45%;left:45%">
			<font id="quickhot" style="position:absolute;top:45%;left:75%" face="微軟正黑體">hottest</font><font  id="quicklate" style="position:absolute;top:48%;left:75%" face="微軟正黑體">latest</font><font  id="quickupcoming" style="position:absolute;top:51%;left:75%" face="微軟正黑體">upcoming</font>
			<font style="position:absolute;top:55%;left:35%" face="微軟正黑體">picture</font><input id="creatfile" type="text" style="position:absolute;top:55%;left:45%">
			<input  id="creat" type="submit" value="上傳2">
		</div>
		<form id="uppicture" action="photoupload.php" method="post" enctype="multipart/form-data" style="position:absolute;top:65%;left:35%">
		上傳檔案: <input type="file" name="myFileID" size=16>
		<input  id="creat" type="submit" value="上傳">
		<input type="hidden" name="MAX_FILE_SIZE" value="40960">
		</form>

</div>

<script languge="JavaScript">
	var picture=0;
   $(document).ready(function(){
    $( "#homelogo" ).hide();
   $( "#homelogo" ).fadeIn( "slow" );
	$('.allpageknow').hide();
	$('#newknowdiv').show();
	$('#editpage').hide();
	$('.allpage').hide();
	$('#home').show();
	$('.detail').hide();
	$('#act').mouseover(function(){$('.detail').show();})
	$('.actcontain').mouseover(function(){$('.detail').show();})
	$('.actcontain').mouseout(function(){$('.detail').hide();})
	$('#ho').click(function(){$('.allpage').hide();$('#home').show();})
	$('#team').click(function(){$( '#itemiframe' ).attr('src','https://exp-maketeam.hackpad.com/');$( '#itemiframe' ).animate({ "top": "0" }, 200 );})
	$('#homelogo').click(function(){$('#loginpage').hide();$('#homepage').show();})
	$('.displaytest').click(function(){$('.allpage').hide();$('#display').show();})
	$('#edit').click(function(){$('#editpage').show();$('#homepage').hide();});
	$('#quickhot').click(function(){$('#creatclassify').val('hottest')});
	$('#aboutus').click(function(){$('.allpage').hide();$('#aboutpage').show();});
	$('#login').click(function(){window.location.assign("googlelogre.html");});
	$('.more3').click(function(){
		$.ajax({
				data:{},
				type:'GET',
				url:'hotmore.php',
				dataType:'text',
				success:function(r){
					$('#hottest').append(r);
				}
		});
		$.ajax({
				data:{},
				type:'GET',
				url:'latemore.php',
				dataType:'text',
				success:function(r){
					$('#latest').append(r);
				}
		})
		$.ajax({
				data:{},
				type:'GET',
				url:'upmore.php',
				dataType:'text',
				success:function(r){
					$('#upcoming').append(r);
				}
		})
	});
	$('#creat').click(function(){
		$.ajax({
				data:{creattitle:$('#creattitle').val(),creatfile:$('#creatfile').val(),creatcontent:$('#creatcontent').val(),creatchname:$('#creatchname').val(),creatclassify:$('#creatclassify').val()},
				type:'GET',
				url:'creat.php',
				dataType:'text',
				success:function(r){
				}
		})
	});
	$('#logout').click(function(){
		window.location.assign("logout.php");
	});
	$('.delete').click(function(){
		$.ajax({
				data:{deletetitle:$('.info2',this).val(),deleteclassify:$('.info5',this).val()},
				type:'GET',
				url:'delete.php',
				dataType:'text',
				success:function(r){alert(r);
				}
		})
	})
	$('#quicklate').click(function(){$('#creatclassify').val('latest')});
	$('#quickupcoming').click(function(){$('#creatclassify').val('upcoming')});
	$(document).on('click','.img1',function(){$( '#itemiframe' ).attr('src',$('.info6',this).val());$( '#itemiframe' ).animate({ "top": "0" }, 200 );});//window.location.assign("HOMERcv.php?item="+$('.info2',this).val()+'&url=NULL');$('.allpage').hide();$('#contentpage').show();$('#mainimg').attr('src',$('.info0',this).val());
	$(document).on('click','#iframehidden',function(){$( '#itemiframe' ).animate({ "top": "110%" }, 200 );});
	$('#newknow').click(function(){$('.newclick').css('color','white');$('#newknow').css('color','yellow');$('.allpageknow').hide();$('#newknowdiv').show();})
	$('#hotknow').click(function(){$('.newclick').css('color','white');$('#hotknow').css('color','yellow');$('.allpageknow').hide();$('#hotknowdiv').show();})
	$('#individualknow').click(function(){$('.newclick').css('color','white');$('#individualknow').css('color','yellow');$('.allpageknow').hide();$('#individualknowdiv').show();})
    $('#controlimg5').attr('src','img/arrow-after.png');
	setTimeout("change()", 6000);

	$('#controlimg1').mouseover(function(){ $('.showing').stop().animate({ opacity: 0 }, 'fast');$('#showimg1').stop().animate({ opacity: 1 }, 'slow')});
	$('#controlimg2').mouseover(function(){ $('.showing').stop().animate({ opacity: 0 }, 'fast');$('#showimg2').stop().animate({ opacity: 1 }, 'slow')});
	$('#controlimg3').mouseover(function(){ $('.showing').stop().animate({ opacity: 0 }, 'fast');$('#showimg3').stop().animate({ opacity: 1 }, 'slow')});
	$('#controlimg4').mouseover(function(){ $('.showing').stop().animate({ opacity: 0 }, 'fast');$('#showimg4').stop().animate({ opacity: 1 }, 'slow')});
	$('#controlimg5').mouseover(function(){ $('.showing').stop().animate({ opacity: 0 }, 'fast');$('#showimg5').stop().animate({ opacity: 1 }, 'slow')});
	$('.control').mouseover(function(){$(this).attr('src','img/arrow-after.png');})
	$('.control').mouseout(function(){$(this).attr('src','img/arrow.png');})
	$("#AU01").hover(

function(){$("#AU01").attr( "src" , "ABU/01-1.png"  )
$("#logodir").transition({ rotate: '-40deg' });
$("#logodirS").transition({ rotate: '-40deg' });
$('#green').stop().animate({opacity:"100"},1000);
$('#text1').stop().animate({opacity:"100"},1000);
},
function(){$("#AU01").attr( "src" , "ABU/01.png"  )
$('#green').stop().animate({opacity:"0"},750);
$('#text1').stop().animate({opacity:"0"},500);}			
);

$("#AU02").hover(

function(){
$("#AU02").attr( "src" , "ABU/02-1.png"  )
$("#logodir").transition({ rotate: '225deg' });
$("#logodirS").transition({ rotate: '225deg' });
$('#blue').stop().animate({opacity:"100"},1000);
$('#text2').stop().animate({opacity:"100"},1000);
},


function(){$("#AU02").attr( "src" , "ABU/02.png"  )
$('#blue').stop().animate({opacity:"0"},750);
$('#text2').stop().animate({opacity:"0"},500);}
);

$("#AU03").hover(
function(){$("#AU03").attr( "src" , "ABU/03-1.png"  )
$("#logodir").transition({ rotate: '45deg' });
$("#logodirS").transition({ rotate: '45deg' });
$('#green').stop().animate({opacity:"100"},1000);
$('#text3').stop().animate({opacity:"100"},1000);
},
function(){$("#AU03").attr( "src" , "ABU/03.png"  )
$('#green').stop().animate({opacity:"0"},750);
$('#text3').stop().animate({opacity:"00"},500);}
);

$("#AU04").hover(
function(){$("#AU04").attr( "src" , "ABU/04-1.png"  )
$("#logodir").transition({ rotate: '140deg' });
$("#logodirS").transition({ rotate: '140deg' });
$('#blue').stop().animate({opacity:"100"},1000);
$('#text4').stop().animate({opacity:"100"},1000);
},
function(){$("#AU04").attr( "src" , "ABU/04.png"  )
$('#blue').stop().animate({opacity:"0"},750);
$('#text4').stop().animate({opacity:"0"},500);}
);

$("#AU05").hover(
function(){$("#AU05").attr( "src" , "ABU/05-1.png"  )
$("#logodir").transition({ rotate: '95deg' });
$("#logodirS").transition({ rotate: '95deg' });
$('#green').stop().animate({opacity:"100"},1000);
$('#text5').stop().animate({opacity:"100"},1000);
},
function(){$("#AU05").attr( "src" , "ABU/05.png"  )
$('#green').stop().animate({opacity:"0"},750);
$('#text5').stop().animate({opacity:"0"},500);}
);

$("#AU06").hover(
function(){$("#AU06").attr( "src" , "ABU/06-1.png"  )
$("#logodir").transition({ rotate: '190deg' });
$("#logodirS").transition({ rotate: '190deg' });
$('#blue').stop().animate({opacity:"100"},1000);
$('#text6').stop().animate({opacity:"100"},1000);
},
function(){$("#AU06").attr( "src" , "ABU/06.png"  )
$('#blue').stop().animate({opacity:"0"},750);
$('#text6').stop().animate({opacity:"0"},500);}
);

$("#AU07").hover(
function(){$("#AU07").attr( "src" , "ABU/07-1.png"  )
$("#logodir").transition({ rotate: '10deg' });
$("#logodirS").transition({ rotate: '10deg' });
$('#green').stop().animate({opacity:"100"},1000);
$('#text7').stop().animate({opacity:"100"},1000);
},
function(){$("#AU07").attr( "src" , "ABU/07.png"  )
$('#green').stop().animate({opacity:"0"},750);
$('#text7').stop().animate({opacity:"0"},500);}
);


$("#AU08").hover(
function(){$("#AU08").attr( "src" , "ABU/08-1.png"  )
$("#logodir").transition({ rotate: '275deg' });
$("#logodirS").transition({ rotate: '275deg' });
$('#orenge').stop().animate({opacity:"100"},1000);
$('#text8').stop().animate({opacity:"100"},1000);

},
function(){$("#AU08").attr( "src" , "ABU/08.png"  )
$('#orenge').stop().animate({opacity:"0"},750);
$('#text8').stop().animate({opacity:"0"},500);}
);
	 
		$(document).on('mouseenter','.img1',
			function() {
			$( '.im1',this ).stop().animate({ "bottom": "3px" }, "slow" );
			}
		);
		$(document).on('mouseleave','.img1',
			function() {
			$( '.im1',this ).stop().animate({ "bottom": "-373px" }, "slow" );
			}
		);
	   $('#img2').hover(
	  function(){
           $('#im2').stop().animate({
			   
            bottom:'-220px'},1000);},
	function(){$('#im2').stop().animate({
               bottom:'-310px'
            },1000);	});

		$('#img2').hoverIntent({
			interval:700,
			
			over:function(){ $('#im2').animate({bottom:'-20px' },1000);},
		    timeout:500,
			
     		out:function(){$('#im2').animate({bottom:'-420px'},1000);}
		});

  $('#img3').hover(
	  function(){
           $('#im3').stop().animate({
			   
            bottom:'-220px'},1000);},
	function(){$('#im3').stop().animate({
               bottom:'-310px'
            },1000);	});
$('#img3').hoverIntent({
			interval:700,
			
			over:function(){ $('#im3').animate({bottom:'-20px' },1000);},
		    timeout:500,
			
     		out:function(){$('#im3').animate({bottom:'-310px'},1000);}
		});

 $('#img4').hover(
	  function(){
           $('#im3').stop().animate({
			   
            bottom:'-220px'},1000);},
	function(){$('#im4').stop().animate({
               bottom:'-310px'
            },1000);	});
$('#img4').hoverIntent({
			interval:700,
			
			over:function(){ $('#im4').animate({bottom:'-20px' },1000);},
		    timeout:500,
			
     		out:function(){$('#im4').animate({bottom:'-310px'},1000);}
		});


 $('#img5').hover(
	  function(){
           $('#im5').stop().animate({
			   
            bottom:'-220px'},1000);},
	function(){$('#im5').stop().animate({
               bottom:'-310px'
            },1000);	});
$('#img5').hoverIntent({
			interval:700,
			
			over:function(){ $('#im5').animate({bottom:'-20px' },1000);},
		    timeout:500,
			
     		out:function(){$('#im5').animate({bottom:'-310px'},1000);}
		});
 $('#img6').hover(
	  function(){
           $('#im6').stop().animate({
			   
            bottom:'-220px'},1000);},
	function(){$('#im6').stop().animate({
               bottom:'-310px'
            },1000);	});
$('#img6').hoverIntent({
			interval:700,
			
			over:function(){ $('#im6').animate({bottom:'-20px' },1000);},
		    timeout:500,
			
     		out:function(){$('#im6').animate({bottom:'-310px'},1000);}
		});

});
function change()
	{
		$('.control').attr('src','img/arrow.png');
		if(picture==0)
		{$('.showing').stop().animate({ opacity: 0 }, 'slow');$('#showimg1').stop().animate({ opacity: 1 }, 'slow');$('#controlimg1').attr('src','img/arrow-after.png');}
		else if(picture==1)
		{ $('.showing').stop().animate({ opacity: 0 }, 'slow');$('#showimg2').stop().animate({ opacity: 1 }, 'slow');$('#controlimg2').attr('src','img/arrow-after.png');}
		else if(picture==2)
		{ $('.showing').stop().animate({ opacity: 0 }, 'slow');$('#showimg3').stop().animate({ opacity: 1 }, 'slow');$('#controlimg3').attr('src','img/arrow-after.png');}
		else if(picture==3)
		{ $('.showing').stop().animate({ opacity: 0 }, 'slow');$('#showimg4').stop().animate({ opacity: 1 }, 'slow');$('#controlimg4').attr('src','img/arrow-after.png');}
		else if(picture==4)
		{ $('.showing').stop().animate({ opacity: 0 }, 'slow');$('#showimg5').stop().animate({ opacity: 1 }, 'slow');$('#controlimg5').attr('src','img/arrow-after.png');}
		picture=picture+1;
		if(picture==5){picture=0;}
		setTimeout("change()", 6000);
		return;
	}
</script>
</body>

</html>
