-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 01:38 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarii`
--

CREATE TABLE `comentarii` (
  `id_coment` int(11) NOT NULL,
  `id_lectii` int(255) NOT NULL,
  `coment` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `creat` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comentarii`
--

INSERT INTO `comentarii` (`id_coment`, `id_lectii`, `coment`, `autor`, `creat`) VALUES
(12, 6, 'Am ]ntilnit o problema La tema ...', 'Zinaida julia', '2017-06-13 12:25:23.3047'),
(13, 6, 'ceva text la comentariu', 'vasea pupkin', '2017-06-14 08:34:46.7875'),
(14, 1, 'ceva comentarii', 'vasea pupkin', '2017-06-14 09:32:04.1692');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `idemail` int(255) NOT NULL,
  `nume` varchar(255) DEFAULT NULL,
  `emaile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`idemail`, `nume`, `emaile`) VALUES
(1, 'sd cbds k', 'ehrbfcuaeybvgui'),
(2, 'rebfhglqureijif;', 'rebvgopirehpg0'),
(3, 'erfbiewlurh', 'erjbvliuerbi'),
(4, 'cristina', 'cristina.haruta@maile.ru'),
(5, 'jdbgfuer', 'cristina@maile.ru'),
(9, 'vasea pupkin', 'vasea.pupkin@mail.ru'),
(14, 'zina', 'zina.jula@mail.ru'),
(15, 'sveta', 'steva.vorotnic@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lectii`
--

