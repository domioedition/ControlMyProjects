-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 11:59 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlmyprojects`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `project_id`, `task_id`, `user_id`, `content`, `date`) VALUES
(1, 1, 27, 1, 'www', 1506882086),
(2, 1, 27, 1, 'asdfasf', 1506882121),
(3, 1, 27, 1, 'asdfasdf', 1506882195),
(4, 1, 27, 1, 'asdfasdf', 1506882233),
(5, 1, 27, 1, 'asdfasdf', 1506882240),
(6, 1, 27, 1, 'something new', 1506882276),
(7, 1, 27, 1, 'fff', 1507015466),
(8, 1, 28, 1, 'qweoqew[pqwerqwer', 1507016034),
(9, 1, 28, 1, 'f', 1507016069),
(10, 1, 28, 1, 'asdf', 1507016089),
(11, 1, 28, 1, 'f', 1507016110),
(12, 1, 28, 1, 'u', 1507016129),
(13, 1, 29, 1, 'ff', 1507016418),
(14, 1, 29, 1, 'Ð¹ÑƒÑ†ÐºÐ¹ÑƒÑ†Ðº', 1507018296),
(15, 1, 30, 1, 'qwerty', 1507023588),
(16, 1, 32, 1, 'qoiwerpoiqwporiqwr', 1507024167),
(17, 1, 32, 1, 'ASDFASDFEASDF', 1507024173),
(18, 1, 33, 1, 'Donec hendrerit dui a sapien viverra, ac ultrices velit blandit. Integer in vestibulum mi, aliquam dapibus nunc. Maecenas viverra metus sed tortor dignissim ultricies. Etiam lobortis non velit id dignissim. Pellentesque facilisis ipsum nisi, non dignissim dui accumsan quis. Suspendisse lacinia quis felis vel scelerisque. Donec in nisi velit. Ut imperdiet lectus eget dignissim venenatis.', 1507024604),
(19, 1, 33, 1, 'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. Curabitur posuere, eros vel efficitur dictum, lorem justo venenatis est, sit amet viverra lacus arcu eget neque. Donec eu elementum ipsum. Suspendisse et odio at mi dapibus lobortis eu ac metus. Curabitur at urna eu urna facilisis pulvinar. Maecenas tincidunt est id blandit accumsan.', 1507024613),
(20, 1, 33, 1, 'Praesent efficitur elit non luctus mattis. Integer venenatis magna lacus, at sodales ligula ultricies in. Aenean leo nibh, tempus a ante quis, maximus mattis lacus. Aliquam accumsan sagittis libero. Quisque ac leo eu nisi semper interdum. Aliquam erat volutpat. Nulla in magna eu ligula tempor placerat blandit eget enim. Maecenas laoreet venenatis velit finibus pulvinar. Sed urna mi, fringilla in auctor nec, dignissim nec metus.', 1507024621),
(21, 1, 33, 1, 'Phasellus elit est, porttitor vitae pretium eget, finibus tempor est. Sed varius blandit tempus. Suspendisse tristique nulla imperdiet gravida luctus. Vestibulum vel magna sit amet urna maximus accumsan. Maecenas vestibulum pretium eros vel bibendum. Proin ac ornare massa. Praesent consectetur dolor sed eleifend porttitor. Nam ultrices lacus a quam ornare ultrices. Integer ultricies dictum tristique. Donec venenatis turpis et hendrerit malesuada. Nunc iaculis nisl diam, eget convallis metus dapibus eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut dui sem, fermentum sit amet tristique non, auctor a tellus. Morbi mauris eros, lacinia a convallis id, auctor at ante. Mauris pellentesque pulvinar ante, at tempus nunc faucibus non.', 1507024632),
(22, 1, 33, 1, 'Phasellus tincidunt, justo a placerat pulvinar, orci nisl cursus quam, eget convallis nibh sem vehicula neque. Morbi suscipit eu tellus vitae rhoncus. Donec non sapien mollis, sollicitudin libero vel, elementum lorem. Sed tincidunt pretium egestas. Nullam convallis purus vitae fermentum sodales. Vestibulum sed magna turpis. Phasellus eu augue nulla. Nam facilisis velit eget risus efficitur cursus. Quisque non arcu nec lacus bibendum iaculis. Aenean pulvinar sed ligula eu ultricies. Aliquam quis bibendum augue, id facilisis augue. Fusce laoreet leo vitae ipsum consequat, id auctor est efficitur. Nunc non ligula dictum, aliquam elit sodales, mattis lacus. Nunc sollicitudin tincidunt bibendum. Pellentesque feugiat, enim eget tempor porttitor, justo ante sodales turpis, et suscipit orci diam sit amet lectus.', 1507025344),
(23, 1, 33, 1, 'Praesent lacus purus, iaculis non rhoncus et, bibendum et eros. Integer sit amet quam vel felis posuere imperdiet. Cras sagittis tempor dolor. Sed sed lacinia justo. Nulla vestibulum, ex et tempus ornare, urna ligula malesuada tortor, sed pretium orci quam et odio. Nulla et odio sed diam mollis laoreet. Vivamus non ligula volutpat, sollicitudin eros porttitor, maximus sapien. Vivamus sit amet mi dolor. Donec a faucibus ex. Aliquam consequat libero sit amet lacus imperdiet, vitae elementum purus aliquet. ', 1507025359),
(24, 1, 33, 1, 'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. Curabitur posuere, eros vel efficitur dictum, lorem justo venenatis est, sit amet viverra lacus arcu eget neque. Donec eu elementum ipsum. Suspendisse et odio at mi dapibus lobortis eu ac metus. Curabitur at urna eu urna facilisis pulvinar. Maecenas tincidunt est id blandit accumsan.', 1507025380),
(25, 1, 33, 27, 'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. ', 1507026864),
(26, 1, 33, 27, 'Sed pellentesque, velit vel congue auctor, eros lorem efficitur diam, in sodales nulla diam a mauris. Maecenas consequat egestas convallis. Maecenas sit amet augue vel eros accumsan mollis. Curabitur et est vulputate, viverra risus eu, tincidunt tortor. ', 1507026876),
(27, 1, 33, 2, 'Proin ac ornare massa. Praesent consectetur dolor sed eleifend porttitor. Nam ultrices lacus a quam ornare ultrices. Integer ultricies dictum tristique. Donec venenatis turpis et hendrerit malesuada. Nunc iaculis nisl diam, eget convallis metus dapibus eu.', 1507026902),
(28, 1, 33, 2, 'Nulla in magna eu ligula tempor placerat blandit eget enim. Maecenas laoreet venenatis velit finibus pulvinar. Sed urna mi, fringilla in auctor nec, dignissim nec metus.', 1507026912),
(29, 1, 32, 2, 'fff', 1507028122),
(30, 1, 33, 1, 'test', 1507030843);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_user_id_creator` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id_creator`, `project_name`, `project_description`) VALUES
(1, 1, 'RESTfull application', 'Creating restfull application'),
(2, 1, 'Simple management', 'Creating api for convinient network management');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_creator` int(11) NOT NULL,
  `user_id_assignee` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `task_date_creation` int(11) NOT NULL,
  `task_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id_creator`, `user_id_assignee`, `task_name`, `task_description`, `task_date_creation`, `task_status`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus arcu ante, a euismod lacus ultricies feugiat. Praesent massa nunc, tempus sed ullamcorper vel, auctor vitae nisl. Curabitur pulvinar turpis ex, et posuere massa dictum ut. Vestibulum semper nunc eget justo tempus, ut ullamcorper nisl ornare. Nulla porttitor nisi vel risus mollis dignissim. Duis pretium vulputate turpis vitae lacinia. In vitae nisl vestibulum, porta libero posuere, tincidunt nunc.', 1506868900, 0),
