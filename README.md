# 📦 ImmaLend

### School Inventory Lending System

ImmaLend is a web-based school inventory lending system designed to make borrowing school equipment and rooms easier, more organized, and more efficient.

From requesting a projector for a presentation to borrowing a studio for school activities, ImmaLend brings the entire lending process into one simple platform.

---

## ✨ What is ImmaLend?

Managing school inventory can sometimes be complicated when everything is handled manually.

ImmaLend provides a centralized platform where students, teachers, and administrators can manage the lending process more easily.

With ImmaLend, users can:

- 👨‍🎓 View available school equipment and rooms
- 📝 Submit borrowing requests
- 🔎 Track borrowing status
- 📚 View borrowing history
- 👨‍💼 Manage borrowing requests
- 📦 Manage school inventory
- 🔄 Confirm returned items

> **Our goal is simple: Make school borrowing easier, clearer, and more organized.**

---

## 🚀 Features

### 👤 User Features

Users can:

- 🔐 Login to the system
- 🏠 Access the homepage
- 📦 View available items and rooms
- 💡 Request new items
- 📝 Submit item borrowing requests
- ⏳ Track pending borrowing requests
- 📋 View current borrowings
- 📚 View borrowing history
- 👤 Manage their profile

### 🛠️ Admin Features

Administrators can:

- 🔐 Login through the admin login page
- 👥 Manage users
- 📦 Manage school inventory
- ➕ Add new items
- ✏️ Edit item information
- 🗑️ Delete items
- 📋 Review borrowing requests
- ✅ Approve borrowing requests
- ❌ Reject borrowing requests
- 🔄 Confirm returned items
- 📚 View borrowing history

---

## 🧩 Main Entities

ImmaLend is built around four main entities:

| Entity | Description |
|---|---|
| 👤 **User** | Students and teachers who use the lending system |
| 🛠️ **Admin** | Users responsible for managing the system |
| 📦 **Item** | School equipment and rooms available for lending |
| 📋 **Lending** | Records of borrowing requests and their status |

---

## 🔄 How It Works

### 👤 User Flow

```text
Login
  ↓
Homepage
  ↓
View Items
  ↓
Request Item
  ↓
Track Borrowing
  ↓
Borrowing History
````

### 🛠️ Admin Flow

```text
Admin Login
     ↓
Manage Inventory & Users
     ↓
Review Borrowing Requests
     ↓
Approve / Reject
     ↓
Confirm Item Return
     ↓
