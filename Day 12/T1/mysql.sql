-- task one
SELECT c.title,COUNT(e.course_id) AS total FROM courses c
JOIN enrollments e ON c.id =e.course_id
GROUP BY c.id;
-- task two
SELECT name FROM students 
whERE id = (
    SELECT student_id FROM enrollments
    GROUP BY student_id
    ORDER BY COUNT(*) ASC
    LIMIT 1
     );
-- task three
SELECT name FROM students 
whERE id NOT IN (
    SELECT student_id FROM enrollments
    GROUP BY student_id
     );
-- task four
SELECT name ,COUNT(e.course_id) AS total FROM students s
JOIN enrollments e ON s.id = e.student_id
GROUP BY s.id