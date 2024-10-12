# E-Pilketos

**E-Pilketos** (Electronic Pilihan Ketua OSIS) is a web-based application designed for conducting digital voting for school student council elections. The system is developed using Laravel, providing a secure and efficient voting process with role-based access control.

## Features

-   **Student Registration**: Students can register and authenticate to cast their vote.
-   **Secure Voting System**: Each student can only vote once.
-   **Real-time Voting Results**: Display real-time election results after the voting period ends.
-   **Role-Based Access Control**: Different menus and functionalities are available based on user roles (Admin, User, TPS).
-   **Responsive Design**: Fully responsive, accessible on mobile devices.

## User Roles and Menu Access

### Admin

The Admin has full access to the following menus and functionalities:

| Menu           | Submenu    |
| -------------- | ---------- |
| Dashboard      |            |
| Voting Session |            |
| Participant    | Class      |
|                | User       |
|                | Activation |
| TPS            |            |
| Candidate      |            |
| Precence       |            |

### User

The User role has access to:

| Menu      | Submenu |
| --------- | ------- |
| Dashboard |         |
| DPT       |         |
| Register  |         |

### TPS

The TPS role has access to:

| Menu     | Submenu |
| -------- | ------- |
| Precence |         |
| Voting   |         |

## Installation

### Prerequisites

-   **PHP >= 7.4**
-   **Composer**
-   **MySQL or any other supported database**

### Steps

1. **Clone the repository**:

    ```bash
    git clone https://github.com/mnovel/E-PILKETOS.git
    cd E-PILKETOS
    ```

2. **Install dependencies**:

    ```bash
    composer install
    ```

3. **Environment setup**:

    - Copy `.env.example` to `.env`
        ```bash
        cp .env.example .env
        ```
    - Set up your database in the `.env` file:
        ```plaintext
        DB_DATABASE=epilketos
        DB_USERNAME=root
        DB_PASSWORD=
        ```

4. **SMTP Setup**:
   Configure your SMTP settings in the `.env` file:

    ```plaintext
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.example.com      # Replace with your SMTP host
    MAIL_PORT=587                   # or 465 for SSL
    MAIL_USERNAME=your-email@example.com  # Your SMTP username
    MAIL_PASSWORD=your-email-password      # Your SMTP password
    MAIL_ENCRYPTION=tls             # Use 'ssl' for port 465
    MAIL_FROM_ADDRESS=your-email@example.com  # Email address for sender
    MAIL_FROM_NAME="${APP_NAME}"     # Your application name
    ```

5. **Generate application key**:

    ```bash
    php artisan key:generate
    ```

6. **Run migrations**:

    ```bash
    php artisan migrate
    ```

7. **Seed database with dummy data** (Optional):

    ```bash
    php artisan db:seed
    ```

8. **Run the application**:

    ```bash
    php artisan serve
    ```

    The application will be available at `http://localhost:8000`.

## Usage

1. **Admin Login**:
   Admin can log in using the following default credentials:

    - **Email**: `admin@gmail.com`
    - **Password**: `admin`

    Admin can:

    - Access the dashboard, manage voting sessions, participants, and TPS.
    - View real-time election results.

2. **User Login**:
   Users can register and log in to cast their votes. They can access their dashboard, view DPT, and register if necessary.

3. **TPS Login**:
   TPS users can manage presence and oversee the voting process.

## File Structure

-   **app/Http/Controllers**: Contains the controllers for handling user requests.
-   **resources/views**: Contains the Blade templates for the user interface.
-   **routes/web.php**: Defines the routes for the web application.
-   **database/migrations**: Contains the migration files for creating database tables.

## Contributing

If you would like to contribute to this project, feel free to create a pull request or raise an issue.

## License

This project is licensed under the [MIT License](LICENSE).
