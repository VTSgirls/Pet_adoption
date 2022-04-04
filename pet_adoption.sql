-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 10:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_adoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `id_breed` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id_pet` int(11) NOT NULL,
  `id_breed` int(11) NOT NULL,
  `type` enum('dog','cat','','') NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `characteristics` varchar(50) NOT NULL,
  `story` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id_pet`, `id_breed`, `type`, `name`, `age`, `characteristics`, `story`, `image`) VALUES
(1, 1, 'dog', 'Jackie', 5, 'playful, loyal, clumsy', 'Jackie is one of the dogs who recently came into care and he is 5 years old. Jackie loves to be with people. Eating is an issue unless you are holding the food or the dish. He has a healthy respect of cats, gets along well with other dogs.', 'Images/Jackie.jpg'),
(2, 2, 'dog', 'Piper', 2, 'friendly, selfish, smart', 'Piper is scared of new places, reacts to noises and sudden movements. Piper also has serious health concerns including a heart-worm diagnoses. Luckily for Piper, she has landed with one of our most experienced and patient fosters. Piper\'s heart-worm treatment will take several months to complete. These months of medical care will give her foster family the much needed time to gain her trust and help guide her to feel more comfortable and encourage her confidence to build.', 'Images/Piper.jpg'),
(3, 3, 'dog', 'Gus', 4, 'brave, gentle, lazy', 'Gus in a bus because he loves to go for rides. Gus isn\'t a tall boy but he\'s a muscular gentleman approximately 4 years old. Gus is very sweet and social. He loves men, women and is great with children and other dogs. He takes treats gently and easy on the leash. GUS is super smart, loving, loyal and independent perfect for families. Gus requires regular brushing. If you consider dog hair an accessory like beautiful pearls Gus is for you.', 'Images/Gus.jpg'),
(4, 4, 'dog', 'Elsa', 1, 'loyal, stubborn, fast', 'Elsa likes to chew on things, I think that is the puppy in her. So I definitely recommend bones and lots of chew toys. She is vaccinated. She loves to play with people and other dogs. She loves to run (she is very fast) so she has LOTS of energy. One of my favorite things is when she gets into play mode she gets down low and then will start throwing her paw.', 'Images/Elsa.jpg'),
(5, 5, 'dog', 'Buddy', 3, 'independent, curious, funny', 'Buddy, a beautiful boy is great with people and children. He is sweet and social but can be a little shy at first. He gets along great with other dogs. Buddy pulls a little on his leash but just needs a little more training. He acknowledges a few commands and is quite trainable. Buddy is approximately 3 years old and he is waiting for his new family.', 'Images/Buddy.jpg'),
(6, 6, 'dog', 'Kippie', 1, 'quiet, easily trained, adaptable', 'Kippie is the newest dog. She is a 1 year old Cocker Spaniel with a sweet little soul. Her person is too unwell to care for her any longer so we welcomed her to the pack. We feel that Kippie may have some health issues and she\'ll be meeting her vet care team once she had some time to relax and adjust to her new surroundings.', 'Images/Kippie.jpg'),
(8, 7, 'cat', 'Luna', 2, 'friendly, loyal, gentle', 'Luna is the second smallest of her litter, but it doesn\'t stop her from speaking her mind and being vocal about what she wants. She loves to be pampered with love and pets. She enjoys doing anything to \"help\" and follow her owner around doing anything. She gets along with other cats and even dogs. As long as she can be close and be cuddled, she\'s the happiest girl around.', 'Images/Luna.jpg'),
(9, 8, 'cat', 'Penny', 3, 'playful, smart, funny', 'My name is PENNY and I need a SPECIAL, new loving home. I’m saying this because I was born with Cerebellar Hypoplasia. Some people call cats like me “Wobbly Cats” because I am very unsteady on my feet. I can’t jump as well as normal cats, but I am “perfectly purrfect” ” in all other respects. Actually better, because I am so loving toward everyone I meet.I can also get up and down stairs, though it may take me awhile. I also am talkative and entertaining to have around.', 'Images/Penny.jpg'),
(10, 9, 'cat', 'Magnus', 9, 'quiet, curious, independent', 'Magnus is a 9 year old Maine coon mix cat.  Magnus is very cuddly and affectionate with his people. He likes to play. He’s a very laid-back boy that gets along well with other cats.\r\nHe was surrendered when his owners could no longer care for him. He loves her belly scratch and being brushed. He loves lounging around wherever he can, and a scratching post. Loves ball toys to chase around along with lasers. He will sleep on you when he is needed extra attention. He is not a fan of little kids or ', 'Images/Magnus.jpg'),
(11, 10, 'cat', 'Smokey', 1, 'clumsy, playful, friendly', 'Smokey is a wonderfully sweet male cat. He arrived in March and staff took some time to evaluate him and determine that he is adoptable. So, this boy is ready to find a home of his own. She has a very playful side and loves attention once he is comfortable in his new home. He is very friendly and gets along with other cats and dogs.', 'Images/Smokey.jpg'),
(12, 11, 'cat', 'Millie', 3, 'gentle, protective, brave', 'Millie is one of the most gorgeous cat and she is truly unique. Millie is a young Siberian Turkish silver dilute Torti. She is extremely friendly and warms up to new people quickly! She was living outside someone\'s home since she was a small kitten, and they felt she was too friendly to not have a home of her own. She is still shy, especially with new people, but warming up nicely. She loves head and chin scratches and really leans in to them.\r\nMillie loves other cats and has done well with smal', 'Images/Millie.jpg'),
(13, 12, 'cat', 'Nova', 1, 'athletic, interactive, curious', 'Adorable Nova is the most perfect cat who is so good natured that you can carry her around, rub her belly and trim her nails... and she only uses her scratching post to scratch on.\r\nShe is one year young and is still a kitten who wants to play a lot and be the center of attention.\r\nNova will do best in a home with children or other pets or active adults who can give her lots of attention and playtime.', 'Images/Nova.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id_breed`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `pets_id_breed_pets_fr` (`id_breed`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

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
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

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
