-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2015 at 11:01 AM
-- Server version: 5.6.20
-- PHP Version: 5.4.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lawfirm`
--
CREATE DATABASE IF NOT EXISTS `lawfirm` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lawfirm`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`) VALUES
(1, 'Overview of Contract Law', '<p>Contract law is about the enforcement of promises, transactions and agreements. Its rules decide which agreements are legally binding contracts, what the terms and conditions of the contract are, and what the implications are, in the the context of the dispute before the court.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contracts arise continuously in everyday life and business without the parties involved being necessarily conscious, that legal consequences are involved. For example, the purchase of goods involves a contract by which&nbsp; by money in exchange for the commodity. In this case, there is an immediate agreement with contemporaneous delivery and payment.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Most everyday contracts not be of practical relevance if, for example, the item turns out to be faulty or it does not conform with its description.&nbsp; If this happens, then the rights and obligations of the buyer and seller depend on contract law rules. If the goods are faulty, contract law provides that there has been a breach of the seller&rsquo;s obligations.&nbsp; Under contract law, the seller must, replace the goods and / or compensate the buyer.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contract law covers the whole range of agreements and transactions from the&nbsp; purchase of groceries to a complex and detailed contract for the construction of a commercial building. The same broad rules apply to the range of contracts. There are special consumer protection rules that apply to business to consumer contracts that do not apply to other contracts.</p>\r\n<hr />\r\n<h3>\r\n	Pe</h3>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	A simple purchase from a retailer involves simultaneous agreement, delivery and payment. A contract can also involve an exchange of promises to do or omit to do something in the future. For example, a buyer may agree to purchase a piece of furniture, with delivery and payment is to be made at a future date. In this case, there is an immediate legally binding contract to&nbsp; buy and sell on the agreed date.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contract law upholds bargains and requires each party to comply with his promise. If either fails to do so, he may be compelled to do so or more likely, ordered to pay compensation for the loss incurred by the innocent party. If the seller reneges on his promise to deliver, the buyer has a right of compensation under contract law.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	If the buyer refuses to accept the commodity, then the seller can claim compensation for his loss. This&nbsp; will generally be his loss of profit, where it is&nbsp; standard item that can be sold to another. If the item is unique and cannot be sold into a market, then that he will be entitled to compensation for the loss he suffer in selling it for whatever price he can get for it together with reimbursement of expenses. If he cannot sell it at all, then he may be compensated for the full price and expenses and legal costs incurred.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Similarly, if the buyer refuses to pay when payment is due, the seller has a right to cancel or if he has delivered, a right to recover the price.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	If&nbsp; the buyer accepts the item , but does not pay, the seller has the right&nbsp; under contract law to recover the price plus interest and costs. There are special court procedures for&nbsp; debt collection cases where there is no genuine dispute about the liability to pay. In these cases a court order for payment may issue without&nbsp; a court hearing</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	The innocent party is obliged to minimise his loss. If the seller has defaulted, the buyer should endeavor to buy an alternative commodity. If he must pay a higher price, he will generally be entitled to compensation for the difference in price and for expenses incurred and&nbsp; legal costs incurred.</p>\r\n<hr />\r\n<h3>\r\n	Purpose of Contract Law</h3>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contract Law upholds promises. It allows individuals and businesses to proceed in the market assurance and certainty that their transactions and agreements must be complied with. Contract law does not punish in the same way as criminal law does. Contracts are not upheld for their own sake. A breach of contract is not a breach of criminal law.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	If a party to a contract does not fulfill his promise, but no loss or expense whatsoever is suffered in consequence, then there will generally be no right of compensation for breach of contract. Where the breach causes no loss, it will generally be the most economically efficient solution to allow either party to undertake an alternative transactions. In this way, contract law upholds the free market.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contract Law upholds expectations. If an item is agreed to&nbsp; be sold for &euro;6, the law upholds this agreement. If the seller refuses to sell and the buyer can only but it for &euro;10 elsewhere, he must compensate the buyer &euro;4 for the extra cost of purchasing an alternative and a further sum to cover interest and expenses. In this way, the law upholds the original bargain.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	If the buyer in the example can buy an equivalent alternative for &euro;5, then he has suffered no loss other than the expense of arranging the alternative transaction. The liability for breach of contract would be limited to, at most,&nbsp; this expense.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	If a seller of items can&nbsp; sell the same item to another person for the same or more money, he is generally entitled to the loss of profit on that particular sale. There has beeen one less sale.</p>\r\n<hr />\r\n<h3>\r\n	Variety of Contracts</h3>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	The variety and types of contracts are infinite, subject only to the constraints of what the law makes unlawful and illegal. There are some types of contract that the&nbsp; law will not enforce on policy grounds. Many everyday situations such as employment relationships, transport and carriage, club membership and sale, purchase repair of goods are governed by contract law. In some cases, legislation, for example employment or consumer protection law overrides particular contract terms.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contracts may verbal, written, informal or complex. In the case for example&nbsp; of complex plant and equipment or a commercial building, a detailed contract with written terms and conditions may be negotiated at length. Some contracts, such as those for the sale of goods are fleshed out by implied legal terms. Sometimes terms are optional and can be overridden. In other cases, particularly in employment and consumer cases, the contract cannot&nbsp; override minimum protection terms.</p>\r\n<hr />\r\n<h3>\r\n	Nature of Contractual Obligations</h3>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Generally contractual obligations are unconditional, unless (in the unusual event) it is specified the obligation is otherwise.&nbsp; The party to the contract must do what he has promised to do It is not enough to use best endeavour to do so.&nbsp; It is not usually an excuse that he does his best or that it is impossible to do what has been promised to do or deliver.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	It is only in the most exceptional cases when some unexpectable supervening event occurs that contractual obligations may be frustrated. Otherwise, parties carry the obligation to&nbsp; perform what they promise. This can be seen as risk apportionment .</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	If a buyer agrees to buy a house for a particular price at a future date, it is no defence that he cannot get a loan because of the credit crisis. The buyer takes the risk that he will have the funds, unless he has specifically agreed that his&nbsp; obligation is conditional on getting a loan. Of course in a rising market would not have agreed to such a condition.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Generally speaking, the law does not deal with the contents of contracts. If a person makes a foolish contract, then generally he must perform it, no matter how unfair and ruinous . There are highly exceptional circumstances, are for example, one party is vulnerable and has been deliberately taken advantage of. however.&nbsp; Similarly in business to consumer contracts, there is legislation limits wholly unfair contract term&nbsp; standard form terms and conditions.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Up in their case, the contracts.&nbsp; The Queen had persons or businesses</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contracts May be entered at the Queen.&nbsp; Contracts are generally entered.&nbsp; I proven persons or so-called legal persons . for example, a contract may be made to be clean to individuals and individual and a business league ie company or partnership there be clean to businesses (business to business .</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>B2B and B2C</strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	In the case of business to business contracts each side.&nbsp; The contract may be no golden beat currents and conditions of the contract may be negotiated . bulk parties may come up with their own pounds and conditions . contract law must decide whether there has been an agreement and if so what are their terms and conditions .</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Contract Law applies generally irrespective of the relative bargaining strength arms be parties are generally even if one party ears can dictate their terms and conditions contract law will generally uphold them ..&nbsp; However, Jim does ask in modern times, there is a wide range of consumer protection laws which protect private individuals are perfect known businesses dealing whip to protect consumers.&nbsp; Then they deal with businesses . up for example, certain on fair terms may not apply . the second basic obligations can not be avoided by poems and conditions of sale .</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	A day in decades of contracts between businesses.&nbsp; It is generally assumed that each is in a position to uphold its own interests up.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	The benfits of a contract are usually limited to those who are party to the contract. Generally speaking, a third party, who was not a party to the contract t can neither lsue or be sued under it. The orse is against the other . this law is lightly picked changed in Ireland, as has already occurred in UK jurisdictions .</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	There are some cases where be for a contract law will require performance and her compensation he is not being.&nbsp; These are a relatively exceptional and may include</p>\r\n'),
(4, 'khaled', '<p>\n	essam</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `article_sub_category`
--

CREATE TABLE IF NOT EXISTS `article_sub_category` (
  `article_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_sub_category`
--

INSERT INTO `article_sub_category` (`article_id`, `sub_category_id`) VALUES
(1, 1),
(3, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'contract law'),
(2, 'family law');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `message`, `image`) VALUES
(1, 'Big Love of summer ?', 'Now get Beach vibes only from city stars and get 50% off', '4e05f-thespring_03b.jpg'),
(2, 'Summer Fun under sun', 'Girls Just wanna have sun, Get your offer now from city stars and have a good summer with our big discount', '4d346-east-shopping-centre-12-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `period` varchar(255) NOT NULL,
  `subscribe_description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `subscription_name`, `price`, `period`, `subscribe_description`) VALUES
