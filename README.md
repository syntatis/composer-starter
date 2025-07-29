# 🏁 composer-starter

This repository provides a ready-to-use, opinionated starting point for creating a Composer package. It's designed to help you kickstart development with the essential tools so you can skip the boilerplate and focus on starting to build your package.

## Features

* PSR-4 autoloading using Composer
* Pre-configured [PHPUnit](https://phpunit.de/) for testing
* Pre-configured [PHPStan](https://phpstan.org/) for static analysis
* Pre-configured [PHPCS](https://github.com/PHPCSStandards/PHP_CodeSniffer/) for code style checking, and formatting
* Ready-to-use `.editorconfig`, `.gitattributes`, and `.gitignore`
* Composer scripts for common tasks
* Visual Studio Code workspace settings with the extensions recommendation for development
* [Dev Container](https://code.visualstudio.com/docs/devcontainers/containers) configuration for consistent development environment inside a Docker container
* GitHub Actions workflow for running tests and static analysis on pull request
* [Dependabot](https://github.com/dependabot) configuration for automatic dependency updates

## Usage


### Recommended 

To use this starter template it's recommended to use the Github template feature. You can create a new repository using this template by clicking the **"Use this template"** button on the repository page.

Then, after cloning the new repository, you can run:

```bash
composer install
```

...to install the dependencies.

### Using Composer

To use this starter template, run:

```bash
composer create-project syntatis/composer-starter --prefer-source --no-install <my-package>
```

Replace `<my-package>` with the desired name for your package. This will create a new directory with the specified name.

Then, run the following command to install the dependencies:

```bash
cd <my-package>
composer install
```

> [!NOTE]  
> **Don't forget to update** the `name`, `description`, and `authors` fields in the `composer.json` file to reflect your own package's details.

## Commands

This starter template comes with several Composer scripts to help you with common development tasks such as testing, `linting`, formatting, and static analysis. You can run these commands using `composer <command>` from the root of your project.

<table>
    <thead>
        <th>Command</th>
        <th>Description</th>
    </thead>
    <tbody>
        <tr>
            <td><code>composer&nbsp;test</code></td>
            <td>Runs the tests using PHPUnit.</td>
        </tr>
        <tr>
            <td><code>composer&nbsp;lint</code></td>
            <td>Checks code style using PHP_CodeSniffer (PHPCS).</td>
        </tr>
        <tr>
            <td><code>composer&nbsp;format</code></td>
            <td>Formats the code using PHPCBF (PHP Code Beautifier and Fixer).</td>
        </tr>
        <tr>
            <td><code>composer&nbsp;analyse</code></td>
            <td>Runs static analysis using PHPStan.</td>
        </tr>
	</tbody>
</table>
