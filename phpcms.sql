-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 12:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `addedby` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `datetime`, `username`, `password`, `addedby`) VALUES
(3, 'July-17-2021 07:12:19', 'Michael', '1234', 'Michael'),
(4, 'July-17-2021 10:27:25', 'Michaelmamman', '1234', 'Michael'),
(5, 'July-17-2021 10:38:40', 'Peter', '1234', 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`) VALUES
(47, 'September-21-2021 09:49:44', 'VERITAS UNIVERSITY, ANA ABUJA HOST PROFESSOR TANURE OJAIDE', 'Events', 'Michael', 'ana2.jpeg', 'It was indeed a great opportunity for aspiring young people and writers to encounter renowned literary giants when the Association of Nigerian Authors (ANA) Abuja Chapter in collaboration with Veritas University, Abuja hosted one of the Frank Porter Graham Professors, Professor Tanure Ojaide. Prof. Tanure has been the Frank Porter Graham Professor of Africana Studies since 2006. He has over twenty poetry collections as well as short stories, memoirs, articles and many other literary texts to his credit. Prof Tanure has won several major national and international poetry awards, and currently teaches at the University of North Carolina (Charlotte).\r\n\r\nDuring the reading session, the guest author, Prof. Tanure read from some of his earliest and contemporary collections of poetry including The Fate of Vultures (1990), The Tale of the Harmattan (2007), The Beauty I Have Seen (2010), Songs of Myself: Quartet (2015), and his most recent work, Narrow Escapes: A Poetic Diary of the Coronavirus Pandemic (2021).\r\n\r\nThe interactive session afforded young and aspiring writers, poets and students to interact with the guest author. Similarly, special drama, acapella and poetic presentations were performed by members of ANA and students from selected secondary schools including Madonna Model School, Area 3 Garki, Abuja and St. Theresa Schools Bwari, Abuja.\r\n\r\nAddressing the participants, the Vice Chancellor, Rev. Fr. Prof. Hyacinth E. Ichoku applauded the Association of Nigerian Authors (ANA) and Veritas Writers Community (VWC) for not relenting in their efforts in exposing the upcoming generation to renowned literary figures and critics like Prof. Chimalum Nwankwo and Prof. Tanure Ojaide; noting that the experience of the event will aspire them for greatness and initiate them properly into the literary world.\r\n\r\nResponding to the Vice Chancellor, the Chairperson of the Association of Nigerian Authors, Abuja chapter, Mrs Halima Usman appreciated the University for always opening its doors to the association. She particularly acknowledged the unflinching support of the Vice Chancellor, who always grace such events with his presence. The chairperson used the opportunity to invite the audience for her book launch on the 27th July, 2021 at the Yarâ€™ Adua Centre, Abuja. ANA also advertised the ongoing national essay competition organised by ANA in conjunction with ROOST Foundation focusing themes on Sexual and Gender-Based Violence, Human Trafficking and Irregular Migration.\r\n\r\nIn his comment, the guest author, Prof. Tanure encouraged young writers to take advantage of their youth and write in order to effect positive changes and serve as agents of progressive transformations in our society. He also pointed that every age has its own spirit which writers try to express and â€œfor any writer to establish a voice, there is need to learn under those that have gone aheadâ€ and â€œas long as there is life, there is something to think and write aboutâ€. Thus, inspiration is available around us and writers should pick that effortlessly from their environment.\r\n\r\nReport compiled by Patrick Sunday Ibbi, Acting Secretary, CGS Veritas University Abuja'),
(46, 'September-20-2021 13:02:56', 'CULTURAL DAY AT VERITAS UNIVERSITY, STUDENTS TROOP OUT TO SHOWCASE THEIR HERITAGE', 'Events', 'Michael', 'cp.jpg', 'In recognition of the critical role of culture in societal development, the students of Veritas University have set a day aside as part of the annual student week, to showcase the rich cultural heritages of the most populous African country, Nigeria. In what seems like a carnival, different cultural troops appeared in colourful processions to represent the over two hundred and fifty ethnic groups in Nigeria.\r\n\r\nWith graceful dance steps to the rhythm of the local songs and the accompanying instruments that fascinated the spectators, the students brought an euphoria that relieved everyone from the stress of academic activities.\r\n\r\nCuisines from different parts of the country were on display as well. Across the northern regions, down to the southern parts of the country, varieties of local Nigerian delicacies were served. It was a scene that creates a nostalgic feeling in both students and staff of the university.\r\nRecognizing the importance of culture in its diversity remains a key variable to ensuring sustainable development. This is why ensuring global commitments to the preservation, protection and conservation of all cultural and natural heritages, is a priority to United Nations Educational, Scientific and Cultural Organization-UNESCO.\r\n\r\nReport by Enuwa Obekpa, Acting PRO, Veritas University Abuja\"\"'),
(48, 'September-21-2021 09:55:18', 'THE EU-UN SPONSORED SPOTLIGHT INITIATIVE TRAINING AT VERITAS UNIVERSITY, ABUJA', 'Education', 'Michael', 'ssss.jpg', 'The Women At Risk International Foundation (WARIF) was at Veritas University, Abuja on the 5th July, 2021 to facilitate the EU-UN sponsored Spotlight Initiative programme on the Prevention of Campus Sexual Violence. The physical training afforded the participants (undergraduate and postgraduates students) the opportunity to be trained as advocates against the sexual and gender-based violence on campus.\r\n\r\nThe training commenced with an opening address by the Acting Director, Centre for Gender Studies in Veritas University Abuja, Dr (Mrs) Angela Ngozi Dick who is also the Coordinator of the School Related Gender-Based Violence (SRGBV) Response Team in the institution. In her remarks, the Acting Director expressed profound gratitude to the European Union (EU), the United Nations (UN) and WARIF for considering and choosing Veritas University, Abuja as one of the pioneer institutions in the country to participate in the Spotlight Initiative programme. She also conveyed her heartfelt gratitude to the participants that registered and turned out for the training; pointing out how the Centre for Gender Studies, in collaboration with the Ethics Directorate of the school remain determined in ensuring that Veritas University, Abuja maintains its zero-tolerance policy on any form of violence on campus.\r\n\r\nDuring the workshops, participants were trained and given the chance to interact with one another on issues surrounding sexual misconducts, code of conduct, forms of GBV, causes and effects of GBV as well as legal and policy frameworks for the prevention and management of gender-based violence on campuses and beyond.\r\nTo conclude this session of the EU-UN sponsored Spotlight Initiative programme on the Prevention of Campus Sexual Violence, SRGBV Response Team members from Veritas University, Abuja led by the Secretary, Mr Patrick Sunday Ibbi were at the Corinthia Villa Hotel, Abuja for the Closeout Event on the 6th July, 2021. The closeout event had in attendance the representative of UN Women, Ms. Tosin Akibu, the WARIF team, and the response team members from the University of Abuja and Nile University of Nigeria. At the event, it was a moment for reflections and responses on the achievements along with the challenges encountered over the course of the Spotlight Initiative programme on the Prevention of Campus Sexual Violence. Thus, recommendations for improvement were noted.\r\n\r\nReport compiled by Patrick Sunday Ibbi, Acting Secretary, CGS Veritas University Abuja'),
(49, 'September-21-2021 09:59:55', 'VERITAS UNIVERSITY TOP RESEARCH OUTPUT 2021', 'Events', 'Michael', 'qaw.jpg', 'Veritas University Abuja is committed to the highest attainable excellence in research and innovation. Our exceptional research staff and outstanding students are constantly engaged in cutting-edge researches to proffer solutions to emerging societal problems. This corner periodically features outstanding research outputs from our esteem researchers.\r\n\r\nAs a step to solving the diagnostic challenges bothering on the current COVID-19 pandemic and future pandemic outbreaks, one of our scholars Dr. Godwin A. Udourioh, in collaboration with Dr. Emmanuel Epelle from the University of Edinburgh and Dr. Solomon Moses of Covenant University, recently published an article titled: â€œMetal Organic Frameworks as Biosensing Materials for COVID-19â€ with Springer Nature in Cellular and Molecular Bioengineering.\r\n\r\nDr. Godwin Augustine Udourioh is an early career Analytical/Industrial Chemist whose research interest spans through (1) Synthesis and Characterization of Advanced Porous materials such as Metal Organic Frameworks (MOFs), Covalent Organic Frameworks (COFs) for biosensing, drug delivery, electrochemical fuel/energy storage, and catalytic applications; (2) Synthesis and characterization of bio-based demulsifiers for crude oil emulsion treatment; (3) Petroleum flow assurance studies of asphaltene and other heavy organics precipitation and deposition chemistry. Research ID: http://www.researcherid.com/rid/S-3469-2018;\r\n\r\nThe Article: Metal Organic Frameworks as Biosensing Materials for COVID-19\r\nThe novel coronavirus disease (COVID-19) pandemic outbreak is the most startling public health crises with attendant global socio-economic burden ever experienced in the twenty-ï¬rst century. The level of devastation by this outbreak is such that highly impacted countries will take years to recover. Studies have shown that timely detection based on accelerated sample testing and accurate diagnosis are crucial steps to reducing or preventing the spread of any pandemic outbreak. In this opinionated review, the impacts of metal organic frameworks (MOFs) as a biosensor in a pandemic outbreak is investigated with reference to COVID19. Biosensing technologies have been proven to be very effective in clinical analyses, especially in assessment of severe infectious diseases. Polymerase chain reactions (PCR, RTPCR, CRISPR) - based test methods predominantly used for SARS-COV-2 diagnoses have serious limitations and the health scientists and researchers are urged to come up with a more robust and versatile system for solving diagnostic problem associated with the current and future pandemic outbreaks. MOFs, an emerging crystalline material with unique characteristics will serve as promising biosensing materials in a pandemic outbreak such as the one we are in. We hereby highlight the characteristics of MOFs and their sensing applications, potentials as biosensors in a pandemic outbreak and draw the attention of researchers to a new vista of research that needs immediate action.'),
(50, 'September-21-2021 10:03:49', 'THE VICE CHANCELLOR, VERITAS UNIVERSITY ABUJA NAMED PATRON OF POLICE COMMUNITY RELATIONS', 'Events', 'Michael', 'pcrc.jpeg', 'The Vice Chancellor of Veritas University, Reverend Father, Professor Hyacinth Eme Ichoku receives the award of Patron of the police community relations. This is in recognition of the enormous contributions of the university towards improving the security of its host community.\r\n\r\nThe group which paid the Vice Chancellor a courtesy visit at his office on Friday 20th of August, 2021, decked the Vice Chancellor with their apparels as a sign of recognizing his membership as well as his willingness to support the cause of the group.\r\n\r\nPolice Community Relations Committee PCRC is a group of civilians working with the Nigerian police force, to ensure a cordial relationship. The chairperson, Elizbeth Nawa, stated that it is a globally acceptable practice for members of the local community to be effectively engaged in knowledge sharing and intelligence gathering in order to improve security.\r\n\r\nThe vice chancellor while appreciating the group for recognizing his contributions to the development of the society, acknowledged that the award will go a long way in motivating him towards giving back to the society. It would be recalled that Veritas University sited a well-equipped police post within the community as well as modern vehicles to aid their operations.\r\nReport compiled by Enuwa Obekpa, Veritas University Abuja');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `matnum` varchar(50) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `rn` varchar(10000) NOT NULL,
  `creatorname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `datetime`, `name`, `matnum`, `dept`, `level`, `amount`, `rn`, `creatorname`) VALUES
