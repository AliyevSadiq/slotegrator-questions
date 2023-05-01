create table grade
(
    id bigint unsigned auto_increment
        primary key,
    min_mark int unsigned not null,
    max_mark int unsigned not null
);