# Plant Endangerment Report System

This project aims to streamline the identification of locations where plants and trees are at risk of extinction. The system involves two user types: admins and public users. Public users report sightings of endangered plants, while admins review and manage these reports to protect the plants.

## Features

### Public User Features
- **Registration and Authentication**: Public users can register and log in.
- **Report Submission**: Authenticated public users can submit reports of endangered plants, including the plant's name, location (latitude and longitude), description, and a photo.
- **View Submitted Reports**: Users can view a list of their submitted reports.

### Admin Features
- **Admin Dashboard**: Admins can view and manage reports submitted by public users.
- **Filtering**: Admins can filter reports based on geographical location (latitude, longitude, and radius).
- **View and Manage Reports**: Admins can view individual reports and take actions as needed.

### Admin Accounts Creation
Admins can be created via console commands. 

## Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/your-repo/plant-endangerment-report-system.git
    ```

2. **Navigate to the Project Directory**

    ```bash
    cd plant-endangerment-report-system
    ```

3. **Install Dependencies**

    ```bash
    composer install
    npm install
    ```

4. **Copy the Environment File**

    ```bash
    cp .env.example .env
    ```

5. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

6. **Run Migrations**

    ```bash
    php artisan migrate
    ```

7. **Seed the Database (Optional)**

    ```bash
    php artisan db:seed
    ```

8. **Start the Development Server**

    ```bash
    php artisan serve
    ```

## Admin Creation Command

To create a new admin user, use the following Artisan command:

```bash
php artisan admin:create "admin@example.com" "Admin Name"