Borrowing History
```

---

## 🎨 Design

ImmaLend uses a clean, modern, and user-friendly interface designed for a school environment.

### Design Principles

* 🎯 Simple and intuitive navigation
* 🧹 Clean and organized layouts
* 📝 Easy-to-understand forms
* 🔵 Blue-based visual identity
* 🧩 Consistent design components
* 👤 Separate User and Admin experiences
* 📱 Responsive and practical interface

The interface focuses on making every important action easy to find, from requesting an item to checking its borrowing status.

---

## 💻 Tech Stack

| Technology              | Purpose                                 |
| ----------------------- | --------------------------------------- |
| 🐘 **PHP**              | Backend programming language            |
| 🔥 **Laravel 13**       | Web application framework               |
| 🎨 **Tailwind CSS**     | User interface styling                  |
| ⚡ **Vite**              | Frontend development and asset bundling |
| 🧱 **Blade**            | Laravel templating engine               |
| 🗄️ **MySQL / MariaDB** | Database                                |
| 🖥️ **Laragon**         | Local development environment           |

---

## 📂 Project Structure

```text
immalend/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/
│   │       │   ├── AdminLoginController.php
│   │       │   ├── LogoutController.php
│   │       │   └── UserLoginController.php
│   │       │
│   │       ├── LendingAction/
│   │       │   ├── ApproveLendingController.php
│   │       │   ├── RejectLendingController.php
│   │       │   └── ReturnLendingController.php
│   │       │
│   │       ├── AdminController.php
│   │       ├── ItemController.php
│   │       ├── LendingController.php
│   │       └── UserController.php
│   │
│   └── Models/
│       └── User.php
│
├── resources/
│   └── views/
│       ├── admins/
│       ├── Auth/
│       ├── items/
│       ├── layouts/
│       │   └── partials/
│       ├── lendings/
│       ├── users/
│       ├── home.blade.php
│       └── welcome.blade.php
│
├── routes/
│   └── web.php
│
├── public/
├── database/
├── package.json
├── composer.json
└── README.md
```

---

## 🔐 Access

### 👤 User Login

```text
/login
```

Regular users such as students and teachers can access the system through the standard login page.

### 🛠️ Admin Login

```text
/admin/login
```

Administrators have a separate login page with access to management features that are not available to regular users.

---

## ⚙️ Installation

Follow these steps to run ImmaLend on your local machine.

### 1. Clone the Repository

```bash
git clone <repository-url>
```

### 2. Open the Project Folder

```bash
cd immalend
```

### 3. Install PHP Dependencies

```bash
composer install
```

### 4. Install Frontend Dependencies

```bash
npm install
```

### 5. Create the Environment File

```bash
cp .env.example .env
```

For Windows, you can manually copy `.env.example` and rename it to:

```text
.env
```

### 6. Generate the Application Key

```bash
php artisan key:generate
```

### 7. Configure the Database

Open the `.env` file and configure your database:

```env
DB_DATABASE=immalend
DB_USERNAME=root
DB_PASSWORD=
```

Make sure the `immalend` database has already been created.

### 8. Run Database Migrations

```bash
php artisan migrate
```

### 9. Start the Application

Start the Application

Run the development environment with:

```bash
composer run dev
```

Then open the application in your browser:

```text
http://localhost:8000
```

---

## 👥 Development Team

| Member                      | Role               |
| --------------------------- | ------------------ |
| **Forensya Hani**           | Backend Developer  |
| **Hernandez Lim**           | Frontend Developer |
| **Quinlen Medelline**       | Backend Developer  |
| **Sandrika Marcella Jolie** | UI/UX Designer     |

### 🎯 Team Contributions

#### Forensya Hani

Responsible for backend development and server-side functionality, including system logic and data processing.

#### Hernandez Lim

Responsible for frontend development and implementing the user interface into the web application.

#### Quinlen Medelline

Responsible for backend development and supporting the implementation of system functionality and data management.

#### Sandrika Marcella Jolie

Responsible for UI/UX design, interface layout, visual consistency, and overall user experience.

---

## 📌 Project Goals

ImmaLend was developed with the following goals:

1. Make the school borrowing process easier.
2. Reduce manual inventory management.
3. Help students and teachers track their borrowing requests.
4. Help administrators manage inventory efficiently.
5. Keep borrowing records organized.
6. Provide a simple and user-friendly experience.
7. Create a practical solution to a real school environment problem.

---

## 🌱 Future Improvements

ImmaLend can be further developed with additional features such as:

* 📧 Email notifications for borrowing status
* 📊 Admin dashboard with borrowing statistics
* 🔔 Real-time borrowing notifications
* 📱 Improved mobile responsiveness
* 🔎 Advanced item search and filtering
* 📅 Calendar-based borrowing schedules
* 👥 More detailed role and permission management
* 📈 Inventory usage reports

---

## 📚 Project Information

| Information                 | Details                               |
| --------------------------- | ------------------------------------- |
| **Project Name**            | ImmaLend                              |
| **Type**                    | School Web Application                |
| **Category**                | Inventory & Lending Management System |
| **Framework**               | Laravel 13                            |
| **Frontend**                | Blade + Tailwind CSS                  |
| **Backend**                 | Laravel + PHP                         |
| **Database**                | MySQL                                 |
| **Development Environment** | Laragon                               |

---

## 💙 Built With

ImmaLend was built as a collaborative school project by a team of students with different roles in backend development, frontend development, and UI/UX design.

The project combines technical development and interface design to create a practical lending management system for schools.

---

## ⭐ ImmaLend

> **Borrow smarter. Manage better. Stay organized.** 📦

Made with 💙 by the ImmaLend Team.
