-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2015 at 09:17 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `NAD`
--

-- --------------------------------------------------------

--
-- Table structure for table `novels`
--

CREATE TABLE `novels` (
  `id` int(11) NOT NULL,
  `Title` varchar(83) CHARACTER SET utf8 DEFAULT NULL,
  `Publisher` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `Year of First Publication` int(4) DEFAULT NULL,
  `City of Publication` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `First Edition` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `ISBN` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `Is this novel still in print?` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `Has this novel been reprinted?` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `Translations` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `Lastname` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `Firstname` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `BirthYear` int(4) DEFAULT NULL,
  `BirthCityand/orState` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `DeathYear` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `Sex` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `BirthCountry` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  ` BirthContinent/Territory` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Subgenre(s)` varchar(38) CHARACTER SET utf8 DEFAULT NULL,
  `Audience(s)` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `Element Foreground` varchar(41) CHARACTER SET utf8 DEFAULT NULL,
  `General Subject(s)` varchar(65) CHARACTER SET utf8 DEFAULT NULL,
  `Brief Synopsis` varchar(1330) CHARACTER SET utf8 DEFAULT NULL,
  `Why do you recommend this novel?` varchar(408) CHARACTER SET utf8 DEFAULT NULL,
  `Contributor Name` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `School/Institution` varchar(26) CHARACTER SET utf8 DEFAULT NULL,
  `Email Address` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `bookimage` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `novels`
--

INSERT INTO `novels` (`id`, `Title`, `Publisher`, `Year of First Publication`, `City of Publication`, `First Edition`, `ISBN`, `Is this novel still in print?`, `Has this novel been reprinted?`, `Translations`, `Lastname`, `Firstname`, `BirthYear`, `BirthCityand/orState`, `DeathYear`, `Sex`, `BirthCountry`, ` BirthContinent/Territory`, `Subgenre(s)`, `Audience(s)`, `Element Foreground`, `General Subject(s)`, `Brief Synopsis`, `Why do you recommend this novel?`, `Contributor Name`, `School/Institution`, `Email Address`, `bookimage`) VALUES
(1, 'Clotel; or The President''s Daughter: A Narrative of Slave Life in the United States', 'Partridge & Oakey', 1853, 'London', 'Hard-copy', '679783237', 'Yes', 'Yes', 'English', 'Brown', 'William Wells', 1814, 'Lexington, Kentucky', '1884', 'Male', 'USA', 'North America ', 'Historical Fiction, Historical Romance', 'Adult', 'Plot, Characterization', 'Gender, Race', 'In Clotel, Brown in part fictionalizes the now well-documented fact that Thomas Jefferson fathered children with his slave Sally Hemings. Brown plots more directly the travails of Clotel, daughter of Currer (Sally Hemings character), as she is sold multiple times as a mulatto throughout the South. Destined to  the same fate of her mother, concubinage, Clotel escapes slavery in order to free her daughter Mary in hopes of freedom for both of them but encounters the wide-reaching tentacles of chattel slavery in other destructive forms. ', '', 'Uzzie T. Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', ''),
(2, 'Mandy Oxendine', 'University of Illinois Press', 1997, 'Urbana', 'Hard-copy', '252063473', 'Yes', 'No', 'English', 'Chesnutt', 'Charles', 1858, 'Cleveland, Ohio', '1932', 'Male', 'USA', 'North America', 'Mystery, Historical Romance', 'Adult', 'Characterization', 'Gender, Race, Class, Education', '"In a novel rejected by a major publisher in the late nineteenth century as too shocking for its time, Charles W. Chesnutt challenges the notion that race, class, education, and gender must define where one''s "rightful" place in society should be. Both a romance and a mystery, Mandy Oxendine tells the compelling story of two fair-skinned, racially mixed lovers who choose to live on opposite sides of the color line; Tom Lowrey remains in the black community, and Mandy Oxendine chooses to pass for white. An alluring young woman, Mandy also is courted by an unscrupulous white landowner who is killed while sexually assaulting her. "\n--from the novel''s cover', 'This novel is characterizes one of the best tragic mulatto figures in African American literature.', 'Uzzie T. Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', ''),
(3, 'The House Behind the Cedars', 'Houghton  Mifflin', 1900, 'Boston', 'Hard-copy', '140186859', 'Yes', 'Yes', 'English, French, Japanese', 'Chesnutt', 'Charles', 1858, 'Cleveland, Ohio', '1932', 'Male', 'USA', 'North America', 'Historical Fiction, Historical Romance', 'Adult', 'Characterization', 'Gender, Race, Class', ' Chesnutt’s story is of two young African Americans who decide to pass for white in order to claim their share of the American dream.', 'Long before Larsen''s Passing, Chesnutt introduced in this novel the politics of racial passing and its consequences.', 'Uzzie T. Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', ''),
(4, 'The Quarry', 'Princeton University Press', 1999, 'Princeton', 'Hard-copy', '691059969', 'Yes', 'No', 'English', 'Chesnutt', 'Charles', 1858, 'Cleveland, Ohio', '1932', 'Male', 'USA', 'North America', 'Historical Fiction', 'Adult', 'Characterization', 'Gender, Race, Class', 'Was Donald Glover really what he seemed--a handsome, dedicated, and clever African-American star of the Harlem Renaissance, whose looks made him the "quarry" of a variety of women? Or could the secrets of his birth change his destiny entirely? Focusing on the culture of Harlem in the 1920s, Charles Chesnutt''s final novel dramatizes the political and aesthetic life of the exciting period we now know as the Harlem Renaissance. Mixing fact and fiction, and real and imagined characters, The Quarry is peopled with so many figures of the time--including Booker T. Washington, W. E. B. DuBois, and Marcus Garvey--that it constitutes a virtual guide to this inspiring period in American history. Protagonist Glover is a light-skinned man whose adoptive black parents are determined that he become a leader of the black people. Moving from Ohio to Tennessee, from rural Kentucky to Harlem, his story depicts not only his conflicted relationship to his heritage but also the situation of a variety of black people struggling to escape prejudice and to take advantage of new opportunities. \n--from the book''s cover', 'Chesnutt interweaves his fictional character with real characters in order to paint a unique picture of the Harlem Renaissance.  He  further highlights colorism that seeped into the HR from slavery.', 'Uzzie T. Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', ''),
(5, 'Native Son', 'Harper & Brothers', 1940, 'New York', 'Hard-copy', '006083756X', 'Yes', 'Yes', 'English, French, German', 'Wright', 'Richard', 1908, 'Natchez, Mississippi', '1960', 'Male', 'USA', 'North America', 'Urban Realism', 'Adult', 'Characterization, Setting', 'Gender, Race, Class', 'Right from the start, Bigger Thomas had been headed for jail. It could have been for assault or petty larceny; by chance, it was for murder and rape. Native Son tells the story of this young black man caught in a downward spiral after he kills a young white woman in a brief moment of panic. Set in Chicago in the 1930s, Wright''s powerful novel is an unsparing reflection on the poverty and feelings of hopelessness experienced by people in inner cities across the country and of what it means to be black in America.      --from book cover', 'This novel is a classic! Native Son is one of the most important novels to literature in America. It invites readers into the harsh realities of urban life for a Black man in Chicago. It provides literary contexts for why parents must talk to young Black men about how mainstream America perceives Black men.', 'Uzzie T. Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', ''),
(6, 'A Gathering of Old Men', 'Vintage', 1983, 'New York', 'Hard-copy', '679738908', 'Yes', 'Yes', 'English', 'Gaines', 'Ernest', 1933, 'Pointe Coupee, Louisiana', 'active', 'Male', 'USA', 'North America', 'Realism', 'Adult', 'Plot, Characterization, Point of View', 'Gender, Race', 'Set on a Louisiana sugarcane plantation in the 1970s, A Gathering of Old Men is a powerful depiction of racial tensions arising over the death of a Cajun farmer at the hands of a black man. --book cover', 'This is a simple but complex novel the uncovers the challenges of Black manhood and the response to systematic racial oppression. Students typically love the accessibility of the subject matter discussed therein.', 'Uzzie T Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', ''),
(7, 'Their Eyes Were Watching God', 'Lippincott', 1937, 'Philadelphia', 'Hard-copy', '9780060199494', 'Yes', 'Yes', 'English', 'Neale Hurston', 'Zora', 1891, 'Notasulga, Alabama', '1960', 'Female', 'USA', 'North America', 'Realism', 'Adult', 'Characterization, Style', 'Gender, Race, black feminism', '"One of the most important works of twentieth-century American literature, Zora Neale Hurston''s beloved 1937 classic, Their Eyes Were Watching God, is an enduring Southern love story sparkling with wit, beauty, and heartfelt wisdom. Told in the captivating voice of a woman who refuses to live in sorrow, bitterness, fear, or foolish romantic dreams, it is the story of fair-skinned, fiercely independent Janie Crawford, and her evolving selfhood through three marriages and a life marked by poverty, trials, and purpose. A true literary wonder, Hurston''s masterwork remains as relevant and affecting today as when it was first published—perhaps the most widely read and highly regarded novel in the entire canon of African American literature." --from book cover', 'Their Eyes Were Watching God is a classic African American novel. It''s steeped in the African American vernacular through language and communal practices. It foregrounds the homosocial bond of Black women. Moreover, it is epic in the way Janie learns through failure and success to love herself foremost.', 'Uzzie T. Cannon', 'Loyola University', 'ucannon@luc.edu', ''),
(8, 'Abeng', 'Crossing', 1984, 'Trumansburg', 'Hard-copy', '9780452274839', 'Yes', 'Yes', 'English', 'Cliff', 'Michelle', 1946, 'Kingston', 'active', 'Female', 'Jamaica', 'North America', 'Realism', 'Adult', 'Characterization', 'Gender, Race, Class, Coming of Age, Colonialism, Post-colonialism', '"Ever since Abeng was first published in 1984, Michelle Cliff has steadily become a literary force. Her novels evoke both the clearly delineated hierarchies of colonial Jamaica and the subtleties of present-day island life. Nowhere is her power felt more than in Clare Savage, her Jamaican heroine, who appeared, already grown, in No Telephone to Heaven. Abeng is a kind of prequel to that highly-acclaimed novel and is a small masterpiece in its own right. Here Clare is twelve years old, the light-skinned daughter of a middle-class family, growing up among the complex contradictions of class versus color, blood versus history, harsh reality versus delusion, in a colonized country. In language that surrounds us with a richness of meaning and voices, the several strands of young Clare''s heritage are explored: the Maroons, who used the conch shell—the abeng—to pass messages as they fought a guerilla struggle against their English enslavers; and the legacy of Clare''s white great-great-grandfater, Judge Savage, who burned his hundred slaves on the eve of their emancipation. A lyrical, explosive coming-of-age story combined with a provocative retelling of the colonial history of Jamaica, this novel is a triumph."--from book cover', 'Cliff masterfully plots Clare Savage''s coming-of-age against the backdrop of colonial issues surrounding identity in Jamaica. I think the larger issue explored in the novel attests to the impact of multiracial and multicultural identities converge and the havoc that the convergence creates.  ', 'Uzzie T. Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', ''),
(9, 'Sent For You Yesterday', 'Bard-Avon', 1983, 'New York', 'Hard-copy', '395877296', 'Yes', 'Yes', 'English', 'Wideman', 'John Edgar', 1941, 'Washington, D.C.', 'active', 'Male', 'USA', 'North America', 'Urban Realism, Historical Fiction', 'Adult', 'Setting, Style', 'Race, Class', '"Reimagining the black neighborhood of his youth Homewood, Pittsburgh -Wideman creates a dazzling and evocative milieu. From the wild and uninhibited 1920s to the narcotized 1970s, "he establishes aamythological and symbolic link between character and landscape, language and plot, that in the hands of a less visionary writer might be little more than stale sociology." --New York Times Book Review', 'The nostalgia of the characters for a time and place not too long ago made this novel powerful.  Their memory of what was and the realization of what is testifies to the unfortunate transition many African American saw in there own communities from the 1940s through the 60s and 70s. It made me nostalgic, especially with the beautiful language Wideman employs to tell the story of Homewood past and present.', 'Uzzie T. Cannon', 'Loyola University  Chicago', 'ucannon@luc.edu', ''),
(10, 'Clifford''s Blues', 'Coffee House Press', 1999, 'Minneapolis', 'Hard-copy', '9781566890809', 'Yes', 'No', 'English', 'Williams', 'John A.', 1925, 'Jackson, Mississippi', 'active', 'Male', 'USA', 'North America', 'Historical Fiction', 'Adult', 'Characterization, Setting, Style, Symbols', 'Gender, Race, Class, War/Conflict', '"If there is an undiscovered aspect of the black experience, it will be found by John A. Williams, one of the founding members of the Black Arts Movement of the 1960s and 1970s. In his newest of twelve novels, Williams presents the fictionalized narrative of a black jazz musician imprisoned in Dachau who keeps himself alive by working as the band leader of a group of prisoners who play jazz at a nearby officers’ club. Clifford’s Blues penetrates a hidden portion of African American history, and the hidden reserves of the heart.\n\nTold in journal form, this novel is the story of Clifford Pepperidge, a gay musician performing in Europe during the thirties. After he is caught in a compromising situation with a American diplomat, Clifford spends the duration of Hitler’s reign in Dachau. He escapes the worst horrors of the camp by working as the house servant to an SS officer.\n\nThe impetus to write Clifford’s Blues came in 1965 when the author saw a photo of two black prisoners in the Dachau museum. Over the years they recurred to him until, unable any longer to forget them, he began researching the history of black prisoners from the U.S., Europe, Africa, and Germany. Finding confirmation, he fictionalized his material, he says, “to both enlarge and personalize the events of that time.”--from Publisher', 'Had I not discovered this book at a conference, I would have never known about Black people in the Nazi concentration camps.  This novel should be mandatory reading for anyone who studies the Jewish Holocaust.', 'Uzzie T. Cannon', 'Loyola University Chicago', 'ucannon@luc.edu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `novels`
--
ALTER TABLE `novels`
  ADD PRIMARY KEY (`id`), ADD KEY `Full Title` (`Title`,`ISBN`,`Lastname`,`Firstname`), ADD KEY `Lastname` (`Lastname`,`Firstname`), ADD KEY `Firstname` (`Firstname`), ADD KEY `Firstname_2` (`Firstname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `novels`
--
ALTER TABLE `novels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;