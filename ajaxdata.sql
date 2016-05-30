CREATE DATABASE ajaxtutorial;
USE ajaxtutorial;

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
`username` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL
);

INSERT INTO `users` (`id`, `username`, `password`) VALUES (1, 'vusani', 'pass');
ALTER TABLE `users`
ADD PRIMARY KEY (`id`);