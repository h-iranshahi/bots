-- MariaDB dump 10.19  Distrib 10.6.17-MariaDB, for linux-systemd (x86_64)
--
-- Host: 127.0.0.1    Database: developerz_botmanager
-- ------------------------------------------------------
-- Server version	10.6.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('dictionary_words','a:0:{}',2069694308),('hilara::sidebarMenu','a:2:{i:0;a:3:{s:2:\"id\";s:10:\"dictionary\";s:5:\"title\";s:26:\"EN|DICTIONARY|MODULE_TITLE\";s:5:\"items\";a:1:{i:0;a:3:{s:5:\"title\";s:19:\"EN|DICTIONARY|WORDS\";s:3:\"url\";s:49:\"https://bots.developerz.ir/admin/dictionary/words\";s:5:\"class\";s:8:\"icon-key\";}}}i:1;a:3:{s:2:\"id\";s:12:\"quick-access\";s:5:\"title\";s:12:\"Quick Access\";s:5:\"items\";a:1:{i:0;a:3:{s:5:\"title\";s:11:\"EN|SPY|BOTS\";s:3:\"url\";s:37:\"https://bots.developerz.ir/admin/bots\";s:5:\"class\";N;}}}}',2069694308),('master.itemData.1.1','a:10:{s:2:\"id\";i:1;s:5:\"title\";s:3:\"Spy\";s:4:\"name\";s:11:\"@JaasousBot\";s:5:\"token\";s:46:\"6014320296:AAHip2Ofk6XV1YKXoFVRiLj_7iQan7pdWsA\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";s:19:\"2024-12-12 05:58:42\";s:10:\"created_by\";i:1;s:10:\"created_at\";s:19:\"2024-12-10 13:08:00\";s:10:\"updated_at\";s:19:\"2024-12-10 13:08:00\";}',1734291601),('master.itemData.2.1','a:10:{s:2:\"id\";i:2;s:5:\"title\";s:7:\"HiGamee\";s:4:\"name\";s:11:\"@HiGameeBot\";s:5:\"token\";s:46:\"1133851028:AAGn7g7qpzTzdCCtFU-4KN8xBB4cLxFH4eU\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";s:19:\"2024-12-14 12:08:00\";s:10:\"updated_at\";s:19:\"2024-12-14 12:08:00\";}',1734291601),('master.itemData.3.1','a:10:{s:2:\"id\";i:3;s:5:\"title\";s:14:\"BazarSanjRobot\";s:4:\"name\";s:15:\"@BazarSanjRobot\";s:5:\"token\";s:46:\"1860910099:AAFgDLxRla9nci8BrCOqwxrAiqZ2IAUBYpU\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}',1734291601),('master.itemData.4.1','a:10:{s:2:\"id\";i:4;s:5:\"title\";s:14:\"Bazar Analyzer\";s:4:\"name\";s:17:\"@BazarAnalyzerBot\";s:5:\"token\";s:46:\"1638772636:AAHsQpKZuqVWNAlgND7SeKx8dEeoyAGTxx0\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}',1734291601),('master.itemData.5.1','a:10:{s:2:\"id\";i:5;s:5:\"title\";s:12:\"Trader Bours\";s:4:\"name\";s:15:\"@TraderBoursBot\";s:5:\"token\";s:46:\"1180101762:AAENb_U_ThEV5b0MZzxLzfyh5Gbtno4EtI8\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}',1734291601),('master.itemObject.1.1','O:22:\"App\\Models\\TelegramBot\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"telegram_bots\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:1;s:5:\"title\";s:3:\"Spy\";s:4:\"name\";s:11:\"@JaasousBot\";s:5:\"token\";s:46:\"6014320296:AAHip2Ofk6XV1YKXoFVRiLj_7iQan7pdWsA\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";s:19:\"2024-12-12 05:58:42\";s:10:\"created_by\";i:1;s:10:\"created_at\";s:19:\"2024-12-10 13:08:00\";s:10:\"updated_at\";s:19:\"2024-12-10 13:08:00\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:1;s:5:\"title\";s:3:\"Spy\";s:4:\"name\";s:11:\"@JaasousBot\";s:5:\"token\";s:46:\"6014320296:AAHip2Ofk6XV1YKXoFVRiLj_7iQan7pdWsA\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";s:19:\"2024-12-12 05:58:42\";s:10:\"created_by\";i:1;s:10:\"created_at\";s:19:\"2024-12-10 13:08:00\";s:10:\"updated_at\";s:19:\"2024-12-10 13:08:00\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}',1734291601),('master.itemObject.2.1','O:22:\"App\\Models\\TelegramBot\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"telegram_bots\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:2;s:5:\"title\";s:7:\"HiGamee\";s:4:\"name\";s:11:\"@HiGameeBot\";s:5:\"token\";s:46:\"1133851028:AAGn7g7qpzTzdCCtFU-4KN8xBB4cLxFH4eU\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";s:19:\"2024-12-14 12:08:00\";s:10:\"updated_at\";s:19:\"2024-12-14 12:08:00\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:2;s:5:\"title\";s:7:\"HiGamee\";s:4:\"name\";s:11:\"@HiGameeBot\";s:5:\"token\";s:46:\"1133851028:AAGn7g7qpzTzdCCtFU-4KN8xBB4cLxFH4eU\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";s:19:\"2024-12-14 12:08:00\";s:10:\"updated_at\";s:19:\"2024-12-14 12:08:00\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}',1734291601),('master.itemObject.3.1','O:22:\"App\\Models\\TelegramBot\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"telegram_bots\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:3;s:5:\"title\";s:14:\"BazarSanjRobot\";s:4:\"name\";s:15:\"@BazarSanjRobot\";s:5:\"token\";s:46:\"1860910099:AAFgDLxRla9nci8BrCOqwxrAiqZ2IAUBYpU\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:3;s:5:\"title\";s:14:\"BazarSanjRobot\";s:4:\"name\";s:15:\"@BazarSanjRobot\";s:5:\"token\";s:46:\"1860910099:AAFgDLxRla9nci8BrCOqwxrAiqZ2IAUBYpU\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}',1734291601),('master.itemObject.4.1','O:22:\"App\\Models\\TelegramBot\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"telegram_bots\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:4;s:5:\"title\";s:14:\"Bazar Analyzer\";s:4:\"name\";s:17:\"@BazarAnalyzerBot\";s:5:\"token\";s:46:\"1638772636:AAHsQpKZuqVWNAlgND7SeKx8dEeoyAGTxx0\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:4;s:5:\"title\";s:14:\"Bazar Analyzer\";s:4:\"name\";s:17:\"@BazarAnalyzerBot\";s:5:\"token\";s:46:\"1638772636:AAHsQpKZuqVWNAlgND7SeKx8dEeoyAGTxx0\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}',1734291601),('master.itemObject.5.1','O:22:\"App\\Models\\TelegramBot\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"telegram_bots\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:5;s:5:\"title\";s:12:\"Trader Bours\";s:4:\"name\";s:15:\"@TraderBoursBot\";s:5:\"token\";s:46:\"1180101762:AAENb_U_ThEV5b0MZzxLzfyh5Gbtno4EtI8\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:5;s:5:\"title\";s:12:\"Trader Bours\";s:4:\"name\";s:15:\"@TraderBoursBot\";s:5:\"token\";s:46:\"1180101762:AAENb_U_ThEV5b0MZzxLzfyh5Gbtno4EtI8\";s:4:\"note\";s:0:\"\";s:14:\"last_update_id\";N;s:12:\"webhooked_at\";N;s:10:\"created_by\";i:1;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}',1734291601),('spy.gameNumber','i:53;',2050673279);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dictionary_words`
--

DROP TABLE IF EXISTS `dictionary_words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dictionary_words` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `value` text NOT NULL,
  `lang` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dictionary_words_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dictionary_words`
--

