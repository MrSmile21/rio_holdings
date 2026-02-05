# Rio Holdings (Pvt) Ltd - Corporate Website

A modern, professional single-page website designed for **Rio Holdings (Pvt) Ltd**, a leading supplier of printer consumables (ribbons, cartridges) and maintenance services in Sri Lanka.

![Project Status](https://img.shields.io/badge/Status-Completed-success)
![Tech Stack](https://img.shields.io/badge/Stack-PHP%20|%20HTML%20|%20CSS%20|%20JS-blue)

## 📖 Overview

This project is a fully responsive, lightweight, and SEO-friendly corporate website. It serves as a digital brochure for the company, showcasing their products and services while providing an easy way for potential clients to get in touch.

### Key Features
- **Responsive Design**: Optimization for Desktop, Tablet, and Mobile devices.
- **Single Page Navigation**: Smooth scrolling experiences with a sticky header.
- **Modern UI/UX**: Professional "Blue & Grey" color palette with clean typography (Inter font).
- **Interactive Elements**: Mobile hamburger menu, FAQ accordion, and hover effects.
- **Contact Form**: AJAX-powered PHP contact form with input validation.
- **Dynamic Footer**: Auto-updating copyright year.

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3 (Custom Properties/Variables), JavaScript (Vanilla ES6+)
- **Backend**: PHP (For form handling and basic server-side logic)
- **Icons**: FontAwesome 6
- **Fonts**: Google Fonts (Inter)

## 🚀 Installation & Setup

To run this project locally, you need a local web server environment like XAMPP, WAMP, or MAMP.

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/rio-holdings-website.git
    ```

2.  **Move to Web Server Directory**
    - Copy the `rio_holdings` folder into your `htdocs` (XAMPP) or `www` (WAMP) directory.
    - Example Path: `C:\xampp\htdocs\rio_holdings\`

3.  **Start the Server**
    - Open XAMPP/WAMP Control Panel.
    - Start **Apache**.

4.  **Access the Website**
    - Open your browser and go to:
    ```
    http://localhost/rio_holdings/
    ```

## ⚙️ Configuration

### Email Setup
The contact form (`contact.php`) is currently set to **Demo Mode**. To enable real email sending:

1.  Open `contact.php`.
2.  Update the `$to` variable with the actual company email address.
3.  Uncomment the `mail()` function block.
4.  Ensure your server (or local environment) is configured to send emails (SMTP).

```php
// contact.php configuration
$to = "info@rioholdings.lk"; 
// ...
// mail($to, $subject, $email_content, $headers);
```

## 📂 Project Structure

```
rio_holdings/
├── css/
│   └── style.css       # Main stylesheet
├── js/
│   └── main.js         # UI interactions & Form AJAX
├── images/             # Image assets
├── index.php           # Main landing page
├── contact.php         # Form processing script
└── README.md           # Project documentation
```

## 🎨 Design Decisions

- **Color Scheme**: used a corporate palette (Slate Blue & Sky Blue) to reflect trust and professionalism.
- **Performance**: Zero external CSS frameworks (like Bootstrap) were used to keep the site lightweight and fast.
- **Usability**: Clear Call-to-Action (CTA) buttons for "Call Now" and "WhatsApp" to drive conversion.

## 📄 License

This project is open-source and available for educational purposes. Content and branding belong to Rio Holdings (Pvt) Ltd.