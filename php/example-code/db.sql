-- Create
x = SELECT max(id)
FROM todo

INSERT INTO todo
VALUES(x+1,"meeting","meet with Bob", "2019-03-02 18:05:00", "2019-03-02 18:05:00",1)

-- using AI
INSERT INTO todo
VALUES(null,"meeting","meet with Bob", "2019-03-02 18:05:00", null,1)

INSERT INTO todo(user_id, title, description, create_at)
VALUES(1, "meeting","meet with Bob", "2019-03-02 18:05:00")

INSERT INTO todo(a, b, c, d, e, f, g, ....)
VALUES(123.4, 33.2, 55, 65.8, 45.4, "F", "u543", 354.3, ...)

INSERT INTO todo
SET
    a = 123.4,
    b = 33.2,
    f = "F"


INSERT INTO todo(a)
VALUES(123),
VALUES(456),

-- Y-m-d H:i:s
-- 2019-03-02 18:05:00

-- SQL
-- now()
-- PHP
-- echo date("Y-m-d H:i:s");



-- update
UPDATE todo
SET
    title = "meeting2",
    update_at = now()
WHERE id = 4

-- delete
DELETE FROM todo
WHERE id = 10

DELETE FROM todo
TRUNCATE TABLE todo

-- READ
SELECT id,title,user_id
FROM todo

SELECT *
FROM todo


SELECT *
FROM todo
WHERE x > 5 AND y <> 10 OR NOT z = "FAIL"
-- if($x > 5 && y != 10 || !z=="FAIL")

SELECT * FROM `todo`
WHERE id = 3 OR id = 4 OR id = 5

SELECT * FROM `todo`
WHERE id in(3, 4, 5)

SELECT count(*)
FROM todo
WHERE user_id = 1

SELECT min(id) as minId
FROM todo