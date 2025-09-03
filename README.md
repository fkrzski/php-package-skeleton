<p style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap; justify-content: center;">
<img src="./art/banner.png" alt="Fkrzski PHP Package Skeleton"/>
<img alt="GitHub branch check runs" src="https://img.shields.io/github/check-runs/fkrzski/php-package-skeleton/master?style=for-the-badge">
<img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/fkrzski/php-package-skeleton?style=for-the-badge">
<img alt="Packagist Version" src="https://img.shields.io/packagist/v/fkrzski/php-package-skeleton?style=for-the-badge">
<img alt="Packagist License" src="https://img.shields.io/packagist/l/fkrzski/php-package-skeleton?style=for-the-badge">
</p>

------

## Fkrzski PHP Package Skeleton

This package provides a wonderful **PHP Package Skeleton** to start building your next PHP package, including:

- **PHP 8.3+** support
- **Pint** for code formatting
- **Rector** for refactoring
- **PHPStan** for static analysis
- **PEST** for unit testing
- **PEST plugins** for type coverage and profanity checks
- **GitHub Actions** for CI with conditional checks for less GH Actions minutes usage
- **.gitattributes** for ignoring unnecessary files while creating a project or installing via dependencies

## Usage

⚡️ Create your package using [Composer](https://getcomposer.org):

> Be careful! Creating repository in this way not create all directories and files, so you need to create them manually after running this command!

```bash
composer create-project fkrzski/php-package-skeleton PackageName
```

## Composer scripts

🧹 Keep a modern codebase with **Pint**:

```bash
composer lint
```

✅ Run refactors using **Rector**

```bash
composer refactor
```

🧪 Run type coverage checks using **PEST plugin**:

```bash
composer test:type-coverage
```

🧹 Run code formatting **Pint**:

```bash
composer test:lint
```

✅ Run unit tests with code coverage using **PEST**

```bash
composer test:unit
```

⚗️ Run static analysis using **PHPStan**:

```bash
composer test:types
```

🧪 Run profanity checks using **PEST Profanity plugin**:
```bash
composer test:profanity
```

✅ Run refactor checks using **Rector**:
```bash
composer test:refactor
```

🚀 Run the entire test suite:

```bash
composer test
```

**PHP Package Skeleton** was created by **[Filip Krzyżanowski](https://linkedin.com/in/fkrzski)** under the *
*[MIT license](https://opensource.org/licenses/MIT)**.
