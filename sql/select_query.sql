SELECT
    CASE
        WHEN mark >= 8 THEN name
        ELSE 'low'
        END AS name,
    g.id,
    mark
FROM
    students
        LEFT JOIN grade g ON s.grade_id = g.id
ORDER BY
    mark DESC,
    CASE
        WHEN mark >= 8 THEN name
        ELSE ''
        END ASC,
    CASE
        WHEN mark <= 7 THEN mark
        END ASC;