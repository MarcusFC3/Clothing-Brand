CREATE TABLE Customers(
	Customer_ID INT IDENTITY PRIMARY KEY,
	First_Name varchar(50),
	Last_Name varchar(50),
	Email_Address varchar(400)
	CONSTRAINT PK_CUSTOMER_ID PRIMARY KEY
)
CREATE TABLE Products(
	Product_ID int IDENTITY PRIMARY KEY,
	Price money,
	Quantity int
	CONSTRAINT PK_PRODUCT_ID PRIMARY KEY
)
CREATE TABLE SIZE(
	Size_ID int PRIMARY KEY,
	Size varchar('25')
)



CREATE TABLE Orders
(
	Customer_ID int FOREIGN KEY REFERENCES Customers,
	Product_ID int FOREIGN KEY references Products
	PRIMARY KEY(Customer_ID, Product_ID)
)
