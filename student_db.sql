CREATE DATABASE student_db;
USE student_db;

CREATE TABLE student_records (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  department VARCHAR(100) NOT NULL,
  matricno VARCHAR(50) NOT NULL
);

-- Sample Data
INSERT INTO student_records (fullname, email, department, matricno) VALUES
('Alice Johnson', 'alice@example.com', 'Computer Science', 'CSC2001'),
('Brian Smith', 'brian@example.com', 'Mathematics', 'MTH2002'),
('Cynthia Lee', 'cynthia@example.com', 'Physics', 'PHY2003');
