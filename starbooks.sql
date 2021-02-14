-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 14 fév. 2021 à 14:49
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `starbooks`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `idPersonne` int(11) NOT NULL,
  `idLivre` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idPersonne`, `idLivre`) VALUES
(1, '9791026819523'),
(2, '9782874425554'),
(8, '9782368520536'),
(9, '9782081250833'),
(10, '9782070418077'),
(3, '9782010009242'),
(4, '9782013949736'),
(5, '9782070468089'),
(6, '9782253151432'),
(7, '9782756056968'),
(11, '9782070556854'),
(11, '9782070543588'),
(11, '9782070643042'),
(11, '9782070541294'),
(11, '9782070541270'),
(11, '9782070572670'),
(11, '9782070615360'),
(12, '9782723488525'),
(12, '9782723489898'),
(12, '9782723489904'),
(12, '9782723489911'),
(12, '9782723489928'),
(12, '9782723489935'),
(12, '9782723489942'),
(12, '9782723489959'),
(12, '9782723492539'),
(12, '9782723492553'),
(12, '9782723492560'),
(12, '9782723492577'),
(12, '9782723492584'),
(13, '9782253012696'),
(14, '9782010009297'),
(9, '9782081240728'),
(9, '9782081250857'),
(12, '9782266283021');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomediteur` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id`, `nomediteur`) VALUES
(1, 'Urban Comics'),
(2, 'Jungle'),
(3, 'Hachette éducation'),
(4, 'Gallimard'),
(5, 'Le livre de poche'),
(6, 'Le livre de poche jeunesse'),
(7, 'Delcourt'),
(8, 'Kurokawa'),
(9, 'Flammarion'),
(10, 'Denoël'),
(11, 'Bloomsbury'),
(12, 'Glénat'),
(13, 'Pocket');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomgenre` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelle` (`nomgenre`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `nomgenre`) VALUES
(1, 'Mythologie'),
(2, 'Science fiction'),
(3, 'Manga'),
(4, 'BD'),
(5, 'Horreur'),
(6, 'Aventure'),
(7, 'Fantastique'),
(8, 'Médévial');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomlangue` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `nomlangue`) VALUES
(1, 'Anglais'),
(2, 'Français'),
(3, 'Japonais'),
(4, 'Espagnol'),
(5, 'Italien');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `editeur` int(11) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `langue` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`) VALUES
('9791026819523', 'Justice League', 1, 2019, 4, 2, 560),
('9782874425554', 'Les Simpson : Un sacré foin ', 2, 2014, 4, 2, 160),
('9782010009242', 'Alice au pays des merveilles', 6, 2017, 7, 2, 80),
('9782013949736 ', 'La Belle et la Bête ', 3, 2017, 7, 2, 128),
('9782070468089', 'Frankenstein ', 4, 2015, 5, 2, 270),
('9782253151432', 'Simetierre', 5, 2003, 5, 2, 636),
('9782756056968', 'Jojo\'s Bizzares Adventures ', 7, 2015, 3, 2, 224),
('9782368520536', 'My red eyes sword', 8, 2015, 3, 2, 212),
('9782081250833', 'Graal, le chevalier sans nom', 9, 2011, 8, 2, 354),
('9782070418077', 'Je suis une légende', 10, 2001, 6, 2, 228),
('9782070556854', 'Harry potter et l\'Ordre du Phénix ', 11, 2003, 2, 2, 984),
('9782070543588', 'Harry Potter et la coupe de feu', 11, 2000, 2, 2, 784),
('9782070643042', 'Harry Potter et le prisonnier d\'Azkaban', 11, 1999, 2, 2, 448),
('9782070541294', 'Harry Potter et la chambre des secrets', 11, 1998, 2, 2, 308),
('9782070541270', 'Harry Potter à l\'école des sorciers', 11, 1997, 2, 2, 308),
('9782070572670', 'Harry Potter et le Prince de sang mêlé', 11, 2005, 2, 2, 720),
('9782070615360', 'Harry Potter et les reliques de la mort', 11, 2007, 2, 2, 607),
('9782723488525', 'One Piece : À l\'aube d\'une grande aventure', 12, 2013, 3, 2, 208),
('9782723489898', 'One Piece : Aux prises avec Baggy et ses hommes !', 12, 2013, 3, 2, 208),
('9782723489904', 'One Piece : Une vérité qui blesse', 12, 2013, 3, 2, 208),
('9782723489911', 'One Piece : Attaque au clair de lune', 12, 2013, 3, 2, 192),
('9782723489928', 'One Piece : Pour qui sonne le glas', 12, 2013, 3, 2, 192),
('9782723489935', 'One Piece : Le serment', 12, 2013, 3, 2, 192),
('9782723489942', 'One Piece : Vieux machin', 12, 2013, 3, 2, 192),
('9782723489959', 'One Piece : Je ne mourrai pas !', 12, 2013, 3, 2, 192),
('9782723492539', 'One Piece : Larmes', 12, 2013, 3, 2, 208),
('9782723492553', 'One Piece : OK, Let\'s STAND UP !', 12, 2013, 3, 2, 192),
('9782723492560', 'One Piece : Le plus grand bandit d\'East Blue', 12, 2013, 3, 2, 192),
('9782723492577', 'One Piece : Et ainsi débuta la légende', 12, 2013, 3, 2, 192),
('9782723492584', 'One Piece : Tiens bon !!', 12, 2013, 3, 2, 192),
('9782253012696', 'Le tour du monde en 80 jours', 5, 1976, 6, 2, 352),
('9782010009297', 'L\'appel de la forêt', 6, 2014, 6, 2, 192),
('9782013231725', 'Le chevalier au bouclier vert', 6, 2014, 8, 2, 288),
('9782081240728', 'Graal 2-la neige et le sang', 9, 2010, 8, 2, 272),
('9782081250857', 'Graal 3-La Nef du lion', 9, 2011, 8, 2, 235),
('9782266283021', 'La planète des singes', 13, 2017, 2, 2, 192);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`) VALUES
(1, 'Johns', 'Geoff'),
(2, 'Groening', 'Matt'),
(3, 'Caroll', 'Lewis'),
(4, 'Leprince de Beaumont', 'Jeanne-Marie'),
(5, 'Shelley', 'Mary'),
(6, 'King', 'Stephen'),
(7, 'Araki', 'Hirohiko'),
(8, 'Tashiro', 'Tetsuya'),
(9, 'De montella', 'Christian'),
(10, 'Matheson', 'Richard'),
(11, 'Rowling', 'Joanne'),
(12, 'Oda', 'Eiichiro'),
(13, 'Vernes', 'Jules'),
(14, 'Jack', 'London'),
(16, 'Boulle', 'Pierre'),
(15, 'Weulersse', 'Odile');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
