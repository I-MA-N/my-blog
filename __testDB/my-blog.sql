-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2024 at 08:22 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutusinfo`
--

DROP TABLE IF EXISTS `tbl_aboutusinfo`;
CREATE TABLE IF NOT EXISTS `tbl_aboutusinfo` (
  `siteTitle` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `siteDescription` varchar(200) COLLATE utf16_persian_ci NOT NULL,
  `socialLink1` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `socialLinkText1` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `socialLink2` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `socialLinkText2` varchar(100) COLLATE utf16_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tbl_aboutusinfo`
--

INSERT INTO `tbl_aboutusinfo` (`siteTitle`, `siteDescription`, `socialLink1`, `socialLinkText1`, `socialLink2`, `socialLinkText2`) VALUES
('MyBlog', '  این یک سایتِ وبلاگ تستی است که امکاناتی از قبیل دیدن وبلاگ، فیلتر وبلاگ، ارسال پیام برای ادمین، پنل ادمین و سطح دسترسی های مختلف به منظور تغییر محتوای سایت وجود دارد.   ', 'https://github.com/I-MA-N', 'گیت هاب', 'https://t.me/IMAN_MOS', 'تلگرام');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

DROP TABLE IF EXISTS `tbl_admins`;
CREATE TABLE IF NOT EXISTS `tbl_admins` (
  `fullName` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf16_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf16_persian_ci NOT NULL,
  PRIMARY KEY (`fullName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`fullName`, `username`, `password`) VALUES
('ایمان مصطفوی', 'iman', 'iman1234'),
('امیر محمد فرهمندیان', 'amir', 'amir1234'),
('آرش فروتن نژاد', 'arash', 'arash1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

DROP TABLE IF EXISTS `tbl_blogs`;
CREATE TABLE IF NOT EXISTS `tbl_blogs` (
  `blogSubject` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `blogBody` longtext CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `blogAuthor` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `blogImgName` varchar(100) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `blogCategory` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `blogDate` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `blogColor` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  PRIMARY KEY (`blogSubject`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`blogSubject`, `blogBody`, `blogAuthor`, `blogImgName`, `blogCategory`, `blogDate`, `blogColor`) VALUES
('فینال لیگ قهرمانان', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'آرش فروتن نژاد', '6.jpg', 'ورزشی', '۱۴۰۳-۰۲-۲۳', 'green'),
('موضوع علمی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان', 'آرش فروتن نژاد', '7.jpg', 'علمی', '۱۴۰۳-۰۲-۲۲', 'blue'),
('react', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'ایمان مصطفوی', '7.jpg', 'برنامه نویسی', '۱۴۰۳-۰۲-۲۳', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `categoryId` int NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryId`, `categoryName`) VALUES
(1, 'برنامه نویسی'),
(2, 'علمی'),
(3, 'ورزشی');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maininfo`
--

DROP TABLE IF EXISTS `tbl_maininfo`;
CREATE TABLE IF NOT EXISTS `tbl_maininfo` (
  `title` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `subTitle` varchar(150) COLLATE utf16_persian_ci NOT NULL,
  `imageName` varchar(100) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `link1` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `linkText1` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `link2` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `linkText2` varchar(100) COLLATE utf16_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tbl_maininfo`
--

INSERT INTO `tbl_maininfo` (`title`, `subTitle`, `imageName`, `link1`, `linkText1`, `link2`, `linkText2`) VALUES
('سلام، به وبلاگ خودت خوش اومدی!', 'لیست وبلاگ ها رو ببین، اگر هم مدیر هستی با دکمه زیر وارد پنل مدیریت شو.', '2.jpg', '/my-blog/index.php', 'لیست وبلاگ ها', '/my-blog/login.php', 'ورود مدیریت');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

DROP TABLE IF EXISTS `tbl_messages`;
CREATE TABLE IF NOT EXISTS `tbl_messages` (
  `messageId` int NOT NULL AUTO_INCREMENT,
  `messageSubject` varchar(100) COLLATE utf16_persian_ci NOT NULL,
  `messageBody` varchar(400) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  PRIMARY KEY (`messageId`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`messageId`, `messageSubject`, `messageBody`) VALUES
(11, 'پیام تستی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
