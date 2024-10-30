# Nuxt Minimal Starter

Look at the [Nuxt documentation](https://nuxt.com/docs/getting-started/introduction) to learn more.

## Setup

Make sure to install dependencies:

```bash
# npm
npm install
```

Go to your Supabase account and set up the following environment variables:

```bash
create a new project
create a new secret
add the following environment variables:
SUPABASE_URL
SUPABASE_KEY

create a new table called "transactions"
setup the policies for the table to allow the authenticated user to read and write
```

## Development Server

Start the development server on `http://localhost:3000`:

```bash
# npm
npm run dev
```

## About the project
This project is a Nuxt.js project that is used to track the financial progress of a student. It is a simple project that allows the user to add expenses and incomes, and calculate the total balance of the student.


## Project Stack 
- Vue.js
- Nuxt.js
- NuxtUI
- Tailwind CSS
- Headless UI
- Supabase
