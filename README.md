# Astral Express POS — CodeIgniter 4 Laboratory Activity

This project is a beginner-friendly four-page Point-of-Sale website inspired by the Astral Express from Honkai: Star Rail. Character data are stored in static PHP arrays. No database is used yet. This is an unofficial student project.

## Pages and routes

| URL | Controller method | Purpose |
| --- | --- | --- |
| `/` | `Pages::index` | Displays the landing page |
| `/about` | `Pages::about` | Displays information about the project |
| `/customers` | `Customers::index` | Displays customer records |
| `/users` | `Users::index` | Displays user/staff records |

Local URL: `http://localhost/Codeigniter/Technical1CodeIgniter/`

## 1. CodeIgniter installation

The project uses the complete CodeIgniter 4.5.5 framework supplied in `demonstration_ci4.zip` by my professor. It already contains the `app`, `public`, `system`, `tests`, and `writable` folders and a `composer.json` file.

The normal Composer command for a new CodeIgniter app is:

```bash
composer create-project codeigniter4/appstarter project-name
```

For this project, the supplied archive was used because it already contains the complete framework files. XAMPP PHP 8.2 is being used. The PHP `intl` and `mbstring` extensions must be enabled.

## 2. Environment configuration

The `.env` file contains:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost/Codeigniter/Technical1CodeIgniter/'
app.indexPage = ''
app.appTimezone = 'Asia/Manila'
```

- `CI_ENVIRONMENT` enables helpful development error messages.
- `app.baseURL` tells CodeIgniter the main URL of the application.
- `app.indexPage = ''` removes `index.php` from generated links.
- `app.appTimezone` sets the application to Philippine time.

An `.env.example` file is included so another user can copy it and change the URL for their computer or hosting provider.

## 3. Routes

Routes are registered in `app/Config/Routes.php`:

```php
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
```

Each route connects a URL to a controller method. For example, visiting `/customers` runs the `index()` method inside the `Customers` controller.

## 4. Pages controller

`app/Controllers/Pages.php` controls the landing and about pages.

```php
public function index(): string
{
    return view('pages/home', [
        'title' => 'Dashboard',
        'activePage' => 'home',
    ]);
}
```

The `view()` function loads a view file. The array beside it passes values to that view. `title` is used in the browser title, while `activePage` highlights the correct navigation link.

The `about()` method works the same way but loads `app/Views/pages/about.php`.

## 5. Customers controller and static array

`app/Controllers/Customers.php` contains a `$customers` array with six sample records:

```php
$customers = [
    [
        'name' => 'March 7th',
        'email' => 'march7th@astralexpress.space',
        'phone' => 'AE-1001',
    ],
    // More customer records follow...
];
```

Each customer is one associative array with `name`, `email`, and `phone` keys. The controller passes the complete array to the customer view:

```php
return view('customers/index', [
    'title' => 'Customer Accounts',
    'activePage' => 'customers',
    'customers' => $customers,
]);
```

## 6. Users controller and static array

`app/Controllers/Users.php` contains a `$users` array with six sample staff records:

```php
$users = [
    [
        'username' => 'navigator.himeko',
        'name' => 'Himeko',
        'role' => 'Express Navigator',
    ],
    // More user records follow...
];
```

Each record has a `username`, `name`, and `role`. The array is passed to `app/Views/users/index.php` as the variable `$users`.

## 7. Views and foreach loops

All pages use `app/Views/layouts/main.php`. This shared layout contains the HTML document, header, navigation links, footer, and CSS link. Individual pages only provide their main content.

The customer view displays every customer with a `foreach` loop:

```php
<?php foreach ($customers as $index => $customer): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= esc($customer['name']) ?></td>
        <td><?= esc($customer['email']) ?></td>
        <td><?= esc($customer['phone']) ?></td>
    </tr>
<?php endforeach ?>
```

The loop runs once for every record. `$customer` represents the current customer, and `$index + 1` creates the row number. The `esc()` function safely displays text in HTML.

The user view uses the same method:

```php
<?php foreach ($users as $index => $user): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= esc($user['username']) ?></td>
        <td><?= esc($user['name']) ?></td>
        <td><?= esc($user['role']) ?></td>
    </tr>
<?php endforeach ?>
```

## 8. Navigation

The shared layout links all four pages:

```php
<a href="<?= base_url('/') ?>">Home</a>
<a href="<?= base_url('about') ?>">About</a>
<a href="<?= base_url('customers') ?>">Customers</a>
<a href="<?= base_url('users') ?>">Users</a>
```

`base_url()` uses the address from `.env`, so the links continue to work when the project URL changes.

## 9. CSS

`public/assets/css/pos.css` contains simple beginner-level CSS. It styles:

- The navy and gold Astral Express header and navigation
- The landing-page welcome box
- Three basic information cards
- Customer and user tables
- A footer
- One media query for smaller screens

No CSS framework or JavaScript library is used.

## 10. How the request travels through the app

When a visitor opens `/customers`, the following happens:

1. `app/Config/Routes.php` sends the request to `Customers::index`.
2. The controller creates the static `$customers` array.
3. The controller sends the array to `app/Views/customers/index.php`.
4. The view extends the shared layout.
5. The `foreach` loop creates one table row for each customer.
6. CodeIgniter returns the finished HTML page to the browser.

The `/users` page follows the same process with the `Users` controller and `$users` array.

## 11. Running the project with XAMPP

1. Place the folder at `C:\xampp\htdocs\Codeigniter\Technical1CodeIgniter`.
2. Open the XAMPP Control Panel.
3. Start Apache.
4. Open `http://localhost/Codeigniter/Technical1CodeIgniter/` in a browser.
5. Use the navigation menu to test Home, About, Customers, and Users.

## 12. Database note

There is no database export for this first version because the activity specifically requires static PHP arrays and says that no database is involved yet. A database and SQL export can be added in a future version.

## 13. Hosting the project

InfinityFree is a practical free option for this laboratory project because it supports PHP, `.htaccess`, free subdomains, and file uploads.

Basic deployment steps:

1. Create an InfinityFree account and free hosting account.
2. Open its File Manager or connect through FTP.
3. Upload the project files to the hosting account's `htdocs` folder.
4. Change `app.baseURL` in `.env` to the complete free subdomain, including `https://` and the trailing slash.
5. Change `CI_ENVIRONMENT` to `production` before submitting the hosted link.
6. Make sure the folders inside `writable` can be written by PHP.
7. Open the domain and test all four routes.

GitHub Pages cannot run this application because it only hosts static files and does not execute PHP. The GitHub repository should contain the source code, while a PHP hosting provider should run the live application.

## Verification results

- PHP syntax check: passed
- `/`: HTTP 200
- `/about`: HTTP 200
- `/customers`: HTTP 200 and six customer rows
- `/users`: HTTP 200 and six user rows
- Navigation links: working
- Responsive CSS: working
