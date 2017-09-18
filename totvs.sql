
CREATE DATABASE totvs;

CREATE TABLE `totvs`.`videos` (
  `video_id` int(11) NOT NULL,
  `campo_formulario` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `totvs`.`videos` (`video_id`, `campo_formulario`, `link`) VALUES
(1, 'interface_usuario', 'https://www.youtube.com/embed/f07H8m6V4UQ'),
(2, 'numero_maximo_pedidos_espera', 'https://www.youtube.com/embed/m5Jmh9JKnyQ');

ALTER TABLE `totvs`.`videos`
  ADD PRIMARY KEY (`video_id`);

