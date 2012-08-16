/*
Test file to insert comments into the comment table from a web form.
*/

insert into Comments(comments_name, comments_email, comments_detail)
values ($c_name, $c_email, $c_detail);
