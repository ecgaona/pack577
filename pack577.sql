DROP TABLE IF EXISTS pack577;
CREATE DATABASE pack577;

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int NOT NULL,
  `scout_name` varchar(21) NOT NULL,
  `signin_date` date NOT NULL,
  `signin_time` time NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `dens`
--

CREATE TABLE `dens` (
  `den_id` int NOT NULL,
  `den_name` varchar(7) NOT NULL
);

--
-- Dumping data for table `dens`
--

INSERT INTO `dens` (`den_id`, `den_name`) VALUES
(1, 'Lion'),
(2, 'Tiger'),
(3, 'Wolf'),
(4, 'Bear'),
(5, 'Webelos'),
(6, 'AOL');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `requirement_id` int NOT NULL,
  `den_id` int NOT NULL,
  `requirements` varchar(255) NOT NULL,
  `meeting_date` date NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `scouts`
--

CREATE TABLE `scouts` (
  `scout_name` varchar(21) NOT NULL,
  `den_id` int NOT NULL
);

--
-- Dumping data for table `scouts`
--

INSERT INTO `scouts` (`scout_name`, `den_id`) VALUES
('Blair Mcmurray', 1),
('Chase Crutchfield', 1),
('Corey Olea', 1),
('Keenan Thode', 1),
('Brain Brody', 2),
('Calvin Dimattia', 2),
('Dannie Lucian', 2),
('Elvin Christine', 2),
('Porfirio Higgenbotham', 2),
('Ramon Collingwood', 2),
('Rigoberto Colyer', 2),
('Shane Osterberg', 2),
('Solomon Seidel ', 2),
('Dallas Bozeman', 3),
('Jeff Mercuri', 3),
('Jeremiah Zheng', 3),
('Jeromy Oh', 3),
('Jerrell Waldschmidt', 3),
('Kurtis Manzella', 3),
('Morgan Weiskopf', 3),
('Wes Hoppe', 3),
('Adolfo Hamblin', 4),
('Arnold Lastinger', 4),
('Arturo Seville', 4),
('Bennett Hagans', 4),
('Dominique Keppler', 4),
('Laverne Deblois', 4),
('Santo Peltz', 4),
('Fredrick Gula', 5),
('Manuel Boller', 5),
('Sebastian Hanel', 5),
('Antione Slough', 6),
('Blaine Folmar', 6),
('Clay Espey', 6),
('Hershel Kerley', 6),
('Jeffery Gaytan', 6),
('Lewis Mcburney', 6),
('Mack Grande', 6),
('Terrell Drum', 6),
('Wilbert Sheth', 6),
('Willis Pollard', 6),
('Wilton Riggio', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `scout_name` (`scout_name`);

--
-- Indexes for table `dens`
--
ALTER TABLE `dens`
  ADD PRIMARY KEY (`den_id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`requirement_id`),
  ADD KEY `den_id` (`den_id`);

--
-- Indexes for table `scouts`
--
ALTER TABLE `scouts`
  ADD PRIMARY KEY (`scout_name`),
  ADD KEY `den_id` (`den_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dens`
--
ALTER TABLE `dens`
  MODIFY `den_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `requirement_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`scout_name`) REFERENCES `scouts` (`scout_name`);

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`den_id`) REFERENCES `dens` (`den_id`);

--
-- Constraints for table `scouts`
--
ALTER TABLE `scouts`
  ADD CONSTRAINT `scouts_ibfk_1` FOREIGN KEY (`den_id`) REFERENCES `dens` (`den_id`);
COMMIT;
