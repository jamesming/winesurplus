<head>
<?php     	$this->load->view('header/header_css.php');  ?>

<style>
	

body {
	margin:0;
	padding:0;
	font-family:"Trebuchet MS",arial;
	font-size:13px;
	line-height:1.5;
	height:100%;
	color:#333;
	background:#ecdab4 url("<?php echo base_url()    ?>images/wood.gif?v=1") fixed}

img {
	border:0}

table {
	border:0}

td {
	vertical-align:top;
	text-align:left}

form {
	margin:0;
	padding:0}

a {
	color:#4a8f14;
	text-decoration:none;
	outline:none}

a:hover {
	text-decoration:underline}

a:hoverem {
	text-decoration:none}

textarea,input {
	font-family:arial,sans-serif;
	font-size:12px}

p {
}

ul {
	padding:0 0 0 15px;
	margin:0}

h1 {
	margin:00;
	padding:0px0 5px 0;
	font-size:26px;
	color:#333;
	position:relative}

#contenth1 {
	color:#7d5b34;
	width:100%;
	border-bottom:1px solid #e1d9c8;
	margin-bottom:15px;
	padding-bottom:5px}

#contentHomeh1 {
	font-size:30px;
	padding-bottom:15px;
	line-height:1.3em}

h3 {
	margin:10px0 5px;
	font-size:15px;
	font-weight:bold}

.clear {
	clear:both;
	height:1px}

.green {
	color:#4FA51A}

.red {
	color:#8A1F11}

.bold {
	font-weight:bold}

.error,.notice,.success {
	border:2pxsolid #DDD;
	margin-bottom:1em;
	padding:0.8em}

.error {
	background:#FBE3E4 none repeat scroll 0 0;
	border-color:#FBC2C4;
	color:#8A1F11}

.notice {
	background:#FFF6BF none repeat scroll 0 0;
	border-color:#FFD324;
	color:#514721}

.success {
	background:#E6EFC2 none repeat scroll 0 0;
	border-color:#C6D880;
	color:#264409}

#main {
	margin:0pxauto;
	width:900px;
	position:relative;
	z-index:1}

#header {
	height:167px;
	position:relative;
	z-index:999}

#header {
	width:900px}

#header#logo {
	left:-11px;
	position:absolute;
	top:14px}
	
	
#header
#topNav{
	position:absolute;left:0;top:128px;height:45px;width:900px;
	background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") 0 -265px no-repeat }
#topNav a{display:block;text-decoration:none;color:#542c06}




#topNav a{
	float:left;font-size:15px;font-weight:bold;width:130px;height:37px;line-height:34px;text-align:center}
#topNav .whiteDiv{
	position:absolute;width:700px;height:20px;top:34px;left:2px;background-color:#fff}
#topNav a.active{
	background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") 0 0 no-repeat }
#topNav a:hover, #topNav2 a:hover{
	color:#826448}
.rfloat{
	float:right}
#myCredit{
	position:absolute;top:3px;right:7px;display:block;color:#542C06;font-weight:bold}
	#emailSubBox{
		height:89px;right:0px;overflow:hidden;width:240px;border-bottom:2px solid white;position:relative;padding-top:16px}#giftCardPromo{border-bottom:2px solid white;margin-bottom:10px;padding:16px
13px}
#emailSubBox
.items{width:2000em;position:absolute}
#emailSubBox .items .item{height:80px;width:220px;top:30px;right:0px;color:black;padding:0px
0 0 13px;float:left}
#emailSubForm,#emailSubFormExpired{
	position:relative;height:24px}
#emailSub strong, #emailSubExpired strong{
	display:block;font-size:15px;margin-bottom:4px;color:#000}
#subscribeText,#subscribeTextExpired{
	font-size:16px;font-weight:bold;color:#c9bba3;background:#fff;position:absolute;top:0;padding:1px;margin:0}
#passwordText{font-size:16px;font-weight:bold;color:#c9bba3;background:#fff;top:0;padding:1px;margin:0}
#subscribeText{position:relative;width:208px;float:left}
#passwordText{width:208px}#subscribeEmailDialog{position:relative}
#subscribeButton{height:26px;border:none;cursor:pointer;float:left;position:relative;margin-left:5px;background:transparent url(<?php  echo base_url()   ?>images/sprite.png?v=29) -705px 0px no-repeat;width:36px}
#passwordButton{height:26px;border:none;cursor:pointer;float:left;position:relative;margin-left:5px;width:36px}
#subscribeButton:hover{background-position: -705px -26px}
#subscribeButtonExpired{width:93px;height:26px;border:none;cursor:pointer;position:absolute;left:238px;top:0px}#emailInputDialog,#passwordInputDialog{top:15px;margin:0px}#emailSubscribeButton{width:93px;height:26px;line-height:26px;border:none;cursor:pointer;position:absolute;left:260px}#deliveredby{font-size:11px;color:#B1956A;padding-left:2px;position:absolute;top:27px}#content,#contentHome{background-color:white;border:1px
solid #e7e7e7}
#content{padding:15px
20px 25px;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}
#oneColumn{padding-top:5px;width:855px}
#contentHome{padding:15px
0 0;position:relative}
#contentHome{-webkit-border-bottom-right-radius:8px;-webkit-border-bottom-left-radius:8px;-moz-border-radius-bottomright:8px;-moz-border-radius-bottomleft:8px;border-bottom-right-radius:8px;border-bottom-left-radius:8px;border-top:1px}
#homeMiddle
.right{-webkit-border-bottom-right-radius:8px;-moz-border-radius-bottomright:8px;border-bottom-right-radius:8px}
#footer{text-align:center;padding:10px
0 25px 10px;margin:10px
0 30px}
#footer
td{padding:0
15px}



#footer
a{
	color:#333;
	text-decoration:underline
	}
#footer a:hover{background-color:#f9f9f9}
#footer
.box{padding:20px;border:1px
dashed #999;margin:30px
0 10px}
#footer
.bar{font-size:18px;color:#999}
.settingMenu
a{display:block;border-bottom:1px solid #eee;padding:5px}
.settingMenu a:hover, .settingMenu .selected{
	background-color:#a7bcc5;color:white}.updateAccount
.textInput{width:250px}.updateAccount th, .changePassword
th{
	text-align:right;vertical-align:top;font:bold 12px arial}.changePassword
.textInput{width:150px}
.updateAccount input[type="submit"], .changePassword input[type="submit"]{font-size:20px}#info{margin:20px
0;background-color:white;padding:20px;min-height:500px}#info
h1{color:#7eab0f;font-size:18px;font-weight:bold;margin:5px
0}





#info
h3{font-size:13px;font-weight:bold}#faq
h3{float:left;clear:left;color:#58879c;width:200px;padding-right:20px}#faq
div{float:left;clear:right;width:540px;margin:13px
0}
.sendInvite{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") -506px -276px;cursor:pointer;width:93px;height:27px;border:0}.sendInvite:hover{background-position: -506px -303px}#homeTop{padding:0
15px;position:relative}
#topDealImg{position:relative;min-height:300px}
#topDealImg
img{width:865px;height:300px;vertical-align:top;display:block}
#topDealImg
span{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") -551px 0 no-repeat;width:127px;height:127px;position:absolute;right: -36px;top: -20px}#topDealImg
strong{color:#568800;font-size:24px;line-height:24px;position:absolute;right:29px;top:40px;padding-top:3px;width:70px;text-align:center}
#topDealImg
#discountNum{font-size:36px}




.buyButtonSmall,.buyButtonSmallSold{width:73px;height:25px;display:block;background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") -564px -154px no-repeat;color:#fff}.buyButtonSmall:hover{background-position: -564px -179px;cursor:pointer;text-decoration:none}.buyButtonSmallSold{background-position: -564px -204px}#dealPriceTime{position:relative;height:70px}#dealPriceTime
.inner{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") 0 -318px no-repeat;position:absolute;left: -55px;width:940px;height:63px;padding:10px
0 0 12px}#dealPriceTime .bBuy, #dealPriceTime .bExpired, #dealPriceTime .bSoldOut, #dealPriceTime .bPurchase, #dealPriceTime .bBuyMultiple, #dealPriceTime .bBuyMultipleDonate, #dealPriceTime
.bInvite{width:135px;height:48px;display:block;background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") -403px 0 no-repeat}#dealPriceTime .bExpired, #dealPriceTime .bSoldOut, #dealPriceTime
.bPurchase{background:url("/images/expiredSprite.png?v=29") -56px 0 no-repeat}#dealPriceTime .bBuy:hover{background-position: -403px -48px}#dealPriceTime
.bBuyMultiple{background-position: -403px -103px}#dealPriceTime .bBuyMultiple:hover{background-position: -403px -151px;cursor:pointer}#dealPriceTime .bBuyMultipleDonate:hover{background-position: -794px -151px;cursor:pointer}#dealPriceTime
.bBuyMultipleDonate{background-position: -794px -103px}#dealPriceTime
.bInvite{background-position: -794px 0px}#dealPriceTime .bInvite:hover{background-position: -794px -48px;cursor:pointer}#dealPriceTime
.bSoldOut{background-position: -56px 0px}#dealPriceTime
.bExpired{background-position: -56px -48px}#dealPriceTime
.bPurchase{background-position: -441px -0px}#dealPriceTime .bPurchase:hover{background-position: -441px -48px}#dealPriceTime
table{height:50px}#dealPriceTime table
td{text-align:center}#dealPriceTime
#buyButton{padding:0
0}#dealPriceTime
#salePrice{font-size:26px;font-weight:bold;line-height:50px;padding:0
10px}#dealPriceTime
#priceDetails{padding:0
10px;border-left:1px solid white}#dealPriceTime
#giftIt{padding-right:10px}#dealPriceTime
#dealBought{border:1px
solid white;border-width:0 1px;padding:0
5px}#dealBought
dl{padding:0
10px}#dealPriceTime #dealBought
dd{color:#ff8a00}#dealPriceTime
#timeLeft{padding:0
0 0 14px}#dealPriceTime
dl{margin:0;float:left;font-weight:bold}#priceDetails
dl{width:75px}#dealPriceTime
dd{margin:0;font-size:20px}#clock{padding:10px
0 0 10px}#clock
em{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") -672px -209px no-repeat;display:block;width:34px;height:34px;margin-top:1px}.textTimeLeft{float:left;font-weight:bold;padding-right:10px}#javascript_countdown_time{float:left;font-size:16px;font-weight:bold;margin-top: -4px}#javascript_countdown_time
small{color:#999;font-size:12px}#timeBarOut{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") 0 -157px no-repeat;display:block;width:220px;height:22px;position:relative;margin-left:10px}#timeBarIn{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") 0 -139px no-repeat;display:block;width:189px;height:15px;top:1px;right:30px}#timeBarIn,#timeBarStart,#timeBarEnd{position:absolute}#timeBarStart,#timeBarEnd{color:#787878;top:21px;font-size:10px}#timeBarStart{left: -12px}#timeBarEnd{left:178px}#expiredTag,#soldOutTag{background:url("/images/expiredSprite.png?v=29") -219px 0 no-repeat;display:block;width:57px;height:66px;position:absolute;top: -32px;right:236px}#soldOutTag{background-position: -292px 0}#homeMiddle
table{width:100%}#homeMiddle
.left{padding:5px
15px 25px}#homeMiddle
.right{width:240px;padding:5px;border-left:1px solid #e6e6e6;background-color:#f3f3f3}
#finePrint{margin:0
0 15px}
#finePrint
h3{padding-right:10px;display:inline-block}#aboutCompany{border-top:2px solid #f3f3f3;padding-bottom:10px}#shopAt
h3{font-size:14px;padding-bottom:3px}#shopAt
img{border:1px
solid #ccc;padding:5px}#shareThis{padding:0
10px 14px 13px}#inviteFriendTxt{font-size:13px;text-align:center;margin-top:7px;letter-spacing: -.02em;padding-left:9px}#inviteFriendTxt
span{font-weight:normal}#inviteFriendTxt
em{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") no-repeat scroll -676px -180px transparent;display:inline-block;width:26px;height:22px;margin-left:4px;right: -15px;top: -7px}#tomorrowDeal{position:relative;margin:0;padding:16px
13px 16px;border:2px
solid white;border-width:2px 0;min-height:200px}#tomorrowDeal
em{background:url("/images/ver1/ripening.png?v=1") no-repeat scroll 7px 38px transparent;display:block;height:133px;width:245px;position:absolute;left: -5px;top:31px;z-index:20}#tomorrowDeal
h3{margin-top:0px}.shareEmail{background:url("<?php  echo base_url()   ?>images/sprite.png?v=29") no-repeat scroll -303px 0 transparent;display:block;width:54px;height:61px}.shareEmail:hover{background-position: -303px -61px}#fbLikBox{padding:10px
0 0 0px}#mainTb{width:100%}#mainTb
#left{}#mainTb
#right{width:250px}#about
#left{float:left;padding:5px;width:600px}#about
#right{float:left;padding:5px
0 0 30px;width:200px}#contactForm
th{text-align:right;vertical-align:top;padding-right:5px}#about
h3{margin-top:0}#bizForm{border:1px
solid #eaeaea;padding:5px
20px 20px;width:425px;position:relative}#bizForm
em{position:absolute;top: -41px;right: -52px;background:url("/images/ver1/Business.gif") no-repeat scroll 0 0 transparent;display:block;height:125px;width:125px}#bizForm
label{display:block;margin:10px
0 2px}#bizForm
span{font-weight:normal}#bizForm input, #bizForm
textarea{width:325px}#referralForm
td{vertical-align:middle}.rLink,.rFB,.rTwitter,.rEmail{background:url("/images/ver1/spriteRefer.png?v=29") no-repeat scroll transparent;display:block;height:43px;width:44px}.rLink{background-position:0 1px}.rFB{background-position:0 -45px}.rTwitter{background-position:0 -90px}.rEmail{background-position:0 -135px}.red{color:red;font-weight:bold}.green{color:#4FA51A;font-weight:bold}#paypalEdit:hover{border:1px
solid #ffe400}a,button{outline:0
none}a::-moz-focus-inner,button::-moz-focus-inner,.button::-moz-focus-inner{border:0}.button{height:24px;cursor:pointer;color:#fff;line-height:24px;text-align:center;font-size:13px;font-weight:bold;text-decoration:none;display:block;border:0;min-width:80px;outline:none;padding:0
10px 0;background:#66d421;background: -moz-linear-gradient(top, #66d421, #4fa41a);background: -webkit-gradient(linear,left top, left bottom, from(#66d421), to(#4fa41a));filter:progid:DXImageTransform.Microsoft.Gradient(
StartColorStr='#66d421',EndColorStr='#4fa41a',GradientType=0)}.button.active{background:#989898}.button.active:hover{background:#989898}.button:hover{text-decoration:none;background:#67e11a;background: -moz-linear-gradient(top, #67e11a, #56b41b);background: -webkit-gradient(linear,
left top, left bottom, from(#67e11a), to(#56b41b));filter:progid:DXImageTransform.Microsoft.Gradient(
StartColorStr='#67e11a',EndColorStr='#56b41b',GradientType=0)}.button:disabled{background:#989898;cursor:default}.button:active{outline:none}.orangeButton{height:18px;cursor:pointer;color:#fff;line-height:18px;text-align:center;font-size:12px;font-weight:normal;text-decoration:none;display:block;border:0;min-width:80px;outline:none;padding:0
10px 0;background:#66d421;background: -moz-linear-gradient(top, #ffc855, #f1a812);background: -webkit-gradient(linear,left top, left bottom, from(#ffc855), to(#f1a812));filter:progid:DXImageTransform.Microsoft.Gradient(
StartColorStr='#ffc855',EndColorStr='#f1a812',GradientType=0)}.orangeButton.active{background:#989898}.orangeButton.active:hover{background:#989898}.orangeButton:hover{text-decoration:none;background:#67e11a;background: -moz-linear-gradient(top, #fbd17a, #fcb012);background: -webkit-gradient(linear,
left top, left bottom, from(#fbd17a), to(#fcb012));filter:progid:DXImageTransform.Microsoft.Gradient(
StartColorStr='#fbd17a',EndColorStr='#fcb012',GradientType=0)}.orangeButton:disabled{background:#989898;cursor:default}.orangeButton:active{outline:none}.dialog{position:fixed;z-index:10000;border:3px
solid #ffcb8d;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;padding:20px;background-color:#fff;display:none}.dialog
.close{background:url(<?php  echo base_url()   ?>images/sprite.png?v=29) -677px -151px;position:absolute;right:6px;top:6px;cursor:pointer;height:13px;width:17px;z-index:2}.dialog .close:hover{background-position: -677px -164px}.dialogContent{background:#fff;position:relative;overflow:hidden}.dialogContent
h1{color:#ff8a00;width:550px}.dialogContent
ul{width:325px;margin-left:15px}.dialogContent
li{font-size:16px;font-weight:bold;padding:7px
0}.dialogContent
input{}.dialogContent
form{padding-top:5px}#emailInputDialog,#passwordInputDialog{font-size:18px;font-weight:bold;width:250px;margin-right:10px;border:1px
inset #999}#passwordInputDialog{width:150px;top:0px;height:22px}#passwordSubscribeButton{position:relative;float:left;height:26px}.watermark_container{float:left}#juicer2{position:absolute;float:right;left:426px;bottom: -6px;right: -14px}#oranges{position:absolute;float:right;left:388px;bottom:0px;right:0px}.dialogContent
.items{width:20000em;position:absolute}.dialogContent .items
.item{float:left;width:560px;height:340px;position:relative}.dialogContent
p{font-size:17px;font-weight:bold;width:383px}#okayDialogButton{position:relative;left:150px;top:50px}#fbLikBox{z-index:10;overflow:hidden;position:relative;top:-1px;left:-2px;padding:0px;margin:0
auto}#fbLikBox
iframe{left:-5px;overflow:hidden;position:relative;top:-1px}#emailDialogError,#emailSubError,#passwordDialogError,#passwordSubError{font-weight:bold;color:red;display:none}#emailDialogError{width:353px}.juicer{background:url(/images/juicer2.jpg) 625px 37px no-repeat}.fleft{float:left}.fright{float:right}.confirmImage{width:116px;height:88px;padding:1px;border:1px
solid #a6a6a6;margin-top:6px}.confirmRow{width:700px;position:relative;float:left;margin-left:20px}.hourglass{float:left;z-index:10;position:absolute;width:42px;height:64px;display:block;background:url(/images/expiredSprite.png?v=29) no-repeat 0 0}.sign{position:absolute;top: -4px;left:563px;z-index:100}#statsHolder,#statsText{position:absolute;width:145px;height:78px;top:25px;right:0}#statsText{padding-right:5px}#statsHolder{border:1px
solid #c5ad7f;background:#fff0d4;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;filter:alpha(opacity=50);opacity:0.5;-moz-opacity:0.5}#statsText
dl{margin:4px}#statsText
dt{font-size:12px;color:#726152;width:100%;text-align:right;font-weight:normal;line-height:100%;padding:2px
0}#statsText
dd{font-size:16px;font-weight:bold;color:#34271a;width:100%;text-align:right;line-height:100%;margin:0}.watermarkText{font-weight:bold;font-family:'Trebuchet MS'}.recentDealHolder{width:377px;border:1px
solid #cba989;float:left;margin-bottom:20px;margin-top:20px}.recentDealHolder
.recentDeal{padding:10px;padding-top:0px}.recentDealHolder .recentDeal
p{height:38px;overflow:hidden}.recentDealHolder
h2{line-height:15px;font-size:14px;font-weight:bold;margin:0
auto;text-align:center;background:url(/images/recentDealHeader.png) 0 0 no-repeat;height:25px;line-height:25px}.recentDeal
.recentImg{position:relative;margin-left:10px;float:left;border:1px
solid #ababab;padding:3px;width:165px;height:123px}.recentDeal .recentImg
img{width:165px;height:123px}.recentDeal
.recentSoldOut{background:url(/images/soldOut.png?v=2) 0 0 no-repeat;width:111px;height:112px;position:absolute;top:-2px;left: -2px;display:block;z-index:20}.recentDeal
table{width:174px;float:left;height:131px}.recentDeal table th, .recentDeal table
td{width:100%;vertical-align:middle;font-size:14px}.recentDeal table
th{background:#f1ede6;font-size:21px;line-height:17px}.recentDeal table
td{background:#dfd3c1;text-align:center;border-top:2px solid #fff}.expiredDeal{padding:0px
18px;position:relative;height:64px;margin:0
0 20px;background:url(/images/expiredSprite.png?v=29) 0 -99px no-repeat;height:76px;width:912px;left: -7px}#helpCcv{display:inline-block;width:16px;height:16px;background:url(<?php  echo base_url()   ?>images/sprite.png?v=29) no-repeat -704px -151px;cursor:pointer;margin-left:10px;line-height:15px}#helpCcv:hover{background-position: -704px -167px}.giftIcon{background:url(<?php  echo base_url()   ?>images/sprite.png?v=29) -705px -120px no-repeat;width:16px;height:19px;display:inline-block}a:hover
.giftIcon{background-position: -722px -120px}.subTotalRow,.creditRow{line-height:10px;margin-bottom:5px}.totalRow{margin-top:10px}#sendAGiftForm input[type = "text"]{width:220px;font-size:16px}#sendAGiftForm
td{width:270px;height:60px;vertical-align:middle}#printAGiftForm input[type = "text"]{width:220px;font-size:16px}#printAGiftForm
td{width:270px;height:60px;vertical-align:middle}fieldset{width:250px;position:relative;float:left}fieldset
legend{font-size:14px;padding:0px
10px}fieldset input[type="text"], fieldset input[type="password"]{width:200px}#signVideo{width:127px;height:130px;position:absolute;background:url(/images/signVideo_Vote.png?v=1) no-repeat 0 0;bottom:8px;left:375px;z-index:200}#signVideo:hover{background-position:0 -130px;cursor:pointer}#videoForm{border:1px
solid #ccc;width:450px;padding:10px;position:relative}#videoForm input[type="text"]{width:350px;margin-bottom:10px}#videoForm
textarea{width:350px;margin-bottom:5px}#videoForm
#sticker{position:absolute;float:right;top: -30px;right: -30px;width:104px;height:113px;background:url(/images/VideoSticker.png?v=2)}.starIcon{vertical-align:text-top;margin-right:5px}#joinDiscussion{background:#ee9501;background: -moz-linear-gradient(top, #f0b538, #ee9501);background: -webkit-gradient(linear, left top, left bottom, from(#f0b538), to(#ee9501));filter:progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#f0b538', EndColorStr='#ee9501', GradientType=0);color:white;font-size:20px;font-weight:bold;display:block;float:right;margin:5px;padding:3px
10px;text-decoration:none}#joinDiscussion:hover{background:#feca5d;background: -moz-linear-gradient(top, #feca5d, #f6a006);background: -webkit-gradient(linear, left top, left bottom,from(#feca5d),to(#f6a006));filter:progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#feca5d',EndColorStr='#f6a006',GradientType=0)}#dailyReport{background-color:#ddd}#dailyReport
th{background-color:#eee;padding:0
5px}#dailyReport
td{background-color:#fff;padding:0
5px}.dialog-arrow-border{border-color:transparent #FFCB8D transparent transparent;border-style:solid;border-width:24px;height:0;width:0;position:absolute;top:194px;left:-50px;_border-left-color:pink;_border-bottom-color:pink;_border-top-color:pink;_filter:chroma(color=pink)}.dialog-arrow{border-color:transparent #FFF transparent transparent;border-style:solid;border-width:24px;height:0;width:0;position:absolute;top:194px;left:-47px;_border-left-color:pink;_border-bottom-color:pink;_border-top-color:pink;_filter:chroma(color=pink)}table#importsTable tbody
tr.odd{background:#fff}table#importsTable tbody
tr.even{background:#f1f1f1}#header
#topNav2{position:relative;right:10px}#topNav2
a{padding:5px
9px;margin-right:0px;color:#542c06}#topNav2 a:hover{text-decoration:none}#topNav2{list-style:none;z-index:999}#topNav2
a{display:inline-block;height:22px}#topNav2
li{float:left;padding:0px
0px;color:#826448}#topNav2 li ul
li{float:none}#topNav2
a{list-style:none}#myAccount{position:relative;z-index:100}#myAccounLink{position:relative;z-index:2}#myAccount
ul{display:none;top:100%;min-width:110px;position:absolute;right:0;border-width:0px 1px 2px 1px;border-style:solid;border-color:#adadad;margin-top: -2px;z-index:1;padding:0;overflow:hidden;max-width:250px}#myAccount
li{background:#f7f7f7;list-style-type:none;margin:0;padding:0;visibility:visible}#myAccount ul li
a{display:block;white-space:nowrap;width:100%;padding-left:7px}#myAccount ul li:hover a, #myAccount ul li a:hover, #myAccount ul li:hover, #myAccount ul
li.active{color:#fff;text-decoration:none;background:#b5b5b5;display:block}#myAccountLink
img{width:10px;height:5px;position:relative;background:url(<?php  echo base_url()   ?>images/sprite.png?v=29) -765px -82px no-repeat;position:relative;top: -2px}#myAccountLink:hover
img{background-position: -765px -90px}#tabHolderBox{margin:1em
0 1em 0}#tabHolder{text-align:left;padding:0;float:left;border-bottom:1px solid #a2a2a2;width:100%}#tabHolder
div{display:block;float:left}#tabHolder
div{border:1px
solid #a2a2a2;font-size:14px;font-weight:bold;color:#4fa51a;border-bottom:0px none;border-left-width:0px;width:100px;text-align:center}#tabHolder div:hover{background:#ececec;color:#542c06}#tabHolder div
a{color:#826448;display:block;padding:2px
9px 2px}#tabHolder div a:hover{text-decoration:none;color:#542c06}#tabHolder
div.first{margin-left:0px;border-left-width:1px}#tabHolder
div.active{background:#826448;color:#fff;cursor:default}#tabHolder div.active a, #tabHolder div.active a:hover{color:#fff;cursor:default}


</style>





</head>

<html>
<body  >	
<div id="main"   class='container'  >
        <div id="header">

            <a href="/" title="ZekeZoo" id="logo">
            	<img src="<?php  echo base_url()   ?>images/zekeszoo.png?v=5">
            </a>

            



            <div id="topNav"  >

                <a href="/" class="active" id="homeLink" '>Today's Deal</a>

                <a href="/info/learn">How It Works</a>

                <a href="/info/recent">Recent Deals</a>

                <div class="whiteDiv"></div>

            </div>

            <img src="http://dealpulp.com/images/hangingSign.png?v=9" class="sign">

            <a href="/contest.php"><em id="signVideo"></em></a>

            <div id="statsHolder">

            </div>

                        <div id="statsText">

                <dl>

                    <dt>ZekeZoo Members</dt>

                    <dd>88,990</dd>

                </dl>

                <dl>

                <dt>Total Dollars Saved</dt>

                <dd>$454,672</dd>

                </dl>

            </div>

            

            <div class="rfloat" style="top: 131px; position: relative;">        

                <ul id="topNav2">

                                    <li><a href="/signin">Sign in</a></li>

                    <li><a href="/signup">Sign up</a></li>

                                </ul>

            </div>  

        </div>
        <div id="contentHome"   >

        <div id="homeTop">
        	
        	
        	
        	<h1>header !</h1>
        	<div id="topDealImg">
        		<img src="http://dealpulp.com/img/deal/0/0/110_1_1302014282.jpg" />
        		<span><strong><font id="discountNum">50</font>%<br/>&nbsp;off</strong></span></div><div id="dealPriceTime"><div class="inner">

                <table cellspacing=0>

                    <tr>

                        <td id="buyButton">

                            <a href="https://ZekeZoo.com/buy.php?did=110" class="bBuy"></a>

                        </td>

                        <td id="salePrice">$1</td>

                        <td id="giftIt"></td><td id="priceDetails">

                                <dl>

                                    <dt>Value</dt>

                                    <dd>$2</dd>

                                </dl>

                                <dl>

    

                                    <dt>Discount</dt>

                                    <dd>50%</dd>

    

                                </dl>

                                <dl>

                                    <dt>You Save</dt>

                                    <dd>$1</dd>

                                </dl>

                            </td>

                            <td id="dealBought">

                                <dl>

                                    <dt>Deals Bought</dt>

                                    <dd>3139 </dd>

                                </dl>

                            </td><td id="clock">

                            <em></em>

                        </td>

                        <td id="timeLeft"><div class="textTimeLeft">

                        Time left to buy

                    </div>

                    <div id="javascript_countdown_time"></div>                <div class="clear"></div>

                            <div id="timeBarOut">

                                <div id="timeBarIn" style="width: 129.39212259401px"></div>

                                <div id="timeBarStart">Apr 5</div>

                                <div id="timeBarEnd">Apr 6</div></div>

                        </td>

                    </tr>

                </table>

            

                </div></div></div><div id="homeMiddle"><table cellspacing=0>

                    <tr>

                        <td class="left">

                            <div id="finePrint">                        

                                <table>

                                    <tr>

                                        <td width="50%">

                                            <h3>

                                                Why It's Fresh

                                            </h3><a href="/discussion/5_110">35 comments</a>

                                            

                                            <div   >

                                                <ul><li>We're celebrating our 3-month Pulpiversary with "Orange You Lucky?," which will hook you up with a mystery ZekeZoo credit 

<li>Everyone will receive a credit of at least $2, while 1,000 members will receive credits of $5, $10, $25, $100, $500, or even $1,000

<li>We'll send you your very own top-secret code, and in order to uncover its value, you'll need to enter it on ZekeZoo</ul>

                                            </div>

                                        </td>

                                        <td style="padding-left: 10px;">

                                            <h3>

                                                Fine Print

                                            </h3>

                                            <a href="javascript: void(0);" id="otherGuidelines">Other guidelines apply</a>

                                            <div>

                                                Limit 1 per person.  Can't be purchased as a gift.  No expiration date.  Can't be purchased using ZekeZoo credit.  Within 12 hours after the deal ends, you'll receive an email with a unique promo code.  Enter the promo on ZekeZoo.com and your credit will appear in your account.

                                                

                                            </div>

                                        </td>

                                    </tr>

                                </table>

                            </div>

                            <div id="aboutCompany">

                                <h3>About ZekeZoo</h3>

                                <div>Here at ZekeZoo, we’re committed to bringing you fresh deals daily. We offer one spectacular deal a day, and each and every one can be redeemed online and nationwide. Oh, and once you’ve purchased a deal, it’s yours no matter how many other people buy it. Forget local, forget tipping points. You like it, you buy it, it’s yours. Easy as that.</div>

                            </div>

                            <div id="shopAt">

                                <h3>For more, visit <a href="http://ZekeZoo.com/" class="green">ZekeZoo.com</a></h3>

                                <div>

                                    <img src="http://dealpulp.com/img/store/0/0/5_1302014042.jpg" />

                                </div>

                            </div></td>

                        <td class="right">

                            <div id="shareThis"><div id="inviteFriendTxt" style="text-align: left; padding-left: 0px;"><strong>Earn ZekeZoo Credit Two Ways</strong><img src="/images/shareIcon.png" style="vertical-align:super"></div><div style="font-size: 12px; text-align: left; margin-bottom: 10px;">(but <a href="/signup">sign in</a>, first!)</div><strong>1. Share this deal</strong> <a href="/info/referral" style="font-size:12px;">(details)</a><div style="padding:5px 0px;"><table cellspacing="0" cellpadding="0"><tr><td><a name="fb_share" type="box_count" share_url="http://ZekeZoo.com/deal/ZekeZoo.com/110" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></td><td><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://ZekeZoo.com/deal/ZekeZoo.com/110" data-text="Orange You Lucky?: $1 for a $2, $5, $10, $25, $100, $500, or $1,000 ZekeZoo Credit" data-count="vertical" data-via="ZekeZoo">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></td><td><a href="/importContacts.php?c=share" class="shareEmail"></a>

            </td></tr></table></div><strong>2. Invite your friends</strong> <a href="/info/referral" style="font-size:12px;">(details)</a></div><div id="tomorrowDeal"><h3>Wednesday's Deal </h3><div style="height:165px;"><a href="/discussion/98_106"><img style="position: absolute; left: 2px;" src="http://dealpulp.com/img/deal/0/0/106_0_1301953105.png"></div><div><a href="/discussion/98_106" style="font-size:12px;">Guess this deal and win a $20 credit!</a></div></div>

            <div id="emailSubBox">

                <div class="items">

                    <div id="emailSub" class="item">

                        <strong>Get daily deals in your inbox!</strong>

                        <form action="/subscribeEmail.php" method="post" id="emailSubForm">

                            <input type="text" name="email" value="email address" id="subscribeText" style="width:165px; color: #ccc; font-size: 17px;" />

                            <input type="submit" value="" id="subscribeButton" class="" style="width: 40px; min-width: 0px;">

                            <input type="hidden" value="ZekeZoo" name="uri"/><input type="hidden" name="loc" value="en_US"/>

                            <input type ="hidden" name="request_from" value="home">

                        </form> 

                        <div id="emailSubError" style="width: 214px; line-height: 14px; font-size: 12px; margin-top: 2px;">Error Message</div>

                        

                    </div>

                    <div id="emailSub" class="item">

                        <strong>To sign in, create a password!</strong>

                        <form action="/passwordSubscribe.php" method="post" id="passwordSubForm">

                            <input type="password" name="password" value="" id="passwordText" title="password" style="width:165px; color: #000; font-weight:bold; font-size: 17px;" />

                            <input type="submit" value="OK" id="passwordButton" class="button" style="width: 36px; min-width: 0px;">

                            <input type="hidden" value="ZekeZoo" name="uri"/><input type="hidden" name="loc" value="en_US"/>

                            <input type="hidden" value="" name="subscribeEmailId" id="subscribeEmailId">

                        </form> 

                        <div id="passwordSubError" style="width: 214px; line-height: 14px; font-size: 12px; margin-top: 8px;">Error Message</div>

                        

                    </div>

                </div>

            </div>

            

            <div id="giftCardPromo"><a href = "/giftcard"><img style="margin-top: 5px;" src="http://dealpulp.com/images/giftCardButton.png"></a><h3 style="margin-top: 5px; margin-bottom: 2px;">Give a ZekeZoo Gift Card</h3><p style="margin: 0px;">Buy one now, and we'll give you a ZekeZoo credit worth 10% of your gift card purchase!</p></div><div id="fbLikBox" style="width:220px; height:230px;">

            

            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FZekeZoo%2F125038494225075&amp;width=240&amp;colorscheme=light&amp;connections=8&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:255px;" allowTransparency="true"></iframe></div></td>

                    </tr>

                </table></div>

<input type="hidden" id="log" value="0">            </div> <!-- content -->

            

            <div id="footer">

                <table width="100%">

                    <tr>

                        <td width="100">

                            <h3>ZekeZoo</h3>

                                <a href="/info/about">About Us</a><br />

                                <a href="/info/contact">Contact Us</a><br />

                                <a href="/info/learn">How It Works</a><br />

                                <a href="/info/faq">FAQ</a><br />

                                <a href="/info/press">Press Crate</A><br>

                                <a href="/info/terms">Terms &amp; Conditions</a><br />

                                <a href="/info/privacy">Privacy Policy</a><br />

                                <a href="/info/jobs">Join the ZekeZoo Crew</a><br />

                        </td>

                        <td width="150">

                            <h3>Make Money</h3>

                            

                            <a href="/info/affiliate">Become an Affiliate</a><br />

                            Share our deals across the web and we'll pay you 25% commission on the sales you generate. Today's deal will earn you: $0.25 a sale.  

                            <br><br>

                            <a href="/widgets.php">Widgets</a><br>

                        </td>

                        <td width="150">

                            <h3>For Your Business</h3>

                            <div>

                                <a href="/info/biz">Run a Deal on ZekeZoo</a><br />

                                Spread the word about your business and attract new

customers by offering a fabulous daily deal on ZekeZoo

                            </div>

                        </td>

                        <td width="50">

                            <h3>Links</h3>

                            <!--a href="http://ZekeZoo.tumblr.com/">Blog</a><br /-->

                            <a href="http://feeds.feedburner.com/ZekeZoo">RSS</a> | <a href="/rss/">XML</a><br />

                            <a href="http://www.facebook.com/ZekeZoo">Facebook</a><br />

                            <a href="http://twitter.com/ZekeZoo">Twitter</a><br />

                            <a href="http://ZekeZoo.tumblr.com/">Blog</a><br />

                        </td>

                    </tr>

                </table>

                <div style="margin-top: 15px;">   

                    &copy; 2011 ZekeZoo

                </div>

            </div> <!-- footer -->

        </div> <!-- main -->

        

                    

            <script type="text/javascript">

            

                var _gaq = _gaq || [];

                _gaq.push(['_setAccount', 'UA-348184-19']);

                _gaq.push(['_trackPageview']);

                

                (function() {

                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

                })();

            

            </script>

                        <div id="dialog" class="dialog">

                <div class="dialogContent" style="width: 560px; height: 100%;">

                    <div class="items">

                        <div class="item">

                            <h1>ZekeZoo brings you the freshest and finest deals day after day.  Our deals are:</h1>

                            <ul>

                                <li>Exclusively redeemable online</li>

                                <li>Available nationwide</li>

                                <li>Delivered to your inbox daily when you sign up below ...</li>

                            </ul>

                            <p>

                                <form id="subscribeEmailDialog" method="POST" action="/subscribeEmail.php">

                                    <input type="text" placeholder=" email address" name="email" id="emailInputDialog" class="validate[required,email,ajax[ajaxUser]]" style="float:left; color: #ccc;">

                                    <input type="submit" value="subscribe" class="button" id="emailSubscribeButton">

                                    <input type="hidden" name="request_from" value="dialog">

                                </form>

                                <div class="clear"></div>

                                <div id="emailDialogError">Error Message</div>

                                <img src="/images/juicer.jpg?v=9" id="juicer2">

                            </p>

                        </div>

                        <div class="item">

                            <h1>You're almost there!</h1>

                            <p>We just shot you an email to confirm your subscription.  Open that up, click the confirmation link, and you'll start getting major deals delivered to your inbox day after day.</p>

                            <img src="/images/oranges.jpg?v=9" id="oranges">

                            <p style="font-size: 16px; padding-bottom: 0px; margin-top: 21px; margin-bottom: 0px; font-weight:normal;">You now have your very own ZekeZoo account!  Your temporary password is:<span id="tmpPasswd"></span></p>

                            <p style="font-size: 13px; padding-bottom: 0px; margin-top: 21px; margin-bottom: 0px; font-weight:normal;">You can create a new password by entering it here: </p>

                            <form id="passwordEmailDialog" method="POST" action="/passwordSubscribe.php">

                                <input type="password" name="password" id="passwordInputDialog" value="" title="password" class="validate[required,email,ajax[ajaxUser]]">

                                <input type="submit" value="sign in" class="button" id="passwordSubscribeButton">

                                <input type="hidden" value="" name="subscribeEmailId" id="subscribeEmailIdDialog">

                            </form>

                            <div class="clear"></div>

                            <div id="passwordDialogError">Error Message</div>

                            

                        </div>

                    </div>

                </div>

            </div>

            

            <div id="otherGuidelinesDialog" class="dialog">

                <div class="dialogContent">

                    <div>

                        <h1 style="font-size: 22px;">Unless otherwise noted in the Fine Print, the following guidelines apply to each and every deal:</h1>

                        <ul style="width: 440px; margin-top: 15px;">

                        <li>No cash value. Not valid for cash back.</li>

                <li>Tax and shipping fees are not covered.</li>

                <li>Entire value must be used on a single online order.</li>

                <li>Only one ZekeZoo promo code can be used per order.</li>

                <li>Can't be combined with other special offers, discounts, or promo codes.</li>

                <li>All ZekeZoo Terms & Conditions apply.</li>                        </ul>

                    </div>

                </div>

            </div>

            <div id="helpCcvDialog" class="dialog">

                <div class="dialogContent">

                    <div style="padding-right: 10px;">

                        <h1 style="font-size: 20px;">What's a security code and where do I find it?</h1>

                        <h2 style="font-size: 14px; font-weight: bold; margin-bottom: 0px;">We ask for your security code, also known as a credit card verification code or CCV, as an added security precaution.  We don't store your security code in our system.</h2><br>

                        <h2 style="font-size: 14px; font-weight: bold; margin-bottom: 0px;">Visa, Mastercard, and Discover</h2>

                        <p style="font-size: 13px; font-weight: normal; margin-top: 0px; width: 100%;">You'll find your security code on the back of your card in the signature panel.  It's the three-digit non-embossed number immediately following your account number.</p>

                        <img src="/images/visa.png" style="margin: 0 auto; left: 50%; margin-left: -82px; position: relative;">

                        <h2 style="font-size: 14px; font-weight: bold; margin-bottom: 0px;">American Express</h2>

                        <p style="font-size: 13px; font-weight: normal;  margin-top: 0px; width: 100%;">You'll find your security code on the front of your card.  It's the four-digit non-embossed number printed above your account number.</p>

                        <img src="/images/ae.png" style="margin: 0 auto; position: relative; left: 50%; margin-left: -170px;">

                        <div style="text-align: center; margin-top: 10px;"><a href="javascript:void(0);" class="green" id="helpCcvClose" style="font-size: 14px;">Close</a></div>

                    </div>

                </div>

            </div>

            

            <div id="giftSendDialog" class="dialog">

                <div class="dialogContent" style="height: 360px;">

                    <div>

                        <h1 style="font-size: 22px; text-align: center;">Send a Gift</h1>

                        <div style="margin: 0 auto; text-align: center; border-bottom: 1px solid #ccc; height: 30px;">Fill out this form to send your gift.</div>

                        <form id="sendAGiftForm" action="/sendGift.php" method="post">

                        <table>

                            <tr>

                                <td>To: <span style="font-size: 11px;">(name you want to be displayed)</span><br><input type="text" name="to" class="validate[required]" id="sendAGiftTo" tabindex="1"></td>

                                <td  rowspan="4">Message: (optional) <span id="numCharactersLeftSend">198</span> characters left<br><textarea tabindex="4" style="width:100%; height: 181px; margin:0px;" name="message" id="sendMessage" >Looks like somebody sent you a gift from ZekeZoo!  Whenever you're ready to redeem it or if you'd like to save it in your own ZekeZoo account, just follow the link below.</textarea></td>

                            </tr>

                            <tr>

                                <td>From: <span style="font-size: 11px;">(name you want to be displayed)</span><br><input tabindex="2" type="text" name="from" class="validate[required]" id="sendAGiftFrom"></td>

                            </tr>

                            <tr>

                                <td><input type="radio" name="delivery" value="0" checked="checked"> Email it to:<br><input tabindex="3" type="text" name="email" class="validate[email]" id="sendAGiftEmail"></td>

                            </tr>

                            <tr>

                                <td style="height:  30px;">

                                    <input type="radio" name="delivery" value="1"> Email it to me!

                                </td>

                            </tr>

                            <tr>

                                <td style="vertical-align: bottom; height: 35px;"><input type="submit" value="send" class="button" id="sendAGiftButton" tabindex="5"></td>

                            </tr>

                            <tr>

                                <td style="color: red; font-weight: bold; height: 25px;" colspan="2"><span id="sendAGiftError" style="display: none;">Error</span></td>

                            </tr>

                        </table>

                            <input type="hidden" id="giftId" value="0" name="giftId">

                        </form>

                    </div>

                </div>

            </div>

            

            <div id="giftPrintDialog" class="dialog">

                <div class="dialogContent" style="height:  240px;">

                    <div>

                        <h1 style="font-size: 22px; text-align: center;">Print a Gift</h1>

                        <div style="margin: 0 auto; text-align: center; border-bottom: 1px solid #ccc; height: 30px;">Fill out this form to print your gift.</div>

                        <form id="printAGiftForm" action="/printAGift.php" method="post">

                        <table>

                            <tr>

                                <td>To: <span style="font-size: 11px;">(name you want to be displayed)</span><br><input type="text" name="to" tabindex="1"></td>

                                <td  rowspan="2">Message: (optional) <span id="numCharactersLeftPrint">258</span> characters left<br><textarea tabindex="3" style="width:100%; height: 83px; margin:0px;" name="message" id="printMessage">Looks like somebody sent you a gift from ZekeZoo!  Whenever you're ready to redeem it, just use the code below.</textarea></td>

                            </tr>

                            <tr>

                                <td>From: <span style="font-size: 11px;">(name you want to be displayed)</span><br><input type="text" name="from" tabindex="2"></td>

                            </tr>

                            <tr>

                                <td style="vertical-align: bottom; height: 35px;"><input type="submit" value="print" class="button" tabindex="4"></td>

                            </tr>

                        </table>

                        <input type="hidden" id="giftPrintId" value="0" name="giftId">

                        </form>

                    </div>

                </div>

            </div>

            

            <div id="giftPreview" class="dialog">

                <div class="dialogContent" style="height: 580px; width: 465px">

                    <div>

                        <img src="/images/giftPreview.jpg" style="margin-top:  10px;">

                        <div style="text-align: center; margin-top: 10px;"><a href="javascript:void(0);" class="green" id="giftPreviewClose" style="font-size: 14px;">Close</a></div>

                    </div>

                </div>

            </div>

            

            

                <div id="multiplePricesDialog" class="dialog" style="padding: 10px;">

                    <div class="dialogContent">

                        <h1 style="padding-left: 10px;">Choose Your Deal:</h1>

                        <div style="overflow-x: hidden; overflow-y: auto;">

                            <table style="width: 100%;" cellpadding="0" cellspacing="0"></table>

                        </div>

                    </div>

                    <div class="dialog-arrow-border"></div>

                    <div class="dialog-arrow"></div>

                </div>

</body>
</html>

