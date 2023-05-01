create table students
(
    id bigint unsigned auto_increment
        primary key,
    grade_id bigint unsigned not null,
    marks int unsigned not null,
    name varchar(100) not null,

    constraint students_grade_id_foreign
        foreign key (grade_id) references grade (id)
)
    collate=utf8mb4_unicode_ci;