CREATE TABLE `lectii` (
  `id_lectii` int(255) NOT NULL,
  `denumire` varchar(255) NOT NULL,
  `dialog` text NOT NULL,
  `vocabular` text NOT NULL,
  `gramatica` text NOT NULL,
  `exercitii` text NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lectii`
--

INSERT INTO `lectii` (`id_lectii`, `denumire`, `dialog`, `vocabular`, `gramatica`, `exercitii`, `created`) VALUES
(1, 'LECTIA 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0000-00-00 00:00:00.000000'),
(6, 'Lecția 4', '<p>이리나: 이것은 무엇입니까?</p>\r\n\r\n<p>안드레이: 그것은 책입니다.</p>\r\n\r\n<p>이리나: 저것은 무엇입니까?</p>\r\n\r\n<p>안드레이: 저것은 공책입니다.</p>\r\n\r\n<p>이리나: 이것은 시계입니까?</p>\r\n\r\n<p>안드레이: 예, 그것은 시계입니다.</p>\r\n\r\n<p>이리너: 이것은 책상입니까?</p>\r\n\r\n<p>안드레이: 아니오, 책상이 아닙니다.</p>\r\n\r\n<p>그것은 의자입니다</p>\r\n.', '<ul>\r\n	<li>이것 - acestă;</li>\r\n	<li>무엇 - ce; 그것 - aceia;</li>\r\n	<li>책 -carte;</li>\r\n	<li>공책 - caiet;</li>\r\n	<li>시계- ceas;</li>\r\n	<li>예 - da;</li>\r\n	<li>책상 - Masă de birou;</li>\r\n	<li>아니요 - nu;</li>\r\n	<li>의자 - scaun;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'yfufliu', 'cxytfkuy', '2017-06-10 18:00:40.549146');

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE `studenti` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teme`
--

CREATE TABLE `teme` (
  `id_teme` int(11) NOT NULL,
  `TEME` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descriereteme` text NOT NULL,
  `Autor` varchar(255) NOT NULL,
  `CREATED` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teme`
--

INSERT INTO `teme` (`id_teme`, `TEME`, `descriereteme`, `Autor`, `CREATED`) VALUES
(1, 'Marele Gatsby', '„Aveam acea convingere familiară că viaţa începea din nou odată cu venirea verii.”', ' F.Scott Fitzgerald', '2017-06-02 17:05:11.200798'),
(5, 'Sylvester Stallone', 'Sâmbătă, 13 octombrie 2012, câțiva membri ai echipei KCC au avut onoarea de a fi invitați să participe la deschiderea Centrului Cultural Coreean din România. Această deschidere a avut loc de la ora 14:00, centrul având sediul în zona Lacul Tei, Strada Alexandru cel Bun nr. 37 E, sector 2, București. Am rămas plăcut impresionați să observăm participarea a unui număr destul de mare de români și ne-am bucurat cu toții de ospitalitatea cu care am fost primiți la acest eveniment. Programul care a durat aproximativ 2 ore a fost bine organizat și nu a lăsat loc plictiselii să se instaleze. Evenimentul a fost deschis de un scurt discurs din partea organizatorilor, după care cei prezenți au avut plăcerea de a asculta diferite cântări bisericești interpretate de membri comunității coreene, fiind ulterior invitați să li se alăture. Au existat atât cântări în limba coreeană, cât și în limba română, iar pe tot parcursul acestui moment din program au existat slide-uri cu versurile în ambele limbi care au facilitat înțelegerea. Introducerea în cultura coreeană nu s-a oprit aici. Au existat și momente de dans tradițional cu evantaie care i-au încântat pe cei din public. Pe lângă dansuri și muzica tradițională coreeană s-a arătat a avea succes, persoane din public fiind invitate să se alăture și să cânte pe scenă la tobe. Au mai urmat și alte cântări, printre care cea în care a fost invitat un tenor și cele asistate de instrumente muzicale precum chitară, vioară și diverse tipuri de flaut tradițional coreean. Ce impact a avut deschiderea acestui centru cultural asupra românilor prezenți la eveniment? Au pătruns pentru un moment în cultura și istoria coreeană, menționând că avem foarte multe de învățat de la aceștia și exprimându-și totodată dorința de reveni și a se implica în posibile proiecte ale centrului dacă li s-ar oferi ocazia. În ce măsură ne poate ajuta acest centru pe noi personal? Cei care ne-au acordat câteva minute ne-au putut confirma că acest centru reprezintă o oportunitate de a afla lucruri noi care le erau inaccesibile în altă parte. Ca iubitori ai culturii asiatice, am căzut de acord că este un proiect în care merită investit.', 'Stiven Evan', '0000-00-00 00:00:00.000000'),
(6, 'Jessica Alba', 'Sâmbătă, 13 octombrie 2012, câțiva membri ai echipei KCC au avut onoarea de a fi invitați să participe la deschiderea Centrului Cultural Coreean din România. Această deschidere a avut loc de la ora 14:00, centrul având sediul în zona Lacul Tei, Strada Alexandru cel Bun nr. 37 E, sector 2, București. Am rămas plăcut impresionați să observăm participarea a unui număr destul de mare de români și ne-am bucurat cu toții de ospitalitatea cu care am fost primiți la acest eveniment. Programul care a durat aproximativ 2 ore a fost bine organizat și nu a lăsat loc plictiselii să se instaleze. Evenimentul a fost deschis de un scurt discurs din partea organizatorilor, după care cei prezenți au avut plăcerea de a asculta diferite cântări bisericești interpretate de membri comunității coreene, fiind ulterior invitați să li se alăture. Au existat atât cântări în limba coreeană, cât și în limba română, iar pe tot parcursul acestui moment din program au existat slide-uri cu versurile în ambele limbi care au facilitat înțelegerea. Introducerea în cultura coreeană nu s-a oprit aici. Au existat și momente de dans tradițional cu evantaie care i-au încântat pe cei din public. Pe lângă dansuri și muzica tradițională coreeană s-a arătat a avea succes, persoane din public fiind invitate să se alăture și să cânte pe scenă la tobe. Au mai urmat și alte cântări, printre care cea în care a fost invitat un tenor și cele asistate de instrumente muzicale precum chitară, vioară și diverse tipuri de flaut tradițional coreean. Ce impact a avut deschiderea acestui centru cultural asupra românilor prezenți la eveniment? Au pătruns pentru un moment în cultura și istoria coreeană, menționând că avem foarte multe de învățat de la aceștia și exprimându-și totodată dorința de reveni și a se implica în posibile proiecte ale centrului dacă li s-ar oferi ocazia. În ce măsură ne poate ajuta acest centru pe noi personal? Cei care ne-au acordat câteva minute ne-au putut confirma că acest centru reprezintă o oportunitate de a afla lucruri noi care le erau inaccesibile în altă parte. Ca iubitori ai culturii asiatice, am căzut de acord că este un proiect în care merită investit.', 'Djon Nelison', '0000-00-00 00:00:00.000000'),
(8, 'asdasd', 'E un fapt bine stabilit că cititorul va fi sustras de conţinutul citibil al unei pagini atunci când se uită la aşezarea în pagină. Scopul utilizării a Lorem Ipsum, este acela că are o distribuţie a literelor mai mult sau mai puţin normale, faţă de utilizarea a ceva de genul \"Conţinut aici, conţinut acolo\", făcându-l să arate ca o engleză citibilă. Multe pachete de publicare pentru calculator şi editoare de pagini web folosesc acum Lorem Ipsum ca model standard de text, iar o cautare de \"lorem ipsum\" va rezulta în o mulţime de site-uri web în dezvoltare. Pe parcursul anilor, diferite versiuni au evoluat, uneori din intâmplare, uneori intenţionat (infiltrându-se elemente de umor sau altceva de acest gen).\r\n\r\n', 'asdasd', '2017-06-13 13:02:21.479284');

-- --------------------------------------------------------

--
-- Table structure for table `teste`
--

CREATE TABLE `teste` (
  `id` int(11) NOT NULL,
  `id_lectii` int(11) NOT NULL,
  `intrebare` varchar(255) NOT NULL,
  `ras_inc` text NOT NULL,
  `ras_cor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teste`
--

INSERT INTO `teste` (`id`, `id_lectii`, `intrebare`, `ras_inc`, `ras_cor`) VALUES
(4, 1, 'cum este amplasat neam', 'etot,tot,vasea,steopa', 'vasea'),
(5, 1, 'cum', 'sacasc,ascas,casc,asc', 'ascas'),
(6, 1, 'Cum se determina', 'vasea,jora,sveta,zina', 'zina'),
(7, 1, 'tets', 'test1,testul2,testul3', 'test1'),
(10, 6, 'cuma na nan a', 'nam,nam,nam,na', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `lvl`) VALUES
(1, 'nivel3', 'nivel3', 3),
(2, 'nivel2', 'nivel2', 2),
(5, 'zina', 'zina', 2),
(6, 'zina', 'zina', 2),
(7, 'sveta', 'sveta', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarii`
--
ALTER TABLE `comentarii`
  ADD PRIMARY KEY (`id_coment`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`idemail`),
  ADD UNIQUE KEY `idemail_3` (`idemail`),
  ADD KEY `idemail` (`idemail`),
  ADD KEY `idemail_2` (`idemail`);

--
-- Indexes for table `lectii`
--
ALTER TABLE `lectii`
  ADD PRIMARY KEY (`id_lectii`);

--
-- Indexes for table `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teme`
--
ALTER TABLE `teme`
  ADD PRIMARY KEY (`id_teme`);

--
-- Indexes for table `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarii`
--
ALTER TABLE `comentarii`
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `idemail` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `lectii`
--
ALTER TABLE `lectii`
  MODIFY `id_lectii` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teme`
--
ALTER TABLE `teme`
  MODIFY `id_teme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
