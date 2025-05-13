-- ----------------------------------------------- Day 1 --------------------------------------------------
-- database creation
CREATE DATABASE 2408f2;

-- use of database
USE 2408f2;

-- table creation
CREATE TABLE students (
studentId INT,
name VARCHAR (100),
age INT,
city VARCHAR(100)
);

-- Read 
SELECT * FROM students;

-- insert data
-- INSERT INTO students (studentId, name, age, city) 
-- VALUE (1, "Ali", 21, "Karachi");

INSERT INTO pyarayBachay (studentId, name, age, city) 
VALUE (2, "Bilal", 22, "Lahore"), (3, "Usman", 22, "Karachi"), (4, "Tahir", 17, "Lahore");

-- Update
UPDATE students 
SET age = 24 WHERE name = "Usman";

-- DO on Safe update
SET SQL_SAFE_UPDATES = 0;

-- delete data
DELETE FROM students WHERE studentId = 4;


-- ----------------------------------------------- Day 2--------------------------------------------------
-- DDL Queries

DROP TABLE students;

DROP DATABASE 2408f2;

TRUNCATE students;

DELETE FROM students;

DELETE FROM students WHERE name = "Tahir";

RENAME TABLE students TO pyarayBachay;

-- Read 
SELECT * FROM pyarayBachay;

-- ALTER
-- change datatype
ALTER TABLE pyarayBachay 
MODIFY COLUMN age VARCHAR(255);

-- add new column
ALTER TABLE pyarayBachay
ADD email VARCHAR(100);

-- drop column
ALTER TABLE pyarayBachay
DROP COLUMN email;

ALTER TABLE pyarayBachay
CHANGE city shehr VARCHAR(200);


-- ----------------------------------------------- Day 3--------------------------------------------------

INSERT INTO pyarayBachay (studentId, name, shehr) 
VALUE (2, "Bilal", "Lahore");

SELECT * FROM pyarayBachay;

CREATE TABLE students (
  id INT PRIMARY KEY AUTO_INCREMENT,
  naam VARCHAR(100) NOT NULL,
  age INT NOT NULL CHECK (age >= 18 AND age <= 30),
  email VARCHAR(100) UNIQUE NOT NULL,
  city VARCHAR(50) DEFAULT 'Karachi'
);


SELECT * FROM students;

INSERT INTO students (naam, age, city)
VALUES ('Ali', 30, 'Lahore');


-- select with where
SELECT * FROM students WHERE city = 'Multan';

SELECT * FROM students WHERE age >= 27;

SELECT naam FROM students WHERE city = 'karachi';

SELECT name, shehr FROM pyarayBachay WHERE studentId = 3;


INSERT INTO students (naam, age, email, city) VALUES
('Ali Khan', 20, 'ali.khan1@example.com', 'Karachi'),
('Sara Ahmed', 22, 'sara.ahmed2@example.com', 'Lahore'),
('Usman Tariq', 24, 'usman.tariq3@example.com', 'Islamabad'),
('Zara Noor', 21, 'zara.noor4@example.com', 'Karachi'),
('Hamza Sheikh', 19, 'hamza.sheikh5@example.com', 'Faisalabad'),
('Ayesha Iqbal', 23, 'ayesha.iqbal6@example.com', 'Multan'),
('Bilal Saeed', 25, 'bilal.saeed7@example.com', 'Rawalpindi'),
('Mariam Aslam', 26, 'mariam.aslam8@example.com', 'Peshawar'),
('Fahad Ali', 27, 'fahad.ali9@example.com', 'Hyderabad'),
('Nida Khan', 20, 'nida.khan10@example.com', 'Quetta'),
('Omar Riaz', 22, 'omar.riaz11@example.com', 'Sialkot'),
('Hina Zafar', 21, 'hina.zafar12@example.com', 'Karachi'),
('Imran Asif', 24, 'imran.asif13@example.com', 'Lahore'),
('Mehwish Bukhari', 28, 'mehwish.bukhari14@example.com', 'Karachi'),
('Tariq Jamil', 30, 'tariq.jamil15@example.com', 'Islamabad'),
('Rabia Shah', 19, 'rabia.shah16@example.com', 'Faisalabad'),
('Shahid Afridi', 23, 'shahid.afridi17@example.com', 'Multan'),
('Sana Mir', 21, 'sana.mir18@example.com', 'Rawalpindi'),
('Adnan Sami', 22, 'adnan.sami19@example.com', 'Peshawar'),
('Bushra Ansari', 25, 'bushra.ansari20@example.com', 'Hyderabad'),
('Zeeshan Malik', 28, 'zeeshan.malik21@example.com', 'Quetta'),
('Asma Abbas', 27, 'asma.abbas22@example.com', 'Sialkot'),
('Junaid Jamshed', 29, 'junaid.jamshed23@example.com', 'Karachi'),
('Farah Khan', 20, 'farah.khan24@example.com', 'Lahore'),
('Salman Butt', 19, 'salman.butt25@example.com', 'Islamabad'),
('Nimra Ahmed', 24, 'nimra.ahmed26@example.com', 'Faisalabad');

