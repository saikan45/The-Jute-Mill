CREATE TABLE `employee` (
  `emp_id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phn_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
   'empolyee_type' varchar(225) NOT NULL,
  `salary` int(11) NOT NULL,
  `jointime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `unit` (
	`u_num` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        'emp_id' int(11) DEFAULT NULL,
	`u_name` varchar(255) NOT NULL,
	`location` varchar(255) NOT NULL,
          FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE
	 


)ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `project` (
	`p_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 `u_num` int(11) DEFAULT NULL,
	 `p_num` varchar(11) NOT  NULL,
	 `designation` varchar(255) NOT NULL,
	 FOREIGN KEY (`u_num`) REFERENCES `employee` (`u_num`) ON DELETE CASCADE ON UPDATE CASCADE
	 

)ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `product` (
`p_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`u_num` int(11) DEFAULT NULL,
`quantity` varchar(255) NOT NULL,
`price` int(11) NOT NULL,
 FOREIGN KEY (`u_num`) REFERENCES `employee` (`u_num`) ON DELETE CASCADE ON UPDATE CASCADE


)ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `material` (
`m_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` varchar(255) NOT NULL,
`p_id` int(11) DEFAULT NULL,
`m_cost` int(11) NOT NULL,
 FOREIGN KEY (`p_id`) REFERENCES `facultymember` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE

)ENGINE=InnoDB DEFAULT CHARSET=latin1;



