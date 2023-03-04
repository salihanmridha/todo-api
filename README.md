# Project Name - TODO API

## Requirements:
- The API should allow users to create, view, edit, and delete to-do lists.
- Each to-do list should have a name and a list of tasks associated with it.
- Users should be able to add, view, edit, and delete tasks within each to-do list.
- The application should be designed and built following best practices and design patterns.
- The application should be well-documented and testable.
- Use of version control systems such as Git is mandatory.
- Write a few test cases to ensure that the API is functioning as expected.

## Few Assumptions
- Authentication required for any action of todo or task
- Task will be add one by one under a todo
- Todo can not be deleted if there is any task belong. tasks first need to delete and then todo can be delete.
- On task update it is not possible to update task's todo.

## Architecture and Design Pattern
I have chosen to use the Service Layer and Repository design patterns in my implementation of the todo app API with Laravel.

![architecture diagram](https://salihanmridha.com/wp-content/uploads/2023/03/Blank-diagram.jpeg)


### Repository design pattern
The Repository pattern provides a consistent and uniform way to access and manipulate data from data sources, such as a database. The Repository acts as a collection of data access methods, abstracting the underlying data store and providing a simple and consistent interface to the Service Layer. This pattern helps decouple the application from specific data storage technologies, which can be easily swapped out or modified without affecting the rest of the codebase.
### Service layer design pattern
The Service Layer pattern provides a clear separation of concerns between the presentation layer (i.e., the controllers and routes) and the data access layer (i.e., the repositories). The Service Layer acts as an intermediary between the two layers, encapsulating the business logic and exposing a simplified API to the presentation layer. This pattern helps improve code maintainability and testability, as well as promoting code reuse and modularity.

Together, these two patterns provide a solid foundation for building a scalable, maintainable, and testable API that can evolve over time as business needs change.

### ERD

![db erd diagram](https://salihanmridha.com/wp-content/uploads/2023/03/todo-erd.jpeg)

## Project Setup

### Prerequisite
- PHP v8.1 minimum
- Composer [more details](https://getcomposer.org/)
- MySQL Database driver
- Sqlite database driver

### Installation

- Clone the repository (```git clone https://github.com/salihanmridha/todo-api.git```) 
- go to root directory of the application, (```cd todo-api```)
- Install composer - ```composer install```
- Copy and rename ```.env.example``` to ```.env```
- Give your database credential and change host in .env file
- Run ```php artisan key:generate```
- Run ```php artisan optimize:clear```
- Run ```php artisan migrate --seed```
- That's it! Application setup done.

## Swagger API documentation
You will find swagger API documentation on YOUR_URL/api/documentation. For me it is: http://localhost/api/documentation.

Your might be:
`http://localhost:8000/api/documentation` or `http://127.0.0.1:8000/api/documentation`

If you want to change server url of swagger then please go to `.env` file and change the value of these variables:

`L5_SWAGGER_CONST_HOST=http://localhost/api/`
`L5_SWAGGER_CONST_HOST_COMMON=http://localhost:8000/api/`
`L5_SWAGGER_CONST_HOST_COMMON_IP=http://127.0.0.1:8000/api/`

## Exception handling
For handling any exception, I've used `Handler.php` file. There I added most common scenarios to handle exception. All the exception will return a standard json format data with error messages.

## How to use the application

The application has 3 part. **Authentication, Todos and Tasks**. Authentication required for any operation of Todos and Tasks.

### Authentication
You'll find details documentation and how to use the authentication [here](http://localhost:8000/api/documentation#/Authentication) or YOUR_URL/api/documentation#/Authentication. 
#### Default User (if you ran seeder)
user email: salihanmridha@gmail.com

password: 123456

### Todos
You'll find details documentation and how to use the Todos [here](http://localhost:8000/api/documentation#/Todo) or YOUR_URL/api/documentation#/Todo

### Tasks
You'll find details documentation and how to use the Tasks [here](http://localhost:8000/api/documentation#/Tasks) or YOUR_URL/api/documentation#/Tasks

## Test cases
I have written total 24 test cases to ensure the api functionality is working correctly. I've skipped user test cases and I assumed the main focus is on todos and tasks.

To run test cases, you need to run ```php artisan test``` command in your cli.

#### List of test cases

✓ unauthenticated user cant create task                                                                                                                       
✓ unauthenticated user cant get single task                                                                                                                   
✓ unauthenticated user cant update task                                                                                                                       
✓ unauthenticated user cant delete task                                                                                                                       
✓ authenticated user can create task

✓ authenticated user cant create task of other user todo                                                                                                      
✓ authenticated user can view task with todo                                                                                                                  
✓ authenticated user cant view task of other user todo                                                                                                        
✓ authenticated user can update task                                                                                                                          
✓ authenticated user can delete task                                           

✓ unauthenticated user cant get all todos                                                                                                                     
✓ unauthenticated user cant create todo                                                                                                                       
✓ unauthenticated user cant get single todo                                                                                                                   
✓ unauthenticated user cant update todo                                                                                                                       
✓ unauthenticated user cant delete todo                                                                                                                       
✓ authenticated user can create todo                                                                                                                         
✓ authenticated user cannot create todo without fill name                                                                                                     
✓ authenticated user can get todo list                                                                                                                        
✓ authenticated user can view todo with tasks                                                                                                                 
✓ authenticated user can not view other user todo                                                                                                             
✓ authenticated user can update todo                                           

✓ authenticated user can not update other user todo                                                                                                           
✓ authenticated user can delete todo                                                                                                                          
✓ authenticated user cant delete other user todo







