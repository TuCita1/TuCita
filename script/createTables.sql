CREATE TABLE Tipo_Usuario (
  Id int(11) NOT NULL AUTO_INCREMENT,
  Nombre varchar(120) NOT NULL,
  Descripcion varchar(120) NOT NULL,  
  PRIMARY KEY (Id)
);

CREATE TABLE Menu (
    Id int(11) NOT NULL AUTO_INCREMENT,
    Nombre varchar(120) NOT NULL,
    Link varchar(120) NOT NULL,  
    Path varchar(120) NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE Usuario (
  Id int(11) NOT NULL AUTO_INCREMENT,
  Nombre varchar(120) NOT NULL,
  Apellido varchar(120) NOT NULL,
  Telefono varchar(50) NOT NULL,
  Correo varchar(30) NOT NULL,
  Contrasena varchar(10) NOT NULL,  
  Numero_Documento int NOT NULL,  
  Tipo_Usuario_Id int NOT NULL,
  PRIMARY KEY (Id),
  FOREIGN KEY (Tipo_Usuario_Id) REFERENCES Tipo_Usuario(Id)
);