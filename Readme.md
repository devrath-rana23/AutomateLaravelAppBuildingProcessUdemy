# WHAT IS BLUEPRINT

Blueprint is a tool that will read human understandable text and generate the corresponding laravel components so that the developer doesn't spend a lot of time and effort doing repetitive tasks.

With blueprint you will write the name once and it will be converted to the suitable format for table model migration.

# STEPS GENERALLY FOLLOWED FOR MAKING LARAVEL APP

1)New DB
2)Make .env
3)Make migrations
4)Make model
5)Make controllers and other services

# STEPS FOLLOWED FOR MAKING LARAVEL APP USING BLUEPRINT

1)New empty DB
2)We manage the connection to it in the .env file.
3)then we use the ERD to make blueprint of our models and
4)we can use some logic diagrams to blueprint the controllers.
5)Result will be blueprint yml file.
6)Once file is created with required data and DB connection is made we can make huge amount of laravel components including
Migrations
Models
Controllers
Actions
Routers
Views
Jobs
Mailable
Resources
7)Pass through each and every controller action and make sure that it's functioning properly.
Maybe you want to add some code that can't be blueprinted.

# BLUEPRINT IS A GREAT WAY TO MAKE MIGRATIONS AND MODEL BUT THE LOGIC INSIDE CONTROLLERS AND ACTIONS NEED SOME HUMAN PERSPECTIVE SO YOU CAN BENEFIT FROM BLUEPRINT IN GENERATING THE TEMPLATE OF YOUR ACTIONS NUT NEVER RELY ON IT TO BUILS A 100% WORKING CODE.

# YAML ain't a markup language

It's a language similar to JSON and XML in usage, which is data transfer and notation.
It's human readable
Supported by many programming languages.

# Recommended for YAML file to start with three dahes(---) and end with three dots(...)

# It supports many datatypes like strings(with or without) numbers like integers, floating points and decimal. Boolean=>

True, Yes, On:True
False, No, Off:False

# White space is not ignored in here. It can change an object from a parent to a child. Indentation us important

## EXAMPLE-

---
Foods: #This is parent
  Carbs: #This is child
    -bread
Vegetables: #This is sibling of Foods
    -onion
...

# Array multiple line dashes
Array elements should begin in new line with a dash(-)

---
Foods: #This is parent
  Carbs: #This is child
    -bread
    -rice
    -pasta
    -cake
Vegetables: #This is sibling of Foods
    -onion
...

OR in one line using square brackets

---
Foods: #This is parent
  Carbs: [bread,rice,pasta,cake]
Vegetables: #This is sibling of Foods
    -onion
...

# Objects - Dictionaries

To indicate an object or a record, put the name of it in a single line and a semicolon after it and then list key-value pairs underneath it. separating them with a semicolon

---
Car:
  Manufacturer: "TXS"
  Year: "2018"
  Capacity: "2000 CC"
...

OR PUTTING THEM IN CURLY BRACES IN SINGLE LINE

Car: {Manufacturer: "TXS",Year: "2018",Capacity: "2000 CC"}

# USE dbdiagram.io to make basic yml -> https://dbdiagram.io/d


