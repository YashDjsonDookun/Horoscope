-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 07:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horoscope`
--

-- --------------------------------------------------------

--
-- Table structure for table `signs`
--

CREATE TABLE `signs` (
  `id` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `signName` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `imagePath` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `smallDescription` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prediction` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signs`
--

INSERT INTO `signs` (`id`, `signName`, `imagePath`, `smallDescription`, `prediction`) VALUES
('01', 'Aries', './assets/images/signs/aries.jpg', 'Aries (Mar 21-Apr 19)', 'As you enter November, the sun and retrograde Mercury are in Scorpio. You’re uncovering hidden information and reevaluating important financial, personal, and intimate relationships. Your ruler Mars is in Libra and Venus is in Sagittarius early in the month, highlighting international connections, long-distance relationships, or the need for balance between freedom and security in connections. This process peaks with the Taurus full moon on November 12, bringing huge choices and enticing opportunities, and at least one that’s worth exploring. As long as you don’t compromise your values, you won\'t go too far wrong. A leap of faith will be rewarded.'),
('02', 'Taurus', './assets/images/signs/taurus.jpg', 'Taurus (Apr 20 - May 20)', 'You’re in a new relationship cycle as you enter November and in the process of making deeper discoveries and reevaluating relationships and events that began to unfold in October. Life is evolving profoundly, as are you and your relationships. You’re learning your desires and needs for greater intimacy, security, support, and teamwork, and making valuable discoveries. Keep the channels of communication open and you can reach a deeper understanding.'),
('03', 'Gemini', './assets/images/signs/gemini.jpg', 'Gemini (May 21 - Jun 20)', 'You’re in a healing process as you enter November. Your ruler Mercury is retrograde and traveling with the sun in Scorpio, so this is a chance to reevaluate your daily habits, health, routines, work, and life, allowing you to experience deeper fulfillment daily and bring about a powerful transformation. With Venus in Sagittarius and Mars in Libra, your creative, financial, romantic, and sexual relationships are highlighted. You can deepen bonds with teamwork, freedom, compromise, and space to grow.'),
('04', 'Cancer', './assets/images/signs/cancer.jpg', 'Cancer (Jun 21 - Jul 22)', 'Mercury is retrograde as you enter November and traveling with the sun in Scorpio, drawing you out of your comfort zone and inviting you to love and live more mindfully and deeply. With Mars in Libra and Venus in Sagittarius, it’s hoped that you realize how supported you are by family, colleagues, lover, and life. Whatever the past (perhaps childhood) was like, you\'re realizing your power to create your reality in every moment with thoughts, words, and deeds.'),
('05', 'Leo', './assets/images/signs/leo.jpg', 'Leo (Jul 23 - Aug 22)', 'You’re in a Scorpio new moon cycle, growing in your sense of security and belonging, emotionally as well as with family, and finding a sense of belonging in the world. But with Mercury currently retrograde, it calls for a conscious confrontation with the past, insecurities, childhood trauma, and/or painful experiences that have shaped your expectations. Then they won’t overshadow your present and all that is hopeful and blossoming.'),
('06', 'Virgo', './assets/images/signs/virgo.jpg', 'Virgo (Aug 23 - Sep 22)', 'With the sun in Scorpio, November brings you to a new communication cycle, but with your ruler Mercury currently retrograde, you’re revisiting conversations from last month and learning previously hidden information and reevaluating recent choices, decisions, and beliefs. Mars is in Libra and Venus is in Sagittarius, and it comes down to your values, what security means to you. Consciously release resentments and perceptions, and keep the channels of communication open. Then you can learn a deeper truth and make informed decisions that bring about a transformation.'),
('07', 'Libra', './assets/images/signs/libra.jpg', 'Libra (Sep 23 - Oct 22)', 'As you enter November, the sun and retrograde Mercury are in Scorpio, and you’re in the process of reevaluating recent developments and important personal and financial commitments. Who calls the shots in your life? With Mars in Libra and your ruler Venus in Sagittarius, it boils down to clear, honest communication about what you want for yourself and in your relationships. This begins with honesty with yourself about what you value.'),
('08', 'Scorpio', './assets/images/signs/scorpio.jpg', 'Scorpio (Oct 23 - Nov 21)', 'Happy birthday, Scorpio! You’re in a personal new cycle this month, evolving, shedding skin, and revealing yourself. With Mercury currently retrograde in your sign, you’re in a process of redefining yourself and your identity. And with Mars in Libra, this is likely a process unfolding beneath the surface, marking a deeply introspective phase even if on the surface you’re moving about life as usual. As you acknowledge secret desires, subconscious fears, and relationship patterns, you can make conscious choices moving forward.'),
('09', 'Capricorn', './assets/images/signs/capricorn.jpg', 'Capricorn (Dec 22 - Jan 19)', 'Your social circle is expanding as you enter November, ushering in a whole new world of possibilities and opportunities to make your dreams come true. But with Mercury currently retrograde, you’re learning the deeper layers of a story that began to unfold in October. Move slowly until Mercury is direct, and avoid jumping to conclusions. Also, if there have been misunderstandings, you can clear them up now. Allow time for situations to heal, evolve, and release any resentment.'),
('10', 'Sagittarius', './assets/images/signs/sagittarius.jpg', 'Sagittarius (Nov 22 - Dec 21)', 'Life is evolving behind the scenes as you enter November. With the sun and retrograde Mercury in Scorpio, move inward for reflection, meditation, and solitude, and immerse yourself in your spiritual practices as you prepare for a rebirth at the end of the month. You’re transforming at a soul level, becoming aware of subconscious thoughts, ideas, desires, fears, and perceptions.'),
('11', 'Aquarius', './assets/images/signs/aquarius.jpg', 'Aquarius (Jan 20 - Feb 18)', 'You’re in a new professional cycle as you enter November. But with Mercury currently retrograde, you’re in a phase of reevaluating your ambitions, professional situation, and recent developments, and learning the deeper potential in situations. There may even be second chances at something you thought was a missed opportunity. You could be traveling, exploring opportunities at a distance, migrating, considering higher education, or dealing with immigration or legal matters and red tape. Your social life and circle are widening, bringing exciting and enticing connections.'),
('12', 'Pisces', './assets/images/signs/pisces.jpg', 'Pisces (Feb 19 - Mar 20)', 'The sun and retrograde Mercury are in Scorpio as you enter November, and you’re on a journey with winding roads and detours, reevaluating beliefs, ideals, and what you thought you knew. This is a process of rediscovering faith in yourself and in a greater power that sustains you through the peaks and valleys of life. At the highest level, this a spiritual journey. The wisest are those who say they don’t know. Be humble and open-minded and embrace a process of exploration. Only then can you avoid pitfalls and be guided.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signs`
--
ALTER TABLE `signs`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
