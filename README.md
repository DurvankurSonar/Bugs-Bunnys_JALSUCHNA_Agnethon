JALSUCHNA ( AUTOMATED WATER SUPPLY SYSTEM )

             Jalsuchna is an innovative water management project tailored for the citizens of Jalgaon. This platform offers real-time updates on the water situation in the city, providing residents with the latest information regarding water availability, quality, and usage.
           
             Citizens can use Jalsuchna to stay informed about water-related news, ensuring they are aware of any water supply changes or issues. Moreover, Jalsuchna enables citizens to share their feedback and concerns, fostering a direct connection between the municipal corporation's water department and the people it serves.

             For municipal authorities, this platform serves as a powerful management tool. The water department head can use Jalsuchna to monitor and oversee citizens' feedback and concerns, allowing for more efficient and responsive management of water resources. Additionally, it acts as an essential intermediary between the water department head and valvemen, facilitating clear communication without the need for traditional media channels. Jalsuchna is a two-way solution that empowers both the citizens and the administrative authorities, creating a more connected and informed community.



## Installation
1. Clone the repository to your local machine:

2. Navigate to the project directory:


3. Import the database schema from `cpp_form.sql` to your MySQL database.

4. Configure the database connection in the `home.php` file.

5. Start a local server:


6. Open your web browser and navigate to `http://localhost:8000` to access the application.

## Dependencies
- PHP
- MySQL
- Bootstrap
- jQuery

## Usage
1. **Home Page**: The `home.php` file serves as the main landing page for the application. It provides navigation links and information about the project.

2. **User Registration**: Users can register for an account using the `user-registration-form.php` file. After registration, their information is stored in the database.

3. **User Login**: Registered users can log in to their accounts using the `user-login.php` file.

4. **User Notifications**: The `user-notification.php` file displays notifications for users, including received orders and other alerts.

5. **Viewing Users List**: The `users-list.php` file allows viewing a list of users based on their residential area.

## File Structure
- `assets/`: Contains CSS, JavaScript, and image files.
- `join.php`: Handles database connection.
- `user-registration-form.php`: User registration form.
- `user-login.php`: User login form.
- `user-notification.php`: User notifications page.
- `README.md`: Documentation file.



