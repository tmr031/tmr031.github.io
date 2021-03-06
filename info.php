<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet"  type="text/css" href="css/style.css">
  <link rel="stylesheet"  type="text/css" href="css/untitled4.css">

  <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
 </head>
 <body>

<div id ="firstSec">
 <div style="width:100%;background-color:#0A2239;height:29px;display:table;">

	<div style="height:24px;display:inline-block;float:right;color:#fff;font-weight:bold;font-size:12px;
	margin-top:2px;margin-right:1px;"><p style="padding:5px;">中國語 ></p></div>
	<div style="height:24px;display:inline-block;float:right;color:#fff;font-weight:bold;font-size:12px;
	margin-top:2px;"><p style="padding:5px;">English ></p></div>

  </div>
<header style="z-index:9999">
     <nav id='cssmenu'>
	 <div id='inquire'>
		 <img src='call.png' style ="height:30px;width:30px;top:0;bottom:0;margin:auto;">
		 </img>
	    </div>
     <div class="logo"><a href="index.html"><img src="logo.png" style="width:auto;height:30px;"></a></div>
     <div id="head-mobile"></div>
     <div class="button"></div>
         <ul>
		 <li><a href='overview.html'>스카이시티타워호텔&레지던스</a>
			<ul>
                <li><a href='overview.html#overviewbox'>사업개요</a></li>
                <li><a href='overview.html#sglogos'>시공사 소개</a></li>
                <li><a href='overview.html#map'>오시는 길</a></li>

            </ul>

		</li>

		<li><a href='design.html'>디자인</a></li>
		<li><a href='guestroom.html'>객실정보</a>
			<ul>
			 <li><a href='http://www.berkshireassociates.com/besource'>스탠다드 스위트</a></li>
			 <li><a href='http://www.berkshireassociates.com/berkshirepresenters'>프리미어 스위트</a></li>
			 <li><a href='http://www.berkshireassociates.com/berkshirepresenters'>객실 공용부</a></li>

			</ul>
        </li>
		<li><a href='facility.html'>시설정보</a></li>
		<li><a href='info.html'>분양정보</a></li>
        <li><a href='request.html'>견적/분양신청</a>
			<ul>
				<li><a href='http://www.berkshireassociates.com/about-us#founder'>견적문의</a></li>
				<li><a href='http://www.berkshireassociates.com/about-us#our-team'>분양신청</a></li>

            </ul>
		</li>
		<li><a href='https://works.baiworks.com/default.aspx'>고객센터</a></li>







         </ul>
     </nav>
</header>



	<div id = "overviewimg" class ="headerBox" style="width:100%; height:400px; background-image:url('designheader.jpg');background-size: cover;">
		<div class = "headertxt"  style="margin-top:20px;" data-anijs="if: scroll, on:window, do: fadeInLeft animated, after:$fireOnce, before:scrollReveal">
			<p style = "font-family: 'Andale Mono', Georgia, serif;color:#fff;text-shadow: 2px 2px #0E1112;letter-spacing: 4px;font-size:2.5em;"> 분양정보 </p>
			<hr style = "margin-top:40px;margin-bottom:40px;margin-left:40%;" color="#ffffff" width="20%" align="center">
			<p id = "header"> Availability </p>
		</div>
	</div>
</div>

<form action="#" th:action="@{/articles}"
      th:object="${article}"
      method="post">
    <p>title: <input type="text" th:field="*{title}" /></p>
    <p>content:
        <textarea th:field="*{content}"></textarea>
    </p>

    <input type="submit" value="submit" />
</form>

<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 

<table class="miyazaki" id = "F22" style = "margin-top:40px">

