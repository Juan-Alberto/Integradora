-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2020 a las 20:26:50
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `easycrane`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarUsuario` (IN `usu` VARCHAR(80))  begin
select*from usuario where usuario=usu;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `G_registrarCliente` (IN `usuari` VARCHAR(30), `contrasen` VARCHAR(150), `corre` VARCHAR(90), `telefon` BIGINT(10), `nombr` VARCHAR(80), `appa` VARCHAR(50), `apma` VARCHAR(50), `inee` VARCHAR(150), `licc` VARCHAR(150))  begin
declare i int;
insert into usuario values(null,usuari,contrasen,corre,telefon,1);
set i=(select max(id_usuario) from usuario);
insert into cliente values(null,i,nombr,appa,apma,inee,licc);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarEmpresa` (IN `usu` VARCHAR(30), `pass` VARCHAR(150), `mail` VARCHAR(90), `phone` BIGINT(10), `nom` VARCHAR(80), `street` VARCHAR(150), `noexte` INT(10), `colo` VARCHAR(80), `munici` VARCHAR(60), `codipos` INT(10))  begin
declare a int;
insert into usuario values(null,usu,pass,mail,phone,2);
set a = (select max(id_usuario)from usuario);
insert into empresa values(null,a,nom,street,noexte,colo,munici,codipos);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` bigint(10) NOT NULL,
  `id_usuario` bigint(10) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `appat` varchar(50) DEFAULT NULL,
  `appmat` varchar(50) DEFAULT NULL,
  `ine` varchar(150) DEFAULT NULL,
  `licencia` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_usuario`, `nombre`, `appat`, `appmat`, `ine`, `licencia`) VALUES
(1, 2, 'alberto', 'osorio', 'osorio', '1_OG_JuanAlbertoOsorioOsorio.pdf', '1_OG_JuanAlbertoOsorioOsorio.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` bigint(10) NOT NULL,
  `id_usuario` bigint(10) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `calle` varchar(150) DEFAULT NULL,
  `noext` int(10) DEFAULT NULL,
  `colonia` varchar(80) DEFAULT NULL,
  `municipio` varchar(60) DEFAULT NULL,
  `codpos` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `id_usuario`, `nombre`, `calle`, `noext`, `colonia`, `municipio`, `codpos`) VALUES
(1, 1, 'asda', 'asd', 3, 'asda', 'asd', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id_sesion` bigint(10) NOT NULL,
  `id_usuario` bigint(10) DEFAULT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `typeUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(10) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `typeUser` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contrasena`, `correo`, `telefono`, `typeUser`) VALUES
(1, 'pablo', 'asdas', 'asda', 2, 2),
(2, 'alberto', '26176bcdd3e8c5a3fe6d2e222656a6bbd6065985840760956c9b93edd590b309', 'juan.alberto081099@gmail.com', 5555555555, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id_sesion`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `contrasena` (`contrasena`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `contrasena` (`contrasena`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id_sesion` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `sesion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
