---

weight: 3.4
slug: user_admin
title: General - System Users
url: /admin/dashboard/users
menu: "Dashboard > Settings > System Users" 

screenshot_steps:
    header: System users
    image: /data/user/admin_dashboard_users.png
    steps:
        - Access this page from the Toolbar menu.
        - Click to create a new User.
        - Filter by name or email (contains any word).
        - Filter by user status (active or blocked).
        - Filter by user role.
        - Label - ID. This is the unique identifier of each "User" that is created by Drupal (incrementally) when you create a new system User. You can use this for unique reference. ID cannot change upon creation.
        - Label - Username.
        - Label - Status. Shows if a system "User" is Active or Blocked (disabled).
        - Label - User roles.
        - Label - Member for. How long before has this user been on the database.
        - Label - Last access.
        - Label - Operations. Available operations here are "Edit".

---

In this page you can see and filter all the system users (accounts with login permission).

The results display in a dynamic table. On the table header some column labels are links. When you click these you can 
sort by each column value.

Every time you are filtering the results you can see the result number as also as the results on each page 
(if there are more pages).

You cannot delete or edit user with ID 1 (Drupal **root user**). 

Users with the role "Manager" cannot delete themselves but only other Managers.