SELECT * FROM students WHERE city = 'Lahore'
LIMIT 2;

SELECT * FROM students;

-- ----------------------------------------------- Day 4 --------------------------------------------------

SET sql_mode = 'STRICT_ALL_TABLES';       -- to stop data insertion on not null. 

INSERT INTO students (naam, age, email, city) VALUES
('Ali Khan', 20, 'alikhan1@example.com', 'Karachi');

-- CLAUSES AND STATEMENT
-- distinct
SELECT DISTINCT * FROM pyaraybachay;

SELECT DISTINCT name FROM pyaraybachay;

SELECT DISTINCT shehr FROM pyaraybachay;

-- order by
SELECT * FROM students ORDER BY naam;
SELECT * FROM students ORDER BY naam ASC;
SELECT * FROM students ORDER BY naam DESC;

SELECT * FROM students ORDER BY age;

SELECT * FROM students WHERE age <> 22;
SELECT * FROM students WHERE NOT age = 22;

-- logiocal Opr
SELECT * FROM students WHERE age = 20 OR age = 24 OR age = 26 OR age = 27 OR age = 30 ORDER BY age;
-- or
SELECT * FROM students WHERE age = 20 OR age = 24 OR age = 26 OR age = 27 OR age = 30;

-- and
SELECT * FROM students WHERE age = 25 AND city = 'karachi';

-- AND & OR
SELECT * FROM students WHERE age = 25 OR city = 'karachi';
SELECT * FROM students WHERE age = 25 AND (city = 'karachi' OR naam = 'Ali Khan');
SELECT * FROM students WHERE age = 25 AND city = 'karachi' OR naam = 'Ali Khan';
SELECT * FROM students WHERE age = 25 OR (city = 'karachi' AND naam = 'Ali Khan');

-- in
SELECT * FROM students WHERE age IN (20, 24, 26, 27, 30);

-- between 
SELECT * FROM students WHERE age BETWEEN 20 AND 24;
SELECT * FROM students WHERE NOT age BETWEEN 20 AND 24;

-- like
SELECT * FROM students WHERE naam LIKE 'A%';
SELECT * FROM students WHERE naam LIKE '%n';
SELECT * FROM students WHERE naam LIKE '%a_';
SELECT * FROM students WHERE naam LIKE '_i%';
SELECT * FROM students WHERE naam LIKE '_l_';
SELECT * FROM students WHERE naam LIKE '__m%';

-- FUNCTIONS
-- Aggregate Functions
SELECT COUNT(*) FROM students;

SELECT COUNT(email) FROM students;

SELECT COUNT(*) FROM students;

SELECT * FROM pyaraybachay;

-- ----------------------------------------------- Day 5 --------------------------------------------------

SELECT COUNT(*) FROM pyaraybachay;
SELECT COUNT(age) FROM pyaraybachay;
SELECT COUNT(shehr) FROM pyaraybachay;

SELECT * FROM students;
SELECT naam, MAX(age) FROM students;
SELECT MIN(age) FROM students;
SELECT AVG(age) FROM students;
SELECT SUM(age) FROM students;

SELECT * FROM pyaraybachay;
SELECT shehr AS City FROM pyaraybachay;


CREATE TABLE employees (
    emp_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    department VARCHAR(50),
    salary DECIMAL(10, 2),
    join_date DATE
);

