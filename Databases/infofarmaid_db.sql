-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2023 at 09:58 AM
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
-- Database: `infofarmaid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dhaka_Corps`
--

CREATE TABLE `Dhaka_Corps` (
  `Corp_Name` varchar(1000) NOT NULL,
  `Area_devoted` varchar(1000) NOT NULL,
  `Prodinper_Area` varchar(1000) NOT NULL,
  `Total_Production` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Dhaka_Corps`
--

INSERT INTO `Dhaka_Corps` (`Corp_Name`, `Area_devoted`, `Prodinper_Area`, `Total_Production`) VALUES
('Aus local', '26470', '13.70', '31463'),
('Aus Hybrid', '52833', '27.64', '54513');

-- --------------------------------------------------------

--
-- Table structure for table `Dhaka_Corps_Bangla`
--

CREATE TABLE `Dhaka_Corps_Bangla` (
  `Corp_Name_b` varchar(1000) NOT NULL,
  `Area_devoted_b` varchar(1000) NOT NULL,
  `Prodinper_Area_b` varchar(1000) NOT NULL,
  `Total_Production_b` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Dhaka_Corps_Bangla`
--

INSERT INTO `Dhaka_Corps_Bangla` (`Corp_Name_b`, `Area_devoted_b`, `Prodinper_Area_b`, `Total_Production_b`) VALUES
('আউস লোকাল', '২৬৪৭০', '১৩.৭০', '৩১৪৬৩'),
('আউস হাইব্রিড', '৫২৮৩৩', '২৭.৬৪', '৫৪৫১৩');

-- --------------------------------------------------------

--
-- Table structure for table `major_cereal`
--

CREATE TABLE `major_cereal` (
  `Crop_Name_mc` varchar(27) DEFAULT NULL,
  `Area_devoted_mc` varchar(16) DEFAULT NULL,
  `Prodinper_Area_mc` varchar(19) DEFAULT NULL,
  `Total_Production_mc` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `major_cereal`
--

INSERT INTO `major_cereal` (`Crop_Name_mc`, `Area_devoted_mc`, `Prodinper_Area_mc`, `Total_Production_mc`) VALUES
('MAJOR CEREALS', '', '', ''),
('Rice', '', '', ''),
('Total Aus', '2864', '1047', '3000'),
('TotalAman', '14132', '1058', '14958'),
('Total Boro', '11895', '1697', '20186'),
('Total Rice', '28891', '7320', '38144'),
('Wheat', '778', '1395', '1086'),
('Total Major Cereals', '29669', '1320', '39230'),
('MINOR CEREALS', '', '', ''),
('Barley/Jab', '0.4531', '380.53', '0.17242'),
('Jower', '0.1647', '0.485', '0.08001'),
('Maize', '1182', '3605', '4262'),
('Cheena &\nKaon', '02', '428', '01'),
('Binnidana', '0.01865', '551', '0.01029'),
('Total Minor Cereals', '1184', '360', '4263'),
('Total Cereals\n(Major+minor)', '30853', '1409', '43493'),
('Gram', '11', '452.42', '05'),
('Arhar', '01', '424.11', '0.45442'),
('Masur', '357', '534.38', '191'),
('Motor', '18', '444.94', '08'),
('Mung', '114', '364.75', '42'),
('Mashkalai', '102', '381.58', '39'),
('Khesari', '291', '453.45', '132'),
('Fallon', '31', '503.81', '15'),
('Garikalai-', '01', '303.22', '0.37387'),
('Total Pulses', '926', '3862.66', '432'),
('OIL SEEDS (Edible)', '', '', ''),
('Til', '82', '3803', '31'),
('Rape & Mustard', '817', '501.27', '410'),
('Groundnut', '100', '751.00', '75'),
('Soya bean', '145', '681.67', '99'),
('Lin Seeds', '13', '291.24', '04'),
('Coconut', '74', '52.78', '412'),
('Sunflower', '05', '520.42', '03'),
('Total Oil Seeds', '1236', '836', '1034'),
('SPICES & CONDIMENT', '', '', ''),
('Chillies, Kharif', '50', '2557.15', '129'),
('Chillies, Rabi', '193', '2574.98', '496'),
('Total Chillies', '243', '2571', '625'),
('Onion', '508', '4959.19', '2517'),
('Garlic', '178', '2952.43', '527'),
('Turmeric', '65', '3552.86', '232'),
('Ginger', '26', '3187.87', '82'),
('Coriander Seeds', '51', '436.64', '22'),
('Coriander/Joyeen', '0.02735', '358.32', '0.0098'),
('Cassia Leaf', '10', '10.21', '01'),
('Black Cumin', '', '', ''),
('Capsicum', '0.04887', '3097.61', '0.15138'),
('Methi', '0.34842', '567.22', '0.19763'),
('Mint', '0.2543', '2499.02', '0.06355'),
('Total Spices &\nCondiments', '1084', '3736', '4005'),
('SUGAR CROPS', '', '', ''),
('Sugar Cane', '179', '17290.57', '3087'),
('Date Palm(juice)', '39', '53.23', '153'),
('Date Palm (Fruits)', '22', '12.72', '40'),
('Palmyra Palm(Juice)', '10', '79.62', '57'),
('PalmyraPalm(Talsas)', '13', '63.78', '77'),
('Ripe Tal', '16', '99.00', '144'),
('Total Sugar Crops', '279', '1275', '3558'),
('FIBRES', '', '', ''),
('Jute (bales)', '1783', '4.73', '8432'),
('Cotton (rabi & kharif)', '30', '2.366', '71'),
('Sunhemp (Shanpat),\nBhadoi', '0', '0', '0'),
('Sunhemp, Rabi', '0.0587', '1082.62', '0.06355'),
('Simul Cotton', '08', '0.069', '32');

-- --------------------------------------------------------

--
-- Table structure for table `major_cereal_bangla`
--

CREATE TABLE `major_cereal_bangla` (
  `Crop_Name_mc_b` varchar(30) DEFAULT NULL,
  `Area_devoted_mc_b` varchar(15) DEFAULT NULL,
  `Prodinper_Area_mc_b` varchar(21) DEFAULT NULL,
  `Total_Production_mc_b` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `major_cereal_bangla`
--

INSERT INTO `major_cereal_bangla` (`Crop_Name_mc_b`, `Area_devoted_mc_b`, `Prodinper_Area_mc_b`, `Total_Production_mc_b`) VALUES
('প্রধান খাদ্যশস্য', '', '', ''),
('চাল', '', '', ''),
('আউশ', '২৮৬৪', '১০৪৭', '৩০০০'),
('আমান', '১৪১৩২', '১০৫৮', '১৪৯৫৮'),
('বোরো', '১১৮৯৫', '১৬৯৭', '২০১৮৬'),
('মোট চালের পরিমাণ', '২৮৮৯১', '৭৩২০', '৩৮১৪৪'),
('গম', '৭৭৮', '১৩৯৫', '১০৮৬'),
('মোট প্রধান খাদ্যশস্য এর পরিমাণ', '২৯৬৬৯', '১৩২০', '৩৯২৩০'),
('গৌণ খাদ্যশস্য', '', '', ''),
('বার্লি/জাব', '০.৪৫৩১', '৩৮০.৫৩', '০.১৭২৪২'),
('জোয়ার', '০.১৬৪৭', '০.৪৮৫', '০.০৮০০১'),
('ভুট্টা', '১১৮২', '৩৬০৫', '৪২৬২'),
('চিনা ও\nকাওন', '২', '৪২৮', '১'),
('বিন্নিদান', '০.০১৮৬৫', '৫৫১', '০.০১০২৯'),
('মোট গৌণ সিরিয়াল', '১১৮৪', '৩৬০', '৪২৬৩'),
('মোট খাদ্য শস্য (প্রধান + গৌণ)', '৩০৮৫৩', '১৪০৯', '৪৩৪৯৩'),
('ছোলা', '১১', '৪৫২.৪২', '৫'),
('আরহার', '১', '৪২৪.১১', '০.৪৫৪৪২'),
('মাসুর', '৩৫৭', '৫৩৪.৩৮', '১৯১'),
('মোটর', '১৮', '৪৪৪.৯৪', '৮'),
('মুং', '১১৪', '৩৬৪.৭৫', '৪২'),
('মাশকলাই', '১০২', '৩৮১.৫৮', '৩৯'),
('খেসারি', '২৯১', '৪৫৩.৪৫', '১৩২'),
('ফ্যালন', '৩১', '৫০৩.৮১', '১৫'),
('গারিকলাই-', '১', '৩০৩.২২', '০.৩৭৩৮৭'),
('মোট ডাল', '৯২৬', '৩৮৬২.৬৬', '৪৩২'),
('তেল বীজ (ভোজ্য)', '', '', ''),
('তিল', '৮২', '৩৮০৩', '৩১'),
('ধর্ষণ ও সরিষা', '৮১৭', '৫০১.২৭', '৪১০'),
('চিনাবাদাম', '১০০', '৭৫১.', '৭৫'),
('সয়া বিন', '১৪৫', '৬৮১.৬৭', '৯৯'),
('লিন বীজ', '১৩', '২৯১.২৪', '৪'),
('নারকেল', '৭৪', '৫২.৭৮', '৪১২'),
('সূর্যমুখী', '৫', '৫২০.৪২', '৩'),
('মোট তেল বীজ', '১২৩৬', '৮৩৬', '১০৩৪'),
('মশলা ও কন্ডিমেন্ট', '', '', ''),
('মরিচ, খরিফ', '৫০', '২৫৫৭.১৫', '১২৯'),
('মরিচ, রাবি', '১৯৩', '২৫৭৪.৯৮', '৪৯৬'),
('মোট মরিচ', '২৪৩', '২৫৭১', '৬২৫'),
('পেঁয়াজ', '৫০৮', '৪৯৫৯.১৯', '২৫১৭'),
('রসুন', '১৭৮', '২৯৫২.৪৩', '৫২৭'),
('হলুদ', '৬৫', '৩৫৫২.৮৬', '২৩২'),
('আদা', '২৬', '৩১৮৭.৮৭', '৮২'),
('ধনে বীজ', '৫১', '৪৩৬.৬৪', '২২'),
('ধনে/জয়ীন', '০.০২৭৩৫', '৩৫৮.৩২', '০.০০৯৮'),
('ক্যাসিয়া পাতা', '১০', '১০.২১', '১'),
('কালো জিরা', '', '', ''),
('ক্যাপসিকাম', '০.০৪৮৮৭', '৩০৯৭.৬১', '০.১৫১৩৮'),
('মেথি', '০.৩৪৮৪২', '৫৬৭.২২', '০.১৯৭৬৩'),
('পুদিনা', '০.২৫৪৩', '২৪৯৯.০২', '০.০৬৩৫৫'),
('মোট মশলা ও\nমসলা', '১০৮৪', '৩৭৩৬', '৪০০৫'),
('চিনির ফসল', '', '', ''),
('আখ', '১৭৯', '১৭২৯০.৫৭', '৩০৮৭'),
('খেজুর (রস)', '৩৯', '৫৩.২৩', '১৫৩'),
('খেজুর (ফল)', '২২', '১২.৭২', '৪০'),
('পালমাইরা পাম (রস)', '১০', '৭৯.৬২', '৫৭'),
('পালমাইরাপাম (তালসাস)', '১৩', '৬৩.৭৮', '৭৭'),
('পাকা তাল', '১৬', '৯৯.', '১৪৪'),
('মোট চিনির ফসল', '২৭৯', '১২৭৫', '৩৫৫৮'),
('ফাইবারস', '', '', ''),
('পাট (বেল)', '১৭৮৩', '৪.৭৩', '৮৪৩২'),
('তুলা (রবি ও খরিফ)', '৩০', '২.৩৬৬', '৭১'),
('সানহেম্প (শানপাট),\nভাদোই', '০', '০', '০'),
('সানহেম্প, রাবি', '০.০৫৮৭', '১০৮২.৬২', '০.০৬৩৫৫'),
('সিমুল তুলা', '৮', '০.০৬৯', '৩২');

-- --------------------------------------------------------

--
-- Table structure for table `Soil_report`
--

CREATE TABLE `Soil_report` (
  `Sl_no` int(30) NOT NULL,
  `Soil_type` varchar(30) NOT NULL,
  `Characteristics` varchar(300) NOT NULL,
  `Area` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Soil_report`
--

INSERT INTO `Soil_report` (`Sl_no`, `Soil_type`, `Characteristics`, `Area`) VALUES
(1, 'Non-calcareous Alluvium', 'Recent Tista, Brahmaputra and\r\nJamuna alluvium. Mainly unstable\r\nchar land.', 'Mymensingh: Nagarpur, Tangail, Kalihati,\r\nGopalpur, Sarishabari, Madargonj, Melandah,\r\nIslampur and Dewangonj.\r\nRangpur: Raumari, Nageswari, Bhurungamari,\r\nKurigram, Ulipur, Chilmari, Gaibandah and\r\nPhulchari.\r\nBogura: Saria Kandi and Dhunot.\r\nPabna: Kazipur, Sirajgonj, and Bera.'),
(2, 'Calcareous Alluvium', 'Recent Ganges and lower Meghna\r\nalluvium. Part unstable charland. Part\r\nsaline in the Meghna estuary.', 'Faridpur: Char Bhadrashan and Sadarpur.\r\nNoakhali: Sudharam, Hatiya, Ramgati and\r\nSonagazi.\r\nChattagram: Sandwip'),
(3, 'Acid Sulphate Soils', 'Sundarban (mangrove swamp) soils\r\nwith extremely high acidity (potential\r\nor actual) tidally flooded with blackish\r\nor saline water for part or all the year.', 'Khulna: Dacope and Sarankhola.'),
(4, 'Peat', 'Permanently wet basin peat and\r\nmuck, part with alluvial topsoil.', 'Faridpur: Mukusudpur, Gopalganj, Kotalipara,\r\nKasiani, Rajoir and Madaripur.\r\nSylhet: Daulatpur, Fultala, Terokheda, Dumuria\r\nand Mollahat.\r\nBakerganj: Nazirpur.\r\nJashore: Abhoynagar, Salika and Kalia.'),
(5, 'Grey Floodplain Soils', 'Grey, finely mottled brown,\r\nseasonally flooded soils with\r\nseasonally acid top-soil and near\r\nneutral subsoils.', 'Dhaka: Keraniganj, Chapinawabgonj, Kaliganj,\r\nDhamrai, Munshiganj, Gazaria, Manikganj, Saturia,\r\nSingair, Daulatpur, Gheor, Narayangonj, Futullah\r\nand Raipura.\r\nMymensingh: Sarishabari, Madargonj, Tangail,\r\nKalihati and Nagarpur.\r\nCumilla: Homna, Chandpur, Matlabbazar and\r\nBancharampur.'),
(6, 'Grey Floodplain', 'Seasonally wet or shallowly flooded\r\nGrey Floodplain soils on lower ridges\r\nand in depressions with moderately\r\nwell-drained, rather acid, brown\r\nloams on higher ridges.', 'Mymensingh: Kotwali, Islampur, Ishwargonj,\r\nGouripur and Jamalpur.\r\nDinajpur: Chirirbandar, Fulbari and Khansama.\r\nRangpur: Nilphamari, Saidpur, Dimla, Domar,\r\nJhaldaka, Kishoregonj, Gangachara, Mithapukur,\r\nBadarganj, Kaliganj, Hatibanda, Patgram, Palasbari\r\nand Sundargonj.\r\nBogura: Sherpur.'),
(7, 'Mixed grey', 'Tista floodplain soils, Noncalcareous\r\nbrown floodplain soils on higher\r\nridges; seasonally wet or flooded\r\nmainly silty, mixed Grey Floodplain\r\nsoils and Non-Calcareous Dark Grey\r\nFloodplain soils on lower ridges and\r\nin depressions.', 'Rangpur: Bhurungamari, Lalmonirhat and Fulbari.'),
(8, 'GF soils & NCDG floodplain', 'Seasonally wet or shallowly flooded\r\nGrey Floodplain soils, mainly on\r\nridges, and seasonally shallowly or\r\ndeeply flooded Non-calcareous Dark\r\nGrey Floodplain Soils, mainly in\r\nbasis.', 'Dhaka: Gazaria, Arai hazar and Narsingdi.\r\nKishoreganj: Hossainpur, Mohanganj, Barhatta\r\nand Purbadhala.\r\nMymensingh: Nandail, Phulpur, Jamalpur,\r\nSherpur, Nakla and Melandah.\r\nNoakhali: Companyganj, Lakshmpur, Raipur,\r\nBegumganj, Senbag and Feni.\r\nCumilla: Muradnagar, Burichang, Chauddagram.'),
(9, 'Floodplain and Acid basin', 'This occupies the eastern SurmaKusiyara Floodplain in Sylhet and the\r\nCumilla basin.', 'Kishoreganj: Bhairab\r\nCumilla: Kotwali and Burichang.\r\nSylhet: Balaganj, Biswanath; Fenchuganj,\r\nZakiganj,\r\nBeanibazar, Habiganj, Chhatak, Jagannathpur,\r\nMoulvibazar and Rajanagar.'),
(10, 'Grey Piedmont Soils.', 'Grey mottled red or brown, strongly\r\nacid, loams to clays on seasonally\r\nwet or flooded piedmont plains\r\nadjoining the eastern hills.', 'Chattagram: Kotwali, Doublemoorings, Mirsarai,\r\nSitakunda, Fatikchari, Raojan, Rangunia, Boalkhali,\r\nPatiya,Satkania, Chakaria, Kutubdia and Ramu.\r\nChattagram Hill Tracts: Lama.\r\nNoakhali: Chhagalnaiya.\r\nCumilla: Kasba and Chauddagram.\r\nSylhet: Chunarughat'),
(11, 'Acid basin clays.', 'Strongly acid heavy clays, part\r\npermanently wet.', 'Dhaka: Dohar and Serajdikhan.\r\nKishoregonj: Astagram, Nikli, Itna,Khaliajuri,\r\nMadan, Kalmakanda and Durgapur.\r\nCumilla: Nasirnagar.\r\nSylhet: Nabiganj, Lakhai, Azmiriganj, Sunamganj,\r\nTahirpur, Derai, Sulla and Jamalganj.\r\nRajshahi: Naogaon, Atrai, Raninagar and Singra.\r\nSirajgonj: Tarash.'),
(12, 'Dark grey Floodplain soils.', 'Dark grey, finely mottled brown, and\r\nbrown soils with dark grey flood\r\ncoatings, with seasonally acid top soils\r\nand near-neutral sub-soils. Mainly\r\nseasonally deeply flooded soils of the\r\nold Brahmaputra-Karatoya-Bangali\r\n(Part) and old Meghna estuarine\r\nfloodplains.', 'Dhaka: Tejgaon, Lohajong, Tongibari, Araihazar,\r\nRupaganj and Sonargaon.\r\nKishoregonj: Kotwali, Pakundia, Karimgonj, Tarail,\r\nBajitpur, Kuliarchar, Kathiadi, Netrakona, Atpara\r\nand Kendua.\r\nMymensingh: Muktagacha, Fulbaria, Trisal,\r\nSarisabari, Basail, Ghatail and Kalihati.\r\nNoakhali: Ramganj.'),
(13, 'Calcareous', 'Mainly dark grey or brown clays with\r\ndark grey flood coatings, some\r\ncalcareous throughout some with\r\nseasonally acid top soils and\r\ncalcareous substratum within 4 feet.\r\nBrown calcareous loamy soils on\r\nhighest ridges and near river-banks.', 'Mymensingh: Kotwali.\r\nFaridpur: Bhanga, Nagarkanda, Baliakandi,\r\nMuksudpur, Kotalipara, Kasiani, Kalkini,\r\nGoshairhat, Janjira and Shibchar.\r\nRajshakhi: Boalia, Paba, Puthia, Charghat,\r\nBholahat, Shibganj, Gamustapur, Natore.\r\nPabna: Kotwali, Atgharia, Ishurdi, Chatmohar'),
(14, 'floodplain with lime kankar.', 'Mainly leached calcareous dark grey\r\nfloodplain soils about half with a hard\r\nline kankar layer 2-6 feet deep.', 'Rajshahi: Bagmara, Durgapur.'),
(15, 'brown floodplain soils', 'Brown soils are the dominant soils in\r\nthe landscape and the grey soils are\r\nsubordinate.', 'Mymensingh: Phulpur, Jamalpur, Madargonj and\r\nDewanganj.\r\nDinajpur: Birganj, Kaharole, Birol, Bochaganj,\r\nThakurgaon, Baliadangi, Ranisankail, Haripur,\r\nPirganj, Debiganj and Boda.'),
(16, 'Black Terai soils.', 'Seasonally wet, dark coloured rather\r\nacid, loamy soils on ridges, level areas\r\nand in depressions.', 'Dinajpur: Panc\r\nhagarh, Atwari and Tetulia.'),
(17, 'Brown Hill soils.', 'Brown, very strongly acid, mainly\r\nloamy soils.', 'Kishoreganj: Dinajpur.\r\nMymensingh: Haluaghat, Sribordi and Nalitabari.\r\nChattagram: Panchlaish, Hathazari, Mirsarai,\r\nFatikchari, Rangunia, Anowara, Banskhali, Cox‟s\r\nBazar, Ramu, Moheshkahli, Teknaf and Ukhiya, all'),
(18, 'Red-brown Terrace soils.', 'Well to moderately well-drained, red\r\nand brown, strongly acid, clay loams\r\nand clays, part over compact\r\nModhupur clay at 1-3 feet, pert over\r\ndeeply mottled clay substratum.', 'Dhaka: Sripur, Kapasia, Kaligonj, Gazipur Sadar,\r\nSavar, Kaliakhair, Rupgonj, Shibpur and\r\nMonohardi.\r\nMymensingh: Fulbaria, Trisal and Ghatail.\r\nCumilla: Kasba.\r\nRajshahi: Nowabgonj.\r\nDinajpur: Chapinawabgonj, Gharaghat.\r\nRangpur: Pirganj, Gobindaganj and Sadullapur.'),
(19, 'Grey Terrace soils.', 'Poorly drained, grey, mottled, acid silty\r\nsoils over a grey, mottled clay\r\nsubstratum.', 'Dhaka: Gazipur Sadar.\r\nKishoreganj: Durgapur.\r\nMymensingh: Haluaghat, Sribordi and Nalitabari.\r\nRajshahi: Tanore, Godagari, Nowabganj,\r\nBholahat, Nachole, Shibganj, Porsha, Badalgachi,\r\nNiamatpur, Mohadevpur, Raninagar and\r\nDhamoirhat.\r\nDinajpur: Kotwali, Parbatipur, Phulbari and\r\nHakimpur.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Soil_report_Bangla`
--

CREATE TABLE `Soil_report_Bangla` (
  `Sl_no_b` varchar(2000) NOT NULL,
  `Soil_type_b` varchar(2000) NOT NULL,
  `Characteristics_b` varchar(2000) NOT NULL,
  `Area_b` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Soil_report_Bangla`
--

INSERT INTO `Soil_report_Bangla` (`Sl_no_b`, `Soil_type_b`, `Characteristics_b`, `Area_b`) VALUES
('১', 'চুনহীন পলিমাটি।', 'সাম্প্রতিক তিস্তা, ব্রহ্মপুত্র ও যমুনা পলিমাটি। প্রধানত অস্থায়ী চরের জমি।', 'ময়মনসিংহ: নাগরপুর, টাঙ্গাইল, কালিহাতী, গোপালপুর, সরিষাবাড়ী, মাদারগঞ্জ, মেলান্দহ, ইসলামপুর ও দেওয়ানগঞ্জ।\r\nরংপুর: রৌমারী, নাগেশ্বরী, ভুরুঙ্গামারী, কুড়িগ্রাম, উলিপুর, চিলমারী, গাইবান্ধা ও ফুলছড়ি।\r\nবগুড়া: সারিয়া কান্দি ও ধুনট। পাবনা: কাজীপুর, সিরাজগঞ্জ, কামারখোন্দা, বেলকুচি, চৌহালী, শাহজাদপুর ও বেড়া।'),
('২', 'চুনযুক্ত পলিমাটি', 'সাম্প্রতিক গঙ্গা ও নিম্ন মেঘনার পলিমাটি। যার কিছু অংশ অস্থায়ী চরের জমি এবং মেঘনার মোহনায় লবণাক্ত জমি।', 'ফরিদপুর: চর ভদ্রাসন ও সদরপুর। নোয়াখালী: সুধারাম, হাতিয়া, রামগতি ও সোনাগাজী।\r\nচট্টগ্রাম: সন্দ্বীপ'),
('৩', 'অ্যাসিড সালফেট মাটি', 'সুন্দরবন(ম্যানগ্রোভ জলাভূমি), অত্যন্ত উচ্চ অম্লতাযুক্ত মাটি (সম্ভাব্য বা বাস্তব), জোয়ারে জলে প্লাবিত হওয়া কালো বা লবণাক্ত মাটি।', 'খুলনা: দাকোপ ও শরণখোলা।'),
('৪', 'পিট', 'স্থায়ীভাবে ভেজা বেসিন পিট এবং আঁচিল, পলিমাটির উপরের মাটির অংশ।', 'ফরিদপুর: মুকসুদপুর, গোপালগঞ্জ, কোটালীপাড়া, কাশিয়ানী, রাজৈর ও মাদারীপুর।\r\nসিলেট: দৌলতপুর, ফুলতলা, তেরখেদা, ডুমুরিয়া ও মোল্লাহাট।\r\nবাকেরগঞ্জ: নাজিরপুর।\r\nযশোর: অভয়নগর, সলিকা ও কালিয়া।'),
('৫', 'ধূসর প্লাবনভূমি মৃত্তিকা', 'ধূসর, সূক্ষ্ম বাদামী, ঋতু অনুসারে প্লাবিত মৃত্তিকা যার সাথে ঋতু অনুসারে অ্যাসিডের উপরের মাটি মিশ্রিত এবং তার কাছাকাছি সমদর্শি মাটি।', 'ঢাকা: কেরানীগঞ্জ, চাপিনবাবগঞ্জ, কালীগঞ্জ, ধামরাই, মুন্সীগঞ্জ, গজারিয়া, মানিকগঞ্জ, সাটুরিয়া, সিংগাইর, দৌলতপুর, ঘিওর, নারায়ণগঞ্জ, ফুটুল্লা ও রায়পুরা।\r\nময়মনসিংহ: সরিষাবাড়ী, মাদারগঞ্জ, টাঙ্গাইল, কালিহাতী ও নাগরপুর।\r\nকুমিল্লা: হোমনা, চাঁদপুর, মতলববাজার ও বাঞ্ছারামপুর।'),
('৬', 'ধূসর প্লাবনভূমি মৃত্তিকা এবং চুনহীন বাদামী\r\nপ্লাবনভূমি মাটি।', 'ঋতুগতভাবে ভেজা বা অগভীরভাবে প্লাবিত ধূসর প্লাবনভূমির মাটি নিম্ন শৈলশিরায় এবং নিম্নচাপগুলিতে মাঝারিভাবে ভাল-নিষ্কাশিত, আংশিক অম্লীয়, বাদামী দো-আঁশ মাটি।', 'ময়মনসিংহ: কোতয়ালী, ইসলামপুর, ঈশ্বরগঞ্জ, গৌরীপুর ও জামালপুর।\r\nদিনাজপুর: চিরিরবন্দর, ফুলবাড়ী ও খানসামা। রংপুর: নীলফামারী, সৈয়দপুর, ডিমলা, ডোমার, ঝালডাকা, কিশোরগঞ্জ, গঙ্গাচড়া, মিঠাপুকুর, বদরগঞ্জ, কালীগঞ্জ, হাতীবান্দা, পাটগ্রাম, পলাশবাড়ী ও সুন্দরগঞ্জ।\r\nবগুড়া: শেরপুর।'),
('৭', 'মিশ্র ধূসর, গাঢ় ধূসর এবং বাদামী প্লাবনভূমি মাটি।', 'তিস্তা প্লাবনভূমি মৃত্তিকা, উচ্চ শৈলশিরায় চুনহীন বাদামী প্লাবনভূমি মৃত্তিকা; ঋতুগতভাবে ভেজা বা প্লাবিত প্রধানত পলিময়, মিশ্র ধূসর প্লাবনভূমির মাটি এবং চুনহীন গাঢ় ধূসর প্লাবনভূমির মৃত্তিকা নিম্ন শৈলশিরায় এবং নিম্নচাপগুলিতে।', 'রংপুর: ভুরুঙ্গামারী, লালমনিরহাট ও ফুলবাড়ী।'),
('৮', 'ধূসর প্লাবনভূমি মাটি এবং চুনহীন গাঢ় ধূসর\r\nপ্লাবনভূমি মাটি', 'প্রধানত শৈলশিরায় ঋতুগতভাবে ভেসজ বা অগভীরভাবে প্লাবিত ধূসর প্লাবনভূমি মৃত্তিকা এবং ঋতুগতভাবে অগভীর বা গভীরভাবে প্লাবিত চুনহীন গাঢ় ধূসর প্লাবনভূমি মৃত্তিকা।', 'ঢাকা: গজারিয়া, আড়াই হাজার ও নরসিংদী। কিশোরগঞ্জ: হোসেনপুর, মোহনগঞ্জ, বারহাট্টা ও পূর্বধলা।\r\nময়মনসিংহ: নান্দাইল, ফুলপুর, জামালপুর, শেরপুর, নকলা ও মেলান্দহ।\r\nনোয়াখালী: কোম্পানীগঞ্জ, লক্ষ্মপুর, রায়পুর, বেগমগঞ্জ, সেনবাগ ও ফেনী।\r\nকুমিল্লা: মুরাদনগর, বুড়িচং, চৌদ্দগ্রাম, লাকসাম, বরুড়া, ফরিদগঞ্জ, হাজীগঞ্জ ও নবীনগর।'),
('৯', 'ধূসর প্লাবনভূমি মৃত্তিকা এবং অ্যাসিড বেসিন কাদামাটি', 'এটি সিলেটের পূর্ব সুরমা-কুশিয়ারা প্লাবনভূমি এবং কুমিল্লা অববাহিকা দখল করে আছে', 'কিশোরগঞ্জ: ভৈরব\r\nকুমিল্লা: কোতয়ালী ও বুড়িচং।\r\nসিলেট: বালাগঞ্জ, বিশ্বনাথ; ফেঞ্চুগঞ্জ, জকিগঞ্জ,\r\nবিয়ানীবাজার, হবিগঞ্জ, ছাতক, জগন্নাথপুর, মৌলভীবাজার ও রাজানগর।'),
('১০', 'ধূসর পাইডমন্ট মৃত্তিকা', 'ধূসর লাল বা বাদামী ছাপযুক্ত, মাত্রাতিরিক্ত অ্যাসিড সম্পন্ন, পূর্ব পাহাড় সংলগ্ন মৌসুমী ভেজা বা প্লাবিত পিডমন্ট সমভূমিতে  দোআঁশ কাদামাটি।', 'চট্টগ্রাম: কোতয়ালী, ডবলমুরিং, মিরসরাই, সীতাকুণ্ড, ফটিকছড়ি, রাউজান, রাঙ্গুনিয়া, বোয়ালখালী, পটিয়া, সাতকানিয়া, চকরিয়া, কুতুবদিয়া ও রামু। পার্বত্য চট্টগ্রাম: লামা।\r\nনোয়াখালী: ছাগলনাইয়া।\r\nকুমিল্লা: কসবা ও চৌদ্দগ্রাম।\r\nসিলেট: চুনারুঘাট, মৌলভীবাজার, কুলাউড়া, কমলগঞ্জ ও বড়লেখা।'),
('১১', 'অ্যাসিড বেসিন কাদামাটি', 'দৃঢ়ভাবে অ্যাসিড যুক্ত ভারী কাদামাটি, যার বিষদ অংশ স্থায়ীভাবে ভেজা।', 'ঢাকা: দোহার ও সিরাজদিখান।\r\nকিশোরগঞ্জ: অষ্টগ্রাম, নিকলী, ইটনা, খালিয়াজুরী, মদন, কলমাকান্দা ও দুর্গাপুর।\r\nকুমিল্লা: নাসিরনগর।\r\nসিলেট: নবীগঞ্জ, লাখাই, আজমিরীগঞ্জ, সুনামগঞ্জ, তাহিরপুর, দেরাই, সুল্লা ও জামালগঞ্জ।\r\nরাজশাহী: নওগাঁ, আত্রাই, রাণীনগর ও সিংড়া। সিরাজগঞ্জ: তাড়াশ।'),
('১২', 'চুনহীন গাঢ় ধূসর প্লাবনভূমি মৃত্তিকা', 'গাঢ় ধূসর, সূক্ষ্মভাবে বাদামী, এবং বাদামী মৃত্তিকা গাঢ় ধূসর বন্যা আবরণ সহ, ঋতু অনুসারে অ্যাসিড যুক্ত উপরের মাটি এবং প্রায় নিষ্ক্রিয় উপ-মৃত্তিকা। প্রধানত পুরাতন ব্রহ্মপুত্র-করতোয়া-বাঙালি (অংশ) এবং পুরাতন মেঘনা মোহনা প্লাবনভূমির ঋতুগতভাবে গভীরভাবে প্লাবিত মাটি', 'ঢাকা: তেজগাঁও, লৌহজং, টঙ্গীবাড়ী, আড়াইহাজার, রূপগঞ্জ ও সোনারগাঁও।\r\nকিশোরগঞ্জ: কোতয়ালী, পাকুন্দিয়া, করিমগঞ্জ, তাড়াইল, বাজিতপুর, কুলিয়ারচর, কাঠিয়াদী, নেত্রকোনা, আটপাড়া ও কেন্দুয়া।\r\nময়মনসিংহ: মুক্তাগাছা, ফুলবাড়িয়া, ত্রিশাল, সরিষাবাড়ী, বাসাইল, ঘাটাইল ও কালিহাতী।\r\nফরিদপুর: ভেদরগঞ্জ, নড়িয়া, মাদ্রীপুর ও পালং। নোয়াখালী: রামগঞ্জ।\r\nকুমিল্লা: চান্দিনা, দেবিদ্বার, দাউদকান্দি, কচুয়া, ব্রাহ্মণবাড়িয়া, সরাইল, নাসিরনগর, নবীনগর ও বাঞ্ছারামপুর।'),
('১৩', 'চুনযুক্ত গাঢ় ধূসর প্লাবনভূমি মৃত্তিকা এবং\r\nচুনযুক্ত বাদামী প্লাবনভূমি মাটি', 'প্রধানত গাঢ় ধূসর বা বাদামী কাদামাটি যেখানে গাঢ় ধূসর বন্যার আবরণ থাকে, কিছু চুনযুক্ত এবং কিছু জুড়ে ঋতু অনুসারে অ্যাসিডের উপরের মাটি এবং ৪ ফুটের মত চুনযুক্ত স্তর। বাদামী চুনযুক্ত দো-আঁশ উঁচু পাহাড় এবং নদীর তীরের কাছাকাছি মাটি।', 'ঢাকা: শ্রীনগর, মানিকগঞ্জ, হরিরামপুর ও শিবালয়।\r\nময়মনসিংহ: কোতয়ালী।\r\nফরিদপুর: ভাঙ্গা, নগরকান্দা, বালিয়াকান্দি, মুকসুদপুর, কোটালীপাড়া, কাশিয়ানী, কালকিনি, গোসাইরহাট, জাঞ্জিরা ও শিবচর।\r\nরাজশাহী: বোয়ালিয়া, পবা, পুঠিয়া, চারঘাট, ভোলাহাট, শিবগঞ্জ, গামুস্তাপুর, নাটোর, বাগাতিপাড়া, লালপুর, বড়াইগ্রাম ও গুরুদাসপুর। পাবনা: কোতয়ালী, আটঘরিয়া, ইশুরদী, চাটমোহর, ফরিদপুর, সাঁথিয়া, বেড়া ও সুজানগর।'),
('১৪', 'চুনযুক্ত চুনা কঙ্করযুক্ত গাঢ় ধূসর প্লাবনভূমি মাটি', 'প্রধানত চুনযুক্ত গাঢ় ধূসর প্লাবনভূমির মাটি, যার প্রায় অর্ধেক শক্ত রেখার কঙ্কর স্তর ২-৬ ফুট গভীর', 'রাজশাহী: বাগমারা, দুর্গাপুর'),
('১৫', 'চুনহীন বাদামী প্লাবনভূমি মাটি এবং ধূসর প্লাবনভূমি মাটি', 'ভূদৃশ্যে বাদামী মৃত্তিকা প্রধান এবং অধীনস্থ ধূসর মৃত্তিকা', 'ময়মনসিংহ: ফুলপুর, জামালপুর, মাদারগঞ্জ ও দেওয়ানগঞ্জ।\r\nদিনাজপুর: বীরগঞ্জ, কাহারোল, বিরল, বোচাগঞ্জ, ঠাকুরগাঁও, বালিয়াডাঙ্গী, রানীশংকৈল, হরিপুর, পীরগঞ্জ, দেবীগঞ্জ ও বোদা।'),
('১৬', 'কালো তরাই মাটি', 'ঋতুগতভাবে ভেজা, গাঢ় রঙের ক্বচিৎ অম্লীয়, শিলাস্তর, সমতল অঞ্চলে এবং নিম্নচাপের দোআঁশ মাটি', 'দিনাজপুর: প্যানসি\r\nহাগড়, আটোয়ারী ও তেতুলিয়া'),
('১৭', 'বাদামী পাহাড়ের মাটি', 'বাদামী, খুব শক্তিশালী অ্যাসিড, প্রধানত দোআঁশ মাটি', 'কিশোরগঞ্জ: দিনাজপুর।\r\nময়মনসিংহ: হালুয়াঘাট, শ্রীবর্দী ও নালিতাবাড়ী। চট্টগ্রাম: পার্বত্য চট্টগ্রামের পাঁচলাইশ, হাটহাজারী, মিরসরাই, ফটিকছড়ি, রাঙ্গুনিয়া, আনোয়ারা, বাঁশখালী, কক্সবাজার, রামু, মহেশকাহলী, টেকনাফ ও উখিয়া।\r\nনোয়াখালী: ছাগলনাইয়া ও পরশুরাম।\r\nকুমিল্লা: কোতয়ালী ও চৌদ্দগ্রাম।\r\nসিলেট: কোতয়ালী, গোয়াইনঘাট, গোলাপগঞ্জ, জৈন্তাপুর ও কানাইঘাট।'),
('১৮', 'লাল-বাদামী সোপান মাটি', 'ভাল থেকে মাঝারিভাবে সুনিষ্কাশিত, লাল এবং বাদামী, প্রবলভাবে অ্যাসিড, এঁটেল দো-আঁশ এবং কাদামাটি,গভীরভাবে ছিদ্রযুক্ত কাদামাটির স্তরের উপরে ১-৩ ফুটে কমপ্যাক্ট মধুপুর কাদামাটির উপর অংশ গভীরভাবে ছিদ্রযুক্ত কাদামাটির স্তরের উপরে', 'ঢাকা: শ্রীপুর, কাপাসিয়া, কালিগঞ্জ, গাজীপুর সদর, সাভার, কালিয়াখৈর, রূপগঞ্জ, শিবপুর ও মনোহরদী।\r\nময়মনসিংহ: ফুলবাড়িয়া, ত্রিশাল ও ঘাটাইল। কুমিল্লা: কসবা।\r\nরাজশাহী: নওয়াবগঞ্জ।\r\nদিনাজপুর: চাপিনবাবগঞ্জ, ঘরাঘাট। রংপুর: পীরগঞ্জ, গোবিন্দগঞ্জ ও সাদুল্লাপুর'),
('১৯', 'ধূসর সোপান মাটি', 'মৃদুভাবে নিষ্কাশিত, ধূসর ছাপযুক্ত, ধূসর মাটির উপর স্তরের অম্ল পলিমাটি', 'ঢাকা: গাজীপুর সদর।\r\nকিশোরগঞ্জ: দুর্গাপুর।\r\nময়মনসিংহ: হালুয়াঘাট, শ্রীবর্দী ও নালিতাবাড়ী। রাজশাহী: তানোর, গোদাগাড়ী, নওয়াবগঞ্জ, ভোলাহাট, নাচোল, শিবগঞ্জ, পোরশা, বদলগাছী, নিয়ামতপুর, মহাদেবপুর, রাণীনগর ও ধামইরহাট।\r\nদিনাজপুর: কোতয়ালী, পার্বতীপুর, ফুলবাড়ী ও হাকিমপুর।\r\nরংপুর: মিঠাপুকুর, গোবিন্দগঞ্জ, সাদুল্লাপুর। বগুড়া: পাঁচবিবি, ক্ষেতলাল, আদমদীঘি, দুবচাঁচিয়া, কাহালু, কোতয়ালী, শিবগঞ্জ ও নন্দীগ্রাম।\r\nসিরাজগঞ্জ: তাড়াশ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
