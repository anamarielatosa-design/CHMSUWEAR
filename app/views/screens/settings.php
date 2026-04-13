<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Body with standard background */
        body { background-color: #f8fafc; margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; }

        .content { max-width: 800px; margin: 0 auto; padding: 40px 20px; }

        .settings-card {
            background: white;
            padding: 40px;
            border-radius: 32px;
            box-shadow: 0 10px 30px rgba(6, 78, 59, 0.03);
            border: 1px solid #e2e8f0;
        }

        /* Profile Section - GREEN Theme */
        .settings-profile-header {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-bottom: 35px;
            padding: 25px;
            background: #f0fdf4; /* Light Green background */
            border-radius: 24px;
            border: 1px solid #dcfce7;
        }

        .avatar-container { position: relative; }
        
        .avatar-wrapper {
            width: 85px; height: 85px;
            border-radius: 24px;
            background: #16a34a; /* CHMSU Green */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
            font-weight: 800;
            box-shadow: 0 8px 16px rgba(22, 163, 74, 0.2);
        }

        .edit-avatar-btn {
            position: absolute;
            bottom: -5px; right: -5px;
            background: white;
            border: 1px solid #e2e8f0;
            width: 30px; height: 30px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .profile-info h3 { margin: 0; color: #064e3b; font-size: 22px; font-weight: 800; }
        .profile-info p { margin: 4px 0 0; color: #64748b; font-size: 14px; }

        /* Settings Rows */
        .settings-section { margin-bottom: 30px; }
        .settings-group-title {
            font-size: 12px; font-weight: 800; color: #94a3b8;
            text-transform: uppercase; letter-spacing: 1.5px;
            margin-bottom: 15px; padding-left: 5px;
        }

        .settings-item {
            display: flex; justify-content: space-between; align-items: center;
            text-decoration: none; padding: 16px;
            border-radius: 16px; transition: 0.2s;
            margin-bottom: 8px;
        }

        .settings-item:hover { background: #f8fafc; }

        .item-left { display: flex; align-items: center; gap: 18px; }
        .icon-box {
            width: 42px; height: 42px;
            background: white; border: 1px solid #e2e8f0;
            border-radius: 12px; display: flex;
            align-items: center; justify-content: center;
            font-size: 20px; transition: 0.3s;
        }

        /* Hover effects use primary green */
        .settings-item:hover .icon-box { border-color: #16a34a; color: #16a34a; transform: scale(1.05); }

        .settings-label { font-weight: 700; font-size: 15px; color: #1e293b; display: block; }
        .settings-desc { font-size: 13px; color: #64748b; }

        /* Switches & Arrows use primary green */
        .arrow-icon { color: #cbd5e1; font-weight: 800; transition: 0.3s; }
        .settings-item:hover .arrow-icon { color: #16a34a; transform: translateX(5px); }

        .switch { position: relative; display: inline-block; width: 48px; height: 26px; }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider {
            position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0;
            background-color: #e2e8f0; transition: .4s; border-radius: 34px;
        }
        .slider:before {
            position: absolute; content: ""; height: 20px; width: 20px;
            left: 3px; bottom: 3px; background-color: white;
            transition: .4s; border-radius: 50%;
        }
        input:checked + .slider { background-color: #16a34a; } /* CHMSU Green for active */
        input:checked + .slider:before { transform: translateX(22px); }

        /* Logout button (remains red for emphasis) */
        .logout-btn {
            display: block; text-align: center; margin-top: 20px;
            padding: 18px; color: #e11d48; background: #fff1f2;
            border-radius: 20px; font-weight: 800; text-decoration: none;
            border: 1px solid #ffe4e6; transition: 0.3s;
        }
        .logout-btn:hover { background: #ffe4e6; transform: translateY(-2px); color: #be123c; }
    </style>
</head>
<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <main class="content">
        <div class="settings-card">
            <div class="settings-profile-header">
                <div class="avatar-container">
                    <div class="avatar-wrapper">JS</div>
                    <div class="edit-avatar-btn">📷</div>
                </div>
                <div class="profile-info">
                    <h3>Juan Sibug</h3>
                    <p>juan.sibug@chmsu.edu.ph</p>
                    <span style="background: #16a34a; color: white; font-size: 10px; padding: 3px 8px; border-radius: 5px; text-transform: uppercase; font-weight: 800;">IT Student</span>
                </div>
            </div>

            <div class="settings-section">
                <div class="settings-group-title">Preferences</div>
                
                <a href="#" class="settings-item">
                    <div class="item-left">
                        <div class="icon-box">👤</div>
                        <div>
                            <span class="settings-label">Account Details</span>
                            <span class="settings-desc">Update name, student ID, and major</span>
                        </div>
                    </div>
                    <span class="arrow-icon">→</span>
                </a>

                <div class="settings-item">
                    <div class="item-left">
                        <div class="icon-box">🌙</div>
                        <div>
                            <span class="settings-label">Dark Mode</span>
                            <span class="settings-desc">Easier on the eyes for debugging at night</span>
                        </div>
                    </div>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>

            <div class="settings-section">
                <div class="settings-group-title">Security</div>
                
                <a href="#" class="settings-item">
                    <div class="item-left">
                        <div class="icon-box">🔒</div>
                        <div>
                            <span class="settings-label">Password & Security</span>
                            <span class="settings-desc">Change password and manage active sessions</span>
                        </div>
                    </div>
                    <span class="arrow-icon">→</span>
                </a>

                <a href="#" class="settings-item">
                    <div class="item-left">
                        <div class="icon-box">🔔</div>
                        <div>
                            <span class="settings-label">Notification Settings</span>
                            <span class="settings-desc">Configure order and developer updates</span>
                        </div>
                    </div>
                    <span class="arrow-icon">→</span>
                </a>
            </div>

            <div class="settings-section">
                <div class="settings-group-title">Support & Info</div>
                
                <a href="#" class="settings-item">
                    <div class="item-left">
                        <div class="icon-box">🛡️</div>
                        <div>
                            <span class="settings-label">Buyer & Seller Safety</span>
                            <span class="settings-desc">Meetup tips and campus guidelines</span>
                        </div>
                    </div>
                    <span class="arrow-icon">→</span>
                </a>
            </div>

            <a href="index.php" class="logout-btn">Log Out Account</a>
            
            <p style="text-align: center; color: #94a3b8; font-size: 11px; margin-top: 30px;">
                CHMSU Wear v1.2.0 • Created by IT Green Talents
            </p>
        </div>
    </main>
</body>
</html>