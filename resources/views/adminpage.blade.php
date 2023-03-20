<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Park Admin Page</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">
  </head>
  <body>
    <header class="bg-gray-100 py-4">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">Park Admin Page</h1>
        <nav class="mt-4">
          <ul class="flex justify-between">
            <li><a href="#" class="text-gray-700 hover:text-gray-900">Home</a></li>
            <li><a href="#" class="text-gray-700 hover:text-gray-900">Users</a></li>
            <li><a href="#" class="text-gray-700 hover:text-gray-900">Reports</a></li>
            <li><a href="#" class="text-gray-700 hover:text-gray-900">Settings</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold mb-4">Welcome, Admin!</h2>
      <p class="text-gray-600">You are logged in as the administrator of the park app. Here, you can manage users, view reports, and configure app settings.</p>
      <section class="my-6">
        <h3 class="text-xl font-bold mb-4">User Management</h3>
        <div class="-mx-4 sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">user1</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">user1@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Standard</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <button class
