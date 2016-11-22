
--
-- Base de données :  `chat-db`
--

-- --------------------------------------------------------

--
-- Structure de la table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `sender` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'user1', '4a7d1ed414474e4033ac29ccb8653d9b'),
(2, 'user2', 'b59c67bf196a4758191e42f76670ceba');

