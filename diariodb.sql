-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 15:06:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diariodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `copete` text NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `id_usuario`, `titulo`, `copete`, `cuerpo`, `imagen`, `fecha`, `categoria`, `autor`) VALUES
(18, 1, 'Diputados aprobó por unanimidad la Ley Olimpia contra los delitos que violen la intimidad sexual', 'La Cámara de Diputados convirtió en ley el proyecto que incorpora la violencia digital a la Ley 26.485 sobre Protección Integral a las Mujeres, conocido como Ley Olimpia, y que aborda los delitos que violen la intimidad sexual de las personas a través de medios digitales y la difusión sin consentimiento de cualquier contenido íntimo.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">La Cámara de Diputados convirtió en ley el proyecto que incorpora la violencia digital a la <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5;\">Ley 26.485 sobre Protección Integral a las Mujeres, conocido como Ley Olimpia,</span> y que aborda los delitos que violen la intimidad sexual de las personas a través de medios digitales y la difusión sin consentimiento de cualquier contenido íntimo.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">El plenario legislativo aprobó por unanimidad -con 230 votos afirmativos- esta iniciativa que fueron aportados por el Frente de Todos, Juntos por el Cambio, el Interbloque Federal, Provincias Unidas y la izquierda, en una sesión maratónica que comenzó ayer al mediodía.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\"><span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5;\">El proyecto presentado originalmente por la diputada Mónica Macha (FdT) fue impulsado por la propia activista y sobreviviente de violencia digital mexicana Olimpia Coral Melo, que estuvo la semana pasada en Argentina y participó de la sesión en el Senado que dio su aprobación</span>, junto a sobrevivientes argentinas de violencia en entornos digitales.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">Macha afirmó que el proyecto de ley “es producto de la definición de distintas organizaciones como Gentic (Organización Género y TIC) y como el grupo de Ley Olimpia en Argentina” y destacó que “muchas de ellas son víctimas y sobrevivientes de la violencia digital y me parece que también es bueno cómo desde el feminismo y el transfeminismo nos organizamos para poner en esta agenda política temas que, tal vez, hasta ahora estaban acallados”.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">La legisladora señaló que la definición de violencia digital “es aquella que se ejerce mediante el uso de las tecnologías de la información y la comunicación y que implique la obtención, reproducción y difusión por cualquier medio de datos personales, material digital real, simulado, íntimo o de desnudez de las mujeres sin su consentimiento, discursos de odio de género, patrones estereotipados sexistas o que impliquen situaciones de acoso, amenaza, extorsión o control virtual, o acciones que atenten contra la integridad sexual o identidad digital de las mujeres a través de las TIC”.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">Asimismo, Macha resaltó que la Ley Olimpia “se complementa” con la Ley Belén.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\"><span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5;\">“La Ley Olimpia apunta a todas las instancias de prevención, de asistencia y acompañamiento a las víctimas y sobrevivientes de la violencia digital, mientras que, la Ley Belén lo que busca es la incorporación de la violencia digital como delito en el Código Penal</span>, de modo que se pueda sancionar a aquellas personas que difunden material íntimo sin consentimiento, aquellos que suben el material y aquellos que lo difunden”, explicó.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">Por su parte, la diputada de la UCR, Karina Banfi, celebró “el avance en el recorrido de este proyecto y esperamos también su pronta reglamentación” a la vez que destacó que “nos encontramos en un estado de necesidad con respecto a la violencia que se ejerce sobre las mujeres en el espacio digital”.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">La iniciativa, que lleva el nombre de la activista y sobreviviente de violencia digital mexicana Olimpia Coral Melo, ya fue aprobado por ambas Cámaras del Congreso, pero volvió a Diputados por una cuestión técnica.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">En México,<span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5;\"> Olimpia logró que 32 estados de su país tengan ley, propuestas similares se debaten en Ecuador, Guatemala, Honduras, Bolivia y Estados Unidos.</span></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">A partir de las modificaciones introducidas por la Cámara baja, el proyecto de ley plantea que se entiende por violencia contra las mujeres “toda conducta, acción u omisión, que, de manera directa o indirecta, tanto en el ámbito público como en el privado, en el plano analógico o virtual, basada en una relación desigual de poder, afecte su vida, libertad, dignidad, integridad física, psicológica, sexual, económica o patrimonial, participación política, como así también su seguridad personal”.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">Además, promueve los derechos y bienes digitales de las mujeres, así como su desenvolvimiento y permanencia en el espacio digital; y garantiza que se respete su dignidad, reputación e identidad, incluso en los espacios digitales.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">Asimismo, la iniciativa establece la implementación de “un servicio multisoporte, telefónico y digital gratuito y accesible, en forma articulada con las provincias, a través de organismos gubernamentales pertinentes, destinado a dar contención, información y asesoramiento sobre recursos en materia de prevención de la violencia contra las mujeres y asistencia a quienes la padecen, incluida la modalidad de violencia contra las mujeres en el espacio público” conocida como “acoso callejero”.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">A su vez, plantea la obligación de promover programas de alfabetización digital, buenas prácticas en el uso de las tecnologías de la información y la comunicación y de identificación de las violencias digitales en las clases de educación sexual integral como en el resto de los contenidos educativo y en la formación docente.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 32px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: var(--body-font); vertical-align: baseline; line-height: 27px; color: var(--detail-text);\">La iniciativa fue impulsada, originalmente, por organizaciones de la sociedad civil nucleadas en un colectivo denominado “Campaña contra la Violencia Digital” que vienen reclamando la ley a través de distintas acciones, que incluyeron una campaña online de recolección de firmas, con 35.000 adhesiones a través de la plataforma digital Change.org.</p>', '1697039691-imagen_noticia.jpg', '2023-10-08', 'Sociales', 'Alguien'),
(19, 1, 'Un titulo', 'Un copete', '<p>El cuerpo <b>para mostrar</b></p>', '1696872876-Black Line Tattoo (1).png', '2023-10-08', 'Moda', ''),
(20, 1, 'Titulo 2', 'Otro copete', '<p>Mas <b>cuerpo </b>para mostrar</p>', '1696772468-Black Line Tattoo (2).png', '2023-10-08', 'Deportes', ''),
(21, 1, 'Titulo noticia', 'Copete', '<p><b>un cuerpo </b>de noticias</p>', '1696774888-Black Line Tattoo (3).png', '2023-10-08', 'Moda', ''),
(22, 11, 'otra noticia', 'Un copete', '<p>momomomoomoomom</p>', '1697293820-20220609_094217_mfnr.jpg', '2023-10-14', 'Moda', 'dante000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(1, 'Pablo', 'Lehmann', 'guillermo', 'guE1pk/6waGK2'),
(11, 'Pablo', 'Lehmann', 'Dante', 'DaxJjgEarck4s '),
(12, 'Gaby', 'Berdi', 'Babela', 'BaxC3DurpXpw. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
