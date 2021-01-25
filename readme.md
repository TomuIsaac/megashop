# Megashop
## Pre-requisites
1. composer isntalled
1. npm installation
1. wampserver for windows
1. git

## Installation
1. Clone the repo and `cd` into it eg `git clone https://github.com/tomusange20167/megashop.git` 
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your Stripe credentials in your `.env` file. Specifically `STRIPE_KEY` and `STRIPE_SECRET`
1. Set your Algolia credentials in your `.env` file. Specifically `ALGOLIA_APP_ID` and `ALGOLIA_SECRET`
1. Set your Braintree credentials in your `.env` file if you want to use PayPal. Specifically `BT_MERCHANT_ID`, `BT_PUBLIC_KEY`, `BT_PRIVATE_KEY`.
1. Set your `APP_URL` in your `.env` file. This is needed for Voyager to correctly resolve asset URLs.
1. Set `ADMIN_PASSWORD` in your `.env` file if you want to specify an admin password. If not, the default password is 'password'
1. `npm install`
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser
