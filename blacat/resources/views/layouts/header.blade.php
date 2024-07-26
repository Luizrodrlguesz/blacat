<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register Blacat.co</title>

    <link rel="icon" type="icon" href="assets/img/iconc.png" />
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- bootstrap lab -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- icon libs bootstrap -->
    <link rel="stylesheet" href="caminho/para/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" />
</head>

<body>


    <script>
        function togglePasswordVisibility(passwordFieldId, toggleIconId) {
            const passwordField = document.getElementById(passwordFieldId);
            const passwordToggle = document.getElementById(toggleIconId);

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordToggle.classList.remove('bi-eye');
                passwordToggle.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                passwordToggle.classList.remove('bi-eye-slash');
                passwordToggle.classList.add('bi-eye');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="assets/js/main.js"></script>
</body>
