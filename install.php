<?php
session_start();
	$bdd = null;
	try
	{
		$bdd = new PDO('mysql:host=localhost','root','');
		$bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$req = $bdd->exec('DROP DATABASE IF EXISTS `ask`');
		//var_dump($req);
		$req = $bdd->exec('CREATE DATABASE `ask`');
		//var_dump($req);
		$bdd = new PDO('mysql:host=localhost;dbname=ask','root','');
		$req = $bdd->exec("DROP TABLE IF EXISTS `tags`;
DROP TABLE IF EXISTS `vote`;
DROP TABLE IF EXISTS `reponse`;
DROP TABLE IF EXISTS `question_tag`;
DROP TABLE IF EXISTS `question`;
DROP TABLE IF EXISTS `user`;



CREATE TABLE `user` (
  `pseudo` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `nomcomplet` varchar(64) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  PRIMARY KEY (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `question` (
  `idQ` int(11) NOT NULL AUTO_INCREMENT,
  `dateQ` date NOT NULL,
  `titre` varchar(128) NOT NULL,
  `question` text NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idQ`),
  KEY `pseudo` (`pseudo`),
  CONSTRAINT `question_ibfk_1` FOREIGN KEY (`pseudo`) REFERENCES `user` (`pseudo`)  
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


CREATE TABLE `tags` (
  `tag` varchar(32) NOT NULL,
  PRIMARY KEY (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `question_tag` (
  `idQ` int(11) NOT NULL,
  `tag` varchar(32) NOT NULL,
  PRIMARY KEY (`idQ`,`tag`),
  KEY `tag` (`tag`),
  CONSTRAINT `question_tag_ibfk_1` FOREIGN KEY (`idQ`) REFERENCES `question` (`idQ`),
  CONSTRAINT `question_tag_ibfk_2` FOREIGN KEY (`tag`) REFERENCES `tags` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `reponse` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `idQ` int(11) NOT NULL,
  `dateR` date NOT NULL,
  `reponse` text NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idR`),
  KEY `idQ` (`idQ`),
  KEY `pseudo` (`pseudo`),
  CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`idQ`) REFERENCES `question` (`idQ`),
  CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`pseudo`) REFERENCES `user` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `vote` (
  `idrep` int(11) NOT NULL DEFAULT '0',
  `pseudo` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`idrep`,`pseudo`),
  KEY `pseudo` (`pseudo`),
  CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`idrep`) REFERENCES `reponse` (`idR`),
  CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`pseudo`) REFERENCES `user` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
		//var_dump($req);
	}
	catch (Exception $e)
	{
			echo "<h1>ERREUR</h1>";
	        die('Erreur : ' . $e->getMessage());
	}
	session_destroy();
?>
<H1>Installation [finished]</h1>
<a href="index.php">index</a>