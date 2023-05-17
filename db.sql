use tuti;
create table productos(
id int,
nombre varchar(40),
precio double
)

insert into productos values(1,'Cereza','0.80');
insert into productos values(2,'Chocolate','0.95');
insert into productos values(3,'Cerveza','2.25');

select * from productos;