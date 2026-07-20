<?php

test('core page routes render successfully', function (string $path): void {
    $this->get($path)
        ->assertStatus(200);
})->with([
    '/',
    '/cart',
    '/checkout',
    '/contact',
    '/about',
    '/signup',
    '/login',
    '/wishlist',
    '/profile',
    '/shop',
    '/products',
    '/customer-orders',
    '/orders',
    '/inventory',
    '/category/1',
    '/product/1',
]);
