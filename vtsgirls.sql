-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2022 at 09:20 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtsgirls`
--

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `id_breed` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`id_breed`, `name`) VALUES
(1, 'Bernese Mountain Dog'),
(2, 'Goldendoodle'),
(3, 'Golden retriever'),
(4, 'American bulldog'),
(5, 'Beagle'),
(6, 'English Cocker Spaniel'),
(7, 'Bombay'),
(8, 'Calico'),
(9, 'Maine Coon'),
(10, 'Russian blue'),
(11, 'Siberian'),
(12, 'Tiger');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picked_pet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pet_meaning` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name_surname`, `address`, `phone_number`, `picked_pet`, `pet_meaning`) VALUES
(1, '', '', '', '', ''),
(2, 'Maja', 'jedna', '123', 'Jackie', 'nothing'),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, 'maja', 'neka', '1598453', 'Jackie', 'fbhsrgjs'),
(7, 'maja', 'neka', '1598453', 'Jackie', 'fbhsrgjs'),
(8, 'maja', 'neka', '1598453', 'Jackie', 'fbhsrgjs');

-- --------------------------------------------------------

--
-- Table structure for table `learn_more`
--

CREATE TABLE `learn_more` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirection` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `learn_more`
--

INSERT INTO `learn_more` (`id`, `title`, `text`, `image`, `redirection`) VALUES
(1, 'Why adoption?', '1. Because you\'ll save a life.<br>\r\n2. Because you\'ll get a great animal.<br>\r\n3. Because it’ll cost you less.<br>\r\n4. Because of the bragging rights.<br>\r\n5. Because it\'s one way to fight puppy mills.<br>\r\n6. Because your home will thank you.<br>\r\n7. Because all pets are good for your health, but adoptees offer an extra boost.<br>\r\n8. Because adoption helps more than just one animal.<br>\r\n9. Because The Shelter Pet Project makes it easy.<br>\r\n10. Because you\'ll change a homeless animal\'s whole world.', 'Images/cover.jpg', 'one'),
(2, 'Dog and cat relationship', 'A dog and a cat may develop a close friendship,<br>\r\nsharing a bed, eating each other\'s food,<br>\r\nand playing together, or they may develop a<br>\r\ngrudging respect and just stay out of each other\'s way.<br>\r\nThey learn about the other through experimentation and observation.', 'Images/dog_cat_cuddle.jpg', 'two'),
(3, 'Pets are our best friends', 'Pets are important to our well-being and they <br>\r\nenrich our lives in an infinite number of ways. <br>\r\nThey provide companionship, teach our children about responsibility, <br>\r\ngive us new purpose during career changes or retirement, <br>\r\nplay vital roles in our communities, and offer much-needed <br>\r\nlaughter and love at just the right moments. They are our best friends.', 'Images/dog_owner.jpg', 'three'),
(4, 'Things to know before adopting a puppy', '1. Are you ready for a puppy?<br>\r\n2. What kind of puppy is right for you?<br>\r\n3. Where to find your new puppy<br>\r\n4. Puppy-proof your home<br>\r\n5. Stock up on puppy supplies<br>\r\n6. Find the right veterinarian<br>\r\n7. Learn how to raise your puppy correctly', 'Images/puppies.jpg', 'four'),
(5, 'Tips for working from home with a pet', '1. Pet bed in office. Consider placing a cozy pet bed in your office, <br>\r\nor on your desk if your pet is small, so your pet is nearby throughout the day. <br>\r\nThis will help you remain more focused as you won’t be concerned about <br>\r\nwhat your pet might be doing when out of sight.<br>\r\n2. Watch treats. Now that you’re spending more quality time with your pet, <br>\r\nbe sure to gauge how many treats you’re giving them each day. <br>\r\nBeing with your pet for a greater amount of time could lead to <br>\r\noffering more treats and causing them to overeat.<br>\r\n3. Schedule breaks for walks. One of the best benefits of working <br>\r\nfrom home is being able to structure your day so it meshes with your lifestyle. <br>\r\nBe sure to schedule walk breaks during the day so you and your pet <br>\r\ncan get out for a breath of fresh air frequently.', 'Images/dog_work.jpg', 'five');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id_pet` int(11) NOT NULL,
  `id_breed` int(11) NOT NULL,
  `type` enum('dog','cat','','') COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `characteristics` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `story` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id_pet`, `id_breed`, `type`, `name`, `age`, `characteristics`, `story`, `image`) VALUES
