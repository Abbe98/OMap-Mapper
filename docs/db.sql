CREATE DATABASE IF NOT EXISTS `omm2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `omm2`;

CREATE TABLE `maps` (
`id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `public` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(999) COLLATE utf8mb4_bin NOT NULL,
  `tags` varchar(999) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=1 ;

CREATE TABLE `settings` (
  `lang` varchar(25) COLLATE utf8mb4_bin NOT NULL DEFAULT 'en',
  `hash` varchar(999) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `tags` (
`id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=1 ;

CREATE TABLE `users` (
  `username` varchar(255) COLLATE utf8mb4_bin NOT NULL,
`id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `hash` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=1 ;


ALTER TABLE `maps`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `tags`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `maps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;