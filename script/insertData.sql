INSERT INTO Tipo_Usuario (nombre,descripcion)VALUES 
('Cliente','Es el cliente del aplicativo'),
('Proveedor','Es el proveedor del aplicativo'),
('Invitado','Es el invitado del aplicativo');

INSERT INTO menu (nombre, link, path)VALUES 
('Inicio','/Inicio',"Proveedor"),
('Agenda','/Agenda',"Proveedor"),
('Calificaciones','/Calificaciones',"Proveedor"),
('Frase de Spa','',"Spa"),
('Frase de Salon','',"Salon"),
('Frase de Salon','',"Cliente");