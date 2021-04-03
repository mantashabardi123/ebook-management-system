-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 07:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci NOT NULL,
  `book_pdf` text COLLATE latin1_general_ci NOT NULL,
  `book_category` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `book_type` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `book_price` decimal(6,2) NOT NULL,
  `publisherid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_pdf`, `book_category`, `book_type`, `book_price`, `publisherid`) VALUES
('098765', 'demo1', 'demo1', 'Screenshot (3).png', 'demo1', '18164-E-book management system.pdf', '', '', '325.00', 0),
('123', 'Demo', 'Demo', 'IMG-9924.jpg', 'demo', '3943-7928.pdf', '', '', '1000.00', 0),
('789', 'hello', 'mantasha', 'log3.jpg', 'hello', '80327-EH STDBOOK1.pdf', '', '', '1000.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(55) NOT NULL,
  `category_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'fantasy'),
(2, 'thriller'),
(3, 'Horror'),
(4, 'Something else here'),
(5, 'rhyme'),
(6, 'students'),
(7, 'Another action');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `srno.` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `books` int(11) NOT NULL,
  `address` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`srno.`, `email`, `name`, `phoneno`, `books`, `address`, `date`) VALUES
(1, 'mantashashabib@gmail.com', 'mantasha_bardi', 2147483647, 3, 'kalyan', '2021-03-06'),
(2, 'mantashashabib@gmail.com', 'mantasha_bardi', 2147483647, 3, 'kalyan', '2021-03-06'),
(3, 'mantashashabib3@gmail.com', 'mantasha_bardi123', 2147483647, 3, 'kalyan', '2021-03-11'),
(4, 'mantashashabib3@gmail.com', 'mantasha_bardi123', 2147483647, 3, 'kalyan', '2021-03-11'),
(5, 'taiba@gmail.com', 'taiba_kazi', 2147483647, 4, 'india', '2021-03-25'),
(6, 'taiba@gmail.com', 'taiba_kazi', 2147483647, 4, 'india', '2021-03-25'),
(7, 'taiba1@gmail.com', 'taiba_kazi', 2147483647, 5, 'india', '2021-03-17'),
(8, 'taiba1@gmail.com', 'taiba_kazi', 2147483647, 5, 'india', '2021-03-17'),
(9, 'sheesbardi@gmail.com', 'shees.bardi', 2147483647, 5, 'delhi', '2021-03-31'),
(10, 'sheesbardi@gmail.com', 'shees.bardi', 2147483647, 5, 'delhi', '2021-03-31'),
(11, 'alkamamulla123@gmail.com', 'alkama.mulla', 2147483647, 6, 'india', '2021-03-26'),
(12, 'alkamamulla123@gmail.com', 'alkama.mulla', 7977881982, 6, 'india', '2021-03-26'),
(13, '', '', 0, 0, '', '0000-00-00'),
(14, '', '', 0, 0, '', '0000-00-00'),
(15, 'inshabardi@gmail.com', 'insha.bardi', 9167048163, 4, 'navi mumbai', '2021-03-31'),
(16, 'inshabardi@gmail.com', 'insha.bardi', 9167048163, 4, 'navi mumbai', '2021-03-31'),
(17, 'inshabardi123@gmail.com', 'insha.khan', 9000000000, 4, 'seawoods', '2021-03-30'),
(18, 'taiba1@gmail.com', 'taiba_kazi', 9000000000, 6, '7', '2021-04-08'),
(19, 'taiba1@gmail.com', 'taiba_kazi', 9000000000, 6, 'india', '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '60.00', '2015-12-03 13:30:12', 'a', 'a', 'a', 'a', 'a'),
(2, 2, '60.00', '2015-12-03 13:31:12', 'b', 'b', 'b', 'b', 'b'),
(3, 3, '20.00', '2015-12-03 19:34:21', 'test', '123 test', '12121', 'test', 'test'),
(4, 1, '20.00', '2015-12-04 10:19:14', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-1-118-94924-5', '20.00', 1),
(1, '978-1-44937-019-0', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(2, '978-1-118-94924-5', '20.00', 1),
(2, '978-1-44937-019-0', '20.00', 1),
(2, '978-1-49192-706-9', '20.00', 1),
(3, '978-0-321-94786-4', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherid` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `story_title` varchar(255) NOT NULL,
  `story_content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `story_title`, `story_content`, `author`, `date_publish`) VALUES
(1, 'The Top 10 Ways to Improve Safety Management', '<p><strong>Safety management</strong> can be a touchy topic. Disagreements abound: Should companies go the route of behavior-based safety, or follow a systems approach? Should safety be management-driven or employee-driven? What metrics should be used to assess the safety process?</p>\r\n\r\n<p>We recently spoke to a number of experts in the occupational safety and health field. Though some of their recommendations seem at odds with each other and they approach safety from different perspectives, two themes reverberated throughout the comments. The first was the need for safety leadership, not just safety management. The second was the need to incorporate safety into the organizational structure of the business and not treat it as a separate function.</p>\r\n', '', '2021-01-25 12:19:31'),
(2, 'DarkAlligator', '<p><em><strong>He awoke to the huge</strong></em>, insect-like creatures looming over his bed and screamed his lungs out. They hastily left the room and he stayed up all night, shaking and wondering if it had been a dream. The next morning, there was a tap on the door. Gathering his courage, he opened it to see one of them gently place a plate filled with fried breakfast on the floor, then retreat to a safe distance. Bewildered, he accepted the gift. The creatures chittered excitedly. This happened every day for weeks. At first, he was worried they were fattening him up, but after a particularly greasy breakfast left him clutching his chest from heartburn, they were replaced with fresh fruit. As well as cooking, they poured hot steamy baths for him and even tucked him in when he went to bed. It was bizarre.</p>\r\n\r\n<p><em><strong>One night, </strong></em>he awoke to gunshots and screaming. He raced downstairs to find a decapitated burglar being devoured by the insects. He was sickened but disposed of the remains as best he could. He knew they had just been protecting him. One morning the creatures wouldn&#39;t let him leave his room. He lay down, confused but trusting as they ushered him back into bed. Whatever their motives, they weren&#39;t going to hurt him. Hours later a burning pain spread throughout his body. It felt like his stomach was filled with razor wire. The insects chittered as he spasmed and moaned. It was only when he felt a terrible squirming feeling beneath his skin that he realized the insects hadn&#39;t been protecting him. They had been protecting their young.</p>\r\n', '', '2021-01-25 16:08:49'),
(3, 'The Accident', '<p><span style=\"font-size:20px\"><span style=\"font-family:Comic Sans MS,cursive\">It was one a.m. and Guy Halverson sat in his dark living room. He hadn&#39;t moved for over an hour. The accident earlier that evening kept playing over and over in his mind. The light turned red, but he was in a hurry and accelerated. An orange blur came from his right, and in a split second there was a violent jolt, then the bicyclist rolled across his hood and fell out of sight on the pavement. Horns blared angrily and he panicked, stepping on the gas and screeching away from the chaos into the darkness, shaken and keeping an eye on his rearview mirror until he got home. Why did you run, you idiot? He&#39;d never committed a crime before this and punished himself by imagining years in jail, his career gone, his family gone, his future gone. Why not just go to the police right now? You can afford a lawyer. Then someone tapped on the front door and his world suddenly crumbled away beneath him. They found me. There was nothing he could do but answer it. Running would only make matters worse. His body trembling, he got up, went to the door, and opened it. A police officer stood under the porch light.&quot; Mr. Halverson?&quot; asked the grim officer. He let out a defeated sigh. &quot;Yes. Let me &mdash;&quot;I am terribly sorry, but I&#39;m afraid I have some bad news. Your son&#39;s bike was struck by a hit and run driver this evening. He died at the scene. I&#39;m very sorry for your loss.&quot;</span></span></p>\r\n', 'Minnboy', '2021-01-25 16:20:50'),
(4, 'whisper', '<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">This is a story I do not often tell. I promise, sincerely, that this has scarred me for life and although I have looked into psychological explanations for what I heard and natural explanations for what occurred, they remain unsatisfactory.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">When I was a child, I was scared of the dark. I swore to my mother I heard voices in it. They were not evil, but they were not familiar and so they scared me. It was not uncommon in the middle of the night for me to wake up and hear &ldquo;whispers&rdquo; as I would call them when asking my mom. She figured they were just &ldquo;bumps in the night&rdquo; and typical kids nightmare material. I tried often to explain to her that it was more than that; that they sounded different from one another the way people&rsquo;s voices do. On some nights I would get so scared from these &ldquo;whispers&rdquo; that I would sleep in my mom&rsquo;s bed with her. It was an added bonus that the bathroom was directly outside of her bedroom door for my late-night tinkles.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">I should add at this point that when walking out into the hall to go to the bathroom, you looked directly down the stairs that would lead you into my living room on the first floor (as my mom&rsquo;s bedroom was on the second floor). On one such night, around Christmas, I awoke and felt the need to relieve myself. I walked out from the door and distinctly heard the phrase &ldquo;Look!&rdquo; and to my astonishment, a red light, almost like a spotlight, was cast upon the wall at the very bottom of the stairs. The light had no other source, it was by itself, and I was transfixed by it.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Being a little kid, and it only being a few days from Christmas, I KNEW what this light was. IT WAS SANTA!!! How else could he get into my house to know I was being a good boy? I was so excited I began walking down the stairs to greet him, picking up my pace after the second step as it began to creep off the wall and fade into the darkness in my living room.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">That&rsquo;s when I heard him. A very strong, masculine voice. Different from the first. Not at all like my father&rsquo;s (not to say he isn&rsquo;t masculine, it was just distinctly different). It said, &ldquo;Stop! Right now. Go back up those stairs.&rdquo; I listened, turned around, and what happened next I am not sure I would believe if someone had told me this same story. After reaching the top of the stairs, I heard a very loud CRASH that sent me running back to my mother&rsquo;s bed where I jumped straight under the covers and stayed there the whole night.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">When we awoke the next morning, the poinsettia lights (little Christmas flower lights that glowed red) my mother had put on the railing down the stairs were pulled straight down to the bottom of the stairs, some broken from what seemed like a forceful tear, laying in a single pile. The dry sink in my living room had fallen from the wall. My mother could not explain it! My father was worried we had been the victims of a home invasion. My sister was crying. There was nothing missing, nobody had broken in, there did not seem to be any reason this had happened. And then I saw it, and I kept quiet about it because I was so afraid that I could not force words out of my mouth.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">There, on the edge of the wooden dry sink which had been facing up, were three indentations where the finish on the wood had been worn, almost as if in a forceful grip. Something down there had GRABBED IT AND THREW IT DOWN. That was what the bang was.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">I was mortified. After that day I never heard a single voice again. I do not like to imagine what was waiting downstairs for me that night, if it was anything at all, but I can tell you that the reality was that something had physically acted upon two things in my house near the bottom of that stairwell.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">After this, I had never heard another whisper again. Which is sad, because in some ways I would have liked to thank the man (masculine energy?) that had stopped me from going down those stairs. This happened when I was 7. I am 20 years old now, and because of this incident I am still afraid of the dark. ESPECIALLY shadowy stairwells.</span></span></p>\r\n', 'annie .M', '2021-01-28 06:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `comment`) VALUES
(1, '', '', ''),
(2, 'taiba', 'taiba@gmail.com', 'I HOPE IT WORK'),
(3, 'taiba', 'taiba@gmail.com', 'hello!!'),
(5, 'mantasha', 'manta@gmail.com', 'bonjour!!!'),
(6, 'sawni ', 'sawni123@gmail.com', 'hello everyone!!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`srno.`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `srno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
