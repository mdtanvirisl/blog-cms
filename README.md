# 📰 Blog CMS – PHP Internship Task

A lightweight Blog CMS built with OOP PHP, MySQL, and TailwindCSS. This project demonstrates clean architecture using namespaces and class-based structure, focusing on reusability, maintainability, and mobile-first responsive design.

---

## 🚀 Live Demo

> *(Add your demo link here, if available)*

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
- ✅ Settings – Configure number of posts per page(not completed {can't write the txt file})

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
- [x] TailwindCSS styling
- [x] Mobile-first & semantic HTML
- [x] Blog listing with pagination
- [x] Single blog view
- [x] Admin login with session
- [x] Create post with image upload
- [x] Settings page for posts per page

---

## 🚧 In Progress
- [ ] Edit post backend logic
- [ ] AJAX delete with confirmation

---

## 📷 Screenshots
> *(Add screenshots or sample image previews here if possible)*

---

## 📜 License
This project is for **educational/internship** purposes. Feel free to reuse the structure with proper attribution.

---

## 🙋‍♂️ Author

- **Name:** *(Your Name)*
- **Intern Position:** PHP Intern @ Lemon Hive
- **GitHub:** [YourGitHubUsername](https://github.com/YourGitHubUsername)

---

## 📬 Submission

✅ Task completed as per requirements  
🔗 [GitHub Repository Link](https://github.com/your-repo)

