
create database project_management;
create table projects
(
    id int not null AUTO_INCREMENT,
    project_name varchar (255),
    deleted_at timestamp,
    created_at timestamp,
    updated_at timestamp,
    primary key(id)
);

create table tasks
(
    id int not null AUTO_INCREMENT,
    task_name varchar(255),
    description varchar(255),
    project_id int,
    is_status varchar(255),
    assigned_name varchar(255),
    deleted_at timestamp,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY key(id),
    FOREIGN key(project_id) REFERENCES projects(id)
    );

    create table images(
    id int not null AUTO_INCREMENT,
    image_path varchar(255),
    model_id int,
    model_name varchar(255),
    deleted_at timestamp,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY key(id)
    );