CREATE TABLE `tv_series` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `channel` varchar(255) DEFAULT NULL,
    `gender` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
;

CREATE TABLE `tv_series_intervals` (
    `id_tv_series` int(11) NOT NULL,
    `week_day` date NOT NULL,
    `show_time` time NOT NULL,
    KEY `fk_id_tv_series` (`id_tv_series`),
    CONSTRAINT `fk_id_tv_series` FOREIGN KEY (`id_tv_series`) REFERENCES `tv_series` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
;
