<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | CHMSU Wear</title>
    <link rel="stylesheet" href="/CHMSUWEAR/public/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        .brand-logo-wrapper { display: flex; flex-direction: column; align-items: center; margin-bottom: 30px; }
        .brand-icon-circle { width: 70px; height: 70px; background-color: #16a34a; color: white; border-radius: 50%; display: flex; justify-content: center; align-items: center; font-size: 28px; font-weight: 800; box-shadow: 0 8px 20px rgba(22, 163, 74, 0.15); margin-bottom: 15px; }
        .brand-text-stack { text-align: center; }
        .brand-text-stack h3 { font-size: 26px; font-weight: 800; color: #064e3b; margin: 0; line-height: 1.2; }
        .brand-text-stack p { font-size: 12px; color: #16a34a; font-style: italic; font-weight: 600; margin: 0; }

        .role-selector { display: flex; gap: 10px; margin-bottom: 20px; background: #f1f5f9; padding: 5px; border-radius: 12px; }
        .role-option { flex: 1; text-align: center; padding: 10px; cursor: pointer; border-radius: 10px; font-size: 14px; font-weight: 700; color: #64748b; transition: 0.3s; }
        .role-option.active { background: white; color: #16a34a; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }

        #admin-field, #student-field { display: none; animation: fadeIn 0.3s ease; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(-5px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-visual">
            <div class="overlay"></div>
            <div class="visual-content">
                <div class="badge">Join the Tribe</div>
                <h1>Start Your <br><span>Journey.</span></h1>
                <p>Create an account to browse university merchandise and trade with your fellow students.</p>
            </div>
        </div>

        <div class="auth-form-section">
            <div class="form-box">
                <div class="brand-logo-wrapper">
                    <div class="brand-icon-circle">CW</div>
                    <div class="brand-text-stack">
                        <h3>CHMSU Wear</h3>
                        <p>Your campus. Your style.</p>
                    </div>
                </div>

                <form action="/CHMSUWEAR/app/controllers/RegisterController.php" method="POST">
                    <div class="role-selector">
                        <div class="role-option active" onclick="setRole('student', this)">Student</div>
                        <div class="role-option" onclick="setRole('admin', this)">Administrator</div>
                    </div>
                    <input type="hidden" name="role" id="user-role" value="student">

                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="Juan Dela Cruz" required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="student@chmsu.edu.ph" required>
                    </div>

                    <div id="student-field" style="display: block;">
                        <div class="form-group">
                            <label>School ID Number</label>
                            <input type="text" name="school_id" id="sid-input" placeholder="e.g. 2023-123-456" required>
                        </div>
                    </div>

                    <div id="admin-field">
                        <div class="form-group">
                            <label style="color: #b91c1c;">Admin Protocol Password</label>
                            <input type="password" name="admin_code" id="admin-input" placeholder="Enter security code">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn-primary-new">Register Now</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function setRole(role, element) {
            document.getElementById('user-role').value = role;
            document.querySelectorAll('.role-option').forEach(opt => opt.classList.remove('active'));
            element.classList.add('active');

            const sField = document.getElementById('student-field');
            const aField = document.getElementById('admin-field');
            
            if (role === 'student') {
                sField.style.display = 'block';
                aField.style.display = 'none';
                document.getElementById('sid-input').required = true;
                document.getElementById('admin-input').required = false;
            } else {
                sField.style.display = 'none';
                aField.style.display = 'block';
                document.getElementById('sid-input').required = false;
                document.getElementById('admin-input').required = true;
            }
        }
    </script>
</body>
</html>