<thead id ="tablehead">

		<tr>
			<th Colspan = "2" >구분</th>
			<th Colspan = "5"  style = "background-color:#173277">산뷰</th>
			<th Colspan = "3" style = "background-color:#4E44C2">바다뷰</th>
			<th Colspan = "5"  style = "background-color:#1E1494">도심뷰</th>
		</tr>
	</thead>


	<tr>
		  <th Rowspan = "2">22층</th>
				<th>호수</th>
				<td>2202</td>
				<td>2203</td>
				<td>2204</td>
				<td>2205</td>
				<td>2206</td>
				<td>2207</td>
				<td>2208</td>
				<td>2209</td>
			  <td>2210</td>
			  <td>2211</td>
			  <td>2212</td>
			  <td>2213</td>
			  <td>2214</td>


		</tr>
		<tr>
			<th>타입</th>
			<td>RH</td>
			<td>RG</td>
			<td>RG</td>
			<td>RG</td>
      <td>RG</td>
      <td>RG</td>
      <td>RF</td>
      <td>RF</td>
      <td>RG</td>
      <td>RG</td>
      <td>RH</td>
      <td>RC</td>
      <td>RD</td>
		</tr>

</table>



<div id="openPopupOne" class = "btn trigger buttonbox" style = "margin-top:40px;width:80%;margin-left:10%;">

</div>

<div class="popupbox">

   <div class="overlay"></div>
   <div class="popup one"  onload='doSomething()'>
      <button id="closePopUpOne" style ="position:absolute;top:0;right:0;border:none;height:40px;width:40px;font-size:30px;background-color: rgba(255,0,255,0);color:#000;cursor:pointer">x</button>

   </div>
</div>
	<div id="btns">
	Close
	</div>

<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<div id ="summary" style="padding-top:30px">


		</div>
		<ul class="cd-buttons">
			<li><a href="#0" style ="position:absolute;
  left:0; width: 50%; margin-top:40px;
  bottom:0;">견적문의</a></li>
			<li><a href="#0" style ="position:absolute;
  left:50%; width: 50%;margin-top:40px;
  bottom:0;">분양신청</a></li>
		</ul>
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->








<footer style="display:inline-block; width:100%; background-color:#0A2239;height:auto;">
	<img src = "logo.png"></img>
	<p>
	Contact<br>

	p : (02) 4040 5943<br>
	m : 010 6353 8935<br>
	e : info@skycitytower.com





	</p>

	<p>
	Address<br>

	인천광역시 중구 중산동 1952-3<br>
	<br>
	<button style ="color:#fff;text-decoration:none;border:1px solid #fff;padding:0px 5px;background-color:#0A2239;">네이버 지도 보기</button>





	</p>


<div style="left:0;right:0;margin-left:auto;margin-right:auto;text-align: center;">
	<!-- Add font awesome icons -->
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-google"></a>
	<a href="#" class="fa fa-instagram"></a>
	</div>
	<p style="font-size:90%;margin-left:10%;text-align:center;margin-top:30px;width:80%;color:#fff;line-height:160%;padding-bottom:20px;border-top:1px solid #bcbcbc;">

	시행개발 : 브릿지임팩(주)
	책임준공 : CJ건설<br>
	우리은행 110-04-110769  예금주 : 무궁화신탁(주)<br>
	분양대행사 : ㈜더감 |
	온라인대행 : (주)모던하이텍 | 129-81-36924 | 대표 : 김도현




	</p>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://anijs.github.io/lib/anijs/anijs-min.js"></script>

  <!-- Include to use $addClass, $toggleClass or $removeClass -->
<script src="http://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>
<script src="http://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>


<script>

(function($) {
$.fn.menumaker = function(options) {
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) {
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);

$(document).ready(function() {
			// grab the initial top offset of the navigation
		   	var stickyNavTop = $('header').offset().top;

		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top

			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) {
			        $('header').addClass('sticky');
			    } else {
			        $('header').removeClass('sticky');
			    }
			};

			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});
		});


</script>

<script>

function doSomething() {
		$(".popuptb").each(function() {
			var $this = $(this);
			var newrows = [];
			$this.find("tr").each(function(){
				var i = 0;
				$(this).find("td").each(function(){
					i++;
					if(newrows[i] === undefined) { newrows[i] = $("<tr></tr>"); }
					newrows[i].append($(this));
				});
			});
			$this.find("tr").remove();
			$.each(newrows, function(){
				$this.append(this);
			});
		});

		return false;
}

