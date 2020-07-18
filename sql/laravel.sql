-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2020 às 20:56
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinhos`
--

CREATE TABLE `carrinhos` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `comprador_id` tinyint(3) UNSIGNED NOT NULL,
  `produto_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nome_categoria` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Animes', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(2, 'Mangá', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(3, 'Blueprints', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(4, 'Livros', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(5, 'Carros', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(6, 'Desenhos animados', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(7, 'Celebridades', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(8, 'Urbanas', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(9, 'Histórias em quadrinhos', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(10, 'Arte contemporânea', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(11, 'Fantasia', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(12, 'Moda', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(13, 'Floral', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(14, 'Comida e Cozinha', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(15, 'Engraçado', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(16, 'Jogos', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(17, 'Inspirador', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(18, 'Japonês', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(19, 'Ásia', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(20, 'Infantil', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(21, 'Paisagens', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(22, 'Espaço masculino', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(23, 'Mapas', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(24, 'Militares', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(25, 'Minimalista', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(26, 'Filmes', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(27, 'Música', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(28, 'Natureza', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(29, 'Pinturas', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(30, 'Aviões', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(31, 'Arte pop', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(32, 'Retro', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(33, 'Espaço', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(34, 'Esporte', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(35, 'Text Art', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(36, 'Viagem', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(37, 'Programas de TV', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(38, 'Estados Unidos', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(39, 'Cartazes vintage', '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(40, 'Brasil', '2020-07-18 21:56:28', '2020-07-18 21:56:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colecoes`
--

CREATE TABLE `colecoes` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nome_colecao_col` varchar(100) NOT NULL,
  `usuario_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `colecoes`
--

INSERT INTO `colecoes` (`id`, `nome_colecao_col`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Coleção Demonstrativa', 1, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(2, 'Coleção Demonstrativa', 2, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(3, 'Coleção Demonstrativa', 3, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(4, 'Coleção Demonstrativa', 4, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(5, 'Coleção Demonstrativa', 5, '2020-07-18 21:56:28', '2020-07-18 21:56:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacoes`
--

CREATE TABLE `doacoes` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `ano` int(11) NOT NULL,
  `capital` double(7,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `doacoes`
--

INSERT INTO `doacoes` (`id`, `ano`, `capital`, `created_at`, `updated_at`) VALUES
(1, 2000, 2094.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(2, 2001, 3230.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(3, 2002, 4694.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(4, 2003, 7160.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(5, 2004, 10823.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(6, 2005, 12088.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(7, 2006, 14811.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(8, 2007, 16251.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(9, 2008, 18722.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(10, 2009, 21713.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(11, 2010, 25443.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(12, 2011, 28359.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(13, 2012, 29450.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(14, 2013, 33304.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(15, 2014, 37050.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(16, 2015, 39864.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(17, 2016, 41861.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(18, 2017, 43430.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(19, 2018, 45522.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(20, 2019, 49244.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(21, 2020, 53212.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(22, 2021, 56692.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(23, 2022, 60127.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(24, 2023, 62625.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(25, 2024, 66134.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(26, 2025, 67664.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(27, 2026, 71641.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(28, 2027, 72759.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(29, 2028, 74887.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(30, 2030, 22000.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_01_171706_create_categorias_table', 1),
(5, '2020_03_01_021805_create_colecaos_table', 1),
(6, '2020_03_31_165713_create_produtos_table', 1),
(7, '2020_05_03_030741_create_saldo_equipes_table', 1),
(8, '2020_05_07_021707_create_doacoes_table', 1),
(9, '2020_05_07_031618_create_vendas_table', 1),
(10, '2020_05_09_064445_create_carrinhos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nome_pro` varchar(100) NOT NULL,
  `descricao_pro` varchar(250) NOT NULL,
  `preco_pro` decimal(8,2) NOT NULL,
  `ende_foto_pro` varchar(80) NOT NULL,
  `usuario_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `cod_colecoes` tinyint(3) UNSIGNED DEFAULT NULL,
  `cod_categoria` tinyint(3) UNSIGNED DEFAULT NULL,
  `vendas` int(11) NOT NULL DEFAULT 0,
  `excluido` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_pro`, `descricao_pro`, `preco_pro`, `ende_foto_pro`, `usuario_id`, `cod_colecoes`, `cod_categoria`, `vendas`, `excluido`, `created_at`, `updated_at`) VALUES
