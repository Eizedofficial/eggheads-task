-- 1.	Написать запрос для вывода самой большой зарплаты в каждом департаменте
SELECT
    DepartmentId,
    MAX(Salary)
FROM
    table
GROUP BY
    DepartmentId;

-- 2.	Написать запрос для вывода списка сотрудников из 3-го департамента у которых ЗП больше 90000
SELECT
    Name,
    LastName
FROM
    table
WHERE
    DepartmentId = 3
    AND Salary > 90000;

-- 3.	Написать запрос по созданию индексов для ускорения
CREATE INDEX table_index
ON table (DepartmentId, Id, Salary);


