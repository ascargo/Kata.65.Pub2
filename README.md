# Kata 65 – Pub Reservations (PHP)

Continuing the previous pub kata: reserve a table and then “arrive” to take it.

## Files

- `index.php` – sets up sample tables/clients, runs reservations, then arrivals.
- `Classes/Table.php` – table entity (id, chairs, reserved/occupied state).
- `Classes/Client.php` – client with name and party size; can reserve and arrive.
- `Classes/Pub.php` – holds tables, reserves the first that fits, and seats arrivals.

## How to run

From the project folder:
php index.php

Edit tables or client sizes in `index.php` to try different scenarios.
