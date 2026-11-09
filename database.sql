-- SONARA FEST Database Schema
-- Database: konser

CREATE DATABASE IF NOT EXISTS \konser\ DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE \konser\;

-- Table structure for \users\
CREATE TABLE IF NOT EXISTS \users\ (
  \id\ INT(11) NOT NULL AUTO_INCREMENT,
  \
ama_lengkap\ VARCHAR(100) NOT NULL,
  \email\ VARCHAR(100) NOT NULL UNIQUE,
  \password\ VARCHAR(255) NOT NULL,
  \
o_telepon\ VARCHAR(20) NOT NULL,
  \created_at\ TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (\id\)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
