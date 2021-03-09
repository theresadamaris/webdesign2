-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 01:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `meta_deksripsi` varchar(150) NOT NULL,
  `tgl_post` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `author` varchar(150) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `meta_deksripsi`, `tgl_post`, `photo`, `author`, `kategori`) VALUES
(2, 'Cobra Kai: All 37 Karate Kid Easter Egg & References In Season 1', '<p>Cobra Kai season 3 features dozens upon dozens of Easter eggs and references to The Karate Kid movie franchise. The massively popular Netflix series is fueled by cultural nostalgia and slick storytelling, with references to the past playing a major role in the on-going narrative. In Cobra Kai season 3, the filmmakers pack in steady franchise references from episode to episode, and even bring back characters from the 1986 sequel The Karate Kid Part II. In Cobra Kai, nostalgia is used to drive stories of redemption for numerous characters. Daniel LaRusso (Ralph Macchio) must reassess his behavior in the past in season 3, and ultimately reaches a sense of clarity while traveling to the homeland of his mentor, Mr. Miyagi (Pat Morita). Meanwhile, Johnny Lawrence (William Zabka) slowly rebuilds his life after Cobra Kai season 2 ended with a school brawl involving Cobra Kai and Miyagi-Do students. In Cobra Kai season 3, even the baddie John Kreese (Martin Kove) receives a redemption storyline, as flashback sequences detail his shocking experiences during the Vietnam War.</p>\r\n', 'Cobra Kai season 3 features dozens upon dozens of Easter eggs and references to The Karate Kid movie franchise.', '2021-03-25', 'cobra6.jpg', 'Admin', 'TV News'),
(5, 'Indiana Jones 5 Director Hints At Movies Setting', '<p>Indiana Jones 5 director James Mangold hints at a 1960s setting for Harrison Ford&#39;s sequel. The original Indiana Jones trilogy from Steven Spielberg gave Ford&#39;s adventurer what seemed to be a great send-off at the time. However, after Lucasfilm brought the character back for Indiana Jones and the Kingdom of the Crystal Skull, many wanted to see a better swan song for the franchise. After several years of development, Indiana Jones 5 is currently moving forward. Spielberg originally planned to return to direct the final installment of this iteration of the Indiana Jones franchise. However, the legendary director stepped away from the project in 2020, resulting in Disney and Lucasfilm hiring Logan&#39;s James Mangold to take over. He&#39;s been working on Indiana Jones 5 for nearly a year, but there is not much known about his vision for it. The sequel has a summer 2022 release date rapidly approaching, though, and now it appears Mangold has teased when Indiana Jones 5 takes place.</p>\r\n', 'Indiana Jones 5 director James Mangold hints at a 1960s setting for ', '2021-03-26', 'indiana2.jpg', 'Admin', 'Movie News'),
(6, 'Raya And The Last Dragon Producer Shares The Secret Origins of Tuk Tuk', '<p>Raya and the Last Dragon producer Osnat Shurer shares the secret of how one of the film&#39;s characters, Tuk Tuk, came to be. The upcoming Disney animated classic is set to release in theaters and on Disney+ on March 5, 2021. Disney+ subscribers will have to pay an extra $29.99 to watch it. However, it may eventually become free to viewers like Mulan. Raya and the Last Dragon takes place in a fictional land called Kumandra. This world resembles Earth as if an ancient civilization inhabited it. Disney used Southeast Asian countries like Thailand, Vietnam, Cambodia, Myanmar, Malaysia, and Indonesia as inspiration to create the film. The film stars Raya, a warrior in her civilization, who takes on finding the last dragon to save her people&#39;s land.</p>\r\n', 'Raya and the Last Dragon producer Osnat Shurer shares the s', '2021-02-27', 'raya.jpg', 'Admin', 'Movie News'),
(7, 'How A Harry Potter Spinoff Can Avoid Fantastic Beasts Prequel Mistakes', '<p>A new Harry Potter series is reportedly being discussed at HBO Max, but how can a show set in the Wizarding World avoid the mistakes of the Fantastic Beasts films? The Potter-verse has clearly experienced something of stumbling block in recent years, a surprising turn of events for a franchise inspired by J.K. Rowling&#39;s immensely popular book series, the final of which was published in 2007. While Warner Bros.&#39; first eight films adapted from the novels were massively successful, the Fantastic Beasts prequel series has been relatively disappointing. In fact, Warner Bros&#39; most recent venture into the Wizarding World, Fantastic Beasts: The Crimes of Grindelwald, underperformed in terms of the box office, profiting less money than any other film in the series. The second entry in a supposed five-film Fantastic Beasts saga, The Crimes of Gridelwald, drew skepticism from fans and critics, alike, who pointed to a confusing and overly-complicated narrative. Additionally, the series has been plagued with its share of off-screen controversy, particularly with Rowling (the screenwriter of the first two prequels) who has been roundly criticized for her transphobic remarks published on social media. Actor Johnny Depp was also asked to resign from the role of Grindelwald following the loss of a defamation lawsuit against UK tabloid The Sun in the wake of domestic abuse allegations.</p>\r\n', 'A new Harry Potter series is reportedly being discussed at HBO Max,', '2021-02-28', 'harry.jpg', 'Admin', 'TV News'),
(8, 'Amazing Spider-Man Green Goblin Actor Shoots Down MCU Return Rumors', '<p>Dane DeHaan squashed the rumors that he would be returning as Green Goblin in the forthcoming Spider-Man: Homecoming 3 film. Despite some earlier conflicts between Sony and Marvel that nearly ended the MCU&rsquo;s Spider-Man run, the upcoming untitled third installment in the MCU&rsquo;s Spider-Man franchise will give Tom Holland his third go at portraying the classic web-slinging hero. Jon Watts is returning to direct alongside returning producers Kevin Feige and Amy Pascal. Dane DeHaan originally played the infamous villain in Sony&rsquo;s 2014 film The Amazing Spider-Man 2, directed by Marc Webb and starring Andrew Garfield as the titular hero. When it was announced that Jamie Foxx would be reprising his role as Electro from the same film, fans began to speculate about DeHaan&rsquo;s Green Goblin&#39;s possible return. Green Goblin, one of the most well-known Spider-Man villains, is a fan favorite due to his engaging backstory as Peter Parker&rsquo;s friend Harry Osborn who slowly (following the footsteps of his father, Norman Osborn) turns into Spider-Man&rsquo;s most prominent archenemy (with him, it&rsquo;s not just business, it&#39;s personal). James Franco also played the character in Sam Raimi&rsquo;s Spider-Man trilogy starring Tobey Maguire.</p>\r\n', 'Dane DeHaan squashed the rumors that he would be returning as Green Goblin', '2021-03-01', 'spider-man.jpg', 'Admin', 'Movie News'),
(9, 'Kevin Feige Calls Chloé Zhaos Eternals Pitch The Best Hes Ever Heard', '<p>Marvel Studios president Kevin Feige says Chlo&eacute; Zhao&#39;s pitch for Eternals was the best he&#39;s ever heard. Phase 4 of the Marvel Cinematic Universe will introduce a new cosmic superhuman race known as Eternals. While most people worldwide have no idea who these characters are, Marvel believes Eternals has what it takes to be the next obscure comic property turned giant movie franchise, a la Guardians of the Galaxy. To draw more attention to the film, Marvel assembled an incredibly talented cast and crew. Eternals&#39; star-studded ensemble includes Angelina Jolie, Richard Madden, Salma Hayek, Kit Harington, Kumail Nanjiani, and many more. While Marvel Studios has yet to show anything from the movie beyond some early concept art of the characters, one reason the movie is already so intriguing is who is behind the camera. Marvel hired Chlo&eacute; Zhao to direct the MCU blockbuster in 2018, shortly after her directorial debut The Rider was one of the year&#39;s best-reviewed films. Zhao might not have blockbuster movie experience and has a presumptive Oscar contender coming out soon with Nomadland, but she got the job because of her incredible pitch.</p>\r\n', 'Marvel Studios president Kevin Feige says Chloé Zhaos pitch for ', '2021-03-02', 'kevin.jpg', 'Admin', 'Review'),
(10, 'Tom Holland Calls Spider-Man 3 The Most Ambitious Standalone Superhero Movie Ever', '<p>Spider-Man 3 star Tom Holland hypes up the Marvel Cinematic Universe film calling it the most ambitious standlone superhero movie ever.</p>\r\n', 'Spider-Man 3 star Tom Holland hypes up the Marvel Cinematic Universe film calling it the most ambitious standlone superhero movie ever.', '2021-03-03', 'spiderman2.jpg', 'Admin', 'Exclusive'),
(11, 'Reviews Film The Call', '<p>Jakarta, CNN Indonesia --&nbsp;</p>\r\n\r\n<p>Agaknya niat penulis dan sutradara&nbsp;<strong><a href="https://www.cnnindonesia.com/tag/the-call" target="_blank">The Call</a></strong>, Lee Chung-hyun, bukan hanya ingin membuat film thriller, melainkan mempermainkan nalar dan emosi penonton terutama usai menyaksikan film yang ditayangkan di Netflix itu.</p>\r\n\r\n<p><ins><img alt="" src="https://wtf2.forkcdn.com/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=7574&amp;loc=https%3A%2F%2Fwww.cnnindonesia.com%2Fhiburan%2F20201204155702-220-578074%2Freview-film-the-call&amp;referer=https%3A%2F%2Fwww.google.com%2F&amp;cb=fa82a09372" style="height:0px; width:0px" /></ins></p>\r\n\r\n<p>Lee Chung-hyun memporak-porandakan nalar penonton yang susah payah mengikuti jalan cerita dari film 112 menit tersebut, berpindah melintasi waktu, dan mempersiapkan diri akan berbagai kejutan yang muncul.</p>\r\n\r\n<p>Bahkan hingga sesi kredit pun, penonton tak dibiarkan menutup tab Netflix dengan damai kala satu per satu nama pemain bermunculan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lupakan alur maju-mundur, lupakan alur konvensional kronologi maju ke depan, ataupun alur paralel ala-ala waralaba film ber-semesta. Lee Chung-hyun yang mengadopsi film ini dari film Puerto Rico, The Caller (2011), tampak sesuka hati membuat alur film ini.</p>\r\n\r\n<p>The Call mengisahkan perjalanan mengerikan yang dialami oleh Kim Seo-yeon (Park Shin-hye) ketika mengunjungi rumah masa kecilnya di sebuah desa kala ibunya, Eun-ae (Kim Sung-ryung), sakit keras.</p>\r\n', 'The Call, Film the call, review film the call, karakter film the call, rating film the call', '2021-03-04', 'the_call1.jpeg', 'Admin', 'Review');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `username`, `password`, `nama`, `foto`, `akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'default.png', 'operator'),
(3, 'febri1234', '94c50bf2bbb9c26a796fac71039e8e0b', 'Febri', 'default.png', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
