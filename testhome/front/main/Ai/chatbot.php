<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="Ai.js"  defer ></script>
</head>
<body>
    <!-- Chatbot Toggle Icon -->
    <div id="chatbot-icon" class="chatbot-icon material-icons-outlined">chat</div>
    <div class="spline-viewer">
        <spline-viewer url="https://prod.spline.design/1JBcpFmDb6Q3FNrb/scene.splinecode"></spline-viewer>
    </div>

    <!-- Chatbot -->
    <div id="chatbot" class="chatbot">
        <header>
            <h2>Chatbot</h2>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
                <span class="material-icons-outlined">smart_toy</span>
                <p>Hi there! How can I help you today?</p>
            </li>
            <li class="chat outgoing">
                <p>I'm here to assist you with anything you need.</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Enter a message..."></textarea>
            <span id="send-btn" class="material-icons-outlined">send</span>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.37/build/spline-viewer.js"></script>
    <script>
        const splineViewer = document.querySelector('spline-viewer');
        document.addEventListener('mousemove', (event) => {
            const { innerWidth, innerHeight } = window;
            const x = (event.clientX / innerWidth) * 2 - 1;
            const y = -(event.clientY / innerHeight) * 2 + 1;
            const rotationSpeed = 1;
            splineViewer.camera.rotation.x = y * rotationSpeed;
            splineViewer.camera.rotation.y = x * rotationSpeed;
        });

        window.onload = function() {
    const shadowRoot = document.querySelector('spline-viewer').shadowRoot;
    if (shadowRoot) {
        const logo = shadowRoot.querySelector('#logo');
        if (logo) logo.remove();
    }
}

    </script>
</body>
</html>

