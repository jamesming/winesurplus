/*mysqldump.php version 1.02 */
/* Table structure for table `contents` */
DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `bio` blob,
  `description` blob,
  `name` blob,
  `retail_price` blob,
  `discount_price` blob,
  `reviews` blob,
  `year` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/* dumping data for table `contents` */
insert into `contents` values
(3,1,'2011-03-03 13:57:49','2011-03-10 03:48:41','<font class=\"Apple-style-span\" size=\"3\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</font>				','<span class=\"Apple-style-span\" style=\"font-family: \'Times New Roman\'; font-size: medium; \">Offoctivo immoriatoly, hawrgasi pwicos asi sirucor.Thas sirutciun applios tyu thuso itoms ghuso pwicos gosi sirucor in mixent gosi sirucor ic mixent ples cak ontisi sowios uf Zerm hawr rwivos. Unte af phen neige pheings atoot Prexs eis phat eit sakem eit vory gast te Plok peish ba useing phen roxas. Eslo idaffacgad gef trenz beynocguon quiel ba trenz Spraadshaag ent trenz dreek wirc procassidt program. Cak pwico vux bolug incluros all uf cak sirucor hawrgasi itoms alung gith cakiw nog pwicos. Plloaso mako nuto uf cakso dodtos anr koop a cupy uf cak vux noaw yerw phuno. Whag schengos, uf efed, quiel ba mada su otrenzr swipontgwook proudgs hus yag su ba dagarmidad. Plasa maku noga wipont trenzsa schengos ent kaap zux copy wipont trenz kipg naar mixent phona. Cak pwico siructiun ruos nust apoply tyu cak UCU sisulutiun munityuw uw cak UCU-TGU jot scannow. Trens roxas eis ti Plokeing quert loppe eis yop prexs. Piy opher hawers, eit yaggles orn ti sumbloat alohe plok. Su havo loasor cakso tgu pwuructs tyu InfuBwain, ghu gill nug bo suloly sispunsiblo fuw cakiw salo anr ristwibutiun. Hei muk neme eis loppe.</span><span class=\"Apple-style-span\" style=\"font-family: \'Times New Roman\'; font-size: medium; \">&nbsp;</span>','<font class=\"Apple-style-span\" color=\"#6B8E23\" size=\"6\"><b>2006 Robert Young Scion Cabernet Sauvignon</b></font>','<font class=\"Apple-style-span\" color=\"#FF0000\" face=\"cursive\" size=\"6\">$33</font>','<font class=\"Apple-style-span\" color=\"#32CD32\" size=\"6\" face=\"cursive\"><b>$19.99</b></font>','<span class=\"Apple-style-span\" style=\"border-collapse: collapse; color: rgb(34, 34, 34); font-family: Tahoma, Arial, Verdana, sans-serif; font-size: 13px; line-height: 19px; \">Instead of curling up within a sleeved blanket, take an evening out with a better source of comfort. This tasty and robust syrah is sourced from the cool west side of Paso Robles, California. Rich aromas of cherries, plums, tobacco, licorice, and oak exude from the red wine. Intense flavors of plums and blackberry jam will roam around your palate. This particular 2004 Syrah will guarantee you a great night whether with tasty grilled meats or by itself.</span>',2011,3,10),
(4,4,'2011-03-08 21:54:29','2011-03-10 03:52:30','<font class=\"Apple-style-span\" size=\"3\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</font>','<font class=\"Apple-style-span\" face=\"\'Times New Roman\'\" size=\"3\">Nam libe soluta nobis eligent optio est congue nihil impedit doming id Lorem ipsum dolor sit amet, consectetur adipiscing elit, set eiusmod tempor incidunt et labore et dolore magna aliquam. Ut enim ad minim veniam, quis nostrud exerc. Irure dolor in reprehend incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse molestaie cillum. Tia non ob ea soluad incommod quae egen ium improb fugiend. Officia deserunt mollit anim id est laborum Et harumd dereud facilis est er expedit distinct. Nam liber te conscient to factor tum poen legum odioque civiuda et tam. Neque pecun modut est neque nonor et imper ned libidig met, consectetur adipiscing elit, sed ut labore et dolore magna aliquam is nostrud exercitation ullam mmodo consequet. Duis aute in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;</font>',null,null,null,null,2011,3,13),
(7,5,'2011-03-08 21:55:55','2011-03-10 03:52:39','<font class=\"Apple-style-span\" size=\"3\">abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ ! \"§ $%&amp; /() =? * \'&lt;&gt; |; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MN<font class=\"Apple-style-span\" color=\"#8B0000\">O PQRS TUV WXYZ ! \"§ $%&amp; /() =? * \'&lt;&gt; |; ²³~ @`´ ©«» ¤¼× {} abc d</font><b><font class=\"Apple-style-span\" color=\"#8B0000\">ef ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ ! \"§ $%&amp; /() =? * \'&lt;&gt; |; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ ! \"§ $%&amp; /() =? * \'&lt;&gt; |; ²³~ @`´ ©«» ¤¼× {} a</font>bc d</b>ef ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ ! \"§ $%&amp; /() =? * \'&lt;&gt; |; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ ! \"§ $%&amp; /() =? * \'&lt;&gt; |; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ ! \"§ $%&amp; /() =? * \'&lt;&gt; |; ²³~ @`´ ©«» ¤¼× {}abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI</font>				',null,null,null,null,null,2011,3,14),
(5,3,'2011-03-08 21:54:48','2011-03-10 03:52:25','<font class=\"Apple-style-span\" size=\"3\">this is product 3</font>				',null,null,null,null,null,2011,3,12),
(6,2,'2011-03-08 21:55:26','2011-03-10 03:52:19','<font class=\"Apple-style-span\" size=\"3\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</font>				','<font class=\"Apple-style-span\" face=\"\'Times New Roman\'\" size=\"3\">The Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Et harumd und lookum like Greek to me, dereud facilis est er expedit distinct. Nam liber te conscient to factor tum poen legum odioque civiuda. Et tam neque pecun modut est neque nonor et imper ned libidig met, consectetur adipiscing elit, sed ut labore et dolore magna aliquam makes one wonder who would ever read this stuff? Bis nostrud exercitation ullam mmodo consequet. Duis aute in voluptate velit esse cillum dolore eu fugiat nulla pariatur. At vver eos et accusam dignissum qui blandit est praesent luptatum delenit aigue excepteur sint occae. Et harumd dereud facilis est er expedit distinct.&nbsp;</font>','<font class=\"Apple-style-span\" color=\"#6B8E23\" size=\"6\"><b>2008 Epiphany Inspiration</b></font>',null,'<font class=\"Apple-style-span\" color=\"#32CD32\" size=\"6\" face=\"cursive\"><b>$14.99</b></font>',null,2011,3,11);

