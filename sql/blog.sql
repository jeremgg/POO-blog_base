-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 28 Août 2017 à 17:24
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `category_id`) VALUES
(1, '1er titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet euismod tellus vel elementum. Sed sit amet massa at velit tristique bibendum vel in purus. Duis sit amet massa a metus consequat lacinia et sed metus. Proin massa mi, gravida eget pellentesque vitae, consectetur vitae erat. Nunc sit amet erat porttitor, viverra nunc nec, placerat enim. Vivamus vehicula mollis felis, sit amet ultrices dui euismod aliquet. Integer ut mi sed felis faucibus mattis ut non arcu. ', '2017-08-09 08:18:25', 1),
(2, '2ème titre', 'Nunc eu elementum arcu. Pellentesque fringilla vel metus eget scelerisque. Cras ut libero sed neque accumsan sodales rhoncus dapibus ex. Donec metus ante, tincidunt eu quam rhoncus, aliquet commodo mi. Quisque quis tellus quis est aliquam tincidunt sit amet eu lacus. Maecenas nec urna risus. Vivamus non vestibulum tellus, in placerat nisi. Proin faucibus lacinia maximus. Ut feugiat id risus in malesuada.', '2017-08-16 07:20:34', 2),
(3, '3ème titre', 'Quisque pretium aliquam mi, sit amet bibendum enim scelerisque ac. Ut felis quam, pulvinar in semper vitae, accumsan a nisi. Ut ut pellentesque enim, scelerisque consectetur tellus. Proin justo nulla, efficitur vitae sapien non, lacinia auctor leo. Donec justo tellus, ultrices varius quam vitae, gravida finibus leo. Nullam eget luctus augue. Praesent tortor risus, venenatis quis tempus volutpat, placerat non erat. ', '2017-08-30 08:28:39', 2);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'digital painting'),
(2, 'informatique');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` char(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
