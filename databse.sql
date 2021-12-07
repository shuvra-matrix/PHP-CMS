-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.byetcluster.com
-- Generation Time: Dec 07, 2021 at 09:58 AM
-- Server version: 5.7.35-38
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28817989_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(21, 'Pets'),
(20, 'Business'),
(19, 'Health'),
(18, 'Food'),
(22, 'Gaming'),
(23, 'Travel'),
(24, 'Computer and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(6) NOT NULL,
  `comment_post_id` int(6) NOT NULL,
  `comment_author` varchar(200) NOT NULL,
  `comment_email` varchar(200) NOT NULL,
  `comment_content` mediumtext NOT NULL,
  `comment_status` varchar(10) NOT NULL DEFAULT 'denied',
  `comment_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(8, 52, 'Shuvra', 'shuvra232@gmail.com', 'Good', 'approved', '2021-09-19'),
(12, 52, 'Babin', 'shuvrachakrabarty97@gmail.com', 'nice', 'approved', '2021-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category_id` int(10) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_comment_counts` int(11) NOT NULL DEFAULT '0',
  `post_content` mediumtext NOT NULL,
  `post_image` text NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_tags` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_views` int(100) NOT NULL DEFAULT '0',
  `post_author_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_author`, `post_comment_counts`, `post_content`, `post_image`, `post_status`, `post_tags`, `post_title`, `post_date`, `post_views`, `post_author_id`) VALUES
(52, 21, 'Aritra', 0, '<p>(<a href=\"http://www.newsusaadvantage.com/\">NewsUSA</a>)<img src=\"https://trackit.newsusa.com/track.gif?id=36669\" alt=\"\"> â€“ Making healthy food choices can be overwhelming, especially if money is tight. Good nutrition is at the core of good health and reducing risk of cardiovascular disease, such as heart disease and stroke. \"Eating delicious nourishing meals on a budget is possible, especially with a few key tips to make it simple,\" says Bridget Wojciak, director of nutrition and dietetics at Kroger Health, a national sponsor of the American Heart Associationâ€™s Healthy for Good initiative. Planning ahead can help your dollar go further.The American Heart Association has developed tips to help families shop, eat and cook healthier meals on a budget.</p><ul><li>Make a list. Plan your menu ahead of time so you spend your money on what you really need. Try theme nights, such as Meat-free Monday or Taco Tuesday.</li><li>Go frozen. Fresh fruits and vegetables are frozen at their peak ripeness, so theyâ€™re as tasty as they are fresh, wonâ€™t spoil, and are often cheaper.</li><li>Be sale savvy. Stock up on staple foods such as low-sodium canned sauce and whole wheat boxed pasta when they go on sale. Use store rewards and coupons for even greater savings.</li></ul><p>Hereâ€™s one example of a tasty, healthy meal the whole family will love:<strong>Creamy Chicken Broccoli Casserole with Whole-Wheat Pasta</strong><br>Serves 6, costs about $2 per serving</p><ul><li>13.25 to 16 ounces whole-wheat spiral-shaped pasta</li><li>1 1/2 pounds boneless, skinless chicken breasts, all visible fat discarded, cut into 1-inch pieces</li><li>3/4 teaspoon salt-free Italian seasoning blend or 3/4 teaspoon dried thyme</li><li>16 ounces frozen broccoli, thawed</li><li>1 15.25-ounce can, no salt added, whole-kernel corn, rinsed and drained, or 16 ounces frozen whole kernel corn, thawed</li><li>8 ounces fat-free cream cheese, softened</li><li>1 cup fat-free, plain yogurt</li></ul><p>1. Preheat the oven to 350 degree F. In a large pot, cook the pasta according to package directions, omitting the salt. Drain well in a colander. Return the pasta to the pot. Cover and set aside.2. In a large skillet, cook the chicken over high heat for 5 minutes, or until no longer pink in the center, stirring frequently. Reduce the heat to low. Stir in the Italian seasoning blend, broccoli, corn, cream cheese, yogurt. Cook for 5 minutes, or until the cream cheese has melted.3. Transfer the chicken mixture to the pot with the cooked pasta, stirring to mix well.4. Transfer to a 13 x 9 x 2-inch baking dish. Bake, covered with aluminum foil, for 15 minutes, or until heated through.Visit <a href=\"http://heart.org/healthyforgood\">heart.org/healthyforgood</a> for more information about planning healthy, delicious meals on a budget, and to download the American Heart Associationâ€™s \"10 for Under $10\" recipe booklet.Nutrition Analysis (per serving):<br>Calories 486Total Fat 4.5 g<br>Saturated Fat 1.0 g<br>Trans Fat 0.0 g<br>Polyunsaturated Fat 1.0 g<br>Monounsaturated Fat 1.0 g<br>Cholesterol 80 mg<br>Sodium 456 mg<br>Total Carbohydrate 68 g<br>Dietary Fiber 11 g<br>Sugars 11 g<br>Protein 45 g</p>', 'rachel-park-hrlvr2ZlUNk-unsplash.jpg', 'Publish', 'food,health', 'Healthy Eating Adds Up to a Healthy Heart', '2021-09-18', 0, 24),
(53, 19, 'Jorge', 0, '<p>(<a href=\"http://www.newsusaadvantage.com/\">NewsUSA</a>)<img src=\"https://trackit.newsusa.com/track.gif?id=36539\" alt=\"\"> â€“ The latest fallout from the coronavirus pandemic? Food safety and security now rank among consumersâ€™ top global concerns.&nbsp;According to a new study from the <a href=\"https://gfsc.mars.com/\">Mars Global Food Safety Center</a>, 73 percent of the adults surveyed last month in the United States, China and the United Kingdom said they believe COVID-19 will wind up adversely impacting the viability â€” and, yes, safety â€” of the global food supply chain many of us have come to expect. And almost as many (71 percent) think peopleâ€™s access to food will consequently be negatively affected around the world.&nbsp;Doubt it? \"New food safety threats, like those posed by COVID-19, are constantly emerging through a combination of factors including global warming, increased globalization of trade, and changes in agriculture practices and food production,\" said David Crean, chief science officer at <a href=\"https://www.mars.com/\">Mars</a>, which strives to generate new scientific and technological insights to raise the bar on food safety.&nbsp;</p>', 'WSFoodSafetyIGC (1) (1).png', 'Publish', 'food,health,covid', 'COVID-19 Elevating Concerns About Food Safety and Security', '2021-09-18', 0, 24),
(54, 20, ' Kurt A Tasche', 0, '<p>Are you interested in learning about managing your reputation? Have you been looking for helpful and reliable information? Well, this article will make sure you get some solid suggestions. It will help you figure out how to better manage your reputation.</p><p>Posting information on social media sites is important to your business\'s reputation. You should post several times a week at the very least to effectively run a marketing campaign. If you find that posting on social media sites is overwhelming, consider hiring an assistant to make your posts for you.</p><p>When people take the time to say something about your business, it is important that you are courteous enough to respond. While you may be a very busy person, it shows your audience that you actually care about them and what they have to say. This is vital if you want to maintain a steady customer base.</p><p>When you speak with your audience, make sure that you do so in a conversational tone. People do not like the idea of business owners always speaking to them with marketing in their minds. While you do want to make a sale, you should never make a customer feel like this is your only concern.</p><p>Be thankful. If someone leaves a good review about your company, send them a personal message and thank them for their feedback. If possible, send your customer a coupon for a certain percent off on their next purchase as a thank you. If this is not possible, sincerely thank them for their feedback.</p><p>If you are going to use anyone\'s ideas, you should always make sure to give them credit for that. Everyone out there can learn a little from others, so giving due credit will show people that you don\'t think you are above that. This is a great way to earn their respect.</p><p>If you own a business, treat your employees respectfully. Otherwise, you may develop a negative reputation as a business owner. Some people will not give you business because of it.</p><p>Counteract any negative online content on your company by contacting its creator. If there is ever any negative content when you do a search of your company, try contacting the reviewer, blogger or whoever posted it as soon as possible. Ask them if there\'s anything you can do change their negative sentiment to a positive one. If they are unwilling to do so, write a comment(if possible) with your side of the story.</p><p>Pay attention to the reputation your business has offline. Your offline reputation will make its way into the online world. If negative content on your company becomes a trend, you need to know why. Treat all your clients and customers well and urge the happy ones to leave positive reviews on sites like Yelp.</p><p>As you can see, good information is easy to locate when it is presented in an informative article. It is also simple to use this information when you need to deal with reputation management. Have patience about this so that it really pays off.</p><p>Kurt Tasche is an internet entrepreneur who writes articles on internet marketing tips, ways to make money online and personal development. You can read more articles like this on his blog at: <a href=\"https://www.kurttasche.com/\">https://www.kurttasche.com</a></p><p>Article Source: <a href=\"https://ezinearticles.com/expert/Kurt_A_Tasche/254929\">https://EzineArticles.com/expert/Kurt_A_Tasche/254929</a></p><p><br><br>Article Source: http://EzineArticles.com/10513476</p>', 'riccardo-annandale-7e2pe9wjL9M-unsplash.jpg', 'Publish', 'business', 'Reputation Management - Do You Know Your How Your Business Is Perceived?', '2021-09-18', 0, 24),
(55, 21, 'Aditi Tripathi', 0, '<p>Dog is a fantastic pet animal and they love you in many ways. If you have a dog, then you can notice that he shows immense affection and faith towards you. When you need someone in your bad days, then they will always be there for you in every situation to cuddle and support you emotionally.</p><p>You can reciprocate the feeling you have through his love and care for the pet. However, it is not a piece of cake, dog parenting includes a well-balanced diet, proper grooming session, regular vet checkup, plenty of exercises and spending some quality time with him.</p><p><strong>Best Dog Foods Affects Your Pet Energy and Overall Growth of Your Pooch</strong></p><p>Apart from the different aspect of dog caring, diet keeps particular space. Reason being whatever, your feline friend eats; it directly affects his energy level and overall growth. Every dog needs some different and unique dietary needs as per his size, weight, type and choice.</p><p><strong>Providing Quality Meal with Balanced Diet is Priority</strong></p><p>Being a dog owner, it is your priority to provide your pet with the complete food in equal quantity. To keep your pup healthy and free from different dog disease it is compulsory to feed him only the best dog food. You can buy some of the best quality dog food and other pet products through online pet stores.</p><p><strong>Find Special Organic and Natural Food</strong></p><p>However, many pet stores are selling products locally, and some people also buy things in the supermarket. But, you can get some fantastic deals and discount when you go to the online shopping. The best part of order dog food online is that you get options that local stores or supermarket cannot bring.</p><p>It is the fact that online stores offer some special organic and natural foods and other products that lots of physical stores find unprofitable because of their proper maintenance.</p><p><strong>Benefits to Buy Dog Food Online</strong></p><p>When you go online pet supplier, you can go to multiple stores and compares available brands and cost as well with a few clicks only. When we talk about local pet stores, I must say that here you have to settle what is available, even if you are getting that quality what you are looking for.</p><p><strong>Reputed Brands that the Leading the Pet Food Market</strong></p><p>There are some brands available online including Royal Canin, Pedigree, Drools, Jerhigh and many more. All these are famous and reputed brands for manufacturing differing pet food.</p><p>These companies are leading the pet food market. If you are looking to feed your pet only quality meal, then no need to get worried as these products are made of high-quality ingredients and naturally balanced.</p><p><strong>Most Convenience and Swiftness Way</strong></p><p>Shopping on the web has advantages mainly for those people who engaged in work and are not able to go to market. In the present busy routine, you like to purchase a meal for your pooch on the web; it gives the most convenience and swiftness for any dog owner.</p><p>At last, but not the least</p><p>I used to take dog food online and recently tried the products from another website for my lovely pet. That is why I tried to present everything that can help you feed your pup quality food.</p><p>If you are looking for a perfect platform where you can buy all kinds of dog food, cat food, dog toy, quality grooming products and other pet products, then they are a suitable option for you.</p><p>4PetNeeds is best pet food online supplies store which provides best and branded foods online at lowest price. For more information about quality <a href=\"https://www.4petneeds.com/dog/food\">dog food online</a> &amp; other Dog Products Online shopping or any particular cat, dog and other pet supplies, you can visit our official website 4PetNeeds.com. We offer a wide selection of dry Dog food, wet dog foods, treats and snacks for small and large breed dogs. Our premium dog food brands include Royal Canin, Pedigree, Drools, Purepet, SmartHeart. Get free shipping and Cash on Delivery.</p><p>Article Source: <a href=\"https://ezinearticles.com/expert/Aditi_Tripathi/2562164\">https://EzineArticles.com/expert/Aditi_Tripathi/2562164</a></p><p><br><br>Article Source: http://EzineArticles.com/9979498</p>', 'marliese-streefland-2l0CWTpcChI-unsplash.jpg', 'Publish', 'pet,dog', 'What Are the Positive Aspects of Buying Dog Food Online in Current Scenario?', '2021-09-18', 0, 24),
(56, 22, 'Shalini M', 0, '<p>Today, you can find a lot of games that can be played online. However, browser-based games are the most popular, especially among kids. The good thing about these games is that they don\'t require any type of installation or high-end hardware. Aside from this, they offer a lot of other advantages as well. In this article, we are going to take a look at some major advantages and disadvantages of these games. Read on to find out more.</p><p>Nowadays, you can find these products in a lot of genres and locations. Besides, they can be found on all topics. Also, they support all of popular web browsers. Based on the claim, they can range between role playing, shooter and strategy based titles. Some of these can be played forever. Let\'s take a look at the advantages of these games.</p><p><strong>Advantages of Browser-Based Games</strong></p><p>First of all, the primary advantages of these games is that they can be played right in the browser, which means you don\'t need to download and install them first. So, they can save you a good deal of time.</p><p>All you need to do is install the web browser and you are good to go. You can play them whether you are in office, school or an internet cafÃ©. And the great thing is that you can play them on your mobile phones as well as long as you are connected to the Internet.</p><p>Another advantage is associated with the price of these products. The good news is that most of these titles are free to play. Therefore, you can check out a large variety of titles and decide on ones that you think are good fit for you.</p><p>Another reason for the increasing popularity of these games is the community factor. As a matter of fact, this is the main reason many people play these titles. Since joint actions are pre-planned before execution, players talk about it before making their next moves.</p><p><strong>Disadvantages</strong></p><p>Since browser games are online games, you can\'t play them unless you are connected to the Internet. While playing, if you lose connection, you may lose your progress and you will have to start over. And this may be annoying for most players.</p><p>And this progress loss requires you to stay connected more often. Not all of us can go online all day long. So, this is another major disadvantage of these products. Aside from this, if you don\'t have a fast internet connection, you can\'t play titles that require a fast connection. Some of the titles may even lag if your connection speed drops.</p><p>Another main disadvantage of these games is that most of them can\'t compete with PC games that require installation. In other words, they have lower quality graphics. Therefore, you can\'t enjoy detailed graphics and sharp image quality. However, you will be able to enjoy future games that offer much better graphics.</p><p>Long story short, this was an introduction to browser games and their advantages and disadvantages. If you like these games, you can search on Google to find tons of titles. Hope this helps.</p><p>If you are looking for some great <a href=\"https://browsermmorpg.com/\">browser games</a>, we suggest that you check out <a href=\"https://browsermmorpg.com/\">Browser Mmorpg</a> for more info.</p><p>Article Source: <a href=\"https://ezinearticles.com/expert/Shalini_M/2609777\">https://EzineArticles.com/expert/Shalini_M/2609777</a></p><p><br><br>Article Source: http://EzineArticles.com/10241627</p>', 'fabio-silva-nmTm7knUnqs-unsplash.jpg', 'Publish', 'gaming,', 'The Advantages and Disadvantages of Browser Games', '2021-09-18', 0, 24),
(57, 23, 'Sunil Kumar', 0, '<p>The best education and knowledge that we ever receive is through travelling to various places. The impulse and will to travel is considered to be the most commendable sign of life. It\'s never a matter of money but a matter of courage that renders you with a soul filled in contentment, serenity and wittiness. India has always been the most preferable destinations to travel to. With the lush green mountains and serene nature, it never fails to appeal you. Incredible India Tour provides travelers with an essence of culture, history and natural beauty as each and every city in the region is instilled with enchanting beauty rendered to it by the nature.</p><p>The Golden Triangle</p><p>If you\'re one of the people who are intrigued by architectural antiquities, cultural essence and bustling crowd, then the golden triangle is the ideal place for you. Being one of the best Travel Destinations In India, the triangle features three best cities of the nation i.e. Delhi, Agra and Jaipur. The places offer some of the most enchanting travel experiences filled with archeological feels and heritage touch.</p><p>Rajasthan, The Desert State</p><p>Another astonishing travel destination in India is the state filled with royal forts and extravagant palaces. Rajasthan is one of the most visited places in India due to its flamboyant cultural essence and rich heritage. Also, the state is quite huge and you can enjoy multiple things at once. While the city of Jaisalmer offers massive golden forts, Pushkar is highlighted as the holy city of the state. Incredible India Tour is incomplete without a visit to this alluring region.<br>â€¢ Ranthambore National Park<br>â€¢ Forts of Jaisalmer<br>â€¢ Archeological monuments of Jodhpur<br>â€¢ Mehrangarh Fort, Jodhpur<br>â€¢ Romantic Lakes of Udaipur</p><p>The Tropical State, Kerala</p><p>While the Northern part of India is quite busy and populated, the southern region offers peace, contentment and serenity at its best. Kerala is another must-visit region on your Incredible India Tour. A tropical, lush-green and appealing place filled with extravagant natural beauty, Kerala never fails to appeal the tourists.<br>â€¢ Take a Cruise Ride along the Backwaters to Rice Fields<br>â€¢ Gorgeous Beaches<br>â€¢ Spice plantations<br>â€¢ Wildlife Sanctuaries<br>â€¢ Tea plantations</p><p>The Indian Himalayan Range</p><p>Away from the scorching heat and bustling crowd lies the cool mountain range offering spiritual serenity and peace. You must get hold of a reputed travel company in India and plan a visit to the Himalayas. Also, you will get to visit a wide number of places like Manali and Dharamshala. Amidst the tranquil mountain flora and cool breeze emerging from the peak, you will definitely find yourself intrigued by this place. Don\'t forget the Tibetan monasteries and ancient palaces that lie on your way to the Himalayas.</p><p>sanju kumar, India is the wonderful place on the Earth, there are so many places in India to visit every month of the year. you can visit Incredible India Tour with Lepassage to India, this is a best tour and travel company of India. <a href=\"https://www.lepassagetoindia.com/experience-featured-itineraries-detail.php?id=11\">https://www.lepassagetoindia.com/experience-featured-itineraries-detail.php?id=11</a></p><p>Article Source: <a href=\"https://ezinearticles.com/expert/Sunil_Kumar/2552260\">https://EzineArticles.com/expert/Sunil_Kumar/2552260</a></p><p><br><br>Article Source: http://EzineArticles.com/9983920</p>', 'bhupesh-talwar--lk96OJC_qc-unsplash.jpg', 'Publish', 'travel', 'Visit Top Most Adventure Travel Destinations In India', '2021-09-18', 0, 24),
(58, 24, 'Lokesh R', 0, '<p>AngularJS, developed by Google, is an open source structural JavaScript framework. It is the best used for building web apps as it is dynamic, and helps create Single Page Applications by just using HTML, CSS and JavaScript.</p><p>Angular is extensively used for developing responsive web designs that will make the web application usable with many devices.</p><p>Why is AngularJS the best and beneficial?</p><p>Developers save time as they don\'t need to code an entire application as AngularJS is derived from HTML. This lets the developer to focus on functionality. The code is testable and the code as well as the components of the code can be reused which profusely reduces work. The below are the efficient features AngularJS possesses.</p><p>Two-way data-binding:<br>The two-way Data Binding is a brilliant feature in which any change made in the view will reflect in model and vice versa for a responsive experience.</p><p>Directives:<br>These are extended HTML attributes. You can custom the directives.</p><p>Client side MVC framework:<br>For an incoming client request in AngularJS, the response is in the form of JSON data and it makes the web application manageable.</p><p>Dependency Injection:<br>The Angular injector subsystem that is available is entitled for creating components, resolving their dependencies, and as well providing them to other components as requested. By resolving dependencies the work load on the backend is predominantly reduced.</p><p>Filters:<br>You can easily define your own filter for the display of the user which can be viewed as templates, controllers or services.</p><p>Expressions:<br>Expressions will bind Angular application data to HTML elements and display the result exactly where it is located.</p><p>Scope:<br>Used to access the view value in controller. There are JavaScript functions that are bound to a particular scope.</p><p>Usecases of AngularJS:<br>AngularJS can be used where there\'s increased work load. It uses an ultimate approach where, API will be in a stateless server and UI will exchange the data with your server in JSON format, by which both ends can be decoupled.</p><p>When there are a lot of updates need to be made often and dynamically, Angular is the best. Angular paves a trouble-free way to do it than DOM manipulation frameworks can.</p><p>The Single Page Application leads to rational and maintainable way of AngularJS.</p><p>Build AngularJS Web Apps and Websites</p><p>The Guardian:<br>The Guardian is a British daily newspaper known for its design in publishing arena. UI of The Guardian website is developed as an AngularJS app.</p><p>Video Streaming Apps:<br>It suits well for apps that are especially used by millions.</p><p>Example: <strong>Youtube</strong> for <strong>PS3</strong></p><p>User-Review Applications:<br>We would definitely want to know about that something before we go for it. Be it a product we are going to buy or any movie to watch. We are very much interested in the reviews and sceptical about it. We would want to know about it to make a wise decision. There helps AngularJS with user review applications.</p><p>Example: <strong>GoodFilms</strong>, that provides reviews.</p><p>Lego:<br>We all would have heard about this. It is best known for the manufacture of Lego-brand toys, consisting mostly of interlocking plastic bricks. It uses Angular\'s single page application.</p><p>Travel Apps:<br>The dynamic features are perfectly suited for travel apps as they are very sought after.</p><p>Example: <strong>JetBlue</strong></p><p>Weather Apps:<br>Everyone would be worried if it rains all of a sudden when we are driving. But we can plan and escape from it if we behold forecasts. The weather should be updated at frequent intervals which is essential for any weather app.</p><p>Example: <strong>Weather.com</strong></p><p>User Generated Content Portals:<br>As AngularJS can handle tons of posts, projects, updates and chats every second, it is extremely compatible for portals like Freelancer.com and Upwork.com. Both use AngularJS as their basis.</p><p>Walmart:<br>Walmart, is an American multinational retail corporation that operates a chain of hypermarkets, discount department stores, and grocery stores. The amazing features and experience you receive is because of AngularJS</p><p>E Commerce and M Commerce:<br>Many leading commerce market sites are built by the use of AngularJS.</p><p>Example: <strong>Paypal</strong></p><p>Newyork times: loads of news every day but still a its a reliable website. It is definitely because of AngularJS. Here also Single page application is used.</p><p>Social Apps:<br>Every professional is on LinkedIn. It is famous with everyone as it is easy to know about a person and his/her interests. When you view a profile he/she also gets notified. LinkedIn for mobile was built with AngularJS.</p><p>With all these valuable features of AngularJS developing a smooth web application. If you want to <a href=\"http://www.ignovatesolutions.com/\">develop An AngularJS web app</a> s for your business just drop a mail through us.</p><p>Article Source: <a href=\"https://ezinearticles.com/expert/Lokesh_R/2501218\">https://EzineArticles.com/expert/Lokesh_R/2501218</a></p><p><br><br>Article Source: http://EzineArticles.com/9989953</p>', 'maik-jonietz-nZcMWOKAJrY-unsplash.jpg', 'Publish', 'cmputer,web development', 'Developing a Web Application Using Angularjs', '2021-09-18', 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text,
  `user_role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`) VALUES
(26, 'spandan', '$2y$10$2usesomecrazystrings2uwcorYTZiI.STJFL8HXh8VYBZved8n0.', 'Spandan', 'Pal', 'i.me.ronny@gmail.com', '', 'Bloger'),
(27, 'shuvra232', '$2y$10$2usesomecrazystrings2uwcorYTZiI.STJFL8HXh8VYBZved8n0.', NULL, NULL, 'shuvra232@outlook.com', NULL, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_post_id` (`comment_post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
