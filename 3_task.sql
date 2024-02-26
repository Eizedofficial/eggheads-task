SELECT
    u.name,
    u.phone,
    SUM(o.subtotal),
    AVG(o.subtotal),
    MAX(o.created)
FROM
    users AS u
LEFT JOIN
    orders AS o
ON
    u.id = o.user_id
GROUP BY
    u.id, u.name, u.phone



