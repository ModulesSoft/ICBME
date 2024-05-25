
# Laravel ICBME Conference Web App - Upgraded to Laravel 10

Welcome to the upgraded version of the Laravel Conference Event Demo! This project has been updated to Laravel 10 and optimized for deployment on web hosting servers. Additionally, we've made significant improvements to the database structure and styles to enhance performance and user experience.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)
- [More from LaravelDaily Team](#more-from-laraveldaily-team)

## Introduction

This project is a modernized version of the original Laravel Conference Event Demo. It showcases the capabilities of Laravel for managing conference events, including user registration, event scheduling, and more. With the upgrade to Laravel 10, we've ensured that the application benefits from the latest features, security updates, and performance improvements.

## Features

- Upgraded to **Laravel 10**
- Optimized for web hosting servers
- Improved database structure for better performance
- Enhanced styling for a modern look and feel
- Comprehensive event management features
- User-friendly interface for both administrators and attendees

## Installation

To get started with the project, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/laravel-conference-event-demo.git
    cd laravel-conference-event-demo
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Copy the example environment file and set up your environment variables:**

    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the database migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

6. **Compile the assets:**

    ```bash
    npm run dev
    ```

## Configuration

Ensure that your `.env` file is correctly set up with your database and other necessary configurations. Here is an example:

```env
APP_NAME=LaravelConference
APP_ENV=local
APP_KEY=base64:yourGeneratedAppKey
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=conference
DB_USERNAME=root
DB_PASSWORD=password

# Other configurations...
```

## Usage

Once the installation and configuration are complete, you can start the development server:

```bash
php artisan serve
```

Open your browser and navigate to `http://localhost` to access the application.

You can login to the admin panel by going to `/login` URL and logging in with credentials `admin@admin.com` - `password`.

## Screenshots

### Managing Speakers

![Laravel Conference event speakers](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-26-at-11.43.03-AM.png)
![Laravel Conference event speakers management](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-26-at-11.40.12-AM.png)

### Managing Schedule

![Laravel Conference event schedule](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-26-at-11.39.17-AM.png)
![Laravel Conference event schedule management](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-26-at-11.40.27-AM.png)

### Homepage Main Settings Management

![Laravel Conference event main page](https://laraveldaily.com/wp-content/uploads/2019/09/800.png)
![Laravel Conference event main management](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-26-at-11.54.02-AM.png)

- Front-end part is taken from [TheEvent by BootstrapMade](https://bootstrapmade.com/theevent-conference-event-bootstrap-template/) and transformed into Laravel Blade and assets.
- Admin part is fully generated with [QuickAdminPanel](https://2019.quickadminpanel.com).

## Contributing

We welcome contributions from the community! If you would like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them.
4. Push your changes to your forked repository.
5. Open a pull request to the main repository.

Please ensure your code adheres to the project's coding standards and includes appropriate tests.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details. Basically, feel free to use and re-use any way you want.

## More from LaravelDaily Team

- Check out our admin panel generator [QuickAdminPanel](https://quickadminpanel.com)
- Read our [Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)

---

Thank you for checking out our upgraded Laravel Conference Event Demo! If you have any questions or feedback, feel free to open an issue or reach out to us. Happy coding!
