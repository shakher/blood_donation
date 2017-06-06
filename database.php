<?
$con=mysql_connect("localhost","root","");
if(!$con)
{
  die("could not connect".mysql_error());
}
//create database
if(mysql_query("CREATE DATABASE blood_bank",$con))
{
echo "database created";
}
else
{
echo "failed";
}
//create table
mysql_select_db("blood_bank",$con);

$table="CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_name` varchar(255) NOT NULL,
  `donor_mail` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `bgroup` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mem_id` int(11) NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";

$table2="CREATE TABLE IF NOT EXISTS `acceptor` (
  `accetption_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `acceptor_mail` varchar(255) NOT NULL,
	`fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `bgroup` varchar(255) NOT NULL,
	`amount` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mem_id` int(11) NOT NULL,
  PRIMARY KEY (`accetption_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;

$table3="CREATE TABLE IF NOT EXISTS `blood` (
  `blood_id` int(11) NOT NULL AUTO_INCREMENT,
  `bgroup` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`blood_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;

$table4="CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;

$table5="CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;

$table6="CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `bgroup` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;
mysql_query("INSERT INTO blog (id, heading, message, date) VALUES
(5,'PEOPLE have been thanked for their selflessness in signing up to donate blood. ','Blood bank and Transplant has thanked donors, blood donation supporters, and companies in Hampshire after the Missing Type campaign for National Blood Week drove thousands of people to register as blood donors. Some 1,000 people in Hampshire registered as a blood donor World Blood Donor Day on Sunday, June 14. More than 30,000 people registered as donors – 20,000 more during this year’s .','2015-06-22') ");

mysql_query("INSERT INTO blog (id, heading, message, date) VALUES
(6,'Blood donation','A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole blood (WB), or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.','2015-06-22')");


if(mysql_query($table,$con))
	{
		echo "  donor table is created</br>";
	} 
	else
	{
		echo "donor table is not created";
	}
	
	
	if(mysql_query($table2,$con))
	{
		echo "  acceptor table is created</br>";
	} 
	else
	{
		echo "acceptor table is not created";
	}
	
	if(mysql_query($table3,$con))
	{
		echo "  blood table is created</br>";
	} 
	else
	{
		echo "blood table is not created";
	}
	
	
	
	if(mysql_query($table4,$con))
	{
		echo "  blog table is created</br>";
	} 
	else
	{
		echo "blog table is not created";
	}
	if(mysql_query($table5,$con))
	{
		echo "  admin table is created</br>";
	} 
	else
	{
		echo "admin table is not created";
	}
	if(mysql_query($table6,$con))
	{
		echo "  registration  table is created</br>";
	} 
	else
	{
		echo "registration table is not created";
	}
	
?>