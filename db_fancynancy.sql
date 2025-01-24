-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 09:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fancynancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'CREME AND TONIC'),
(2, 'BIO OIL'),
(3, 'ST. IVES'),
(4, 'COSRX'),
(5, 'BIODERMA'),
(6, 'NACIFIC'),
(7, 'ARTISAN PROFESSIONNEL'),
(8, 'STUDIO TROPIK'),
(9, 'EMINA'),
(10, 'COLAB DRY SHAMPOO'),
(11, 'DANCOLY'),
(12, 'BONAVIE'),
(13, 'HMNS'),
(14, 'MINERAL BOTANICA'),
(15, 'BIORE'),
(16, 'TEDDY CLUBS'),
(17, 'Whitelab'),
(18, 'SUKIN'),
(19, 'INNISFREE'),
(20, 'MIRAEL'),
(21, 'NIVEA'),
(22, 'MAKARIZO'),
(23, 'LAVOJOY'),
(24, 'CARESO'),
(25, 'JACQUELLE'),
(26, 'SAFF & CO'),
(27, 'BEAUTY SECRETS'),
(28, 'LAE SA LUAY'),
(29, 'LOREAL PARIS'),
(30, 'PANTENE'),
(31, 'TAKEDA'),
(32, 'TAMMIA'),
(33, 'ESQA'),
(34, 'HOLIKA HOLIKA'),
(35, 'MAKE OVER'),
(36, 'MAYBELLINE'),
(37, 'NATURE REPUBLIC'),
(38, 'ETUDE'),
(39, 'AVOSKIN'),
(40, 'SKINTIFIC'),
(41, 'DEAR ME BEAUTY'),
(42, 'SKIN1004'),
(43, 'Harlette');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qty`) VALUES
(30, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'MAKE UP'),
(2, 'BODY CARE'),
(3, 'FRAGRANCE'),
(4, 'HAIR CARE'),
(5, 'SKINCARE');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `discount_percent` int(11) NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `category_id`, `description`, `price`, `discount_percent`, `stock`, `image`) VALUES
(1, 'Balsa Body Wash', 1, 2, 'BALSA Body Wash is a deeply cleansing body wash with a calming and effective formulation of Giant Sea Kelp Extract. This gentle body wash is enriched with Aloe Vera, and aromatic notes from Geranium Leaf Oil, Lavender Oil and Cedarwood Atlas Oil to impart a calming herbal aroma.\r\n\r\nHow to Use:\r\nDispense into damp hands, massage onto soaked skin from neck to toe, then rinse thoroughly. Combines best with it’s counterpart, Marine Botanical Crème.\r\n\r\nIngredients:\r\nWater, Glycerine, Cocamidopropyl Betaine, Potassium Cocoate, Sodium Lauryl Ether Sulfate, Lauryl Betaine, Aloe Vera, Giant Sea Kelp Extract, Cedarwood Oil, Clove Leaf Oil, Geranium Oil, Orange Oil, Patchouli Oil, Lavandin Oil, Cinnamon Leaf Oil, Aniseed Oil, Elemi Oil, Eucalyptus Oil, Rosemary Oil, Mandarin Oil, Benzyl Alcohol.', '99000', 15, 201, '07e7d65c39ec44a6c263ddc8be087fc1.png'),
(2, 'Bio-Oil', 2, 2, 'Spesialis produk perawatan kulit yang diformulasikan untuk membantu menyamarkan bekas luka, stretch marks dan warna kulit yang tidak merata. Formulasi uniknya juga sangat efektif pada penuaan kulit dan kulit kering.\r\nHow to Use :\r\nOleskan dua kali sehari selama minimal 3 bulan. Selama kehamilan oleskan dua kali sehari mulai dari awal trimester kedua.\r\nIngredients :\r\nCalendula, Lavender, Rosemary, Chamomile, Vitamin A, Vitamin E, Purcellin Oil', '256000', 0, 167, '954d3d52ab830a9cc3d2ce39eb42aa44.jpg'),
(3, 'Body Wash Exfoliating Apricot', 3, 2, 'St. Ives Apricot Exfoliating Body Wash 473ml merupakan body wash yang terbuat dari 100% ekstrak Apricot Oil alami. Minyak aprikot ini berasal dari aprikot yang tumbuh di kebun buah-buahan Spanyol. Body wash ini diformulasikan untuk meregenerasi kulit, sehingga menghasilkan kulit yang halus & bercahaya. Dibuat tanpa paraben dan telah diuji oleh Dermatologist. Cocok untuk kulit sensitif. Sabun mandi yang mengangkat kulit mati secara halus dengan minyak inti biji aprikot alami.', '87500', 28, 238, '051083ff34d2a87896d5f4e186dd342c.png'),
(4, 'Acne FREE Bundle', 4, 5, '1. Salicylic Acid Daily Gentle Cleanser\r\nPembersih wajah berbentuk busa dengan kandungan Salicylic Acid yang berfungsi melawan jerawat dan mengurangi kelebihan minyak berlebih diwajah. Cocok untuk kulit berjerawat, acne prone, kulit sensitif dan kombinasi karena menggunakan Botanical Ingredients (bahan alami). Mengandung tea tree oil yang juga berfungsi merawat kulit yang cenderung berjerawat Produk ini mampu mengeksfoliasi kulit mati serta merawat kulit wajah agar tetap kencang tanpa terasa kering.\r\n\r\n2. Centella Blemish Cream\r\nSpot treatment ini digunakan untuk mengatasi masalah jerawat baik yang aktif maupun untuk bekas jerawat. Krim berkosentrasi tinggi yang mengandung semua bahan alami. Krim ini membantu mengurangi tanda bekas jerawat dan merawat kulit yang sensitif. \r\n\r\n3. Acne Patch\r\nPlester hidrokoloid yang secara intensif mengekstraksi jerawat & melindungi dari bahaya kotoran luar. Berukuran sangat tipis & tampak natural seamless untuk menutupi jerawatmu.', '513000', 40, 219, '8625ef153b272944a584780c2267bd21.png'),
(5, 'Atoderm Creme 200 ml FREE Bioderma Sensibio H2O 250 ml', 5, 5, 'Bundle terdiri dari: Bioderma Atoderm Creme 200 ml FREE Bioderma Sensibio H2O 250 ml &\r\n\r\nAtoderm Crème\r\n\r\nPelembab tubuh dan wajah untuk merawat, melindungi dan menutrisi kulit. Skin Protect Complex ™️ adalah paten Bioderma yang mengandung vitamin PP (Niacinamide) serta komposisi dua jenis gula yang secara fisik dan biologis membantu menjaga kadar kelembaban alami kulit:\r\n- Vitamin PP (Niacinamide) membantu memperbaiki struktur pelindung alami kulit dengan cara menstimulasi sintesis lipid. Hal ini dapat membantu meningkatkan kekenyalan kulit dan kenyamanan pada kulit.\r\n- Kombinasi gula membantu mengoptimalkan cadangan air kulit serta memfasilitasi sirkulasi air dalam lapisan kulit dengan meningkatkan produksi aquaporin (saluran air). Aktivitas ini membantu memaksimalkan hidrasi pada kulit selama 24jam*.\r\n- Kehadiran glycerine dan vaseline membantu memberi kelembaban yang lebih optimal dengan menarik air dari lingkungan sekitar kulit.\r\n- Gabungan komposisi dalam paten D.A.F ™️ membantu meningkatkan kadar toleransi alami kulit.\r\n\r\nSensibio H2O\r\n\r\nMicellar water untuk kulit sehat, bersih dan nyaman, bebas dari make-up dan polusi.\r\nSensibio H2O adalah pembersih wajah untuk kulit sensitif dalam format micellar water untuk membersihkan wajah dan menghapus make-up.\r\nTerbentuk dari bola - bola misel dengan efektifitas yang sangat baik dalam menghapus make-up serta membersihkan wajah, Sensibio H2O micellar water membersihkan secara mendalam di pagi dan malam hari dan mencegah masuknya polutan yang berpotensi memperburuk iritasi pada kulit.\r\nTeknologi micellar yang dikembangkan oleh Laboratoire BIODERMA sendiri terinspirasi dari lipid seluler yang ditemukan di kulit. Dengan unsur molekul yang menyerupai kulit, Sensibio H2O micellar water membantu melindungi lapisan pertahanan kulit. Diformulasikan sesuai dengan pH alami kulit 5,5, Sensibio H2O micellar water menghormati keseimbangan biologis kulit yang sangat penting untuk menjaga kesehatan kulit.\r\nSelain itu, Sensibio H2O micellar water membantu menenangkan kulit dan mencegah risiko terjadinya inflamasi kulit karena dalam pembuatannya digunakan pharmaceutical-grade highly purified water. Di dalamnya juga terdapat kombinasi 3 biomimetic soothing sugars yang membantu mengurangi kemungkinan terbentuknya inflamasi.', '565000', 40, 317, 'e1c79a0b6a099abc4c5e83c73b0e23bc.png'),
(6, 'Fresh Herb Origin Skin Care Kit', 6, 5, 'Solusi untuk menutrisi kulit kering menjadi lembut dan kencang. Kit terdiri dari:\r\n- NACIFIC Fresh Herb Origin Cleansing Foam Skin Care 30 ml\r\n- NACIFIC Fresh Herb Origin Toner Skin Care 30 ml\r\n- NACIFIC Fresh Herb Origin Serum Skin Care 10 ml\r\n- NACIFIC Fresh Herb Origin Cream Skin Care 20 ml', '402900', 49, 415, '00d5b432d2319791358c36e7f07f09ff.png'),
(7, 'Touche 3D Lashes', 7, 1, 'Made from Premium Synthetic Hair with extra flexible nylon strand. Use the foremost inovation 3D curl with decorative design for daily to glamorous look.\r\nNOTICE: Each piece of this product is handmade. Please take extra caution when handling them as they are extremely fragile.\r\nHOW TO USE :\r\n\r\nGently remove false eyelashes from the platform and apply a few drops of eyelash adhesive to the bottom edge of the false lashes. Apply the false lashes above your eyelashes along your natural upper lash line, pressing lightly from the outside towards the inner corner of the eye. Wait for 5-6 seconds for the adhesive to dry. To remove, gently pull off starting from the outer corner, pulling inwards inner corner of eyes. Reusable.', '50000', 0, 324, '67c1c4451d67eb88a0f335127b0fd413.jpg'),
(8, 'Dreamsetter Glowy Setting Spray', 8, 1, 'Studio Tropik DreamSetter Glowy Pollution Protection Make-up Setting Spray\r\n\r\nMembantu make-up bertahan lebih lama dan tidak mudah pudar sepanjang hari hingga 16 jam\r\nMengandung ekstrak Plant Cell dari tanaman Marrubium vulgare yang dapat melindungi kulit dari polusi debu, asap, dan partikel kotoran. Dengan tambahan Glowy Particles Infusion, kulit wajah dan make-up terlihat fresh dan glowy sepanjang hari.\r\nAlcohol-Free: Mengandung 0% alkohol, aman untuk kulit\r\nTeknologi Micro Mist: Menggunakan sprayer baru yang menghasilkan butiran lebih halus sehingga aplikasi produk pada wajah lebih merata\r\n*Teruji secara in vitro oleh Laboratoire Sederma di Perancis', '194250', 20, 312, 'ec69e8db1658c5198010385cb91ab30a.jpg'),
(9, 'Daily Matte Cushion', 9, 1, 'Emina Daily Matte Cushion adalah satu-satunya cushion dari Emina memiliki keunggulan sebagai berikut:\r\n - Healthy-matte skin-like finish: hasil akhir matte yang tampak sehat, ringan dan menyatu sempurna dengan kulit (tampak natural)\r\n - Quick oil control complexion: cushion foundation yang praktis, mudah diaplikasikan dengan oil absorber yang dapat menahan sebum/minyak instan untuk hasil flawless sejak lapisan pertama\r\n - 8 hours medium buildable long lasting coverage: selama 8 jam dapat memberikan coverage yang medium dan dapat di build sesuai keinginan\r\n \r\n Keunggulan:\r\n - Healthy-matte finish\r\n - Ringan\r\n - Oil control\r\n - SPF 25 PA++\r\n - Breathable\r\n - Tidak membuat kering\r\n - Medium buildable coverage', '93500', 15, 418, '73fada65935dc59bd4b0169eb131b544.png'),
(10, 'Dry Shampoo Original', 10, 4, 'Cara Baru dalam Membersihkan Rambut!\r\nCOLAB Dry Shampoo adalah Multi Award Winning Dry Shampoo yang berasal dari UK. Sudah hadir di 37 Negara dan kini Tersedia di Indonesia!\r\nCOLAB Dry Shampoo membantu mengurangi dan menyerap minyak berlebih pada rambut dan kulit kepala. Mengunakan formula khusus, COLAB Dry Shampoo TIDAK meninggalkan serbuk putih seperti merk dry shampoo lain dan di sebut Invisible Formula Dry Shampoo.\r\n\r\n• Aman untuk Ibu Hamil, Cocok digunakan setelah melahirkan\r\n• Aman untuk Anak-anak\r\n• Aman dan nyaman digunakan untuk hijabers\r\nVarian: Original\r\n- Bergamot & Rose Scent (One of our best seller in the world!)', '151000', 22, 416, '1d8343b2bafdbc365886c4c0a857ecb9.png'),
(11, 'Argan Repair Oil', 11, 4, 'Anda sering memiliki aktifitas diluar ruangan? Rambut jadi kering dan kusam akibat terkena sinar matahari? atau Anda sering menggunakan hair dryer atau catokan? Ini solusi yang cocok untuk mengatasi masalah pada rambut tersebut. Argan Repair Oil merupakan Serum rambut yang berfungsi untuk membuat rambut menjadi lebih lembut, lebih berkilau dan sehat, terutama untuk rambut yang setiap harinya terkena panas dari catokan, hairdryer, dan polusi udara\r\nArgan oil diambil/diekstrak dari pohon argan yang tumbuh di Morocco di mana orang-orang pada zaman tersebut sudah memakai argan oil untuk rambut mereka dari generasi ke generasi.Dilengkapi juga dengan vitamin E yang berfungsi untuk memperbaiki rambut rusak, bercabang, dan kering serta dapat untuk mengeliminasi/menghilangkan ketombe dan minyak berlebih pada rambut. Argan oil juga disebut sebagai supplement rambut yang menyehatkan dari dalam, serta untuk melindungi rambut dari serangan UVA/UVB\r\n\r\nCocok untuk dipakai sebelum di styling, catok, gel, wax ,setelah pewarnaan, dan argan oil yang asli tidak berminyak di tangan\r\nCara penggunaan :\r\nSetelah keramas, dengan keadaan rambut setengah kering, ambil sekitar 2-3 pump, gosokan kepada kedua telapak tangan, lalu di pakaikan ke ujung-ujung rambut. Setelah itu boleh dikeringkan atau distyling. Tidak untuk pemakaian pada kulit kepala.', '269000', 15, 512, '1e8ba81f3bfd9e9cc0848aae74aa9cbd.jpg'),
(12, 'Rosemary Hair Activating Shampoo', 11, 4, 'Mengandung rosemary essence yang data secara efektif membantu memperbaiki mikrisirkulasi kulit kepala, menutrisi dan meningkatkan aktivitas folikel rambut.\r\n\r\nKandungan yang terdapat pada shampoo ini pun dapat membangun kembali sel pada rambut dan memberikam protein pada rambut serta gizi pada akar untuk mengurangi kerontokan rambut sementara memperbaiki rambut rusak.\r\n\r\nRambut menjadi lebih kuat, sehat, dan bercahaya.\r\n\r\nNatural Komposisi: rosemary leaf oil, ginger root extract, sage oil\r\n\r\nmanfaat rosemary: Minyak rosemary dapat mengatur fungsi cortex rambut dan menstimulasi regenerasi dengan merangsang sirkulasi darah dari kulit kepala.', '219000', 14, 565, 'fa18c5c4b71296912b5056db3cdb8b0e.jpg'),
(13, 'Body Mist - Fleur du Jardin', 12, 3, 'Terinspirasi dari wewangian taman bunga di Perancis dalam kehangatan cahaya musim panas,serta keharuman bunga oriental yang sangat sulit ditolak\r\nBonavie Body Mist, dengan parfum mewah dari Paris memberikan wangi segar yang tahan hingga 8 jam*. Dilengkapi dengan Odor Block Technology yang efektif mengurangi bau tidak sedap pada tubuh, pakaian, dan hijab. Kandungan Aloe Vera Water membantu melembutkan kulit, membuat Bonavie Body Mist aman disemprotkan pada kulit tanpa membuat kulit kering.\r\n\r\nCara Penggunaan :\r\nSemprotkan Bonavie Body Mist ke seluruh tubuh/ pakaian/ kapanpun anda ingin.', '23800', 25, 612, '0f0001f6eb5b788db381004a361b3a59.png'),
(14, 'Drops of Sunshine Hair & Body Mist', 13, 3, 'Bagaimana kalau kami mengekstraksi matahari? Terinspirasi dari keindahan Dewi Fajar, EᴼS. Sebuah parfum bertipe bunga oriental & gourmand yang menggugah selera. Top notes dibuka dengan wangi coriander yang meningkatkan suasana hati. Lalu muncul keharuman bunga melati yang indah. Hingga akhirnya perjalanan ditutup dengan kenikmatan wangi vanilla.\r\n\r\nPerforma\r\nKetahanan: 2 - 3 jam\r\nDaya jejak: Medium\r\nProyeksi: 1 - 2 meter\r\n\r\nHow to Use:\r\nSemprotkan dengan jarak 20cm ke rambut dan tubuh dalam keadaan kering maupun basah. Re-spray 2-3 jam sekali sesuai kebutuhan. Hindari menempatkan Hair & Body Mist di suhu yang panas (terkena sinar matahari, ditinggal di bagasi kendaraan). Supaya kualitasnya terjaga, letakkan di tempat gelap seperti di dalam lemari dll. ', '145000', 0, 541, '57edeed4f248e667540c6db1942089d1.png'),
(15, 'Eau De Toilette', 14, 3, 'Mineral Botanica Eau De Toilette membuat anda merasa segar sepanjang hari, EDT kami memiliki wangi yang tahan lama, terdiri dari berbagai macam rangkaian rempah, bunga dan buah-buahan.\r\n\r\nBahan-bahan: Alcohol, Aqua, Fragrance, PEG-40 Hydrogenated Castor Oil, Hexamethylindanopyran, DMDM Hydantoin.\r\n*Alcohol yang digunakan bukan dari Industri minuman keras (Khamr) dan sudah disetujui LPPOM MUI, sehingga produk kami bisa disertifikasi halal.\r\n\r\nCara Pakai\r\n• Semprotkan EDT setelah mandi.\r\n• Pusatkan ke titik nadi saat menyemprotkannya, seperti area pergelangan tangan, belakang telinga atau leher.\r\n• Jangan gosok EDT yang sudah menempel di area tubuh karena akan membuatnya lebih cepat menguap.', '85000', 15, 671, '5ad4d911a03ea1c039cb9ea07ceb9913.jpg'),
(16, 'Bright Body Foam Pouch', 15, 2, 'Biore Body Foam 450 mL\r\nA Relaxing Glowing Soft Skin!\r\nBiore Body Wash Formula Baru dengan keunikan Cleansing Foam menjadikan kulit lembut berkilau (Glowing Soft).\r\nPerpaduan Technology Skin Purifying Technology (SPT) dari Jepang dan Cleansing Mineral menjadi Cleansing Foam yang mengangkat bersih kotoran dan minyak hingga ke pori.\r\nBusa Creamy yang lembut melimpah\r\nKulit cantik dan lembut berkilau\r\nTerdiri dari dua variant,Lewat sensasi wangi “Jasmine Aroma Blend”, kamu dan kulitmu lebih rileks. Rasakan nyamannya sentuhan kulit lembut berkilaumu. atau Rasakan sensasi mandi yang lembut bikin happy! Dengan “Yogurt Extract”, kulitmu jadi lebih lembut dan lebih berkilau.', '28000', 30, 652, 'd59f4a23c7d69ffc54d30eab70fbf06b.png'),
(17, 'Bright Hero Body Wash', 16, 2, 'Body wash yang membersihkan dan juga membantu menjaga kelembaban kulit. Diperkaya dengan Vitamin C sebagai antioksidan untuk memberikan perlindungan pada kulitmu. Nikmati sensasi yang menenangkan dengan Bright Hero Body Wash dengan formula Algae Extract dan Vitamin B3 yang membantu kulitmu tampak lebih cerah alami. Dengan kandungan Aloe Vera untuk membantu kulit terasa halus dan lembut \r\nHow to Use:\r\nTuangkan secukupnya pada telapak tangan atau shower puff. Busakan ke seluruh tubuh secara merata. Biarkan kurang lebih 30 detik agar busa bekerja optimal. Bilas hingga bersih.\r\nIngredients:\r\nAqua, Cocamide MEA, Glycerin, Aloe Barbadensis Leaf Extract, Niacinamide, Propanediol, Ethyl Ascorbic Acid, Glycol Distearate, Sodium Chloride, Phenoxyethanol, Butylene Glycol, 1,2-Hexanediol, Fragrance, Gellan Gum, Hydrolyzed Algae Extract. ', '90000', 19, 619, '75ed21192e5274d9eda4dac91707f9c5.png'),
(18, 'Brightening Body Serum', 17, 2, 'Whitelab Brightening Body Serum adalah serum untuk tubuh yang membantu mencerahkan kulit, menyamarkan noda gelap, serta merawat kehalusan dan kelembaban kulit.\r\nHow to use:Ambil sedikit cream dan oleskan ke seluruh tubuh. Gunakan 2 kali sehari, pagi dan malam hari. Teksturnya cair, mudah meresap ke dalam kulit, dan tidak meninggalkan residu.\r\nSuitable for: Semua jenis kulit\r\nIngredients:\r\n- Niacinamide: Membantu mencerahkan kulit, menyamarkan noda gelap, dan membantu mengurangi minyak berlebih\r\n- Hyal Complex-10: Kombinasi 10 molekul Hyaluron yang dapat meningkatkan dan mempertahankan level hidrasi pada lapisan kulit yang berbeda.\r\n- Marine Collagen: Merawat kehalusan dan kelembaban kulit', '67000', 0, 651, 'd76ae1d0260153ba764c8860d5117efd.png'),
(19, 'Hydrating Body Lotion Lime & Coconut 500ml', 18, 2, 'Sukin, brand skin care & personal care natural dari Australia, yang berkomitmen untuk hanya menggunakan bahan-bahan alami, kemasan dan proses produksi pilihan yang terbukti efektif, lembut dan baik untuk kulit, hewan dan Bumi.\r\n\r\nProduk Sukin terbuat dari 99% natural ingredients, formulasi 100% vegan dan cruelty free, menggunakan recyclable packaging.\r\n\r\nHydrating Body Lotion Lime & Coconut\r\n- Hydrating body lotion yang efektif melembabkan dan menutrisi kulit.\r\n- Aroma mewah dan menenangkan berasal dari ekstrak tumbuhan.\r\n- Dapat digunakan untuk semua jenis kulit.\r\n- Mengandung bahan alami berkualitas: cocoa butter, shea butter, avocado oil dan rosehip oil\r\n\r\nHow to Use:\r\n- Keluarkan lotion secukupnya dan oleskan pada kulit dalam kondisi lembap\r\n- Untuk hasil terbaik, aplikasikan pada kulit yang lembap setelah menggunakan Sukin Body Wash', '209000', 30, 782, 'e75d48ba47c0ba459e6be78f5e6733ca.png'),
(20, 'My Perfumed Body Cotton Flower Body Cleanser', 19, 2, 'Body lotion yang menawarkan pengalaman perawatan tubuh yang menyenangkan dengan wewangian sehingga terasa membebaskan diri seperti berada di Jeju.\r\n\r\nPerkenalan Produk\r\n1. Body lotion dengan resep berbagai aroma dari Jeju\r\nDengan aroma yang kaya seperti memakai parfum membuat kulit tubuh tetap wangi\r\n2. Mengandung 3 jenis butter yaitu shea butter, mango butter dan cocoa butter sehingga dapat menjaga kelembaban kulit sepanjang hari\r\n3. Menjaga kelembaban tanpa terasa lengket\r\nTekstur yang dapat diserap oleh kulit dengan lembut tanpa terasa lengket sehingga kulit menjadi lebih lembab\r\n\r\nHow to Use:\r\nSetelah mandi, aplikasikan produk secukupnya ke seluruh badan yang sudah bersih dan dikeringkan sambil beri sedikit pijatan lembut.', '229000', 15, 561, 'bf9d5830ff4af66dd499e191d97629ff.png'),
(21, 'Rose Tea Sugar Scrub', 20, 2, 'Rose Tea Sugar Scrub dilengkapi dengan kandungan 4 Hyaluronic Acid & Vitamin E mampu menghidrasi kulit dengan maksimal\r\n\r\nEksfoliasi 3 hari sebelum waxing dan 3 hari setelah waxing dapat menghaluskan kulit, mengangkat sel kulit mati sehingga mencerahkan dan mencegah ingrown hair\r\n\r\nManfaat:\r\n1. Kandungan minyak alami mampu menutrisi kulit selama 24 jam.\r\n2.Eksfoliasi kulit secara lembut dengan hasil maksimal dengan kandung minyak Avocado Oil, Argan Oil,  Macadamia Seed Oil, Olive Fruit Oil\r\n3. Collagen yang terkandung mampu mengencangkan kulit.\r\n4. Pemakaian rutin bantu kulit tampak lebih cerah.\r\n \r\nCara Pemakaian :\r\n1. Balurkan Sugar Scrub secukupnya ke seluruh permukaan tubuh terutama pada lipatan kulit.\r\n2. Diamkan 2-3 menit lalu gosok perlahan dengan gerakan melingkar.\r\n3. Setelah dirasa cukup, bilas tubuh dengan air bersih.\r\n4.Gunakan body scrub ini 1x dalam seminggu untuk kulit cerah, bersih, dan sehat.\r\n\r\nSaran Penyimpanan:\r\nSimpan terhindar dari sinar matahari dengan suhu ruangan.\r\n\r\nIngredients:\r\nSucrose,Propylene Glycol, Glycerin,Castor Oil, Aqua, Fragrance, Lactobacillus/Collagen/Mesembryanthemum Crystallinum Leaf Extract Ferment Lysate, Ammonium Acryloyldimethyltaurate, Hexamethylindanopyran, Diethyl Phthalate, Tocopheryl Acetate, Phenoxyethanol, Sunflower Seed Oil, Ethylhexyl Methoxycinnamate ,Polyglutamic Acid, Butylene Glycol, Butyl Methoxydibenzoylmethane, Ethylhexyl salicylate, 1.2-hexanediol, Coconut Oil, Linseed oil, Sodium Hyaluronate, ci 16255,  Hydroxypropyltrimonium Hyaluronate, Hydrolyzed Hyaluronic Acid,  Ethylhexylglycerin, Avocado Oil, Argan Oil,  Macadamia Seed Oil, Olive Fruit Oil, Rosemary Leaf Extract, Sodium Acetylated Hyaluronate\r\n\r\nNo BPOM: NA18220700076', '99000', 0, 712, '4f6ba79b07ea15342908c1186086a8e9.png'),
(22, 'Soft Jar', 21, 2, 'NIVEA Soft adalan krim pelembab yang intensif dan efektif untuk digunakan sehari-hari. Formulanya yang ringan dengan Vitamin E dan Jojoba Oil sangat mudah terserap dan menyegarkan. Nikmati rasa segar serta kulit lembut dan kenyal. Terbukti aman untuk kulit. \r\n\r\nHow to Use:\r\n1. Gunakan ke seluruh tubuh secara merata dengan lembut.\r\n2. Keringkan beberapa saat sebelum menggunakan baju\r\n3. Re-aplikasi 4-5 jam sekali untuk hasil yg lebih optimal\r\n4. Gunakan secara teratur untuk hasil lebih maksimal', '31500', 8, 318, '545f5d70c3bdc8c6397b8e50a8bf2f5e.png'),
(23, 'Texture Experience Youth Regenerating Body Scrub Green Tea', 22, 2, 'Texture Experience Youth Regenerating Body Scrub merupakan perawatan tubuh yang mampu mengangkat sel-sel kulit mati sehingga kulit terlihat lebih bersih, sehat dan cerah.\r\n\r\nAroma Daun Teh Hijau yang segar dan mengandung kafein dan l-theanine mampu menstimulasi pikiran dan regenerasi sel kulit baru sehingga membuat kulit tampak awet muda, kenyal dan segar.\r\n\r\nLPPOM 00150097170719\r\nKapasitas Pemakaian Produk:\r\nSatu pot Texture Experience Body Scrub 500ml dapat digunakan untuk 5x aplikasi full body.\r\nKandungan:\r\n-MACADAMIA & SUNFLOWER OIL\r\nMembantu menjaga kelembaban kulit secara lebih optimal.\r\n-ALOE VERA EXTRACT\r\nMembantu menenangkan serta membantu menjaga kulit tetap halus dan lembut.\r\n-VITAMIN E\r\nMerupakan pelembab alami untuk menjaga kelembutan, kelembaban dan kehalusan kulit.', '364400', 26, 671, '2d3f5f8c048523132168cb2f11e8b338.png'),
(24, 'Flora\'s Whisper Body Perfume', 23, 3, 'A refreshing and uplifting mist with floral scent. Spray the mist all over your skin and take a moment to enjoy the fragrance.\r\n\r\nHighlights:\r\n1. Premium fragrance\r\n2. Gentle on the skin\r\n3. Sweat defender/Sweat-repelling formula\r\n\r\nSea Of Stars\r\nWith mysterious oriental glamour notes and a strong yet surprisingly fresh character, Sea of Stars is an expression of sensuality and classic rock.\r\nTop: Leaf, Floral Green\r\nMiddle: Musk, Rose, Gerbon\r\nBase: Amber, Ambergris Vanilla', '89000', 6, 451, '4a5fe3355d2f1627d0698c601862d572.png'),
(25, 'French Vanilla', 24, 3, 'Body Fragrance: Racikan khusus Careso dibuat dari Ekstrak vanila yang kaya akan krim dan dicampur dengan kelembutan susu kelapa organik. Wangi tahan 6-8 Jam setelah pemakaian.\r\nPenggunaan yang disarankan untuk hasil yang optimal:\r\nSemprotkan 3x di pergelangan tangan (kiri & kanan), 2x di leher dan semprotkan 4-5x di seluruh tubuh Anda. ulangi setiap 3 jam untuk mendapatkan dosis kebahagiaan ekstra.\r\nAlcohol Denat, Water, Fragrance (Limonenes, Hydroxycitronellal, rose ketones), Propylene Glycol, PEG-40 Hydrogenated Castor Oil. May contains: CI 77489, CI 77491, CI 77492, CI 77499', '54000', 25, 457, '4d6e147b9536f8a40015c0867a47c81e.png'),
(26, 'Jacquelle Parfume Elegant Eau De Parfume SPY X FAMILY Collection', 25, 3, 'Jacquelle Elegant Eau De Parfum - SPY X FAMILY Collection\r\n• 33ml eau de parfum dengan wangi yang tahan lama\r\n• Kolaborasi perfume pertama di dunia dengan SPY X FAMILY\r\n• Unisex & cocok digunakan di luar atau dalam ruangan\r\n• Dapat di layer dengan wewangian yang lain\r\n\r\n\r\nJacquelle Elegant Eau De Parfum memiliki aroma berkarakter, yang dapat mencerminkan keindahan dan keanggunan hati pemakainya. Harmonisasi dari tiga, yang menciptakan aroma nyaman dan elegan. Paduan antara esensi segar dari buah jeruk, wangi musim semi, dan aksen musk yang hangat. Komposisi parfum ini akan mengingatkanmu dengan rumah.\r\n\r\nFragrance Notes :\r\nTop Notes : Fresh Lime, Sweet Lemon\r\nHeart Notes : Tender Rose, Sensual Jasmine\r\nBase Notes : Subtle Musk, Warm Benzoin\r\n\r\nFragrance Performance :\r\nLongevity : 8 hours (for outdoor occasion, we suggest to re-spray Jacquelle Elegant twice a day)\r\nSillage : Strong\r\nProjection : 4 - 5 meters', '199000', 18, 541, 'bf593be06c25d5fbd8f6fc716de00e66.png'),
(27, 'Loui - Extrait De Parfum', 26, 3, 'Light & Clean | Charming & Romantic\r\nCharacter | Fresh, Floral, Tropical\r\nTop Notes | Verbena, Green, Aldehydic\r\nMiddle Notes | Rose, Peony, Lily of the Valley\r\nBase Notes | Cedarwood, Musk\r\nKami bertujuan untuk memberikan pengalaman penciuman yang luar biasa bagi semua orang yang ingin menemukan aroma khas mereka sendiri.\r\nKemasan yang akan dikirimkan random tergantung ketersediaan.\r\nHow to Use:\r\nSemprotkan di urat nadi tangan, area leher belakang dan telinga. Spraying ke baju diberi jarak 15-20cm', '249000', 15, 762, '25db6507fb8641f8cfbd95216e10cbee.png'),
(28, 'Raspberry Souffle', 24, 3, 'Body Fragrance: Aroma segar yang menarik dari souffle raspberry dengan sentuhan manis pir Doyenne du Comice. Inspirasi untuk aroma ini dihasilkan dari perpaduan aroma buah dan bunga Jasmine dan Rose.  Wangi tahan 6-8 Jam setelah pemakaian\r\nPenggunaan yang disarankan untuk hasil yang optimal:\r\nSemprotkan 3x di pergelangan tangan (kiri & kanan), 2x di leher dan semprotkan 4-5x di seluruh tubuh Anda. ulangi setiap 3 jam untuk mendapatkan dosis kebahagiaan ekstra.\r\nAlcohol Denat, Water, Fragrance (Cinnamal, rose ketones, Limonenes), Propylene Glycol, PEG-40 Hydrogenated Castor Oil.\r\nMay contains:\r\nCI 77489, CI 77491,\r\nCI 77492, CI 77499', '54000', 25, 324, '53361fbc848725081c09f4cd369fd293.png'),
(29, 'S.O.T.B Extrait de Parfum', 26, 3, 'S.O.T.B dirancang dengan perpaduan menarik dari mandarin ,sweet floral notes, dan mencapai vanilla musk. Aroma tropis ini akan mengingatkan Anda pada angin laut yang hangat, pasir lembut, dan pohon palem yang rimbun di hari musim panas\r\nTop Notes | Mandarin, Galbanum, Ylang\r\nMiddle Notes | Tuberose, Jasmine, Orange flower\r\nDry-down | Vanilla, Tonka bean, Musk\r\nHow to Use:\r\nSemprotkan di urat nadi tangan, area leher belakang dan telinga. Spraying ke baju diberi jarak 15-20cm', '299000', 15, 415, 'ced7b47cace07dd371cfff2641d67043.png'),
(30, 'Sweet Pea Fragrance Mist', 27, 3, 'Fragrance mist ini mampu memberikan wangi yang manis dan menyegarkan pada tubuh Anda. Cocok untuk digunakan sehari-hari.Rasakan kemewahan wewangian, campuran formula yang menyegarkan dari Sweet Pea, Watery Pear, Logan Berry, Rhubarb Cyclamen, Freesia, dan Raspberry Musk. Semprotkan untuk sentuhan aroma yang seksi.\r\n\r\nHow to Use:\r\nSemprotkan pada bagian tubuh yang lebih hangat seperti pergelangan tangan, siku bagian dalam, semprot dengan jarak 30 centimeter', '200000', 50, 435, '858c73370d14a03027fd5abceacbde52.png'),
(31, 'Hair Energy Scentsations Hair Fragrance', 22, 4, 'Rambut suka bau dan lepek sehabis makan sate di pinggir jalan? Terpapar matahari karena kerja lapangan seharian? Atau sehabis pakai helm dan terpapar asap kendaraan waktu berangkat kerja? Makarizo Hair Energy SCENTSATIONS hadir menjadi solusi untuk kamu yang ingin rambut TETAP WANGI dan BERKILAU! Dengan teknologi SCENTECH-F yang mampu MENETRALISIR BAU TIDAK SEDAP serta dilengkapi dengan VITAMIN dan UV-PROTECTION!\r\nFRESH BOUQUET untuk rambut wangi seperti bunga dan dedaunan yang bikin kamu tetap \r\nKemasan yang akan dikirimkan random tergantung ketersediaan.\r\nP.S. Bisa digunakan untuk tubuh juga lho! Perhatian! Hindari terkena mata, segera bilas dengan air hingga mata tidak terasa perih.', '41300', 26, 791, '01f664352aeaf1b49b48de3551dadc96.png'),
(32, 'HAIR SPA SMOOTH KERATIN', 28, 4, 'LAE SA LUAY SPA SMOOTH KERATIN\r\nHASIL MENAKJUBKAN\r\nTerlihat dalam 1x pemakaian\r\nKrim rambut 100% thailand dengan komposisi bahan alami dan kaya vitamin.\r\nFungsi & kegunaan :\r\n- Anti lepek\r\n- Menjaga kekuatan rambut (tidak mudah patah)\r\n- Memperbaiki rambut bercabang & kering\r\n- Mengurangi ketombe\r\n- Mengilatkan rambut secara natural & tidak berminyak\r\n- Merawat kondisi rambut atau menutrisi rambut\r\nCocok untuk semua jenis rambut\r\nSUPER wangi tahan 24 jam', '75000', 14, 526, '2d98839f6e785368998425b4b96d3ddf.png'),
(33, 'Extraordinary Oil Pink Hair Serum', 29, 4, 'Extraordinary Oil dari LOreal Paris adalah serum perawatan rambut intensif. Rambut akan secara intensif ternutrisi, dan terlindungi, dan memberikan hasil rambut yang halus, lembut, tampak berkilau, tanpa memberikan hasil akhir yang lepek secara seketika.\r\nRambut tampak sempurna, seketika!\r\nMenggunakan formula yang diperkaya dengan French Rose Oil, teresap hingga ke dalam batang rambut, merawat kelembaban sampai inti rambut dan memberikan kilau.\r\n\r\nBENEFIT:\r\nLebih dari sekedar vitamin rambut\r\nHigh Shine Oil untuk kilau rambut memukau\r\nTeknologi Shine Sillicone untuk refleksi dari berbagai arah\r\nFrench Rose Oil untuk wangi French Rose yang tahan lama', '184000', 0, 561, '39f9c2f3b4a74e04c766ffb280791cd0.jpg'),
(34, 'Total Repair Hair Spa Mask', 29, 4, 'Total Repair Hair Spa Mask membantu melawan tanda-tanda kerusakan pada rambut!\r\nTotal Repair 5 Hair Mask membantu melawan 5 tanda kerusakan rambut rontok karena patah, kering, kusam, rapuh dan bercabang. Mengandung Ceramide yang akan memperbaiki struktur rambut dan mengembalikannya kedalam kondisi yang sehat.', '106000', 0, 561, '85e107a7582ada06634d6f3c0da73ec0.png'),
(35, 'Total Damage Care Shampoo', 30, 4, 'Pantene Total Damage Care Shampoo:\r\nPro-V formula dengan Penangkal Kerusakan Keratin (mengacu pada bahan Trisodium Ethylenediamine Disuccinate)\r\nMeningkatkan kemampuan alami rambut untuk menjaga ikatan protein untuk mengatasi kerusakan rambut\r\nMembantu mencegah rambut bercabang di kemudian hari bahkan dalam 3 bulan (dengan pemakaian teratur)\r\nPerlindungan hingga 10x dari kerusakan (sistem pantene vs Shampoo non-Conditioner)\r\nMembantu terhindar dari 10 tanda kerusakan (10 tanda kerusakan adalah kusut, kusam, rapuh, bercabang, kerontokan karena rambut patah, kering, kasar, lemah, mengembang dan susah diatur)\r\nShampo Perawatan Total untuk Rambut Rusak\r\nMENUTRISI UNTUK MEMBANTU MENGATASI TANDA-TANDA KERUSAKAN RAMBUT', '138900', 3, 674, '2eb3693550589ab97934fe02a9be847a.png'),
(36, 'Pinky Iconic Straightener 1,5 TKD-TR08 pink', 31, 4, '-Menggunakan lapisan ceramic dengan technology tourmaline yg mencegah kerusakan rambut\r\n-dapat meluruskan rambut dengan hasil alami\r\n-dapat menghasilkan natural straight ala hair salon', '649000', 0, 141, '10a9bb31b015c0188c1ef57590bf2921.jpg'),
(37, 'TDB-002SC Wonder Detangling Brush', 32, 4, 'Ucapkan selamat tinggal pada rambut tertarik saat menyisir dalam keadaan basah! Dengan sisir bergigi lentur ini dapatkan kenyamanan maksimal saat menyisir rambut tanpa rasa sakit karena rambut tertarik. Cocok untuk semua tipe rambut, bahkan untuk rambut yang menggunakan hair extension.\r\n\r\nCara Penggunaan:\r\n1. Sisir rambut dengan lembut. Mulai dari beberapa cm di atas ujung rambut untuk mengurai rambut yang kusut.\r\n2. Kemudian naik beberapa cm lagi, hingga akhirnya sampai ke akar rambut.', '174900', 30, 312, '371ec416e80a768a4ddd9dee49f370fb.jpg'),
(38, 'Waterproof Intense Eyeliner', 33, 1, 'Eyeliner kami adalah eyeliner cair sempurna dalam warna hitam yang sangat berpigmen, tahan air, dan anti-noda.\r\nUjung pencil yang runcing dapat membuat eyeliner yang sempurna saat digunakan. Kandugan vegan dan dibuat tanpa bahan kimia yang keras. Ini adalah eyeliner sempurna untuk kebutuhan kecantikan Anda,\r\nKemasan yang akan dikirimkan random tergantung ketersediaan.', '125000', 40, 415, '7368f4416e2856368e35ab0c0699692d.png'),
(39, 'Highlighter', 33, 1, 'Highlighter yang mempesona dari Esqa memiliki highlight yang mudah dibentuk dan dibaurkan. Memberikan pipimu kilau alami. Formulanya Vegan, Halal dan dibuat tanpa bahan-bahan kimia. Ukurannya sangat cocok untuk dibawa bepergian. ', '95000', 25, 526, '920eea68b9ea0d5425dbab5d93dcd9e4.jpg'),
(40, 'Eye Metal Glitter', 34, 1, 'Eyeshadow cair metalik dengan hasil glitter membuat tampilan mata lebih cantik dan indah, bisa untuk membuat make up mata yang bervariasi.\r\nMudah diperbaiki setelah aplikasi dengan tekstur eyeshadow cair dan tahan lama dan tidak mudah pudar.\r\n\r\nPenghargaan: Glowpick 2018 kategori Eyeshadow Liquid, Rookie of The Year in 2018.\r\n\r\nKemasan yang akan dikirimkan random tergantung ketersediaan.', '170000', 22, 213, 'da489e01d89acbb096dd36ceb88bd560.png'),
(41, 'Cliquematte Lip Stylo', 35, 1, 'Lipstik yang hadir dengan konsep clickpen untuk memberikan kemudahan untuk penggunanya.\r\nMake Over Cliquematte Lip Stylo menggunakan mekanisme clickpen, didesain khusus untuk memberikan kemudahan kepada penggunanya agar dapat mengontrol banyaknya lipstick yang ingin dikeluarkan sehingga dapat menghindari lipstick patah serta melindungi produk agar tetap higienis. \r\nFormula Airy Smooth-nya sama sekali tidak terasa kering di bibir, malah terasa nyaman meski digunakan seharian, memberikan hasil akhir matte namun tetap nyaman digunakan. Memiliki tekstur yang creamy dan buttery, sehingga memudahkan proses pemakaian.', '125000', 0, 451, '07f03043a9fac5da986de373f002e84a.jpg'),
(42, 'Velvet Mattifying Primer', 35, 1, 'Velvet Mattifying Primer adalah Primer berfungsi untuk menutupi penampilan pori-pori pada wajah dan garis-garis halus, menciptakan tekstur kulit yang rata dan halus. mampu menghasilkan makeup dengan hasil akhir matte. Primer ini diklaim mampu menyamarkan pori-pori untuk menghasilkan makeup yang terlihat halus dan mulus. Bisa digunakan dengan atau tanpa foundation. Dengan formula non-comedogenic, produk ini mampu menyamarkan tampilan pori-pori tanpa menyumbat pori-pori sehingga tidak menimbulkan komedo.\r\n\r\nCara Penggunaan:\r\n\r\nOleskan lapisan tipis untuk membersihkan, kulit terhidrasi, berfokus pada T-zona atau daerah rawan berminyak lainnya.', '107000', 0, 827, '0fc8f6130132fcc30c99fe0d0d545312.jpg'),
(43, 'Fit Me Loose Powder', 36, 1, 'Maybelline Fit Me! Loose Finishing Powder adalah bedak dari Maybelline dengan hasil matte yang sesuai dengan warna kulit. Bedak tabur inovasi terbaru ini diciptakan khusus untuk jenis kulit normal cenderung berminyak. Maybelline Fit Me! Loose Finishing Powder diklaim dapat meratakan warna kulit, sehingga hasil akhir atau finishing-nya terlihat lebih natural, kulit tampak tidak berpori, lebih tahan lama, dan bebas kilap hingga 12 jam.\r\nBedak yang pelengkap complexion usai mengaplikasikan foundation/ concealer mengandung mineral dengan formula yang ringan ini bertujuan untuk mengontrol kadar minyak pada wajah dan menjadikan kulit terlihat lebih halus dan flawless. ', '224900', 0, 632, '5aad76bcb75cd2487b0b0e618120fd68.jpg'),
(44, 'Hyathenol Hydra Toner', 37, 5, 'Hydrating Toner dengan kandungan Niacinamide, Panthenol, Sodium Hyaluronate, Squalane, Adenosine, dan berbagai botanical extracts, yang memberikan kesegaran pada kulit seusai membersihkan wajah dengan Foam Cleanser, menjaga kulit agar tetap terasa lembap.\r\n\r\nHow to Use:\r\nSetelah membersihkan wajah, tuang toner secukupnya pada kapas atau tangan yang bersih kemudian aplikasikan perlahan atau tap-tap ke seluruh wajah hingga leher. Gunakan rangkaian produk perawatan dari seri Hyathenol lainnya untuk perawatan yang optimal.', '330000', 15, 381, '6dbc223be2c94a535ab2013f3c2fbb04.png'),
(45, 'Moistfull Collagen Intense Eye Cream', 38, 5, 'Eye cream dengan tekstur kental yang memberikan kelembaban pada kulit di sekitar area mata.\r\nHow to Use:\r\nGunakan produk secukupnya pada kulit di sekitar area mata dan tepuk dengan lembut untuk meningkatkan penyerapan.', '363000', 20, 871, '78a7b54dec24a2d37ac8c37ae0a71678.png'),
(46, 'Miraculous Retinol Ampoule ', 39, 5, 'Retinol ampoule pertama di Indonesia dengan kandungan Actosome Retinol yang mengandung 0,09% aktif Retinol. Dikombinasikan dengan 0,1% Hexapeptide, Vitamin E, Raspberry Extract, Pomegranate Extract, dan asam ellagic. Perpaduan tersebut membuat Miraculous Retinol Ampoule berfungsi optimal untuk membantu menunda munculnya tanda penuaan dini pada kulit dengan cara meningkatkan pergantian sel-sel kulit sehingga menjaga elastisitas dan kesehatan kulit.\r\n\r\nHow to Use:\r\nAplikasikan pada kulit dalam kondisi bersih dan gunakan sunscreen pada keesokan harinya. Jika timbul kemerahan atau tanda iritasi, sesuaikan frekuensi pemakaian. Produk ini bisa digunakan setiap hari pada malam hari. Untuk hasil yang lebih optimal, sangat disarankan untuk menggunakan Miraculous Retinol Toner sebelumnya.', '207500', 12, 671, 'ff7ea603b8d2efb3ccde45194ca57701.png'),
(47, 'MSH Niacinamide Brightening Moisture Gel ', 40, 5, 'MSH Niacinamide Brightening Moisture Gel dengan tekstur seringan udara, dapat menyerap dengan cepat dan mengontrol minyak dalam 24 jam. Diformulasikan dengan Novel MSH Niacinamide ekslusif SKINTIFIC yang dikombinasikan dengan dua bahan pencerah yang ringan dan paling efektif yaitu Alpha Arbutin dan Tranexamic Acid, mampu mencerahkan dengan signifikan dalam waktu 14 hari. MSH Niacinamide terbukti secara klinis 10 kali lebih efektif dibandingkan niacinamide biasa dalam mengurangi hiperpigmentasi, meredakan kemerahan dan memperbaiki elastisitas kulit. Diperkaya dengan Centella Asiatica dan 5X Ceramide, tidak menyebabkan iritasi serta memberikan efek menenangkan kulit sekaligus memperbaiki dan menjaga skin barrier.', '154200', 15, 271, 'f37e66048a9c176ca0ff4dd41f1dd467.png'),
(48, 'Skin Barrier Toner Essence', 41, 5, 'Hydrating toner dengan pH 5.5 yang merawat kulit dengan menjaga skin barrier serta mengembalikan pH alami kulit, sekaligus menjaga hidrasi kulit.\r\n \r\n- 10x moisturizing power, dengan kandungan Quadruple Hyaluronic Acid membantu mengunci hidrasi.\r\n- 12x Nano Ceramide dengan Ferment Ice Plan Technology membantu mengunci kelembapan kulit dan menjaga skin barrier\r\n- Diperkaya Cica yang terbukti mampu meredakan peradangan akibat jerawat, kulit rusak, sensitif.\r\n\r\nJenis kulit: Semua jenis kulit\r\n\r\nHero Ingredients:\r\nEncapsulated Ceramide Complex\r\nQuadruple Hyaluronic Acid\r\nCica & Allantoin\r\nPolyglutamic Acid\r\n\r\nUnique Selling  Points:\r\n✅pH 5.5-6.0\r\n✅Dermatologically Tested\r\n✅Alcohol Free\r\n\r\n*Aman digunakan ibu hamil dan menyusui\r\n*Dapat digunakan dari usia 9 tahun\r\n\r\nHasil uji responden mengatakan:\r\n97% setuju Skin Barrier Toner Essence melembapkan kulit dengan\r\nsangat baik.\r\n86,4% setuju Skin Barrier Toner Essence tidak mengiritasi kulit.\r\n86,4% setuju Skin Barrier Toner Essence tidak membuat wajah\r\nberminyak setelah pemakaian.\r\n77,3% setuju Skin Barrier Toner Essence membuat wajah lebih\r\nkenyal setelah pemakaian.', '79000', 10, 561, 'f41995c08eb26e76fd3d2a8fb196e80e.png'),
(49, 'SKIN1004 Madagascar Centella Air-Fit Suncream Plus', 42, 5, '● Physical Sunscreen\r\n● UVA + UVB Protection\r\n● Brightning Function\r\n● Skin Irritation Test Completed\r\nAn ultra-light, air fit suncream with broad-spectrum SPF 50 PA++++ for daily protection that contains Centella Asiatica Extract, fresh from the untouched nature of Madagascar, to soothe the skin and create a matte finish. It also contains Niacinamide to help balance uneven skin tone.', '510000', 67, 809, '4e35907264819367d304665bac568c17.png'),
(50, 'Waterymelon Deep Hydration Emulsion', 43, 5, 'Waterymelon deep hydration emulsion adalah serum dan moisturizer dalam satu botol yang mengandung watermelon dan aloe vera leaf juice yang kaya akan antioksidan, memberikan kelembaban ke kulit agar sehat dan kenyal. Teksturnya yang ringan cocok untuk kulit yang oily dan kombinasi.\r\nHow to Use:\r\nSetelah menggunakan toner, oles emulsion secukupnya ke seluruh wajah hingga menyerap. Gunakan pada pagi dan malam hari.', '170500', 25, 761, 'bd776348a009e7ab361d9533d7c67ef5.png'),
(51, 'Superstay Matte Ink Un-Nude Liquid Lipstick', 36, 1, 'Lip cream terbaik dari Maybelline yang semakin memperkuat karaktermu dengan tekstur cair dan ink formula yang melembabkan serta memberikan hasil warna intens dan tahan lama.\r\n\r\nLip cream matte dengan ink formula yang menghasilkan warna-warna intens. Tahan lama sampai 16 jam.\r\n\r\nManfaat:\r\n- Aplikator liquid lipstick berbentuk arrow yang unik.\r\n- Ink formula untuk hasil warna matte lip cream intens.\r\n- Tahan lama hingga 16 jam.\r\n', '138900', 35, 671, '3fffa3752c2d34be49b6009aa124ed39.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `rating`, `review`, `image`, `submit_date`) VALUES
(1, 1, 2, 5, 'Good', '', '2024-03-17 20:20:38'),
(2, 1, 2, 5, 'tesss', '', '2024-03-18 02:47:16'),
(3, 3, 1, 5, '', '', '2024-03-18 12:26:47'),
(4, 3, 2, 5, '', '', '2024-03-18 12:26:47'),
(5, 3, 1, 4, 'Good ', '', '2024-03-18 12:43:43'),
(6, 3, 2, 1, 'So bad', '', '2024-03-18 12:43:43'),
(7, 1, 1, 5, '', '', '2024-03-20 01:09:41'),
(8, 1, 2, 5, 'This is a review', '7d946f171b79cb329d0ab1381c0705f8.png', '2024-03-20 01:09:41'),
(9, 4, 49, 4, 'Awal beli karena lagi diskon dan dari dulu emang udah pengen cobain. Pertama kali pake di kulit ku kaya ada rasa perih sedikit idk why tapi pemakaian kedua dan seterusnya gaada, dia texturenya cream, warnanya beige atau cream gitu bukan putih jadi pas dipake ga abu abu. Setelah pake ini matte sesuai claim nya, cocok banget buat aku yang mager buat make up pake ini muka jadi ga kusam berminyak gitu malah jadi kaya pake base make up yang tone up, suka banget sama sunscreen ini pokonya ❣️????', '992e39ddfc2996e383253a48c4fb8d6e.png', '2024-03-24 14:18:41'),
(10, 4, 49, 5, 'BAGUS BAGUS BAGUS BAGUS! Ga bohong dan ga nyesel beli ini sangat aman di kulit yang densitif dan mudah jerawatan ini serta berminyak bismillah cocok terus dan sering promo hahaha', '', '2024-03-24 14:19:51'),
(11, 4, 49, 5, '', '', '2024-03-24 14:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `paid_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `product_id`, `qty`, `price`, `total`, `paid_date`) VALUES
(1, 1, 1, 2, 10000000, 20000000, '2024-03-17 20:08:12'),
(2, 1, 2, 4, 200000, 800000, '2024-03-17 20:08:12'),
(3, 1, 2, 3, 200000, 600000, '2024-03-17 20:09:35'),
(4, 1, 2, 3, 200000, 600000, '2024-03-17 20:13:13'),
(5, 1, 2, 3, 200000, 600000, '2024-03-17 20:14:52'),
(6, 1, 2, 3, 200000, 600000, '2024-03-17 20:15:19'),
(7, 1, 2, 2, 200000, 400000, '2024-03-18 02:47:08'),
(8, 3, 1, 3, 10000000, 30000000, '2024-03-18 12:26:21'),
(9, 3, 2, 5, 200000, 1000000, '2024-03-18 12:26:21'),
(10, 3, 1, 5, 10000000, 50000000, '2024-03-18 12:43:18'),
(11, 3, 2, 3, 200000, 600000, '2024-03-18 12:43:18'),
(12, 1, 1, 2, 9000000, 18000000, '2024-03-20 01:08:43'),
(13, 1, 2, 1, 200000, 200000, '2024-03-20 01:08:43'),
(14, 4, 2, 1, 256000, 256000, '2024-03-24 13:59:50'),
(15, 4, 49, 1, 168300, 168300, '2024-03-24 14:14:40'),
(16, 4, 49, 1, 168300, 168300, '2024-03-24 14:19:27'),
(17, 4, 49, 1, 168300, 168300, '2024-03-24 14:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `f_name`, `l_name`, `gender`, `role`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin', 'male', 'admin'),
(3, 'user@gmail.com', '5725dbcc7254ee8422d1cb60db29625c', 'Ivan', 'Gunawan', 'male', 'user'),
(4, 'promise219@gmail.com', '90cb9ff2cd87fb2390d161548f409353', 'ping', 'kan', 'female', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
