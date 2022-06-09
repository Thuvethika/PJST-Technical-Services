

USE grp_project;

CREATE TABLE `employee` (
	`employee_id` varchar (20) NOT NULL,
	`first_name` varchar(55) NOT NULL,
	`last_name` varchar(55) NOT NULL,
	`email` varchar(50) NOT NULL,
	`contact_no` int(20) NOT NULL,
	`address` varchar(100) NOT NULL,
	`username` varchar(55) NOT NULL,
	`password` varchar(30) NOT NULL,
	`Confirm_password` varchar(30) NOT NULL,
	`date_joined` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;