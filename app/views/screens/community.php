<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community | CHMSU Wear</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { background-color: #f0fdf4; margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .community-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            display: grid;
            grid-template-columns: 1.5fr 1fr; /* 1.5 for News, 1 for Chat */
            gap: 30px;
        }

        /* --- Announcements Section --- */
        .announcement-card {
            background: white;
            padding: 25px;
            border-radius: 24px;
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            position: relative;
        }
        .announcement-card.pinned { border-left: 5px solid #16a34a; }
        .tag-official {
            background: #dcfce7; color: #166534; font-size: 10px;
            font-weight: 800; padding: 4px 10px; border-radius: 50px;
            text-transform: uppercase; margin-bottom: 10px; display: inline-block;
        }
        .announcement-card h3 { margin: 10px 0; color: #064e3b; font-size: 20px; }
        .announcement-card p { color: #475569; line-height: 1.6; font-size: 14px; }
        .meta-info { font-size: 12px; color: #94a3b8; margin-top: 15px; }

        /* --- Campus Chat Sidebar --- */
        .chat-sidebar {
            background: white;
            height: 600px;
            border-radius: 24px;
            display: flex;
            flex-direction: column;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px rgba(6, 78, 59, 0.05);
            position: sticky;
            top: 100px;
        }
        .chat-header {
            padding: 20px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .chat-header h3 { margin: 0; font-size: 18px; color: #064e3b; }
        .online-count { font-size: 12px; color: #16a34a; font-weight: 600; }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .message { max-width: 85%; }
        .message .user { font-weight: 800; font-size: 12px; color: #1e293b; display: block; margin-bottom: 4px; }
        .message .text {
            background: #f1f5f9;
            padding: 12px 16px;
            border-radius: 16px;
            font-size: 14px;
            color: #334155;
            display: inline-block;
        }
        /* Style for current user */
        .message.mine { align-self: flex-end; text-align: right; }
        .message.mine .text { background: #16a34a; color: white; }

        .chat-input-area {
            padding: 20px;
            border-top: 1px solid #f1f5f9;
            display: flex;
            gap: 10px;
        }
        .chat-input-area input {
            flex: 1;
            padding: 12px;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            outline: none;
        }
        .chat-input-area button {
            background: #16a34a; color: white; border: none;
            padding: 0 20px; border-radius: 12px; font-weight: 700; cursor: pointer;
        }

        @media (max-width: 900px) {
            .community-container { grid-template-columns: 1fr; }
            .chat-sidebar { position: relative; top: 0; }
        }
    </style>
</head>
<body>
    <?php include '../app/views/layouts/header.php'; ?>

    <main class="community-container">
        
        <section>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                <h2 style="color: #064e3b; margin: 0; font-weight: 800; font-size: 28px;">Announcements</h2>
            </div>

            <div class="announcement-card pinned">
                <span class="tag-official">📌 Admin Post</span>
                <h3>CHMSU Wear Launch Event</h3>
                <p>Welcome to the official launch of the CHMSU Wear marketplace! students are encouraged to list their pre-loved items this week for a chance to win campus prizes.</p>
                <div class="meta-info">Posted 2 hours ago • CHMSU Admin</div>
            </div>

            <div class="announcement-card">
                <span class="tag-official" style="background: #e0f2fe; color: #0369a1;">Upcoming Event</span>
                <h3>Alijis Intramurals Merch</h3>
                <p>The Engineering Council will start taking pre-orders for the Intramurals jerseys next Monday. Check the Market page for the sizing chart.</p>
                <div class="meta-info">Posted Today, 10:45 AM • ESC Council</div>
            </div>
        </section>

        <aside class="chat-sidebar">
            <div class="chat-header">
                <div>
                    <h3>Campus Chat 💬</h3>
                    <span class="online-count">● 142 Students Online</span>
                </div>
            </div>

            <div class="chat-messages" id="chat-box">
                <div class="message">
                    <span class="user">Juan_DelaCruz</span>
                    <div class="text">Anyone selling a used Drawing Table? 📐</div>
                </div>

                <div class="message mine">
                    <span class="user">Me</span>
                    <div class="text">I think I saw one on the Market page earlier for ₱500!</div>
                </div>

                <div class="message">
                    <span class="user">Maria_Green</span>
                    <div class="text">Is the Varsity Jacket restocked already?</div>
                </div>
            </div>

            <form class="chat-input-area" onsubmit="event.preventDefault(); sendMessage();">
                <input type="text" id="chat-input" placeholder="Type a message...">
                <button type="submit">Send</button>
            </form>
        </aside>

    </main>

    <script>
        function sendMessage() {
            const input = document.getElementById('chat-input');
            const chatBox = document.getElementById('chat-box');
            
            if (input.value.trim() !== "") {
                const msgDiv = document.createElement('div');
                msgDiv.className = 'message mine';
                msgDiv.innerHTML = `
                    <span class="user">Me</span>
                    <div class="text">${input.value}</div>
                `;
                chatBox.appendChild(msgDiv);
                input.value = "";
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        }
    </script>
</body>
</html>