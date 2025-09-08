<p style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap; justify-content: center;">
<img src="./art/banner.png" alt="Fkrzski PHP Package Skeleton"/>
<img alt="GitHub branch check runs" src="https://img.shields.io/github/check-runs/fkrzski/php-package-skeleton/master?style=for-the-badge">
<img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/fkrzski/php-package-skeleton?style=for-the-badge">
<img alt="Packagist Version" src="https://img.shields.io/packagist/v/fkrzski/php-package-skeleton?style=for-the-badge">
<img alt="Packagist License" src="https://img.shields.io/packagist/l/fkrzski/php-package-skeleton?style=for-the-badge">
</p>

---

# PHP Package Skeleton

A modern, fully-featured skeleton for creating PHP packages with best practices built-in. Get started quickly with a complete development environment, testing suite, and CI/CD pipeline.

## ✨ Features

- 🚀 **PHP 8.3+** support with modern syntax
- 🎨 **Laravel Pint** for consistent code formatting
- ⚡ **Rector** for automated refactoring and upgrades
- 🔍 **PHPStan** for comprehensive static analysis
- 🧪 **PEST** for modern, expressive testing
- 📊 **Code coverage** with 100% requirement
- 🔄 **Mutation testing** for test quality assurance
- 👀 **Type coverage** checking with PEST plugin
- 🚫 **Profanity detection** in code and comments
- 🤖 **GitHub Actions** CI/CD with optimized workflows
- 📦 **PSR-4** autoloading structure
- 🎯 **Pre-configured** development tools

## 📋 Requirements

- PHP 8.3 or higher
- [Composer](https://getcomposer.org) 2.0+
- Git

## 🚀 Quick Start

### Creating a New Package

Create your package using Composer:

```bash
composer create-project fkrzski/php-package-skeleton your-package-name
cd your-package-name
```

> **Note:** After creating the project, you may need to manually adjust some configuration files and directory structure to match your specific package requirements.

### Initial Setup

1. Update `composer.json` with your package details:
   - Change the package name
   - Update the description and keywords
   - Modify the author information
   - Adjust the namespace in the `autoload` section

2. Update the namespace in your source files (`src/` directory)

3. Configure your development environment:
   ```bash
   composer install
   composer test
   ```

## 🛠️ Development

### Available Commands

The skeleton includes several Composer scripts to streamline your development workflow:

#### Code Quality & Formatting

```bash
# Format code with Laravel Pint
composer lint

# Check code formatting (without fixing)
composer test:lint

# Run automated refactoring with Rector
composer refactor

# Check refactor suggestions (dry-run)
composer test:refactor

# Fix code quality issues automatically
composer code-quality
```

#### Static Analysis & Testing

```bash
# Run static analysis with PHPStan
composer analyse

# Run unit tests with coverage
composer test:unit

# Run mutation testing
composer test:unit:mutation

# Check type coverage (100% required)
composer test:type-coverage

# Run profanity checks
composer test:profanity

# Check PHP syntax
composer test:syntax
```

#### Complete Test Suite

```bash
# Run all tests and quality checks
composer test
```

This runs the complete pipeline:
- Profanity checks
- Syntax validation
- Code formatting checks
- Refactoring suggestions
- Static analysis
- Type coverage verification
- Mutation testing with 100% coverage

### 📁 Project Structure

```
├── src/                    # Source code (PSR-4 autoloaded)
├── tests/                  # Test files
├── .github/workflows/      # GitHub Actions CI/CD
├── .gitattributes         # Git export settings
├── composer.json          # Dependencies and scripts
├── pint.json             # Laravel Pint configuration
├── phpstan.neon          # PHPStan configuration
├── rector.php            # Rector configuration
└── pest.xml              # PEST testing configuration
```

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guide](.github/CONTRIBUTING.md) for details on:

- Setting up the development environment
- Running tests
- Submitting pull requests
- Code style guidelines
- Reporting issues

### Quick Contribution Setup

1. Fork this repository
2. Clone your fork: `git clone https://github.com/yourusername/php-package-skeleton.git`
3. Install dependencies: `composer install`
4. Create a feature branch: `git checkout -b feature/amazing-feature`
5. Make your changes and run tests: `composer test`
6. Submit a pull request

## 📜 License

This project is open-sourced software licensed under the [MIT License](LICENSE.md).

## 👨‍💻 Author

**PHP Package Skeleton** was created by [Filip Krzyżanowski](https://linkedin.com/in/fkrzski).

## 🙏 Acknowledgments

Special thanks to the amazing PHP community and the maintainers of:
- [Laravel Pint](https://laravel.com/docs/pint)
- [PEST PHP](https://pestphp.com/)
- [PHPStan](https://phpstan.org/)
- [Rector](https://getrector.org/)

---

<p align="center">
<strong>Happy coding! 🚀</strong>
</p>