function createCallback( i ){
  return function(){
	$(".popup table").remove();
	$(".popup #floorhead").remove();$(".popup .view").remove();
	$('.popup').append("<div id ='floorhead'>" + i + "층</div>");
	$('.popup').append("<div class='view' style ='background-color:#173277'><b>산뷰:</b> " + i + "02호 ~ " + i + "06호</div>");
	$('.popup').append("<div class ='view' style='background-color:#4E44C2'><b>바다뷰:</b> " + i + "07호 ~ " + i + "09호</div>");
	$('.popup').append("<div class ='view' style='background-color:#1E1494;'><b>도심뷰:</b> " + i + "10호 ~ " + i + "14호</div>");
    $("#F" + i).clone().css('margin-top','20px','margin-bottom','20px').attr('class','popuptb').appendTo('.popup');
	doSomething();
	$(".popuptb").prepend("<tr><td>호수</td><td>타입</td></tr>");

	var $mainTable = $(".popuptb");
    var splitBy = 7;
    var rows = $mainTable.find ( "tr" ).slice( splitBy );
    var $secondTable = $(".popuptb").parent().append("<table id='secondTable' class='popuptb'><tbody></tbody></table>");
    $secondTable.find("tbody").append(rows);
    $mainTable.find ( "tr" ).slice( splitBy ).remove();
	$('.popup').append("<ul id='popupbtns' style='position:fixed;width:100%;bottom:0;list-style:none;padding:0px;margin:0;'><li><a href='#0' style ='background-color:#006699;display:inline-block;float:left; width: 50%;text-decoration:none;padding-top:20px;padding-bottom:20px'>견적문의</a></li><li><a href='#0' style ='background-color:#666699;width: 50%;display:inline-block;text-decoration:none;padding-top:20px;padding-bottom:20px'>분양신청</a></li></ul>");

  }
}
$(window).resize(function () {
     var viewportWidth = $(window).width();

	 var thead = $(".miyazaki").find("thead");
        if (viewportWidth > 600) {
			$(".popup").hide();
			$(".overlay").hide();

  }
});


$( document ).ready(function() {




    'use strict';
    var openPopupOne  = $('#openPopupOne'),
        overlay     = $('.overlay'),
        popup       = $('.popup'),
        closePopUpOne = $('#closePopUpOne');


   // main style action
		overlay.on('click', function () {
			$(this).fadeOut();
			popup.removeClass('oneOpen twoOpen threeOpen fourOpen fiveOpen').delay(700).promise().done(function () {
				$(this).hide();

			});
		});


    // first style action
    openPopupOne.on('click', function () {
        overlay.fadeIn();
        popup.show(0, function () {
            $(this).toggleClass('oneOpen');

        });
    });

    closePopUpOne.on('click', function () {
        overlay.fadeOut();
        popup.toggleClass('oneOpen').delay(700).promise().done(function () {
            $(this).hide();
        });
    });


	for(var i = 22; i> 5; i--) {
		$(".buttonbox").append("<button class='btn-1' id ='"+ i + "'><a class='btn trigger' href='javascript:;'><span>" + i + "층</span></a></button>");

		 $('#' + i).click( createCallback( i ) );
	}

	for(var i=6; i<22; i++){
	$("#F22").after("<table class='miyazaki' id ='F" + i + "'><tr><th Rowspan = '2'>" + i +"층</th><th>호수</th><td>" +i+"02</td><td>"+i+"03</td><td>"+i+"04</td><td>"+i+"05</td><td>"+i+"06</td><td>"+i+"07</td><td>"+i+"08</td><td>"+i+"09</td><td>"+i+"10</td><td>"+i+"11</td><td>"+i+"12</td><td>"+i+"13</td><td>"+i+"14</td></tr><tr><th>타입</th><td>RH</td><td>RG</td><td>RG</td><td>RG</td><td>RG</td><td>RG</td><td>RF</td><td>RF</td><td>RG</td><td>RG</td><td>RH</td><td>RC</td><td>RD</td></tr></table>");
	}

	$('td').css('cursor','pointer');
	$('td').attr('class','linkable');
	$('.linkable').click(function () {
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
		var roomN = $(this).text();
		$('.cd-popup-container #summary').empty();
		$('.cd-popup-container #summary').append('<p>호수: ' + roomN + '</p><p>도심뷰</p>');

	});

	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});

});





</script>



 </body>
</html>
