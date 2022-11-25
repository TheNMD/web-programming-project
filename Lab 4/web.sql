CREATE DATABASE web;

USE web;

CREATE TABLE USER (
	`ID` varchar(200) NOT NULL,
    `Name` varchar(200) NOT NULL,
    `Sex` varchar(200) NOT NULL,
    `Birthdate` datetime NOT NULL,
    `Phone` varchar(200) NOT NULL,
    `Email` varchar(200) NOT NULL,
    `Address` varchar(200) NOT NULL,
    `Password` varchar(200) NOT NULL,
    PRIMARY KEY(`ID`)
);

CREATE TABLE PRODUCT (
	`ID` varchar(200) NOT NULL,
    `Name` varchar(200) NOT NULL,
    `Brand` varchar(200) NOT NULL,
    `Type` varchar(200) NOT NULL,
    `Price` int NOT NULL,
    `Quantity` int NOT NULL,
    PRIMARY KEY(`ID`)
);

INSERT INTO `USER` (`ID`, `Name`, `Sex`, `Birthdate`, `Phone`, `Email`, `Address`, `Password`) VALUES
					('000000', 'Pham Anh Quan', 'M', '1990-12-09', '0909xxxxx2', 'abc@gmail.com', '65 Ham Nghi, P.Nguyen Thai Binh, Q.1, TPHCM', 'Abc123456'),
                    ('000001', 'Nguyen Hai Dang', 'M', '2005-10-07', '0909xxxxx6', 'sdw55s@gmail.com', '109 Tran Duy Hung, P.Trung Hoa, Q.Cau Giay, Ha Noi', 'WAD5423ssdw'),
                    ('000002', 'Nguyen Manh Dan', 'M', '1995-06-17', '0909xxxxx8', 'ttrww66@gmail.com', '1006 3 Thang 2, P.14, Q.10, TPHCM', 'TTrs564xw5'),
                    ('000003', 'Truong Nguyen Hung Thinh', 'M', '1998-11-29', '0903xxxxx6', '7sdawwx@gmail.com', '84 Nui Thanh, P.Hoa Cuong Bac, Q.Hai Chau, Da Nang', 'AweTT3456'),
                    ('000004', 'Dao Anh Tuan', 'M', '2001-03-23', '0903xxxxx1', 'dromm522@gmail.com', '241 Dao Duy Tu, P.7, Q.10, TPHCM', '81hHE23ddw456'),
                    ('000005', 'Bui Quoc Minh Quan', 'M', '1987-01-21', '0902xxxxx7', 'dw5wex2@gmail.com', '491 Tran Nguyen Han, P.Ho Nam, Q.Le Chan, Hai Phong', 'PS48882wwec'),
                    ('000006', 'Nguyen Ha Trong Hieu', 'M', '1988-12-13', '0903xxxxx5', 'pokk53s@gmail.com', '178 Le Thanh Nghi, P.Dong Tam, Q.Hai Ba Trung, Ha Noi', 'bbgdSN134jt6'),
                    ('000007', 'Chu Gia Vu Khanh', 'M', '2008-05-04', '0902xxxxx4', 'halu4xm@gmail.com', '315 Vo Van Ngan, P.Linh Chieu, Q.Thu Duc, TP.HCM', 'XWsae228l');
                    
INSERT INTO `PRODUCT` (`ID`, `Name`, `Brand`, `Type`, `Price`, `Quantity`) VALUES
					('000000', 'Fexophar', 'TV.Pharm', 'Medicine', 95000, 14),
                    ('000001', 'Amxolmuc', 'Pymepharco', 'Medicine', 250000, 4),
                    ('000002', 'Daflon', 'Servier', 'Medicine', 222000, 50),
                    ('000003', 'Stugeron', 'Janssen', 'Medicine', 200000, 27),
                    ('000004', 'Tanganil', 'Pierre Fabre', 'Medicine', 144000, 3),
                    ('000005', 'Efticol', 'FT Pharma', 'Medicine', 2500, 19),
                    ('000006', 'Zentel', 'gsk', 'Medicine', 11000, 17),
                    ('000007', 'Efferalgan', 'Bristol - Myers Squibb', 'Medicine', 44800, 9),
                    ('000008', 'Arginine', 'Việt Đức', 'Functional food', 160000, 23),
                    ('000009', 'Herba Cool', 'Thảo Dược Việt', 'Functional food', 19000, 10),
                    ('000010', 'Ginkgo Biloba', 'Progetic', 'Functional food', 390000, 23),
                    ('000011', 'Ultra Memore', 'Vitamins For Life', 'Functional food', 330000, 12),
                    ('000012', 'Maxxhair', 'E & S Co.Ltd', 'Functional food', 200000, 6),
                    ('000013', 'Digelase', 'SPM', 'Functional food', 196000, 3),
                    ('000014', 'Ocuvite Lutein', 'Bausch & Lomb', 'Functional food', 216000, 14),
                    ('000015', 'Costar Omega-3', 'Costar Pharma', 'Functional food', 324000, 20),
					('000016', 'Lipo Balance', 'Eucerin', 'Cosmetics', 249000, 10),
                    ('000017', 'Ceradan Hydra', 'Hyphens', 'Cosmetics', 315000, 23),
                    ('000018', 'SPF50+', 'Anessa', 'Cosmetics', 685000, 12),
                    ('000019', 'Perfect UV Milk', 'Senka', 'Cosmetics', 175000, 6),
                    ('000020', 'Advanced Nourish', 'Hada Labo', 'Cosmetics', 75000, 3),
                    ('000021', 'Gentle Skin', 'OEM', 'Cosmetics', 82000, 14),
                    ('000022', 'Sanyrene', 'Urgo', 'Cosmetics', 182000, 20),
                    ('000023', 'Emergency 400', 'Dottor Primo', 'Cosmetics', 350000, 20);
                    
SELECT * from USER;
SELECT * from PRODUCT;

DELETE FROM USER;
DELETE FROM PRODUCT;

DROP TABLE USER;
DROP TABLE PRODUCT;
DROP DATABASE ecom;
