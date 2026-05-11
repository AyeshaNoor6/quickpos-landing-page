# QuickPOS Landing Page – SPM Project

## Project Objective
The objective of this project is to develop a modern and responsive landing page for a Point of Sale (POS) system using PHP. The project also demonstrates professional software engineering practices including Git workflow, Jira project management, CI/CD pipeline integration, and automated testing.

---

# T

## Tech Lead
- Managed GitHub repository
- Implemented Git branching strategy
- Handled CI/CD pipeline and code reviews

---

# Tools & Technologies Used

- PHP
- HTML5
- CSS3
- Git & GitHub
- GitHub Actions
- Jira
- VS Code

---

# Features Implemented

## Header Section
- Navigation bar
- Logo
- Sign-up button

## Hero Section
- Headline
- Sub-headline
- Call-to-action button

## Features Section
- Billing feature
- Inventory management
- Customer tracking

## Pricing Section
- Basic plan
- Pro plan
- Enterprise plan

## Contact Form
- Name validation
- Email validation
- Message validation
- Thank-you page redirection

---

# Automated Testing

The project includes automated test cases for:

- Empty name validation
- Valid name validation
- Valid email validation
- Invalid email validation
- Empty message validation
- Message field validation

Tests are located inside the `/tests` folder and executed using PHP scripts.

---

# CI/CD Pipeline

GitHub Actions was used to automate:

- PHP setup
- Code checkout
- Syntax validation
- Automated test execution

The pipeline automatically runs on:
- Pull Requests
- Feature branch pushes

---

# Git Workflow

The following Git workflow practices were implemented:

- Feature branches
- Pull Requests
- Branch protection rules
- Mandatory code reviews
- Jira-linked commit messages

Example commit:
[POS-30] Add contact form validation

---

# Project Structure

quickpos-landing-page/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── tests/
│   └── ContactFormTest.php
│
├── .github/workflows/
│   └── ci.yml
│
├── index.php
├── thank-you.php
└── README.md

---

# Conclusion

This project successfully demonstrates the implementation of a responsive landing page along with professional software project management practices including version control, CI/CD automation, Jira sprint management, and automated testing.