(1, 1, 'dog', 'Jackie', 4, 'playful, loyal, clumsy', 'Jackie is one of the dogs who recently came into care and he is 5 years old. Jackie loves to be with people. Eating is an issue unless you are holding the food or the dish. He has a healthy respect of cats, gets along well with other dogs.', 'Images/Jackie.jpg'),
(2, 2, 'dog', 'Piper', 2, 'friendly, selfish, smart', 'Piper is scared of new places, reacts to noises and sudden movements. Piper also has serious health concerns including a heart-worm diagnoses. Luckily for Piper, she has landed with one of our most experienced and patient fosters. Piper\'s heart-worm treatment will take several months to complete. These months of medical care will give her foster family the much needed time to gain her trust and help guide her to feel more comfortable and encourage her confidence to build.', 'Images/Piper.jpg'),
(3, 3, 'dog', 'Gus', 4, 'brave, gentle, lazy', 'Gus in a bus because he loves to go for rides. Gus isn\'t a tall boy but he\'s a muscular gentleman approximately 4 years old. Gus is very sweet and social. He loves men, women and is great with children and other dogs. He takes treats gently and easy on the leash. GUS is super smart, loving, loyal and independent perfect for families. Gus requires regular brushing. If you consider dog hair an accessory like beautiful pearls Gus is for you.', 'Images/Gus.jpg'),
(4, 4, 'dog', 'Elsa', 1, 'loyal, stubborn, fast', 'Elsa likes to chew on things, I think that is the puppy in her. So I definitely recommend bones and lots of chew toys. She is vaccinated. She loves to play with people and other dogs. She loves to run (she is very fast) so she has LOTS of energy. One of my favorite things is when she gets into play mode she gets down low and then will start throwing her paw.', 'Images/Elsa.jpg'),
(5, 5, 'dog', 'Buddy', 3, 'independent, curious, funny', 'Buddy, a beautiful boy is great with people and children. He is sweet and social but can be a little shy at first. He gets along great with other dogs. Buddy pulls a little on his leash but just needs a little more training. He acknowledges a few commands and is quite trainable. Buddy is approximately 3 years old and he is waiting for his new family.', 'Images/Buddy.jpg'),
(6, 6, 'dog', 'Kippie', 1, 'quiet, easily trained, adaptable', 'Kippie is the newest dog. She is a 1 year old Cocker Spaniel with a sweet little soul. Her person is too unwell to care for her any longer so we welcomed her to the pack. We feel that Kippie may have some health issues and she\'ll be meeting her vet care team once she had some time to relax and adjust to her new surroundings.', 'Images/Kippie.jpg'),
(7, 7, 'cat', 'Luna', 2, 'friendly, loyal, gentle', 'Luna is the second smallest of her litter, but it doesn\'t stop her from speaking her mind and being vocal about what she wants. She loves to be pampered with love and pets. She enjoys doing anything to \"help\" and follow her owner around doing anything. She gets along with other cats and even dogs. As long as she can be close and be cuddled, she\'s the happiest girl around.', 'Images/Luna.jpg'),
(8, 8, 'cat', 'Penny', 3, 'playful, smart, funny', 'My name is PENNY and I need a SPECIAL, new loving home. I’m saying this because I was born with Cerebellar Hypoplasia. Some people call cats like me “Wobbly Cats” because I am very unsteady on my feet. I can’t jump as well as normal cats, but I am “perfectly purrfect” ” in all other respects. Actually better, because I am so loving toward everyone I meet.I can also get up and down stairs, though it may take me awhile. I also am talkative and entertaining to have around.', 'Images/Penny.jpg'),
(9, 9, 'cat', 'Magnus', 9, 'quiet, curious, independent', 'Magnus is a 9 year old Maine coon mix cat. Magnus is very cuddly and affectionate with his people. He likes to play. He’s a very laid-back boy that gets along well with other cats. He was surrendered when his owners could no longer care for him. He loves her belly scratch and being brushed. He loves lounging around wherever he can, and a scratching post. Loves ball toys to chase around along with lasers. He will sleep on you when he is needed extra attention.', 'Images/Magnus.jpg'),
(10, 10, 'cat', 'Smokey', 1, 'clumsy, playful, friendly', 'Smokey is a wonderfully sweet male cat. He arrived in March and staff took some time to evaluate him and determine that he is adoptable. So, this boy is ready to find a home of his own. She has a very playful side and loves attention once he is comfortable in his new home. He is very friendly and gets along with other cats and dogs.', 'Images/Smokey.jpg'),
(11, 11, 'cat', 'Millie', 3, 'gentle, protective, brave', 'Millie is one of the most gorgeous cat and she is truly unique. Millie is a young Siberian Turkish silver dilute Torti. She is extremely friendly and warms up to new people quickly! She was living outside someone\'s home since she was a small kitten, and they felt she was too friendly to not have a home of her own. She is still shy, especially with new people, but warming up nicely. She loves head and chin scratches and really leans in to them.\r\nMillie loves other cats and has done well with smal', 'Images/Millie.jpg'),
(12, 12, 'cat', 'Nova', 1, 'athletic, interactive, curious', 'Adorable Nova is the most perfect cat who is so good natured that you can carry her around, rub her belly and trim her nails... and she only uses her scratching post to scratch on.She is one year young and is still a kitten who wants to play a lot and be the center of attention.Nova will do best in a home with children or other pets or active adults who can give her lots of attention and playtime.', 'Images/Nova.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pet_adopt`
--

CREATE TABLE `pet_adopt` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_adopt`
--

INSERT INTO `pet_adopt` (`id`, `title`, `text`, `image`) VALUES
(1, 'Rules for adopting', 'Congratulations on deciding to adopt a pet!<br>\r\nAdopting a new pet can be challenging so we wrote a few things you should know before coming to adopt! <br>\r\nWhen you decide on a pet to adopt call +44 0983 455983, before coming to see us. <br>\r\n', ''),
(2, '', 'You will be added to a waiting list. Depending on volume, there may be a wait to meet a pet, or the waiting list may be full for the day.<br>\r\nWe do not place holds on pets.<br>\r\nPlease do not bring your current pets with you to the shelter.\r\n', ''),
(3, '', 'We do not allow in-shelter dog-to-dog introductions.<br>\r\nWhen you adopt, you\'ll need:<br>\r\n        -Proof that you’re at least 18 years of age.<br>\r\n        -A picture ID with your current address<br>\r\n        -A meeting withour pet adoption counselor.', ''),
(4, '', 'If you have any information, give us a call!', ''),
(8, '', '', 'Images/people.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `email`, `password`, `message`, `date`) VALUES
(4, 'majaa', 'jaja@gmail.com', 'ja', '', '2022-06-25 11:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `email`, `password`) VALUES
(1, 'user', 'ti', 'ti@gmail.com', 'c9507ca09facaf7bd5d9ab1937bbdeb2'),
(2, 'user', 'patricija', 'patricija@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'user', 'mmm', 'mmm@gmail.com', 'c4efd5020cb49b9d3257ffa0fbccc0ae'),
(4, 'user', 'ja', 'ja@gmail.com', 'a78c5bf69b40d464b954ef76815c6fa0'),
(5, 'admin', 'admin', 'admin@gmail.com', 'admin'),
(6, 'user', 'hh', 'hh@gmail.com', 'hh'),
(7, 'user', '', 'ja@gmail.com', '123'),
(8, 'user', 'ti', 'ti@gmail.com', 'ti');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `user_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id_breed`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learn_more`
--
ALTER TABLE `learn_more`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `pets_id_breed_pets_fr` (`id_breed`);

--
-- Indexes for table `pet_adopt`
--
ALTER TABLE `pet_adopt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `id_breed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `learn_more`
--
ALTER TABLE `learn_more`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pet_adopt`
--
ALTER TABLE `pet_adopt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_id_breed_pets_fr` FOREIGN KEY (`id_breed`) REFERENCES `breeds` (`id_breed`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
