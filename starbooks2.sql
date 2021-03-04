-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 mars 2021 à 13:42
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
-- Base de données : `starbooks2`
--

-- --------------------------------------------------------

--
-- Structure de la table `aimer`
--

DROP TABLE IF EXISTS `aimer`;
CREATE TABLE IF NOT EXISTS `aimer` (
  `idmembre` int(11) NOT NULL,
  `Isbn` varchar(50) NOT NULL,
  PRIMARY KEY (`idmembre`,`Isbn`),
  KEY `Aimer_Livre0_FK` (`Isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `IdEditeur` int(11) NOT NULL AUTO_INCREMENT,
  `NomEditeur` varchar(50) NOT NULL,
  PRIMARY KEY (`IdEditeur`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`IdEditeur`, `NomEditeur`) VALUES
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
  `IdGenre` int(11) NOT NULL AUTO_INCREMENT,
  `NomGenre` varchar(50) NOT NULL,
  PRIMARY KEY (`IdGenre`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`IdGenre`, `NomGenre`) VALUES
(1, 'Fantastique'),
(2, 'Aventure'),
(3, 'Manga'),
(4, 'BD'),
(5, 'Horreur'),
(6, 'Science'),
(7, 'Mythologie'),
(8, 'Medieval');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `IdLangue` int(11) NOT NULL AUTO_INCREMENT,
  `NomLangue` varchar(50) NOT NULL,
  PRIMARY KEY (`IdLangue`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`IdLangue`, `NomLangue`) VALUES
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
  `Isbn` varchar(50) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Annee` int(11) NOT NULL,
  `Nbpages` int(11) NOT NULL,
  `Resume` text NOT NULL,
  `EmpruntLivre` int(11) NOT NULL,
  `IdPersonne` int(11) NOT NULL,
  `IdEditeur` int(11) NOT NULL,
  `IdGenre` int(11) NOT NULL,
  `IdLangue` int(11) NOT NULL,
  `idmembre` int(11) NOT NULL,
  PRIMARY KEY (`Isbn`),
  KEY `Livre_Personne_FK` (`IdPersonne`),
  KEY `Livre_Editeur0_FK` (`IdEditeur`),
  KEY `Livre_Genre1_FK` (`IdGenre`),
  KEY `Livre_Langue2_FK` (`IdLangue`),
  KEY `Livre_Membre3_FK` (`idmembre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`Isbn`, `Titre`, `Annee`, `Nbpages`, `Resume`, `EmpruntLivre`, `IdPersonne`, `IdEditeur`, `IdGenre`, `IdLangue`, `idmembre`) VALUES
('9782010009242', 'Alice au pays des merveilles', 2017, 80, 'Alice se repose sur un talus lorsqu\'elle voit passer un lapin blanc vêtu d\'un gilet, visiblement pressé. Elle décide de le suivre et, sans hésitation, s\'engouffre à sa suite dans un terrier. Elle chute longtemps dans un puits mais atterrit sans mal dans une pièce sombre, et tente de suivre le lapin qui disparaît.', 0, 3, 3, 1, 2, 1),
('9782010009297', 'L\'appel de la forêt', 2014, 192, 'Cette histoire débute à la toute fin du 19ème siècle. Buck, un chien bâtard, mi-saint bernard mi-colley écossais, mène une vie paisible d\'animal de compagnie dans la demeure du juge Miller, à Santa Clara (Californie). Mais après 4 ans de plénitude, il est kidnappé par le jardinier et revendu par des trappeurs.', 0, 14, 6, 2, 2, 1),
('9782013231725', 'Le chevalier au bouclier vert', 2014, 288, 'Au XII e siècle le jeune Thibaut de Sauvigny sauve Éléonore, la fille du comte de Blois alors qu\'elle est attaquée par des brigands. Pour le remercier de sa bravoure, le comte de Montcornet, vassal du comte de Blois adoube Thibaut et lui remet son épée : Santacrux (« Sainte croix ») et un bouclier vert.', 0, 15, 6, 8, 2, 1),
('9782013949736', 'La Belle et la Bête', 2017, 128, 'Une terrible créature, une Bête vêtue en seigneur, le condamne à mort pour avoir cueilli une rose puis le gracie, mais exige qu\'il renvoie la Belle à sa place. La jeune fille se rend au château où la Bête lui fait mille grâces et la demande en mariage.\r\n', 0, 4, 3, 1, 2, 1),
('9782070418077', 'Je suis une légende', 2001, 228, 'Robert Neville était un brillant scientifique, mais même lui n\'a pu endiguer le terrible virus - créé de la main de l\'homme - qui a dévasté la race humaine. Pour une raison inconnue, Neville est immunisé et reste à ce jour le dernier être humain vivant dans ce qui reste de New York et peut-être du monde. Depuis trois ans, il envoie des messages de détresse à qui voudra bien l\'entendre.', 0, 10, 10, 2, 2, 1),
('9782070468089', 'Frankenstein', 2015, 270, 'Il relate la création par un jeune savant suisse, Victor Frankenstein, d\'un être vivant assemblé avec des parties de chairs mortes. Horrifié par l\'aspect hideux de l\'être auquel il a donné la vie, Frankenstein abandonne son « monstre ».', 0, 5, 5, 5, 2, 1),
('9782070541270', 'Harry Potter à l\'école des sorciers ', 1997, 308, 'Le jour de ses onze ans, Harry Potter, un orphelin élevé par son oncle et sa tante qui le déteste, voit\r\nson existence bouleversée. Un géant vient le chercher pour l\'emmener à Poudlard, la célèbre école\r\nde sorcellerie ou une place l\'attend depuis toujours. Voler sur des balais, jeter des sorts, combattre\r\nun troll : Harry se révèle être un sorcier très doué. Mais quel mystère entoure sa naissance et qui est\r\nl\'effroyable V........, le mage dont personne n\'ose prononcer le nom ?', 0, 11, 11, 6, 2, 1),
('9782070541294', 'Harry Potter et la chambre des secrets ', 1998, 308, 'Une rentrée fracassante en voiture volante, une étrange malédiction qui s\'abat sur les élèves, cette\r\ndeuxième année à l\'école des sorciers ne s\'annonce pas de tout repos ! Harry Potter découvre une\r\ninscription énigmatique : \"La Chambre des Secrets a été ouverte. Ennemis de l\'héritier prenez\r\ngarde !\" En compagnie de ses fidèles amis, Ron et Hermione, l\'apprenti sorcier mène l\'enquête.', 0, 11, 11, 6, 2, 1),
('9782070543588', 'Harry Potter et la coupe de feu ', 2000, 784, 'Après un horrible été chez les Dursley, Harry Potter entre en quatrième année au collège de\r\nPoudlard. À quatorze ans, il voudrait simplement être un jeune sorcier comme les autres, retrouver\r\nses amis Ron et Hermione, assister avec eux à la Coupe du Monde de quidditch, apprendre de\r\nnouveaux sortilèges et essayer des potions inconnues. Une grande nouvelle l\'attend à son arrivée : la\r\ntenue à Poudlard d\'un tournoi de magie entre les plus célèbres écoles de sorcellerie. Déjà les\r\nspectaculaires délégations étrangères font leur entrée… Harry se réjouit. Trop vite. Il va se trouver\r\nplongé au cœur des événements les plus dramatiques qu\'il ait jamais eu à affronter.\r\nEnvoûtant, drôle, bouleversant, ce quatrième tome est le pilier central des aventures de Harry\r\nPotter. En effet, d\'après l\'auteur, il est le pivot de la série. Celui où la mort apparaît. Les thèmes\r\ndeviennent plus graves, plus tragiques.', 0, 11, 11, 6, 2, 1),
('9782070556854', 'Harry potter et l\'Ordre du Phénix ', 2003, 984, 'À quinze ans, Harry s\'apprête à entrer en cinquième année à Poudlard. Et s\'il est heureux de\r\nretrouver le monde des sorciers, il n\'a jamais été aussi anxieux. L\'adolescence, la perspective des\r\nexamens importants en fin d\'année et ces étranges cauchemars... Car Celui-Dont-On-Ne-Doit-PasPrononcer-Le-Nom est de retour et, plus que jamais, Harry sent peser sur lui une terrible menace.\r\nUne menace que le ministère de la Magie ne semble pas prendre au sérieux, contrairement à\r\nDumbledore. Poudlard devient alors le terrain d\'une véritable lutte de pouvoir. La résistance\r\ns\'organise autour de Harry qui va devoir compter sur le courage et la fidélité de ses amis de\r\ntoujours...', 0, 11, 11, 6, 2, 1),
('9782070572670', 'Harry Potter et le Prince de sang mêlé ', 2005, 720, 'Dans un monde de plus en plus inquiétant, Harry se prépare à retrouver Ron et Hermione. Bientôt,\r\nce sera la rentrée à Poudlard, avec les autres étudiants de sixième année. Mais pourquoi le\r\nprofesseur Dumbledore vient-il en personne chercher Harry chez les Dursley ?\r\n', 0, 11, 11, 6, 2, 1),
('9782070615360', 'Harry Potter et les reliques de la mort ', 2007, 607, 'Dans cette ultime aventure, Harry doit accomplir la tâche que lui a confié Dumbledore : détruire les\r\nderniers Horcruxes afin de vaincre Voldemort. Pour cela, il sera accompagné de ses deux fidèles amis\r\nRon et Hermione mais de nombreux obstacles les attendent...', 0, 11, 11, 6, 2, 1),
('9782070643042', 'Harry Potter et le prisonnier d\'Azkaban ', 1999, 448, 'Le monde des gens ordinaires, les Moldus, comme celui des sorciers, est en émoi : Sirius Black, un\r\ndangereux criminel, s\'est échappé de la forteresse d\'Azkaban. Les redoutables gardiens de la prison\r\nassureront la sécurité du collège Poudlard, car le prisonnier évadé recherche Harry Potter. C\'est donc\r\nsous bonne garde que le jeune sorcier fait sa troisième rentrée. Mais est-il vraiment à l\'abri du\r\ndanger qui le menace ?\r\n', 0, 11, 11, 6, 2, 1),
('9782081240728', 'Graal 2-la neige et le sang', 2010, 272, 'Le royaume d\'Arthur est à l\'aube d\'un long hiver. Perceval, un jeune Gallois élevé à l\'écart du monde dans la Forêt Perdue, est fait chevalier. Reconnu comme l\'égal de Lancelot, Perceval sauvera-t-il le monde du Mal qui le menace ? Morgane et son fils Mordret trament en effet un sombre complot contre Arthur.', 0, 9, 9, 8, 2, 1),
('9782081250833', 'Graal, le chevalier sans nom', 2011, 354, 'L\'histoire raconte l\'aventure d\'un chevalier sans nom, fils du roi Ban de Bénoïc et de sa femme Hélène. Son père meurt juste après sa naissance, suite à l\'attaque et à la destruction du château qu\'il habitait.', 0, 9, 9, 8, 2, 1),
('9782081250857', 'Graal 3-La Nef du lion', 2011, 235, 'Les médiévistes le nomment Lancelot-Graal. Il en existe de multiples adaptations, plus ou moins édulcorées et que l\'on appelle généralement Romans de la Table ronde. Mais il s\'agit en réalité de l\'œuvre capitale du XIIIe siècle, et de l\'un des plus grands textes de la littérature française.\r\nDe ce roman fleuve, composé en prose, chacun connaît les héros, les objets, les décors, les principales aventures : Merlin, Arthur, Guenièvre, Viviane, Lancelot, Perceval,... ', 0, 9, 9, 8, 2, 1),
('9782253012696', 'Le tour du monde en 80 jours', 1976, 352, 'Roman d\'aventures, écrit par Jules Verne, publié en 1872. Il raconte la course autour du monde d\'un gentleman anglais, Phileas Fogg, qui a fait le pari d\'y parvenir en 80 jours. ... Phileas Fogg parie 20 000 livres avec ses collègues du Reform-Club qu\'il réussira à achever ce tour du monde en 80 jours.', 0, 13, 5, 2, 2, 1),
('9782253151432', 'Simetierre', 2003, 636, 'Jeune médecin de Chicago, Louis Creed, son épouse Rachel, sa fille Ellie et son fils Gage emménagent à Ludlow, petite bourgade du Maine. En poste à l\'université locale, Louis fait également la connaissance de Judson Crandall, son voisin octogénaire qui deviendra son meilleur ami.', 0, 6, 6, 5, 2, 1),
('9782266283021', 'La planète des singes', 2017, 1992, 'Le roman raconte l\'histoire de trois hommes qui explorent une planète lointaine similaire à la Terre, où les grands singes sont les espèces dominantes et intelligentes, alors que l\'humanité est réduite à l\'état animal. Le narrateur, Ulysse Mérou, est capturé par les singes et se retrouve enfermé dans un laboratoire.', 0, 16, 13, 6, 2, 1),
('9782344001684', 'Jason et la toison d\'or', 2016, 56, 'Héritier du trône d’Iolcos, Jason est le seul survivant d’un massacre perpétré par son oncle, le félon Pélias. Mis en sécurité par sa mère, il parfait son apprentissage auprès du meilleur éducateur de la Grèce : le centaure Chiron. Devenu adulte, Jason part alors accomplir son destin et réclamer son trône. Mais, piégé par son oncle, il se retrouve à devoir entreprendre la plus périlleuse des missions : rapporter la toison d’or, un trésor aussi inestimable qu’inaccessible. Pour s’en emparer, il va devoir s’entourer des meilleurs. Et bâtir un navire capable de traverser le terrible Détroit des Dardanelles. Alors, seulement, le voyage pourra commencer...\r\n\r\nDans ce premier tome d’une trilogie, découvrez la genèse de la quête de Jason, l’un des plus célèbres mythes de la Grèce antique !', 0, 17, 12, 7, 2, 1),
('9782368520536', 'My red eyes sword', 2015, 212, 'Dans un monde peuplé de créatures étranges et dangereuses, Tatsumi est un jeune garçon de la campagne en quête de rêve et d\'aventure. Un jour, il décide de se rendre à la capitale afin de s\'engager dans l\'armée impériale, faire fortune et sauver son village rongé par la pauvreté.', 0, 8, 8, 3, 2, 1),
('9782723488525', 'One Piece : À l\'aube d\'une grande aventure', 2013, 208, 'Nous sommes à l\'ère des pirates. Lufy, un garçon espiègle, rêve de devenir le roi des pirates en\r\ntrouvant le \" One Piece \", un fabuleux trésor. Par mégarde, Lufy a avalé un jour un fruit démoniaque\r\nqui l\'a transformé en homme caoutchouc. Depuis, il est capable de contorsionner son corps élastique\r\ndans tous les sens, mais il a perdu la faculté de nager.\r\nAvec l\'aide de ses précieux amis, dont le fidèle Shanks, il va devoir affronter de redoutables pirates\r\ndans des aventures toujours plus rocambolesques.', 0, 12, 12, 3, 2, 1),
('9782723489898', 'One Piece : Aux prises avec Baggy et ses hommes !', 2013, 208, 'Après avoir été séparé de Zorro, Luffy atterrit dans un village terrorisé par Baggy le Clown.\r\nLuffy fait la connaissance de Nami, une voleuse qui le livre à Baggy afin de dérober la carte de la\r\nroute de tous les périls, celle qui mène soit disant au fameux One Piece, le trésor inestimable...\r\nAprès l\'arrivée de Zorro, Nami s\'alliera à eux pour vaincre Baggy et ses hommes (surtout pour voler le\r\ntrésor pour Nami).\r\nLa volonté de défense du village montrée par le maire et un chien motive fortement Luffy et Zorro\r\npour le combat, qui promet d\'être explosif...', 0, 12, 12, 3, 2, 1),
('9782723489904', 'One Piece : Une vérité qui blesse', 2013, 208, 'Tout comme Luffy, Baggy le clown a mangé un fruit du démon. Le pirate peut ainsi séparer son corps\r\nen plusieurs morceaux et éviter la plupart des attaques qui le visent. Mais, lorsqu’il plante ses lames\r\ndans le chapeau de Luffy, Baggy ignore la colère dont il va être la source…', 0, 12, 12, 3, 2, 1),
('9782723489911', 'One Piece : Attaque au clair de lunee', 2013, 192, 'Pipo ayant appris les intentions de Krapador, va prévenir les habitants du village mais ils ne le croient\r\npas. Il décide alors de prévenir mademoiselle Kaya mais elle refuse de l\'écouter. Il décide alors de\r\ndéfendre l\'île seul mais Luffy, Zorro et Nami décident de l\'aider. Ils attendent les pirates de Krapador\r\npar l\'unique plage de l\'île (d’après Pipo). Mais au lever du jour ils ne sont toujours pas là. Pipo se\r\nrappelle qu\'il y a une autre plage. Pipo et Nami arrivent les premiers à la plage. Ils se battent contre\r\nles pirates en attendant Zorro et Luffy. Ils arrivent enfin. Pourquoi ils ne sont pas arrivés en même\r\ntemps que Nami et Pipo ? Vous le saurez en lisant le manga. Une bataille s\'engage et voilà qu\'arrive\r\nle terrible capitaine Crow...', 0, 12, 12, 3, 2, 1),
('9782723489928', 'One Piece : Pour qui sonne le glas', 2013, 192, 'Voici enfin venu le face à face entre Luffy et le cruel Klahadoll ! Quelle issue va connaître ce combat\r\nacharné entre les deux adversaires ?! Pendant ce temps, Usopp et Zoro volent à la rescousse de Kaya\r\net des enfants poursuivis par un drôle de personnage…', 0, 12, 12, 3, 2, 1),
('9782723489935', 'One Piece : Le serment', 2013, 192, 'À la recherche d’un cuisinier pour leur équipage, Luffy et ses compagnons font halte sur le “Baratie”,\r\nun navire-restaurant. Alors que le terrible amiral Don Krieg est sur le point de mettre à exécution son\r\nplan pour s’emparer du bateau, un mystérieux personnage fait son apparition…', 0, 12, 12, 3, 2, 1),
('9782723489942', 'One Piece : Vieux machin', 2013, 192, 'Les hommes de Krieg tiennent Zeff en otage et lui adressent une demande insensée ! La lâcheté de\r\ncet acte rend Luffy fou de rage mais Sanji l’empêche de contre-attaquer. Derrière cette décision pour\r\nle moins étrange se dissimule le passé mystérieux qui lie Sanji à Zeff…', 0, 12, 12, 3, 2, 1),
('9782723489959', 'One Piece : Je ne mourrai pas !', 2013, 192, 'Ferme dans ses convictions et ignorant la peur, Luffy défie Don Krieg sans aucune hésitation. Ce\r\ncombat mettra-t-il un terme à la bataille acharnée qui s’est engagée sur le “Baratie” ?! Pour Sanji,\r\nl’heure du départ à l’aventure s’apprête à sonner…', 0, 12, 12, 3, 2, 1),
('9782723492539', 'One Piece : Larmes', 2013, 208, 'À la poursuite de Nami, Luffy et son équipage arrivent à Arlong Park, sur les terres des hommespoissons. C’est là qu’ils en apprendront plus sur le surprenant passé de leur navigatrice ! Dans la\r\nbataille solitaire qu’elle mène depuis si longtemps, Nami saura-t-elle reconnaître ses vrais amis ?', 0, 12, 12, 3, 2, 1),
('9782723492553', 'One Piece : OK, Let\'s STAND UP !', 2013, 192, 'Alerté par la souffrance de Nami, Luffy décide d’affronter Arlong ! Mais ni une ni deux, ce dernier le\r\nprojette au fond des eaux !! Chacun poussé par ses propres sentiments, ses camarades décident\r\nalors de se battre et de tout faire pour sortir Luffy de ce bien mauvais pas.\r\n', 0, 12, 12, 3, 2, 1),
('9782723492560', 'One Piece : Le plus grand bandit d\'East Blue', 2013, 192, 'U-ti-li-ser ? L’attitude d’Arlong qui ne considère Nami que comme un outil pour sa réussite\r\npersonnelle met Luffy hors de lui ! Afin qu’elle puisse retrouver le sourire, ce dernier n’hésitera pas à\r\nréduire Arlong Park en un vulgaire tas de cailloux !', 0, 12, 12, 3, 2, 1),
('9782723492577', 'One Piece : Et ainsi débuta la légende', 2013, 192, 'Et voilà comment débuta la légende… À peine chacun a-t-il eu le temps de se remémorer la promesse\r\nqu’il ou elle s’était faite que voilà l’équipage du “Vogue Merry” parvenu aux abords de Grand Line. La\r\nmontagne qui se dresse sous leurs yeux ne les effraie pas et ils s’élancent sans coup férir sur le canal\r\nqui mène à son sommet. Mais quelle est cette masse noire qui désormais leur fait obstacle ?!', 0, 12, 12, 3, 2, 1),
('9782723492584', 'One Piece : Tiens bon !!', 2013, 192, 'Baroque Works… À peine ont-ils pénétré sur Grand Line que Luffy et son équipage deviennent la\r\ncible d’une organisation criminelle secrète. Ils ne tarderont pas à apprendre le nom de l’homme à la\r\ntête de cette organisation, ce qui n’arrangera en rien leurs affaires, loin de là…', 0, 12, 12, 3, 2, 1),
('9782756056968', 'Jojo\'s Bizzares Adventures', 2015, 224, 'Dans un monde peuplé de créatures étranges et dangereuses, Tatsumi est un jeune garçon de la campagne en quête de rêve et d\'aventure. Un jour, il décide de se rendre à la capitale afin de s\'engager dans l\'armée impériale, faire fortune et sauver son village rongé par la pauvreté.', 0, 7, 7, 3, 2, 1),
('9782874425554', 'Les Simpson : Un sacré foin', 2014, 160, 'Bart est récompensé pour avoir dénoncé les brutes Nelson, Jimbo, Dolph et Kearney qui ont volé au Kwik-E-Mart. ... Bart se lamentant de son gilet, Nelson et sa bande décidèrent de se venger.', 0, 2, 2, 4, 2, 1),
('9791026819523', 'Justice League', 2019, 560, 'Bruce Wayne, inspiré par l\'altruisme de Superman, sollicite l\'aide de sa nouvelle alliée, Diana Prince, pour affronter un ennemi plus redoutable que jamais. Ensemble, Batman et Wonder Woman ne tardent pas à recruter de nouveaux éléments afin de bâtir une équipe capable de sauver la planète, de plus en plus menacée.', 0, 1, 1, 4, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `idmembre` int(11) NOT NULL AUTO_INCREMENT,
  `mdp` text NOT NULL,
  `Login` varchar(255) NOT NULL,
  `activation` varchar(50) NOT NULL,
  PRIMARY KEY (`idmembre`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idmembre`, `mdp`, `Login`, `activation`) VALUES
(1, '202cb962ac59075b964b07152d234b70', 'admin', '1'),
(2, '6b908b785fdba05a6446347dae08d8c5', 'User1', '2'),
(3, 'a09bccf2b2963982b34dc0e08d8b582a', 'User2', '3'),
(4, 'e5d2ad241ec44cf155bc78ae8d11f715', 'User3', '4'),
(5, '5ad55d96abf0e50647d6de116530d6df', 'User4', '5'),
(6, '50c22602b70659dde2893f3a2ba0ab82', 'User5', '6'),
(7, '10ddead5bb8bcfaa4d62090acd7cdfb2', 'user6', '7'),
(8, '98cd5d17f0660baca7d652995f0d17b6', 'user7', '8'),
(9, 'd306313ac03787c5f5f41641773bfb9a', 'user8', '9'),
(10, '2a19bc085beedfd33873400cb9249e4f', 'user9', '10'),
(11, '31b083bc7281321ea98d3c1bc9701627', 'User10', '11');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `IdPersonne` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  PRIMARY KEY (`IdPersonne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`IdPersonne`, `Nom`, `Prenom`) VALUES
(1, 'Johns', 'Geoff'),
(2, 'Groening', 'Matt'),
(3, 'Caroll', 'Lewis'),
(4, 'Leprince_de_Beaumont', 'Jeanne-Marie'),
(5, 'Shelley', 'Mary'),
(6, 'King', 'Stephen'),
(7, 'Araki', 'Hirohiko'),
(8, 'Tashiro', 'Tetsuya'),
(9, 'De_montella', 'Christian'),
(10, 'Matheson', 'Richard'),
(11, 'Rowling', 'Joanne'),
(12, 'Oda', 'Eiichiro'),
(13, 'Vernes', 'Jules'),
(14, 'London', 'Jack'),
(15, 'Weulersse', 'Odile'),
(16, 'Boulle', 'Pierre'),
(17, 'Bruneau', 'Clotilde');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aimer`
--
ALTER TABLE `aimer`
  ADD CONSTRAINT `Aimer_Livre0_FK` FOREIGN KEY (`Isbn`) REFERENCES `livre` (`Isbn`),
  ADD CONSTRAINT `Aimer_Membre_FK` FOREIGN KEY (`idmembre`) REFERENCES `membre` (`idmembre`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `Livre_Editeur0_FK` FOREIGN KEY (`IdEditeur`) REFERENCES `editeur` (`IdEditeur`),
  ADD CONSTRAINT `Livre_Genre1_FK` FOREIGN KEY (`IdGenre`) REFERENCES `genre` (`IdGenre`),
  ADD CONSTRAINT `Livre_Langue2_FK` FOREIGN KEY (`IdLangue`) REFERENCES `langue` (`IdLangue`),
  ADD CONSTRAINT `Livre_Membre3_FK` FOREIGN KEY (`idmembre`) REFERENCES `membre` (`idmembre`),
  ADD CONSTRAINT `Livre_Personne_FK` FOREIGN KEY (`IdPersonne`) REFERENCES `personne` (`IdPersonne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