(1, 'Produto de amostra', '......', '72.00', 'public/images/ph1.png', 3, 3, 35, 41, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(2, 'Produto de amostra', '......', '15.00', 'public/images/ph2.png', 3, 3, 22, 37, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(3, 'Produto de amostra', '......', '37.00', 'public/images/ph3.png', 5, 5, 39, 15, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(4, 'Produto de amostra', '......', '22.00', 'public/images/ph4.png', 5, 5, 20, 56, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(5, 'Produto de amostra', '......', '33.00', 'public/images/ph5.png', 3, 3, 39, 93, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(6, 'Produto de amostra', '......', '88.00', 'public/images/ph6.png', 3, 3, 23, 36, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(7, 'Produto de amostra', '......', '86.00', 'public/images/ph7.png', 3, 3, 33, 100, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(8, 'Produto de amostra', '......', '96.00', 'public/images/ph8.png', 5, 5, 18, 74, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(9, 'Produto de amostra', '......', '57.00', 'public/images/ph9.png', 4, 4, 28, 16, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(10, 'Produto de amostra', '......', '58.00', 'public/images/ph10.png', 4, 4, 30, 94, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(11, 'Produto de amostra', '......', '57.00', 'public/images/ph11.png', 4, 4, 40, 96, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(12, 'Produto de amostra', '......', '62.00', 'public/images/ph12.png', 5, 5, 3, 13, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(13, 'Produto de amostra', '......', '70.00', 'public/images/ph13.png', 1, 1, 35, 89, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(14, 'Produto de amostra', '......', '29.00', 'public/images/ph14.png', 5, 5, 9, 93, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(15, 'Produto de amostra', '......', '33.00', 'public/images/ph15.png', 2, 2, 15, 90, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(16, 'Produto de amostra', '......', '19.00', 'public/images/ph16.png', 3, 3, 2, 89, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(17, 'Produto de amostra', '......', '31.00', 'public/images/ph17.png', 4, 4, 33, 76, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(18, 'Produto de amostra', '......', '60.00', 'public/images/ph18.png', 4, 4, 11, 25, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(19, 'Produto de amostra', '......', '32.00', 'public/images/ph19.png', 1, 1, 7, 65, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(20, 'Produto de amostra', '......', '16.00', 'public/images/ph20.png', 3, 3, 20, 54, 0, '2020-07-18 21:56:28', '2020-07-18 21:56:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saldo_equipes`
--

CREATE TABLE `saldo_equipes` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `ano` int(11) NOT NULL,
  `capital` double(7,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `saldo_equipes`
--

INSERT INTO `saldo_equipes` (`id`, `ano`, `capital`, `created_at`, `updated_at`) VALUES
(1, 2000, 2001.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(2, 2001, 3194.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(3, 2002, 6465.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(4, 2003, 8663.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(5, 2004, 11864.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(6, 2005, 14977.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(7, 2006, 15994.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(8, 2007, 18957.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(9, 2008, 20598.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(10, 2009, 24042.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(11, 2010, 28034.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(12, 2011, 30611.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(13, 2012, 31669.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(14, 2013, 32907.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(15, 2014, 34065.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(16, 2015, 37388.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(17, 2016, 38477.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(18, 2017, 41279.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(19, 2018, 44069.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(20, 2019, 46848.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(21, 2020, 50364.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(22, 2021, 53861.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(23, 2022, 56025.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(24, 2023, 58114.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(25, 2024, 60834.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(26, 2025, 63513.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(27, 2026, 66092.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(28, 2027, 67233.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(29, 2028, 70882.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(30, 2029, 73856.00, '2020-07-18 21:56:28', '2020-07-18 21:56:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biografia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '.......',
  `nome` varchar(146) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` double(7,2) DEFAULT 0.00,
  `foto_perfil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'public/images/empty-avatar.png',
  `foto_capa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'public/images/empty-background.jpg',
  `sexo` int(11) NOT NULL,
  `data_de_nascimento` datetime NOT NULL,
  `endereco` int(11) DEFAULT NULL,
  `site` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT '.......',
  `estado` varchar(19) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rua` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excluido` int(11) NOT NULL,
  `administrador` int(11) NOT NULL,
  `bloqueado` int(11) NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cpf`, `biografia`, `nome`, `capital`, `foto_perfil`, `foto_capa`, `sexo`, `data_de_nascimento`, `endereco`, `site`, `estado`, `cidade`, `rua`, `cep`, `complemento`, `bairro`, `celular`, `excluido`, `administrador`, `bloqueado`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '.......', 'Alex Figueiro', 2000.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'user@gmail.com', '$2y$10$zQtIE2mqrvQ/YVEhS6cPyeBGA43Dn9EW0ZIrxdIpyEnGWNadGWAtu', NULL, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(2, NULL, '.......', 'Thiago Piassi Bonfogo', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'thiagopiassi@gmail.com', '$2y$10$vUamUYtuF6IahNAdwmpMRunt9MoauGw4gv2Mbb5wI4FDHveKiq49e', NULL, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(3, NULL, '.......', 'Mateus Meira', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'mateusmeira@gmail.com', '$2y$10$A1ecGFi5IHrf2erf.B6m4eRBuOEFTI./2dcUde0mwGvTCWH/U2AQq', NULL, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(4, NULL, '.......', 'Bruno Cesar', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'brunocesar@gmail.com', '$2y$10$xACYz4vgUaUylI5FxJ3Vb.mWNidGsbEGMnYKWq4yF/KR9PUnPeV/W', NULL, '2020-07-18 21:56:28', '2020-07-18 21:56:28'),
(5, NULL, '.......', 'Higor Freitas', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'pudim@gmail.com', '$2y$10$0upmGNIwCd4DenRKCJlsIerTp/60W2cOQQN0SlrkaHfkyPkBJqpSu', NULL, '2020-07-18 21:56:28', '2020-07-18 21:56:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `vendedor_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `comprador_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `produto_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrinhos_comprador_id_foreign` (`comprador_id`),
  ADD KEY `carrinhos_produto_id_foreign` (`produto_id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colecoes`
--
ALTER TABLE `colecoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colecoes_usuario_id_foreign` (`usuario_id`);

--
-- Índices para tabela `doacoes`
--
ALTER TABLE `doacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(250));

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_usuario_id_foreign` (`usuario_id`),
  ADD KEY `produtos_cod_categoria_foreign` (`cod_categoria`),
  ADD KEY `produtos_cod_colecoes_foreign` (`cod_colecoes`);

--
-- Índices para tabela `saldo_equipes`
--
ALTER TABLE `saldo_equipes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`) USING HASH;

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendas_vendedor_id_foreign` (`vendedor_id`),
  ADD KEY `vendas_comprador_id_foreign` (`comprador_id`),
  ADD KEY `vendas_produto_id_foreign` (`produto_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `colecoes`
--
ALTER TABLE `colecoes`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `doacoes`
--
ALTER TABLE `doacoes`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `saldo_equipes`
--
ALTER TABLE `saldo_equipes`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
