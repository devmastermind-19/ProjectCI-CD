# ⚙️ GitHub Actions CI/CD Guide

This document explains how the Continuous Integration / Continuous Deployment (CI/CD) pipeline works in this project using GitHub Actions. 

Because we already created the `.github/workflows/ci.yml` file, **GitHub Actions is already fully set up for you!** You do not need to manually configure anything in the GitHub UI to make it run.

---

## 1️⃣ What is GitHub Actions?

GitHub Actions is an automation tool built into GitHub. Whenever you push code to GitHub or create a Pull Request, GitHub Actions spins up a temporary virtual server (in our case, Ubuntu Linux) and runs a series of commands to verify that your code works perfectly.

If any command fails (like a test failing or a syntax error), the entire pipeline "fails" (turns red), and it will block the Pull Request from being merged.

---

## 2️⃣ Requirements for the Pipeline

To make the pipeline work, your project must have specific files in specific places. We have already created all of these for you:

1. **The Workflow File (`.github/workflows/ci.yml`)**: This is the "instruction manual" for GitHub Actions. It tells the server what OS to use, what PHP version to install, and what commands to run.
2. **`composer.json`**: Tells the pipeline which dependencies to install (PHPUnit and PHPStan).
3. **`composer.lock`**: Locks the exact versions of the dependencies so the pipeline runs identically to your local machine. *(Generated when you run `composer install` locally).*
4. **`phpunit.xml`**: The configuration file that tells PHPUnit where to find the test files.
5. **The Tests (`tests/`)**: The actual PHPUnit test cases that will be executed.

---

## 3️⃣ How to Run the Tests on GitHub Actions

You don't run GitHub Actions manually. **It is triggered automatically!**

Here is exactly how to trigger it:
1. Push a commit directly to the `main` or `develop` branches.
2. Create a Pull Request (PR) from a feature branch (e.g., `feature/POS-101`) targeting `main` or `develop`.
3. Push a new commit to a feature branch that currently has an open Pull Request.

**How to view the results:**
1. Go to your repository on GitHub.com.
2. Click on the **"Actions"** tab at the top.
3. You will see a list of all workflow runs. Click on the top one to see the real-time execution of your tests.
4. If you have a Pull Request open, the test results will also appear at the bottom of the PR page.

---

## 4️⃣ What Exactly Does the Pipeline Do?

When triggered, our `ci.yml` pipeline performs the following steps in order:

1. **Checkout Code**: Downloads your code from the GitHub repository into the temporary Ubuntu server.
2. **Setup PHP**: Installs PHP 8.1 and necessary extensions (like `pdo_mysql` and `xdebug` for test coverage).
3. **Validate Composer**: Checks if your `composer.json` is formatted correctly.
4. **Cache Dependencies**: Saves downloaded Composer packages so future pipeline runs are much faster.
5. **Install Dependencies**: Runs `composer install` to download PHPUnit and PHPStan onto the server.
6. **Syntax Check**: Runs `php -l` on your backend files to check for fatal syntax errors (missing semicolons, broken brackets, etc).
7. **Code Quality (PHPStan)**: Analyzes the `includes/` folder for logic bugs or typing errors without actually executing the code.
8. **Automated Testing (PHPUnit)**: Runs `./vendor/bin/phpunit tests/`. This executes your test cases. **If a test fails here, the pipeline stops and fails!**
9. **Upload Artifacts**: Saves the test result files so you can download and view them from the GitHub Actions dashboard.

---

## 5️⃣ How to Fix a Failing Pipeline

If you open a Pull Request and the pipeline turns **red ❌**, do not panic!

1. Click on **"Details"** next to the failed check on the PR page.
2. Look at the logs. It will tell you exactly what failed.
   - Did PHPStan find an error?
   - Did PHPUnit expect a certain result but got something else?
   - Is there a PHP syntax error?
3. Go back to VSCode on your computer.
4. Fix the error in the code.
5. **Run the test locally** to make sure it's fixed (see `test.md`).
6. Commit the fix and push it to GitHub.
7. The pipeline will automatically restart and (hopefully) turn **green ✅**.