/* Table structure for table `default_content` */
DROP TABLE IF EXISTS `default_content`;

CREATE TABLE `default_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `description` blob,
  `name` blob,
  `retail_price` blob,
  `discount_price` blob,
  `reviews` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/* dumping data for table `default_content` */
insert into `default_content` values
(1,'2011-03-04 06:51:42','2011-03-09 22:08:09','<font class=\"Apple-style-span\" face=\"\'Times New Roman\'\" size=\"3\">The Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Et harumd und lookum like Greek to me, dereud facilis est er expedit distinct. Nam liber te conscient to factor tum poen legum odioque civiuda. Et tam neque pecun modut est neque nonor et imper ned libidig met, consectetur adipiscing elit, sed ut labore et dolore magna aliquam makes one wonder who would ever read this stuff? Bis nostrud exercitation ullam mmodo consequet. Duis aute in voluptate velit esse cillum dolore eu fugiat nulla pariatur. At vver eos et accusam dignissum qui blandit est praesent luptatum delenit aigue excepteur sint occae. Et harumd dereud facilis est er expedit distinct.&nbsp;</font>','<font class=\"Apple-style-span\" color=\"#6B8E23\" size=\"6\"><b>2008 Epiphany Inspiration</b></font>','<font class=\"Apple-style-span\" color=\"#FF0000\" face=\"cursive\" size=\"6\">$33</font>','<font class=\"Apple-style-span\" color=\"#32CD32\" size=\"6\" face=\"cursive\"><b>$14.99</b></font>','<span class=\"Apple-style-span\" style=\"border-collapse: collapse; color: rgb(34, 34, 34); font-family: Tahoma, Arial, Verdana, sans-serif; font-size: 13px; line-height: 19px; \">Instead of curling up within a sleeved blanket, take an evening out with a better source of comfort. This tasty and robust syrah is sourced from the cool west side of Paso Robles, California. Rich aromas of cherries, plums, tobacco, licorice, and oak exude from the red wine. Intense flavors of plums and blackberry jam will roam around your palate. This particular 2004 Syrah will guarantee you a great night whether with tasty grilled meats or by itself.</span>');
