# 📰 Blog CMS – PHP Internship Task

A lightweight Blog CMS built with OOP PHP, MySQL, and TailwindCSS. This project demonstrates clean architecture using namespaces and class-based structure, focusing on reusability, maintainability, and mobile-first responsive design.

---

---

## 📁 Features Overview

### 🌐 Frontend (Public Pages)
- ✅ Responsive top navigation
- ✅ Blog List page (`index.php`)
  - Featured image
  - Title
  - Truncated description
  - "Read More" link over title clicked
  - Pagination (5 or 10 posts per page)
- ✅ Single Blog page (`blog.php`)
  - Full title/ post date
  - Featured image
  - Complete description

### 🔐 Admin Panel (`/admin`)
- ✅ Hardcoded login (user: `lemon`, password: `lemon`)
- ✅ Session-based authentication
- ✅ Dashboard – List posts (Edit/Delete buttons available)
- ✅ Create Post – Add new blog with:
  - Title
  - Description
  - Featured image (jpg/jpeg/png)
- 🔁 Edit Post *(in progress)*
- ❌ Delete via AJAX *(in progress)*
- ✅ Settings – Configure number of posts per page(in progress)

---

## 🧱 Backend Architecture

- ✅ Pure PHP (No frameworks)
- ✅ Object-Oriented Programming
- ✅ Organized using namespaces (`LH\Models`, `LH\Controllers`, etc.)
- ✅ Secure image upload handling
  - Validates image types (jpg/jpeg/png)
  - Renames files: `filename_timestamp.ext`

---

## 🗃️ Database Structure

### Table: `blogs`

| Field       | Type                          |
|-------------|-------------------------------|
| `id`        | `INT PRIMARY KEY AUTO_INCREMENT` |
| `title`     | `VARCHAR(255)`                |
| `description` | `TEXT`                      |
| `image`     | `VARCHAR(255)`                |
| `created_at` | `TIMESTAMP DEFAULT CURRENT_TIMESTAMP` |

---

## 📦 Core PHP Classes

### `LH\Database`
- Singleton PDO connection

### `LH\Blog`
- `getAllPosts($limit, $offset)`
- `getPostById($id)`
- `createPost($title, $desc, $img)`
- `updatePost($id, $title, $desc, $img)`
- `deletePost($id)`

### `LH\RequestHandler`
- `getRequest($key)`
- `postRequest($key)`
- `validate($data)`

---

## 📁 File Upload Notes
- Uploads are stored in the `/uploads` folder
- Filenames are renamed with timestamp to avoid collision  
  Example: `banner.jpg` → `banner_20250507123045.jpg`

---

## 🔧 Configuration
- Admin can change number of blog posts displayed per page from the **Settings** page in the admin panel

---

## ✅ Completed
- [ ] TailwindCSS styling
- [ ] Mobile-first & semantic HTML
- [ ] Blog listing with pagination
- [ ] Single blog view
- [ ] Admin login with session
- [ ] Create post with image upload
- [ ] Settings page for posts per page
- [ ] dashboard with title and edit/delete button
- [ ] edit post page with pre filled field

---

## 🚧 In Progress
- [ ] Edit post backend logic
- [ ] AJAX delete with confirmation
- [ ] Settings for page control

---

## 📷 Screenshots
<img width="1469" alt="Image" src="https://github.com/user-attachments/assets/bb0fc07b-b667-4cbc-b6da-99b3db721500" />
<img width="1318" alt="Image" src="https://github.com/user-attachments/assets/8f3cedaf-6577-4564-b09f-88a29cf19923" />
<img width="1470" alt="Image" src="https://github.com/user-attachments/assets/98b691fd-8944-47a8-a12b-d91af31bfef2" />
<img width="1470" alt="Image" src="https://github.com/user-attachments/assets/4d695a64-8475-4ce9-b530-f95457e95165" />
<img width="1470" alt="Image" src="https://github.com/user-attachments/assets/05d680b2-daae-4b37-995f-5338fb7f8bc0" />
<img width="1470" alt="Image" src="https://github.com/user-attachments/assets/bf0de59a-90f8-4bda-914f-b4a8f6cd01ff" />
<img width="1470" alt="Image" src="https://github.com/user-attachments/assets/e63bf8f7-f974-45e1-9f5a-9d5cc5fae0a2" />


---

## 📜 License
This project is for **educational/internship** purposes.
---

## 🙋‍♂️ Author

- **Name:** *(MD. Tanvir Islam)*
- **Intern Position:** PHP Intern @ Lemon Hive

---

## 📬 Submission

✅ Task completed as per requirements

