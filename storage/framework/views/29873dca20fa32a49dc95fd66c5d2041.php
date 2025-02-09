<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with React</title>
    <!-- React via CDN -->
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
</head>
<body>
    <div id="app"></div>

    <script type="text/babel">
        function App() {
            return <h1>Hello, React in Laravel!</h1>;
        }
        ReactDOM.createRoot(document.getElementById('app')).render(<App />);
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hotel-reservation\resources\views/welcome.blade.php ENDPATH**/ ?>