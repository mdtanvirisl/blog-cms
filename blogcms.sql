-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2025 at 07:01 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(10, 'The Power of Consistency in Daily Habits', 'Consistency is the cornerstone of success in both personal and professional life. While motivation can get you started, it’s consistency that keeps you going. Whether it\'s exercising, learning a new skill, or maintaining a productive routine, showing up regularly compounds over time. Imagine writing just one paragraph a day—you\'d have an entire book in a year. The key is not perfection, but persistence. Many people give up because they seek immediate results, but the most successful individuals are those who commit to small, consistent efforts. By building a system of daily habits, you create momentum that becomes difficult to stop. Start with something simple—10 minutes of reading or journaling daily—and stick to it. Over time, the results will surprise you.', 'image1_20250524163025.jpeg', '2025-05-24 16:30:25'),
(11, 'Top 10 Web Development Trends in 2025', 'Web development is constantly evolving, and 2025 is no different. This year, developers are focusing more on performance, scalability, and user experience. Serverless architecture continues to gain traction due to its scalability and cost-effectiveness. AI-powered chatbots and personalized interfaces are also making websites more interactive and intelligent. Progressive Web Apps (PWAs) are bridging the gap between websites and native apps, providing faster load times and offline functionality. On the front end, frameworks like Svelte and Astro are gaining popularity for their lightweight performance. TailwindCSS remains a top choice for utility-first styling. Additionally, accessibility and dark mode support are becoming standard. As businesses increasingly shift online, these trends reflect a push toward faster, smarter, and more user-centric digital experiences.', 'image2_20250524163215.png', '2025-05-24 16:32:15'),
(12, 'How to Stay Focused in a Distracted World', 'With notifications, social media, and countless distractions at our fingertips, staying focused has never been harder—or more important. Focus is the foundation of productivity, and without it, even the most talented individuals struggle to perform at their best. The first step toward improving focus is to manage your environment. Eliminate distractions: silence your phone, close unnecessary tabs, and use tools like Pomodoro timers to block work into intervals. Mindfulness and meditation can also help improve attention span over time. Equally important is working with intention—set clear, achievable goals and prioritize your most important tasks. Taking breaks and maintaining healthy habits, like regular sleep and exercise, play a significant role in cognitive performance. In a world full of noise, focus is your superpower.', 'maxresdefault_20250524163300.jpg', '2025-05-24 16:33:00'),
(13, 'Mastering CSS Grid and Flexbox', 'Layout is one of the core challenges in web design, and mastering CSS Grid and Flexbox can drastically simplify the process. Both are modern layout systems built into CSS, offering developers powerful tools for creating responsive, dynamic designs. Flexbox is great for laying out items in one dimension—either row or column—and excels in component alignment. CSS Grid, on the other hand, allows for two-dimensional layouts and gives you full control over both rows and columns. By combining both systems, developers can build complex, scalable layouts without relying on hacks or third-party frameworks. Learning these tools will not only make your code cleaner but also more adaptable to various screen sizes. Whether you\'re designing a navigation bar or a complex dashboard, Grid and Flexbox are essential tools in any developer’s toolkit.', 'css_20250524163421.jpeg', '2025-05-24 16:34:21'),
(14, 'Mental Health and the Modern Workplace', 'In today’s fast-paced and competitive work culture, mental health has become a critical topic of conversation. More employees than ever are facing burnout, anxiety, and depression due to long hours, unrealistic expectations, and the pressure to stay constantly connected. Companies are now realizing that productivity is closely linked to mental well-being. Encouraging open conversations about mental health, providing support through employee assistance programs, and offering flexible work options are steps in the right direction. Creating a psychologically safe workplace means acknowledging stress, recognizing early signs of burnout, and promoting work-life balance. A mentally healthy workforce isn\'t just a moral imperative—it’s a strategic advantage. Organizations that invest in the well-being of their people foster loyalty, innovation, and sustainable growth.', 'mental_20250524163449.jpeg', '2025-05-24 16:34:49'),
(15, 'The Beginner’s Guide to TailwindCSS', 'TailwindCSS has taken the web development community by storm, and for good reason. It’s a utility-first CSS framework that allows developers to style their applications without writing traditional CSS. Instead of creating custom classes, you apply predefined utility classes directly to HTML elements. This leads to faster development and a more consistent design language. For example, rather than creating a .btn-primary class, you simply add bg-blue-500 text-white px-4 py-2 to your button. Tailwind’s mobile-first approach also makes it easier to build responsive layouts. It may seem verbose at first, but once you get the hang of it, Tailwind can drastically speed up your workflow. Plus, it integrates well with tools like PostCSS, making it highly customizable.', 'css_20250524163535.jpeg', '2025-05-24 16:35:35'),
(16, 'How to Build a Personal Brand in 2025', 'Personal branding has become essential in today’s digital-first world. Whether you\'re a freelancer, developer, designer, or entrepreneur, building a personal brand can open doors to new opportunities. It starts with identifying your niche and core values. What do you want to be known for? Then, craft your online presence—update your LinkedIn, build a portfolio website, and engage meaningfully on social media platforms like Twitter, GitHub, or Medium. Share valuable insights, projects, and your journey. Consistency is key: from your profile photo to your messaging style, every element should reflect your brand identity. In 2025, authenticity is more powerful than polish. Let your personality shine through, provide value to your audience, and stay consistent.', 'motivation_20250524163650.png', '2025-05-24 16:36:50'),
(17, 'Understanding REST APIs for Beginners', 'REST APIs are everywhere—they power mobile apps, web apps, and even smart devices. If you\'re new to web development, understanding how REST APIs work is crucial. REST stands for Representational State Transfer, a set of principles for designing networked applications. Essentially, it allows different software systems to communicate using HTTP requests. For example, you might use a GET request to fetch blog posts from a server or a POST request to create a new post. Each request interacts with resources, typically represented in JSON format. Learning how to consume and create RESTful APIs enables you to build dynamic, data-driven applications. Start with basic tools like Postman or CURL to practice. Once you’re comfortable, you can build your own using PHP or Node.js.', 'restapi_20250524163822.png', '2025-05-24 16:38:22'),
(18, 'The Future of Remote Work', 'Remote work has transitioned from a temporary solution to a permanent reality for many businesses worldwide. The pandemic accelerated the shift, but the benefits—flexibility, reduced commute, and access to a global talent pool—are here to stay. In 2025, remote work continues to evolve with virtual reality meetings, asynchronous collaboration tools, and AI-powered productivity assistants. However, remote work also poses challenges like isolation and blurred work-life boundaries. Companies that succeed in the long term are investing in employee well-being, clear communication protocols, and inclusive digital cultures. For workers, mastering time management and setting boundaries are essential. Remote work is no longer a perk—it’s a standard.', 'Unknown_20250524163949.jpeg', '2025-05-24 16:39:49'),
(19, 'Essential Soft Skills for Developers', 'While coding skills are vital, soft skills are what set exceptional developers apart. Communication is the most important—explaining complex issues in simple terms is a game-changer. Collaboration is also key, as developers often work in teams across functions. Problem-solving, time management, and adaptability help you thrive in high-pressure situations. Empathy plays a big role too—it helps you build user-friendly software by putting yourself in the user\'s shoes. Lastly, a growth mindset encourages continuous learning and resilience. In today’s job market, developers who combine technical skills with soft skills are in high demand. These qualities not only make you a better teammate but also prepare you for leadership roles.', 'design_20250524164057.jpeg', '2025-05-24 16:40:57'),
(20, 'Design Thinking: A Problem-Solving Framework', 'Design thinking is a user-centered approach to problem-solving that has gained popularity in both tech and non-tech fields. It involves five key stages: empathize, define, ideate, prototype, and test. The process starts by deeply understanding the user’s needs, followed by defining the problem clearly. You then brainstorm ideas, build quick prototypes, and test them with real users. What sets design thinking apart is its emphasis on empathy and iteration. It encourages experimentation and values feedback early in the process. Whether you’re designing a product, service, or experience, design thinking helps you create innovative, user-friendly solutions that actually solve real problems.', 'design_20250524164147.jpeg', '2025-05-24 16:41:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
