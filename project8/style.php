<style>
/*
<br>@font-face {
<br>	font-family: "KacstBook";
<br>	src: url("images_saved/KacstBook.ttf");  
<br>}
<br>@font-face {
<br>	font-family: "BCompset";
<br>	src: url("images_saved/BCompset.ttf"); 
<br>}
<br>
<br>@font-face {
<br>	font-family: "A_Nefel_Adeti";
<br>	src: url("images_saved/A_Nefel_Adeti.ttf"); 
<br>}
<br>
<br>@font-face {
<br>	font-family: "A_Nefel_Sereke";
<br>	src: url("images_saved/A_Nefel_Sereke.ttf"); 
<br>}
<br>
<br>@font-face {
<br>  font-family: 'Source Sans Pro';
<br>  font-style: normal;
<br>  font-weight: 400;
<br>  src: local('Source Sans Pro'), local('SourceSansPro-Regular'), url(images_saved/ODelI1aHBYDBqgeIAH2zlBBHWFfxJXS04xYOz0jw624.woff) format('woff');
<br>}
<br>*/
<br>
<br>@font-face {
<br>	font-family: "sa_bold";
<br>	src: url("images_saved/GE_SS_Two_Bold_0.otf"); 
<br>}
<br>@font-face {
<br>	font-family: "sa_light";
<br>	src: url("images_saved/GE_SS_Twoo_Light_0.otf");  
<br>}
<br>@font-face {
<br>	font-family: "sa_medium";
<br>	src: url("images_saved/GE_SS_Two_Medium.otf"); 
<br>}
<br>
<br>/*
<br>@font-face {
<br>	font-family: "SSPR";
<br>	src: url("images_saved/SourceSansPro-Regular.otf");
<br>}
<br>
<br>@font-face {
<br>	font-family: "SSPB";
<br>	src: url("images_saved/SourceSansPro-Semibold.otf"); 
<br>}
<br>
<br>@font-face {
<br>	font-family: "SSPVB";
<br>	src: url("images_saved/SourceSansPro-Bold.otf"); 
<br>}
<br>*/
<br>
<br>body 
<br>{
<br>	/*   'Traditional Arabic'  	*/
<br>	font-family: sa_medium;
<br>	background-color:#050627;
<br>	background-image:url(images_saved/page_bg_gradient.jpg);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	text-align:center;
<br>	margin:0;
<br>	padding:0;
<br>}
<br>
<br>.clearance
<br>{
<br>	clear:both;
<br>}
<br>
<br>.fourppxpadding
<br>{
<br>	padding:4px;
<br>}
<br>
<br>
<br>.absoluteads
<br>{
<br>	position:absolute;
<br>}
<br>
<br>#adfloatsleft
<br>{
<br>
<br>}
<br>
<br>#adfloatsright
<br>{
<br>
<br>}
<br>
<br>#sitearea
<br>{
<br>	direction:rtl;
<br>	width:990px;
<br>	max-width:990px;
<br>	min-width:990px;
<br>	margin:0 auto 0 auto;
<br>	/*This one tells us where the banner that is above the main area is aligned*/
<br>}
<br>
<br>/*The DIV that can be pushed down using a banner above the whole design !*/
<br>/*The one with the background color*/
<br>#siteareainner
<br>{
<br>	min-height:850px;
<br>	min-width:990px;
<br>	text-align:right;
<br>	background-color:#e5e7e9;
<br>	background-image:url(images_saved/page_area_gradient.jpg);
<br>	background-position:top;
<br>	background-repeat:repeat-x;
<br>}
<br>
<br>
<br>
<br>/*This div is only used for the advertisement that is placed between sitearea and siteareainner*/
<br>#topmost_ban_leadboard
<br>{
<br>	padding:6px;
<br>	padding-left:0;
<br>	text-align:left;
<br>	float:left;
<br>}
<br>
<br>#logoarea_ban_leadboard
<br>{
<br>	padding:0;
<br>	padding-left:5px;
<br>	float:left;
<br>}
<br>
<br>/*The string at the top that tells us what date this issue belongs to, issueid date and hijri*/
<br>#issue_id_string
<br>{
<br>	padding:0;
<br>	padding-left:5px;
<br>	padding-top:5px;
<br>	padding-bottom:2px;
<br>	float:left;
<br>	font-size:12px;
<br>	font-weight:normal;
<br>	color:#231f20;
<br>}
<br>
<br>#boardandcheif
<br>{
<br>	padding:0;
<br>	padding-left:10px;
<br>	padding-top:8px;
<br>	padding-bottom:6px;
<br>	float:left;
<br>	font-size:12px;
<br>	font-weight:normal;
<br>	color:#117fae;
<br>}
<br>
<br>/*The logo at the top floats to the right, a stretched out pixel makes this thing silky smooth*/
<br>
<br>#logobg
<br>{
<br>	/*TO MAKE THE LOGO LARGER, THE IMAGE WAS EXPANDED FROM 200 * 91 TO 232 * 104*/
<br>	float:right;
<br>	background-image:url(images_saved/addustour_logo.png);
<br>	background-repeat:no-repeat;
<br>	background-position:bottom left;
<br>	text-decoration:none;	
<br>	display:block;
<br>	width:244px;/*ORIGINALLY 200 BEFORE ATTAL REQUEST*/
<br>	height:107px;/*ORIGINALLY 91 BEFORE ATTAL REQUEST*/
<br>	padding:0;
<br>	padding-top:15px;
<br>	padding-right:7px;
<br>	margin:0;
<br>}
<br>
<br>#logoslogan
<br>{
<br>	font-family:Verdana, Geneva, sans-serif;
<br>	letter-spacing:0;
<br>	float:right;
<br>	text-align:right;
<br>	padding-top:8px;
<br>	padding-right:8px;
<br>	font-size:10px;
<br>	font-weight:500;
<br>	width:300px;
<br>}
<br>
<br>#menu_area
<br>{
<br>	float:right;
<br>	padding:0;
<br>	letter-spacing:-1px;
<br>	font-size:14px;
<br>	margin:0;
<br>	margin-bottom:17px;
<br>	width:989px;
<br>	
<br>	height:43px;
<br>	max-height: 999999px;
<br>	
<br>	background-image:url(images_saved/menu_bg.jpg);
<br>	background-repeat:repeat-x;
<br>}
<br>
<br>#menu_area a
<br>{
<br>	text-decoration:none;
<br>	color:#000;
<br>}
<br>
<br>.menu_link
<br>{
<br>	display:block;
<br>	float:right;
<br>	padding-left:10px;
<br>	padding-right:10px;
<br>	padding-top:10px;
<br>	height:33px;
<br>	border-width:0;
<br>	border-left-width:3px;
<br>	border-style:solid;
<br>	border-color:#d3d6d6;
<br>}
<br>
<br>#menuflag
<br>{
<br>	float:left;
<br>	width:47px;
<br>	height:22px;
<br>	margin-top:0px;
<br>	margin-left:0px;
<br>	background-image:url(images_saved/jordanian-flag.png);
<br>	background-repeat:no-repeat;
<br>	background-position:center;
<br>}
<br>
<br>#tickerarea
<br>{
<br>	padding:0;
<br>	padding-top:10px;
<br>	padding-right:15px;
<br>	width:685px;
<br>	float:right;
<br>	height:32px;
<br>	min-height:32px;
<br>	font-weight:600;
<br>	
<br>}
<br>
<br>#tickerarea a
<br>{
<br>	text-decoration:none;
<br>	color:#00527c;
<br>}
<br>
<br>
<br>#facebook_area
<br>{
<br>	padding:0;
<br>	padding-top:5px;
<br>	padding-left:15px;
<br>	width:275px;
<br>	float:left;
<br>	min-height:37px;
<br>	direction:ltr;
<br>	text-align:left;
<br>}
<br>
<br>#page_main_contentarea
<br>{
<br>	width:700px;
<br>	min-height:450px;
<br>	float:right;
<br>}
<br>
<br>
<br>@keyframes blink 
<br>{
<br>    0% {
<br>        opacity: 1;
<br>    }
<br>    50% {
<br>        opacity: 0;
<br>    }
<br>    100% {
<br>        opacity: 1;
<br>    }
<br>}
<br>
<br>@-webkit-keyframes blink /* Safari and Chrome */
<br>{
<br>    0% {
<br>        opacity: 1;
<br>    }
<br>    50% {
<br>        opacity: 0;
<br>    }
<br>    100% {
<br>        opacity: 1;
<br>    }
<br>}
<br>
<br>
<br>#emptybreaking
<br>{
<br>	float:right;
<br>	width:700px;
<br>	height:60px;
<br>	color:#C6393A;
<br>	font-weight:600;
<br>	font-size:16px;
<br>}
<br>
<br>#breaking_news
<br>{
<br>	float:right;
<br>	width:690px;
<br>	height:60px;
<br>	padding-left:10px;
<br>	color:#C6393A;
<br>	font-weight:600;
<br>	font-size:16px;
<br>	background-image:url(images_saved/breaking_bg2.jpg);
<br>	background-repeat:no-repeat;
<br>}
<br>
<br>#breaking_news a
<br>{
<br>	color:#C6393A;
<br>	text-decoration:none;
<br>}
<br>
<br>#breaking_news img
<br>{
<br>	padding:5px;
<br>	padding-left:15px;
<br>	animation: blink 1s;
<br>    animation-iteration-count: infinite;
<br>	-webkit-animation: blink 1s;
<br>	-webkit-animation-iteration-count: infinite;
<br>}
<br>
<br>#breaking_news_middles
<br>{
<br>    display: table-cell;
<br>	height:58px;
<br>	padding:0;
<br>	padding-top:2px;
<br>	margin:0;
<br>    vertical-align: middle;
<br>}
<br>
<br>#search_area
<br>{
<br>	float:left;
<br>	width:290px;
<br>	background-color:#d4d5d7;
<br>	padding:0;
<br>	padding-top:2px;
<br>	height:58px;
<br>	direction:ltr;
<br>	text-align:center;
<br>	font-size:18px;
<br>}
<br>
<br>#innersearcharea
<br>{
<br>	background-color:#FAFAFA;
<br>	width:250px;
<br>	margin:0 auto 0 auto;
<br>	vertical-align:bottom;
<br>}
<br>
<br>#search_area_textbox
<br>{
<br>	background-color:#FAFAFA;
<br>	margin-bottom:3px;
<br>	direction:rtl;
<br>}
<br>/*------------------------------------------------------------------------------------------------
<br>The side area/*
<br>*/
<br>
<br>#inner_page_side_unifier
<br>{
<br>	width:288px;
<br>	float:left;
<br>	background-color:#1F2426;
<br>}
<br>
<br>
<br>#page_side_area_top
<br>{
<br>	padding:0;
<br>	padding-right:0;
<br>	padding-top:0;
<br>	margin:0;
<br>	width:268px;
<br>	min-height:520px;
<br>	border-color:#1f2426;
<br>	border-style:solid;
<br>	border-width:10px;
<br>	float:left;
<br>	vertical-align:top;
<br>}
<br>
<br>#page_side_area_top_dir
<br>{
<br>	padding:0;
<br>	padding-right:0;
<br>	padding-top:0;
<br>	margin:0;
<br>	width:268px;
<br>	border-color:#1f2426;
<br>	border-style:solid;
<br>	border-width:10px;
<br>	float:left;
<br>	vertical-align:top;
<br>}
<br>
<br>
<br>/*The top side left, only one type of div box*/
<br>
<br>#top_king_and_queen
<br>{
<br>	font-family:Verdana, Geneva, sans-serif;
<br>	padding:0;
<br>	width:268px;
<br>	background-image:url(images_saved/king_and_queen.jpg);
<br>	background-repeat:no-repeat;
<br>	height:100px;
<br>	font-size:12px;
<br>	min-height:110px;
<br>	background-color:#FFF;
<br>	border-width:0;
<br>	border-bottom-width:3px;
<br>	border-style:solid;
<br>	border-color:#1F2426;
<br>}
<br>
<br>#top_king_and_queen a
<br>{
<br>	text-decoration:none;
<br>	color:#333;
<br>}
<br>
<br>
<br>#kings_website
<br>{
<br>	padding:0;
<br>	padding-right:5px;
<br>	margin:0;
<br>	padding-top:74px;
<br>	float:right;
<br>}
<br>
<br>#queens_website
<br>{
<br>	padding:0;
<br>	padding-left:3px;
<br>	margin:0;
<br>	padding-top:74px;
<br>	float:left;
<br>}
<br>
<br>#letter_from_the_king
<br>{
<br>	padding:0;
<br>	padding-top:92px;
<br>	text-align:center;
<br>}
<br>/*This ad is 250 * 250*/
<br>#upper_square_advertisement_area
<br>{
<br>	width:250px;
<br>	height:250px;
<br>	background-color:#252525;
<br>	background-image:url(images_saved/ad_background_image.jpg);
<br>	background-repeat:no-repeat;
<br>	padding:9px;
<br>	margin:0;
<br>	border-width:0;
<br>	border-bottom-width:3px;
<br>	border-style:solid;
<br>	border-color:#1F2426;
<br>}
<br>
<br>#inner_square_ad
<br>{
<br>	background-color:#1F2426;
<br>	padding:0;
<br>	margin:0;
<br>	width:250px;
<br>	height:250px;
<br>}
<br>
<br>#addustoursoppinion
<br>{
<br>	background-color:#FFF;
<br>	width:178px;
<br>	height:75px;
<br>	padding:0;
<br>	padding-right:90px;
<br>
<br>	margin:0;
<br>	/*
<br>	background-image:url(images_saved/dstrs_opnin.jpg); 
<br>	background-position:right center;
<br>	background-repeat:no-repeat;	
<br>	*/
<br>	text-align:right;
<br>	
<br>	font-weight:600;
<br>	font-size:16px;
<br>	letter-spacing:-1px;
<br>	
<br>	border-width:0;
<br>	border-bottom-width:3px;
<br>	border-style:solid;
<br>	border-color:#1F2426;
<br>}
<br>
<br>#addustoursoppinion a
<br>{
<br>	text-decoration:none;
<br>	color:#231f20;
<br>}
<br>
<br>#addustoursoppinion_middles
<br>{ 
<br>    display: table-cell;
<br>	height:69px;
<br>	padding:0;
<br>	padding-top:6px;
<br>	padding-left:2px;
<br>	margin:0;
<br>    vertical-align: middle;
<br>}
<br>
<br>#full_ed_pdf
<br>{
<br>	display:block;
<br>	background-color:#f8f8f8;
<br>	width:268px;
<br>	height:63px;
<br>	background-image:url(images_saved/pdf_bg.jpg);
<br>	background-repeat:no-repeat;
<br>	text-decoration:none;
<br>}
<br>
<br>#extra_banner
<br>{
<br>	padding:0;
<br>	padding-top:4px;
<br>	padding-bottom:1px;
<br>	padding-right:5px;
<br>	padding-left:15px;
<br>	margin:0;
<br>	
<br>	/*
<br>	padding-right:130px;
<br>	padding-left:130px;
<br>	width:730px;
<br>	background-color:#1F2426;*/
<br>}
<br>
<br>/*Now below our extra banner, we have 2 sides as well, one is 700 and the other is 268 (once you subtract the borders of one of the guys). 990 is the whole thing*/
<br>/*The lower 2 boxes have to be absolutly identical (size wise) to the counterparts above the banner so that we can stuff the same stuff over and over again*/
<br>
<br>#page_main_contentarea_bot
<br>{
<br>	width:700px;
<br>	float:right;
<br>}
<br>
<br>#page_main_contentarea_bot_inner
<br>{
<br>	font-family:'arabic transparent', Verdana, Geneva, sans-serif;
<br>	font-size:18px;
<br>	width:660px;
<br>	float:right;
<br>	padding:0;
<br>	padding-right:20px;
<br>	padding-left:20px;
<br>	padding-top:10px;
<br>}
<br>
<br>#page_side_area_bot
<br>{
<br>	padding:10px;
<br>	margin:0;
<br>	width:268px;
<br>	/* BORDER IS REPLACED WITH PADDING
<br>	border-color:#1f2426;
<br>	border-style:solid;
<br>	border-width:10px;
<br>	*/
<br>	float:left;
<br>	vertical-align:top;
<br>
<br>}
<br>
<br>/*There are 4 types of side boxes, sbox_header , sbox_noborder , sbox_border , sbox_border_notop (When you have header you skip top )*/
<br>
<br>.sbox_header
<br>{
<br>	width:248px;
<br>	height:36px;
<br>	padding:0;
<br>	margin:0;
<br>	text-align:right;
<br>	padding-right:20px;
<br>	padding-top:8px;
<br>	font-weight:550;
<br>	font-size:24px;
<br>	color:#FFF;
<br>	background-color:#29292b;
<br>	background-image:url(images_saved/side_header_headline_bg.jpg);
<br>	background-repeat:repeat-x;
<br>	
<br>}
<br>
<br>.sbox_header a
<br>{
<br>	color:#FFF;
<br>	text-decoration:none;
<br>}
<br>
<br>.sbox_with_border
<br>{
<br>	width:252px;
<br>	min-height:50px;
<br>	padding:0;
<br>	margin:0;
<br>	margin-bottom:10px;
<br>	border-width:8px;
<br>	border-top-width:8px;
<br>	border-style:solid;
<br>	border-color:#383939;
<br>	background-color:#FFF;
<br>}
<br>
<br>.sbox_with_border_centered
<br>{
<br>	width:252px;
<br>	min-height:50px;
<br>	padding:0;
<br>	margin:0;
<br>	margin-bottom:10px;
<br>	border-width:8px;
<br>	border-top-width:8px;
<br>	border-style:solid;
<br>	border-color:#383939;
<br>	background-color:#FFF;
<br>	text-align:center;
<br>}
<br>
<br>.sbox_inner_entry
<br>{
<br>	border-width:0;
<br>	border-bottom-width:1px;
<br>	border-style:solid;
<br>	border-color:#383939;
<br>	color:#FFF;
<br>	padding:10px;
<br>	margin:0;
<br>}
<br>
<br>.sbox_inner_entry a
<br>{
<br>	text-decoration:none;
<br>	color:#000;
<br>}
<br>
<br>.sbox_inner_entry a:hover
<br>{
<br>	color:#009;
<br>}
<br>
<br>.sbox_inner_entry img
<br>{
<br>	float:right;
<br>	padding-left:5px;
<br>}
<br>
<br>
<br>.sbox_inner_entry_smaller_text
<br>{
<br>	border-width:0;
<br>	border-bottom-width:1px;
<br>	border-style:solid;
<br>	border-color:#383939;
<br>	color:#FFF;
<br>	padding:10px;
<br>	margin:0;
<br>	font-size:14px;
<br>}
<br>
<br>.sbox_inner_entry_smaller_text a
<br>{
<br>	text-decoration:none;
<br>	color:#000;
<br>}
<br>
<br>.sbox_inner_entry_smaller_text a:hover
<br>{
<br>	color:#009;
<br>}
<br>
<br>.sbox_inner_entry_smaller_text img
<br>{
<br>	float:right;
<br>	padding-left:5px;
<br>}
<br>
<br>
<br>
<br>
<br>.column_pair
<br>{
<br>	padding-bottom:15px;
<br>}
<br>
<br>.columnist
<br>{
<br>	color:#B3161D;
<br>	padding:0;
<br>	margin:0;
<br>	padding-right:15px;
<br>
<br>	text-align:right;
<br>	font-size:16px;
<br>	font-weight:600;
<br>	background-image:url(images_saved/red_diamond.jpg);
<br>	background-repeat:no-repeat;
<br>	background-position:right;
<br>}
<br>
<br>.columnist a
<br>{
<br>	color:#B3161D;
<br>	text-decoration:none;
<br>}
<br>
<br>#columnistarchive
<br>{
<br>	float:left;
<br>	font-size:12px;
<br>	padding-left:10px;
<br>	padding-top:15px;
<br>}
<br>#columnistarchive a
<br>{
<br>	text-decoration:none;
<br>	color:#FFF;
<br>}
<br>
<br>.articlename
<br>{
<br>	color:#383939;
<br>	font-size:18px;
<br>	padding-top:10px;
<br>}
<br>
<br>.articlename a
<br>{
<br>	color:#383939;
<br>	text-decoration:none;
<br>}
<br>
<br>.services_full_box
<br>{
<br>	font-family:Verdana, Geneva, sans-serif;
<br>	width: 200px;
<br>	padding:0;
<br>	padding-top:10px;
<br>	padding-bottom:10px;
<br>	margin:0;
<br>	margin-right:25px;
<br>	margin-left:25px;
<br>	text-align:center;
<br>	
<br>	border-width:0;
<br>	border-bottom-width:1px;
<br>	border-style:solid;
<br>	border-color:#c4ebfb;
<br>}
<br>
<br>.services_full_box a
<br>{
<br>	text-decoration:none;
<br>	color:#00527c;
<br>}
<br>
<br>#services_full_box_obituaries
<br>{
<br>	background-image:url(images_saved/obituaries.jpg);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	display:block;
<br>	width: 200px;
<br>	height:25px;
<br>	padding:0;
<br>	padding-top:40px;
<br>	margin:0;
<br>	
<br>}
<br>
<br>
<br>
<br>#services_half_box_weather
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/weather.png);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	display:block;
<br>	width:100px;
<br>	height:25px;
<br>	padding:0;
<br>	padding-top:40px;
<br>	margin:0;
<br>}
<br>
<br>
<br>#services_half_box_prayer
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/clock.png);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	display:block;
<br>	width:100px;
<br>	height:25px;
<br>	padding:0;
<br>	padding-top:40px;
<br>	margin:0;
<br>}
<br>
<br>#services_half_box_phone
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/telephone.png);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	display:block;
<br>	width:100px;
<br>	height:25px;
<br>	padding:0;
<br>	padding-top:40px;
<br>	margin:0;
<br>}
<br>
<br>#services_half_box_air
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/airplane.png);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	display:block;
<br>	width:100px;
<br>	height:25px;
<br>	padding:0;
<br>	padding-top:40px;
<br>	margin:0;
<br>}
<br>
<br>#services_half_box_forex
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/currency_exchange.png);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	display:block;
<br>	width:100px;
<br>	height:25px;
<br>	padding:0;
<br>	padding-top:40px;
<br>	margin:0;
<br>}
<br>
<br>
<br>#services_half_box_stock
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/borsa.png);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	display:block;
<br>	width:100px;
<br>	height:25px;
<br>	padding:0;
<br>	padding-top:40px;
<br>	margin:0;
<br>}
<br>
<br>
<br>#logo_footer
<br>{
<br>	background-image:url(images_saved/logo_small_footer.jpg);
<br>	background-repeat:no-repeat;
<br>	background-position: center top;
<br>	width:990px;
<br>	background-color:#f4f5f5;
<br>	padding:0;
<br>	padding-top:70px;
<br>	padding-bottom:5px;
<br>	margin:0;
<br>	font-weight:500;
<br>	font-size:14px;
<br>}
<br>
<br>#logo_footer a
<br>{
<br>	text-decoration:none;
<br>	color:#000;
<br>}
<br>
<br>
<br>
<br>#extrafooter
<br>{
<br>	width:990px;
<br>	color:#FFF;
<br>	background-color:#050627;
<br>	padding:0;
<br>	padding-top:5px;
<br>	padding-bottom:10px;
<br>	margin:0;
<br>	font-weight:500;
<br>	font-size:14px;
<br>}
<br>
<br>#extrafooter a
<br>{
<br>	text-decoration:none;
<br>	color:#FFF;
<br>}
<br>
<br>.side_spacer_box
<br>{
<br>	height:3px;
<br>	padding:0;
<br>	margin:0;
<br>	min-height:3px;
<br>	max-height:3px;
<br>}
<br>
<br>#innerpage_title
<br>{
<br>	width:660px;
<br>	color:#174f82;
<br>	font-size:32px;
<br>	font-weight:600;
<br>	border-width:0;
<br>	border-style:solid;
<br>	border-color:#cdcdcd;
<br>	border-bottom-width:1px;
<br>	border-top-width:1px;
<br>	margin:0;
<br>	margin-right:15px;
<br>	padding:0;
<br>	padding-top:5px;
<br>	padding-bottom:5px;
<br>	padding-right:10px;
<br>	
<br>}
<br>
<br>#innerpage_title a
<br>{
<br>	text-decoration:none;
<br>		color:#174f82;
<br>}
<br>
<br>#innerpage_article_datestamp
<br>{
<br>	width:300px;
<br>	height:50px;
<br>	float:right;
<br>	color:#666;
<br>	margin:0;
<br>	margin-right:15px;
<br>	padding:0;
<br>	padding-top:5px;
<br>	padding-bottom:5px;
<br>	padding-right:10px;
<br>}
<br>
<br>#innerpage_article_datestamp a
<br>{
<br>	color:#666;
<br>	text-decoration:none;
<br>}
<br>
<br>#innerpage_article_buttons_top
<br>{
<br>	width:300px;
<br>	height:50px;
<br>	float:left;
<br>	color:#666;
<br>	margin:0;
<br>	margin-left:15px;
<br>	padding:0;
<br>	padding-top:5px;
<br>	padding-bottom:5px;
<br>	padding-left:10px;
<br>	direction:ltr;
<br>	text-align:left;
<br>}
<br>
<br>#innerpage_article_buttons_bottom
<br>{
<br>	width:660px;
<br>	height:50px;
<br>	float:left;
<br>	color:#666;
<br>	margin:0;
<br>	margin-top:40px;
<br>	margin-left:15px;
<br>	padding:0;
<br>	padding-top:5px;
<br>	padding-bottom:5px;
<br>	padding-left:10px;
<br>	direction:ltr;
<br>	text-align:left;
<br>	
<br>	border-width:0;
<br>	border-style:solid;
<br>	border-color:#cdcdcd;
<br>	border-top-width:1px;
<br>	
<br>}
<br>
<br>.halfblock
<br>{
<br>	float:right;
<br>	color:#525252;
<br>	width:280px;
<br>	padding:10px;
<br>	margin:5px;
<br>	height:65px;
<br>	
<br>}
<br>.halfblock a
<br>{
<br>	color:#666;
<br>	text-decoration:none;
<br>}
<br>
<br>.pdf_full_file
<br>{
<br>	color:#555;
<br>	padding:0;
<br>	margin:0;
<br>	margin-bottom:20px;
<br>	margin-top:20px;
<br>}
<br>
<br>.pdf_full_file a
<br>{
<br>	text-decoration:none;
<br>	color:#555;
<br>}
<br>
<br>.pdf_page_file
<br>{
<br>	margin:0;
<br>	padding:0;
<br>	padding-right:30px;
<br>	padding-bottom:5px;
<br>	border-width:0;
<br>	color:#555;
<br>}
<br>
<br>.pdf_page_file a
<br>{
<br>	text-decoration:none;
<br>	color:#555;
<br>}
<br>
<br>.cartoonfloat
<br>{
<br>	float:right;
<br>	min-width:150px;
<br>	height:160px;
<br>	min-height:160px;
<br>	margin:10px;
<br>	text-align:center;
<br>	background-color:#DDD;
<br>	font-size:16px;
<br>	padding:0;
<br>	padding-bottom:5px;
<br>}
<br>
<br>.cartoonfloat a
<br>{
<br>	color:#333;
<br>	text-decoration:none;
<br>}
<br>
<br>.scartoonfloat
<br>{
<br>	float:right;
<br>	min-width:150px;
<br>	height:160px;
<br>	min-height:160px;
<br>	margin:10px;
<br>	text-align:center;
<br>	background-color:#AAA;
<br>	font-size:16px;
<br>	padding:0;
<br>	padding-bottom:5px;
<br>}
<br>
<br>.scartoonfloat a
<br>{
<br>	color:#333;
<br>	text-decoration:none;
<br>}
<br>
<br>
<br>/*Now to the photography page*/
<br>
<br>#photo_active
<br>{
<br>	width:690px;
<br>	float:right;
<br>	border-width:1px;
<br>	border-style:solid;
<br>	border-color:#006;
<br>	margin-right:-14px;
<br>}
<br>
<br>
<br>.photosfloat
<br>{
<br>	background-color:#FFF;
<br>	float:right;
<br>	width:97px;
<br>	margin:0;
<br>	margin-left:10px;
<br>	margin-top:30px;
<br>	border-width:1px;
<br>	border-style:solid;
<br>	border-color:#006;
<br>}
<br>
<br>.photosfloat_active
<br>{
<br>	background-color:#CCC;
<br>	float:right;
<br>	width:97px;
<br>	margin:0;
<br>	margin-left:10px;
<br>	margin-top:30px;
<br>	border-width:1px;
<br>	border-style:solid;
<br>	border-color:#006;
<br>}
<br>
<br>
<br>#photo_pages_area
<br>{
<br>width:660px;
<br>margin-top:10px;
<br>font-size: 12px;
<br>color: #333;
<br>font-family: Tahoma, Geneva, sans-serif;
<br>font-weight: normal;
<br>padding-top: 3px;
<br>padding-bottom: 3px;
<br>margin-right: 30px;
<br>
<br>}
<br>
<br>#photo_pages_area a
<br>{
<br>text-decoration: none;
<br>background: #E3F1FA;
<br>border: 1px solid #C6E4F2;
<br>padding: 4px 6px;
<br>color: #222;
<br>}
<br>#photo_pages_area a:hover {
<br>background: #C6E4F2;
<br>}
<br>
<br>#photo_pages_area_active
<br>{
<br>background: #C6E4F2;
<br>border: 1px solid #C6E4F2;
<br>padding: 4px 6px;
<br>color: #222;
<br>font-weight: bold;
<br>}
<br>
<br>
<br>.search_result
<br>{
<br>	width:850px;
<br>	border-width:1px;
<br>	border-color:#00C;
<br>	border-style:solid;
<br>	background-color:#DDD;
<br>	margin:5;
<br>	padding:5;
<br>	margin-bottom:30px;
<br>	margin-right:20px;
<br>	
<br>}
<br>
<br>.search_date
<br>{
<br>	color:#333;
<br>	font-weight:500;
<br>	float:right;
<br>	margin-left:15px;
<br>}
<br>
<br>.search_title
<br>{
<br>	color:#2518C1;
<br>	font-weight:600;
<br>}
<br>
<br>.search_snip
<br>{
<br>	color:#CCC;
<br>	font-weight:500;
<br>}
<br>
<br>#search_box_search_page
<br>{
<br>	color:#CCC;
<br>	font-weight:500;
<br>	margin:50px;
<br>}
<br>
<br>.archive_entry
<br>{
<br>	padding-top:3px;
<br>	padding-bottom:3px;
<br>	background-color:#f2f3f4;
<br>	font-weight:600;
<br>}
<br>
<br>.archive_entryb
<br>{
<br>	padding-top:3px;
<br>	padding-bottom:3px;
<br>	font-weight:600;
<br>	
<br>}
<br>
<br>.date_archive
<br>{
<br>	float:right;
<br>	padding-right:30px;
<br>	width:170px;
<br>}
<br>
<br>.pdfarchive
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/archive_pdf_button.jpg);
<br>	background-repeat:no-repeat;
<br>	width:36px;
<br>	height:20px;
<br>	display:block;
<br>	margin-right:15px;
<br>	text-decoration:none;
<br>}
<br>
<br>.htmlarchive
<br>{
<br>	float:right;
<br>	background-image:url(images_saved/archive_html_button.jpg);
<br>	background-repeat:no-repeat;
<br>	width:36px;
<br>	height:20px;
<br>	display:block;
<br>	margin-right:15px;
<br>	text-decoration:none;
<br>}
<br>
<br>.blacklinks
<br>{
<br>	color:#000;
<br>	text-decoration:none;
<br>}
<br>
<br>.news_index_inner_pages_wphoto
<br>{
<br>	background-color:#FFF;
<br>	border-width:1px;
<br>	border-style:solid;
<br>	border-color:#006;
<br>	
<br>	color:#006;
<br>		
<br>	width:200px;
<br>	height:75px;
<br>	min-height:75px;
<br>	max-height:75px;
<br>	
<br>	float:right;
<br>	
<br>	margin:0;
<br>	margin-right:5px;
<br>	margin-bottom:8px;
<br>	margin-top:2px;
<br>	
<br>	padding:3px;
<br>	padding-bottom:0;
<br>}
<br>
<br>.news_index_inner_pages_wphoto a
<br>{
<br>	text-decoration:none;
<br>	color:#006;
<br>}<br>