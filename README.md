# 🏁 composer-starter

This repository provides a ready-to-use, opinionated starting point for creating a Composer package. It's designed to help you kickstart development with the essential tools so you can skip the boilerplate and focus on starting to build your package.

## Features

* PSR-4 autoloading using Composer
* Pre-configured PHPUnit for testing
* Pre-configured PHPStan for static analysis
* Pre-configured PHPCS for code style checking, and formatting
* GitHub Actions workflow
* Ready-to-use `.editorconfig`, `.gitattributes`, and `.gitignore`
* Composer scripts for common tasks
* Visual Studio Code workspace settings with the extensions recommendation for development
* [Dev Container](https://code.visualstudio.com/docs/devcontainers/containers) configuration for consistent development environment inside a Docker container

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
