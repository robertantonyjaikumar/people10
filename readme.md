## Installation Steps
- Install using command composer install
- Copy `\People10\People10ServieProvider::class` paste under `config/app.php` file
- Run `php artisan vendor:publish` and publish People10\People10ServieProvider
- Run `php artisan migrate`
- Add Application base URL in .env `APP_URL`

###Employee Commands
- php artisan employee:set {emp_id} {emp_name} {ip_address} to create employee
- php artisan employee:get {ip_address} to get employee details
- php artisan employee:unset {ip_address} to delete employee

###Employee Web History Commands
- php artisan employeeWebHistory:set {ip_address} {url}  to create employee
- php artisan employeeWebHistory:get {ip_address} to get employee details
- php artisan employeeWebHistory:unset {ip_address} to delete employee