(42, 'March-15-2022 02:59:46', 'Michael Mamman', 'vug/csc/18/2239', 'Micro BIOLOGY', 400, 2000, '56734', 'Michael'),
(41, 'March-15-2022 02:59:23', 'Michael Mamman', 'VUG/CSC/18/2456', 'PHYSICS', 300, 2000, '67656', 'Michael'),
(39, 'March-15-2022 00:26:03', 'Peter John', 'VUG/CSC/18/2520', 'COMPUTER SCIENCE', 200, 2000, '55555', 'Michael'),
(40, 'March-15-2022 00:26:20', 'Peter Jane', 'vug/csc/18/2233', 'COMPUTER SCIENCE', 100, 1500, '34567', 'Michael'),
(43, 'March-18-2022 21:33:03', 'Michael Mamman', 'vug/csc/18/2239', 'COMPUTER SCIENCE', 200, 1500, '65733ED', 'Michael'),
(44, 'March-18-2022 21:33:24', 'Michael Mamman', 'vug/csc/18/2239', 'COMPUTER SCIENCE', 300, 2000, '43454GT5', 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `commentss`
--

CREATE TABLE `commentss` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `date`) VALUES
(8, 'This is really nice bro \r\nðŸ‘\r\n', '2022-01-15 23:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approved_by` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `admin_panel_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `datetime`, `name`, `email`, `comment`, `approved_by`, `status`, `admin_panel_id`) VALUES
(12, 'July-18-2021 13:49:56', 'Michael', 'michael@gmail.com', 'fdfgfgfg', 'Michael', 'ON', 21),
(13, 'July-18-2021 13:58:31', 'Michael', 'john@gmail.com', ';;;l;ll;jjh', 'Michael', 'ON', 21),
(14, 'July-18-2021 14:04:12', 'Michael', 'peter@gmail.com', 'TYYTTRYR', 'Michael', 'ON', 21),
(15, 'July-18-2021 15:35:22', 'Michael', 'peter@gmail.com', 'dsdds', 'Michael', 'ON', 18),
(16, 'July-18-2021 17:34:15', 'John', 'john@gmail.com', 'awsds', 'Michael', 'ON', 36),
(17, 'July-18-2021 23:53:58', 'Michael', 'peter@gmail.com', 'dsffdfd', 'Michael', 'ON', 37),
(18, 'July-19-2021 10:01:26', 'Michael', 'john@gmail.com', 'kgjjh', 'Michael', 'ON', 23),
(19, 'July-19-2021 10:02:52', 'Michael', 'john@gmail.com', 'erereererere', 'Michael', 'ON', 21),
(20, 'July-19-2021 11:57:42', 'John', 'peter@gmail.com', 'great post', 'Michael', 'ON', 43),
(21, 'September-17-2021 11:18:37', 'euniceyakson@gmail.com', 'euniceyakson@gmail.com', ',.,ghjnnkjnjkk', 'Michael', 'ON', 41),
(22, 'March-14-2022 22:52:09', 'Michael Mamman', 'michaelmamman86@gmail.com', 'hjuyuu', 'Michael', 'ON', 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentss`
--
ALTER TABLE `commentss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_panel_id` (`admin_panel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `commentss`
--
ALTER TABLE `commentss`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
