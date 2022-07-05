-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2016 at 04:40 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";



CREATE TABLE IF NOT EXISTS `events` (
  `events_id` int(10) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(35) NOT NULL,
  `e_date` varchar(35) NOT NULL,
  `e_time` varchar(35) NOT NULL,
  `address` varchar(39) NOT NULL,
  `price` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`events_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- making initial values to my database visible

INSERT INTO `events` (`events_id`, `e_name`, `e_date`, `e_time`, `address`, `price`, `comment`) VALUES
(1, 'Campus meetup virtual', '5th July', '10:30 AM', 'CSULB, Center of alumni', '$10', 'Alumni  meetup'),
(2, 'Eventeny business summit', '6th July', '4:00 PM', 'Long Beach Boulvard', '$5', 'important event');