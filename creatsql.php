<?
unlink('setup.php');
include "config/db.php";
 
$sql = "  CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `app` (
  `id` int(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_dis` varchar(3000) DEFAULT NULL,
  `url` varchar(3000) NOT NULL,
  `bundel` varchar(255) NOT NULL,
  `app_img` varchar(255) DEFAULT NULL,
  `app_plist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `banner` (
  `id` int(255) NOT NULL,
  `img` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `dis` (
  `id` int(11) NOT NULL,
  `packeg_n` varchar(3000) NOT NULL,
  `packeg_p` varchar(3000) NOT NULL,
  `packeg_d` varchar(3000) NOT NULL,
  `packeg_l` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `disc` varchar(3000) DEFAULT NULL,
  `domain` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `tele` varchar(255) DEFAULT NULL,
  `tw` varchar(3000) DEFAULT NULL,
  `info` varchar(3000) DEFAULT NULL,
  `ts` varchar(3000) DEFAULT NULL,
  `pay` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `dis`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);
 ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


ALTER TABLE `app`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


ALTER TABLE `banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

  ALTER TABLE `dis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO `admin` (`id`, `user`, `pass`, `role`) VALUES (NULL, 'admin', '123456', 'admin');
  INSERT INTO `page` (`id`, `name`, `domain`, `img`, `tele`) VALUES (NULL, 'store', 'ipa.com', '', 'tele');
 
";

if ($database->query($sql) == TRUE) {
 header("location: done.php");
} else {
  echo "Error creating table: " . $database->error;
}

?>