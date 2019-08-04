
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `professionnel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datecreation` timestamp NULL DEFAULT NULL,
  `datemodification` timestamp NULL DEFAULT NULL,
  `datedernierconnexion` timestamp NULL DEFAULT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userenvoi` int(10) unsigned  NULL,
  `userrecu` int(10) unsigned  NULL,
  `dateenvoi` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`userenvoi`) REFERENCES User(`id`),
  FOREIGN KEY (`userrecu`) REFERENCES User(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
