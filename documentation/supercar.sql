-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 05:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supercar`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `afficher_demande_status` (IN `param` VARCHAR(15))   BEGIN	
        	SELECT * FROM demande WHERE Status1 = param;
           
        END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `date_count` (IN `valeur` DATE, OUT `nombre` INT)   BEGIN
    	SELECT date_insertion, COUNT(*) as user_count FROM date_utilisateur WHERE date_insertion = valeur;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_connexion`
--

CREATE TABLE `admin_connexion` (
  `id_adminconnexion` int(9) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mot_de_passe` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_connexion`
--

INSERT INTO `admin_connexion` (`id_adminconnexion`, `email`, `mot_de_passe`) VALUES
(7, 'ethan.tuckmansing@admin.com', '12345'),
(9, 'nikhil.mohit@admin.com', '12345'),
(12, 'felaniaina@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `caroussel`
--

CREATE TABLE `caroussel` (
  `id_update` int(11) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `image5` varchar(50) NOT NULL,
  `apdn` text NOT NULL,
  `apdn1` text NOT NULL,
  `image_apdn` varchar(50) NOT NULL,
  `image_apdn1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caroussel`
--

INSERT INTO `caroussel` (`id_update`, `image1`, `image2`, `image3`, `image4`, `image5`, `apdn`, `apdn1`, `image_apdn`, `image_apdn1`) VALUES
(1, '../Image/AMG.webp', '../Image/Huracan.webp', '../Image/Hellcat.webp', '../Image/Evo.webp', '../Image/Ford.webp', 'SuperCar est une entreprise spécialisée dans la vente de voitures neuves importées de différents pays tels que le Japon, Singapour,\r\n                        l\'Afrique du Sud, les États-Unis, la Chine, l\'Allemagne, la France et d\'autres. Depuis sa création en 2009, notre entreprise s\'est\r\n                        efforcée de fournir à nos clients une large gamme de voitures de qualité supérieure à des prix compétitifs. Nous avons des entrepôts \r\n                        de stockage à plusieurs endroits pour répondre aux besoins de nos clients.', 'Nous accordons une grande importance à la satisfaction de nos clients. C\'est pourquoi nous offrons à nos clients la possibilité \r\n                            d\'essayer une voiture avant de l\'acheter.\r\n                            Chez SuperCar, nous sommes fiers de notre engagement envers la qualité et la satisfaction de nos clients. Nous travaillons constamment \r\n                            pour améliorer nos services et pour rester à la pointe de l\'industrie de la vente de voitures neuves.', '../Image/dealer.jpg', '../Image/mercedes.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(11) NOT NULL,
  `nom_complet` varchar(78) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idcontact`, `nom_complet`, `email`, `message`) VALUES
(758, 'Ethan Tuckmansing', 'tuckmansing2004@gmail.c', 'Merci beau'),
(761, 'Andrew Tuck', 'madtuck2222@gmail.com', 'Merci'),
(762, 'Jean Michel', 'ethatuck@gmail.com', 'salut tt le monde');

-- --------------------------------------------------------

--
-- Table structure for table `date_utilisateur`
--

CREATE TABLE `date_utilisateur` (
  `id_date` int(11) NOT NULL,
  `date_insertion` date NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `date_utilisateur`
--

INSERT INTO `date_utilisateur` (`id_date`, `date_insertion`, `email`) VALUES
(1, '2023-11-07', 'adem@mail.com'),
(2, '2023-11-07', 'koli@mail.com'),
(3, '2023-11-08', 'nick@mail.com'),
(4, '2023-11-08', 'Michen@mail.com'),
(5, '2023-11-08', 'Mathieu@mail.com'),
(6, '2023-11-20', 'jean1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `ID_demande` int(11) NOT NULL,
  `idinscription` varchar(250) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `Id_Voiture` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `modele` varchar(50) DEFAULT NULL,
  `details` varchar(50) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `heure1` time DEFAULT NULL,
  `Status1` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`ID_demande`, `idinscription`, `nom`, `prenom`, `email`, `Id_Voiture`, `marque`, `modele`, `details`, `date1`, `heure1`, `Status1`) VALUES
(36, '535', 'Cabris', 'Jean', 'jean@gmail.com', '2', 'Ford', 'Raptor F-150', 'wet4', '2023-08-18', '11:21:00', 'Terminé'),
(37, '534', 'Tuckmansing', 'Ethan', 'tuckmansing2004@gmail.com', '1', 'Mercedes', 'AMG GT S', 'J\'ai deux passager', '2023-09-15', '13:24:00', 'En cours'),
(38, '534', 'Tuckmansing', 'Ethan', 'tuckmansing2004@gmail.com', '1', 'Mercedes', 'AMG GT S', 'wegf', '2023-09-06', '11:39:00', 'En cours'),
(39, '534', 'Tuck', 'Ethan', 'tuckmansing2004@gmail.com', '2', 'Ford', 'Raptor F-150', 'wert', '2023-09-06', '11:41:00', 'Confirmé');

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id_eve` int(11) NOT NULL,
  `Video` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Petit_txt` varchar(1000) NOT NULL,
  `Petit_titre` varchar(1000) NOT NULL,
  `Texte` varchar(1000) NOT NULL,
  `Titre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`id_eve`, `Video`, `Image`, `Petit_txt`, `Petit_titre`, `Texte`, `Titre`) VALUES
(1, '../Video/4x4.mp4', '../Image/4x4.jpg', 'Concours de tuning de SUV : une rencontre exceptionnelle pour les passionnés de tout-terrain, avec Supercar présent pour dévoiler les dernières tendances en matière de tuning et les nouveaux modèles de SUV les plus attendus de l\'année', 'Des passionnés d\'automobiles venus de différentes régions du pays se rassemblent pour admirer des voitures de luxe.', 'Supercar est heureux de partager avec vous le retour sur le concours de tuning de 4x4, une rencontre unique qui a rassemblé les passionnés de tout-terrain et de voitures modifiées. Cet événement a été l\'occasion pour les visiteurs de découvrir les dernières tendances en matière de tuning 4x4, avec des véhicules impressionnants qui ont su attirer l\'attention de tous les participants.\r\n<br><br>\r\nLe concours a eu lieu dans un endroit exceptionnel, où les visiteurs ont pu admirer les véhicules les plus puissants et les plus impressionnants du moment. Les propriétaires des 4x4 ont présenté leur véhicule avec fierté, montrant les modifications effectuées pour améliorer les performances et l\'apparence de leurs voitures.\r\n<br><br>\r\nLes participants ont été jugés sur différents critères, notamment l\'esthétique, la puissance et la qualité des modifications. Les véhicules les plus impressionnants ont attiré l\'attention des visiteurs, qui ont pu discuter avec les propriétaires pour en savoir plus ', 'Concours de tuning de 4x4'),
(2, '../Video/car meet.mp4', '../Image/car meet.jpg', 'Rencontre de voitures de prestige : l\'événement automobile de l\'année rassemble les passionnés de l\'automobile venus de tout le pays pour découvrir les dernières nouveautés en matière de voitures haut de gamme, avec Supercar à la tête de la rencontre', 'Des passionnés d\'automobiles venus de différentes régions du pays se rassemblent pour admirer des voitures de luxe.\r\n  ', '\r\n    Supercar est fier de partager avec vous l\'un des événements automobiles les plus attendus de l\'année, qui a rassemblé des amateurs de voitures des quatre coins du pays pour une rencontre exceptionnelle. Cette occasion unique a permis à des passionnés de l\'automobile de se rencontrer, d\'échanger et de découvrir les dernières nouveautés en matière de voitures de prestige.\r\n    <br><br>\r\n    L\'événement a eu lieu dans un lieu prestigieux où les visiteurs ont pu admirer les voitures les plus exclusives et les plus impressionnantes du moment. Des représentants de Supercar étaient présents pour répondre aux questions des visiteurs et pour partager leur expertise en matière de voitures de luxe.\r\n    <br><br>\r\n    Les voitures exposées étaient toutes plus impressionnantes les unes que les autres, avec des designs innovants et des performances époustouflantes. Les visiteurs ont pu admirer les derniers modèles de Supercar, ainsi que d\'autres marques prestigieuses telles que Ferrari, Lambor', 'Rencontre de voitures de prestige'),
(3, '..\\Video\\bmw showroom.mp4', '..\\Image\\testtttt.jpg', 'Quand le luxe rencontre l\'excellence : retour sur le showroom exceptionnel de Supercar en collaboration avec BMW, présentant les dernières innovations en matière de voitures haut de gamme', 'Retour sur notre showroom exceptionnel en collaboration avec BMW\n', '\n    Nous avons récemment eu l\'opportunité de collaborer avec BMW pour organiser un showroom exceptionnel. Cet événement a été l\'occasion pour les amateurs de voitures de découvrir les dernières innovations en matière de voitures de luxe.\n    <br><br>\n    Le showroom s\'est tenu dans un lieu prestigieux, où les visiteurs ont pu admirer les derniers modèles de BMW. Les deux marques ont présenté une sélection de voitures sophistiquées, élégantes et performantes, qui ont attiré l\'attention des visiteurs dès leur arrivée. \n    <br><br>\n    Les représentants de Supercar et BMW étaient présents tout au long de l\'événement pour répondre aux questions des visiteurs et leur fournir des informations détaillées sur les caractéristiques et les fonctionnalités des véhicules présentés. \n    <br><br>\n    Les visiteurs ont été particulièrement impressionnés par la qualité de la présentation, qui mettait en valeur la beauté et l\'excellence des voitures exposées. Les designs modernes et élégants de BMW o', 'Showroom BMW\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `idinscription` int(9) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `nom` varchar(97) NOT NULL,
  `email` varchar(47) NOT NULL,
  `mot_de_passe` varchar(60) NOT NULL,
  `numero_de_telephone` varchar(20) NOT NULL,
  `civilite` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inscription`
--

INSERT INTO `inscription` (`idinscription`, `prenom`, `nom`, `email`, `mot_de_passe`, `numero_de_telephone`, `civilite`) VALUES
(534, 'Ethan', 'Tuckmansing', 'tuckmansing2004@gmail.com', 'ctwqf43n', '58426274', 'Mauricien'),
(535, 'Jean', 'Cabris', 'jean@gmail.com', 'ctwqf43n', '58426274', 'Mauricien'),
(536, 'Nikhil', 'Mohit', 'madtuck2222@gmail.com', 'ctwqf43n', '58426274', 'Mauricien'),
(539, 'Jean', 'Cabrus', 'jcabrus@gmail.com', '$2y$10$fpjcr', '58426274', 'Mauricien'),
(549, 'Michel', 'Pierre', 'Michen@mail.com', 'ctwqf43n', '58426274', 'Mauricien'),
(550, 'Mathieu', 'Chan', 'Mathieu@mail.com', 'ctwqf43n', '58426274', 'Mauricien'),
(551, 'Jean', 'Kith', 'jean1234@gmail.com', 'ctwqf43n', '58426274', 'Mauricien');

--
-- Triggers `inscription`
--
DELIMITER $$
CREATE TRIGGER `insert_user_trigger` AFTER INSERT ON `inscription` FOR EACH ROW BEGIN
    INSERT INTO date_utilisateur (date_insertion, email)
    VALUES (curdate(), NEW.email);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `Id_Voiture` int(11) NOT NULL,
  `Marque` varchar(50) DEFAULT NULL,
  `Modele` varchar(50) NOT NULL,
  `idcategorie` varchar(50) DEFAULT NULL,
  `Annee` varchar(50) DEFAULT NULL,
  `Specification` varchar(3000) DEFAULT NULL,
  `Prix` varchar(50) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`Id_Voiture`, `Marque`, `Modele`, `idcategorie`, `Annee`, `Specification`, `Prix`, `Image`) VALUES
(1, 'Mercedes', 'AMG GT S', 'Sport', '2021', 'La Mercedes AMG GT S est une voiture de sport haute performance qui a été introduite en 2017. Elle est équipée d\'un moteur V8 biturbo de 4,0 litres qui développe une puissance de 585 chevaux et un couple de 700 Nm. Elle peut accélérer de 0 à 100 km/h en seulement 3,6 secondes et atteindre une vitesse maximale de 318 km/h. La voiture dispose également d\'un système de suspension adaptative, d\'un aérodynamisme optimisé, d\'un système de freinage en céramique et d\'un intérieur de luxe. ', '140 000 €', '../Image/AMG.jpg'),
(2, 'Ford', 'Raptor F-150', '4x4', '2020', 'La Ford Raptor F-150 2020 est un camion tout-terrain haut de gamme conçu pour les aventuriers qui cherchent à explorer la nature sauvage. Elle est équipée d\'un moteur V6 biturbo de 3,5 litres qui produit 450 chevaux et 510 lb-pi de couple, couplé à une transmission automatique à 10 vitesses. Elle dispose d\'une suspension haute performance qui offre une conduite confortable même sur les terrains les plus accidentés, ainsi que de pneus tout-terrain pour une traction maximale.', '50 700 €', '../Image/Ford.jpg'),
(3, 'Dodge', 'Challenger SRT Hellcat', 'Sport', '2020', 'La Dodge Challenger Hellcat 2020 est une voiture de sport américaine emblématique avec un design agressif et une performance incroyable. Voici quelques-unes de ses spécifications clés:\r\n\r\nMoteur: V8 suralimenté de 6,2 litres produisant 717 chevaux et 650 lb-pi de couple\r\nTransmission: Boîte de vitesses automatique à huit rapports\r\nAccélération: 0 à 60 mph en environ 3,6 secondes\r\nVitesse de pointe: 320 km/h\r\nFreins: Freins à disque Brembo hautes performances\r\nSuspensions: Suspension adaptative à trois modes\r\nIntérieur: Sièges sport en cuir, écran tactile de 8,4 pouces avec système d\'infodivertissement Uconnect, système audio Harman Kardon à 18 haut-parleurs', '57 180 €', '../Image/Hellcat.jpg'),
(4, 'Mitsubishi', 'Lancer Evolution IX', 'Sport', '2006', 'Voici quelques spécifications pour la Mitsubishi Lancer Evolution IX, qui était produite de 2005 à 2007 :\r\n\r\nMoteur: 2,0 litres turbocharged (4G63) inline 4\r\nPuissance: 280 chevaux\r\nCouple: 400 Nm\r\nTransmission: boîte manuelle à 6 vitesses\r\nPoids: environ 1 430 kg\r\nAccélération de 0 à 100 km/h: environ 5,2 secondes\r\nVitesse maximale: environ 250 km/h\r\nSystème de transmission intégrale (AWD) avec différentiel central actif (ACD) et différentiel arrière actif (AYC)\r\nSuspension avant: jambes de force MacPherson\r\nSuspension arrière: multibras indépendante\r\nFreins avant: disques ventilés de 320 mm avec étriers Brembo à 4 pistons\r\nFreins arrière: disques ventilés de 300 mm avec étriers Brembo à 2 pistons\r\nCeci n\'est pas une liste exhaustive de toutes les spécifications de la Mitsubishi Lancer Evolution IX, mais cela vous donne une idée générale de ses caractéristiques principales.', '40 050 €', '../Image/Evo.jpg'),
(5, 'Lamborghini', 'Huracan Evo', 'Sport', '2021', 'La Lamborghini Huracán EVO 2021 est une voiture de sport haut de gamme qui offre des performances exceptionnelles et une esthétique saisissante. Elle est équipée d\'un moteur V10 de 5,2 litres qui développe une puissance de 640 chevaux, capable de propulser la voiture de 0 à 100 km/h en seulement 2,9 secondes. Elle dispose également d\'une transmission intégrale et d\'une suspension active pour une tenue de route optimale. La Lamborghini Huracán EVO 2021 est équipée d\'une transmission automatique à double embrayage à sept rapports, offrant des changements de vitesse rapides et fluides. Elle possède également un système de direction à assistance électrique pour une précision de conduite accrue.', '191 750 €', '../Image/Huracan.jpg'),
(6, 'Mercedes', 'AMG S 65 Cabriolet', 'Berline', '2017', 'La Mercedes-AMG S 65 est une voiture de luxe haut de gamme produite par Mercedes-Benz en 2017. Voici quelques-unes de ses spécifications clés :\r\n\r\nMoteur : V12 biturbo de 6,0 litres\r\nPuissance : 630 chevaux\r\nCouple : 1 000 Nm\r\nTransmission : automatique à 7 vitesses\r\nAccélération de 0 à 100 km/h : 4,3 secondes\r\nVitesse de pointe : 250 km/h (limitée électroniquement)\r\nPoids : 2 250 kg\r\nConsommation de carburant : 19,6 L/100 km en cycle mixte', '217 183 €', '../Image/C-Class.jpg'),
(7, 'Ford', 'Focus RS', 'Hatchback', '2020', 'La Ford Focus RS 2020 est une voiture compacte sportive haute performance produite par Ford. Voici quelques-unes de ses spécifications clés :\r\n\r\nMoteur : un quatre cylindres turbo de 2,3 litres\r\nPuissance : 350 chevaux\r\nCouple : 440 Nm\r\nTransmission : manuelle à six vitesses\r\n0-100 km/h : 4,7 secondes\r\nVitesse maximale : 266 km/h\r\nPoids : 1 599 kg\r\nSystème de traction intégrale : Ford Performance All-Wheel Drive\r\nSuspension : suspension sport ajustable\r\nFreins : étriers Brembo à quatre pistons à l\'avant, disques ventilés de 350 mm à l\'avant et de 302 mm à l\'arrière.', '38 600 €', '../Image\\FORD FOCUS.webp'),
(8, 'Lamborghini', 'Urus S', 'SUV', '2023', 'La Lamborghini Urus S est un SUV de luxe et de haute performance conçu pour offrir une expérience de conduite inoubliable. Voici quelques-unes de ses spécifications clés:\r\n\r\nMoteur: V8 biturbo de 4,0 litres\r\nPuissance maximale: 650 chevaux\r\nCouple maximal: 850 Nm\r\nTransmission: Boîte de vitesses automatique à 8 rapports\r\nAccélération: 0 à 100 km/h en 3,6 secondes\r\nVitesse maximale: 305 km/h\r\nFreins: Disques de frein en céramique de 440 mm à l\'avant et 370 mm à l\'arrière\r\nSuspension: Suspension pneumatique active et système de stabilisation anti-roulis\r\nDimensions: Longueur de 5,11 mètres, largeur de 2,02 mètres et hauteur de 1,64 mètre\r\nPoids: 2 200 kg\r\nCapacité de chargement: 616 litres (1 596 litres avec les sièges arrière rabattus)', '195 538 €', '../Image/Urus.jpg'),
(9, 'Mercedes', 'GLE Coupe', 'SUV', '2022', 'La Mercedes GLE Coupe 2022 est un SUV de luxe à cinq portes qui offre un mélange de sportivité et de luxe. Voici quelques spécifications clés :\r\n\r\nMoteur : La Mercedes GLE Coupe 2022 est équipée d\'un moteur V6 biturbo de 3,0 litres, qui produit une puissance de 362 chevaux et un couple de 369 lb-pi.\r\n\r\nTransmission : La voiture est équipée d\'une transmission automatique à 9 vitesses.\r\n\r\nPerformances : La Mercedes GLE Coupe 2022 peut accélérer de 0 à 60 miles par heure en 5,7 secondes et atteindre une vitesse maximale de 155 miles par heure.\r\n\r\nCaractéristiques de sécurité : La voiture est équipée de diverses fonctionnalités de sécurité avancées, notamment un système d\'alerte de collision avant, un système de freinage automatique d\'urgence, un régulateur de vitesse adaptatif et un avertissement de sortie de voie.\r\n\r\nCaractéristiques de luxe : La Mercedes GLE Coupe 2022 dispose d\'un intérieur élégant et spacieux avec des sièges en cuir, un système de climatisation à deux zones, un systèm', '91 350 €', '../Image/GLE.jpg'),
(10, 'Mercedes', 'AMG G 63 Brabus B700', 'SUV', '2023', 'La Mercedes G63 Brabus B700 2023 est une version améliorée de la Mercedes-Benz Classe G. Elle est équipée d\'un moteur V8 biturbo de 4,0 litres développant 700 chevaux et 701 lb-pi de couple, ce qui lui permet d\'atteindre une vitesse maximale de 240 km/h et d\'accélérer de 0 à 100 km/h en seulement 4,3 secondes.\r\n\r\nLa transmission intégrale 4MATIC+ de Mercedes est de série et elle est associée à une boîte de vitesses automatique à neuf rapports. La voiture dispose également d\'un système de suspension amélioré qui offre une meilleure maniabilité et un confort de conduite amélioré.\r\n\r\nLes améliorations de Brabus sur cette voiture incluent des jantes en alliage de 23 pouces, un kit carrosserie aérodynamique, des freins de haute performance, un échappement sport et un intérieur luxueux en cuir avec des accents en fibre de carbone. En termes de technologie, la voiture est équipée d\'un système d\'infodivertissement avec écran tactile de 12,3 pouces, un système de son surround et un large éventa', '165 473 €', '../Image/G63.webp'),
(11, 'Mercedes', 'Maybach', 'Berline', '2023', 'La Mercedes-Maybach est une voiture de luxe haut de gamme produite par la marque allemande Mercedes-Benz. La Maybach est connue pour son intérieur spacieux et luxueux, sa technologie de pointe, ses performances élevées et son style élégant.\r\n\r\nVoici quelques spécifications de la Mercedes Maybach 2023 :\r\n\r\nMoteur : V8 biturbo de 4,0 litres\r\nPuissance : 621 chevaux\r\nCouple : 738 lb-pi\r\nTransmission : Automatique à 9 vitesses\r\nAccélération : 0-100 km/h en 4,5 secondes\r\nVitesse maximale : 250 km/h (limitée électroniquement)\r\nLongueur : 5,47 mètres\r\nLargeur : 1,95 mètre\r\nHauteur : 1,51 mètre\r\nPoids : 2 745 kg\r\nCapacité de carburant : 88 litres\r\nConsommation de carburant : 15,8 L/100 km (ville), 11,5 L/100 km (autoroute)\r\nCapacité de la malle : 500 litres\r\nLa Mercedes Maybach 2023 est également équipée d\'un système de suspension adaptative, de phares LED adaptatifs, de sièges chauffants et ventilés en cuir Nappa, d\'un toit panoramique, d\'un système audio haute-fidélité, d\'un affichage tête h', '324 050 €', '../Image/Maybach.avif'),
(12, 'BMW', 'i8 Coupe', 'Sport', '2020', 'La BMW i8 Coupe 2020 est une voiture de sport hybride rechargeable avec un style futuriste. Elle est équipée d\'un moteur à essence trois cylindres de 1,5 litre et d\'un moteur électrique qui offre une puissance combinée de 369 chevaux. Elle peut atteindre une vitesse maximale de 250 km/h et accélérer de 0 à 100 km/h en seulement 4,4 secondes. La voiture peut parcourir jusqu\'à 55 km en mode électrique pur et dispose d\'une autonomie totale de 500 km en utilisant les deux moteurs. La BMW i8 Coupe 2020 est également équipée d\'une suspension adaptative et d\'un système de freinage régénératif pour améliorer l\'efficacité énergétique.', '135 700 €', '../Image/i8.webp'),
(13, 'BMW', 'M8 Coupe Competition', 'Sport', '2023', 'La BMW M8 Coupe Competition est une voiture sportive haut de gamme produite par le constructeur automobile allemand BMW. Voici quelques spécifications clés :\r\n\r\nMoteur : V8 biturbo de 4,4 litres\r\nPuissance maximale : 625 chevaux\r\nCouple maximal : 750 Nm\r\nTransmission : transmission intégrale xDrive avec une boîte de vitesses automatique à 8 rapports\r\nAccélération de 0 à 100 km/h : 3,2 secondes\r\nVitesse de pointe : 305 km/h\r\nSuspension adaptative M avec amortissement piloté\r\nDifférentiel arrière M actif\r\nFreins M Sport avec étriers de frein bleus à 6 pistons à l\'avant et 4 pistons à l\'arrière\r\nJantes en alliage léger de 20 pouces avec pneus Michelin Pilot Sport 4S\r\nSystème d\'échappement M Sport en acier inoxydable avec quatre sorties d\'échappement\r\nLa BMW M8 Coupe Competition est une voiture de sport luxueuse et performante qui offre une conduite dynamique avec une technologie de pointe.', '245 335 €', '../Image/M8.webp'),
(14, 'BMW', 'X6 M Competition', 'SUV', '2022', 'La BMW X6 M Competition est un SUV sportif haut de gamme offrant une expérience de conduite dynamique. Voici quelques-unes de ses spécifications clés :\r\n\r\nMoteur : V8 biturbo de 4,4 litres\r\nPuissance : 617 chevaux\r\nCouple : 553 lb-pi\r\nTransmission : automatique à huit vitesses avec transmission intégrale xDrive\r\nAccélération : de 0 à 100 km/h en 3,8 secondes\r\nVitesse maximale : 250 km/h (limitée électroniquement)\r\nSuspension : suspension adaptative M avec amortisseurs à commande électronique\r\nFreins : freins à disque ventilé M Sport avec étriers bleus\r\nIntérieur : intérieur en cuir Merino et alcantara avec sièges sport M et volant en cuir M\r\nEn résumé, la BMW X6 M Competition est un SUV puissant et sportif avec une performance impressionnante et un intérieur de luxe.', '124 305 €', '../Image/X6.webp'),
(15, 'BMW', 'M4 competition', 'Sport', '2022', 'Le dernier modèle de la BMW M4 a été lancé en 2021 et il est disponible en version standard et en version compétition. Les spécifications de la BMW M4 compétition sont les suivantes:\r\n\r\nMoteur: Twin-Turbo 3,0 litres I6\r\nPuissance: 503 chevaux\r\nCouple: 479 lb-pi\r\nTransmission: Manuelle à 6 vitesses ou automatique à 8 vitesses\r\nVitesse maximale: 250 km/h (limitée électroniquement)\r\nAccélération de 0 à 100 km/h: 3,9 secondes (environ)\r\nPoids: 1 735 kg (environ)', '112 500 €', '../Image/m4.webp'),
(16, 'BMW', '1 series', 'Hatchback', '2023', 'La BMW Série 1 est une berline compacte produite par le constructeur automobile allemand BMW. Elle est proposée avec des motorisations allant de 102 à 306 chevaux, et est disponible en version propulsion ou quatre roues motrices xDrive. La BMW Série 1 est équipée de technologies avancées telles que la connectivité Bluetooth, un écran tactile haute résolution, un système de navigation, des caméras de recul, un régulateur de vitesse adaptatif et des systèmes de sécurité avancés. Elle est également appréciée pour son design sportif et élégant, avec une calandre imposante et des lignes dynamiques. La BMW Série 1 est souvent considérée comme l\'une des meilleures berlines compactes du marché en termes de performances et de confort de conduite.', '34 072 €', '../Image/1series.jpg'),
(17, 'Mercedes', 'A 180', 'Hatchback', '2023', 'La Mercedes A 180 est une voiture compacte produite par la marque allemande Mercedes-Benz. Voici quelques-unes de ses spécifications :\r\n\r\nMoteur : 4 cylindres en ligne essence\r\nPuissance : 136 ch\r\nTransmission : boîte manuelle à 6 vitesses ou boîte automatique à double embrayage 7G-DCT\r\nAccélération de 0 à 100 km/h : 8,9 secondes\r\nVitesse maximale : 202 km/h\r\nConsommation de carburant combinée : 5,6-5,1 L/100 km\r\nÉmissions de CO2 combinées : 127-117 g/km\r\nDimensions : longueur de 4 419 mm, largeur de 1 796 mm et hauteur de 1 440 mm\r\nPoids : 1 330 kg (version boîte manuelle) ou 1 350 kg (version boîte automatique)', '37 949 €', '../Image/A180.webp'),
(18, 'Ford', 'Ranger Raptor', '4x4', '2023', 'La Ford Ranger Raptor 2023 est un 4x4 haute performance conçue pour les terrains les plus difficiles. Elle est équipée d\'un moteur turbo diesel de 2,0 litres, développant une puissance de 213 chevaux et un couple de 500 Nm. La transmission est automatique à dix rapports, avec une boîte de transfert à deux vitesses. Le système de suspension à bras triangulaires offre une garde au sol de 283 mm et permet une grande amplitude de débattement pour absorber les chocs les plus violents. Les pneus tout-terrain BF Goodrich et les freins à disque ventilés à l\'avant et à l\'arrière assurent une excellente adhérence et un freinage puissant. L\'intérieur est spacieux et confortable, avec des sièges en cuir et des équipements haut de gamme, tels que le système d\'infodivertissement SYNC 4 et le système de son B&O. La camionnette est également équipée de nombreuses fonctionnalités de sécurité, telles que la caméra de recul, le régulateur de vitesse adaptatif et le système de freinage d\'urgence.', '68 400 €', '../Image/ranger.jpg'),
(19, 'Mercedes', 'X-Class', '4x4', '2019', 'La Mercedes X-Class est un pick-up haut de gamme qui a été produit de 2017 à 2020. Voici quelques-unes de ses spécifications pour l\'année 2019 :\r\n\r\nMoteurs : 2,3 litres Diesel quatre cylindres (163 ou 190 chevaux) et 3,0 litres V6 Diesel (258 chevaux).\r\nBoîte de vitesses : manuelle à six rapports ou automatique à sept rapports.\r\nCapacité de charge utile : jusqu\'à 1 042 kg.\r\nCapacité de remorquage : jusqu\'à 3 500 kg.\r\nSystème de traction : 4 roues motrices avec différentiel arrière à glissement limité.\r\nDimensions : longueur de 5,34 mètres, largeur de 1,92 mètre et hauteur de 1,82 mètre.\r\nÉquipements de série : climatisation, régulateur de vitesse, système audio avec écran tactile, caméra de recul, jantes en alliage, phares à LED, etc.\r\nVeuillez noter que la production de la Mercedes X-Class a été interrompue en mai 2020.', '51 708 €', '../Image/Xclass.jpg'),
(20, 'Mitsubishi', 'Triton GLX', '4x4', '2023', 'La Mitsubishi Triton 2023 est une camionnette robuste et fiable conçue pour les travaux lourds et les aventures tout-terrain. Voici quelques-unes de ses spécifications :\r\n\r\nMoteur : diesel de 2,4 litres à quatre cylindres, capable de produire jusqu\'à 178 chevaux et 317 lb-pi de couple\r\nTransmission : manuelle à six vitesses ou automatique à six vitesses avec mode manuel et palettes de changement de vitesse au volant\r\nCapacité de remorquage : jusqu\'à 3 100 kg (6 834 lb)\r\nCapacité de charge utile : jusqu\'à 1 080 kg (2 381 lb)\r\nSuspension arrière : suspension multibras pour une meilleure stabilité et une meilleure tenue de route\r\nSystème de traction intégrale : avec un choix de modes de conduite, y compris le mode 4x4 pour une conduite tout-terrain\r\nCaractéristiques de sécurité : comprenant le contrôle de stabilité électronique, le contrôle de traction actif, l\'assistance au freinage d\'urgence, l\'avertissement de collision avant, l\'alerte de sortie de voie et plus encore.', '28 200 €', '../Image/triton.jpg'),
(21, 'Mitsubishi', 'Outlander PHEV', 'SUV', '2023', 'La Mitsubishi Outlander PHEV est un SUV hybride rechargeable qui combine un moteur à essence de 2,4 litres avec deux moteurs électriques pour produire une puissance combinée de 221 chevaux. Il est équipé d\'une transmission à variation continue (CVT) et d\'une traction intégrale. La batterie lithium-ion de 13,8 kWh permet une autonomie électrique allant jusqu\'à 24 miles (38 km) selon l\'Environmental Protection Agency (EPA) des États-Unis. La consommation de carburant combinée est de 74 miles par gallon équivalent (MPGe) ou 3,2 litres aux 100 km, ce qui en fait l\'un des véhicules les plus économes en carburant de sa catégorie. La Mitsubishi Outlander PHEV est également équipée d\'un grand nombre de caractéristiques de sécurité et de technologie, y compris un système d\'infodivertissement compatible avec Apple CarPlay et Android Auto, une caméra de recul et une suite de sécurité active comprenant des capteurs de stationnement, un régulateur de vitesse adaptatif et un avertisseur de collision avant avec freinage d\'urgence autonome.', '42 665 €', '../Image/outlander.jpg'),
(22, 'Ford', 'Fusion ', 'Berline', '2021', 'La Ford Fusion est une berline familiale produite par le constructeur automobile américain Ford. Voici quelques spécifications pour le modèle 2020 :\r\n\r\nMoteurs disponibles : 4 cylindres de 2,5 litres, 4 cylindres turbo de 1,5 litre, 4 cylindres turbo de 2,0 litres, hybride de 2,0 litres, hybride enfichable de 2,0 litres\r\nPuissance : varie de 175 à 245 chevaux selon le moteur choisi\r\nTransmission : automatique à 6 ou 8 rapports\r\nConsommation de carburant : varie selon le moteur et la configuration, allant de 6,9 à 9,4 litres aux 100 kilomètres en ville et de 5,5 à 6,2 litres aux 100 kilomètres sur autoroute\r\nDimensions : longueur de 4 872 mm, largeur de 1 852 mm, hauteur de 1 468 mm et empattement de 2 850 mm\r\nCapacité de la boîte à gants : 6,9 litres\r\nCapacité du coffre : 453 litres\r\nÉquipements : système audio de 6 haut-parleurs, système de navigation, écran tactile de 8 pouces, caméra de recul, régulateur de vitesse adaptatif, freinage d\'urgence automatique, système d\'aide au stationnement, etc.', '36 671 €', '../Image/fusion.avif'),
(24, 'Mitsubishi ', 'Lancer EX', 'Sport', '2009', 'Une voiture rapide', '23 455€', '../Image/ex.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caroussel`
--
ALTER TABLE `caroussel`
  ADD PRIMARY KEY (`id_update`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indexes for table `date_utilisateur`
--
ALTER TABLE `date_utilisateur`
  ADD PRIMARY KEY (`id_date`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`ID_demande`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_eve`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`idinscription`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`Id_Voiture`),
  ADD UNIQUE KEY `Id_Voiture` (`Id_Voiture`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caroussel`
--
ALTER TABLE `caroussel`
  MODIFY `id_update` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=763;

--
-- AUTO_INCREMENT for table `date_utilisateur`
--
ALTER TABLE `date_utilisateur`
  MODIFY `id_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `ID_demande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_eve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `idinscription` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=552;

--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `Id_Voiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
