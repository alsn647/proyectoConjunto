-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2022 a las 10:10:09
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoconjunto`
--

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `products` (`id`, `name`, `description`, `category`, `price`, `taxes`, `discount`, `stock`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Sword Coast Adventurers guide', 'Get everything you need to adventure in the Forgotten Realms on the exciting Sword Coast, home to the cities of Baldur&;s Gate, Waterdeep, and Neverwinter.', 1,
    30, 2, 1, 20, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),

(2, 'Volos Guide To Monsters', 'This is NOT just another Monster Manual! Volo&;s Guide to Monsters provides something exciting for players and Dungeon Masters everywhere.', 1,
    30, 2, 1, 20, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),

(3, 'Out of the Abyss', 'Dare to descend into the Underdark in this adventure for the world’s greatest roleplaying game', 1,
    30, 2, 1, 20, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03',),

(4, 'Curse of Strahd', 'Unravel the mysteries of Ravenloft in this dread adventure for the worlds greatest roleplaying game', 1,
    50, 2, 1, 5, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),

(5, 'Princes of the Apocalypse', 'Abolish an Ancient Evil Threatening Devastation in this Adventure for the World’s Greatest Roleplaying Game', 1,
    35, 2, 3, 23, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(6, 'Hoard of the Dragon Queen: Tyranny of Dragons', 'Fight the War Against Draconic Oppression in this Adventure for the World&;s Greatest Roleplaying Game', 1,
    30, 2, 2, 15, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(7, 'Storm Kings Thunder', 'Take a stand against the giants in this adventure for the world’s greatest roleplaying game', 1,
    40, 2, 3, 4, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(8, 'Dungeons & Dragons Starter Set', 'Six Dice, Five Ready-To-Play D&d Characters with Character Sheets, a Rulebook, and One Adventure. Everything you need to start playing', 3,
    20, 2, 0, 2, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(9, 'Dungeons and Dragons: Explorador - Cartas de Conjuros - Castellano', 'Este mazo de cartas de conjuro es un valioso recurso para cualquier lanzador de conjuros. Puedes consultar el mazo para escoger los conjuros a aprender, y tras un largo descanso puedes apartar los hechizos que quieres preparar para ese día', 3,
    6, 2, 8, 2, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(10, 'Dungeons and Dragons: Paladin - Cartas de Conjuros - Castellano', 'Este mazo de cartas de conjuro es un valioso recurso para cualquier lanzador de conjuros. Puedes consultar el mazo para escoger los conjuros a aprender, y tras un largo descanso puedes apartar los hechizos que quieres preparar para ese día', 3,
    6, 2, 8, 5,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(11, 'Dungeons and Dragons: Druida - Cartas de Conjuros - Castellano', 'Este mazo de cartas de conjuro es un valioso recurso para cualquier lanzador de conjuros. Puedes consultar el mazo para escoger los conjuros a aprender, y tras un largo descanso puedes apartar los hechizos que quieres preparar para ese día', 3,
    6, 2, 8, 5,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(12, 'Dungeons and Dragons: Clerigo - Cartas de Conjuros - Castellano', 'Este mazo de cartas de conjuro es un valioso recurso para cualquier lanzador de conjuros. Puedes consultar el mazo para escoger los conjuros a aprender, y tras un largo descanso puedes apartar los hechizos que quieres preparar para ese día', 3,
    6, 2, 8, 3,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(13, 'Dungeons and Dragons: Bardo - Cartas de Conjuros - Castellano', 'Este mazo de cartas de conjuro es un valioso recurso para cualquier lanzador de conjuros. Puedes consultar el mazo para escoger los conjuros a aprender, y tras un largo descanso puedes apartar los hechizos que quieres preparar para ese día', 3,
    6, 2, 8, 5, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(14, 'Dungeons and Dragons: Mago - Cartas de Conjuros - Castellano', 'Este mazo de cartas de conjuro es un valioso recurso para cualquier lanzador de conjuros. Puedes consultar el mazo para escoger los conjuros a aprender, y tras un largo descanso puedes apartar los hechizos que quieres preparar para ese día', 3,
    6, 2, 8, 1, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(15, 'Dungeons and Dragons: Brujo - Cartas de Conjuros - Castellano', 'Este mazo de cartas de conjuro es un valioso recurso para cualquier lanzador de conjuros. Puedes consultar el mazo para escoger los conjuros a aprender, y tras un largo descanso puedes apartar los hechizos que quieres preparar para ese día', 3,
    6, 2, 8, 1, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(16, 'Dungeons and Dragons: Cartas de Poderes Marciales y Razas - Castellano', 'Todos los conjuros recibidos como atributos de las razas aasimar, alto elfo, drow, firbolg, genasi, gnomo de los bosques, tiefling y tritón', 3,
    6, 2, 8, 1, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(17, 'Dungeons and Dragons: Cartas de Monstruos - Castellano', 'estas cartas son la herramienta perfecta para aquellos dungeon masters que quieran mantener ordenada y accesible su colección de criaturas', 3,
    6, 2, 8, 1, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(18, 'Miniatura: Dragón Rojo gigantesco', 'Imprimado y listo para pintar', 3,
    40, 5, 2, 2, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(19, 'Miniatura: Dragón Azul gigantesco', 'Imprimado y listo para pintar', 3,
    40, 5, 2, 3,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(20, 'Miniatura: Dragón Verde gigantesco', 'Imprimado y listo para pintar', 3,
    40, 5, 2, 4,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(21, 'Miniatura: Dragón Negro gigantesco', 'Imprimado y listo para pintar', 3,
    50, 5, 2, 2 ,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(22, 'Miniatura: Dragón Metalico gigantesco', 'Imprimado y listo para pintar', 3,
    50, 5, 2, 3,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(23, 'Devir - Catan, juego de mesa', 'Sois los primeros colonos en llegar a la isla de Catan. Muy pronto empiezan a aparecer los primeros poblados y las primeras carreteras, mientras que los fértiles terrenos os aportan abundantes materias primas.', 2,
    38, 1, 1, 1,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(24, 'Hasbro Gaming Clasico Cluedo (Versión Española)', 'CLUEDO, El gran juego de detectives', 2,
    24, 1, 2, 2,'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(25, 'Hasbro Gaming Trivial Pursuit (Versión Española)', 'Esta edición de Trivial Pursuit recuerda la versión original de los años 80. Los jugadores tendrán que moverse por el tablero e intentar responder correctamente a preguntas de 6 categorías diferentes.', 2,
    32, 1, 2, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(26, 'Monopoly - Clásico', 'Para sentirse un sucio liberal', 2,
    26, 1, 2, 2, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(27, 'Jenga!', 2,'El clásico juego de bloques de madera', 2,
    17, 1, 2, 1, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(28, 'Parchis!', 'El clásico juego de viejas y para romper amistades', 2,
    17, 1, 2, 30, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(29, 'Mattel Games - Pictionary', 'Risas y diversión para toda la familia', 2,
    28, 1, 2, 5, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),
(30, 'Moncolis Dados Poliedricos 6 x 7 (42 Piezas)', 'Perfecto para D&D', 3,
    15, 1, 2, 20, 'una imagen', '2022-02-02 13:40:03', '2022-02-02 13:56:03'),

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Books', 'Aqui entran libros, manuales, aventuras e historias', '2022-01-12 09:49:52', '2022-01-12 09:49:52'),
(2, 'Games', 'Entran todos los juegos de mesa', '2022-01-12 09:49:52', '2022-01-12 09:49:52'),
(3, 'Complements', 'Aqui entra todo tipo de complemento, desde dados hasta cartas extra', '2022-01-12 09:49:52', '2022-01-12 09:49:52'),

/* INSERT INTO `images` (`id`, `name`,`product_id`, `path`) VALUES
(1, 'Nombre o Id?', 'la relleno ahora o luego?'),
 */
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
