-- Create database
USE MyResume;

-- Create tables
CREATE TABLE Portfolio
(
   ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Platform VARCHAR(255),
   Application VARCHAR(255),
   Languages VARCHAR(255),
   Framework VARCHAR(255),
   Company VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Profiles
(
   ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255),
   Email VARCHAR(255),
   Phone VARCHAR(255),
   Position VARCHAR(255),
   Description TEXT
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Experiences
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Position VARCHAR(255),
   Company VARCHAR(255),
   Location VARCHAR(255),
   Date VARCHAR(255),
   Description TEXT
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Softwares
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Languages
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255),
   StartDate DATE
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Frameworks
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Architectures
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE DesignPatterns
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE DatabaseSystems
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Designs
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Name VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Educations
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Time VARCHAR(255),
   Degree VARCHAR(255),
   Education VARCHAR(255),
   School VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE Contacts
(
   ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   Email VARCHAR(255),
   Phone VARCHAR(255),
   Github VARCHAR(255),
   LinkedIn VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

-- Insert data
INSERT INTO Profiles (Name, Position, Description) VALUES
('Ihda Mukhoyar', 'Mobile Apps Developer', 'Experienced Mobile Application Developer with 7+ years of experience in the software industry. Demonstrated history of delivering high-quality mobile solutions. Skilled in mobile technologies (Java, Kotlin, Flutter/Dart), web technologies (PHP, JS, Python), databases (SQL, NoSQL), architectures (Clean Architecture, MVVM, MVC), and design patterns (Repository, Factory, Singleton, Observer). Proficient with development tools and services including Git, Android SDK, Flutter SDK, Gradle, Firebase, Google APIs, Socket.IO, GraphQL, and CI/CD pipelines. Strong engineering professional with proven ability to lead teams and implement robust architectural patterns to develop scalable applications for both Android and iOS platforms.');

INSERT INTO Contacts (Email, Phone, Github, LinkedIn) VALUES
('ihdatech@gmail.com','085727116115', 'github.com/ihdatech', 'linkedin.com/in/ihda-mukhoyar-2a7a7a133');

INSERT INTO Educations (Time, Degree, Education, School) VALUES
('2012 - 2016', 'Bachelor of Computer Science - Information Technology', 'University of Dian Nuswantoro', NULL),
('2010 - 2011', 'Public School - Science major', 'Kradenan 1 State Senior High School', NULL),
('2007 - 2010', 'Public School', 'Kradenan 3 State Junior High School', NULL);

INSERT INTO Experiences (Position, Company, Location, Date, Description) VALUES
('Mobile Engineer', 'INA DIGITAL', 'Jakarta, Indonesia', 'Jan 2024 - Present', 'Mengembangkan aplikasi mobile dengan menggunakan Clean Architecture dan Domain-Driven Design (DDD).\nBertanggung jawab untuk pengembangan fitur baru dan maintenance aplikasi existing.\nBekerja dalam tim dengan metodologi Agile untuk delivery yang efektif.\nMengoptimalkan performa aplikasi dan implementasi best practices.'),
('Mobile Engineer', 'Digital Transformation Office (DTO) Kemenkes', 'South Jakarta, Jakarta, Indonesia', 'Mar 2023 - Dec 2023', 'Mengembangkan aplikasi mobile yang intuitif dan memenuhi kebutuhan bisnis serta pengguna.\nBertanggung jawab dari perancangan hingga peluncuran aplikasi menggunakan Swift, Java, Kotlin, dan Dart.\nBekerja sama dengan tim lintas fungsi untuk memastikan integritas aplikasi dan user experience yang optimal.\nMengoptimalkan performa aplikasi untuk kecepatan, responsivitas, dan penggunaan sumber daya.\nMengimplementasikan Agile Methodologies dan Android Development best practices.'),
('Senior Mobile Developer', 'PT. UKUR KREASI NUSANTARA', 'Jakarta, Indonesia', 'February 2022 - January 2023', 'Memimpin pengembangan aplikasi mobile menggunakan Flutter Framework untuk platform Android dan iOS.\nMengembangkan fitur seperti chatting, verifikasi akun, dan geocoding dengan arsitektur bersih (Clean Architecture).\nMenggunakan teknologi seperti BLoC, Cubit, Socket.IO, HiveDB, ObjectBox, dan GraphQL.\nBekerja sama dengan tim lintas fungsi untuk memastikan kelancaran pengembangan dan integrasi fitur.'),
('Android Developer', 'PT. MNC Sky Vision Tbk', 'Kedoya, Jakarta Barat', 'August 2019 - February 2022', 'Mengembangkan aplikasi MIVI (Mitra Vision) dengan Flutter Framework, berfokus pada aplikasi technical dan sales.\nMengintegrasikan plugin seperti BLoC, Riverpod, FCM, PostgreSQL, dan OneSignal.\nMelakukan debugging dan optimasi performa aplikasi untuk meningkatkan pengalaman pengguna.'),
('Android & Backend Developer', 'PT. Ximpli Multi Solution', 'Green Lake City, Tangerang', 'July 2017 - August 2019', 'Mengembangkan aplikasi seperti AMS Andalan, MAPS Acquiring, dan MSM Aeon menggunakan Java, Kotlin, dan PHP.\nBerfokus pada pengembangan fitur dan integrasi API Restful dengan arsitektur MVC, MVP, dan MVVM.\nMenggunakan plugin seperti FCM, Google Maps, dan Room untuk memastikan fungsionalitas dan performa optimal.'),
('Android & Backend Developer', 'PT. Trimagnus Prima Dharma', 'Alam Sutera, Tangerang', 'June 2017 - July 2017', 'Mengembangkan aplikasi POS Kedai27 menggunakan Java dan Slim Framework untuk Rest API.\nMenggunakan Google Maps API, Firebase, dan SQLite untuk integrasi fitur backend dan frontend.'),
('Web Developer', 'PT. Masaji Tatanan Container', 'Industri Cipta, Semarang', 'August 2015 - January 2016', 'Mengembangkan aplikasi web internal untuk manajemen container.\nMelakukan optimasi dan pemeliharaan aplikasi berbasis PHP dan MySQL.\nBerperan dalam debugging, pengembangan fitur baru, dan memastikan performa aplikasi yang stabil.');

INSERT INTO Portfolio (Platform, Application, Company, Languages, Framework) VALUES
('Web', 'eCoins', 'Masaji Tatanan Container', 'PHP', 'CodeIgniter & EasyUI'),
('Web', 'APPLICATION OF WIRING HARNESS PRODUCTION LEVEL GROUPING AT PT. KINENTA INDONESIA', 'Tugas Akhir', 'PHP, HTML, JQuery, JS, & CSS', NULL),
('Android', 'Kedai 27', 'Warung Indonesia', 'Java', 'Slim Framework'),
('Android', 'Mobile Sales Market', 'ÆON', 'Java', 'PHP'),
('Android', 'MAPS', 'Acquiring Pembayaran Elektronis', 'Java', 'PHP'),
('Android', 'AMS', 'Andalan Finance', 'Kotlin', 'Slim Framework'),
('Android', 'Gapanik Assistance', 'Global Multi Caraka', 'Kotlin', NULL),
('Android & iOS', 'MIVI (Mitra Vision)', 'MNC Sky Vision', 'Flutter', NULL),
('Android & iOS', 'Ukur Merchant', 'Ukur Kreasi Nusantara', 'Flutter', NULL),
('Android & iOS', 'Ukur Customer', 'Ukur Kreasi Nusantara', 'Flutter', NULL),
('Android & iOS', 'Sehat IndonesiaKu (ASIK)', 'Digital Transformation Office (DTO), Kementerian Kesehatan Indonesia', 'Flutter', NULL);

INSERT INTO Languages (Name, StartDate) VALUES
('SQL', NULL),
('NoSQL', NULL),
('HTML', NULL),
('XML', NULL),
('CSS', NULL),
('PHP', NULL),
('JS', NULL),
('Go', NULL),
('Python', NULL),
('Java & Android', '2017-06-01'),
('Kotlin & Android', '2017-07-01'),
('Dart & Flutter', '2019-08-01'),
('Swift', NULL);

INSERT INTO Frameworks (Name) VALUES
('CodeIgniter'),
('Laravel'),
('Slim'),
('Lumen'),
('Flask'),
('Flutter');

INSERT INTO Architectures (Name) VALUES
('Clean Architecture'),
('Domain-Driven Design (DDD)');

INSERT INTO DesignPatterns (Name) VALUES
('BLoC'),
('MVVM'),
('MVC'),
('MVP');

INSERT INTO DatabaseSystems (Name) VALUES
('MySQL'),
('SQLite'),
('PostgreSQL'),
('HiveDB'),
('ObjectBox');

INSERT INTO Designs (Name) VALUES
('Bootstrap'),
('Material'),
('Materialize');

INSERT INTO Softwares (Name) VALUES
('Android Studio'),
('Visual Studio Code'),
('Xcode'),
('NetBeans'),
('PHP Storm'),
('Sqlyog'),
('DBeaver'),
('Insomnia'),
('Postman'),
('GitHub'),
('Bitbucket'),
('GitLab');

-- Create Views
CREATE OR REPLACE VIEW v_profile_info AS
SELECT 
    p.Name,
    p.Position,
    p.Description,
    c.Email,
    c.Phone,
    c.Github,
    c.LinkedIn
FROM Profiles p
LEFT JOIN Contacts c ON p.ID = c.ID;

CREATE OR REPLACE VIEW v_experience_details AS
SELECT 
    Position,
    Company,
    Location,
    Date,
    Description
FROM Experiences
ORDER BY 
    CASE 
        WHEN Date LIKE '%Present%' THEN 1
        ELSE 2
    END,
    Date DESC;

CREATE OR REPLACE VIEW v_education_timeline AS
SELECT 
    Time,
    Degree,
    Education,
    School
FROM Educations
ORDER BY Time DESC;

CREATE OR REPLACE VIEW v_technical_skills AS
SELECT 
    'Languages' as Category,
    Name as Skill,
    StartDate
FROM Languages
UNION ALL
SELECT 
    'Frameworks' as Category,
    Name as Skill,
    NULL as StartDate
FROM Frameworks
UNION ALL
SELECT 
    'Architectures' as Category,
    Name as Skill,
    NULL as StartDate
FROM Architectures
UNION ALL
SELECT 
    'Design Patterns' as Category,
    Name as Skill,
    NULL as StartDate
FROM DesignPatterns
UNION ALL
SELECT 
    'Database Systems' as Category,
    Name as Skill,
    NULL as StartDate
FROM DatabaseSystems
UNION ALL
SELECT 
    'Design Tools' as Category,
    Name as Skill,
    NULL as StartDate
FROM Designs
UNION ALL
SELECT 
    'Development Tools' as Category,
    Name as Skill,
    NULL as StartDate
FROM Softwares;

CREATE OR REPLACE VIEW v_portfolio_projects AS
SELECT 
    Platform,
    Application,
    Company,
    Languages,
    Framework
FROM Portfolio
ORDER BY Platform, Application;

-- Add indexes for better performance
ALTER TABLE Experiences ADD INDEX idx_date (Date);
ALTER TABLE Languages ADD INDEX idx_startdate (StartDate);
ALTER TABLE Portfolio ADD INDEX idx_platform (Platform);
ALTER TABLE Portfolio ADD INDEX idx_application (Application); 