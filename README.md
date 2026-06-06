# StudyCircle

A collaborative learning platform designed to connect students and foster knowledge sharing through interactive study groups and community-driven educational resources.

## Overview

StudyCircle is a web-based application that enables students to form study circles, collaborate with peers, and access shared learning materials. The platform leverages modern web technologies to provide a seamless and engaging learning experience.

## Features

- **Study Groups**: Create and join study circles focused on specific subjects or topics
- **Collaborative Learning**: Share notes, resources, and discussion threads within groups
- **User Profiles**: Build your academic profile and connect with like-minded learners
- **Resource Library**: Access and contribute to a community-curated collection of study materials
- **Discussion Forums**: Engage in focused discussions around course topics and assignments
- **Progress Tracking**: Monitor your learning journey and participation metrics

## Technology Stack

- **Backend**: PHP (78%)
- **Frontend**: JavaScript (1.5%)
- **Styling**: CSS (20.5%)

## Installation

### Prerequisites

- PHP 7.4 or higher
- Web server (Apache, Nginx, or similar)
- Database (MySQL 5.7 or higher)
- Composer (PHP dependency manager)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/rutujbarsagade/studycircle.git
   cd studycircle
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   # Edit .env with your database and application credentials
   ```

4. **Database setup**
   ```bash
   php artisan migrate
   php artisan seed:db
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## Project Structure

```
studycircle/
├── app/              # Application logic and controllers
├── config/           # Configuration files
├── database/         # Migrations and seeders
├── public/           # Public assets (CSS, JS, images)
├── resources/        # Views and raw assets
├── routes/           # Application routes
├── tests/            # Unit and feature tests
└── README.md         # This file
```

## Usage

### For Students

1. Create an account and set up your profile
2. Browse available study circles or create a new one
3. Invite peers to join your circle
4. Share resources and collaborate on assignments
5. Participate in discussions and track your progress

### For Administrators

- Manage user accounts and permissions
- Moderate content and discussions
- Generate analytics and reports
- Maintain system security and performance

## API Documentation

Detailed API documentation is available in the [API_DOCS.md](API_DOCS.md) file.

## Contributing

We welcome contributions from the community! To contribute:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

Please ensure your code follows our coding standards and includes appropriate tests.

## Code Standards

- Follow PSR-12 coding standards for PHP
- Use meaningful variable and function names
- Include comments for complex logic
- Write unit tests for new features
- Ensure all tests pass before submitting PRs

## Testing

```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/UserTest.php

# Generate code coverage report
php artisan test --coverage
```

## Troubleshooting

### Common Issues

**Database Connection Error**
- Verify your `.env` file has correct database credentials
- Ensure the database server is running
- Check database user permissions

**Permission Denied Errors**
- Set appropriate permissions: `chmod -R 755 storage/ bootstrap/cache/`

**Composer Dependency Issues**
- Clear composer cache: `composer clear-cache`
- Update dependencies: `composer update`

## Support

For support, please:

1. Check existing [GitHub Issues](https://github.com/rutujbarsagade/studycircle/issues)
2. Create a new issue with detailed description and steps to reproduce
3. Include environment details (OS, PHP version, browser)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Authors

- **Rutuj Barsagade** - *Initial work* - [GitHub Profile](https://github.com/rutujbarsagade)

## Acknowledgments

- Thanks to all contributors who have helped with code, features, and bug reports
- Special thanks to the open-source community for the libraries and tools used in this project

## Roadmap

- [ ] Mobile application (React Native)
- [ ] Real-time notifications
- [ ] AI-powered study recommendations
- [ ] Video conferencing integration
- [ ] Advanced analytics dashboard
- [ ] Internationalization support

---

**Last Updated**: 2026-06-06

For more information, visit the [StudyCircle Wiki](https://github.com/rutujbarsagade/studycircle/wiki)
