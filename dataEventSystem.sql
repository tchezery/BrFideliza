select * from event; 
select * from administrator;    
select * from participant; 
select * from registration; 

INSERT INTO administrator(name, email, phone, password)
VALUES
	('Joao Jose', 'jblabla@gmail.com', 1657465154, 123123),
	('Macelo Marcio', 'sldihlji@gmail.com', 12315468, 132123);
    
INSERT INTO event(name, categories, address, cost, num_participant, datetime_event, description, id_administrator)
VALUES 
	('Hackaton Taguatinga',            'developers',                     'Projection College - Guara II (Guara)', 23.99, 50, '2025-02-12 18:00:00','Event to you developer your imagination and aprimorate your knowledge', 2),
    ('Python Class',                        'Learn', 'Projection University Center - Campus 1 - P4 - Taguatinga',  21.99, 40, '2025-04-01 08:00:00',                                      'Learn Python and create sistems', 1),
    ('Presentation about developers future', 'Meet', 'Projection University Center - Campus 1 - P4 - Taguatinga',  16.00, 80, '2025-06-05 10:00:00',                    'Meet Seniors and talk about currentaffairs / future', 1);
    
INSERT INTO registration(id_participant, id_event, datetime_payment, status, ticket)
VALUES  
	(1, 1, "2025-01-30 13:05:03", "Full registration", 5654);