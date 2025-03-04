# Study MBBS Abroad Landing Page

This project is a responsive landing page for promoting MBBS programs abroad. It features country listings, program details, and a lead generation form. The page is built using HTML, CSS (Tailwind CSS), and JavaScript, with optional PHP for backend form handling.

## Table of Contents

1. [Project Overview](#project-overview)
2. [Features](#features)
3. [Technical Implementation](#technical-implementation)
4. [Setup Instructions](#setup-instructions)
5. [Usage](#usage)
6. [Deployment](#deployment)
7. [Contributing](#contributing)
8. [License](#license)

## Project Overview

The "Study MBBS Abroad" landing page aims to provide prospective students with information about studying MBBS in various countries. The page includes sections highlighting the benefits of studying abroad, details about top countries offering MBBS programs, the admission process, and a form to capture leads.

## Features

- **Responsive Design:** Optimized for various screen sizes and devices.
- **Interactive Elements:** Hover effects and transitions for a better user experience.
- **Lead Generation Form:** Captures user details with client-side validation.
- **SEO Optimized:** Meta tags and structured content for better search engine visibility.
- **Performance Tracking:** Integrated with Google Analytics and Facebook Pixel for user behavior tracking.

## Technical Implementation

- **HTML5:** Semantic structure for better accessibility and SEO.
- **Tailwind CSS:** Utility-first CSS framework for rapid UI development.
- **JavaScript:** Client-side form validation and interactivity.
- **PHP (Optional):** Backend form handling to process and store user data.
- **Google Analytics & Facebook Pixel:** For tracking user interactions and conversions.

## Setup Instructions

### Prerequisites

- Basic knowledge of HTML, CSS, and JavaScript.
- A local development environment (e.g., VSCode, Sublime Text).
- PHP installed on your local machine (for backend form handling).

### Steps to Set Up

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/bhardwajjshubh/University-Insight-Assignment.git
   cd University-Insight-Assignment
   ```

2. **Install Dependencies:**
   
   - This project uses Tailwind CSS via CDN, so no additional CSS setup is required.
   - If you prefer a local Tailwind CSS setup, follow the [Tailwind CSS installation guide](https://tailwindcss.com/docs/installation).

3. **Configure Google Analytics and Facebook Pixel:**
   
   - Replace `'YOUR_GA_TRACKING_ID'` and `'YOUR_FB_PIXEL_ID'` in the `index.html` file with your actual tracking IDs.

4. **Set Up PHP for Form Handling (Optional):**
   
   - Ensure PHP is installed and running on your local machine.
   - Update the `action` attribute in the form to point to your PHP script (e.g., `submit_form.php`).
   - Customize the `submit_form.php` script to handle form submissions (e.g., save to a database, send an email).

## Usage

1. **Open the Project:**
   
   - Open the `index.html` file in your preferred web browser.

2. **Interact with the Page:**
   
   - Explore different sections to learn about studying MBBS abroad.
   - Fill out the lead generation form to test validation and submission.

3. **View Analytics:**
   
   - Check your Google Analytics and Facebook Pixel dashboards to monitor user interactions and form submissions.

## Deployment

To deploy the landing page, follow these steps:

1. **Push Changes to GitHub:**
   
   ```bash
   git add .
   git commit -m "Your commit message"
   git push origin main
   ```

2. **Deploy to a Hosting Service:**
   
   - Use a static site hosting service like [Vercel](https://vercel.com/).
   - Connect your GitHub repository to the hosting service and follow the deployment instructions.

3. **Verify Deployment:**
   
   - Ensure the live site functions correctly and analytics are being tracked.

## Contributing

Contributions are welcome! Follow these steps:

1. **Fork the Repository.**
2. **Create a New Branch** for your feature or bug fix.
3. **Commit Your Changes** and push them to your fork.
4. **Submit a Pull Request** with a detailed description of your changes.

## License

This project is licensed under the [MIT License](LICENSE).

