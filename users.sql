CREATE TABLE Users (
  userID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
  username VARCHAR(20) NOT NULL,
  password VARCHAR(40) NOT NULL,
  fname VARCHAR(30) NOT NULL,
  lname VARCHAR(30) NOT NULL,
  email VARCHAR(40) NOT NULL
  PRIMARY KEY (username)
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

CREATE TABLE RequestService (
  jobNo INT NOT NULL AUTO_INCREMENT,
  requested TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  
  fname VARCHAR(30) NOT NULL, 
  lname VARCHAR(30) NOT NULL, 
  company VARCHAR(50) NOT NULL, 
  email VARCHAR(40) NOT NULL,
  projectType VARCHAR(20), 
  CONSTRAINT rs_check CHECK(projectType IN ('website', 'application', 'social media')), 
  CONSTRAINT rspk PRIMARY KEY(jobNo)
);
