<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { background-color: #f8fafc; margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .profile-section { max-width: 1100px; margin: 40px auto; padding: 0 20px; }

        /* Header Card */
        .profile-banner {
            background: white; border-radius: 32px; padding: 40px;
            display: flex; align-items: center; gap: 30px;
            box-shadow: 0 10px 30px rgba(6, 78, 59, 0.04);
            border: 1px solid #f1f5f9; position: relative; overflow: hidden;
        }

        /* Decorative Background Blob */
        .profile-banner::after {
            content: ''; position: absolute; top: -50px; right: -50px;
            width: 200px; height: 200px; background: #dcfce7;
            border-radius: 50%; z-index: 0; opacity: 0.5;
        }

        .profile-avatar-xl {
            width: 130px; height: 130px; background: #16a34a;
            color: white; border-radius: 35px; display: flex;
            align-items: center; justify-content: center;
            font-size: 48px; font-weight: 800; border: 6px solid #dcfce7;
            z-index: 1;
        }

        .profile-meta { flex: 1; z-index: 1; }
        .profile-meta h1 { margin: 0; color: #064e3b; font-size: 32px; font-weight: 800; }
        .profile-meta .campus-tag { 
            display: inline-block; background: #f1f5f9; color: #64748b; 
            padding: 4px 12px; border-radius: 8px; font-size: 13px; font-weight: 700;
            margin-top: 8px;
        }

        .bio-text { color: #64748b; font-size: 14px; margin-top: 15px; max-width: 500px; line-height: 1.6; }

        .stats-container { display: flex; gap: 15px; margin-top: 25px; }
        .stat-box {
            background: #ffffff; padding: 12px 20px; border-radius: 16px;
            border: 1px solid #e2e8f0; min-width: 80px; text-align: center;
        }
        .stat-box span { display: block; font-weight: 800; color: #16a34a; font-size: 20px; }
        .stat-box label { font-size: 10px; color: #94a3b8; text-transform: uppercase; font-weight: 800; }

        /* Profile Tabs */
        .profile-tabs { display: flex; gap: 30px; margin-top: 40px; border-bottom: 2px solid #e2e8f0; }
        .tab-btn {
            background: none; border: none; padding: 15px 5px;
            font-family: inherit; font-weight: 700; font-size: 16px;
            color: #94a3b8; cursor: pointer; position: relative;
        }
        .tab-btn.active { color: #16a34a; }
        .tab-btn.active::after {
            content: ''; position: absolute; bottom: -2px; left: 0;
            width: 100%; height: 3px; background: #16a34a; border-radius: 10px;
        }

        /* Listings Grid */
        .listings-grid {
            display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 25px; margin-top: 30px;
        }

        .item-card {
            background: white; border-radius: 24px; overflow: hidden;
            border: 1px solid #f1f5f9; transition: 0.3s;
        }
        .item-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        
        .item-img { width: 100%; height: 180px; background: #f8fafc; object-fit: cover; }
        
        .item-details { padding: 20px; }
        .item-price { color: #16a34a; font-weight: 800; font-size: 18px; }
        .item-name { color: #1e293b; font-weight: 700; margin: 5px 0; }
        
        .item-actions {
            display: flex; gap: 10px; margin-top: 15px; padding-top: 15px;
            border-top: 1px solid #f1f5f9;
        }
        .btn-sm { 
            flex: 1; padding: 8px; border-radius: 10px; font-size: 12px; 
            font-weight: 700; text-align: center; text-decoration: none;
        }
        .btn-edit { background: #f1f5f9; color: #475569; }
        .btn-delete { background: #fff1f2; color: #e11d48; }

        @media (max-width: 768px) {
            .profile-banner { flex-direction: column; text-align: center; }
            .stats-container { justify-content: center; }
        }
    </style>
</head>
<body>

<?php include '../app/views/layouts/header.php'; ?>

<div class="profile-section">
    <div class="profile-banner">
        <div class="profile-avatar-xl">JS</div>
        
        <div class="profile-meta">
            <h1>Juan Sibug</h1>
            <span class="campus-tag">📍 CHMSU Alijis Campus</span>
            
            <p class="bio-text">
                Mechanical Engineering student. Selling pre-loved drafting tools and campus uniforms. 
                Fast transactions and available for meetups at the Student Center.
            </p>
            
            <div class="stats-container">
                <div class="stat-box">
                    <span>12</span>
                    <label>Sold</label>
                </div>
                <div class="stat-box">
                    <span>4.9</span>
                    <label>Rating</label>
                </div>
                <div class="stat-box">
                    <span>3</span>
                    <label>Active</label>
                </div>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 10px;">
            <a href="index.php?page=sell" style="background: #16a34a; color: white; padding: 14px 25px; border-radius: 15px; font-weight: 800; text-decoration: none; text-align: center;">+ New Post</a>
            <a href="index.php?page=settings" style="background: #f1f5f9; color: #475569; padding: 14px 25px; border-radius: 15px; font-weight: 800; text-decoration: none; text-align: center; border: 1px solid #e2e8f0;">Edit Profile</a>
        </div>
    </div>

    <div class="profile-tabs">
        <button class="tab-btn active">My Listings</button>
        <button class="tab-btn">Purchases</button>
        <button class="tab-btn">Saved Items</button>
    </div>

    <div class="listings-grid">
        <div class="item-card">
            <img src="assets/img/scical.png" class="item-img" alt="Scientific Calculator">
            <div class="item-details">
                <div class="item-price">₱850</div>
                <div class="item-name">Scientific Calculator (Casio)</div>
                <p style="font-size: 12px; color: #94a3b8; margin: 5px 0;">Posted 2 days ago</p>
                
                <div class="item-actions">
                    <a href="#" class="btn-sm btn-edit">Edit</a>
                    <a href="#" class="btn-sm btn-delete">Delete</a>
                </div>
            </div>
        </div>

        </div>

    </div>

</body>
</html>