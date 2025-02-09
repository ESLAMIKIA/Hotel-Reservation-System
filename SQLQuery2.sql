CREATE TABLE Users (
    id INT PRIMARY KEY IDENTITY(1,1),
    full_name NVARCHAR(100) NOT NULL,
    email NVARCHAR(100) UNIQUE NOT NULL,
    password NVARCHAR(255) NOT NULL,
    phone NVARCHAR(15),
    created_at DATETIME DEFAULT GETDATE(),
    updated_at DATETIME DEFAULT GETDATE()
);
CREATE TABLE Hotels (
    id INT PRIMARY KEY IDENTITY(1,1),
    name NVARCHAR(100) NOT NULL,
    location NVARCHAR(255) NOT NULL,
    description NVARCHAR(MAX),
    rating DECIMAL(3,2) CHECK (rating BETWEEN 0 AND 5),
    created_at DATETIME DEFAULT GETDATE(),
    updated_at DATETIME DEFAULT GETDATE()
);
CREATE TABLE Rooms (
    id INT PRIMARY KEY IDENTITY(1,1),
    hotel_id INT FOREIGN KEY REFERENCES Hotels(id) ON DELETE CASCADE,
    room_type NVARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    capacity INT NOT NULL,
    availability BIT DEFAULT 1,
    created_at DATETIME DEFAULT GETDATE(),
    updated_at DATETIME DEFAULT GETDATE()
);
CREATE TABLE Bookings (
    id INT IDENTITY(1,1) PRIMARY KEY,
    user_id INT NOT NULL,
    hotel_id INT NOT NULL,
    check_in DATE NOT NULL,
    check_out DATE NOT NULL,
	guests int not null,
    created_at DATETIME DEFAULT GETDATE(),
    updated_at DATETIME DEFAULT GETDATE(),

);
insert into Bookings(user_id,hotel_id,check_in,check_out,guests)
values(1,1,'2025-04-02','2025-03-02',1)

CREATE TABLE Payments (
    id INT PRIMARY KEY IDENTITY(1,1),
    reservation_id INT FOREIGN KEY REFERENCES Reservations(id) ON DELETE CASCADE,
    payment_method NVARCHAR(50) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    payment_status NVARCHAR(50) DEFAULT 'pending',
    transaction_id NVARCHAR(100),
    created_at DATETIME DEFAULT GETDATE(),
    updated_at DATETIME DEFAULT GETDATE()
);
INSERT INTO Users (full_name, email, password, phone) 
VALUES 
('ghazal', 'ghazal@example.com', 'hashegffg123', '0916534789'),
('Sara Ahmadi', 'sara@example.com', 'hashedpassword456', '09234567890');

INSERT INTO Hotels (name, location, description, rating) 
VALUES 
('Hotel', 'Masshad', 'Luxury hotel in Masshad', 3.5),
('Beach Resort', 'Kish', 'Beautiful seaside resort', 4.8);

INSERT INTO Rooms (hotel_id, room_type, price, capacity, availability) 
VALUES 
(1, 'Single', 500000, 1, 1),
(1, 'Double', 750000, 2, 1),
(2, 'Suite', 1500000, 4, 1);

select * from Rooms
select * from Hotels 
select * from Users
select * from Bookings
select * from Payments


