<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Item | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { background-color: #f0fdf4; margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; }

        .main-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        .sell-card {
            background: white;
            flex: 2;
            padding: 40px;
            border-radius: 28px;
            box-shadow: 0 20px 40px rgba(6, 78, 59, 0.05);
            border: 1px solid rgba(22, 163, 74, 0.1);
        }

        /* Sidebar Side */
        .recent-listings-sidebar {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar-title {
            font-size: 16px;
            font-weight: 800;
            color: #064e3b;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .mini-item-card {
            background: white;
            padding: 15px;
            border-radius: 20px;
            display: flex;
            gap: 15px;
            align-items: center;
            border: 1px solid #e2e8f0;
            transition: 0.3s;
        }

        .mini-item-card:hover { transform: translateX(5px); border-color: #16a34a; }

        .mini-img { width: 60px; height: 60px; border-radius: 12px; background: #f1f5f9; object-fit: cover; }

        .mini-info h4 { margin: 0; font-size: 14px; color: #1e293b; }
        .mini-info p { margin: 4px 0 0; font-size: 13px; color: #16a34a; font-weight: 700; }

        /* Status Tags */
        .status-tag {
            font-size: 10px;
            padding: 2px 10px;
            border-radius: 20px;
            font-weight: 800;
            display: inline-block;
            margin-bottom: 4px;
        }
        
        /* Green for Live items */
        .tag-active { background: #dcfce7; color: #166534; }
        
        /* Yellow/Orange for Pending items */
        .tag-pending { background: #fef9c3; color: #854d0e; border: 1px solid #fde047; }

        /* Previous Form Styles */
        .sell-card h2 { font-size: 28px; font-weight: 800; color: #064e3b; margin: 0; }
        .subtitle { color: #64748b; font-size: 15px; margin-top: 8px; font-weight: 500; }
        
        .image-upload-container {
            margin-top: 25px; border: 2px dashed #e2e8f0; border-radius: 16px;
            padding: 30px; text-align: center; background: #f8fafc; cursor: pointer;
            position: relative; overflow: hidden;
        }

        #preview-img { display: none; width: 100%; height: 180px; object-fit: cover; border-radius: 12px; }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px; }
        .full-width { grid-column: span 2; }
        .form-group label { display: block; font-size: 13px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
        
        input, textarea, select {
            width: 100%; padding: 12px 16px; border: 1.5px solid #e2e8f0;
            border-radius: 12px; font-size: 14px; outline: none; box-sizing: border-box;
        }

        input:focus { border-color: #16a34a; }

        .btn-post {
            width: 100%; padding: 16px; background: #16a34a; color: white;
            border: none; border-radius: 14px; font-weight: 800; cursor: pointer; margin-top: 20px;
            transition: 0.3s;
        }
        .btn-post:hover { background: #15803d; transform: translateY(-2px); }

        @media (max-width: 900px) {
            .main-wrapper { flex-direction: column; }
            .sell-card, .recent-listings-sidebar { width: 100%; }
        }
    </style>
</head>
<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <main class="main-wrapper">
        <div class="sell-card">
            <header>
                <h2>List an Item</h2>
                <p class="subtitle">Your post will be reviewed by an admin before going live.</p>
            </header>

            <form action="index.php?page=market" method="POST" enctype="multipart/form-data">
                <div class="image-upload-container" id="upload-box" onclick="document.getElementById('item_image').click();">
                    <input type="file" name="item_image" id="item_image" accept="image/*" style="display:none;" onchange="previewFile()">
                    <div class="upload-placeholder" id="placeholder-content">
                        <span style="font-size: 32px;">📸</span>
                        <p style="margin: 5px 0; font-weight: 700; color: #475569;">Click to upload item photo</p>
                    </div>
                    <img src="" id="preview-img">
                </div>

                <div class="form-grid">
                    <div class="form-group full-width">
                        <label>Item Name</label>
                        <input type="text" name="name" placeholder="e.g. Mechanical Pencil Case" required>
                    </div>

                    <div class="form-group">
                        <label>Price (PHP)</label>
                        <input type="number" name="price" placeholder="₱ 0.00" required>
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" required>
                            <option value="" disabled selected>Select Category</option>
                            <option value="apparel">Uniforms/Apparel</option>
                            <option value="accessories">Engineering Gear</option>
                            <option value="books">Reference Books</option>
                            <option value="gadgets">Gadgets/Tools</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>Description & Condition</label>
                        <textarea name="description" rows="3" placeholder="Describe the item condition (e.g. Slightly used, like new)..."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn-post">Submit for Approval</button>
            </form>
        </div>

        <aside class="recent-listings-sidebar">
            
            <section>
                <h3 class="sidebar-title">Pending Approval</h3>
                <div class="mini-item-card">
                    <img src="assets/img/drawkit.png" class="mini-img" alt="Item">
                    <div class="mini-info">
                        <span class="status-tag tag-pending">Under Review</span>
                        <h4>Drawing Kit Set</h4>
                        <p>₱1,200</p>
                    </div>
                </div>
            </section>

            <section>
                <h3 class="sidebar-title">Live Listings</h3>
                <div class="mini-item-card">
                    <img src="assets/img/scical.png" class="mini-img" alt="Item">
                    <div class="mini-info">
                        <span class="status-tag tag-active">Live on Market</span>
                        <h4>Scientific Calculator</h4>
                        <p>₱850</p>
                    </div>
                </div>

                <div class="mini-item-card" style="margin-top: 10px;">
                    <img src="assets/img/totebag.png" class="mini-img" alt="Item">
                    <div class="mini-info">
                        <span class="status-tag tag-active">Live on Market</span>
                        <h4>Canvas Tote Bag</h4>
                        <p>₱250</p>
                    </div>
                </div>
            </section>

            <div style="background: #ecfdf5; padding: 15px; border-radius: 16px; border: 1px solid #bbf7d0; margin-top: 10px;">
                <p style="font-size: 11px; color: #065f46; margin: 0; line-height: 1.5;">
                     <b>Tip:</b> Clear photos and fair prices get approved faster by the CHMSU Admin team.
                </p>
            </div>
        </aside>
    </main>

    <script>
        function previewFile() {
            const preview = document.getElementById('preview-img');
            const file = document.getElementById('item_image').files[0];
            const content = document.getElementById('placeholder-content');
            const reader = new FileReader();
            
            reader.onloadend = () => {
                preview.src = reader.result;
                preview.style.display = "block";
                content.style.display = "none";
            }
            if (file) reader.readAsDataURL(file);
        }
    </script>
</body>
</html>