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

INSERT INTO tv_series (title, channel, gender) VALUES
('Stranger Things', 'Netflix', 'Thriller'),
('Moon Knight', 'Disney+', 'Action'),
('The Last Kingdom', 'Disney+', 'History'),
('Loki', 'Disney+', 'Fantasy'),
('Breaking bad', 'Netflix', 'Crime drama'),
('Death Note', 'Netflix', 'Anime'),
('Vinland Saga', 'Prime Video', 'Thriller'),
('Invincible', 'Prime Video', 'Animation');

INSERT INTO tv_series_intervals (id_tv_series, week_day, show_time) VALUES
(1, NOW(), '10:00'),
(1, DATE_ADD(NOW(), INTERVAL 1 DAY), '10:00'),
(1, DATE_ADD(NOW(), INTERVAL 2 DAY), '10:00'),
(2, NOW(), '10:00'),
(2, DATE_ADD(NOW(), INTERVAL 2 DAY), '10:00'),
(2, DATE_ADD(NOW(), INTERVAL 4 DAY), '10:00'),
(3, NOW(), '15:00'),
(3, DATE_ADD(NOW(), INTERVAL 2 DAY), '15:00'),
(3, DATE_ADD(NOW(), INTERVAL 4 DAY), '15:00'),
(4, DATE_ADD(NOW(), INTERVAL 5 DAY), '19:00'),
(5, DATE_ADD(NOW(), INTERVAL 5 DAY), '19:00'),
(6, DATE_ADD(NOW(), INTERVAL 2 DAY), '09:00'),
(6, DATE_ADD(NOW(), INTERVAL 4 DAY), '09:00'),
(7, NOW(), '21:00'),
(7, DATE_ADD(NOW(), INTERVAL 4 DAY), '21:00'),
(8, NOW(), '22:00');