(2, 1, 1, 'Nunc tempor diam urna, nec porta nunc consequat id. ', 'Nunc tempor diam urna, nec porta nunc consequat id. Duis vitae tincidunt odio, eu porttitor ante. Maecenas non lobortis arcu. Vestibulum ornare semper cursus. Nam finibus cursus purus, quis consectetur tellus. Aliquam sed ultrices metus. Aliquam nibh nisl, aliquam vitae imperdiet sed, commodo eget nibh. Praesent est magna, accumsan eu turpis at, sagittis faucibus orci. Sed ac odio in leo maximus elementum. Ut et rutrum ipsum, et interdum nisl. Nunc non congue turpis.\r\n\r\nNullam maximus tellus id diam semper, a dignissim est luctus. Maecenas vitae egestas dui, eu ornare eros. Etiam posuere vehicula magna, at convallis purus posuere ut. Aenean placerat sapien eu purus viverra, nec porttitor quam porta. Mauris gravida urna at turpis placerat ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum convallis fermentum. Nullam tincidunt varius ligula sit amet maximus. Duis rhoncus sagittis tortor, eget feugiat lorem dignissim non. Duis pretium quis nulla eget auctor. Sed vel laoreet sem, non euismod elit. Aliquam erat volutpat. Aenean dictum a est porta tincidunt. Curabitur commodo pretium porta. Nunc vitae fringilla ex. Morbi id mauris dictum, pretium turpis eget, lacinia sapien.', 1506868912, 0),
(3, 1, 1, 'Integer ultrices mattis venenatis. Integer nec arcu ', 'Integer ultrices mattis venenatis. Integer nec arcu ante. In condimentum tellus et magna hendrerit mattis. Phasellus ut justo eu arcu convallis egestas non id sem. In eu sagittis dui, vel scelerisque mi. Curabitur eu eros ut ante tempor efficitur. Integer ac lorem eu orci lacinia malesuada. In sit amet risus elementum, scelerisque velit ut, volutpat ligula. Donec a ante sed quam blandit egestas vel non tortor. Donec vitae maximus lectus, vel porta elit. Duis dignissim bibendum arcu, eu ornare nulla mollis id. Quisque at fermentum mi, non pretium nunc. Etiam vel eros massa. Proin dictum diam vel mi tincidunt, et gravida enim blandit.', 1506868926, 0),
(4, 1, 1, 'Curabitur tempor commodo tellus nec rutrum. Nulla ', 'Curabitur tempor commodo tellus nec rutrum. Nulla dictum leo sit amet ante elementum, id convallis magna consectetur. Aenean tempus, est eget lacinia varius, ex odio sodales ligula, vel elementum nibh arcu non quam. Sed accumsan dui a diam rhoncus placerat. Quisque vitae lectus vel dui vestibulum consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur iaculis vel lacus sed eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent sed lacus nec erat porta molestie vitae ut mauris. Etiam eu leo id urna sodales iaculis. Duis in ante eu velit vehicula aliquet.', 1506868935, 0),
(5, 1, 1, 'Praesent lacus purus, iaculis non rhoncus et, bibendum et eros. Integer sit amet quam', 'Praesent lacus purus, iaculis non rhoncus et, bibendum et eros. Integer sit amet quam vel felis posuere imperdiet. Cras sagittis tempor dolor. Sed sed lacinia justo. Nulla vestibulum, ex et tempus ornare, urna ligula malesuada tortor, sed pretium orci quam et odio. Nulla et odio sed diam mollis laoreet. Vivamus non ligula volutpat, sollicitudin eros porttitor, maximus sapien. Vivamus sit amet mi dolor. Donec a faucibus ex. Aliquam consequat libero sit amet lacus imperdiet, vitae elementum purus aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum efficitur ultrices aliquam. Maecenas laoreet, urna id condimentum faucibus, lorem orci eleifend leo, et laoreet justo tellus quis mi. Nam rhoncus vestibulum nisl vitae fringilla. Fusce arcu eros, malesuada non ipsum eget, viverra vehicula quam. Pellentesque iaculis vitae arcu vitae pulvinar.\r\n\r\nNulla auctor felis vitae mauris aliquam varius. Suspendisse interdum erat id nisi varius, in vehicula risus egestas. Mauris scelerisque dignissim luctus. Phasellus feugiat sed justo a dapibus. Sed aliquam, erat non sagittis accumsan, libero ipsum fermentum mi, in ultricies mauris purus non tellus. Pellentesque et nunc risus. Etiam hendrerit nibh aliquam, eleifend lectus vel, dapibus arcu. Praesent sed enim eu mi feugiat porttitor. Donec bibendum ante id justo lobortis, ut ultricies massa sollicitudin. Duis varius imperdiet tellus eget sollicitudin. Maecenas fringilla dapibus leo, sit amet semper metus bibendum ac. Nullam tristique est a urna dapibus dictum. Fusce vel pretium justo. Vestibulum enim ligula, euismod at ligula id, porta pulvinar nulla. Quisque aliquet imperdiet justo nec pellentesque. Vivamus vitae vestibulum nisi.', 1506868945, 0),
(6, 1, 1, 'Nulla convallis fermentum metus, a tincidunt massa ', 'Nulla convallis fermentum metus, a tincidunt massa blandit malesuada. Aliquam volutpat elementum nunc. Fusce dui sapien, interdum sed tortor sit amet, varius molestie ipsum. Ut eu lectus id augue maximus tincidunt. Aenean hendrerit enim sit amet quam dignissim, nec porta augue gravida. Etiam luctus hendrerit mauris nec accumsan. Curabitur maximus vel dolor eu efficitur. Nulla cursus eros sit amet justo efficitur, et ultrices tortor feugiat. Mauris interdum neque ipsum, quis condimentum lectus blandit non. Vivamus quis volutpat eros. Ut eu leo porta, cursus lacus non, dictum enim. Nullam tincidunt vitae quam ac fermentum. Vivamus at tortor mi. Nullam eget lobortis mi, at scelerisque ipsum. Fusce in porttitor odio. Pellentesque porttitor urna cursus, suscipit massa in, dignissim libero.', 1506868956, 0),
(7, 1, 1, 'Duis vitae dui in tortor iaculis vehicula. Nullam non bibendum sem. ', 'Nam at tristique lectus. Aliquam mattis, eros ac euismod blandit, purus orci ultrices sem, sed placerat leo dui et arcu. Sed tristique quis orci id posuere. Mauris suscipit turpis ac pellentesque elementum. Suspendisse id lacinia lacus. Etiam vel maximus dolor. Ut porttitor vitae mi sit amet viverra. Sed semper mauris ante, in sodales mauris rhoncus sit amet.\r\n\r\nQuisque sit amet rhoncus lorem, et interdum nisi. Nullam dictum vulputate mi, ut egestas eros tincidunt ut. Donec ut nulla lobortis, varius sapien a, iaculis ipsum. Proin tristique molestie libero ac vehicula. Duis tempor neque at justo elementum fringilla. Vestibulum eget risus odio. Maecenas lobortis tortor non sem semper egestas. Duis quis odio egestas, vestibulum nulla vitae, euismod quam. Duis mollis justo sit amet egestas mattis. Sed tempor orci condimentum enim tincidunt mattis eu in est. Donec consequat enim tellus, ut sagittis tellus semper vel. Cras hendrerit, nibh sed pharetra maximus, leo magna posuere magna, nec porta ex est sed diam. Phasellus facilisis velit ut enim rhoncus, et scelerisque turpis blandit.\r\n\r\nCras quis velit erat. Nunc pellentesque non est non bibendum. Aliquam maximus neque nec maximus dictum. Suspendisse id accumsan odio. Duis vitae dui in tortor iaculis vehicula. Nullam non bibendum sem. Ut ullamcorper, lacus ut volutpat fringilla, orci lectus efficitur velit, quis sollicitudin tellus turpis et elit. Duis eu tincidunt dui. Phasellus gravida posuere urna non auctor.', 1506868970, 0),
(8, 1, 1, 'Curabitur eget laoreet dolor, sit amet pulvinar ipsum.', 'Curabitur eget laoreet dolor, sit amet pulvinar ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis hendrerit mollis ante sed ultrices. Mauris dolor ante, rhoncus id massa quis, egestas mollis tortor. Sed luctus eleifend ante eget efficitur. Fusce nec mauris a mi varius pellentesque a ac neque. Donec pulvinar at sapien nec bibendum. Nam eget maximus sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris euismod, est sed dapibus mollis, erat dui tincidunt eros, quis scelerisque risus turpis et leo. Etiam nibh eros, suscipit eu faucibus sit amet, ultrices nec velit. Pellentesque eget nulla sit amet purus semper feugiat.\r\n\r\nMaecenas vitae mauris hendrerit nibh dignissim congue. Praesent maximus, mi vitae egestas pellentesque, purus arcu finibus mi, bibendum suscipit augue dolor vitae sem. Mauris a ligula tellus. Donec sagittis at odio ac iaculis. Ut sit amet sapien ac eros dignissim semper ac suscipit erat. Donec sodales justo magna, et imperdiet est iaculis non. In interdum ligula a libero consequat, fermentum pulvinar lorem feugiat. Vivamus egestas, lacus sit amet dignissim semper, orci elit dictum arcu, sit amet sodales leo risus et elit. Ut bibendum nisi nec eleifend elementum. Fusce tincidunt faucibus erat eget rutrum. Nullam vel eros sed libero accumsan porta vel id odio. Phasellus fermentum a turpis nec malesuada. Proin commodo urna eu tortor venenatis, non efficitur libero maximus.', 1506868980, 0),
(9, 1, 1, 'Quisque elementum volutpat nisi quis scelerisque. ', 'Quisque elementum volutpat nisi quis scelerisque. Nam bibendum varius nisl in efficitur. Pellentesque ut nibh orci. Duis sodales tempus tortor, eget lobortis est posuere vel. Suspendisse porttitor elementum tortor ut blandit. Vivamus in mauris quis tortor venenatis euismod. Suspendisse vel feugiat nibh, eleifend dapibus lacus. Mauris semper aliquet erat. Nulla facilisi. Donec viverra rhoncus hendrerit. Nullam lobortis ligula vitae ipsum posuere ultrices. Nullam maximus scelerisque ipsum fermentum eleifend. Nunc iaculis a nibh in tristique. Morbi ut leo pretium ex malesuada fermentum in ut ipsum. Nam ultricies, elit eget condimentum commodo, velit felis pulvinar odio, ac mollis augue mi aliquam magna. Sed finibus elementum nisl non sodales.', 1506868989, 0),
(10, 1, 1, 'Donec at pulvinar leo, sit amet cursus turpis. In sem arcu, condimentum nec ', 'Donec at pulvinar leo, sit amet cursus turpis. In sem arcu, condimentum nec suscipit at, consectetur a elit. Donec porttitor, diam non porttitor porttitor, ante elit suscipit tellus, id rhoncus ante dui eget ante. Pellentesque et pellentesque nunc. Ut vestibulum erat nunc, a fringilla ante feugiat sit amet. Maecenas non ultricies orci. Donec vitae est eu ante posuere dapibus. Praesent pretium lorem eget suscipit hendrerit. Nunc eleifend placerat risus, sit amet egestas nunc venenatis id.\r\n\r\nQuisque sed elementum justo, iaculis tempus nunc. Mauris ultrices faucibus quam, non consequat ante porttitor quis. Donec vitae nisl vel ligula vestibulum tempor ac vel ante. Quisque eu eros ut magna consectetur rhoncus id quis ex. In ac tincidunt sem. Etiam tempor, lectus id bibendum eleifend, nisi risus iaculis neque, at pretium enim nibh eu diam. Vestibulum congue risus et lectus tincidunt, lobortis malesuada tortor aliquet. Donec id odio a leo mattis commodo.', 1506869001, 0),
(11, 1, 1, 'Phasellus tincidunt, justo a ', 'Phasellus tincidunt, justo a placerat pulvinar, orci nisl cursus quam, eget convallis nibh sem vehicula neque. Morbi suscipit eu tellus vitae rhoncus. Donec non sapien mollis, sollicitudin libero vel, elementum lorem. Sed tincidunt pretium egestas. Nullam convallis purus vitae fermentum sodales. Vestibulum sed magna turpis. Phasellus eu augue nulla. Nam facilisis velit eget risus efficitur cursus. Quisque non arcu nec lacus bibendum iaculis. Aenean pulvinar sed ligula eu ultricies. Aliquam quis bibendum augue, id facilisis augue. Fusce laoreet leo vitae ipsum consequat, id auctor est efficitur. Nunc non ligula dictum, aliquam elit sodales, mattis lacus. Nunc sollicitudin tincidunt bibendum. Pellentesque feugiat, enim eget tempor porttitor, justo ante sodales turpis, et suscipit orci diam sit amet lectus.', 1506869015, 0),
(12, 1, 1, 'In hac habitasse platea ', 'In hac habitasse platea dictumst. Nunc accumsan dui eu ex mattis, vel sagittis diam laoreet. Phasellus id orci massa. Nullam maximus, risus eget consectetur accumsan, nunc velit pellentesque tellus, eget euismod urna augue ut tortor. Donec eget augue vel orci iaculis ultrices. Aenean maximus vehicula orci vitae hendrerit. Integer condimentum pharetra neque, in placerat nunc blandit vel. Duis luctus euismod purus, ac volutpat urna rutrum sed. Vestibulum quis dui quam. Sed in felis turpis. Sed id ante diam. Pellentesque cursus varius tellus, in porttitor ex efficitur a. Sed scelerisque consequat urna, non congue erat laoreet sit amet. Cras rhoncus dui purus, gravida suscipit sapien euismod et. Nullam rhoncus libero leo, id gravida dui vestibulum vitae. Mauris lorem velit, pellentesque eu orci et, rhoncus tincidunt justo.', 1506869027, 0),
(13, 1, 1, 'Aliquam rutrum tincidunt ', 'Aliquam rutrum tincidunt volutpat. Maecenas egestas egestas erat a rutrum. Nam id euismod risus, vel tempor mi. Praesent sed odio ut ligula placerat condimentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras laoreet nulla in ultricies sodales. Nunc ornare arcu ut dui sollicitudin commodo. Aliquam viverra neque in nunc aliquet, id luctus odio auctor.\r\n\r\nSed nec pellentesque elit. Donec vulputate egestas lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ac justo eu orci dapibus semper viverra ut nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum cursus vehicula magna quis tristique. In consectetur tincidunt turpis sit amet porta.', 1506869037, 0),
(14, 1, 1, 'elementum sagittis nisi sed maximus. Proin ac tellus ullamcorper quam ', 'Ut mattis sapien id rutrum sodales. Nullam tincidunt, tellus vel iaculis sollicitudin, magna purus iaculis mi, ac tincidunt risus erat eget dolor. Cras tincidunt lacus vel neque faucibus varius. Integer in vulputate libero, eu tempus nibh. Aenean ornare eu turpis posuere fermentum. Sed vel vulputate nisi. Ut scelerisque ipsum sit amet sollicitudin pretium. In lectus dui, bibendum vestibulum blandit sed, elementum sed tortor. Vivamus rhoncus at urna a aliquam. Duis elementum sagittis nisi sed maximus. Proin ac tellus ullamcorper quam fermentum pretium quis non ipsum. Nam justo sem, maximus tincidunt molestie molestie, molestie eget est. Vestibulum scelerisque enim vel viverra efficitur. Vestibulum id metus placerat, rhoncus nisi aliquam, luctus orci.', 1506869049, 0),
(15, 1, 1, 'Maecenas porttitor ', 'Maecenas porttitor magna ac sodales dictum. Pellentesque luctus mi at aliquet malesuada. Morbi non rhoncus augue. Cras commodo nisl ut neque consequat, id dignissim velit maximus. Maecenas ac ante magna. Aliquam tempus est tellus, et imperdiet nunc consequat id. Sed tincidunt nibh et enim iaculis, sed molestie velit accumsan. Aliquam vestibulum vitae tellus vel pharetra. Maecenas et pharetra lorem. Praesent quis purus dapibus, pellentesque tortor sed, ultrices nulla. Curabitur pretium mauris neque, et suscipit eros feugiat ut. Nunc faucibus velit neque, et tempus sapien condimentum eu. Nullam rutrum tellus vitae purus consectetur, vel dignissim odio pulvinar. Vivamus ultricies auctor sem ut fermentum. Nullam sodales quam eu velit placerat dictum.', 1506869060, 0),
(16, 1, 1, 'Suspendisse volutpat nisi eget blandit bibendum. ', 'Suspendisse volutpat nisi eget blandit bibendum. Donec dui nulla, accumsan in eleifend vitae, euismod sed massa. In libero justo, hendrerit nec arcu dignissim, semper consectetur est. Maecenas at gravida enim. Maecenas malesuada tempus velit eu lobortis. Pellentesque id pellentesque dui. Sed eleifend eu turpis eu finibus. Fusce hendrerit arcu volutpat, venenatis eros sit amet, ultricies sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis mauris nulla, ultrices ac mollis ut, commodo quis lorem. Nullam scelerisque pulvinar placerat. Cras blandit, metus vel pellentesque egestas, sem turpis sodales lacus, eu sagittis ex tellus non sem. Quisque semper enim in ligula ultrices iaculis.', 1506869071, 0),
(17, 1, 1, 'Vivamus suscipit tincidunt erat, id luctus elit posuere id. ', 'Vivamus suscipit tincidunt erat, id luctus elit posuere id. Proin ultrices felis id sapien congue, vitae gravida lectus fermentum. Fusce nec pellentesque enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas tempor nibh in magna egestas imperdiet. Morbi rhoncus magna vitae libero sollicitudin gravida. Donec pellentesque, magna eget egestas bibendum, diam justo efficitur nibh, in aliquet quam leo vel urna. Etiam sit amet felis ut orci finibus molestie ut vel orci. Donec faucibus pharetra quam, at ullamcorper sapien viverra vitae. Nulla imperdiet in purus a porta. Suspendisse sollicitudin dolor in purus dignissim, rhoncus venenatis leo consequat. Nulla blandit sagittis elit non molestie.', 1506869082, 0),
(18, 1, 1, 'Donec id tempus enim. Orci varius natoque penatibus et magnis dis parturient ', 'Donec id tempus enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pellentesque congue consequat. Suspendisse non felis efficitur, bibendum lacus id, efficitur risus. Curabitur vitae lorem faucibus neque sollicitudin tincidunt et ac erat. Praesent et rutrum eros, sit amet pulvinar erat. Quisque fringilla enim mauris, eu dictum lectus porttitor non. Donec tempor nunc vel sem condimentum auctor. Etiam nisi velit, molestie non aliquam vitae, rhoncus nec mi. Nam venenatis vitae dui in vestibulum. Vestibulum elementum ac erat ac dignissim. Nunc condimentum ante nec pharetra iaculis. Praesent nec odio rhoncus dolor fringilla ultricies vitae in arcu. Mauris feugiat tincidunt varius. Etiam tortor nulla, tempor in dolor et, ultricies gravida turpis. Praesent id facilisis leo, id tincidunt urna.', 1506869091, 0),
(19, 1, 1, 'Vivamus dignissim nisl at sodales pharetra.', 'Vivamus dignissim nisl at sodales pharetra. Nam sed feugiat augue. Ut mattis orci non felis condimentum, non maximus nunc dictum. Fusce sodales mauris vitae lacus consectetur porta. Nulla vitae placerat ex, tempus hendrerit tortor. Nunc dapibus pellentesque felis et pretium. Aenean accumsan tempus eleifend. Curabitur augue orci, iaculis et fringilla id, condimentum id turpis. Curabitur nibh dui, auctor id urna quis, luctus pellentesque felis. Curabitur odio eros, mollis et lacinia vitae, elementum nec libero. Praesent sed neque lorem. Morbi laoreet aliquet odio, a lobortis orci vulputate sed. Morbi malesuada nibh at mollis pulvinar. Morbi a purus dolor. Cras mauris eros, ullamcorper fringilla hendrerit ut, egestas ut neque.', 1506869102, 0),
(20, 1, 1, 'Fusce interdum id metus sit amet accumsan. ', 'Fusce interdum id metus sit amet accumsan. Duis sagittis, lectus at dictum sollicitudin, tortor purus gravida ante, quis cursus mauris ipsum ut magna. Vivamus sed nisl sit amet mi rhoncus feugiat sed et magna. Aliquam risus dolor, dapibus eget tristique tempor, egestas sed nisi. Nunc aliquet orci eget libero ultricies, at consectetur augue cursus. Proin in diam blandit augue sodales dictum id vitae nisi. Donec fermentum felis urna, at sagittis justo molestie id. Fusce at lectus eu lacus dictum elementum volutpat ut risus. Nam ac ligula ac arcu eleifend tincidunt at quis massa. Proin volutpat metus at magna luctus, id venenatis turpis pharetra. Curabitur lobortis ornare dolor, id commodo elit vestibulum vitae. Curabitur ut est risus. Vivamus molestie aliquam arcu. In aliquet tortor sit amet lectus rutrum, quis commodo ante bibendum.', 1506869112, 0),
(21, 1, 1, 'Curabitur hendrerit enim vulputate,', 'Curabitur hendrerit enim vulputate, feugiat elit a, porta elit. Aliquam ac quam vitae nibh pharetra tincidunt a quis turpis. Quisque eget orci quis nisi pretium rutrum eget eget sapien. Integer luctus justo odio, commodo convallis justo rhoncus quis. Maecenas consequat nulla a sollicitudin varius. Aenean pellentesque facilisis tellus et auctor. Curabitur imperdiet porta tortor nec suscipit. Pellentesque et orci consectetur, euismod augue at, scelerisque diam.', 1506869122, 0),
(23, 1, 1, 'Nulla consectetur, ligula vitae euismod sodales, purus ', 'Nulla consectetur, ligula vitae euismod sodales, purus lorem suscipit mi, quis euismod ex turpis vitae purus. Aenean pharetra commodo mauris a cursus. Integer mattis vulputate neque eu ullamcorper. Aliquam aliquam fringilla tincidunt. Nullam malesuada ex sit amet arcu commodo consequat. Nulla ac mi efficitur, dapibus metus vel, luctus est. Phasellus sit amet bibendum dui. Aenean consectetur enim non ipsum imperdiet, at hendrerit quam luctus. Phasellus posuere tellus a ipsum tempor blandit. Sed rutrum velit sed magna pellentesque porttitor sit amet ac sapien. Vestibulum urna orci, fermentum a lectus eget, ultricies tincidunt purus. Cras at pharetra ante. Praesent interdum augue posuere arcu lacinia, vitae pharetra orci fringilla. Donec luctus volutpat risus, ut cursus lorem tempus nec. Nam tempus, lacus ut blandit molestie, arcu lectus condimentum massa, quis pellentesque diam purus in ligula.', 1506869142, 0),
(24, 1, 1, 'Donec pellentesque nunc non auctor interdum. ', 'Donec pellentesque nunc non auctor interdum. Curabitur viverra tellus nec facilisis ullamcorper. Sed elementum laoreet diam, malesuada tincidunt quam elementum sed. Vivamus semper non velit sed pharetra. Integer ut mattis elit. Vestibulum ut posuere erat. Morbi enim nulla, fringilla nec feugiat volutpat, aliquet quis tellus. Quisque porttitor eget ante ac pretium.\r\n\r\nCras quam justo, ultricies eu diam eget, molestie volutpat tortor. Suspendisse sit amet magna nunc. Sed risus sem, lobortis sed lorem ut, convallis fermentum lacus. In tempus urna diam, vel iaculis lacus elementum feugiat. Integer rhoncus, nibh vel volutpat tincidunt, ante turpis gravida dolor, a accumsan est metus eget tortor. Sed in magna eget lorem vestibulum viverra vel ac metus. Donec egestas sodales enim at tincidunt. Proin sed porttitor neque. Mauris id finibus leo, a accumsan dolor.', 1506869150, 0),
(33, 27, 1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1507024530, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `rights` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `rights`) VALUES
(27, 'Garry', 'Garry@gmail.com', '$2y$12$.Vo0/U6zLbdh0a92rQuYjOrrSq6pB842y4F6qaqeLd3uAitYVZHH6', 15),
(1, 'Mars', 'mars@mars.ua', '$2y$12$GA7WoL4cgkpsg24i7nUk0uN6vMpxiIPZvbh29J9wEw4W.T7RbtVy2', 15),
(2, 'Bob', 'bob@ya.ru', '$2y$12$vzJpwx6QJs/5qXZMqvl3qOkih11vkNE8Bm6LLRmOT2LyuOUprGFWC', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
