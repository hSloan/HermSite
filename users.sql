CREATE TABLE Users (
  userID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
  username VARCHAR(20) NOT NULL,
  password VARCHAR(40) NOT NULL,
  fname VARCHAR(30) NOT NULL,
  lname VARCHAR(30) NOT NULL,
  email VARCHAR(40) NOT NULL
);

CREATE TABLE  Post (
  postID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
  username VARCHAR(20) NOT NULL,
  userID INT NOT NULL REFERENCES Users(userID),
  comments VARCHAR(140) NOT NULL, 
  hashtags VARCHAR(140) NOT NULL, 
  postDay DATETIME,
  uploadTime DATETIME,
  types VARCHAR(10) NOT NULL REFERENCES Media(types),
  path VARCHAR(80) NOT NULL
);

CREATE TABLE Media (
  userID INT NOT NULL REFERENCES users(userID),
  types VARCHAR(10) NOT NULL CHECK(types IN('instagram','facebook','twitter')),
  loginName VARCHAR(40) NOT NULL, 
  loginPassword VARCHAR(40) NOT NULL
);
