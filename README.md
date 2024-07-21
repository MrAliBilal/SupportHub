# Final Year Project CareSeeker
## Introduction
![](https://github.com/AliBilal-1/SupportHub/blob/main/Support%20Hub%20Screenshot/Home%20Page%20-%20Support%20Hub.jpeg)

HelpConnect is a dynamic web-based platform designed to bridge the gap between individuals seeking various care services and skilled support workers. This service-oriented website offers a comprehensive solution for finding reliable assistance in areas such as elder care, sick care, baby care, cooking, personal care, animal care, gym instruction, and domestic assistance. By creating an online community where care seekers can post job requirements and support workers can register their services, HelpConnect simplifies the process of connecting those in need with those who can help.

Support workers on HelpConnect can create detailed profiles, including their bio data, picture, hourly rate, experience, and references, providing care seekers with all the necessary information to make informed decisions. Care seekers can either browse these profiles or post specific job requirements, specifying the required service, detailed service description, address, estimated hourly budget, and time of service. The platform includes an integrated messaging service to facilitate clear and direct communication between care seekers and support workers, ensuring all terms are agreed upon before the job is accepted.

## Tools and Technology
- Fullstack Framework: Laravel 
- CSS Framework: Bootstrap, Tailwind CSS
- Database: MySQL
- Packages: Chatify, alpine, Font-awesome

## Features

### User Registration and Profiles

- **Support Worker Registration**: Submit detailed bio, profile picture, hourly rate, experience, and references.
- **Care Seeker Registration**: Submit basic information and manage profile.

### Job Posting and Search

- **Job Posting**: Describe service requirements, location, budget, and time.
- **Job Search**: Search and filter jobs by service category, location, and rate.

### Communication and Hiring

- **Messaging System**: Direct messaging and notifications for job updates.
- **Job Application and Acceptance**: Apply for jobs, review applications, finalize terms, and accept jobs.

### Profile and Job Management

- **Profile Management**: Update experience, hourly rate, and references for support workers; manage profiles and jobs for care seekers.
- **Job Management**: View, edit, or delete job postings; track application status and accepted jobs for support workers.

   
## Demo
![](https://github.com/AliBilal-1/SupportHub/blob/main/Support%20Hub%20Screenshot/SupportHub.gif)


## Getting Started

To get started with the Care Seeker project, follow these steps:

1. Clone the repository: 
   ```bash
   git clone https://github.com/AliBilal-1/Project-Care-Seeker.git
   ```
2. Navigate to the project directory:
   ```bash
   cd Project-Care-Seeker
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Set up the MySQL database and update the database configuration in the `.env` file.
5. Run the migrations:
   ```bash
   php artisan migrate
   ```
6. Start the development server:
   ```bash
   php artisan serve
