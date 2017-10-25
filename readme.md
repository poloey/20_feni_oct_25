# [:house: Feni Batch Home Page](http://poloey.github.io/feni)
# class 20 

### Order by clause in mysql
~~~sql
select * from <tableName> where salary > 1000 order by name;
//or
select * from <tableName> where salary > 1000 order by name asc;
select * from <tableName> where salary > 1000 order by name desc;
~~~

### timestamp datatype in sql table
~~~sql
create table employees (
    id int(11) primary key auto_increment,
    name varchar(33) not null,
    mobile varchar(33) not null,
    email varchar(33),
    salary int(11),
    date_of_join timestamp
    );
2038-01-19 03:14:07
~~~
default format of `timestamp` is `2038-01-19 03:14:07`

### ternary operator 
~~~php
$name1 = 'tofael';
echo  ($name1 === 'tofaell') ? 'hello world' : 'not hello world';
or 
echo  $name1 === 'tofaell' ? 'hello world' : 'not hello world';
~~~

### switch statement
~~~php
switch ($name1) {
  case 'tofael': 
    echo 'hello tofael';
    break;
  case 'nazim':
    echo 'hello nazim';
    break;
  default:
    echo 'hello world';
}
~~~
