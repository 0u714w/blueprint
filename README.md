# Blueprint Exercise

Welcome to my project! 🚀

This project is built with Laravel and uses a MySQL database. It provides a diagnostic screener interface where users can answer questions and submit their responses. Follow the instructions below to get started.

## Installation

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/your-username/project-name.git

2. Install Laravel dependencies. Make sure you have Laravel installed globally. If not, you can install it by following the official Laravel documentation:

3. Create a .env file based on the provided .env_example file:

  ```
  cp .env_example .env
```
4. Update the .env file with your MySQL database credentials. You can use the following example credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blueprint
DB_USERNAME=root
DB_PASSWORD=
```

4. Create a new database named "blueprint" in your MySQL server.

5. Migrate the database
```php artisan migrate
```

## Usage

Start the development server:

```
php artisan serve
```

Open your web browser and navigate to http://127.0.0.1:8000/screener.

You should now see the diagnostic screener page. Answer the questions and proceed through the screener.

Once you have completed the screener, the data will be submitted to the backend.



## Description of the problem and solution

### 1. Problem: "Non-null assertions can only be used in TypeScript files."

Solution: This error occurs when using a non-null assertion (!) in a JavaScript file instead of a TypeScript file. To fix this, either rename your file to .ts and use TypeScript or remove the non-null assertion and handle possible null values appropriately.

### 2. Problem: Getting a 404 error on /screener endpoint.

Solution: Make sure that the endpoint /screener is correctly defined in your Laravel routes file (web.php or api.php). Ensure that the route points to the correct controller method and that the method is implemented.

### 3. Problem: Displaying nothing on the page after executing the provided code.

Solution: Check if the JSON data is correctly passed to the JavaScript code and assigned to the screenerData variable. Ensure that the HTML elements referenced in the JavaScript code exist in the DOM with the correct IDs.

### 4. Problem: Error when accessing the getAttribute method on a null element.

Solution: The error indicates that the element with the specified attribute name does not exist in the HTML. Double-check that the <meta name="csrf-token"> element exists and has the content attribute. Make sure the element is placed correctly in the HTML structure.

### 5. Problem: Error 419 (unknown status) when submitting data to /score-assessments.

Solution: A 419 error usually indicates a CSRF token mismatch. Ensure that you include the CSRF token in the request headers. Verify that the token is generated correctly and passed to the JavaScript code.

### 6. Problem: Getting a 500 (Internal Server Error) when accessing /score-assessments.

Solution: A 500 error suggests that there is an issue with the server-side code handling the /score-assessments route. Check your Laravel controller method responsible for handling the submission. Ensure the code properly processes the submitted data and returns an appropriate response.


## Reasoning behind your technical choices- Easy-to-Use Blade Templating and Simple API Creation

Reason for Choosing Laravel: 

One of the primary reasons for choosing Laravel is its easy-to-use Blade templating engine for front-end development and its simple API creation techniques. Here's why these aspects make Laravel an excellent choice:

Blade Templating: Laravel's Blade templating engine provides a clean and intuitive syntax for designing the front-end of your application. It allows you to easily separate the presentation logic from the application's business logic. With Blade, you can create reusable templates, include partials, and leverage control structures like loops and conditionals. The simplicity and flexibility of Blade make it efficient for building dynamic and responsive user interfaces.

API Creation: Laravel offers powerful tools and features for building APIs. It provides a comprehensive routing system that allows you to define API endpoints with ease. Laravel's expressive syntax and conventions make it straightforward to create RESTful APIs. You can define resourceful routes, handle request validation, and format responses using JSON. Laravel's API integration capabilities, such as token-based authentication and rate limiting, help secure and control access to your API endpoints.

By choosing Laravel, you benefit from a well-rounded framework that combines the ease of Blade templating for front-end development and seamless API creation. Laravel's cohesive ecosystem promotes rapid development, code reusability, and maintainability. It provides an excellent balance between simplicity and functionality, making it a preferred choice for building web applications and APIs.


## Ideal platform - hosting with AWS and Docker

To deploy the Laravel application as a true production app using AWS and Docker, and ensure high availability, performance, security, and ease of troubleshooting, you can follow these steps:

Containerize the Application: Use Docker to containerize the Laravel application. Create a Dockerfile that defines the application's dependencies and configuration.

Deploy to AWS ECS: Set up an Amazon Elastic Container Service (ECS) cluster on AWS. Create a task definition that references the Docker image containing the Laravel application. Configure the desired task placement strategy and scaling options.

Load Balancing: Set up an Elastic Load Balancer (ELB) or an Application Load Balancer (ALB) to distribute traffic across multiple instances of the Laravel application. This ensures high availability and enables horizontal scaling.

Auto Scaling: Implement auto scaling to automatically adjust the number of EC2 instances running the Laravel application based on traffic patterns or custom metrics. This ensures the application can handle varying loads while maintaining performance.

Database: Use Amazon RDS or Amazon Aurora for the MySQL database required by the Laravel application. Configure proper backup and monitoring mechanisms for the database.

Caching: Utilize Amazon ElastiCache with Redis to enhance performance by caching frequently accessed data, such as query results or session data.

Security: Ensure the following security measures are implemented:

Use AWS Identity and Access Management (IAM) to control access to AWS resources.
Enable HTTPS by provisioning an SSL/TLS certificate using AWS Certificate Manager (ACM) and configure it on the load balancer.
Implement Laravel's built-in security features, such as CSRF protection, input validation, and authentication.
Logging and Monitoring: Configure centralized logging by sending Laravel's logs to services like Amazon CloudWatch Logs or AWS Elastic Stack (Elasticsearch, Logstash, and Kibana). Enable detailed monitoring using Amazon CloudWatch for system-level metrics, application-level metrics, and custom logs.

Error Monitoring: Integrate an error monitoring tool like AWS X-Ray or Sentry to capture and analyze application errors and exceptions. This helps troubleshoot problems in real-time and provides insights for improvement.

Continuous Deployment: Set up a continuous integration and deployment pipeline using AWS CodePipeline or a similar tool. Automate the deployment process, including testing, building Docker images, and deploying to the ECS cluster.

Backup and Disaster Recovery: Implement regular backups of the application data and database using AWS Backup or custom scripts. Define a disaster recovery plan to ensure data resilience and quick recovery in case of failures.

By following these steps, you can deploy the Laravel application as a highly available and performant production app on AWS. It utilizes Docker containers for easy deployment, incorporates load balancing and auto scaling for high availability and scalability, and implements security measures to protect the application and user data. Logging, monitoring, error monitoring, and continuous deployment practices ensure easy troubleshooting and maintenance of the application while it is running live.

## Additional Time

If I had some more time to work on this, I would spend much more time on the front end, using a framework such as Vue.js. My backend skills are where I am most proficient, so I spent much more time designing the api then spending making the front end look pretty (sorry it looks so bland :) 


Overall, I really appreciate you considering me for your team and I look forward to hearing back from you. 

You can view my personal portfolio at https://0u714w.github.io/new-portfolio/
