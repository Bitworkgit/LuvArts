-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2020 às 20:46
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
(1, 'Animes', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(2, 'Mangá', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(3, 'Blueprints', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(4, 'Livros', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(5, 'Carros', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(6, 'Desenhos animados', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(7, 'Celebridades', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(8, 'Urbanas', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(9, 'Histórias em quadrinhos', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(10, 'Arte contemporânea', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(11, 'Fantasia', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(12, 'Moda', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(13, 'Floral', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(14, 'Comida e Cozinha', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(15, 'Engraçado', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(16, 'Jogos', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(17, 'Inspirador', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(18, 'Japonês', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(19, 'Ásia', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(20, 'Infantil', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(21, 'Paisagens', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(22, 'Espaço masculino', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(23, 'Mapas', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(24, 'Militares', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(25, 'Minimalista', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(26, 'Filmes', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(27, 'Música', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(28, 'Natureza', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(29, 'Pinturas', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(30, 'Aviões', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(31, 'Arte pop', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(32, 'Retro', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(33, 'Espaço', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(34, 'Esporte', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(35, 'Text Art', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(36, 'Viagem', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(37, 'Programas de TV', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(38, 'Estados Unidos', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(39, 'Cartazes vintage', '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(40, 'Brasil', '2020-07-18 21:46:12', '2020-07-18 21:46:12');

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
(1, 'Coleção Demonstrativa', 1, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(2, 'Coleção Demonstrativa', 2, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(3, 'Coleção Demonstrativa', 3, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(4, 'Coleção Demonstrativa', 4, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(5, 'Coleção Demonstrativa', 5, '2020-07-18 21:46:12', '2020-07-18 21:46:12');

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
(1, 2000, 2128.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(2, 2001, 4694.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(3, 2002, 7653.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(4, 2003, 11382.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(5, 2004, 14575.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(6, 2005, 16868.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(7, 2006, 20658.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(8, 2007, 21974.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(9, 2008, 25359.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(10, 2009, 28055.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(11, 2010, 32034.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(12, 2011, 35649.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(13, 2012, 37895.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(14, 2013, 39180.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(15, 2014, 41732.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(16, 2015, 44504.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(17, 2016, 47500.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(18, 2017, 51037.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(19, 2018, 52271.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(20, 2019, 54147.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(21, 2020, 58066.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(22, 2021, 61130.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(23, 2022, 64821.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(24, 2023, 66121.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(25, 2024, 68073.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(26, 2025, 69090.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(27, 2026, 73024.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(28, 2027, 76537.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(29, 2028, 77919.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(30, 2030, 22000.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12');

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
(1, 2000, 2156.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(2, 2001, 5781.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(3, 2002, 6970.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(4, 2003, 8319.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(5, 2004, 9811.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(6, 2005, 11527.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(7, 2006, 12975.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(8, 2007, 14668.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(9, 2008, 15989.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(10, 2009, 18723.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(11, 2010, 22496.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(12, 2011, 24886.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(13, 2012, 27688.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(14, 2013, 30016.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(15, 2014, 31101.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(16, 2015, 34229.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(17, 2016, 37857.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(18, 2017, 39480.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(19, 2018, 41353.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(20, 2019, 43021.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(21, 2020, 45459.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(22, 2021, 49083.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(23, 2022, 52309.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(24, 2023, 56131.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(25, 2024, 59489.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(26, 2025, 60934.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(27, 2026, 64567.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(28, 2027, 68044.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(29, 2028, 71120.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(30, 2029, 72628.00, '2020-07-18 21:46:12', '2020-07-18 21:46:12');

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
(1, NULL, '.......', 'Alex Figueiro', 2000.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'user@gmail.com', '$2y$10$w2BoozCesqmHgu7i36KT9eH2Lg01uv9UCDX7kaNiqHgD42h8e9gmO', NULL, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(2, NULL, '.......', 'Thiago Piassi Bonfogo', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'thiagopiassi@gmail.com', '$2y$10$QJ9UVXWUnb3BDoH5xwu9ve9mFsgPoQo/HW8lJCa0n61uRq/9VWHF.', NULL, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(3, NULL, '.......', 'Mateus Meira', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'mateusmeira@gmail.com', '$2y$10$/3rEXsW0zqkk0Hy/NoW8i.zXpI9BLX7/ufXvqqX1mdRy20LIF.2MW', NULL, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(4, NULL, '.......', 'Bruno Cesar', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'brunocesar@gmail.com', '$2y$10$w8Etg6jk0UhnN3SdnIMTSeGMv4sCC5uaPssQVuQM701LXLG5MSTTa', NULL, '2020-07-18 21:46:12', '2020-07-18 21:46:12'),
(5, NULL, '.......', 'Higor Freitas', 0.00, 'images/empty-avatar.png', 'images/empty-background.jpg', 1, '2000-01-01 00:00:00', NULL, '.......', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 'pudim@gmail.com', '$2y$10$Zko/AMJbA4KggyFXdiOWtu3QzJ18nNhrNKpOWLe2iKjrtQ9aqM0p.', NULL, '2020-07-18 21:46:12', '2020-07-18 21:46:12');

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
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

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
