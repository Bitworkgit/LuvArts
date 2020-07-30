-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2020 às 21:39
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
(1, 'Animes', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(2, 'Mangá', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(3, 'Blueprints', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(4, 'Livros', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(5, 'Carros', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(6, 'Desenhos animados', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(7, 'Celebridades', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(8, 'Urbanas', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(9, 'Histórias em quadrinhos', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(10, 'Arte contemporânea', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(11, 'Fantasia', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(12, 'Moda', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(13, 'Floral', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(14, 'Comida e Cozinha', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(15, 'Engraçado', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(16, 'Jogos', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(17, 'Inspirador', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(18, 'Japonês', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(19, 'Ásia', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(20, 'Infantil', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(21, 'Paisagens', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(22, 'Espaço masculino', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(23, 'Mapas', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(24, 'Militares', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(25, 'Minimalista', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(26, 'Filmes', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(27, 'Música', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(28, 'Natureza', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(29, 'Pinturas', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(30, 'Aviões', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(31, 'Arte pop', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(32, 'Retro', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(33, 'Espaço', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(34, 'Esporte', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(35, 'Text Art', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(36, 'Viagem', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(37, 'Programas de TV', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(38, 'Estados Unidos', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(39, 'Cartazes vintage', '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(40, 'Brasil', '2020-07-18 22:38:56', '2020-07-18 22:38:56');

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
(1, 'Coleção Demonstrativa', 1, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(2, 'Coleção Demonstrativa', 2, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(3, 'Coleção Demonstrativa', 3, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(4, 'Coleção Demonstrativa', 4, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(5, 'Coleção Demonstrativa', 5, '2020-07-18 22:38:56', '2020-07-18 22:38:56');

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
(1, 2000, 2233.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(2, 2001, 5406.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(3, 2002, 6816.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(4, 2003, 10179.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(5, 2004, 12204.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(6, 2005, 15445.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(7, 2006, 16585.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(8, 2007, 19701.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(9, 2008, 21991.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(10, 2009, 24923.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(11, 2010, 28031.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(12, 2011, 30015.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(13, 2012, 33101.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(14, 2013, 36982.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(15, 2014, 40330.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(16, 2015, 42248.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(17, 2016, 44897.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(18, 2017, 47031.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(19, 2018, 48074.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(20, 2019, 50373.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(21, 2020, 53519.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(22, 2021, 55725.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(23, 2022, 58275.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(24, 2023, 59330.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(25, 2024, 61180.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(26, 2025, 62339.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(27, 2026, 64461.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(28, 2027, 66794.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(29, 2028, 69703.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(30, 2030, 22000.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56');

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
(1, 'Produto de amostra', '......', '65.00', 'public/storage/images/ph1.png', 3, 3, 2, 61, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(2, 'Produto de amostra', '......', '86.00', 'public/storage/images/ph2.png', 4, 4, 21, 84, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(3, 'Produto de amostra', '......', '80.00', 'public/storage/images/ph3.png', 4, 4, 13, 97, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(4, 'Produto de amostra', '......', '75.00', 'public/storage/images/ph4.png', 1, 1, 6, 8, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(5, 'Produto de amostra', '......', '68.00', 'public/storage/images/ph5.png', 4, 4, 16, 88, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(6, 'Produto de amostra', '......', '79.00', 'public/storage/images/ph6.png', 1, 1, 10, 56, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(7, 'Produto de amostra', '......', '67.00', 'public/storage/images/ph7.png', 5, 5, 8, 91, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(8, 'Produto de amostra', '......', '87.00', 'public/storage/images/ph8.png', 3, 3, 38, 70, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(9, 'Produto de amostra', '......', '54.00', 'public/storage/images/ph9.png', 4, 4, 14, 7, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(10, 'Produto de amostra', '......', '91.00', 'public/storage/images/ph10.png', 1, 1, 9, 100, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(11, 'Produto de amostra', '......', '70.00', 'public/storage/images/ph11.png', 5, 5, 19, 94, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(12, 'Produto de amostra', '......', '31.00', 'public/storage/images/ph12.png', 2, 2, 20, 23, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(13, 'Produto de amostra', '......', '100.00', 'public/storage/images/ph13.png', 3, 3, 14, 84, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(14, 'Produto de amostra', '......', '53.00', 'public/storage/images/ph16.png', 2, 2, 35, 5, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(15, 'Produto de amostra', '......', '21.00', 'public/storage/images/ph18.png', 2, 2, 38, 31, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(16, 'Produto de amostra', '......', '59.00', 'public/storage/images/ph20.png', 1, 1, 27, 74, 0, '2020-07-18 22:38:56', '2020-07-18 22:38:56');

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
(1, 2000, 2240.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(2, 2001, 6163.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(3, 2002, 7240.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(4, 2003, 9843.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(5, 2004, 13389.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(6, 2005, 16307.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(7, 2006, 17995.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(8, 2007, 20442.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(9, 2008, 24023.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(10, 2009, 26600.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(11, 2010, 28312.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(12, 2011, 30021.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(13, 2012, 33591.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(14, 2013, 36195.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(15, 2014, 38669.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(16, 2015, 40224.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(17, 2016, 42265.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(18, 2017, 45969.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(19, 2018, 48665.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(20, 2019, 50132.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(21, 2020, 51523.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(22, 2021, 52692.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(23, 2022, 56300.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(24, 2023, 60044.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(25, 2024, 63029.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(26, 2025, 65123.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(27, 2026, 68894.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(28, 2027, 72566.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(29, 2028, 74929.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(30, 2029, 78168.00, '2020-07-18 22:38:56', '2020-07-18 22:38:56');

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
(1, NULL, '.......', 'Alex Figueiro', 2000.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'user@gmail.com', '$2y$10$WtK0cnkshmLe7/LKaqADn.qzT/HL5.rjtZj1kNWB/cRegnP14As5.', NULL, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(2, NULL, '.......', 'Thiago Piassi Bonfogo', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'thiagopiassi@gmail.com', '$2y$10$G6leNZfY7BvJEKELjsr5cuYJpdCZNnUxD/nqEcb0aN59czQ8MAJaW', NULL, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(3, NULL, '.......', 'Mateus Meira', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'mateusmeira@gmail.com', '$2y$10$Day8iUhkbEULOQaUyfe6ru2HoUqSn7gBtfjPn.Hu87OJT8IH.LKiu', NULL, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(4, NULL, '.......', 'Bruno Cesar', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'brunocesar@gmail.com', '$2y$10$H4kIxFMBaCIdFlBYMIN2YeUaqaM2XdhW7VnAh1AuNQY0cUPHFX8j.', NULL, '2020-07-18 22:38:56', '2020-07-18 22:38:56'),
(5, NULL, '.......', 'Higor Freitas', 0.00, 'public/images/empty-avatar.png', 'public/images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'pudim@gmail.com', '$2y$10$dnnvIBrygWwzLb8RGCaX.OMimP8Li6yjFDk9mFw0hAqb4o7MevhFS', NULL, '2020-07-18 22:38:56', '2020-07-18 22:38:56');

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
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
