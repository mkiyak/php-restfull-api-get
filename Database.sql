CREATE TABLE `kisiler` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) CHARACTER SET latin1 NOT NULL,
  `soyad` varchar(100) CHARACTER SET latin1 NOT NULL,
  `yas` int(11) NOT NULL,
  `cinsiyet` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `kisiler` (`id`, `ad`, `soyad`, `yas`, `cinsiyet`) VALUES
(1, 'Ahmet', 'ABALAK', 25, 'Erkek'),
(2, 'Ayşe', 'KAYA', 18, 'Kız'),
(3, 'Zeynep', 'AK', 34, 'Kız'),
(4, 'Elif', 'İKİZ', 23, 'Kız'),
(5, 'Ali', 'DEMİR', 23, 'Erkek'),
(6, 'Fatma', 'GÜLER', 27, 'Kız');


ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;


