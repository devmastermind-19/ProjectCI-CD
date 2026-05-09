# 🚀 Continuous Integration & Deployment (CI/CD) Quick Guide

This guide allows you to implement full CI/CD in just **two steps** using only two branches: `main` and `develop`.

---

## 🛠️ Phase 1: Setup & Code Upload

Run these commands to upload your entire project to a development branch. This will trigger the **CI (Continuous Integration)** checks.

```bash
# 1. Initialize and link repo (if not done)
git init
git remote add origin https://github.com/<YOUR-USERNAME>/quickpos.git

# 2. Get the main branch from GitHub
git pull origin main

# 3. Create the 'develop' branch
git checkout -b develop

# 4. Add ALL project files
git add .

# 5. Commit with the required Jira ID
git commit -m "[POS-1] Complete project implementation with CI/CD"

# 6. Push to GitHub
git push -u origin develop
```

---

## 🚀 Phase 2: Triggering the CD (Deployment)

To trigger the **CD (Continuous Deployment)**, you must merge your code into the `main` branch on GitHub.

1.  **Go to GitHub.com** -> Your Repository.
2.  Click **"Compare & pull request"** for the `develop` branch.
3.  Title it: `[POS-100] Final Release v1.0` and click **Create pull request**.
4.  **Wait for the CI Checks**: You will see GitHub Actions running (Jira Check, PHPStan, PHPUnit).
5.  **Merge the PR**: Once checks are green, click **"Merge pull request"**.

---

## 📊 How to verify it worked?

1.  Click the **"Actions"** tab at the top of your GitHub page.
2.  Click on the latest workflow run (named `[POS-100] Final Release v1.0`).
3.  You will see a list of jobs. Once merged to main, a new job named **`Continuous Deployment (CD)`** will appear and run!

✅ **Green CD Job = Bonus Task Completed!**
