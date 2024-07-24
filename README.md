# Install Tailwind CSS with Laravel
1. via npm

- ```npm install -D tailwindcss postcss autoprefixer```

- membuat file config
 
  ```npx tailwindcss init -p```

2. config file tailwind.config.js
    ```
    /** @type {import('tailwindcss').Config} */
    export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    }
    ```

3. Menambah tailwind ke css di file ./resources/css/app.css
    ```
    @tailwind base;
    @tailwind components;
    @tailwind utilities;
    ```

4. Build proses
```npm run dev```

5. Tambah tailwind ke dalam html, didalam head
    ```
    <!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    </head>
    <body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    </body>
    </html>
    ```

# Mengubah Tailwind UI - Font Inter
1. Menggunakan inter melalui CDN
```<link rel="stylesheet" href="https://rsms.me/inter/inter.css">```
2. Menambah config
    ```
    const defaultTheme = require('tailwindcss/defaultTheme')

    module.exports = {
    theme: {
        extend: {
        fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        },
        },
    },
    // ...
    }
    ```

# Install alpine js
1. CDN 
```
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

# Install Flow bite untuk card
- ```npm install -D flowbite```
