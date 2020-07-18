-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2020 às 19:00
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `comprador_id` bigint(20) UNSIGNED NOT NULL,
  `produto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_categoria` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Animes', '2020-07-18 19:59:33', '2020-07-18 19:59:33'),
(2, 'Mangá', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(3, 'Blueprints', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(4, 'Livros', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(5, 'Carros', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(6, 'Desenhos animados', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(7, 'Celebridades', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(8, 'Urbanas', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(9, 'Histórias em quadrinhos', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(10, 'Arte contemporânea', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(11, 'Fantasia', '2020-07-18 19:59:34', '2020-07-18 19:59:34'),
(12, 'Moda', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(13, 'Floral', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(14, 'Comida e Cozinha', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(15, 'Engraçado', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(16, 'Jogos', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(17, 'Inspirador', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(18, 'Japonês', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(19, 'Ásia', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(20, 'Infantil', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(21, 'Paisagens', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(22, 'Espaço masculino', '2020-07-18 19:59:35', '2020-07-18 19:59:35'),
(23, 'Mapas', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(24, 'Militares', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(25, 'Minimalista', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(26, 'Filmes', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(27, 'Música', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(28, 'Natureza', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(29, 'Pinturas', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(30, 'Aviões', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(31, 'Arte pop', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(32, 'Retro', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(33, 'Espaço', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(34, 'Esporte', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(35, 'Text Art', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(36, 'Viagem', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(37, 'Programas de TV', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(38, 'Estados Unidos', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(39, 'Cartazes vintage', '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(40, 'Brasil', '2020-07-18 19:59:36', '2020-07-18 19:59:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colecoes`
--

CREATE TABLE `colecoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_colecao_col` varchar(100) NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `colecoes`
--

INSERT INTO `colecoes` (`id`, `nome_colecao_col`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Coleção Demonstrativa', 1, '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(2, 'Coleção Demonstrativa', 2, '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(3, 'Coleção Demonstrativa', 3, '2020-07-18 19:59:36', '2020-07-18 19:59:36'),
(4, 'Coleção Demonstrativa', 4, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(5, 'Coleção Demonstrativa', 5, '2020-07-18 19:59:37', '2020-07-18 19:59:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacoes`
--

CREATE TABLE `doacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ano` int(11) NOT NULL,
  `capital` double(7,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `doacoes`
--

INSERT INTO `doacoes` (`id`, `ano`, `capital`, `created_at`, `updated_at`) VALUES
(1, 2000, 3770.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(2, 2001, 7247.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(3, 2002, 9983.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(4, 2003, 13086.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(5, 2004, 15719.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(6, 2005, 17372.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(7, 2006, 21360.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(8, 2007, 24906.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(9, 2008, 27235.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(10, 2009, 28293.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(11, 2010, 31847.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(12, 2011, 33812.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(13, 2012, 36346.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(14, 2013, 37386.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(15, 2014, 41101.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(16, 2015, 44288.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(17, 2016, 47857.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(18, 2017, 50398.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(19, 2018, 52208.00, '2020-07-18 19:59:37', '2020-07-18 19:59:37'),
(20, 2019, 55407.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(21, 2020, 56714.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(22, 2021, 60585.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(23, 2022, 64296.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(24, 2023, 65609.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(25, 2024, 68819.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(26, 2025, 69820.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(27, 2026, 73409.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(28, 2027, 75096.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(29, 2028, 78148.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(30, 2030, 22000.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_pro` varchar(100) NOT NULL,
  `descricao_pro` varchar(250) NOT NULL,
  `preco_pro` decimal(8,2) NOT NULL,
  `ende_foto_pro` varchar(80) NOT NULL,
  `usuario_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cod_colecoes` int(10) UNSIGNED DEFAULT NULL,
  `cod_categoria` int(10) UNSIGNED DEFAULT NULL,
  `vendas` int(11) NOT NULL DEFAULT 0,
  `excluido` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saldo_equipes`
--

CREATE TABLE `saldo_equipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ano` int(11) NOT NULL,
  `capital` double(7,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `saldo_equipes`
--

INSERT INTO `saldo_equipes` (`id`, `ano`, `capital`, `created_at`, `updated_at`) VALUES
(1, 2000, 1068.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(2, 2001, 2384.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(3, 2002, 5439.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(4, 2003, 7050.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(5, 2004, 8824.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(6, 2005, 10902.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(7, 2006, 12314.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(8, 2007, 16281.00, '2020-07-18 19:59:38', '2020-07-18 19:59:38'),
(9, 2008, 19369.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(10, 2009, 21700.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(11, 2010, 23325.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(12, 2011, 27230.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(13, 2012, 28863.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(14, 2013, 32516.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(15, 2014, 35739.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(16, 2015, 38549.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(17, 2016, 39854.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(18, 2017, 40948.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(19, 2018, 43156.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(20, 2019, 44784.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(21, 2020, 46116.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(22, 2021, 47983.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(23, 2022, 50111.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(24, 2023, 54101.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(25, 2024, 55258.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(26, 2025, 59083.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(27, 2026, 61780.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(28, 2027, 65385.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(29, 2028, 66745.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39'),
(30, 2029, 68782.00, '2020-07-18 19:59:39', '2020-07-18 19:59:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biografia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '.......',
  `nome` varchar(146) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` double(7,2) DEFAULT 0.00,
  `foto_perfil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'images/empty-avatar.png',
  `foto_capa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'images/empty-background.jpg',
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cpf`, `biografia`, `nome`, `capital`, `foto_perfil`, `foto_capa`, `sexo`, `data_de_nascimento`, `endereco`, `site`, `estado`, `cidade`, `rua`, `cep`, `complemento`, `bairro`, `celular`, `excluido`, `administrador`, `bloqueado`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '.......', 'Alex Figueiro', 2000.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'user@gmail.com', '$2y$10$ST8uUpz/sbLbnjZw6IUef.9xM3wby/uh8AUOhODrxUSGjmSmj2Ija', NULL, '2020-07-18 19:59:33', '2020-07-18 19:59:33'),
(2, NULL, '.......', 'Thiago Piassi Bonfogo', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'thiagopiassi@gmail.com', '$2y$10$YUst4slPDAlKB6cq2GnhhedHzPeDOy3NQsKRy2KTwGLhZrvz2fBnm', NULL, '2020-07-18 19:59:33', '2020-07-18 19:59:33'),
(3, NULL, '.......', 'Mateus Meira', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'mateusmeira@gmail.com', '$2y$10$fNbyyQeaVQ3Wg8kPq1kVouN3/qZBCfC0tYBP6chFWo9gr.dG2IHmm', NULL, '2020-07-18 19:59:33', '2020-07-18 19:59:33'),
(4, NULL, '.......', 'Bruno Cesar', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'brunocesar@gmail.com', '$2y$10$ZEawy3nTVMhaYxNOsCnJpud703Z07plgesJKvzRxdafI80EkxcgB6', NULL, '2020-07-18 19:59:33', '2020-07-18 19:59:33'),
(5, NULL, '.......', 'Higor Freitas', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'pudim@gmail.com', '$2y$10$CQtuSGtqJgH2gZ8OhuCtwusMAjjI0tx.vfkrnEPP95o4DVuV3edr2', NULL, '2020-07-18 19:59:33', '2020-07-18 19:59:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendedor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comprador_id` bigint(20) UNSIGNED DEFAULT NULL,
  `produto_id` int(10) UNSIGNED DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `colecoes`
--
ALTER TABLE `colecoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `doacoes`
--
ALTER TABLE `doacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saldo_equipes`
--
ALTER TABLE `saldo_equipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD CONSTRAINT `carrinhos_comprador_id_foreign` FOREIGN KEY (`comprador_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carrinhos_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `colecoes`
--
ALTER TABLE `colecoes`
  ADD CONSTRAINT `colecoes_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_cod_categoria_foreign` FOREIGN KEY (`cod_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `produtos_cod_colecoes_foreign` FOREIGN KEY (`cod_colecoes`) REFERENCES `colecoes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `produtos_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_comprador_id_foreign` FOREIGN KEY (`comprador_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendas_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendas_vendedor_id_foreign` FOREIGN KEY (`vendedor_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
