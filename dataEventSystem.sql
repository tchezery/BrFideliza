INSERT INTO administrator(name, email, phone, password)
VALUES
	('Joao Jose', 'jblabla@gmail.com', 1657465154, 123123),
	('Macelo Marcio', 'sldihlji@gmail.com', 12315468, 132123);
    

select * from administrator;    
    
INSERT INTO event(name, categories, description, num_participant, id_administrator)
VALUES 
	('Hackaton Taguatinga', 'system developers', 'Event to you developer your imagination and aprimorate your knowledge', 150, 2),
    ('Python Class','Learn','Learn Python and create sistems', 40, 1),
    ('Presentation about developers future', 'Meet', 'Meet Seniors and talk about currentaffairs/future', 40, 1);
    
select * from event; 