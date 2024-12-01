<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Combii's Life (Home)</title>
    
        <!-- Google Font link here -->
        
        <link rel="stylesheet" href="/assets/css/login.css">
    </head>

    <body>

        <!-- HEADER -->
        <header>
    
            <div class="logo">
                <img src="/assets/images/logo.png" alt="Combii's Life Logo">
            </div>
    
        </header>
        <!-- END OF HEADER -->

        <main>
            <div class="dog-container-wrapper">
                <!-- Login Form Container -->
                <div class="login-container">
                    <div class="dog-holder">
                        <img src="/assets/images/combii.png" alt="Combi holding the login container" class="dog-image">
                    </div>
                    <h2>Combii's Access</h2>
            
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" 
                            pattern="[A-Za-z]*" 
                            title="Only alphabetic characters (a-z, A-Z) are allowed." 
                            placeholder="Enter username (optional)">
                            <button type="submit">Please Access</button>
                    </form>
                <!-- End of Login Form Container -->
                </div>
            </div>
        </main>

    </body>
</html>
