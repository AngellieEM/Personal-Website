create database website_experience;
use website_experience;
drop database website_experience;

create table my_experience (
	Periode varchar (100) not null,
    Experience varchar(500) not null, 
    Detail varchar(2000) not null
);

drop table my_experience;

insert into my_experience values
('2021 - 2022', 'EPIC Committee Marketing | SU ISB (Information System for Business) ', 
'The duties of being part of the EPIC marketing team are to contact high schools to 
promote the EPIC competition, contact MedPart (Media Partnership) to promote the EPIC 
competition, promote the EPIC competition on social media such as Instagram, Line OA, TikTok, 
and Twitter, and hold and manage Instagram EPIC.'),

('2022', 'AMD | O-Week', 
'AMD stands for Advice and Mentoring Department which has the task of guiding and accompanying 
mentees (new students) for 5 days during their introduction to the new campus environment.'),

('2021 - 2022', 'Business and Entrepreneurship competition | UKMF Inspire', 
'Participating in this competition as a group by creating BMC (Business Model Canva) and after 
participating in various selections, we were in the top 30.')
;