INSERT INTO employees (name, department, salary, join_date) VALUES
('Alice', 'HR', 50000, '2020-01-15'),
('Bob', 'Sales', 60000, '2019-03-22'),
('Charlie', 'HR', 52000, '2021-06-10'),
('David', 'IT', 70000, '2018-11-03'),
('Eva', 'IT', 75000, '2017-05-19'),
('Frank', 'Sales', 58000, '2020-02-25'),
('Grace', 'Finance', 67000, '2019-07-30'),
('Hannah', 'Finance', 69000, '2020-09-14'),
('Ian', 'HR', 53000, '2021-01-10'),
('Jack', 'IT', 72000, '2022-03-05'),
('Karen', 'Sales', 61000, '2021-04-18'),
('Leo', 'Finance', 65000, '2018-08-23'),
('Mia', 'IT', 74000, '2020-12-12'),
('Nina', 'Sales', 62000, '2022-02-27'),
('Oscar', 'Finance', 68000, '2020-10-05'),
('Paul', 'HR', 51000, '2021-07-16'),
('Queen', 'IT', 73000, '2019-06-11'),
('Ron', 'Sales', 60500, '2018-04-01'),
('Sophia', 'Finance', 66000, '2017-09-25'),
('Tom', 'HR', 54000, '2023-01-02'),
('Uma', 'Sales', 61500, '2021-11-20'),
('Victor', 'Finance', 64500, '2022-07-13'),
('Wendy', 'IT', 76500, '2023-03-29'),
('Xander', 'HR', 55000, '2020-06-08'),
('Yara', 'Sales', 63000, '2022-12-04'),
('Zane', 'Finance', 64000, '2021-09-30'),
('Aaron', 'IT', 71000, '2019-10-18'),
('Bella', 'Sales', 60000, '2023-04-25'),
('Cody', 'HR', 50000, '2022-05-15'),
('Daisy', 'Finance', 65500, '2023-02-22');

SELECT * FROM employees;

SELECT name, SUM(salary) FROM employees;
SELECT name, MIN(salary) FROM employees;
SELECT name, MAX(salary) FROM employees;

SELECT department, SUM(salary) FROM employees
GROUP BY department;

SELECT department, SUM(salary) FROM employees
WHERE join_date = '2020-01-15' GROUP BY department;

-- Show departments having more than 4 employees
SELECT department, COUNT(*) AS emp_count
FROM employees
GROUP BY department
HAVING COUNT(*) > 7;

SELECT department, SUM(salary) AS emp_count
FROM employees
GROUP BY department
HAVING COUNT(*) > 7;

-- Subquerries
SELECT name, salary FROM employees WHERE salary = (SELECT MIN(salary) FROM employees);
SELECT name, salary FROM employees WHERE salary = (SELECT MAX(salary) FROM employees);
SELECT AVG(salary) FROM employees;


-- ----------------------------------------------- Day 6 --------------------------------------------------

-- Joins

CREATE TABLE department (
deptId INT PRIMARY KEY auto_increment,
deptName VARCHAR(100) UNIQUE NOT NULL);

INSERT INTO department (deptName)
VALUES ('HR'),
('Marketing'),
('SRO');

CREATE TABLE employee (
empId INT PRIMARY KEY,
empName VARCHAR(100) UNIQUE NOT NULL,
departmentId INT,
FOREIGN KEY (departmentId) REFERENCES department (deptId));

INSERT INTO employee (empId, empName, departmentId)
VALUES (101, 'Qasim', 1),
(102, 'Kashan', 1),
(103, 'Shahbaz', 2),
(104, 'Ifrah', 3),
(105, 'Muntazir', 1),
(106, 'Wasay', 3),
(107, 'Alaina', 2),
(108, 'Abdul Rehman', 3),
(109, 'Ayesha', 1);

SELECT * FROM department;
SELECT * FROM employee;

-- join query
--- inner join ----
SELECT * FROM employee
INNER JOIN department
ON department.deptId = employee.departmentId;

SELECT empName, deptName FROM employee
INNER JOIN department
ON department.deptId = employee.departmentId;

SELECT employee.empName, department.deptName FROM employee
INNER JOIN department
ON department.deptId = employee.departmentId;

SELECT e.empName, d.deptName FROM employee AS e
INNER JOIN department AS d
ON d.deptId = e.departmentId;




