-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 04:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosario`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentonline`
--

CREATE TABLE `appointmentonline` (
  `ClientID` int(11) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `Firstname` varchar(30) DEFAULT NULL,
  `Middlename` varchar(30) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `ContactNo.` varchar(11) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Service` varchar(40) DEFAULT NULL,
  `Doctor` varchar(50) DEFAULT NULL,
  `DateSchedule` date DEFAULT NULL,
  `TimeSchedule` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentonline`
--

INSERT INTO `appointmentonline` (`ClientID`, `Lastname`, `Firstname`, `Middlename`, `Address`, `ContactNo.`, `Birthday`, `Age`, `Gender`, `Service`, `Doctor`, `DateSchedule`, `TimeSchedule`) VALUES
(201700001, 'Cabrera', 'Julius', 'Mendoza', 'Sasmuan', '09175215793', '2010-02-09', 7, 'on', '', 'Dr. Ariel Anthonell Maltu', '2017-05-04', '8:00 am - 9:00am'),
(201700002, 'Lapid', 'Ivan', 'Aquino', 'Sta Filomena', '09998713586', '2005-06-09', 11, 'on', '', 'Dr. Cromwel P. Medina', '2017-05-04', '8:00 am - 9:00am'),
(201700003, 'Scarlet', 'Erza', 'Jellal', 'Fiore', '09023451523', '1996-05-12', 20, 'Female', '', 'Dr. Gail Macabulos', '2017-05-04', '8:00 am - 9:00am'),
(201700004, 'Pillo', 'Aaron', 'Tilt', 'Floridablanca', '0902343453', '1994-05-03', 22, 'Male', '', 'Dr. Brillo V. Vargas', '2017-05-04', '8:00 am - 9:00am'),
(201700005, 'Reyes', 'Samantha', 'Santos', 'Sasmuan', '0904532155', '1999-08-12', 17, 'Female', 'Internal Medicine', 'Dr. Cromwel P. Medina', '2017-05-10', '8:00am-9:00am'),
(201700006, 'Lopez', 'Alex', 'Rosales', 'Sta. Ursula Betis', '09091212415', '1998-09-10', 18, 'Male', 'Internal Medicine', 'Dr. Cromwel P. Medina', '2017-05-10', '10:00am-11:00am');

-- --------------------------------------------------------

--
-- Table structure for table `doctorsched`
--

CREATE TABLE `doctorsched` (
  `DoctorID` int(11) DEFAULT NULL,
  `DoctorName` varchar(60) DEFAULT NULL,
  `Specialization` varchar(40) DEFAULT NULL,
  `DaySchedule` varchar(30) NOT NULL,
  `TimeSchedule` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsched`
--

INSERT INTO `doctorsched` (`DoctorID`, `DoctorName`, `Specialization`, `DaySchedule`, `TimeSchedule`) VALUES
(2, 'Dr. Ariel Anthonell Maltu', 'Internal Medicine', 'Monday-Friday', '9:00am-7:00pm'),
(3, 'Dr. Cromwel P. Medina', 'Internal Medicine', 'Monday-Thursday', '7:00am-7:00pm'),
(4, 'Dr. Myrna N. Bacani', 'Internal Medicine', 'Monday/Wednesday/Friday', '8:00am-7:00pm'),
(5, 'Dr. Michelle F. Serrano', 'Cardiology', 'Monday/Wednesday/Friday', '8:00am-7:00pm'),
(6, 'Dr. Roberto M. Yabut', 'Cardiology', 'Monday-Friday', '8:00am-5:00pm'),
(7, 'Dr. Brillo V. Vargas', 'Urology', 'Monday-Friday', '8:00am-5:00pm'),
(8, 'Dr. Rico Y. Sampang', 'Urology', 'Tuesday/Thursday', '7:00am-5:00pm'),
(9, 'Dr. Gail Macabulos', 'Obstetrics & Gynecology', 'Monday-Thursday', '7:00am-7:00pm'),
(10, 'Dr. Maria D. TanTamco', 'Obstetrics & Gynecology', 'Monday-Friday', '9:00am-6:00pm'),
(11, 'Dr. Veneranda Panaligan', 'Obstetrics & Gynecology', 'Monday-Wednesday/Friday', '8:00am-8:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `employeesaccount`
--

CREATE TABLE `employeesaccount` (
  `EmployeeID` int(11) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `ContactNo` varchar(11) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Department` varchar(40) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeesaccount`
--

INSERT INTO `employeesaccount` (`EmployeeID`, `Type`, `Name`, `Address`, `ContactNo`, `Birthday`, `Age`, `Gender`, `Department`, `Username`, `Password`) VALUES
(1, 'Admin', 'Admin', 'San Agustin', '09075540712', '1993-02-04', 24, 'Female', 'Admin', 'Admin', 'Admin'),
(2, 'Admin2', 'Admin2', 'Dau', '09554671447', '1998-05-03', 19, 'Male', 'Admin2', 'Admin2', 'Admin2'),
(3, 'Doctor', 'Dr. Ariel Anthonell Maltu', 'San Roque', '09534631217', '1960-01-11', 55, 'Male', 'Internal Medicine', 'Doctor1', 'Doctor1'),
(4, 'Doctor', 'Dr. Cromwel P. Medina', 'San Antonio', '09091263117', '1963-01-11', 52, 'Male', 'Internal Medicine', 'Doctor2', 'Doctor2'),
(4, 'Doctor', 'Dr. Myrna N. Bacani', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Female', 'Internal Medicine', 'Doctor3', 'Doctor3'),
(5, 'Doctor', 'Dr. Michelle F. Serrano', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Female', 'Cardiology', 'Doctor4', 'Doctor4'),
(6, 'Doctor', 'Dr. Roberto M. Yabut', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Male', 'Cardiology', 'Doctor5', 'Doctor5'),
(7, 'Doctor', 'Dr. Brillo V. Vargas', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Male', 'Urology', 'Doctor6', 'Doctor6'),
(8, 'Doctor', 'Dr. Rico Y. Sampang', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Male', 'Urology', 'Doctor7', 'Doctor7'),
(9, 'Doctor', 'Dr. Gail Macabulos', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Female', 'Obstetrics & Gynecology', 'Doctor8', 'Doctor8'),
(10, 'Doctor', 'Dr. Maria D. TanTamco', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Female', 'Obstetrics & Gynecology', 'Doctor9', 'Doctor9'),
(11, 'Doctor', 'Dr. Veneranda Panaligan', 'Sto. Cristo', '09069043117', '1988-02-08', 29, 'Female', 'Obstetrics & Gynecology', 'Doctor10', 'Doctor10');

-- --------------------------------------------------------

--
-- Table structure for table `walkin`
--

CREATE TABLE `walkin` (
  `QueuingID` int(11) DEFAULT NULL,
  `Lastname` varchar(30) DEFAULT NULL,
  `Firstname` varchar(30) DEFAULT NULL,
  `Middlename` varchar(30) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `ContactNo` varchar(11) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Service` varchar(40) DEFAULT NULL,
  `Doctor` varchar(40) DEFAULT NULL,
  `DateToday` date NOT NULL,
  `Remarks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walkin`
--

INSERT INTO `walkin` (`QueuingID`, `Lastname`, `Firstname`, `Middlename`, `Address`, `ContactNo`, `Birthday`, `Age`, `Gender`, `Service`, `Doctor`, `DateToday`, `Remarks`) VALUES
(1, 'Dragneel', 'Natsu', 'Igneel', 'Fiore', '0902343453', '1998-08-18', 18, 'Male', 'Internal Medicine', 'doc doc doc', '2017-05-05', 'OnWait'),
(2, 'Edogawa', 'Conan', 'Kudo', 'tokyo', '09090124785', '1996-04-08', 21, 'Male', 'Internal Medicine', 'doc doc doc', '2017-05-05', 'OnWait');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
