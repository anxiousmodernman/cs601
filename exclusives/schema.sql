/*
 Database schema file.

TABLES:
product
price
productDescription
comments
*/


-- create database cemhoste_exclusives
use dsadcorg_exclusives;


-- drop table Product;
-- drop table Price;
-- drop table ProductDescription;
-- drop table Comments;
-- drop table Images;

create table Product(
    id integer primary key,
    product_name text
);

create table Price(
    price_group text,
    price integer,
    product_id integer references Product(id)
);

create table Image(
    url text,
    alt_text text,
    product_id integer references Product(id)
);

create table ProductDescription(
    product_summary text,
    product_detail text,
    product_id integer references Product(id)
);

create table Comments(
    comments_id integer primary key,
    comments_name text,
    comments_email text,
    comments_detail text
);


-- Insert data into tables

-- Populate Product table
insert into Product(id, product_name) values (1, '2012 Best Of');
insert into Product(id, product_name) values (2, 'Dedicated Send');
insert into Product(id, product_name) values (3, 'Special Report');
insert into Product(id, product_name) values (4, 'Sponsored Feature');

-- Populate Price table
insert into Price(price_group, price, product_id) values ('Group A', 10000, 1); -- Best Of prices
insert into Price(price_group, price, product_id) values ('Group B', 11000, 1); -- Best Of prices
insert into Price(price_group, price, product_id) values ('Group C', 12000, 1); -- Best Of prices
insert into Price(price_group, price, product_id) values ('Group D', 15000, 1); -- Best Of prices

insert into Price(price_group, price, product_id) values ('Group A', 20000, 2); -- Dedicated Send prices
insert into Price(price_group, price, product_id) values ('Group B', 21000, 2); -- Dedicated Send prices
insert into Price(price_group, price, product_id) values ('Group C', 22000, 2); -- Dedicated Send prices
insert into Price(price_group, price, product_id) values ('Group D', 25000, 2); -- Dedicated Send prices

insert into Price(price_group, price, product_id) values ('Group A', 10000, 3); -- Special Report prices
insert into Price(price_group, price, product_id) values ('Group B', 11000, 3); -- Special Report prices
insert into Price(price_group, price, product_id) values ('Group C', 12000, 3); -- Special Report prices
insert into Price(price_group, price, product_id) values ('Group D', 15000, 3); -- Special Report prices

insert into Price(price_group, price, product_id) values ('Group A', 15000, 4); -- Sponsored Feature prices
insert into Price(price_group, price, product_id) values ('Group B', 16000, 4); -- Sponsored Feature prices
insert into Price(price_group, price, product_id) values ('Group C', 17000, 4); -- Sponsored Feature prices
insert into Price(price_group, price, product_id) values ('Group D', 18000, 4); -- Sponsored Feature prices


-- Populate ProductDescription table

insert into ProductDescription(product_summary, product_detail, product_id) values ('Best Of product summary','The Best Of send captures the most important and interesting stories shared in a specific SmartBrief during the calendar year. It is also sets the stage for the coming year with an original thought piece (either a Q&A with an industry leader or an association executive, or commentary from the brief&apos;s editor) as well as predictions based on audience polling.',1); -- Best Of description
insert into ProductDescription(product_summary, product_detail, product_id) values ('Dedicated Send summary','The Dedicated Send is an opportunity for a single sponsor to send a 100% ad-content email to one of our professional audience segments. Please notes that there are a limited quantity available per year in order for SmartBrief to maintain product quality and engagement rates. ',2); -- Dedicated Send description
insert into ProductDescription(product_summary, product_detail, product_id) values ('Special Report product summary','The Special Report is a 1 or 2 part email send to an entire e-newsletter audience. It has a single sponsor. SmartBrief maintains a list of approved topics with our partner associations, so it is an opportunity for the advertiser to align themselves with the hottest news in their industry.  SmartBrief produces all the content, advertiser has an exclusive sponsorship of the report, with 3 or more ad units devoted to them.',3); -- Special Report description
insert into ProductDescription(product_summary, product_detail, product_id) values ('Sponsored Feature summary','The Sponsored Feature is an opportunity for advertisers to send advertorial content to the SmartBrief audience.',4); -- Sponsored Feature description


-- Populate Image table

insert into Image(url, alt_text, product_id) values ('images/bst_thumb.png', 'A screenshot of the Best Of sponsored email', 1); -- Best Of thumbnail
insert into Image(url, alt_text, product_id) values ('images/ds_thumb.png', 'A screenshot of the Dedicated Send sponsored email', 2); -- Dedicated Send thumbnail
insert into Image(url, alt_text, product_id) values ('images/sr_thumb.png', 'A screenshot of the Special Report sponsored email', 3); -- Special Report thumbnail
insert into Image(url, alt_text, product_id) values ('images/sf_thumb.png', 'A screenshot of the Sponsored Feature sponsored email', 4); -- Sponsored Feature thumbnail

insert into Image(url, alt_text, product_id) values ('images/bst_main.png', 'A screenshot of the Best Of sponsored email', 1); -- Best Of main image
insert into Image(url, alt_text, product_id) values ('images/ds_main.png', 'A screenshot of the Dedicated Send sponsored email', 2); -- Dedicated Send main image
insert into Image(url, alt_text, product_id) values ('images/sr_main.png', 'A screenshot of the Special Report sponsored email', 3); -- Special Report main image
insert into Image(url, alt_text, product_id) values ('images/sf_main.png', 'A screenshot of the Sponsored Feature sponsored email', 4); -- Sponsored Feature main image


