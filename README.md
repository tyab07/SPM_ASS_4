# QuickPOS Landing Page

![CI/CD Pipeline](https://github.com/tyab07/SPM_ASS_4/actions/workflows/ci.yml/badge.svg)

## Team
- Tayyab– Project Manager / QA
- Ali Name – Tech Lead
   

   
## Setup
1. `git clone https://github.com/tyab07/SPM_ASS_4`
2. `composer install`
3. `php -S localhost:8000`
4. Open `http://localhost:8000`
5. Run tests: `./vendor/bin/phpunit --testdox`

## Project Structure
quickpos/
├── index.php
├── contact.php
├── thank-you.html
├── tests/
├── phpunit.xml
├── composer.json
└── .github/
    └── workflows/
        └── ci.yml

## Jira Board
https://cfd-team-mg6tuva9.atlassian.net/jira/software/projects/HAC/boards/2?sprintStarted=true


## Branch Protection Rules

The `main` branch is protected with the following rules:
- Pull request required before merging
- Minimum 1 approval required
- All CI checks must pass before merge:
  - Stage 3 - Code Quality Check
  - Stage 4 - Automated Tests
  - Stage 10 - Jira Commit Validation
- Force pushes are blocked