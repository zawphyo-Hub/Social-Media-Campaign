-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 05:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smcwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES
(1, 'test', '1', 'test@gmail.com', ' Good'),
(3, 'test', '3', 'test@gmail.com', ' ok'),
(8, 'wancy', '3', 'test@gmail.com', ''),
(9, 'qantity', '3', 'test@gmail.com', ''),
(10, 'zaw', 'phyo', 'zawminp@gmail.com', 'excellent'),
(11, 'kyaw', 'min', 'zmphyo1@kmd.edu.mm', 'badd'),
(12, 'aung', 'phyo', 'aung@gmail.com', 'I dont like your website'),
(13, 'htet', 'htet', 'test@gmail.com', 'gooddd'),
(14, 'alice', 'dodge', 'test@gmail.com', 'not very satisfying');

-- --------------------------------------------------------

--
-- Table structure for table `popular_appinfo`
--

CREATE TABLE `popular_appinfo` (
  `id` int(11) NOT NULL,
  `applogo` varchar(500) DEFAULT NULL,
  `appname` varchar(100) DEFAULT NULL,
  `founder` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `safeTips` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_appinfo`
--

INSERT INTO `popular_appinfo` (`id`, `applogo`, `appname`, `founder`, `description`, `rating`, `safeTips`) VALUES
(1, 'images/logo/logo-facebookpng-32202.png', 'Facebook', 'Mark Zuckerberg', 'Facebook is a leading social networking platform founded in 2004 by Mark Zuckerberg. It enables users to create profiles, connect with friends and family, and share various content such as photos, videos, and updates. With features like the News Feed, Pages, and Groups, Facebook serves as a hub for communication, information sharing, and community building. Despite controversies, it remains a ubiquitous part of the digital landscape, connecting billions of users worldwide.\r\n\r\n\r\n\r\n\r\n\r\n', '6.5/10', 'Regularly review and adjust your privacy settings to control who can see your posts, personal information, and contact details.\r\nUse a strong, unique password for your Facebook account and consider enabling two-factor authentication for an extra layer of security.\r\nBe mindful of the content you share, as once it is online, it can be difficult to remove completely.\r\nIf you encounter suspicious accounts, content, or behavior on Facebook, report it to the platform support team or use built-in reporting features to flag problematic content.'),
(2, 'images/logo/logo-ig-png-32473.png', 'Instagram', 'Kevin Systrom and Mike Krieger', 'Instagram is a visual-centric platform, which allows users to share moments of their lives through photos and videos in a variety of formats, including feed posts, stories, reels, and IGTV. Users can follow accounts they are interested in, engage with content through likes, comments, and shares, and discover new content through hashtags, explore pages, and algorithm-driven recommendations.', '7/10', 'Consider setting your Instagram account to private to control who can see your posts and follow you. Only approved followers can view your content.\r\nAccept follow requests only from people you know and trust.\r\nUse a strong, unique password for your Instagram account.\r\nIf you encounter inappropriate or offensive content on Instagram, report it to the platform. Instagram has features to report posts, comments, and accounts.\r\nAvoid clicking on links or responding to direct messages from unknown or suspicious accounts. Report any harassing or abusive messages.'),
(4, 'images/logo/pngegg.png', 'YouTube', ' Chad Hurley, Steve Chen, and Jawed Karim', 'YouTube is a video-sharing website launched in February 2005. It allows users to upload, view, rate, share, and comment on videos. Content on YouTube spans a wide range of genres, including music, entertainment, tutorials, vlogs, gaming, and more. Users can subscribe to channels to stay updated on their favorite content creators, create playlists, and engage with videos through likes, dislikes, and comments', '8/10', 'Since YouTube is owned by Google, ensure your Google account has a strong, unique password and enable two-factor authentication.\r\nChoose the appropriate privacy settings for your videos, such as public, unlisted, or private. Be cautious about sharing personal or sensitive content publicly.\r\nRegularly monitor and moderate comments on your videos. You can use YouTube comment filtering tools to hide or block inappropriate comments.\r\nRespect copyright laws and guidelines when creating and uploading content. Avoid using copyrighted material without permission.'),
(5, 'images/logo/pngegg (1).png', 'TikTok', 'ByteDance, Zhang Yiming and Zhang Lidong', 'value=\"TikTok is a social media platform known for its short-form video content, where users can create, share, and discover engaging videos. Launched in 2017, TikTok has become immensely popular among users of all ages, with a focus on creativity, entertainment, and community engagement. Users can explore a wide variety of content, including lip-syncing, dance challenges, comedy skits, cooking tutorials, and much more. TikTok innovative editing tools and effects allow users to unleash their cre', '7.5/10', 'Adjust your privacy settings to control who can view your videos, comment on your content, and interact with you on TikTok.\r\nUse a strong, unique password for your TikTok account and enable two-factor authentication for added security.\r\nBe cautious when interacting with other users on TikTok. Avoid sharing personal information or engaging in conversations with strangers.'),
(6, 'images/logo/logo-twitter-png-5860.png', 'Twitter', 'Jack Dorsey, Noah Glass, Biz Stone, and Evan Williams', 'Twitter is a social networking platform that enables users to share short messages called \"tweets\" of up to 280 characters. These tweets can contain text, photos, videos, links, and hashtags, allowing users to share their thoughts, opinions, and experiences in real-time.', '5.5/10', 'Use a strong, unique password for your Twitter account and enable two-factor authentication for enhanced security.Adjust your privacy settings to control who can see your tweets, follow you, and tag you in photos. Consider making your account private for added privacy.Be cautious about sharing personal information or sensitive opinions on Twitter. Once posted, tweets can be publicly visible and difficult to remove.Block or mute accounts that engage in abusive behavior or harassment. You have the option to block specific users or mute keywords and conversations.'),
(10, 'images/logo/snapchat.png', 'Snapchat', 'Evan Spiegel, Bobby Murphy, and Reggie Brown', 'Snapchat is a popular multimedia messaging app known for its ephemeral communication, allowing users to share disappearing photos, videos, and messages called \"snaps.\" With creative tools and filters, users can personalize their snaps, while features like Stories and Discover enhance sharing and engagement. Privacy and security measures ensure user safety, making Snapchat a dynamic platform for playful communication and community interaction.', '6.5/10', 'Review and customize your privacy settings regularly. You can control who can send you snaps, view your story, and see your location on Snap Map.\r\nBe cautious about adding people you do not know personally as friends on Snapchat. Only accept friend requests from people you trust.\r\nUse Snap Map wisely. Consider adjusting your location settings to share your whereabouts only with close friends or turn off location sharing altogether if you prefer.\r\nIf you encounter any inappropriate behavior or receive unwanted snaps or messages, use Snapchat reporting and blocking features to protect yourself.'),
(11, 'images/logo/whatsapp.png', 'WhatsApp', 'Jan Koum and Brian Acton', 'WhatsApp is a popular messaging application that enables users to send text messages, make voice and video calls, and share media files securely. Founded in 2009 by Jan Koum and Brian Acton, WhatsApp prioritizes user privacy with end-to-end encryption, ensuring secure communication. Acquired by Facebook in 2014, WhatsApp boasts a user-friendly interface and widespread global usage, connecting billions of users worldwide.\r\n\r\n', '8/10', 'WhatsApp offers two-step verification as an extra layer of security. Enable this feature in your settings to protect your account from unauthorized access. Always verify the identity of new contacts before sharing personal information or engaging in conversations with them. Be cautious of unfamiliar numbers or suspicious messages. Review and adjust your privacy settings to control who can see your profile photo, status, and last seen timestamp. You can also choose who can add you to groups. If you choose to back up your chats, ensure that your backup storage is secure. Avoid using untrusted cloud storage services or sharing backup files with unauthorized individuals.');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `regions` varchar(50) DEFAULT NULL,
  `profile` varchar(500) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`id`, `username`, `password`, `email`, `phoneno`, `regions`, `profile`, `role`) VALUES
(1, 'kyaw', '$2y$10$8V0sMtTXroBWr2u84a7jO.ueDl3zbZAt4/bgwGB71ct8P4hSyBGiK', 'kyawt@gmail.com', 9987456, 'Netherlands', 'images/profile/Screenshot 2024-02-27 191110.png', 'user'),
(2, 'zaw', '$2y$10$swsvhdX09MOHTpCaSs99puVgFkjbK/kH8dWKHOw.tJiv7BSwoiKAa', 'test@gmail.com', 91990876, 'Palau', 'images/profile/user.png', 'user'),
(4, 'Nolan', '$2y$10$EHP1uzTrKK1Te/zlbMIH6.Pp9wTWysiVHK8s/HHkPoNovIIjJ7.mS', 'test@gmail.com', 9483647, 'Lithuania', 'images/profile/user.png', 'user'),
(8, 'ADMIN', '$2y$10$oXPtrMq8mfL7l7BWp./vEe803mA4cm/KjSb9OY39386VmTc7gl/OO', 'sms@73@gmail.com', 0, 'Myanmar', NULL, 'admin'),
(10, 'Rose', '$2y$10$HnMNdxocOhn10cID/dNnd.U6ApfxaPvPmZPeGyuN8YagxUZ6qzT6y', 'test4@gmail.com', 982356411, 'Western Sahara', 'images/profile/images.webp', 'user'),
(11, 'maddy', '$2y$10$4utZ31r4bVSjHF8BIA0cKe0q4iIgZhV1mseKlkgiKu/FUUMxYyK5O', '111@gmail.com', 911111, 'Singapore', 'images/profile/download.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_appinfo`
--
ALTER TABLE `popular_appinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `popular_appinfo`
--
ALTER TABLE `popular_appinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