LOCK TABLES `dictionary_words` WRITE;
/*!40000 ALTER TABLE `dictionary_words` DISABLE KEYS */;
/*!40000 ALTER TABLE `dictionary_words` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_09_10_074207_dictionary_create_words_table',1),(5,'2024_12_02_125609_create_personal_access_tokens_table',1),(6,'2024_12_07_184538_create_telegram_bots_table',1),(7,'2024_12_07_191012_create_telegram_chats_table',1),(8,'2024_12_07_191013_create_telegram_groups_table',1),(9,'2024_12_07_191014_create_telegram_users_table',1),(10,'2024_12_07_191605_create_telegram_messages_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('0zNBXrZl8uHlEzgdeQobKQE9LlF9lzd8HJ9iRinL',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoid0ZjV1ZIQzRJZFE1VmNjak1SSjlVUTZrQVlybWhaN3d6RXZ2R21qRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328608),('10IUzS6wmoBOyCapzPWD3JrMUScsB20rxzacEOTT',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoicVdXNmFwM1Y3RlY4ZHNra2phdVFaUUZvUUJsTlBNdFpzUU5OUDZTcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328492),('1iFuW5fdGAqeydsLiSAc7LpDA5a8LyoEU2eRWpIL',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRTN3UWdPZHBTdkFLSk9FY0NaZENYamY5VUg2ZnpHNHdHeEw2dkcyYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331098),('1nzDTjW56XIvuViGhntdj08WlJddlKgzL5JsKNMB',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidllkVjFiYUw0YWtFT0lCbnVOb3NINTlVWkZNTjVzVmtGQ2lWTURXSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328768),('1ZJMmTW2VADIPWYduJoeHtyv3dvF0nlNpoIqJNMm',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTmp5aHlxOXduVjNIcUJ4aXRQbXBoQ0NlcDRjeTE1ZXNKNmxESG5JZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331729),('2kZI9YZQN9x98Qo3r1V8jQ4OtV8ZEEymTbdWylhU',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiREFOd1owTkFETmFGNlNSdTRlNFhKT1lTU0h3T1B2dlhKRFhsc29INyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328084),('2odOT4NtYY624dTrB3EJMHTJNpbXRCV7m9xFxHE9',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTGZtWDFEQWpZbGh0YThYYUlndEhacWI4TWxaM210dWJaOGtvWnIzVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330842),('2sbhlq90KOE5wMD2DYpVW8ZUVateQ1PETPBWYH0w',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoicFNDejlmNEZrQzgzQ3hhbVF5S3N0N3RRb3lFWmgyOU5SZVk2TXVGYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328682),('2X54O9FJP6gT3DXihRV2HyZMvHr93w1Sdu41cwTg',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ2t6QmdLN2tPZlVSbFVkR2s3QjVtUFhuZkVISXNKbFRHbHpzdEkxbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328351),('37YfOWzUBz36Lx1nikOPHqijC5BAfmM2ag7jVEdN',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoia0psNE1sRDZVaTVkRGRnQThVUEpnaWREOVZLaEdCS0lRcUx1M2Y0bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333256),('3GCyBBMgScQQCwuIbyO6W3IGRhDKuDIbs5QPCxty',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSWVXU1BZUVhYdWFqRGdrZFo4dko0M3Z0ZHd4Wk54ZUYxcUNENm5rZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333823),('3LrpKUplzTTPS0SD0moqx2rmiInvJsdpFeo7NKk7',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibXpGSTRndEVqTDRnWDNzcTJTckFwNlE0Q2pCenVITzlQSGdrU09hSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327348),('4455iuFcfAfF3QdD7Qpuu7ZmCuNM23RW7Jrgvvgq',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTU9XYVlOTjRieGpFUnVKUU55S09MOW0zZkt6VThaT3E4YlhUbVFzOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332352),('46kMbzf45ORZrqCjmAQ5yEhG7oyqftslytjFM07M',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTmpUYjFPRW04M2dMczNkZFJCcnVGZkZZT040RkpTT2tDS0NpMU9RRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333707),('4AMZ29QJ7SYsMKGov78e4FTmJ9pYeKv48pP3h6YW',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiU1lUZnNaSmU2V3hVTW1pT29yNnJ5WGJwa3BYSHcxa014d1VXUVZFUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329882),('4dkFqgXhAYcGYLSjbpjnjZD4H1Hmf3zPl9723Qmp',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWUw2Q2dOZXhEd005NDIyQUZYOUxmaUlaVnBBV1VLcU9XSVFjOERPRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329619),('4EPBF6m8te909P28Kz8Eyl4bJfJ61TSWjw53S3BA',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoicWJ6RTJicDN4NnRiWEszYnplejhXUnZ2NWZNMmJwTXlveWZzSERFVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326833),('4ySk5IoYq06jF2uroktTNtsg0y9dD1ILLYFoAVhu',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiOENFaTV5NkM3aW1YU1Z1ZnF3ekN1ZE9Ca2s5T1YxNHNHM0JORzdZNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327325),('50kYzlDz2nGfIUalKtMxodosmLy88gryaS6yadc7',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoic0xvZTdhbnJ4enhsN3ZiZjFvR0lGak90UU1YVGpYNmlKbVJtR3Q1VyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331762),('5ViICDr0ee8KdNAGZBKwNWaa67pJlbgfROlkqCBP',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY3JobEptbXVRZHVaWHdDYUNjMmZpbXZsNWpYbjRZaHlRQ2J0VHZWNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754334165),('5ZkM1pLw2wSw8jOwHjePsfhA3VugwJZMOrRv3u6B',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSEFCYW9NZzRkT3dmZWM3d21obG44UmVLd3liWGJUeEZ5YUlUMHBrQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330470),('6B7f0wFntVWcKDAKXXYoZr1u3l70hsHosYYHDYf4',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiNk53S0RuSU44TkV6NVppckNQTExOblJtcW1GdkxXSDBVNXNrUHJ3TCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329278),('6fclTLEZFu64WuNzwnGF32u6UTBQWBnmcfdFeaCM',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY2lKeTNVZWlTQ0hqellxNjZrOU5XcGs3VVlZTXhheUU4ajNIUkU2cSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332874),('6GBI4pJUXjyqpedzQQaBh3Oa7zTKxY8GLrmrn8z4',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiT3VGN1RldjlRbWlyd090Q1BKU25NVUFSYlZnMGVEYVE4dkx2aks1QiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329841),('7OJGii23ISZHeDwJdDBNb70xeUema405IakianGU',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoieU11cVNLdDlObkdIbkxnWGxHOHlYeHZ0U0dOWVdua2ZxalNwcXRjdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333659),('7OyDxaxCm5lt4vSlZalMPFT2rcbDTgWBRn4caN8k',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoialB3alBqVGhsU1lLZFBmbHd4TDd4UlppcmVCd2pzY3NMMmlEM3NSMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331849),('83uMCWLHVtElgED49FWhnVGoRkMtcJMulcCdkpSU',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiR3pWWlFwNjhpdXNMOVRFWXJ4OWdIS1NYcDdJVENZMTRQQkM5dm1YRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329124),('8h4cWx1ORJJtprwKyIDG7IR3QUanHAn2P8tjTEVR',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiNVRja1IzbjhMb1ZmekFMa1pYM2tlZ1pyOXFjRnE3OHdOUkNvRlFXaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333066),('9L0yw28sFPJ25XfthsgzS4oM3eUa2RXquqqSgXlq',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiYkpoaER4NWc5OEFkRzF5UEdEVFU0TlpzZTFKcDRrZDc0WnNQQVZMZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330724),('9RxqdeWwK3uov8EoU1MQ7JahpPmBHCUOmWKfe6J6',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidmlJOFZxNDdKOEtRV3N3VHBhYWozd05IQ2tVUGsxTTViaDB1SHo3WSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333604),('9TuyPbw5fTkDWaePpfRTXKdWQvIKPLmLzBUhyLOx',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUHBuVFVIaFBFZmdTWVNMaW9BblE1Q3g2Ym82R3VIQ1ZhV1BYUHEyVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330362),('9WpVgbM8jwebmwDOJZs5JmJjvKRAfvfU601srdHu',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibVVuRzJnUW92dXBRZWR3N29Qd0tJRmpWT0hoN2xEZjlhdjRsS2hPUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329064),('9yf1F4BfT9OnagqmmWI6KfFCGbAnMuYBWL8Iiqvv',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUlU1WjE0N0R0Z1RsaG5BbXJNNXI0cFlNVzdYWHFQWkxYZUJJNGxxMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327167),('a00UmS2rRg5Rjy9GBdMokOZ7m5RASH7ClGV6UQZK',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRnZFNmxyaWxqMzRjMzdMWXJITEk2eXAxVmFBWmd2YXV4TktUclh5RCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331144),('AaiFba0Ss6ifn9xFLvhxK0otQIbcZSkkqGiREPgL',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiR0EwVW1FaVRPbk5XNVRBamF0Q3BiUUhuSDliZHdCZlpPN3FMUGlyZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332984),('AcXqyEc5f2jddfWKJU13ItbdGQVleE57NPdfN6eD',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY2x0aEtpcGE3Z253YTVMQmFKV1ZMN1ZSdFowMVJNS0dMb1hHQURndyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333441),('AlHwN35HdSxEERjYPzTWPFTfVvMPn2X7gL6DRsfJ',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiaFZKUmRDN0RKVEIwdHprVmtack5IS3NrcXhvV1FmVWhRV3VjMGFIdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331656),('APyQRXPw2ccgdzSenBQ0exAmNYzmRzHOuUjh8XUd',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiODhTV0J1SkpmN3JzejlvWDdwM3puR2ZHV2V0d0Fhc29MazlMc3BLbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328797),('AXmlFDC3TSxi21ShqukPyIhYsBt0mdetL0COpODk',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMDlBa2tqbHhSNnNBRmVVWXFzZW83Z1Q3NkQ1Y2NSN2lDNklwMDZrTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332667),('b1tjWr7x9jnTGjAM50Fil9yzCM0BvQlM9u8nm8MK',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSE00UERxeHlzaFlIOHl3T0NoOEY5YTRaR0R1aDk1WVF3cnI4d1lCSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327114),('BbuHmVN911nb5FVPuWxlVwOS0KOVAFwqL1AbaaM7',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoicUlHREl3TUJaMnNpQlU0U0FON1c1QXZyWVV4UkZ5bm4zZ1o3c25EOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328267),('binNZ1MeO2h2aIZxPzhoPxwa6QCuwtLoc6hdiGL9',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRmFnYTVoNjNGT1FZVzY5eHNjVGJaUWJHck8yd09NNGRzdXA0Wld4UCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332156),('bLcuXixmPbaJfeAIIi6wnAt3VhogVABAAK4GTKYD',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiN0xEeFpQSU5xbTRkWmlnc0VmOFhjc2dsdkEwd3F1WlN0R1Z4Q0tKTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332743),('CcCXBTvpkeEswLW7LAgsBHFITVPgdGV9NJH4uakk',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVk5jUk51RWNBWVpYbTZhQ0pqamNmS3VscmtYcm90QzdXRDJzMnBxeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328593),('CdjZ0GkLSvI752DpfHQXOeqvJcYH4vduKQXxHyAg',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMnhzbVZGSlpaM3ppaGhONnZmdjhXSTA5TUZYeWFRN1JNbHhYVWFOaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326857),('cEpykpvjaK96maU5uvqiMPhSnRlWCxIbeA84HCy4',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiaENQWFJiMVNxVVdIa2lDZU82TTA4U0hZbEJiUFBiRG02MVZzdVl4UyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327417),('cOSUvNgCIZuiC8G7jwTnQo5UwNIExTdn3H1fsdxX',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMjhEc3ZLZFBRck5MSDh2SVZZUDNkd3EwQU1YSVkyZnE4aGJYSzVSYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333145),('DrAxqRhmlRGslE5iMLGxFyEAthLyeCCokkkFaxyW',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVHMxS0ZPT2UzQWJVNHowSnB6M2lFenhweng1MlhRaFpTcXBiZkJvaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329193),('E4KPB7XqFLs4JPNXgYPfYtaQbQrgb9yeteiqBSgZ',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRmR5REdxeGY4TXJXWkxKMWtxVlFzRG5aZEFldW4zWEUxR2RsZzNqMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329495),('eD9D9EJ9Lg45f79McYoj5tisRvwfKnc8MQVOZXFl',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVmZ1bGx3VXhSZFR4QlFzcFVkc2Y2WUhqcVlXdVZ2Q2hTNGx6bkR0ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329971),('EIxyDZIVbA2LiGZAnGgw2IECb4dYSiPI1CqHYPAr',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSGtQR1hKZG1YTERCaTNJSk51Y280T3Mwa1hXTVBrMGRzeXB4QUYwYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754334145),('EIZvmkcfTtzQyDwWkNBJ7LFmSfMIUr3Yyv139f2Z',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiR3ptdTBQaGhlcG5ITFA3VUlJYmgyYjM1TXB5Vk9vRU53RG9ZVjZHRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333272),('EnZuaBXdj4A6USPyZFCFCRnqgnGuwig9deQSKwAE',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ24ySU9EeWFYbUVhb21zajRRM0dsZGhUc1FsZTMzOGlRZHpNVVRhSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333538),('ePCAsCqsIDfDsRzYfCBGdn0lmgqqidkpQ6KuR83V',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMzZtR2VnY3BJSmFhakR2cHYybktsd0x3TmNYUGpnUUFiRFlzdGs5ViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330821),('ERjBKig6PGmswK4APxNd14Iccb2nCyTIZR2xRjHq',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiOEJyYnpWd2tydEU0TGczOVhnY3ZHaWtHTXBNWENoNjRiVG1jRUNySCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332622),('ErTCg1GHWP4tVOl4lTMv7L2DX0Jb4NHltUoY6wgB',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZlFoekM3TlJuUTFHOG5CWU8xYjZlOGNkeU9LWUFTZGdYVmttRzVvVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328866),('EvFBie18M5zCnkMjwut2PQ2SP7LIbvblZK0UUuFm',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoid1k3dmdQcmN4WlQ0SGo4eWR5VmtsSWYzMnF2NWsyTWVSSlBaakZqNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332510),('f315iq3T0Nksj4kCmbUjb5hFpdtS1lqb0WxkeKUd',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiclpxR3g3TlNPNENWM2lDQlFxY3Q1N1drYUFsZHBLbmpPM0JFQUtDZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333972),('FBDz4Mi9k8zkU48rPKR6RQ1AxBvZWNNyAGPkeRXB',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiaFJFQ1lkSGhzTExGSTZqNnlWenlLRDQ5ZmFHcFowT0k2dU13ZG43ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331442),('fKgYuxuVk4WZWCqG3G9xbwBVWBB5Wv9H2Hf4fbW3',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoic05SYWhKM05sQW8zS0VCZGpwTzVycVFZU2Fyb1k5V0kwd21rQkZHVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332268),('frF4Gok3qIZzKi7ceg6hDixPbUuRIAOCaHLE0B67',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSkI1M0ZyM1MwY0RXNFpvMXc0bkhmMVdPZFFwTVdxVmtTVlpHQUR2RCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330559),('fVcHoS4QnXBmeUUuLWs0tjqpaSfk40sioANCU7Xs',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiOXVyeTA1czA5SUJEQndVYzJJaUtEZVFMZHpNRHpVREZoeWZkVGdoUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330323),('ga2f1to67lgVPEckcz2xfh9bVt356tIkjKJEzC6t',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiN3ZtSTJieTNpQ29vbzZzMFdVbHVBSGN4ZUNnSDZKSWs2VnVrREhnayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328961),('Gc935hg3r6ngustoCe3JdXVr2qIg4k2OPq3jjgBa',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMTlRVXBKTUlLZWFhUVg2MlVkUnd0UEhlQU1SZTVuMkg1TVluNTJCciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327910),('GlNyX77GNYQyERisQk62A5TRLHw5NchoAF32bdhF',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoid0dWbUQ3aUtPdmNKbVJ1S0hwN0FOUEEzUWxqZng0WllGY3ppT292diI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333353),('GRViaROwpyZANXNaanNV7Vo5e6uwNsLUMUh1SBXX',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoieUJhSFdQdEI3dnJWMlIwRmxXY1BJVkVKZWNxWmx5Vkt6Q3h0czYxeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330757),('gSFyqV22kqEwQ5Pii4pfKCfcKSThcuVHxKSwg7kR',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQjFtV2xYZGdzOVpWUWlTU2lUcDYycFJoaEJhS1RENTFDaTFmbTAxdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330143),('h6bkaacONKXslkyJphjOU4eTzoKMd7uFxkPAIWcj',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTFpvcUNhaDJVYXlzMVpzU1ZZZU9CNmN3SDByYXNUbVRSTE1PTUdhUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328189),('HALLlGGu2LKBEjojqAmXmwSaAYIyL61ZMV7uFAoA',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMmU2cDNnTDlndWtrZnk3WjFod2dhaDNYcW55aDRsWnpwdUYzakFFVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328069),('hDboX3t71PesyLnEFU1Zwf5anzcHoR2sSxnCOmW2',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSWNuaFM2Z2JERVhKazI1TUlBUEdwOFNQT1hDQzNWMUNIaGxtekdwNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328874),('HE2ALoGHMI2xoIaWTEzCXoNDBAyqlA6lXnTjv5Ok',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidU8yTnVsMnZYSVRFWGtQSnhxQmtlSVB3aEJvSlBkejhHMzVRTlUzcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331928),('HPFOCrkkzRQlYPR1BTQyZCV3tSPsIUcOYXyHXQW8',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibHZlY2g1M2xwTzhpa3N5N1FXdDhvZml5WHBNSldkWmV6eUZtdnVnMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328276),('HshtLAWb0TLRFNg5bCh9SQFHlJ4swgOK3fSpQzsr',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZnlOdHhVUGFoNG1hUjVQUzJnTGtJZksxU05CZmd4WXpvV2JTbDNobSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327700),('hxTZXg1SepF7JSSWMDjpqM6PplCY6ptY70eYeXqX',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoieEdYM3hIVFMzSzF6eWF3bTMyM0FkQVBEWFJ0aWdFaHpYVFpjVnVaOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332339),('I4b2uMRV7S8pkezp1c4Za4MfgJMect00ibqqRuQp',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoicjVIcnhjbmRnY0pmbGVXV3EwS1U3WU5GajNKc01xQThvRXhCaElteCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329389),('I5MRQxFeup41CLF43OMl7rIDXhQhb1DWuXQc8aLK',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVVViMmNTVmdkYjRaUW9wcXRKSmd5Rk5NMGVHUlJ3YjVkNEpReFU0SCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329616),('IfCS9BGXAx8mYX90D593gkOHrvb4i0QSEz7DytC7',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMjNYalFFNU42ZGt3bWl0dTlFVDVxdDlPNk1EY3BvMEJsZkg5dWkzTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327715),('iigKlzr5HPnhL3hhovVQwQTrGDsGqGQdzO04Pzd5',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ0syczVjQUtXbTd1OVRsT3Q5MlRWT2gzWms1dTlBQlJPQVpIRkNxYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331213),('IPxs1QXwBWu3ZG5tjNsEoL5TxVZ87psjMt4Y8ebV',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQmVVbjZXSE1WMkJCZ1A1eE83d1YxTDlnaDQ2MkFDd1RtUmdvVEU3OCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328968),('ISNHhxbAore7uEQKFmuEYxn6ZJlKGWkMFIJuDMyS',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoialRUd2JsSkIxM3FYV0lmRU1Ja2tzdEk3cVZMc3gzb295UWY4TTczQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331281),('IydcPiV0YUCBNrFm41R1NGjcCg1OYeEbcq5Bq11N',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidnRFVTR3RFhJTDNreDBmYW5nWDN5bG1DZjhCNWJUZ3ZlTlJiWEJIMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330912),('IyXpI21L8tdHpOayM5yTBeEp7eGmtRQIQMz2PNyc',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUzhaTmNPSlk3Y2g5eEw3bVNkREVDand3dTZhUlJGcmxxUm1OVkQwYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330243),('jff6Sznkhqij3WTyiAY0Ogt427TcGTJRKWkVmdZ1',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZk5SZ1dSdXdEQ2JVMW9MeHVtMlFnVlJTMUYzTW0yYlc0VXpMcGFoaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331402),('JqWcCzPvKa4MUTZ61mvfFgwQRRyhuUXAkD4XuSkJ',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoib0liMTc0eVc0RkRGU05haVNEZGhQOEpSVDlscVJuaDdyUjFJWXdUViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328529),('JuupScNvHyPugwTtjVnWafda5aazgubSRdta0baL',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTWZCZGdLSWFBOGR4NWxPaXFZTVFEa3pNR3p0N1Jjem9XQ3dQZTRGVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326627),('K9MLWk6BiPMtaFzrblfhCoPMU86fKmFLYniVytnH',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiU3NCUDNGVHhRdUNseEJKYzJtcm1WUHpHMXNlVWtmbTNqeGZBWEpLbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331026),('KXLoCqEzL4J6IWW5Z5ETkgUKeAQCV4s7cudSto83',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoicXg2S2F3Z2JobmZINGJxdUxDejdjSmZMVGg5SjdhZldEbnJzQk5ZNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333032),('kYDertDwKywFZcjtHz2GalXMmfKWA1ElDAgOvN9Z',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQjZuZ0dTQ0FTNUJ0QWJ1eHpjdTlTU3pVVFpDSk00dmVWTXdBRzIxWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332709),('l8se1yb9UiiZRJqOC1rd3TyRpBM0PKSmAiHW0tY3',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibmsyR1FpWGFYSWMzOWhaQW1CUENZVWRsTXNIZDVveW5iVml5ZFduNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754334050),('LcZa7GUMdDxf3H1isHRclVXW5MPynD4sqAT4RVZd',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiU0N6QUFqSzF3Q2RVc0U4VElxTUo4eTZVdFpDdDhLcGQ5R1BQR1QxWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329812),('LKDSgegHiJKE4AbS382lgmQeBLtgLpP8OX3mGa5x',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiaThwN1VQUnpydnVrcDB3MHJ4SW5ab0IzVUxrZU5pVDIzMlB6YnQ4VCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331290),('LPflRORaPDz5csIIPm6KwFpkcoCLm59eXI1QJmIR',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTmRSVjNQQmw4OHNkWnFqSDIwdUczRjhBbWV5eUU4M0FSdTA3VzlvViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328014),('m1AulXJWQIISVWh4Ex1tzgSejaNBU4Efunz4KZDH',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUEhkTk96VTBKNWhIcjI3NVN4QkRVQlJRTlRBM3ZXamFZc3ZFclBvcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328377),('m1cumdiDZCqxws7ShwVBw02Eg4JPfxmeG8VFrABs',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRlBkbjIyYTFVTXd3TzlNbjduRzI3VEtxMGdwZmVZd1FmRXJFS2laciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331873),('m1SFolRD2vANzdAnHjeojZpVJ697Z4CvtXYSp57W',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWUNOS3JJQXRUOWlFcEZ3bmZPNDdkZzhhT213dlFTVWtYdGxQUlZENyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330289),('M6mynUwHYXkzFuoK5wSzr4FmQ1R91294vvm9j3TL',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTDB5cUFNUklDNHR2MDdOclBLTGNGVkdxUXprQmpycU5RV3p0YWw5ZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327954),('maduHbK7XnrlzxGJOgBkgFE46EUYcp5KYAiAbZjY',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoib2RkbEw0aGw2Nk1samF6U2x5YkpWNXphTktWb2tPaXpKakJnak02RyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331507),('mmPdLgULNIq81t3xDCbaQesYkG4sdoVctwM5PyAq',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiOFBHMmZyVEJmbmt5WW9UQkZWdzhjZnRhWWl2Q3FXOG44dnllSzhpcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333544),('MRJSXSiovZNjRJwbv2gWL1tCaWJjVs4ZgGzH1gAM',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMFhvYndDQVhmUjFUc0RiM3NzeDhQUlBlMzdsQmZJaE5kNnBGYUVMbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333771),('MziapNGZXFP8bh9WomepIOtqrm7x74LwedGsFFKq',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWExGbVlsMjJqYmNDY1dINkhCUktWUVp3TzNONjJOTEhkNzFvVWM5ciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326939),('n0oiOEBW2J2PyuNEAlU1ocfXii9VEaZ1tqT5eajy',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiaEdJOW9OZW1hZ2RGVG1pcmo2b29PUTIzRkRPWTk5d3Ryc0FjVVlieiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330614),('NJwOL4fPkGeh3gCrBNak5wcs7DavZiR0FELpfVtE',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUlN6ajh5RXJ4amRrYlo2THQzWUVtUmpPekhRSElockVCWnRyaWNFaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333943),('nksWMlK0pLVg57iF8ruPaiI0OQq5iQoolNFJ9yEY',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiN1VSTUlSS2lzWnVPS3RicHN2S1JlVzdDaUd6U0p2SDdnTHJaWXhQayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332601),('nlS762ynKqHExqYT0LonZ6EUSaNsWW502cKgMosS',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY1cwYzBHTzZkRDZXUE13Q2duR3pWbDBmdzFvdDFCRmc0UlNtcnJVQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330048),('om6jb2zQlRWU2ozOnkWRgms8MYgvgorLXN5YTl67',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWGNOd1FPSklXUUtOV0RtcEt3MHVUUklhazJ4MDZJUGV0djVndHRIWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331593),('OrakCbIfpnnzeEEEyh3sZQomnilmTcNJc5wOO86t',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibFNxdUUwanV0d2RVaGRHbVdjM2h6T3Z5RGtpdE1EY0xZclFRNTZ2dSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329033),('pBf1DVuwHUnqLnuzznd2ZxUUcmtSVGmuwnGsud58',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY3V4dThkN1drYVJGYzBoY25KWklmWFhJcWd0TzdsU3BkVWZaeUNmcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327885),('PFnDx7SvyorzPI9gnd2mUu63mijmxNk6vGOZLpob',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSnVzcXdncExqNVE5aE9yY1oxZ0loMWZFWDkyb245RW1oTEFwakFhciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331618),('PhyTpeI7z6sdjjOTfsQz5ZPsDqz67rliirtzPzbf',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQzc3aVRrN1lIaXNTUG9keW9DSG5GYWZCc1g2WncybjZHZmhMUmNHVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754334244),('pNj7JEl6j96XQk9TdnrJSi9IJykH0O8jN3pXgXh8',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoib0gwcnQ3MEJiYTU3Rm95QnF2U1N0WjBHRlFWOTR5NGpOT1ZudkJNeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332810),('PwBQJHXdeDPnchOV1QKujI6VMC5GSSRcSQf88mqs',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiT20zTEZOclVoY25TOVMxd3pXVk1JaHgwVFhqS2pDN1h4bHpNNG1xaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754334067),('PWrcl85z9q3BO78KU3JnzDgqkK76pHrdyoB0ZstN',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZGlkNEI0czJiMUh5THJiWmRpRTNQMU1neTkzNDduZHFjQXZVWWlYdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326671),('pZYjhIIIl6XiNNfVzgcgf9gN3cXPpnZvEsA8o1U9',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiaERYS2I3T210VEVYQzRnTWx4ajRYZlVBN0xTZUowVVhHWnI4dXY2dCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329946),('Q3Ds84sG3X9cArGGXBjrsiOwLQPmZY9Z8XSwEpyp',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiU2RFeEhnWHdPam9vbkZSZmQ0elFHc3AwTXRtY3FUOUJZb3AwVUM4ZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327451),('QADjwNIYGA59RMlc6ePVFJI6qqcNIdzlOwdFBbBF',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMlJlUDlSb1MwS09mWEpXWGtCNHhOWktWdnFmR3ZEQlBiamREalpIUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332803),('QD5PfrCpnLnpYwvHwWZbpsvSCWPDsUMVYnv7nu70',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQThYSWFPbmE0WmVQVFFaUUVjc0dGVGZqY08yaU9xVkxwWWVZVjdCWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326746),('QhVvR5CVAYIzX6N9ilb64MmeGtUXknI8sggK8NKh',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibWx0RDFjU2sydjJhYVZaNUpHY3VxS0FLVDdIeWpxdUtEc0VTUkFINiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327826),('QUO5MBmcPbbpJn0cszoloUjYM4GvkNcZFiVnaszJ',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZzZmb1VFbnhCaVNaUk1ZcXBVM0tSaHh1cHJTVGdHSjhEVE85WVJGcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330168),('S1cyW5CnphFTZ1mmgIEtILUz9s3MRQ1AFsKUszeS',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiM0NpcHpTb0VSVzZKWGNXMU1UYk5VempDM095bTNaTlZ2aDlLOGNxaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332451),('S49Fj6fyEqM4G1DvBPJVivxmKzff6S94EkKEtCwL',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWklGckZ0a3VjYWMySFpudG5yMTRCbkdZTktLQ2F2RnJCd0U5alZWbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330637),('s8j66po9Oljm3sXpX4VwWSNQXhWiGDkPNQxA3eqw',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiN05HbVdubDJhMXB2b0U2RWh5d1V1dENNUUhvSGsycjg5cVN5V1pvUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333357),('S9WaqBoFj0kQDYxcvsu4uuhX3RSBvgD2de2qVWdO',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoieVVwNENLMlBiYVhwaldqaXZUTjRhN0JIUk95bXpSUXRJdmNkSGozMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332262),('SfIs4yX5tE1WlBOE0IRHYoBS6Tquh84DYdky8n9A',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZGpZTWQ1aHNFRWdnRzBHb3Fsazg3OFlBZzRMb3lMV21pdTdUaDY0OCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331376),('SKrlKKuMIeCNrkfO9DYlbSSjeA6p7Yh6vuHjKDSe',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiWmR3VDE3WVV1SnlBMTlMVmgyek5FbEU5WWs3TFdLZ2xkMURmNXZyNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327260),('sohAnDGpFJyFgnezKVNyYnACLugFUcYJ4rZlgMac',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiOFYwSU55bjdvVjdlTVdza0p5dnRQMW5zMUhtVndUREZXSkJXVVlSaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754334310),('SRhtzNdmuJdzTVW294SjlyNV8jt3ePZ01chwKTSS',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidjhueVB5M0lHSGY0UkJaNVZ6M29wZURjVDViYWpMUU1JaVlLWFVBMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328684),('t7rMlasEQxPFMS3m0hURyAKNNrWosUXg1jcf1flS',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiclA1WWNCendUTVFRZ0hBMmk1dGZjSmFLT1U0cFZ6THNZdmt6bWM4ZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333151),('Ta1awgotpyzKZcd9BWmy4flxY40WAgfTe8naoFjU',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTlI5WDU5c1ByUU1YNE0ybkNDdjlQUk0zUGxjOHNTbXZPOHVhMnhWSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329177),('TcSuIIy5WQrlLkb6maUfj3dvxcV1iCHio6pvW7Ca',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiV2tzdzRNWUd2MlJKTFBTMlRCSlVzZE9YSEF2TFR3RmRoeVlKcDM2aCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327050),('TcWSaXOcnEPZZFNsohfS4xhf6nmOaKiO5lznMwoX',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiaEtPVFY2TGppaUNnb05nM3RMeXAzRHJUeHR1MjJBamhRaHhtR21yRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327604),('TFh5F67cRsB9v6DGohbvb8P04EON4SL2nQpfkbTU',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVlZpaEh0MFFBaU1DcnBUaWkxekRxMmR6TnVDejJ0ZlppdnNNWWNhaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331500),('tylCIIl0jJkuQ2J2EOPVss62tTdrVprXW16S9OnQ',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQU8yUTVqeGllU21IQVVlZTRQMkMweGdYWGprWUtqd29HTmVrU0liRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329745),('u5pn58AjNJdP9ZkvSzzRKQMzr2ANPbNTMnVjTWpw',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRDBHRlhqUkFIUXMzV2Nzc0R5d014UzBuRFExY0dSWFVaVnQxMzJDNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330957),('uTVTS8CSghgnogtgg2m0h4FMaBisxpOnpRaRrM0T',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidzJVNldvckQxbXQ1UlVnY0FzTFpNRVBLejZ0OXZhUXg0aTNGT1JZRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329704),('VFj0XgxRJfnNIYe6iIKyYEnl2IU52YkI4dqdPFSw',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiUnJGVUxZS0RGeFpTRlJmaE5vMVpueTdmWmJ6ZUI4ODZFMlZRaEFnYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754334274),('vIpty2uujin4MM0XDmFfbYIT3Azja6wqwHyfGQTV',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoic254bEpvTzh6ZnQxNmc5Zk8zUjRLMnNGVVlIOXp3NmlYUmM1dlpuVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332930),('VlC7ISfW6eh2h0LLN4B1A8f1fzaRflT1K7dmJ1f8',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibGpqaFdUWThMNEdOWm1LUm53Nk45OHh6RDI0SnVGVkt1NU9malpLTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328422),('w31Irq94GzIa4vrsxr8TLuvFWeNJyPqkQO47vtYG',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiOUdKZE1LNlVqemFmY1JDUmw4WkhaTVB2V3JhOTJva2xkN3BhaEI1SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329680),('W3OEz8iolc1czT5yQS7BJfZJLiyGFZ9fFe2K2wdV',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiN3A4RWRPZndEVkw4Vld3Nm94QlB2RDMxUXVmbE16a0NNSFhJNHNnTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329378),('W4zPiUn4grOafdaYXZXXru35TXzr0ST2gQG5CT8y',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoid0tiam1OejVZbE5lVkxFdGd1QmNCMElSMGVpZFk3TzdQRlJmRVN1USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332531),('wNGVdX2SxZxRFfh2K5Mb5Z9xmWrye5KwePxU4a34',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiekpDdDE0dFZ5UEJxbXN4bG04ZTRUSHhuU2dIWXNpMFdRTTV1ckJESCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329284),('wPtNZ3qLG2oWJuifRbwue6DEgPPxstI4WJUWjhg3',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVElad0o1M3pJVkRIUTdjbmd1Smd4ejVxQW9NZ3Bvdzlra2lOZG5neiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331028),('wWtSqGF7V1Bjll7WKGQ5HruvNqVzxaAHUjsjZ1ui',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiZEFqUXo1STdWaTJ5cE04eUwxVGNHb0tBdEI0VE13T3A2R2ZEc0huQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330045),('WWzRTnwhIM5pgkyoLUUmPQS0xcjmtYJiX0tCcbSr',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiMHFyVzBLSTBVVXNiY29ndEZJU2R3bmo2Y0FSb3dNREVScndqVnREWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329453),('XjtFkxHTTOD82RVtISTBSdQ7JVDfyXXK3ns5sMWX',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSEJvajVpcW1SMVd5ZWEyY0hNc09VNkhnYjFET2dIUXBmc0tXTmxjVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754333869),('xSddeTxYANsygwCZ6ezJCAODAbxTTutBXRJg1u4p',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTzZ3RkFxYjJjN0lYTUhsS09YODloVWJYS21SbTR5bUVlSnZLZmJCRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327798),('xXF7nq0F0QCz9GEZGtx9WD5GwNFP3MusoK9wVAQh',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ3hEcnh2UFhDaTJyQlJvcnY0VUNGT0E0WTQxOEI0NEtpU1Q3bDkyWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326977),('xxv8ZEcz0CjC2mxJXJTNPVHuDQFRcVjQosfakhse',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSGUyRjJ4UVpPSHN0ZEh6bExISUlqMUphVTNJMFdIOUhRWmQzOWdSdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327078),('y8uJZUPGoRfDfUVEWWZUWAgoc2PqSHnlyqGageFJ',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidUNOVThsTDMySklnMTlZaTdqczg0MGgyeDFUcUFxWnVGWWplMlo0RiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754331964),('Yx5YcXi0gZTgQ3i3OBKWzZNIUwUN9AH8e78A7nX8',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoibWc1bGhJeWphUWdhY2lha24wU3dJYktxeFN0VWo4RUJScFlYMjNVaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754329540),('ZaX6xBqVhvrRxbNUsQuTtAPAy81cpLjiuzElt3Rv',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSlZzalZXcG1NYUoxRExyVnNSWkRjTkU3a3VrM2ltN1Zpd1RFbVJ2biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332425),('ZhvecuRTn1dlliTmmV0OUSKwd2wuKJUOLoQMUc0W',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiYVJhdjlYNk9HcEdXd2paUXcxV3hpbFpSTmM3WHF4cEV0SExNRU4wdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754332082),('zmvZMBuqSmPHfE9Qyl6XfQ3uVUFKzuLWSyHDU0vN',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiSkhkSzExTE91ZlNRSFVzazBMNGdnT2FxTTNkM1hTb0p0SzNBVFQ5dCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754328180),('zocEdNodaqSOzvZbDUI7vHc670kFrtFhGonYpRvL',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiemI2OFh5b1ptbzdmZnRyTUJrN3NHR0RTazhhVHpYcmk1NDVWTmNjUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330399),('zQUEBX5wfmxcacubmwre1I31LeJLCLVgt5FN9zJz',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoia1Z2eEdPUFBDSGVtdG5HMFRUbk1IWWU0MGxFeU9QUEZ2WlFOa01WUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754330518),('zzlYeSVEP0C6LEiEUxDCgY4kiIz4JgUD18heGFQh',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoidFhmY1IxaXNqQXlrYVN1WFc5UUttU25UdWdzU0Q5QXJVNDVYTjZmNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754326782),('zzxdChCyDfq9GQd8v4Wkgxm2vvVi4HCDkCuZOHZP',NULL,'91.108.5.46','','YToyOntzOjY6Il90b2tlbiI7czo0MDoiVW8xS0l5THdoZjZ1alpxTWxjaHNhMElIUHdlSER6Vk9KWDJqZk9rMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1754327512);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telegram_bots`
--

DROP TABLE IF EXISTS `telegram_bots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telegram_bots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `note` text NOT NULL,
  `last_update_id` bigint(20) DEFAULT NULL,
  `webhooked_at` datetime DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telegram_bots`
--

LOCK TABLES `telegram_bots` WRITE;
/*!40000 ALTER TABLE `telegram_bots` DISABLE KEYS */;
INSERT INTO `telegram_bots` VALUES (1,'Spy','@JaasousBot','6014320296:AAHip2Ofk6XV1YKXoFVRiLj_7iQan7pdWsA','',NULL,'2024-12-12 05:58:42',1,'2024-12-10 13:08:00','2024-12-10 13:08:00'),(2,'HiGamee','@HiGameeBot','1133851028:AAGn7g7qpzTzdCCtFU-4KN8xBB4cLxFH4eU','',NULL,NULL,1,'2024-12-14 12:08:00','2024-12-14 12:08:00'),(3,'BazarSanjRobot','@BazarSanjRobot','1860910099:AAFgDLxRla9nci8BrCOqwxrAiqZ2IAUBYpU','',NULL,NULL,1,NULL,NULL),(4,'Bazar Analyzer','@BazarAnalyzerBot','1638772636:AAHsQpKZuqVWNAlgND7SeKx8dEeoyAGTxx0','',NULL,NULL,1,NULL,NULL),(5,'Trader Bours','@TraderBoursBot','1180101762:AAENb_U_ThEV5b0MZzxLzfyh5Gbtno4EtI8','',NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `telegram_bots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telegram_chats`
--

DROP TABLE IF EXISTS `telegram_chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telegram_chats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `bot_id` bigint(20) NOT NULL,
  `chat_id` varchar(255) NOT NULL,
  `chat_id_number` varchar(255) DEFAULT NULL,
  `params` text DEFAULT NULL,
  `owner_type` varchar(255) NOT NULL,
  `owner_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telegram_chats`
--

LOCK TABLES `telegram_chats` WRITE;
/*!40000 ALTER TABLE `telegram_chats` DISABLE KEYS */;
INSERT INTO `telegram_chats` VALUES (1,'private',NULL,1,'97311163','97311163','{\"last_command\":\"start\"}','App\\Models\\TelegramUser',97311163,'2024-12-13 21:32:22','2024-12-15 13:53:00'),(2,'supergroup',NULL,1,'-1001128067712','-1001128067712','{\"last_command\":\"\"}','App\\Models\\TelegramGroup',-1001128067712,'2024-12-13 21:33:41','2024-12-13 21:33:41'),(3,'group',NULL,1,'-220952910','-220952910','{\"last_command\":\"Iparticipate\",\"gameNumber\":53,\"games\":{\"3\":{\"participants\":[]},\"4\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"5\":{\"participants\":[]},\"6\":{\"participants\":[]},\"7\":{\"participants\":[]},\"8\":{\"participants\":[]},\"9\":{\"participants\":[]},\"10\":{\"participants\":[]},\"11\":{\"participants\":[]},\"12\":{\"participants\":[]},\"13\":{\"participants\":[]},\"14\":{\"participants\":[]},\"15\":{\"participants\":[]},\"16\":{\"participants\":[]},\"17\":{\"participants\":[]},\"18\":{\"participants\":[]},\"19\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"20\":{\"participants\":[]},\"21\":{\"participants\":[]},\"22\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"23\":{\"participants\":[]},\"24\":{\"participants\":[]},\"25\":{\"participants\":[]},\"26\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"27\":{\"participants\":[]},\"28\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"29\":{\"participants\":[]},\"30\":{\"participants\":[]},\"31\":{\"participants\":[]},\"32\":{\"participants\":[]},\"33\":{\"participants\":[]},\"34\":{\"participants\":[]},\"35\":{\"participants\":[]},\"36\":{\"participants\":[]},\"37\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"38\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"39\":{\"participants\":[]},\"40\":{\"participants\":[]},\"41\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"42\":{\"participants\":{\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"}}},\"43\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"44\":{\"participants\":[]},\"45\":{\"participants\":{\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"},\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"46\":{\"participants\":[]},\"47\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"48\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"},\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"}}},\"49\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"},\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"},\"5838147286\":{\"name\":\"2YbZhw==\"}}},\"50\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"},\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"},\"5838147286\":{\"name\":\"2YbZhw==\"}}},\"51\":{\"participants\":{\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"},\"5838147286\":{\"name\":\"2YbZhw==\"},\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}},\"52\":{\"participants\":{\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"},\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"},\"5838147286\":{\"name\":\"2YbZhw==\"}}},\"53\":{\"participants\":{\"450387848\":{\"name\":\"SC5JcmFuc2hhaGkgLg==\"},\"97311163\":{\"name\":\"2YbbjNqp2Kc=\"}}}}}','App\\Models\\TelegramGroup',-220952910,'2024-12-15 10:28:51','2025-04-26 15:58:50'),(4,'private',NULL,1,'450387848','450387848','{\"last_command\":\"start\"}','App\\Models\\TelegramUser',450387848,'2024-12-27 13:50:54','2024-12-27 13:50:54'),(5,'private',NULL,1,'5838147286','5838147286','{\"last_command\":false}','App\\Models\\TelegramUser',5838147286,'2024-12-27 13:53:01','2024-12-27 13:53:01');
/*!40000 ALTER TABLE `telegram_chats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telegram_groups`
--

DROP TABLE IF EXISTS `telegram_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telegram_groups` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telegram_groups`
--

LOCK TABLES `telegram_groups` WRITE;
/*!40000 ALTER TABLE `telegram_groups` DISABLE KEYS */;
INSERT INTO `telegram_groups` VALUES (-1001128067712,'بحث های خیلی وزین و سنگین مثل دیکانستراکتیویزم چون ما خیلی شاخیم','2024-12-13 21:33:41','2024-12-13 21:33:41'),(-220952910,'You & Me & English','2024-12-15 10:28:51','2024-12-15 10:28:51');
/*!40000 ALTER TABLE `telegram_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telegram_messages`
--

DROP TABLE IF EXISTS `telegram_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telegram_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` bigint(20) NOT NULL,
  `chat_id` bigint(20) NOT NULL,
  `sender_id` bigint(20) NOT NULL,
  `text` text DEFAULT NULL,
  `is_command` smallint(6) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telegram_messages`
--

LOCK TABLES `telegram_messages` WRITE;
/*!40000 ALTER TABLE `telegram_messages` DISABLE KEYS */;
INSERT INTO `telegram_messages` VALUES (1,614,97311163,97311163,'رریی',0,'2024-12-13 21:32:55','2024-12-13 21:32:22','2024-12-13 21:32:22'),(2,616,97311163,97311163,'/help',1,'2024-12-13 21:33:52','2024-12-13 21:33:18','2024-12-13 21:33:18'),(3,18243,-1001128067712,97311163,'تست',0,'2024-12-13 21:34:15','2024-12-13 21:33:41','2024-12-13 21:33:41'),(4,618,-220952910,97311163,NULL,0,'2024-12-14 20:36:41','2024-12-14 20:47:21','2024-12-14 20:47:21'),(5,623,97311163,97311163,'/start',1,'2024-12-14 20:49:32','2024-12-14 20:48:55','2024-12-14 20:48:55'),(6,625,97311163,97311163,'/start',1,'2024-12-14 20:51:00','2024-12-14 20:50:23','2024-12-14 20:50:23'),(7,627,97311163,97311163,'/start',1,'2024-12-14 21:09:45','2024-12-14 21:09:08','2024-12-14 21:09:08'),(8,629,97311163,97311163,'/start',1,'2024-12-14 21:10:55','2024-12-14 21:10:18','2024-12-14 21:10:18'),(9,631,97311163,97311163,'/start',1,'2024-12-14 21:11:57','2024-12-14 21:11:22','2024-12-14 21:11:22'),(10,633,97311163,97311163,'/start',1,'2024-12-14 21:16:05','2024-12-14 21:15:29','2024-12-14 21:15:29'),(11,619,-220952910,97311163,'/start',1,'2024-12-14 20:37:07','2024-12-14 21:24:37','2024-12-14 21:24:37'),(12,636,97311163,97311163,'/start',1,'2024-12-14 21:28:03','2024-12-14 21:27:27','2024-12-14 21:27:27'),(13,650,97311163,97311163,'Hbn',0,'2024-12-15 12:59:46','2024-12-15 12:59:08','2024-12-15 12:59:08'),(14,620,-220952910,97311163,'/start',1,'2024-12-14 20:44:46','2024-12-15 13:50:50','2024-12-15 13:50:50'),(15,621,-220952910,97311163,'Ggggg',0,'2024-12-14 20:46:00','2024-12-15 13:50:51','2024-12-15 13:50:51'),(16,622,-220952910,97311163,'/start',1,'2024-12-14 20:48:49','2024-12-15 13:50:51','2024-12-15 13:50:51'),(17,638,-220952910,97311163,'/start',1,'2024-12-14 21:29:49','2024-12-15 13:50:52','2024-12-15 13:50:52'),(18,639,-220952910,97311163,'/start',1,'2024-12-15 10:55:04','2024-12-15 13:50:53','2024-12-15 13:50:53'),(19,640,-220952910,97311163,'/start',1,'2024-12-15 10:58:10','2024-12-15 13:50:53','2024-12-15 13:50:53'),(20,641,-220952910,97311163,'/start',1,'2024-12-15 10:58:38','2024-12-15 13:50:57','2024-12-15 13:50:57'),(21,642,-220952910,97311163,'/start',1,'2024-12-15 12:47:05','2024-12-15 13:50:57','2024-12-15 13:50:57'),(22,643,-220952910,97311163,'/start',1,'2024-12-15 12:49:39','2024-12-15 13:50:58','2024-12-15 13:50:58'),(23,644,-220952910,97311163,'/start',1,'2024-12-15 12:50:01','2024-12-15 13:50:58','2024-12-15 13:50:58'),(24,645,-220952910,97311163,'/start',1,'2024-12-15 12:52:00','2024-12-15 13:50:59','2024-12-15 13:50:59'),(25,646,-220952910,97311163,'/start',1,'2024-12-15 12:54:13','2024-12-15 13:51:03','2024-12-15 13:51:03'),(26,647,-220952910,97311163,'/start',1,'2024-12-15 12:56:43','2024-12-15 13:51:03','2024-12-15 13:51:03'),(27,648,-220952910,97311163,'/start',1,'2024-12-15 12:57:21','2024-12-15 13:51:04','2024-12-15 13:51:04'),(28,649,-220952910,97311163,'Hgv',0,'2024-12-15 12:59:37','2024-12-15 13:51:04','2024-12-15 13:51:04'),(29,651,-220952910,97311163,'/start',1,'2024-12-15 13:15:31','2024-12-15 13:51:05','2024-12-15 13:51:05'),(30,652,-220952910,97311163,'/start',1,'2024-12-15 13:51:14','2024-12-15 13:51:09','2024-12-15 13:51:09'),(31,672,-220952910,97311163,'/start',1,'2024-12-15 13:52:42','2024-12-15 13:52:04','2024-12-15 13:52:04'),(32,674,97311163,97311163,'/start',1,'2024-12-15 13:53:38','2024-12-15 13:53:00','2024-12-15 13:53:00'),(33,676,-220952910,97311163,'/start',1,'2024-12-15 14:03:15','2024-12-15 14:02:37','2024-12-15 14:02:37'),(34,678,-220952910,97311163,'/start',1,'2024-12-15 14:16:43','2024-12-15 14:16:05','2024-12-15 14:16:05'),(35,680,-220952910,97311163,'/start',1,'2024-12-15 14:17:04','2024-12-15 14:16:26','2024-12-15 14:16:26'),(36,681,-220952910,97311163,'شروع ',1,'2024-12-15 14:17:05','2024-12-15 19:24:39','2024-12-15 19:24:39'),(37,686,-220952910,97311163,'شرکت میکنم',1,'2024-12-15 19:58:57','2024-12-15 19:58:31','2024-12-15 19:58:31'),(38,690,-220952910,97311163,'/start',1,'2024-12-15 20:59:01','2024-12-15 21:08:20','2024-12-15 21:08:20'),(39,691,-220952910,97311163,'/start',1,'2024-12-15 21:01:48','2024-12-15 21:08:20','2024-12-15 21:08:20'),(40,692,-220952910,97311163,'/start',1,'2024-12-15 21:07:42','2024-12-15 21:08:21','2024-12-15 21:08:21'),(41,693,-220952910,97311163,'/start',1,'2024-12-15 21:08:02','2024-12-15 21:08:22','2024-12-15 21:08:22'),(42,694,-220952910,97311163,'شروع ',1,'2024-12-15 21:08:59','2024-12-15 21:08:34','2024-12-15 21:08:34'),(43,698,-220952910,97311163,'شرکت میکنم',1,'2024-12-15 21:09:14','2024-12-15 21:08:45','2024-12-15 21:08:45'),(44,700,-220952910,97311163,'/start',1,'2024-12-15 21:09:47','2024-12-15 21:09:08','2024-12-15 21:09:08'),(45,701,-220952910,97311163,'شروع ',1,'2024-12-15 21:09:47','2024-12-15 21:09:10','2024-12-15 21:09:10'),(46,702,-220952910,97311163,'شرکت میکنم',1,'2024-12-15 21:09:50','2024-12-15 21:09:13','2024-12-15 21:09:13'),(47,708,-220952910,97311163,'/start',1,'2024-12-15 21:37:20','2024-12-15 21:36:41','2024-12-15 21:36:41'),(48,709,-220952910,97311163,'شروع ',1,'2024-12-15 21:37:21','2024-12-15 21:37:59','2024-12-15 21:37:59'),(49,710,-220952910,97311163,'/start',1,'2024-12-15 21:39:00','2024-12-15 21:38:21','2024-12-15 21:38:21'),(50,711,-220952910,97311163,'شروع ',1,'2024-12-15 21:39:00','2024-12-15 21:39:12','2024-12-15 21:39:12'),(51,712,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 21:45:22','2024-12-15 21:44:45','2024-12-15 21:44:45'),(52,713,-220952910,97311163,'/start',1,'2024-12-15 21:47:10','2024-12-15 21:46:31','2024-12-15 21:46:31'),(53,714,-220952910,97311163,'شروع ',1,'2024-12-15 21:47:10','2024-12-15 21:47:15','2024-12-15 21:47:15'),(54,717,-220952910,97311163,'/start',1,'2024-12-15 21:48:03','2024-12-15 21:47:24','2024-12-15 21:47:24'),(55,719,-220952910,97311163,'/start',1,'2024-12-15 21:48:47','2024-12-15 21:48:08','2024-12-15 21:48:08'),(56,721,-220952910,97311163,'/start',1,'2024-12-15 21:50:08','2024-12-15 21:49:29','2024-12-15 21:49:29'),(57,718,-220952910,97311163,'شروع ',1,'2024-12-15 21:48:04','2024-12-15 21:49:39','2024-12-15 21:49:39'),(58,720,-220952910,97311163,'شروع ',1,'2024-12-15 21:48:47','2024-12-15 21:49:40','2024-12-15 21:49:40'),(59,727,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 21:50:21','2024-12-15 21:49:50','2024-12-15 21:49:50'),(60,728,-220952910,97311163,'/start',1,'2024-12-15 21:51:56','2024-12-15 21:51:17','2024-12-15 21:51:17'),(61,723,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 21:50:19','2024-12-15 21:52:10','2024-12-15 21:52:10'),(62,729,-220952910,97311163,'شروع ',1,'2024-12-15 21:51:56','2024-12-15 21:52:23','2024-12-15 21:52:23'),(63,731,-220952910,97311163,'/start',1,'2024-12-15 21:54:24','2024-12-15 21:53:45','2024-12-15 21:53:45'),(64,732,-220952910,97311163,'شروع ',1,'2024-12-15 21:54:24','2024-12-15 21:53:47','2024-12-15 21:53:47'),(65,733,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 21:54:27','2024-12-15 21:53:52','2024-12-15 21:53:52'),(66,734,-220952910,97311163,'/start',1,'2024-12-15 22:13:47','2024-12-15 22:13:08','2024-12-15 22:13:08'),(67,735,-220952910,97311163,'شروع ',1,'2024-12-15 22:13:48','2024-12-15 22:13:26','2024-12-15 22:13:26'),(68,741,-220952910,97311163,'/start',1,'2024-12-15 22:15:17','2024-12-15 22:14:38','2024-12-15 22:14:38'),(69,744,-220952910,97311163,'/start',1,'2024-12-15 22:15:32','2024-12-15 22:14:53','2024-12-15 22:14:53'),(70,745,-220952910,97311163,'شروع ',1,'2024-12-15 22:15:32','2024-12-15 22:14:59','2024-12-15 22:14:59'),(71,747,-220952910,97311163,'/start',1,'2024-12-15 22:21:59','2024-12-15 22:21:20','2024-12-15 22:21:20'),(72,748,-220952910,97311163,'شروع ',1,'2024-12-15 22:21:59','2024-12-15 22:21:23','2024-12-15 22:21:23'),(73,750,-220952910,97311163,'/start',1,'2024-12-15 22:30:04','2024-12-15 22:29:25','2024-12-15 22:29:25'),(74,751,-220952910,97311163,'شروع ',1,'2024-12-15 22:30:04','2024-12-15 22:29:34','2024-12-15 22:29:34'),(75,752,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 22:30:14','2024-12-15 22:29:44','2024-12-15 22:29:44'),(76,753,-220952910,97311163,'/start',1,'2024-12-15 22:32:20','2024-12-15 22:31:41','2024-12-15 22:31:41'),(77,754,-220952910,97311163,'شروع ',1,'2024-12-15 22:32:21','2024-12-15 22:31:43','2024-12-15 22:31:43'),(78,755,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 22:32:23','2024-12-15 22:31:48','2024-12-15 22:31:48'),(79,756,-220952910,97311163,'/start',1,'2024-12-15 22:37:19','2024-12-15 22:36:40','2024-12-15 22:36:40'),(80,757,-220952910,97311163,'شروع ',1,'2024-12-15 22:37:20','2024-12-15 22:36:42','2024-12-15 22:36:42'),(81,758,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 22:37:22','2024-12-15 22:36:45','2024-12-15 22:36:45'),(82,759,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 22:37:41','2024-12-15 22:37:04','2024-12-15 22:37:04'),(83,760,-220952910,97311163,'/start',1,'2024-12-15 22:40:58','2024-12-15 22:40:19','2024-12-15 22:40:19'),(84,761,-220952910,97311163,'شروع ',1,'2024-12-15 22:40:58','2024-12-15 22:40:21','2024-12-15 22:40:21'),(85,762,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 22:41:01','2024-12-15 22:40:24','2024-12-15 22:40:24'),(86,763,-220952910,97311163,'/start',1,'2024-12-15 22:42:29','2024-12-15 22:41:50','2024-12-15 22:41:50'),(87,764,-220952910,97311163,'شروع ',1,'2024-12-15 22:42:30','2024-12-15 22:41:52','2024-12-15 22:41:52'),(88,765,-220952910,97311163,'بریم برای بازی',1,'2024-12-15 22:42:32','2024-12-15 22:41:55','2024-12-15 22:41:55'),(89,766,-220952910,97311163,'بریم برای بازی',1,'2024-12-20 07:01:39','2024-12-20 07:00:54','2024-12-20 07:00:54'),(90,768,-220952910,97311163,'بریم برای بازی',1,'2024-12-27 08:31:30','2024-12-27 08:30:36','2024-12-27 08:30:36'),(91,771,-220952910,97311163,'شرکت میکنم',1,'2024-12-27 08:38:20','2024-12-27 08:56:31','2024-12-27 08:56:31'),(92,772,-220952910,97311163,'شرکت میکنم',1,'2024-12-27 12:16:21','2024-12-27 12:19:19','2024-12-27 12:19:19'),(93,773,-220952910,97311163,'شرکت میکنم',1,'2024-12-27 12:20:27','2024-12-27 12:19:30','2024-12-27 12:19:30'),(94,774,-220952910,450387848,'شرکت میکنم',1,'2024-12-27 12:24:27','2024-12-27 12:23:36','2024-12-27 12:23:36'),(95,775,450387848,450387848,'/start',1,'2024-12-27 13:45:42','2024-12-27 13:50:54','2024-12-27 13:50:54'),(96,776,450387848,450387848,'للل',0,'2024-12-27 13:47:16','2024-12-27 13:50:55','2024-12-27 13:50:55'),(97,777,450387848,450387848,'ددد',0,'2024-12-27 13:47:57','2024-12-27 13:50:55','2024-12-27 13:50:55'),(98,778,450387848,450387848,'ااا',0,'2024-12-27 13:51:38','2024-12-27 13:50:56','2024-12-27 13:50:56'),(99,783,450387848,450387848,'ههه',0,'2024-12-27 13:52:11','2024-12-27 13:51:12','2024-12-27 13:51:12'),(100,785,5838147286,5838147286,'ااا',0,'2024-12-27 13:54:00','2024-12-27 13:53:01','2024-12-27 13:53:01'),(101,790,-220952910,97311163,'شرکت میکنم',1,'2024-12-27 14:30:36','2024-12-27 14:29:41','2024-12-27 14:29:41'),(102,794,-220952910,450387848,'شرکت میکنم',1,'2024-12-27 14:34:15','2024-12-27 14:33:40','2024-12-27 14:33:40'),(103,798,-220952910,97311163,'شرکت میکنم',1,'2024-12-27 14:38:59','2024-12-27 14:38:10','2024-12-27 14:38:10'),(104,803,-220952910,5838147286,'شرکت میکنم',1,'2024-12-27 15:28:59','2024-12-27 15:28:10','2024-12-27 15:28:10'),(105,809,-220952910,97311163,'Certainly! Here\'s a more formal and instructional explanation of the three challenges you encountered:\n\nChallenge 1: Installing the grpc Extension via PECL\n\nIssue: The process of installing the grpc extension for PHP using PECL is inherently slow. This is primarily due to the time it takes to build the extension from source, which can be inefficient during subsequent rebuilds.\n\nSolution: To address this issue, a more efficient approach was employed: rather than using pecl install grpc every time, a versioned zip file of the grpc extension was downloaded and placed next to the Dockerfile. This approach allows for caching and version locking, ensuring that the installation step is faster and more predictable in future builds. By doing this, unnecessary rebuilds of the extension are avoided, saving both time and computational resources.\n\n\nChallenge 2: Compiling Protocol Buffers with the grpc Plugin\n\nIssue: The grpc plugin required for compiling protocol buffers was another time-consuming step in the build process. This process involves downloading dependencies, compiling them, and ensuring they are integrated correctly, all of which contribute to the long build times.\n\nSolution: To optimize this process, the grpc repository was cloned outside the container, and the necessary submodules were installed only once. The compiled result was then copied into the working directory of the container during the build process. This method eliminates',0,'2025-01-03 15:04:01','2025-01-03 15:02:53','2025-01-03 15:02:53'),(106,813,-220952910,97311163,'تجربه درگاه بانک سپه امیدپی\nدرگاه روی دوتا سابدامین پاکشوما قابل هندل نبود و موقع تایید اسمس روی یکی از سابدامینها خطا میداد\nدوماه پیگیری کردم ولی به جای نرسید',0,'2025-05-05 12:32:37','2025-05-05 12:31:25','2025-05-05 12:31:25'),(107,815,-220952910,97311163,'تجربه سرویس کالانو سیمرغ تجارت\nپیاده سازی سرویس اعتباری برای( نمایندگی ها) و آنلاین که با سرویس crm داخلی در تعامل بود و از اعتبار مشتریان کسر میکرد',0,'2025-05-05 12:35:29','2025-05-05 12:34:16','2025-05-05 12:34:16');
/*!40000 ALTER TABLE `telegram_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telegram_users`
--

DROP TABLE IF EXISTS `telegram_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telegram_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `is_bot` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5838147287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telegram_users`
--

LOCK TABLES `telegram_users` WRITE;
/*!40000 ALTER TABLE `telegram_users` DISABLE KEYS */;
INSERT INTO `telegram_users` VALUES (97311163,'نیکا',NULL,'Hi191919191',0,'2024-12-13 21:32:22','2024-12-13 21:32:22'),(450387848,'H.Iranshahi','.','h_iranshahii',0,'2024-12-15 22:42:57','2024-12-15 22:42:57'),(5838147286,'نه',NULL,NULL,0,'2024-12-27 12:44:14','2024-12-27 12:44:14');
/*!40000 ALTER TABLE `telegram_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','admin@gmail.com','2024-08-01 11:19:07','Ij8mahRiKV0l9RYf1rf1F9s0EUcVW5nVaecftHMf3IJNw8o0Q8OZ8D8c8bff',NULL,'2024-01-30 22:46:59',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-14 20:55:55
