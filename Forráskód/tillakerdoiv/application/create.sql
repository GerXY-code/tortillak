/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  user
 * Created: 2021.09.28.
 */

CREATE TABLE employees(
    id INT NOT NULL AUTO_INCREMENT, 
    name VARCHAR(500) NOT NULL, 
    tin CHAR(10) NOT NULL, 
    ssn CHAR(9) NOT NULL, 
    sex CHAR(1) NOT NULL, 
    
    CONSTRAINT PK_employees PRIMARY KEY(id), 
    CONSTRAINT UQ_employees_tin UNIQUE(tin), 
    CONSTRAINT UQ_employees_ssn UNIQUE(ssn)
);