(1, 'first', 15, '3 months', '<ul class="pricing-content list-unstyled" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; padding-left: 0px; list-style: none; color: rgb(62, 77, 92); font-family: ''Open Sans'', Arial, sans-serif; font-size: 13px; border-radius: 0px !important;">\n	<li style="box-sizing: border-box; color: rgb(136, 136, 136); font-size: 12px; padding: 7px 15px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: rgb(245, 249, 231); margin-bottom: 3px; border-radius: 0px !important;">\n		&nbsp;Consecte adiping elit<span style="color: rgb(119, 119, 119); font-size: 11px; line-height: 17px; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</span></li>\n</ul>\n'),
(2, 'second', 40, '6 months', '<ul class="pricing-content list-unstyled" style="padding-left: 0px; box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; list-style: none; color: rgb(62, 77, 92); font-family: ''Open Sans'', Arial, sans-serif; font-size: 13px; border-radius: 0px !important;">\n	<li style="box-sizing: border-box; color: rgb(136, 136, 136); font-size: 12px; padding: 7px 15px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: rgb(245, 249, 231); margin-bottom: 3px; border-radius: 0px !important;">\n		&nbsp;Consecte adiping elit<span style="color: rgb(119, 119, 119); font-size: 11px; line-height: 17px; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</span></li>\n</ul>\n'),
(3, 'Third', 54, '1 year', '<ul class="pricing-content list-unstyled" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; padding-right: 15px; padding-left: 0px; list-style: none; font-family: ''Open Sans'', Arial, sans-serif; line-height: 17px; text-align: center; color: rgb(62, 77, 92); font-size: 13px; border-radius: 0px !important; background-color: rgb(246, 246, 246);">\n	<li style="box-sizing: border-box; border-radius: 0px !important; color: rgb(136, 136, 136); font-size: 12px; padding: 7px 15px; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: rgb(245, 249, 231); margin-bottom: 3px;">\n		&nbsp;Consecte adiping elit<span style="box-sizing: border-box; color: rgb(119, 119, 119); font-size: 11px; border-radius: 0px !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</span></li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `sub_category_name`) VALUES
(1, 1, 'sub category 1'),
(2, 1, 'sub category 2'),
(3, 2, 'sub-category 3'),
(4, 2, 'sub-category 4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1431001210, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'essam khaled', '$2y$08$HHmSZLtaGYxrap.Uc20YAuxhE2UgNovlNju3daF0pP/ug7SyWwZcu', NULL, 'essam_2060@hotmail.com', NULL, NULL, NULL, NULL, 1429174886, 1429196814, 1, 'essam', 'khaled', 'law-firm', '01122007565'),
(8, '::1', 'essam khaled1', '$2y$08$qCp61TY757UgSLmKCxcPjO0YcGPt3JzkFi2f.0rdrxA3xWqeF0jfK', NULL, 'essam-khasled@hotmail.com', NULL, NULL, NULL, NULL, 1430748552, NULL, 1, 'Essam', 'Khaled', 'asd', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(9, 8, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
